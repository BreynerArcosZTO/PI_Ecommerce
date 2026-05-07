<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('/cuenta', function () {
    return view('cuenta');
})->name('cuenta');
