<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

// Esta ruta lleva directamente a detalle producto
Route::get('/producto/detalle', function () {
    return view('shop.detalle_producto'); 
});


