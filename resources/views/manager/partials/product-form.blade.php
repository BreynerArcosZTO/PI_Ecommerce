<div class="manager-form-grid">
    <label>
        Nombre
        <input name="name" type="text" value="{{ old('name', $product->name ?? '') }}" required placeholder="Protector solar Tocobo">
    </label>
    <label>
        SKU
        <input name="sku" type="text" value="{{ old('sku', $product->sku ?? '') }}" required placeholder="SKU-001">
    </label>
    <label>
        Categoria
        <select name="category_id" required>
            <option value="">Seleccionar</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected((string) old('category_id', $product->category_id ?? '') === (string) $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </label>
    <label>
        Marca
        <select name="brand_id">
            <option value="">Sin marca</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" @selected((string) old('brand_id', $product->brand_id ?? '') === (string) $brand->id)>
                    {{ $brand->name }}
                </option>
            @endforeach
        </select>
    </label>
    <label>
        Precio
        <input name="price" type="number" min="0" step="0.01" value="{{ old('price', $product->price ?? '') }}" required>
    </label>
    <label>
        Precio comparacion
        <input name="compare_price" type="number" min="0" step="0.01" value="{{ old('compare_price', $product->compare_price ?? '') }}">
    </label>
    <label>
        Costo
        <input name="cost" type="number" min="0" step="0.01" value="{{ old('cost', $product->cost ?? '') }}">
    </label>
    <label>
        Stock
        <input name="stock" type="number" min="0" step="1" value="{{ old('stock', $product->stock ?? 0) }}" required>
    </label>
    <label>
        Stock minimo
        <input name="min_stock" type="number" min="0" step="1" value="{{ old('min_stock', $product->min_stock ?? 0) }}" required>
    </label>
    <label>
        Stock maximo
        <input name="max_stock" type="number" min="0" step="1" value="{{ old('max_stock', $product->max_stock ?? '') }}">
    </label>
    <label>
        Estado
        <select name="status" required>
            <option value="active" @selected(old('status', $product->status ?? 'active') === 'active')>Activo</option>
            <option value="inactive" @selected(old('status', $product->status ?? 'active') === 'inactive')>Inactivo</option>
        </select>
    </label>
    <label class="manager-checkbox">
        <input name="is_featured" type="checkbox" value="1" @checked(old('is_featured', $product->is_featured ?? false))>
        Producto destacado
    </label>
    <label class="manager-form-wide">
        URL de imagen principal
        <input name="image_path" type="url" value="{{ old('image_path') }}" placeholder="https://...">
    </label>
    <label class="manager-form-wide">
        Descripcion corta
        <input name="short_description" type="text" value="{{ old('short_description', $product->short_description ?? '') }}" placeholder="Beneficio principal del producto">
    </label>
    <label class="manager-form-wide">
        Descripcion
        <textarea name="description" rows="3" placeholder="Detalle del producto">{{ old('description', $product->description ?? '') }}</textarea>
    </label>
</div>
