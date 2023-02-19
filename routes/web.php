<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tambah_userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\CetakController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('page.dashboard');
    })->name('dashboard');
    Route::resource('user', Tambah_userController::class);
    Route::resource('buku', BookController::class);
    Route::resource('rak', RakController::class);
    Route::get('documentation', [DocumentationController::class, 'index'])->name('documentation');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login_handling');
Route::delete('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_handling'])->name('register_handling');