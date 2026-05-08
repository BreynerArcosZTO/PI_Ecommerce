<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online de Cosméticos Coreanos</title>
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
                <div class="logo-circle">K</div>
            </div>
            <nav class="nav-links">
                <a href="{{ url('/') }}">Inicio</a>
                <a href="#categorias">Colecciones</a>
                <a href="#">Ofertas</a>
                <a href="#">Contacto</a>
                <a href="{{ url('/miCuenta') }}">Mi Cuenta</a>
            </nav>
            <div class="cart-icon">
                <ion-icon name="cart-outline"></ion-icon>
                <span class="cart-badge">2</span>
            </div>
        </header>

        <!-- Hero -->
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Bienvenido User!</h1>
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
                <div class="category-item">
                    <div class="cat-card color-cream">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <span>Mi perfil</span>
                </div>
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
                <div class="category-item">
                    <div class="cat-card color-red">
                        <ion-icon name="exit-outline"></ion-icon>
                    </div>
                    <span>Cerrar Sesion</span>
                </div>
            </div>
        </section>

        <script src="app.js"></script>
</body>
</html>