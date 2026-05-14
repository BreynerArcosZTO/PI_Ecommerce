<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ManagerInventoryController extends Controller
{
    public function index(): View
    {
        $products = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
            ->leftJoin('inventory', 'products.id', '=', 'inventory.product_id')
            ->select(
                'products.*',
                'categories.name as category_name',
                'brands.name as brand_name',
                'inventory.stock',
                'inventory.min_stock',
                'inventory.max_stock'
            )
            ->orderByDesc('products.created_at')
            ->get();

        $categories = DB::table('categories')->orderBy('name')->get();
        $brands = DB::table('brands')->orderBy('name')->get();

        $stats = [
            'total' => $products->count(),
            'active' => $products->where('status', 'active')->count(),
            'inactive' => $products->where('status', 'inactive')->count(),
            'low_stock' => $products
                ->filter(fn ($product) => (int) ($product->stock ?? 0) <= (int) ($product->min_stock ?? 0))
                ->count(),
        ];

        return view('manager.inventory', compact('products', 'categories', 'brands', 'stats'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validateProduct($request);

        DB::transaction(function () use ($data): void {
            $productId = DB::table('products')->insertGetId([
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'] ?? null,
                'name' => $data['name'],
                'slug' => $this->uniqueSlug($data['name']),
                'sku' => $data['sku'],
                'short_description' => $data['short_description'] ?? null,
                'description' => $data['description'] ?? null,
                'price' => $data['price'],
                'compare_price' => $data['compare_price'] ?? null,
                'cost' => $data['cost'] ?? null,
                'is_featured' => $data['is_featured'] ?? false,
                'status' => $data['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('inventory')->insert([
                'product_id' => $productId,
                'stock' => $data['stock'],
                'min_stock' => $data['min_stock'],
                'max_stock' => $data['max_stock'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if (! empty($data['image_path'])) {
                DB::table('product_images')->insert([
                    'product_id' => $productId,
                    'image_path' => $data['image_path'],
                    'alt_text' => $data['name'],
                    'is_primary' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });

        return back()->with('status', 'Producto creado correctamente.');
    }

    public function update(Request $request, int $product): RedirectResponse
    {
        $data = $this->validateProduct($request, $product);

        DB::transaction(function () use ($data, $product): void {
            DB::table('products')->where('id', $product)->update([
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'] ?? null,
                'name' => $data['name'],
                'sku' => $data['sku'],
                'short_description' => $data['short_description'] ?? null,
                'description' => $data['description'] ?? null,
                'price' => $data['price'],
                'compare_price' => $data['compare_price'] ?? null,
                'cost' => $data['cost'] ?? null,
                'is_featured' => $data['is_featured'] ?? false,
                'status' => $data['status'],
                'updated_at' => now(),
            ]);

            DB::table('inventory')->updateOrInsert(
                ['product_id' => $product],
                [
                    'stock' => $data['stock'],
                    'min_stock' => $data['min_stock'],
                    'max_stock' => $data['max_stock'] ?? null,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );

            if (! empty($data['image_path'])) {
                DB::table('product_images')->where('product_id', $product)->update(['is_primary' => false]);
                DB::table('product_images')->insert([
                    'product_id' => $product,
                    'image_path' => $data['image_path'],
                    'alt_text' => $data['name'],
                    'is_primary' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });

        return back()->with('status', 'Producto actualizado correctamente.');
    }

    public function destroy(int $product): RedirectResponse
    {
        DB::table('products')->where('id', $product)->update([
            'status' => 'inactive',
            'updated_at' => now(),
        ]);

        return back()->with('status', 'Producto desactivado correctamente.');
    }

    public function storeCategory(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
            'description' => ['nullable', 'string'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        DB::table('categories')->insert([
            'name' => $data['name'],
            'slug' => $this->uniqueSlug($data['name'], 'categories'),
            'description' => $data['description'] ?? null,
            'status' => $data['status'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('status', 'Categoria creada correctamente.');
    }

    public function toggleCategory(int $category): RedirectResponse
    {
        $current = DB::table('categories')->where('id', $category)->firstOrFail();

        DB::table('categories')->where('id', $category)->update([
            'status' => $current->status === 'active' ? 'inactive' : 'active',
            'updated_at' => now(),
        ]);

        return back()->with('status', 'Categoria actualizada correctamente.');
    }

    private function validateProduct(Request $request, ?int $productId = null): array
    {
        return $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['nullable', 'exists:brands,id'],
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['required', 'string', 'max:100', Rule::unique('products', 'sku')->ignore($productId)],
            'short_description' => ['nullable', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'compare_price' => ['nullable', 'numeric', 'min:0'],
            'cost' => ['nullable', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'min_stock' => ['required', 'integer', 'min:0'],
            'max_stock' => ['nullable', 'integer', 'min:0'],
            'image_path' => ['nullable', 'url', 'max:500'],
            'is_featured' => ['nullable', 'boolean'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);
    }

    private function uniqueSlug(string $name, string $table = 'products'): string
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $counter = 2;

        while (DB::table($table)->where('slug', $slug)->exists()) {
            $slug = "{$baseSlug}-{$counter}";
            $counter++;
        }

        return $slug;
    }
}
