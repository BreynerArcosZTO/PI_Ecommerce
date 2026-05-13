<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online de Cosméticos Coreanos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<style>
    /* ── Estilos específicos de la página de producto ── */

    .banner {
        background-color: #5c3deb;
        color: #fff;
        text-align: center;
        font-size: 0.72rem;
        font-weight: 500;
        padding: 6px;
        letter-spacing: 0.04em;
    }

    .nav-links {
        list-style: none;
    }

    .nav-links a.active {
        color: #5c3deb;
        border-bottom: 2px solid #5c3deb;
        padding-bottom: 2px;
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .toggle-switch {
        width: 52px;
        height: 26px;
        background: #5c3deb;
        border-radius: 30px;
        display: flex;
        align-items: center;
        padding: 3px;
        cursor: pointer;
    }

    .toggle-knob {
        width: 20px;
        height: 20px;
        background: #fff;
        border-radius: 50%;
    }

    .toggle-icon {
        font-size: 0.9rem;
        margin-left: auto;
        padding-right: 4px;
    }

    .breadcrumb {
        padding: 14px 30px;
        font-size: 0.75rem;
        color: #999;
    }

    .breadcrumb a {
        color: #5c3deb;
        text-decoration: none;
    }

    .breadcrumb span {
        margin: 0 6px;
    }

    .product-detail {
        display: flex;
        flex-direction: row;
        gap: 0;
        padding: 0 30px 40px;
    }

    .gallery {
        display: flex;
        width: 100%;
        gap: 12px;
    }

    .thumbnails {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .thumb {
        width: 62px;
        height: 62px;
        border-radius: 8px;
        background-color: #f5f5f5;
        border: 2px solid transparent;
        cursor: pointer;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .thumb.active {
        border-color: #5c3deb;
    }

    .thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .thumb-placeholder {
        font-size: 1.6rem;
        color: #ccc;
    }

    .main-image {
        display: flex;
        flex: 1;
        height: 50%;
        min-height: 310px;
        background-color: #f5f5f5;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 12px;
    }

    .main-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px;
    }

    .main-image-placeholder {
        font-size: 5rem;
        color: #ddd;
    }

    .product-info {
        padding: 0 0 0 30px;
    }

    .stars {
        color: #f5a623;
        font-size: 0.85rem;
    }

    .review-count {
        color: #999;
        font-size: 0.75rem;
        margin-left: 6px;
    }

    .product-info h1 {
        font-size: 1.5rem;
        font-weight: 600;
        margin: 6px 0 4px;
        line-height: 1.3;
    }

    .sku {
        font-size: 0.72rem;
        color: #aaa;
        margin-bottom: 10px;
    }

    .price-row {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 6px;
    }

    .price {
        font-size: 1.4rem;
        font-weight: 700;
        color: #1f1f1f;
    }

    .badge-sale {
        background: #ff4c4c;
        color: #fff;
        font-size: 0.65rem;
        font-weight: 600;
        padding: 3px 8px;
        border-radius: 20px;
    }

    .free-returns {
        font-size: 0.75rem;
        color: #5c3deb;
        font-weight: 500;
    }

    .product-description {
        font-size: 0.78rem;
        color: #666;
        line-height: 1.65;
        margin-bottom: 18px;
        max-width: 610px;
        width: 100%;
    }

    .includes-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: #aaa;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-bottom: 10px;
    }

    .includes-grid {
        display: flex;
        margin-bottom: 20px;
        flex-direction: row;
        justify-content: space-between;
    }

    .include-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.75rem;
        color: #444;
    }

    .include-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .dot-blue {
        background: #ffccbc;
    }

    .dot-gray {
        background: #aaa;
    }

    .dot-green {
        background: #4caf7d;
    }

    .payment-box {
        border: 1.5px solid #e0e0e0;
        border-radius: 14px;
        padding: 16px 20px;
        margin-bottom: 14px;
    }

    .payment-option {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 12px;
    }

    .radio-btn {
        width: 16px;
        height: 16px;
        border: 2px solid #ffccbc;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .radio-inner {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #5c3deb;
    }

    .payment-label {
        font-size: 0.82rem;
        font-weight: 500;
    }

    .badge-discount {
        background: #fff3e0;
        color: #f57c00;
        font-size: 0.65rem;
        font-weight: 600;
        padding: 2px 8px;
        border-radius: 20px;
        margin-left: 6px;
    }

    .payment-methods {
        display: flex;
        gap: 6px;
        align-items: center;
        margin-left: auto;
    }

    .pay-icon {
        height: 20px;
        padding: 2px 6px;
        background: #f5f5f5;
        border-radius: 4px;
        font-size: 0.6rem;
        font-weight: 700;
        color: #555;
        display: flex;
        align-items: center;
    }

    .online-save-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .online-badge {
        background: #ffccbc;
        color: #fff;
        font-size: 0.68rem;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 20px;
    }

    .online-price {
        font-size: 0.85rem;
        font-weight: 700;
    }

    .save-note {
        font-size: 0.68rem;
        color: #5c3deb;
        margin-top: 4px;
    }

    .delivery-option {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.78rem;
        color: #888;
    }

    .radio-empty {
        width: 16px;
        height: 16px;
        border: 2px solid #ccc;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .delivery-link {
        font-size: 0.72rem;
        color: #5c3deb;
        margin-left: auto;
        cursor: pointer;
    }

    .delivery-note {
        font-size: 0.7rem;
        color: #aaa;
        margin-top: 6px;
    }

    .delivery-note a {
        color: #5c3deb;
        text-decoration: none;
    }

    .btn-cart {
        display: block;
        width: 100%;
        background: #ffccbc;
        color: #fff;
        border: none;
        border-radius: 30px;
        padding: 14px;
        font-family: "Poppins", sans-serif;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        letter-spacing: 0.04em;
        transition: background 0.2s, transform 0.15s;
        margin-bottom: 20px;
    }

    <-- ! Cambio de color boton agregar al carrito -->
    .btn-cart:hover {
        background: #ffccbc;
        transform: translateY(-2px);
    }

    .trust-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .trust-item {
        display: flex;
        align-items: flex-start;
        gap: 8px;
    }

    .trust-icon {
        font-size: 1.4rem;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .trust-text strong {
        display: block;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .trust-text span {
        font-size: 0.68rem;
        color: #888;
        line-height: 1.4;
    }

    @media (max-width: 820px) {
        .product-detail {
            display: flex;
            flex-direction: column;
        }

        .product-info {
            padding: 24px 0 0;
        }

        .gallery {
            flex-direction: column-reverse;
        }

        .thumbnails {
            flex-direction: row;
        }

        .main-image {
            min-height: 220px;
        }
    }

    @media (max-width: 500px) {
        .includes-grid {
            grid-template-columns: 1fr 1fr;
        }

        .trust-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


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
            <div class="cart-icon">
                <ion-icon name="bag-outline"></ion-icon>
                <span class="cart-badge">0</span>
            </div>
        </header>

        <!-- Product Detail -->
        <div class="product-detail">

            <!-- Galería -->
            <div class="gallery">
                    <div class="thumbnails">
                        @forelse($images as $image)
                    <div class="thumb {{ $loop->first ? 'active' : '' }}">
                        <img 
                            src="{{ $image->image_path }}" 
                            alt="{{ $image->alt_text ?? $product->name }}"
                        >
                    </div>
                        @empty
                            <div class="thumb active">
                                <span class="thumb-placeholder">📦</span>
                            </div>
                        @endforelse
                    <div class="thumb"><span class="thumb-placeholder">🖼️</span></div>
                    <div class="thumb"><span class="thumb-placeholder">🖼️</span></div>
                    <div class="thumb"><span class="thumb-placeholder">🖼️</span></div>
                    <div class="thumb"><span class="thumb-placeholder">🖼️</span></div>
                </div>
                <div class="main-image">
                    @if($images->count() > 0)
                        <img 
                            src="{{ $images->first()->image_path }}" 
                            alt="{{ $images->first()->alt_text ?? $product->name }}"
                        >
                    @else
                        <span class="main-image-placeholder">🖼️</span>
                    @endif
                </div>
            </div>

            <!-- Info -->
            <div class="product-info">

                <div>
                    <span class="stars">★★★★★</span>
                    <span class="review-count">562 Reseñas</span>
                </div>

                <h1>{{ $product->name }}</h1>
                <p class="sku">
                    SKU: {{ $product->sku }}
                    Marca: {{ $product->brand_name ?? 'Sin marca' }}
                </p>

                <div class="price-row">
                    <span class="price">
                        ${{ number_format($product->price, 0, ',', '.') }}
                    </span>
                    <span class="badge-sale">30% DE DESCUENTO</span>
                    <!-- <span class="free-returns">FREE Returns ▾</span> -->
                </div>

                <p class="product-description">
                    {{ $product->description }}
                </p>

                {{-- <div>
                  <p class="includes-label">Qué incluye</p>
                  <div class="includes-grid">
                      <div class="include-item"><span class="include-dot dot-blue"></span> Texto </div>
                      <div class="include-item"><span class="include-dot dot-gray"></span> Texto </div>
                      <div class="include-item"><span class="include-dot dot-green"></span> Texto </div>
                      <div class="include-item"><span class="include-dot dot-blue"></span> Texto </div>
                  </div>
                </div> --}}

                <!-- Pago online -->
                <div class="payment-box">
                    <div class="payment-option">
                        <div class="radio-btn">
                            <div class="radio-inner"></div>
                        </div>
                        <span class="payment-label">
                            Pagar ahora
                            <span class="badge-discount">Ahorra 10% directo</span>
                        </span>
                        <div class="payment-methods">
                            <span class="pay-icon">VISA</span>
                            <span class="pay-icon">MC</span>
                            <span class="pay-icon">→</span>
                        </div>
                    </div>
                    <div class="online-save-row">
                        <div>
                            <div class="online-badge">PAGANDO EN LÍNEA <strong>AHORRA</strong></div>
                            <p class="save-note">Tu ahorras con esta activa.</p>
                        </div>
                        <span class="online-price">
                            ${{ number_format($product->price * 0.9, 0, ',', '.') }}
                        </span>
                    </div>
                </div>

                <!-- Pago contra entrega -->
                {{-- <div class="payment-box">
                    <div class="delivery-option">
                        <div class="radio-empty"></div>
                        <span>Pagar contra entrega</span>
                        <span class="delivery-link">¿Cómo calcular el recibo?</span>
                    </div>
                    <p class="delivery-note">
                        Si el pago contra entrega no está disponible en tu destino, completa tu orden con
                        <a href="#">Pagar Ahora</a>.
                    </p>
                </div> --}}

                <button class="btn-cart">AGREGAR AL CARRITO</button>

                <!-- Trust icons -->
                <div class="trust-grid">
                    <div class="trust-item">
                        <span class="trust-icon">🚚</span>
                        <div class="trust-text">
                            <strong>Envío gratis para este artículo</strong>
                            <span>Tiempo estimado de 8 a 11 días</span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <span class="trust-icon">🔄</span>
                        <div class="trust-text">
                            <strong>Cambios y devoluciones</strong>
                            <span>Te ofrecemos una garantía sin complicaciones</span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <span class="trust-icon">🔒</span>
                        <div class="trust-text">
                            <strong>Pagos Seguros</strong>
                            <span>Tu pago es 100% seguro. Tus datos están siempre protegidos</span>
                        </div>
                    </div>
                </div>

            </div><!-- /product-info -->
        </div><!-- /product-detail -->

    </div><!-- /main-container -->

    <script src="app.js"></script>
</body>
</html>
