<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
            ->leftJoin('inventory', 'products.id', '=', 'inventory.product_id')
            ->select(
                'products.*',
                'categories.name as category_name',
                'brands.name as brand_name',
                'inventory.stock'
            )
            ->where('products.id', $id)
            ->where('products.status', 'active')
            ->first();

        if (!$product) {
            abort(404);
        }

        $images = DB::table('product_images')
            ->where('product_id', $id)
            ->orderByDesc('is_primary')
            ->get();

        return view('shop.detalle_producto', compact('product', 'images'));
    }
}
