<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catologo Productos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="icon" type="image/png" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
</head>
<style>
    .payment-card {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 54px;
        border: 1.5px solid rgba(255, 145, 164, 0.22);
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.72);
        color: #444;
        cursor: pointer;
        font-size: 0.88rem;
        font-weight: 600;
        transition: 0.2s ease;
        text-align: center;
        padding: 10px;
    }

    .payment-options {
        display: grid;
        grid-template-columns: 1fr;
        gap: 12px;
        margin-top: 26px;
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<body>
    <div class="main-container">
        <!-- Header -->
        <header class="navbar" id="navbar">
            <div class="logo">
                <div class="logo-circle">
                    <img src="{{ asset('Eterna-Koreana-icon.png') }}" alt="Logo"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <nav class="nav-links">
                <a href="{{ url('/') }}">Inicio</a>
                <a href="#categorias">Colecciones</a>
                <a href="#">Ofertas</a>
                <a href="{{ route('contacto') }}">Contacto</a>
                @guest
                    <a href="{{ route('login') }}">Iniciar sesion</a>
                    <a href="{{ route('register') }}">Registrarse</a>
                @else
                    <a href="{{ route('dashboard') }}">Mi cuenta</a>
                @endguest
            </nav>

            <div class="cart-icon" onclick="window.location.href='/carrito'" style="cursor: pointer;">
                <ion-icon name="bag-outline"></ion-icon>
                <span class="cart-badge">0</span>
            </div>
        </header>

        <!-- Marcas Section -->
        <section class="categories-section" id="categorias">
            <div class="section-header">
                <h1>¡Nuestras Marcas!</h1>
                <div class="header-line"></div>
                <a href="#categorias" class="btn-outline">Ver todo</a>
            </div>

            <div class="categories-grid">
                <!-- Marcas -->
                <div class="category-item">
                    <a href="https://tocobo.com.co/"
                        style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center; width: 100%;">
                        <div class="cat-card color-green">
                            <img src="https://arumi.cl/cdn/shop/files/TOCOBO_LOGO.png?v=1724175406&width=750"
                                alt="Logo Tocobo" style="width: 300px; height: auto;">
                        </div>
                        <span>Tocobo</span>
                    </a>
                </div>
                <!-- Marcas -->
                <div class="category-item">
                    <a href="https://luxeny.cl/"
                        style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center; width: 100%;">
                        <div class="cat-card color-green">
                            <img src="https://luxeny.cl/cdn/shop/files/logo-luxeny.png?v=1714175406&width=750"
                                alt="Logo Luxeny" style="width: 300px; height: auto;">
                        </div>
                        <span>Luxeny</span>
                    </a>
                </div>
                <!-- Marcas -->
                <div class="category-item">
                    <a href="https://eelhoe-cosmetics.com/es"
                        style="text-decoration: none; color: inherit; display: flex; flex-direction: column; align-items: center; width: 100%;">
                        <div class="cat-card color-green">
                            <img src="https://eelhoe-cosmetics.com/cdn/shop/files/eelhoe_cosmetics.png?v=1715983201&width=280"
                                alt="Logo Eelhoe" style="width: 300px; height: auto;">
                        </div>
                        <span>Eelhoe</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Catalogo Section -->
        <section class="featured-section" id="destacados">
            <div class="section-header">
                <h1>¡Aqui veras el Catalogo!</h1>
                <div class="header-line"></div>
                <a href="#destacados" class="btn-outline">Ver todo</a>
            </div>

            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <a href="{{ route('shop.detalle_producto', 1) }}">
                        <img src="https://medipielsa.vtexassets.com/arquivos/ids/1338171-1200-auto?v=639072031104430000&width=1200&height=auto&aspect=true"
                            alt="Protector Solar Tocobo">
                    </a>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <a href="{{ route('shop.detalle_producto', 2) }}">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_873658-MLA108327088445_032026-F.webp"
                            alt="Tratamiento Efecto Botox Capilar">
                    </a>
                </div>
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <a href="{{ route('shop.detalle_producto', 3) }}">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_882638-CBT108447574377_032026-F.webp"
                            alt="Serum Acido Hialuronico">
                    </a>
                </div>
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <a href="{{ route('shop.detalle_producto', 4) }}">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_676330-MLA92609821108_092025-F.webp"
                            alt="Exfoliante Cafe">
                    </a>
                </div>
            </div>
        </section>
        <section class="featured-section" id="footpage">
            <div class="section-header">
                <h1>¡Pronto añadiremos nuevos productos!</h1>
                <div class="header-line"></div>
                <a href="#footpage" class="btn-outline">...</a>
            </div>
    </div>
</body>

</html>