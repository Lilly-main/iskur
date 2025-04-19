<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\issizlik_odenegi\IssizlikOdenegiController;

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
});

Route::get('/issizlik_odenegi', [IssizlikOdenegiController::class, 'show'])->name('issizlik_odenegi');
Route::post('/issizlik_odenegi', [IssizlikOdenegiController::class, 'show'])->name('issizlik_odenegi');
Route::get('/issizlik_odenegi/fesih', [IssizlikOdenegiController::class, 'showFesihForm'])->name('issizlik_odenegi.fesih');
Route::get('/get-districts/{cityId}', [IssizlikOdenegiController::class, 'getDistricts'])->name('get.districts');


