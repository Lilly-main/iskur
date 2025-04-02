<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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




Route::get('/issizlik-odenegi', function () {
    return view('issizlik_odenegi.issizlik_odenegi');
});

