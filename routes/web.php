<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\issizlik_odenegi\IssizlikOdenegiController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\UserDocumentController;
use App\Http\Controllers\JobPostingController;

// Genel Rotalar
// Bu rotalar tüm kullanıcılar tarafından erişilebilir.
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login_process', [LoginController::class, 'login_process'])->name('login_process');
Route::post('/register_process', [LoginController::class, 'register_process'])->name('mahmut');

// Yönetici Rotaları
// Bu rotalar yalnızca yönetici yetkisine sahip kullanıcılar tarafından erişilebilir.
Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard/job-listings', [JobPostingController::class, 'userJobListingsAjax'])->name('dashboard.jobListingsAjax');
});

// İş İlanları
// İş ilanları sayfasına erişim rotası.
Route::get('/isilanlari', function () {
    return view('is_ilanlari.isilanlari');
})->name('isilanlari');
Route::get('/is-ilanlari', [JobPostingController::class, 'index'])->name('is_ilanlari.index');

// İşsizlik Ödeneği
// İşsizlik ödeneği ile ilgili işlemler için rotalar.
Route::get('/issizlik_odenegi', [IssizlikOdenegiController::class, 'show'])->name('issizlik_odenegi');
Route::post('/issizlik_odenegi', [IssizlikOdenegiController::class, 'show'])->name('issizlik_odenegi');
Route::get('/issizlik_odenegi/fesih', [IssizlikOdenegiController::class, 'showFesihForm'])->name('issizlik_odenegi.fesih');
Route::post('/issizlik_odenegi/fesih', [IssizlikOdenegiController::class, 'storeFesih'])->name('issizlik_odenegi.fesih.store');

// İlçe Bilgileri
// Şehirlere bağlı ilçeleri getiren rota.
Route::get('/get-districts/{cityId}', [DistrictController::class, 'getDistricts'])->name('get.districts');

// Meslek Bilgileri
// Mesleklerle ilgili işlemler için rotalar.
Route::get('/import-professions', [ProfessionController::class, 'import'])->name('import.professions');
Route::get('/import-professions-to-db', [ProfessionController::class, 'importToDatabase'])->name('professions.importToDatabase');
Route::get('/import-professions-from-csv', [ProfessionController::class, 'importFromCsv'])->name('professions.importFromCsv');
Route::get('/meslekler', [ProfessionController::class, 'index'])->name('professions.index');
Route::post('/professions', [ProfessionController::class, 'store'])->name('professions.store');
Route::get('/professions/search', [ProfessionController::class, 'search'])->name('professions.search');
Route::get('/professions/user', [ProfessionController::class, 'getUserProfessions'])->name('professions.getUserProfessions');
Route::get('/meslek-bilgileri', function () {
    return view('KullaniciBilgileri.MeslekBilgiler');
})->name('meslekBilgileri');

// Meslekler (Genel Liste)
Route::get('/professions', [ProfessionController::class, 'index'])->name('professions.index');

// Kullanıcı Meslek Bilgileri
Route::get('/profile/profession', [ProfessionController::class, 'userProfession'])->name('profile.profession');
Route::post('/profile/profession', [ProfessionController::class, 'storeUserProfession'])->name('profile.profession.store');

// Kullanıcı Meslek Silme
Route::delete('/profile/profession/{profession}', [ProfessionController::class, 'deleteUserProfession'])->name('profile.profession.delete');

// Kullanıcı Meslek Güncelleme
Route::put('/profile/profession/{profession}', [ProfessionController::class, 'updateUserProfession'])->name('profile.profession.update');

// Kullanıcıya Özel Rotalar
// Bu rotalar yalnızca giriş yapmış kullanıcılar tarafından erişilebilir.
Route::middleware(['auth'])->group(function () {
    // Kişisel Bilgiler
    Route::get('/profile/personal', [UserProfileController::class, 'personalInfo'])->name('user.personalInfo');
    Route::post('/profile/personal', [UserProfileController::class, 'updatePersonalInfo'])->name('user.updatePersonalInfo');

    // İletişim Bilgileri
    Route::get('/profile/contact', [UserProfileController::class, 'contactInfo'])->name('user.contactInfo');
    Route::post('/profile/contact', [UserProfileController::class, 'updateContactInfo'])->name('user.updateContactInfo');

    // Eğitim Bilgileri
    Route::get('/profile/education', [UserProfileController::class, 'educationInfo'])->name('user.educationInfo');
    Route::post('/profile/education', [UserProfileController::class, 'updateEducationInfo'])->name('user.updateEducationInfo');

    // Kullanıcı Belgeleri
    Route::get('/profile/documents', [UserDocumentController::class, 'index'])->name('user.documents');
    Route::post('/profile/documents', [UserDocumentController::class, 'store'])->name('user.documents.store');

    // İş ilanına başvuru
    Route::post('/is-ilanlari/{id}/apply', [JobPostingController::class, 'apply'])->name('job.apply');

    // İş başvurularım
    Route::get('/is-basvurularim', [JobPostingController::class, 'myApplications'])->name('is_basvurularim');
});


