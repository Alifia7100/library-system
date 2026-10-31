<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');
});
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])
->middleware('auth')
->name('logout');

Route::middleware('auth')->group(function () {
// Route buku yang hanya boleh diakses setelah login.
    Route::resource('books', BookController::class);
    });

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/books', function () {
 // return 'Daftar Buku';
// return view('books.index');
//});

Route::resource('books', BookController::class);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);