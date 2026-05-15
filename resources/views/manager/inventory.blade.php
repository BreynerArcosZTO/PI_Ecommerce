<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de Inventario</title>
    <link rel="icon" type="image/png" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body id="inicio">
    <div class="main-container">
        <header class="navbar" id="navbar">
            <div class="logo">
                <div class="logo-circle">K</div>
            </div>
            <nav class="nav-links">
                <a href="{{ url('/') }}">Inicio</a>
                <a href="{{ route('dashboard') }}">Mi cuenta</a>
                <a href="{{ route('manager.inventory.index') }}">Inventario</a>
                <a href="{{ route('contacto') }}">Contacto</a>
            </nav>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="manager-ghost-button" type="submit">
                    <ion-icon name="exit-outline"></ion-icon>
                    Salir
                </button>
            </form>
        </header>

        <section class="manager-hero">
            <div>
                <p class="subtitle">Manager / Administrador</p>
                <h1>Modulo de Administracion de Inventario</h1>
                <p class="description">Gestiona productos, categorias, disponibilidad y alertas de stock minimo.</p>
            </div>
            <a class="btn-primary" href="#nuevo-producto">Agregar producto</a>
        </section>

        <main class="manager-shell">
            @if (session('status'))
                <div class="manager-alert">
                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="manager-alert manager-alert-error">
                    <ion-icon name="alert-circle-outline"></ion-icon>
                    Revisa los campos marcados. {{ $errors->first() }}
                </div>
            @endif

            <section class="manager-stats">
                <div class="manager-stat">
                    <span>Total productos</span>
                    <strong>{{ $stats['total'] }}</strong>
                </div>
                <div class="manager-stat">
                    <span>Activos</span>
                    <strong>{{ $stats['active'] }}</strong>
                </div>
                <div class="manager-stat">
                    <span>Inactivos</span>
                    <strong>{{ $stats['inactive'] }}</strong>
                </div>
                <div class="manager-stat manager-stat-warning">
                    <span>Stock bajo</span>
                    <strong>{{ $stats['low_stock'] }}</strong>
                </div>
            </section>

            <section class="manager-grid-layout">
                <div class="manager-panel" id="nuevo-producto">
                    <div class="manager-panel-header">
                        <div>
                            <p class="manager-kicker">Agregar Nuevo Producto</p>
                            <h2>Nuevo producto</h2>
                        </div>
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </div>

                    <form class="manager-form" method="POST" action="{{ route('manager.products.store') }}">
                        @csrf
                        @include('manager.partials.product-form', ['product' => null])
                        <button class="manager-primary-button" type="submit">
                            <ion-icon name="save-outline"></ion-icon>
                            Crear producto
                        </button>
                    </form>
                </div>

                <aside class="manager-panel">
                    <div class="manager-panel-header">
                        <div>
                            <p class="manager-kicker">Gestionar Categorias</p>
                            <h2>Categorias</h2>
                        </div>
                        <ion-icon name="pricetags-outline"></ion-icon>
                    </div>

                    <form class="manager-form compact" method="POST" action="{{ route('manager.categories.store') }}">
                        @csrf
                        <label>
                            Nombre
                            <input name="name" type="text" required placeholder="Skincare">
                        </label>
                        <label>
                            Descripcion
                            <textarea name="description" rows="2" placeholder="Linea o coleccion"></textarea>
                        </label>
                        <label>
                            Estado
                            <select name="status" required>
                                <option value="active">Activa</option>
                                <option value="inactive">Inactiva</option>
                            </select>
                        </label>
                        <button class="manager-secondary-button" type="submit">
                            <ion-icon name="add-outline"></ion-icon>
                            Crear categoria
                        </button>
                    </form>

                    <div class="manager-category-list">
                        @forelse ($categories as $category)
                            <div class="manager-category-row">
                                <div>
                                    <strong>{{ $category->name }}</strong>
                                    <span>{{ $category->status === 'active' ? 'Activa' : 'Inactiva' }}</span>
                                </div>
                                <form method="POST" action="{{ route('manager.categories.toggle', $category->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="manager-icon-button" type="submit" title="Cambiar estado">
                                        <ion-icon name="{{ $category->status === 'active' ? 'pause-outline' : 'play-outline' }}"></ion-icon>
                                    </button>
                                </form>
                            </div>
                        @empty
                            <p class="manager-empty">Aun no hay categorias registradas.</p>
                        @endforelse
                    </div>
                </aside>
            </section>

            <section class="manager-panel manager-products-panel">
                <div class="manager-panel-header">
                    <div>
                        <p class="manager-kicker">Visualizar Catalogo de Productos</p>
                        <h2>Productos registrados</h2>
                    </div>
                    <ion-icon name="cube-outline"></ion-icon>
                </div>

                <div class="manager-table">
                    <div class="manager-table-head">
                        <span>Producto</span>
                        <span>Categoria</span>
                        <span>Precio</span>
                        <span>Stock</span>
                        <span>Estado</span>
                        <span>Acciones</span>
                    </div>

                    @forelse ($products as $product)
                        <details class="manager-product-row">
                            <summary>
                                <span>
                                    <strong>{{ $product->name }}</strong>
                                    <small>SKU {{ $product->sku }} | {{ $product->brand_name ?? 'Sin marca' }}</small>
                                </span>
                                <span>{{ $product->category_name }}</span>
                                <span>${{ number_format($product->price, 0, ',', '.') }}</span>
                                <span class="{{ (int) ($product->stock ?? 0) <= (int) ($product->min_stock ?? 0) ? 'stock-low' : '' }}">
                                    {{ $product->stock ?? 0 }} / min {{ $product->min_stock ?? 0 }}
                                </span>
                                <span class="manager-status {{ $product->status }}">{{ $product->status === 'active' ? 'Activo' : 'Inactivo' }}</span>
                                <span class="manager-summary-actions">
                                    <ion-icon name="create-outline"></ion-icon>
                                    Editar
                                </span>
                            </summary>

                            <div class="manager-row-editor">
                                <form class="manager-form" method="POST" action="{{ route('manager.products.update', $product->id) }}">
                                    @csrf
                                    @method('PUT')
                                    @include('manager.partials.product-form', ['product' => $product])
                                    <button class="manager-primary-button" type="submit">
                                        <ion-icon name="save-outline"></ion-icon>
                                        Actualizar informacion
                                    </button>
                                </form>

                                <form method="POST" action="{{ route('manager.products.destroy', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="manager-danger-button" type="submit">
                                        <ion-icon name="trash-outline"></ion-icon>
                                        Eliminar / Desactivar producto
                                    </button>
                                </form>
                            </div>
                        </details>
                    @empty
                        <p class="manager-empty">Aun no hay productos para administrar.</p>
                    @endforelse
                </div>
            </section>
        </main>
    </div>
</body>

</html>
