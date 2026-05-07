<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller

{
    public function index()
    {
        $productos = Producto::all();

        return view('home', compact('productos'));
    }
}
