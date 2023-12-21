<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Menampilkan formulir registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Menangani proses registrasi
Route::post('/register', [AuthController::class, 'register']);


Route::get('/', [TrashController::class, 'index']);

//logout//
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// File: routes/web.php


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/layanan', [ServiceController::class, 'index'])->name('services');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');


// Rute untuk menampilkan formulir penambahan sampah

Route::get('/trash/create', [TrashController::class, 'create'])->name('trash.create');


// Rute untuk menyimpan data sampah dari formulir

Route::post('/trash/store', [TrashController::class, 'store'])->name('trash.store');


//rute gambar//

use App\Http\Controllers\ImageController;

// routes/web.php

use App\Http\Controllers\YourController;

Route::get('/your-method', [YourController::class, 'yourMethod']);

