<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('halaman');
});

Route::get('register',[RegisterController::class, 'register'])->name('register');

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::view('/', 'welcome');
Route::view('/profil', 'profil');

Route::get('/register', function () {
    return view('register');
});

