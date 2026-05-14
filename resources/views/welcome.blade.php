<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online de Cosméticos Coreanos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body id="inicio">
    <div class="main-container">
        <!-- Header -->
        <header class="navbar" id="navbar">
            <div class="logo">
                <div class="logo-circle">K</div>
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

        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <p class="subtitle">Productos originales</p>
                <h1>Eterna Koreana</h1>
                <p class="description">Compra las mejores marcas y al mejor precio con envíos a todo Colombia.</p>
                <a href="#categorias" class="btn-primary">Ver colecciones</a>
            </div>
            <div class="hero-image">
                <div class="hero-decoration">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="categories-section" id="categorias">
            <div class="section-header">
                <h2>Categorías</h2>
                <div class="header-line"></div>
                <a href="#destacados" class="btn-outline">Ver todo</a>
            </div>

            <div class="categories-grid">
                <!-- Category 1 -->
                <div class="category-item">
                    <div class="cat-card color-pink">
                        <ion-icon name="shirt-outline"></ion-icon>
                    </div>
                    <span>Ropa Meiliss</span>
                </div>
                <!-- Category 2 -->
                <div class="category-item">
                    <div class="cat-card color-peach">
                        <ion-icon name="gift-outline"></ion-icon>
                    </div>
                    <span>Ofertas klynskin</span>
                </div>
                <!-- Category 3 -->
                <div class="category-item">
                    <div class="cat-card color-green">
                        <ion-icon name="pricetags-outline"></ion-icon>
                    </div>
                    <span>Marcas</span>
                </div>
                <!-- Category 4 -->
                <div class="category-item">
                    <div class="cat-card color-cream">
                        <ion-icon name="water-outline"></ion-icon>
                    </div>
                    <span>Cuidado Capilar y Corporal</span>
                </div>
                <!-- Category 5 -->
                <div class="category-item">
                    <div class="cat-card color-blue">
                        <ion-icon name="happy-outline"></ion-icon>
                    </div>
                    <span>Skincare</span>
                </div>
            </div>
        </section>

        <!-- Featured Section -->
        <section class="featured-section" id="destacados">
            <div class="section-header">
                <h2>Destacados</h2>
                <div class="header-line"></div>
                <a href="#inicio" class="btn-outline">Ver todo</a>
            </div>

            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <a href="{{ route('shop.detalle_producto', 1) }}">
                    <img src="https://medipielsa.vtexassets.com/arquivos/ids/1338171-1200-auto?v=639072031104430000&width=1200&height=auto&aspect=true" alt="Protector Solar Tocobo">
                    </a>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Vitamin C">
                </div>
                <!-- Product 3 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <img src="https://images.unsplash.com/photo-1556228578-0d85b1a4d571?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Cleanser">
                </div>
                <!-- Product 4 -->
                <div class="product-card">
                    <div class="wishlist-icon"><ion-icon name="heart-outline"></ion-icon></div>
                    <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Toner">
                </div>
            </div>
        </section>
    </div>
    <script src="app.js"></script>
</body>

</html>
