<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserProfileController extends Controller
{
    // Kişisel Bilgiler Sayfasını Göster
    public function personalInfo()
    {
        $user = auth()->user(); // Giriş yapan kullanıcıyı al
        return view('KullaniciBilgileri.kisiselBilgiler', compact('user'));
    }

    // Kişisel Bilgileri Güncelle
    public function updatePersonalInfo(Request $request)
    {
        $user = auth()->user();

        // Form doğrulama
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'id_number' => 'required|string|max:11',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Profil resmini kaydetme
        if ($request->hasFile('profile_image')) {
            if ($user->profile_image) {
                Storage::delete('public/' . $user->profile_image); // Eski resmi sil
            }
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        // Diğer bilgileri güncelleme
        $user->update($request->only('name', 'surname', 'id_number', 'birth_date', 'gender'));

        return redirect()->back()->with('success', 'Kişisel bilgiler başarıyla güncellendi.');
    }

    // İletişim Bilgileri Sayfasını Göster
    public function contactInfo()
    {
        $user = auth()->user(); // Giriş yapan kullanıcıyı al
        return view('KullaniciBilgileri.iletisimBilgiler', compact('user'));
    }

    // İletişim Bilgilerini Güncelle
    public function updateContactInfo(Request $request)
    {
        $user = auth()->user();

        // Form doğrulama
        $request->validate([
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        // Bilgileri güncelle
        $user->update($request->only('phone', 'address'));

        return redirect()->back()->with('success', 'İletişim bilgileri başarıyla güncellendi.');
    }

    // Öğrenim Bilgileri Sayfasını Göster
    public function educationInfo()
    {
        $user = auth()->user(); // Giriş yapan kullanıcıyı al
        return view('KullaniciBilgileri.OgrenimBilgiler', compact('user'));
    }

    // Öğrenim Bilgilerini Güncelle
    public function updateEducationInfo(Request $request)
    {
        $user = auth()->user();

        // Form doğrulama
        $request->validate([
            'education_level' => 'required|string',
            'school_name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'graduation_date' => 'nullable|date',
        ]);

        // Bilgileri güncelle
        $user->update($request->only('education_level', 'school_name', 'department', 'graduation_date'));

        return redirect()->back()->with('success', 'Öğrenim bilgileri başarıyla güncellendi.');
    }
}
