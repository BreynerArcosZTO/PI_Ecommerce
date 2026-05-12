<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Esta ruta lleva directamente a detalle producto
Route::get('/producto/{id}', [ProductController::class, 'show'])->name('shop.detalle_producto');

/* Route::get('/producto/detalle', function () {
    return view('shop.detalle_producto');
}); */

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/cuenta', function () {
    return view('cuenta');
})->name('cuenta');

