<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProfessionsImport;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Profession;
use Illuminate\Support\Facades\Auth;

class ProfessionController extends Controller
{
    public function import()
    {
        Excel::import(new ProfessionsImport, storage_path('app/meslekler.xlsx'));

        return response()->json(['message' => 'Meslekler başarıyla eklendi!']);
    }

    public function importToDatabase()
    {
        $filePath = storage_path('app/meslekler.xlsx'); // Excel dosyasının yolu

        // Excel dosyasını yükle
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        // Meslekleri veritabanına kaydet
        foreach ($rows as $row) {
            if (!empty($row[0])) { // Meslek adı boş değilse
                Profession::updateOrCreate(['name' => $row[0]]);
            }
        }

        return response()->json(['message' => 'Meslekler başarıyla veritabanına aktarıldı!']);
    }

    public function importFromCsv()
    {
        $filePath = storage_path('app/meslekler.csv'); // CSV dosyasının yolu

        // Dosyanın varlığını kontrol et
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'CSV dosyası bulunamadı: ' . $filePath], 404);
        }

        // CSV dosyasını aç ve oku
        if (($handle = fopen($filePath, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if (!empty($data[0])) { // Meslek adı boş değilse
                    Profession::updateOrCreate(['name' => $data[0]]);
                }
            }
            fclose($handle);
        }

        return response()->json(['message' => 'Meslekler başarıyla veritabanına aktarıldı!']);
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
        $query = $request->input('q');

        // En az 3 harf kontrolü
        if (strlen($query) < 3) {
            return response()->json([]);
        }

        // Meslekleri filtrele
        $professions = Profession::where('name', 'LIKE', "%$query%")
            ->take(10) // Maksimum 10 sonuç döndür
            ->get();

        return response()->json($professions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'profession' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        try {
            // Meslek bilgilerini kaydet veya mevcut mesleği al
            $profession = Profession::firstOrCreate(['name' => $request->input('profession')]);

            // Kullanıcıya meslek ekle
            $user = Auth::user();
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
}