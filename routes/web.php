<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManagerInventoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producto/{id}', [ProductController::class, 'show'])->name('shop.detalle_producto');

Route::get('/carrito', function () {
    return view('shop.carrito');
})->name('carrito');

Route::get('/pagos', function () {
    return view('shop.pagos');
})->name('pagos');

Route::post('/pagos/confirmar', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/pagos/confirmacion/{id}', [PaymentController::class, 'confirmation'])->name('payment.confirmation');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/cuenta', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('register');
})->name('cuenta');

Route::get('/dashboard', function () {
    return view('miCuenta');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'manager'])->prefix('manager')->name('manager.')->group(function () {
    Route::get('/inventario', [ManagerInventoryController::class, 'index'])->name('inventory.index');
    Route::post('/productos', [ManagerInventoryController::class, 'store'])->name('products.store');
    Route::put('/productos/{product}', [ManagerInventoryController::class, 'update'])->name('products.update');
    Route::delete('/productos/{product}', [ManagerInventoryController::class, 'destroy'])->name('products.destroy');
    Route::post('/categorias', [ManagerInventoryController::class, 'storeCategory'])->name('categories.store');
    Route::patch('/categorias/{category}/estado', [ManagerInventoryController::class, 'toggleCategory'])->name('categories.toggle');
});

require __DIR__.'/auth.php';
