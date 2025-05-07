<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\issizlik_odenegi\IssizlikOdenegiController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProfessionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class ,'login'])->name('login');
Route::get('/register', [LoginController::class ,'register'])->name('register');
Route::post('/login_process', [LoginController::class ,'login_process'])->name('login_process');
Route::post('/register_process', [LoginController::class ,'register_process'])->name('mahmut');

Route::group(['middleware' => 'admin'], function()
{
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/isilanlari', function () {
    return view('is_ilanlari.isilanlari');
    })->name('isilanlari');


Route::get('/issizlik_odenegi', [IssizlikOdenegiController::class, 'show'])->name('issizlik_odenegi');
Route::post('/issizlik_odenegi', [IssizlikOdenegiController::class, 'show'])->name('issizlik_odenegi');
Route::get('/issizlik_odenegi/fesih', [IssizlikOdenegiController::class, 'showFesihForm'])->name('issizlik_odenegi.fesih');
Route::get('/get-districts/{cityId}', [DistrictController::class, 'getDistricts'])->name('get.districts');
Route::get('/import-professions', [ProfessionController::class, 'import'])->name('import.professions');
Route::get('/import-professions-to-db', [ProfessionController::class, 'importToDatabase'])->name('professions.importToDatabase');
Route::get('/import-professions-from-csv', [ProfessionController::class, 'importFromCsv'])->name('professions.importFromCsv');
Route::get('/meslekler', [ProfessionController::class, 'index'])->name('professions.index');
Route::post('/professions', [ProfessionController::class, 'store'])->name('professions.store');
Route::get('/professions/search', [ProfessionController::class, 'search'])->name('professions.search');

// Add route for getting user professions
Route::get('/professions/user', [ProfessionController::class, 'getUserProfessions'])->name('professions.getUserProfessions');

Route::middleware(['auth'])->group(function () {
    // Kişisel Bilgiler Sayfasını Göster
    Route::get('/profile/personal', [UserProfileController::class, 'personalInfo'])->name('user.personalInfo');

    // Kişisel Bilgileri Güncelle
    Route::post('/profile/personal', [UserProfileController::class, 'updatePersonalInfo'])->name('user.updatePersonalInfo');

    // İletişim Bilgileri Sayfasını Göster
    Route::get('/profile/contact', [UserProfileController::class, 'contactInfo'])->name('user.contactInfo');

    // İletişim Bilgilerini Güncelle
    Route::post('/profile/contact', [UserProfileController::class, 'updateContactInfo'])->name('user.updateContactInfo');

    // Öğrenim Bilgileri Sayfasını Göster
    Route::get('/profile/education', [UserProfileController::class, 'educationInfo'])->name('user.educationInfo');

    // Öğrenim Bilgilerini Güncelle
    Route::post('/profile/education', [UserProfileController::class, 'updateEducationInfo'])->name('user.updateEducationInfo');
});


