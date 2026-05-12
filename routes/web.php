<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producto/{id}', [ProductController::class, 'show'])->name('shop.detalle_producto');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/cuenta', function () {
    return Auth::check()
        ? redirect()->route('mi-cuenta')
        : redirect()->route('register');
})->name('cuenta');

Route::view('/mi-cuenta', 'miCuenta')
    ->middleware(['auth', 'verified'])
    ->name('mi-cuenta');

Route::redirect('/miCuenta', '/mi-cuenta');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
