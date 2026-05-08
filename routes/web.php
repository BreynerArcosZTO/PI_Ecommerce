<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

// Esta ruta lleva directamente a detalle producto
Route::get('/producto/detalle', function () {
    return view('shop.detalle_producto'); 
});


=======
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/cuenta', function () {
    return view('cuenta');
})->name('cuenta');
>>>>>>> origin/jhon
