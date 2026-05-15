<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online de Cosméticos Coreanos</title>
    <link rel="icon" type="image/png" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body id="inicio">
    <div class="main-container">
        <!-- Header -->
        <header class="navbar" id="navbar">
            <div class="logo">
                <div class="logo-circle">
                    <img src="{{ asset('Eterna-Koreana-icon.png') }}" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <nav class="nav-links">
                <a href="{{ url('/') }}">Inicio</a>
                <a href="{{ url('/#categorias') }}">Colecciones</a>
                <a href="{{ url('/#destacados') }}">Ofertas</a>
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

        <!-- Hero -->
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Bienvenido {{ Auth::user()->name }}!</h1>
                <p class="hero-subtitle">Aqui encontraras la informacion de tu cuenta.</p>
            </div>
        </div>

        <!-- Section -->
        <section class="categories-section" id="categorias">
            <div class="section-header">
                <h2>¿Que quieres hacer hoy?</h2>
            </div>

            <div class="categories-grid">
                <!-- Category 1 -->
                <a class="category-item" href="{{ route('profile.edit') }}">
                    <div class="cat-card color-cream">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <span>Mi perfil</span>
                </a>
                <!-- Category 2 -->
                <div class="category-item">
                    <div class="cat-card color-pink">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                    </div>
                    <span>Pedidos</span>
                </div>
                <!-- Category 3 -->
                <div class="category-item">
                    <div class="cat-card color-peach">
                        <ion-icon name="heart-outline"></ion-icon>
                    </div>
                    <span>Favoritos</span>
                </div>
                <!-- Category 4 -->
                @if (in_array(Auth::user()->role, ['admin', 'manager'], true))
                    <a class="category-item" href="{{ route('manager.inventory.index') }}">
                        <div class="cat-card color-blue">
                            <ion-icon name="cube-outline"></ion-icon>
                        </div>
                        <span>Inventario</span>
                    </a>
                @endif
                <!-- Category 5 -->
                <form class="category-item" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="cat-card color-red" type="submit" aria-label="Cerrar sesion">
                        <ion-icon name="exit-outline"></ion-icon>
                    </button>
                    <span>Cerrar Sesion</span>
                </form>
            </div>
        </section>

        <script src="app.js"></script>
</body>
</html>
