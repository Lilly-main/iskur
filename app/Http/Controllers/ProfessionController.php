<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;
use Illuminate\Support\Facades\Auth;

class ProfessionController extends Controller
{
    public function import()
    {
        $filePath = storage_path('app/meslekler.csv');
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'CSV dosyası bulunamadı: ' . $filePath], 404);
        }
        $rowCount = 0;
        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if (!empty($data[0])) {
                    Profession::updateOrCreate(['name' => $data[0]]);
                    $rowCount++;
                }
            }
            fclose($handle);
        }
        return response()->json(['message' => 'Meslekler başarıyla eklendi!', 'count' => $rowCount]);
    }

    public function index()
    {
        $filePath = storage_path('app/meslekler.csv'); // CSV dosyasının yolu

        // Dosyanın varlığını kontrol et
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'CSV dosyası bulunamadı: ' . $filePath], 404);
        }

        // CSV dosyasını aç ve oku
        $professions = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if (!empty($data[0])) { // Meslek adı boş değilse
                    $professions[] = ['name' => $data[0]];
                }
            }
            fclose($handle);
        }

        // Blade dosyasına meslekleri gönder
        return view('KullaniciBilgileri.MeslekBilgiler', compact('professions'));
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $results = Profession::where('name', 'like', "%$q%")
            ->select('id', 'name')
            ->limit(20)
            ->get();
        return response()->json($results);
    }

    public function store(Request $request)
    {
        $request->validate([
            'profession' => 'required|string|max:255|unique:professions,name',
            'start_date' => 'required|date|before_or_equal:today',
            'end_date' => 'nullable|date|after_or_equal:start_date|before_or_equal:today',
        ]);

        try {
            // Meslek bilgilerini kaydet veya mevcut mesleği al
            $profession = Profession::firstOrCreate(['name' => $request->input('profession')]);

            // Kullanıcıya meslek ekle
            $user = Auth::user();

            $existingProfession = $user->professions()->wherePivot('profession_id', $profession->id)
                ->wherePivot('start_date', $request->input('start_date'))
                ->wherePivot('end_date', $request->input('end_date'))
                ->first();

            if ($existingProfession) {
                return redirect()->route('profile.profession')->with('error', 'Bu meslek ve tarih kombinasyonu zaten eklenmiş.');
            }

            $user->professions()->attach($profession->id, [
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
            ]);

            return response()->json([
                'success' => true,
                'profession' => $profession
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getUserProfessions()
    {
        $user = Auth::user();
        $professions = $user->professions()->withPivot('start_date', 'end_date')->get();

        return response()->json($professions);
    }

    public function userProfession()
    {
        $user = Auth::user();
        $professions = $user->professions()->withPivot('start_date', 'end_date', 'name')->get();

        return view('KullaniciBilgileri.MeslekBilgiler', compact('professions'));
    }

    public function storeUserProfession(Request $request)
    {
        $request->validate([
            'profession' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        try {
            $user = Auth::user();
            $profession = Profession::firstOrCreate(['name' => $request->input('profession')]);

            $user->professions()->attach($profession->id, [
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'name' => $request->input('profession'),
            ]);

            return redirect()->route('profile.profession')->with('success', 'Meslek bilgisi başarıyla eklendi.');
        } catch (\Exception $e) {
            return redirect()->route('profile.profession')->with('error', 'Meslek bilgisi eklenirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function deleteUserProfession(Profession $profession)
    {
        try {
            $user = Auth::user();

            // Kullanıcıdan mesleği kaldır
            $user->professions()->detach($profession->id);

            return redirect()->route('profile.profession')->with('success', 'Meslek başarıyla silindi.');
        } catch (\Exception $e) {
            return redirect()->route('profile.profession')->with('error', 'Meslek silinirken bir hata oluştu: ' . $e->getMessage());
        }
    }

    public function updateUserProfession(Request $request, Profession $profession)
    {
        $request->validate([
            'start_date' => 'required|date|before_or_equal:today',
            'end_date' => 'nullable|date|after_or_equal:start_date|before_or_equal:today',
        ]);

        try {
            $user = Auth::user();

            // Güncelleme işlemi
            $user->professions()->updateExistingPivot($profession->id, [
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
            ]);

            return redirect()->route('profile.profession')->with('success', 'Meslek bilgisi başarıyla güncellendi.');
        } catch (\Exception $e) {
            return redirect()->route('profile.profession')->with('error', 'Meslek bilgisi güncellenirken bir hata oluştu: ' . $e->getMessage());
        }
    }
}