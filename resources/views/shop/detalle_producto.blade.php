<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online de Cosméticos Coreanos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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
        align-items: flex-start;
        gap: 36px;
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 30px 48px;
    }

    .gallery {
        display: flex;
        flex: 0 0 52%;
        max-width: 620px;
        gap: 12px;
        align-items: flex-start;
        padding-top: 20px;
    }

    .thumbnails {
        display: flex;
        flex-direction: column;
        gap: 10px;
        flex-shrink: 0;
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
        aspect-ratio: 1 / 1;
        min-height: 420px;
        background-color: #f5f5f5;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 12px;
        padding: 18px;
    }

    .main-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 12px;
    }

    .main-image-placeholder {
        font-size: 5rem;
        color: #ddd;
    }

    .product-info {
        flex: 1;
        min-width: 0;
        padding: 0;
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

    /* Cambio de color boton agregar al carrito */
    .btn-cart:hover {
        background: #ffccbc;
        transform: translateY(-2px);
    }

    .trust-grid {
        display: flex;
        align-items: stretch;
        gap: 12px;
    }

    .trust-item {
        display: flex;
        flex: 1;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: 8px;
        min-width: 0;
        padding: 14px 10px;
        text-align: center;
        background: #fafafa;
        border-radius: 10px;
    }

    .trust-icon {
        font-size: 1.4rem;
        flex-shrink: 0;
    }

    .trust-text strong {
        display: block;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .trust-text span {
        display: block;
        font-size: 0.68rem;
        color: #888;
        line-height: 1.4;
    }

    @media (max-width: 1024px) {
        .product-detail {
            gap: 24px;
        }

        .gallery {
            flex-basis: 50%;
        }

        .main-image {
            min-height: 360px;
        }
    }

    @media (max-width: 820px) {
        .product-detail {
            display: flex;
            flex-direction: column;
        }

        .product-info {
            width: 100%;
            padding: 0;
        }

        .gallery {
            flex: none;
            max-width: none;
            width: 100%;
            flex-direction: column-reverse;
        }

        .thumbnails {
            flex-direction: row;
        }

        .main-image {
            min-height: 320px;
        }

        .trust-grid {
            flex-wrap: wrap;
        }

        .trust-item {
            flex-basis: calc(50% - 6px);
        }
    }

    @media (max-width: 500px) {
        .includes-grid {
            flex-wrap: wrap;
            gap: 10px;
        }

        .trust-grid {
            flex-direction: column;
        }

        .trust-item {
            flex-basis: auto;
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
            <div class="cart-icon" onclick="window.location.href='/carrito'" style="cursor: pointer;">
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
                        <div class="thumb {{ $loop->first ? 'active' : '' }}" data-image="{{ $image->image_path }}">
                            <img src="{{ $image->image_path }}" alt="{{ $image->alt_text ?? $product->name }}">
                        </div>
                    @empty
                        <div class="thumb active">
                            <span class="thumb-placeholder">📦</span>
                        </div>
                    @endforelse
                </div>
                <div class="main-image">
                    @if ($images->count() > 0)
                        <img id="mainProductImage" src="{{ $images->first()->image_path }}"
                            alt="{{ $images->first()->alt_text ?? $product->name }}">
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

                <button class="btn-cart" onclick="agregarAlCarrito(event)">AGREGAR AL CARRITO</button>

                <!-- Trust icons -->
                <div class="trust-grid">
                    <div class="trust-item">
                        <span class="trust-icon">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="42" height="42" fill="url(#pattern0_23233_13345)" />
                                <defs>
                                    <pattern id="pattern0_23233_13345" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_23233_13345" transform="scale(0.00195312)" />
                                    </pattern>
                                    <image id="image0_23233_13345" width="512" height="512" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7d15uCRVff/x95192PdFQJB9FVAJi+IGuGCMmkg00cQkKolL3GLU5BcTlyRqjCuKuBNjjESTKCYuoBhB44bLAILsOwgCwjDDDMzMnd8f597MnWGW7v6eOqeq6/16nvPIk0zX/VR3VfXpqnO+ByRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkqRyJmoHUMjWwGOAY4ADgQOAHYBtgIUVc0l9tARYDlwHXAH8EDgPuBhYXS+WtH52ALpnR+C3gecAxwGz68aRtAk3AGcCnwCurxtFWsMOQHccBrwa+F1gfuUskoa3gtQReCtwY90okh2ALtiDdMH4PWBW5SyS4pYC/w84DZisnEU9ZgegvSaAlwDvALaonEVSfueRHufdWTuI+skOQDttD3wGeFLtIJIadQ3wNODntYOof+wAtM+hwNnAw2oHkVTErcDjgCtrB1G/2AFol2OALwPb1g4iqagbgaOA22oHUX84qKw9jgbOxS9/qY/2AD6N12QV5Bzydtgf+AapgI+kftobuBf4bu0g6gcfAdS3OfAD4ODaQSRVdy+pqucttYNo/HkHoL5PAifUDiGpFeaT7gSeXTuIxp93AOo6Gfjv2iEktcoK0uOAm2oH0XjzDkA9WwBfIS3oI0nTZgP3Ad+sHUTjzRGn9byKNPJXktb1u7UDaPz5CKCObUgVwJzyJ2lDjgAW1Q4hKa/XkNYHz9l+AvwlcCywQ7ldkUT6MbUL8Fzgx+Q5p19ZdA8kNW6CVPc71xf/RcBTi+6BpI2ZDZxO/Nz+l9LBJTXrGPJ9+Z8OLCgbX9IAZpPqe0TO758WTy2pUW8jz5f/O0sHlzSUU4id478sH1lSkxbhrUGpD7Ymdp5P4lRtaWxsAawkdlG4BdcMkLriPmLn+5zykdUX1gEo6xHEe/TvBO7OkEVSsxZOtYjVOYJI62MHoKzdgq+/D/hIjiCSGrdP8PV3A6tyBJHWxw5AWXODr/8fYGmGHJKad2Dw9a4FoEbZASjr6uDrz8mSQlIJBwVff32WFNIG2AEo60fEnt+fmyuIpMZF7wD8PEsKaQPsAJS1HPjUiK/9JnBpxiySmmUHQNJatgN+wXBTgZYDj6wRVtJIJoAlxKYAPrp4akmNOwq4l8EuAiuB36sTU9KI9iRe8Gv74qklFXEwaSGfjV0AbgJOrhVQ0sieTOzL//bykSWVNAt4DvB5UoW/pcBtwDeAl5IqB0rqnlcS6wB8q3xkSZIUdQaxDsAZ5SOrb5wFIEn5RWsAXJ4lhbQRdgAkKb/oFMDLsqSQJEnFbEd8BsBepUOrf7wDIEl5RX/93wfckCOItDF2ACQprxzP/ydzBJE2xg6AJOVlCWB1gh0AScrLDoA6wQ6AJOUVfQRgB0CSpI6ZT1q/IzID4LDiqSVJUshhxL78VwELiqdWL/kIQJLyid7+v5a0/LfUODsAkpSPFQDVGXYAJCkfZwCoM+wASFI+dgDUGXYAJCmPWcD+wW3YAVAxE7UDrMdhwIuAE0gLYmy+iX+/FLgO+DrwMeCSBrPB8PlUV+njQ/21J+lYUztMAncDvwCuBi4Evg1cAKyomEvrMR84nTQNZtQpNCuBDwDzWprPVrc1eXxIT6H+MW7bdLsT+ChwxPo/RpU2HziPfB/wN8h7kc+dz1a35T4+JIBXUf/Ytg3Xvoodgeo+RP4P9rSW57PVbTmPDwngDOof17bh2yrgPcBmD/5I1bTDaOa2+krgkBbns9VtuY4Padq3qH9c20ZvlxIfxNkpbZgF8EKayTF7attRTeVTXbmOD2ladAqg6joI+AHw2NpBSmnDF9tJLd92k/lUl5+tctkO2Kl2CIVtDXwFeELtICW0oQPw0Aa3vWeGbTSZT3XlOD4kiK8BoPbYDPgC8PDaQZrWhg7A6toBNqHt+STV5+3/8bIV8B/AlrWDNKkNHYAbG9z29Rm20WQ+1ZXj+JDADsA42gd4f+0QTWpDB+DcBrd9ToZtNJlPdeU4PiTwEcC4+gPg8ZUzjLVDSVOyck/pWAkc3OJ8trot1/EhAVxF/WPa1ky7kDHVhjsAl5AKaOT2QdK8zqim8qmuXMeHtIC0LojG0yOBJ9cOMc7mkRZrydVjOxeY2+J8trot9/GhfjuM+se0rdn2JdSoeaTyrJHb7SuB99HMxT1HPlvd1uTxof76beof27Zm2wPAjoyZ2bUDzLCKVIDh34H7SdMvNmPTi7YsAa4APg2cCvwzaRnItuRTXaWOD/XXb9GTwjE9Npv0OHhR7SCSpPb4DLFfl/9QPvJavkAs/5uKJx7MPOAxwL+R5y7AJ8vGb14bBgFKUpdFawD8PEuK0XU9/4Y8AHyb9Ijmj0lf4hGPDCeSJI2NWcBSYr8sjyueeo15pC/KSP4jiqcezYeJ7edy2vXYXJJU0V7Eby1vWzr0DAdtJNcgbRWwsHjq0exN/LMaq7VhfAQgSaOL3j6/DfhVjiAjilYwvB5YliNIAdcQL+1uB0CSBMS/QC/LkmJ0Xc8/rGuCr98jS4qWsAMgSaPr+gC6A4Kvr51/WDcEX28HQJIExH9B1/4C7Xr+YUUfAdgBkCQB8TsANW+hTwD7B7fRtw6AYwAkSWxPvDxszS/Q3YCtgtvo2hgA7wDMYAdAkkYTvX2+lPgXUkQ0/53AHTmCFOQYgBnsAEjSaKK3/y8nXp0uosuPL0YV7XDtQFoDZizYAZCk0XT9C7TrMxhGcTewOLiNsbkLYAdAkkbT9S/Qrucf1U3B19sBkKSe6/oUur4VAZrmOIApdgAkaXgLgD2D26j5BboVsGtwG7U7MKNyKuAUOwCSNLz9ia0Mtwq4KlOWUUR//S8nrQPQRU4FnGIHQJKGF/0CvQa4P0eQEUXzX07qxHSRHYApdgAkaXhdnwHQtzUAZnIMwBQ7AJI0vK6PoO/6AMYIxwBMsQMgScPr+hdo1zswETcSK8C0ObBdpixV2QGQpOHMAvYLbqPmF+hcYO/gNmo/wohYTryE8Vg8BrADIEnD2ZN4OdiaHYD9SJ2AUU0CV2bKUovjALADIEnDit4+/wXwqxxBRhTNfz1wX44gFTkOADsAkjQsn/93n3cAsAMgScPq+hTArufPwVoA2AGQpGF1/Rd01+9g5OAjAOwASNKwuvwFOkEqYxxhB2BM7gBIkga3PWkOeaTV/PLYfSO5Bm07FE+dX/R9eIDYWhCt4B0ASRpc9Nf/UuLr0UdE899JfA59G9wKrAi8fi6wc6Ys1dgBkKTB5bj9H6lCF+UAwGQVqRMQ0flxAHYAJGlw0UV0an+Bdn0AY069HwfQxQ7AYcD7gEuAJcSfZ417WzL1Xr0XOHSE93tYXft8pt+f9wAHN/B+aLxEv0Avz5JidHYA1rAWQIfMB04n3bqp/aXR1bYS+AAwb8j3fhDj8PmsBE6jmfdH4+FqYsfYs8tHXsvNxPI/rXzkxryD2HvxnvKR+2k+cB71vyDGpX2DvF9y4/b5fD3z+6PxsJB4B/eQ4qnX2HojuQZt+xRP3ZyXE3sv/r185H76EPW/FMatnTbUJ7Bx4/j55Hx/NB4eTuyYWkHqLNdy9AZyDdqWMQZT32Z4BrH34wflI/fPYXT7tnJb20ry/BoZ188n1/uj8fEcYsfUFeUjr+UFxPIvKh+5UUcSez+iswiq68IgwBfRjZxdMxt4YYbtjOvnM5u0b9K06BTArs8AqJ0/t+gsgJ2pe0cnrAsX7hNrBxhjJ2XYxjh/PjneH42P6BTA2iPonQGwtjuILWs8Qaoo2Fld6AB0vthCi+2ZYRvj/PnkeH80Prp+B6DLaxg0JVqVsdNTAbvQAVhdO8AYy/HejvPnM1k7gFpjFrBfcBs1v0DnAnsHt1G7A9OEaC2ATv8A6kIHIPqcRhsWPfhhvD+fcd43DWdPYLPgNmp2APYldQJGNQlcmSlLm/S6GmAXOgDn1g4wxs7JsI1x/nxyvD8aD9Hb57cCd+cIMqJo/uuJPS9vq15XA+xCB+BjpGlmymsV8PEM2xnXz2cVad8ksATwOD7/B+8AtN4lwBm1Q4yhDwKXZtjOuH4+p5Pn/dF46PoUOjsA6xftAHR6DEBXzCOVZ61dHGZc2rnEngeua9w+H0sBa13nEzumXlE+8lp+QCz/qeUjF3EQsfel5mOdXplHKs+6kvpfEF1tK0kr9eX88p82Dp/PSuD9+OWvB/slsWPrSeUj/58JYPEGcg3aji+euowtiF83tiqeuscOAd4NXAzcS/0vjba3e6feq3dRZrnbrn0+S6ayuhywNmQH4sdZzWfFu28k16Btx+Kpy7mT2HtTYpl1SVIFxxPvhE8UT73GiRvINWi7o3zkon5K7P15avnIeXRhEKAk1ZRjAN3qHEFG1PUKhk3r7UwAOwCStHFdH0Hf9fxN620tADsAkrRxXf8C7Xr+pvV2KqAdAEnauK7fQu96DYOm+QhAkvQgC4j/wqv5C3orYNfgNsb9DkBvHwFIkjbscGIjxFcA84unXuPoDeQatC0DZhdPXdZexN6j5dSd5TEy7wBI0oZFb/9fA9yfI8iIorf/r2A81/qY6WZi+zifjtZJsAMgSRvW9efnXc9fwgrgtuA2OjkQ0A6AJG1Y10fQR+9g1M5fSi/HAdgBkKQN6/oXaNc7MKX0ciqgHQBJWr9ZwH7BbdS8hT4X2Du4DTsAg/EOgCSNkb2AhcFtXJ4hx6j2Jbby5yRpEGAf2AGQJP2f6O3/W6m7Xnw0//XAfTmCdIBjACRJ/+eA4Otr3z7vev6SHAMgSfo/XS8BHH3+Xzt/SdEOwC7EHrdUYQdAktav6yPo9wy+vnb+km4jVrBpNvCQTFmKsQMgSevX9Q7A9sHXX50lRTesBm4KbqNzjwHsAEjSg+0w1SJqdwCi1/dfZknRHb2bCWAHQJIeLPr8fwnxX5RRq4Ov3zlLiu6wAyBJylIBMPoFHHV78PUnZknRHb2bCmgHQJIebBym0N0afP0LiY8j6JLeTQW0AyBJD9b1NQAALgm+fgfgs8BWGbJ0gY8AJEljsYzu9zNs40RSR+JlpNLInZvrPoTedQAmageQpJZZSBrEF/mBdAhwaZ44I1tAGsm/ReUcfbIFsLR2iEF5B0CS1nYAsWvjSuCqTFkilgNfrh2iZzp1F8AOgCStLXr7/2rggRxBMvhs7QA9YwdAkjqs6xUAZzobuKZ2iB7p1EwAOwCStLZx6gCsAt5VO0SPvAk4onYISdJoFpGK+IzaXlA+8kbNAS4itk+2wdsS4BkDfTKSpNaYBSwj9gVwdPHUm/ZEYJL6X459aSuBVw/0yUiSWmEf4hf/bYqnHsw7qf/F2Lf2Uca7dsKDHAa8j1Q8YgmbfoOWTP3b9wKHtjCfrW4rfXyo355G7Hi9pXzkgc0Fzqf+Od239jVg6wE+n06bD5xOGnQy6hu1EvgAMK+l+Wx1W5PHhwTwZ8SO0W+UjzyUrUgVAmufy31rl5AqKY6l+cB55HuzvkHei3zufLa6LffxIU37KLFj84PlIw9tW7we1mi3AccM8Pl0zofI/2ad1vJ8trot5/EhTbuA2HH5p+Ujj2Qu6W5a7fO4b20Z8JwBPp/OOIxmbquvJNXTbms+W92W6/iQZrqD2HF5YvnIIU8BbqD++dynNgn8FS1YiydHIaAXZtrOumZPbTuqqXyqK9fxIU3bEdg+uI02FQEaxFeBg4G/BO6qnKUvJoC3Av9EejzdaT+juZ7SxS3PZ6vbchwf0rTjiR2Pi2nBr7qArYA/Br5H/XO7L+184p3OkeU4WBcDW2bYzvrcSzooI5rMp7pyHB/StFOBDwdefyFwVKYstT0EOAF4NLA/sC9pqdut8Y5qblcBvw5cXjvIKBbTXO/onpbns9VtOY4Padq7iR2PnyofWQVMAK+n2UqKd5GqNRaVoyd3Y4ZtbMgNGbbRZD7VleP4kKaN0yJAymc18A7g+cDyhv7GtqTxGH/U0PbXK0cH4NwM29iQczJso8l8qivH8SFNOyj4+suypFBbfQZ4AnB7Q9ufC3ycVKm2M49ZDiVNycp9S2QlaXRqW/PZ6rZcx4cEsBnx6cLRDoS6YW/gUpq9vn2edEx2QhMFJd7X8ny2ui3n8SEdQex4fACrU/bJNqS7y01e434A7FpqhyLmAV8n346fS94VlHLns9VtuY8P6bnEjkmf//fPXOAjNHutu5aOrCEwj1SeNXK7fSXpl10TF/cc+Wx1W5PHh/rtzcSOzf8sH1kt8VqarTZ7HR3pBEAqz/puUpGWe9n0zt079W/fRZlnusPms9VtpY8P9dNZxI7Tt5WPrBZ5Js0uL38FPVhSWJJquIjYBfoF5SOrZR5Os+sqnE23K01KUuvMJq3SFrk4H108tdpod+AnNNcJeFm5XZGk8bcP8Quzt2c1bXPgCzTTAbiLtGiVJCmDpxG7KN9cPrJabjbx0tIbamcU3A9JGmuvJXZB/nr5yOqIF5FqROTsANwP7JwjXGfKDUpSQ1wDQE35GHAycHfGbc4DXpxxe5LUW98m9ovs5eUjq2MOAa4h312Aa8rGl6TxdAexi/EJ5SOrg7YHzidfJyB650qSem0n4hfi3YunVlctAD5Lng7Aqwpnl6Sx8lhiF+HFWJxFw5kgzxoCn44GcRCgpD7LMQBwdY4g6o3VpII+i4Lb2T8axA6ApD5zBoBqWAG8M7iNfaMh7ABI6rODgq+/LEsK9dF5wddvHg1gB0BSn3kHQLXcBkwGXh9eFt0OgKS+2gx4aHAbdgA0qm2JfQdPBl9vB0BSbx1A7Bq4ArgqUxb1T/QZ/i+I3UGwAyCpt6K3/68mdQKkUUSPv/AiVHYAJPWVz/9VU/T4uz4awA6ApL5yBoBqqt4BtQMgqa+qX4DVa9EOqMefJI1gNrCMWCnWo4qn1riYCzxA7Pg7snhqSRoD+xKvxb5V8dQaFwcRO/YmgS2iIXwEIKmPcozAXpwjiHopevv/BmBJNIQdAEl95PNX1RTtgGYZgGoHQFIfteICrN5qxQBUOwCS+qgVF2D1VivuQNkBkNRHBwRfbwdAo5oA9g9uwztQkjSCnYjPAHhI8dQaF7sTP/52yhHEOwCS+iZ6+3UxcGuOIOql6PF3F3B7jiB2ACT1TY7n/6tzBFEvtWb8iR0ASX3jDADV1Jrjzw6ApL6J3oK9PEsK9VUrZgBAMx2Aw4D3AZeQKhVFBzv0vS2Zei/fAxw8xOcgaf1a8wtMvTSWM1DmA6cDq6j/pTmubSVwGjBvwM9E0to2I36NinYg1F9bE/8e2Ld46k2YD5xH/S/IvrSvYydAGsWRxM69B0gruUmjOJrY8beMtJJlFrkeAbwXeEKmbWnTTgDeVTuE1EHRX+9XAytyBFEvRY+/K0l3sLLI0QE4DDg1w3Y0nJcAh9QOIXVMdACWz/8V0ZoBgJCnA/CiTNvRcGaT3ntJg3MAoGpq1fGX44v7xAzb0GhOqh1A6pjoBdgpgIpoTREgyNMBeGiGbWg0e9YOIHXIbGC/4Da8A6BRzQP2CW6jdXcAVmfYhkYzWTuA1CEPAxYEXr8a7wBodPsCcwKvnwSuyJQFyNMBuDHDNjQa33tpcNHbr7eQFgKSRhE9/m4A7ssRZFqODsC5Gbah0ZxTO4DUIc4AUE2tmgEAeToAHyPjvEQNbBXpvZc0mFYNwFLvtO74y9EBuAQ4I8N2NJzTgUtrh5A6pHUXYPVKq6YA5jSPVJ62doncvjRLAUvDu5PYeXdC+cgaExPAvcSOv8cWTz2EeaSFalZS/wtyXNtK4P345S8Na2fi599DiqfWuNiD+PG3U/HUIzgEeDdwMfEejy0tB3wxLgcsRTyO2Hl4T/nIGiMnETv+7mwiVGRO4ob8DHhNA9vVeNiRNBr2gKn2EGD7ddqWU//2HtbUOrgLuH5Guw74KWkMioNQtSk+/x/NVqw5Vw8kFR/bjnSebjfjvyH9WJleKGkp6Rydec5eClwILC8TvVVa+fy/iQ6ANG0b4NHAY6b+9xDSBWNQW8/4721ZfxWte4EfAP8LXAD8D67WpgdzCuCmLQCOAo4nna9HMNxjjy1m/Pe2wO6kc3+mB4AfA98DvkOaytyH2gqtmwIo5TaHNFDq/cBFpF/mpR+Z3Al8HHgKrtuuNb5K7Lh6Q/nIRRwJvAX4NumXeenzdRnwBeB5pLsN4+o8Yu/Ta8tHljZtPvDrwCeAOyh/AdlUZ+DdwF5N7bw64zpix9IziyduxizgWOCdwNXUP0fX7Qz8K+kuxLi5hdh787TykaUN2x94O+370l9fWwV8CTiukXdCbbcZ8btRBxRPnddOwOtp35f+htqFwO+TFnDqum2Ivx97F08trWMe8Nuk21mT1L9IjNLOBR6e+41Rqz2C2DHzAN19nPQ40q/q+6l/7o3SLqP7v36PIfYeLGM8OkLqqLmk3vhV1L8g5GirgE/RkXm1CnseseOlixU3TwS+T/1zLVf7OnBo1neonD8ktu+LykeW0hf/i4BrqX8BaKL9CngZqUqXxtdbiB0n/1E+8sieDHyX+udWE+0B0piehdnerTLeQWy/zyofWX33m3TneWG0fZlUKU7j6XPEjo+/Kx95aI8gTYOtfS6VaD8DDs/zthXxRWL7++bykdVX+wD/Tf2TvHS7nTSbQePnYmLHxu+VjzywbYD30b8S7MtJgxpzLGjXtCuI7etzy0dW3ywk3SpdRv2Tu1abBN6GjwTGyWzi89vbOC1tAngBcBv1z5ua7WzWLkDUNvNIhcki+3hE8dTqlUNJhXtqn8xtaZ8nVUVT9+1H7FiYpH0FanYC/ov650lb2iJgt9A72pxDiO3bKtI0Vim7CeCV1KkA1vZ2Hun2qrrt6cSOgxvLR96ok4gXlRnHdi3xevtNeDax/bqmyXBdeH6iZuxKKo/6XlI1P63tCcD5ODiw68ZlEaAFpGf9XyOdu1rbXqRyxm17XBMtINXo8WcHoJ+OJM0RflLtIC13GKlw0La1g2hk47AI0K7At4BX4PiUjdke+ArtWja91cefHYD+OYXUU96jdpCOOIw0K8LncN3U9TsADyfN6/+1yjm6YnvSCoN7Vc4xrdWrAPZ5OeAJ0rSv55NuG+1OWlr2UtIF/yOkNejHxQTwJuCN1P8VcRPpff7Z1P/eTFq4546ptph0y3MhqZO6G2l64j6kC/pjSYO7SjkW+Azped7Kgn9XcV3uADwL+Gdg84oZIF0HL2XNOXst6Xyd2WYDW079+x1Zc77uTzp/jqRcOdvdSI83jwd+Wehvrs8Eaf8jandAx9KepFtqGxt8cQ+p/O04mAN8mnoDdC4BTiMVF9o+0z7tRirx+p+Uq3P+7kzZVcbOxD/zhxRPnbyCOstpryZ10D9FKmG7V6b92Zr0g+vDpAqcJfbjAur+yH3oBnIN03YsnnrMHUj6xTnoB/CXdWJmMxf4N8peQCZJty1fQZkBSzsAf0rqaDS9X88osD/K4/HEPu+7iydOXjtExlztSlIdkEMK7N8C0qJi5xTYr7cV2J8NedJGcg3S7igfebwtZPiqYJOkqURdNI/0C7nUReQm4K+Ah5XYufWYRRrjEK38trF2F+15vqiN+xNin/X3ykfmLwJ5h233Ah+g7viCo0mluJvax1XAU4vtzdpeMWDGDbULykceb69itA/iaro3XmI+8CXKXEh+TBpLMa/Inm3aLFKe22lmf79Hd5eH7ZP3Evuczyyc96+DeQdtN5LK6LZpdstxNFeM7JekMV6lfWjEvNPto+Ujj7dITeYnV8g7qlnAZ2n+QvIjUmGSttqBNIiqiX1/Q8H90Gi+Snc+4+ivxUHazaTVPdvaeZ1LGqTcRGGyLxbcj2nfDORdDfxZ+cjjaw9iH8Y7y0ce2T/Q7IXkBtICKV2ZRvos0syCnO/BEtIgH7XX9cQ+41LjPZ5Js4v53Eu6u1B7NsGgDiWNScj9PpRe7OvWYN6nFc471n6d2Ifx+fKRR/JSmruQrADeSvfW44Y0uCn3ReXfi+6BhrE5afxO5PONVnEbxDHAfcGcG2ufA3YpsB+5bUuqepjzvbiacteubTPk3btQ1l6Ijqw9q3zkoT2d5n5JXAQ8styuNGJbUnnfnO9Llx4N9ckjiH2u99P8uJ99aG6cyu2kkfZdNps0SDHn+/KmQtmPDea8j+7cYe2EjxL7QD5QPvJQ9iZNW8p9IZkE/p72DPCL2oJUCTHX+/NT6hdW0oM9j9jn+rOG8y0AfhLMuKH2RdKKgeNgglRDJNd7s5Qyc+v/MJhzUYGMvXIBsQ/kT8tHHthc0rz73BeSxaTn5+NmczZdCGqYdnLZ+BrAW4l9pk0/8js9mG99bRJ4O+P3y3GCvHcC3logc3Qc1mcLZOyV6K22No92j053Wl+7lDLPQGvZjjSYMcd79e3C2bVpnyP2mf5dg9lOCWZbX/sV490RnSAt9JPrvdqq4bxnBzO+qeF8vbId8YOmrSO+n0l8sNO67TyaP0Ha4HjyjZk4vnB2bVy0GNTvNZSriUd11zPenfVpOxEfWT/dXt9w1siU89XAcxvO1yvHEfswltDO57zbk38Q0dmk55N9kav4yn+WDq4NmkN8LvmjGsg1Qd5HT6tJi8W09cdJE04kzxoJN9Pc4kTzSTOmIvkObyhbErMyhwAAFkBJREFUL0UHZPy4fOSBnEnei8mnaW+RkKbMJg24ib5395PuNKm+/Yh9lpOsWdkupxcFc63bfsL4DPYbxofJ8/419Vj30GCuVXRzqnVrvYPYB/Kv5SNv0gnkvfV/FuM3eGhQTyTPe3hq6eBar6cT+xxvbCDTLqR1JHKdrz+jvx3OHcmzouCZDeV7djDXNQ3lepCu1bcfVfT5WNvWZF4InEG+xxLnkZY+nsy0vXVtRip4chxwMOnz2BnYhjQi/27SLdsrgctJtfa/Tnq2WcJ5pFv40RkPzwM+Eo+joIOCr78sS4q1vZd8tfdvAp5C6lA0YQ5wJPAYUgGtg0jLb29DWtZ3Cel8vZ50vl5IOoema/k37ZekkfzvCm7nWcBLgGXhRGs7MPj6Jo6/XruMWI+sbQMy3ky+XxI/oZkBf1sBf0AauftAINsrKLNoyQHEny2uIpWcVl2fIPY5vj9znpOCeWa2u2hmyd45pGqp/wzcM2K2G4G/pUwFu3lTfy/6fp7SQLZ/CWaKdmw0w1xG/wKabkcUT71hO5Fqe+e4mNxG6tnn9DDSr51RLyLra/eQOj1bZ866rhyrJ76w4YzatP8l9hm+NGOWCdIv5BznwUrSo7+ctiaNiM81JXY655k03xF4Q4asH28g14+CmV7cQKbeOoDYh7GKdAu7Ld5DnpN0FWlEbS7bAe8mDYbLdSFZt91Ks4WJTsyQ8VMN5tNgos/an5AxS/R58Mz2xoy55gGvJN1Ob+p8XUb6km7qUfN2pMp+kYxXZc40QXpEEsn0mMyZeu03iH0Y1xVPvGEPJd9SmX+TMddvk+4mNHUhWbd9kjTVJrcJ0uCqSLZS4xa0frsQP752zZRlNvHHj9Pta+QbpPtI1jyvL9G+BzwkU/Z1fSRDvt0z5tkzQ54dMubpvdcRP/Ha4uPkOSHPI8/FZDPS1MFSF5KZ7bs0MwXqTRmy7dVALg3m8cQ+u7szZolOP55ut5Knfv0E6XZ/dI76KO1mmllMLMddu9/NmOfJwSy/zJhFxL8031c+8nrtTp4T9z5g3wx5Hkpzi5kM2i4if2/58Ay5npc5kwb3J8Q+u+9myjGLeDW46ZZjVb+FwL9lyjNq+xVplcac5hJ/5PPBjHleFcxyfsYsm9SHed/RgSiXZ0kR9xLyPEt7C/HnXgeQ6t/XHhx5GPBV8hbNWARcG9zG/jmCaCTRKYC5pvw+hVSQKOq/SV/cEVuRZuM0MeJ9GNsA55DnB8i0FcB/BbeR83yNjh9p25TzzruWWI/sieUjP8gC8gzWWUS80t9+lH3eP0g7I7hP64o+V/yXzHk0uK8R++xy1YjPsXDNvaRnyhGbk57B1z5HZ7YfkXcMz+8H81ybKcfmxAcAviZTFk1ZTOwDaUOd7VzPEh8fzLELcHWmLLnbbwT3baY/Dmb5fsYsGs71xD67Z2TIcAB5qnT+VTDHHNIdhNrn5vraPwT3baZo6d2V5OmQvDqYYzXtXnW2k+4j9oE0Mdp8WD8mfmCdE8wwB7ggQ46m2jXkW8ToqGCWOzPl0HC2IP7Fm+N28GnBDKtJi3xtEczxjxlyNNUeIF4xb9ps4tMBo1m2BW4JZlhF87VOeid6YOScIjKKHIPSJoFfC+aIrqdQouW6fbuA+IBLF/Mo75HEPrP7iY+zmUvqAEaP5VcHczyD/MuE525fCu7jTN8NZokWWDor+PdXk5awVmbXEftQfr944rX9HfED6wvBDEeTZwnOptst5LtjE+3Nb58phwb3PGKf2c8yZHhqMMNqUonbyN2sbYFfZMjRdJskrQ2Sw+eCWZ4e+Nu5fhy9PZBhJH2YBXBr8PWvprl1oweRYwrQOwOvnUMaFNeFY2VX8rxfkG7BRmyeJYWG0YZFWHIcfx8gFfwa1TtIi2213QSpGmEOtwVfP8r5upB0bXxd8G9P+2Km7WiGjxHvmZ1BnU7AI0bMO7P9NJjhhRkylGz/HdzfaecEc+R6vqnBfZ7YZ/a3wb8/j/gytcuIFf05mDSorfZ5OGi7g/jMJIC/Dub4oyH/3tOBS4N/c2b7OflWdx1YF37VRf0wwzb+mLSgx++QfmWW6gzk+DVxeuC180knVpecSJ6BNL8Kvr5N60f0RbTTFZ2D/STSXPeIzxGrBvcW6t6xHNb2wOMybKfp83UnUo3+vyY9qz+beM2Jmc4gdQSUWXQxoC63u4ndin5+A5kuJ/3SehxrOlO7Ay8iFSjK8TeeEtjnaf/ewL7bbJtqxzC6h5F/rM7twIeAk6e2P5tUffMZpKp1Of5G9M4L5JmCV6vdiaP/GxVd4KWrLboy3bczZrkGeC4bv+u0GalnHf1bOe5a5Fga2GYbpl1NzNsyZllMera9qR8Qb8rwt3Kst/L6DDlqtb/IsP/aiDdS/0Ou0Z4ZeM/2yZjjcwzew90SuCn49z476k7PEK0oZ7MN2/6R0U0QP2+m208Zrh7Cl4N/76aR9nhtXb3GX0fFAcN9GAMA8GFio2q7aCmx4j85KqIBfAJ4DnDPgP/+XuKlfXcLvh7SWuNSSf8ZeO2jyHPcX0iqGHrFEK+JVvXbmfi4ha5Ou30Z6VpdRV86ALcD/1Q7RGFfI1VBHNXTMmT4BvBi0nzfYXw9+HdzLBMcXURKGsatxFYizHG+3kqqYzDsksgXkCr7jWoO8S/whwVfX8MnyTdraSR96QAA/A3puVZfRL5EZxOvHLgY+AOG//KH+Jze6HSabfAOgMo6j9HOlWmRwYPTXkSaljesVSO+bqboOdu1DvslwMtrh+hTB+A2UiegL/438NqDidch/yCjP9uLzIOG2IUU0vgHqaTIr/8J4h32C0jP8kcxi3iHeVXgtRN06w7AbaTxWZE7tFn0qQMA8H7yjDhtu3tJPcxRRdcxnyS916N6bPDvR3+NPCr4emlYkQ7ADqTyvxHvCbz2UcRKF69i+McOMx1Idypv3kOaUhmd8ZFF3zoAk6Ta/tdVztG0HxDrUe8Z/Ps/JNUiH1V0ad8bg68/Nvh6aRhLgYsCr4+er/cD5wZeHz1fbyVVLxzVccG/X8odpEJlP64dZFrfOgCQBgSeQJ6pJ20VPcCiA3K+E3jtI4Hjg3//yuDru3JB0XhYROwLMHq+/hRYMuJrNydVSo3ow/l6Fan42YW1g8zUxw4ApKI0TyBVpRtH0dtL0QE5o5YynQD+Pvi3Ab4feO2OwL4ZMkiDip6v0Sl0kdLDf0Z6BBHxveDr294B+BJwFGntgFbpawcAUo/sGOArtYM0IHpBiQ6iG3Ua3ktJ9dQjJol1AE6kwqIc6rXo+bo6+PpRz9ejgL8K/m2IDVh+KKncexvdQ1pM7RnExjg0ps8dAEgfytOAUxmvKYLXBF8f+UUAcNIIr3kmsYFI075PbBDgb2bIIA0jer5Gl64+kuF/xR9I+mUbXclvGfDNwOufSfs67CtJxecOIhVCi3bQVMAuwHtJB2Tt8pDRFl2R7NkZMgxTmORlpIFIOfY9sjb3QtIMitqfn61fLVrEZ9cMGYZ59PZE0sC9HPv+xZH2eI1vZsqRoy0lVTEdpoyyWmZX4A2k8QG1D6hRW3Qp2oMyZLgFOHwTf+dw0iOYXPu9grSy4Kh+I2MWm23QNsods5kmSHe9IhkeYNPLj+8KfIC8Kw7+VmC/dyT92q752a0gFV07FYuHjZ39Sc+lP0F6TnUrad3p2heMTbU5wf2eRXo8Es2xjLTAySNInZItp/77ZaQywZOZ9/s/gvv92cx5bLZB2uOIiy7Is5p0Pp5F+oW/NTCf9GPgd6f+7/dl3u+biF2rXp45z8ba0qm8PyZdJ/6GNF6pK/UH1CHRuw85nol9MZihRnt0YH93If0Kivz962jf80g17+PUO26nvS6YoUb788D+ThBf5n0S2COQofP6PgiwrZYFXx8dAwDxX9OlfYVY/YFTiQ9oOot0YVG/REu6Rqv4QVpyu0t+QSoXPqonkEqWR3yHeNGwTrMD0E7RC0qO1fC+mCFHKSuBvwi8fg5p1cKorl2ElUcbztdrSRU4u+Kvib1vL82Q4d8ybKPT7AC0UxsuKHcDZ2bYTgnvIlVTG9XvEBs8CGkud6uqfKmYNpyvkGYxdcH5wMcCr9+PNLc+YhL4fHAbnWcHoJ2iF5Rcz7XeQxrl2maXAG8OvH4ueVaJPCvDNtRNbTlfP0f71zlZTFp2OPKo7M3EBzqfTxrU3Wt2ANrp5uDrH5ElRaqW+IFM22rCEuAUYmMm/oj48r+rgU8Ft6Huasv5uoLYwLoSXkys9v9hwHMy5DgzwzakRryG2OjWb2bMsjVpTn/tEcPrthXA04P7toA0CCiaZRzLSWtwv0bs+LmP+C/amc4J5mmq/W2GfftChhy3kaY4Sq0ULUhzN3mno51A3uIf0TZJ+uUe9ZZMeU7OkEXdtR3xY+jhGfM8hFQeuPZ5OrN9lPg16SmZsrw1mENq1MHED/KjM2d6Y4ZMOdpK4A8z7M8h5Ck/fAU+ShPcSew4ek3mPE8iXtciV/sQ8XNkc9JMh2iWB4DdglmkRi0gfvK+rYFc7wpmirbFwLMy7McsUmXHHJlekSGPui96PJ3fQKZTSI/Kap2vk6QBtjnuRua69vxrhixS475L7EC/rIFME6TneLlL+A7SLiVe+GPaKzNluhVLgSr5R2LH0kpSbfvcfpNUxrb0+XoX8TE6044hT83/VWx6fRKpFd5B/IDP+VxxpueSRuCXuJCsBN5JWqkvh6OA5ZmyvTxTJnXf04kfT3/SULYjSdMDS335n00ah5DDdhmz/0umTFLjTiZ+wEeKbWzKw0irYDV5ITmHdPHKZVvyPEdcTVrDfV7GbOq2bYkPlP0Zza0lsSVwOs3evbuUeIGemSaAL2XK9gDx6b5SMVsTv+21jGZuK06bID2TvziYc2ZbRTrpH99A1pwLHP1+5nzqvp8QP66e1HDGR5Fn5cCZ7UfA88k7lRHg9Rkznp45m9S4C4gf+G8skHMW6Y7F5xj99vpPgf9Hc730nAMYF+HIfz3Y24gfW6VqShxJKvI16uyFG0iVQo9pKN+zyTf1+F7yPZKQivkT4gf/3eSrNT6IzYGnAm8nPQv8OWlA0HLStLtfkG4VfoE0zuEUYOeGM72WfF/+q4DjGs6rbjqMPMfYEwtmngMcS+p8n0XqiN9BGuOzauq/ryA9jjsNeCGpFn+THk++cTqrgVc3nFdqxPbkmav+kdLBW+T55H3u+aGy8dUxi4gfY4uA2aWDt8ThpB8tuc7XC+nve6kxcDbxk2AleQfTdcXzyTsP+hbS2AxpQ15HnmPtJaWDt8AjyFvBcCX51lmQqjiFPCfDT0gFhvriJeQvX/zsonugLtqDPHPW7wb2Lpy9pseQ95f/atK4H6nT5pCmnOU4IU4rnL2WN5B/upNziDWofyXPMfc90nLV4+7J5K8rcgmwWcmdkJryUvKcFJPknafbNguBfyLvhWQ1aSDjFgX3Q912OPk6oO8onL2015C/XPES8lUNlapbQL4leZcAjy0bv4g9gB+Q/8t/Gf0cP6GYXHPtJ4GXFc5ewgLgTPKfr6uBF5TbDamMN5DvBLmH5ubv1vAM4Jc0czE5teB+aHw8hnzH4CTjdRw+HLiIZs7XM8vthlTO5qTiG7lOlLtJF6ku2w74Z5q5kKwmrWEujSrHDJ7ptor0KLDL5pAKk+WY2ry+9kN87q8x9lvkPWHup7u/LJ5Fvsci62tfJX9pU/XLw4D7yHtcnk43BwYeQSoZ3NT5eg2wS7G9kSr5KvlPntOB+SV3IuBRwHk0dyFZTZoyuWWpHdJYeyP5j89v0Z0vu92BT5J/Su7MdidwUKkdkmran7xlMqfbpcCjC+7HsPYmTcVrcjWz1aTHLNYNVy4LgCtp5kvvBTS3emDUtsDfAUtp9nxdzngOapY2KGdt+5ltFalWwHbldmWTjiUtMpSjuMqm2s3AgWV2Sz1yPPmnuk23c0g/Ctpib+B9pAV4mj5flwO/UWa3pPbIuU72+to9wFuo1xHYirTc7nc2kjF3u4HmFzlRf/0FzR27K0j1L2odv3NZsxpoiY76atL03JNL7JzURtsB19PsSXYPacnPEvPgFwK/SbqI5B44tal2HWnAltSUWaSlfps8jleQqhA+meYXwJlNuvX+IZqbgruhthQ4qeH9k1rvWOABypx0FwGvJw3Cy3FxmU+6gPwNaVBTE+MaBmlXAntm2B9pU3YEbqLMcX0T8A/ACaTOddQsUoXDV5OmN+au2z9oWww8IcP+iPYOINHgngd8inSClnIPcAFp7fCrp9p1rKnnfTdp8NMOpCWNdySNWj6QNFr3EGAf6k+z+xZpauWdlXOoPw4H/gfYpuDfvJ9UJfP7rH2+3jH1/19M+i6YPl93AHYC9iWdqweTzt0cHYmI64GnAxdXziG1Sq61AvrUPg7MG+XNloKOIf/iN+PevgvsPMqbLfXBm6l/knahTQJvGu0tlrI5ieYq4o1bO4v6dx+k1nsX9U/WNrebSM9EpTZ4LuXG8HSx3Ue6u+mjamlAr6TZqltdbf9Ber4ptckTqTegrs3tEtKiQZKG9FukebK1T+I2tPtInSKprQ4FbqT+udKGNkkqJNSV0uRSKz2e8vNz29bOxvn96oY9gUXUP2dqtkV0f4VSqTV2Br5M/RO7dLuRVElQ6pIFwNvp3yO8JaSBuc7KkTKbBbyOfow4XkIqYeyIYXXZrwO3U/98arqtAj6Ni29JjXsUcCH1T/om2lLgH0nFS6RxsAvweeqfW0198Z9FKjIkqZAJ0q3xW6l/EcjRlgMfBnbN+SZJLfI44CfUP9dytEnSImYl1haRtAFbkp41ll50J1e7CvhzUslSadzNBk6lux33O0k1Stq0bLHUezuQFvgptUBJpK0CzgVOofmVzqQ2mke6g3cx9c/HQdqFpI7L5k28GZLyWAC8mPZNQ7of+CrpImIdcCmZAE4GzgFWUv88nW6TwA+BNwAHNLb3khpzIPBG0vK/NS4iNwGfAZ5P2RXTpC7aGXgJcB51OgO/Av6LVGzroQ3vqzKzxrI25gDgROBY4DjyF9W5H/g5aanSC4BvA9dm/htSX+wMPJk15+sh5H1ctop0fl4IfAc4n1SydzLj31BBdgA0jF2BXwP2BvYiVS/bE9gNmDP1bxaSHiksJw3+uWvqf+8EfkFai/wy4ArSmuRePKRmbEU6Xw8g/Trfc0ZbMPVv5gJbkO4erHu+3kE6Xy+faleSFi+SJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSJEmSpKH9f/Uxca+34gTRAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>
                        </span>
                        <div class="trust-text">
                            <strong>Envío gratis para este artículo</strong>
                            <span>Tiempo estimado de 8 a 11 días</span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <span class="trust-icon">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="42" height="42" fill="url(#pattern0_23233_13350)" />
                                <defs>
                                    <pattern id="pattern0_23233_13350" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_23233_13350"
                                            transform="translate(-0.02 -0.02) scale(0.00203125)" />
                                    </pattern>
                                    <image id="image0_23233_13350" width="512" height="512" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAACXBIWXMAAIv7AACL+wEFCY1hAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAIABJREFUeJzt3XecJ0WZ+PHPbGADsCwscUkLCEiWpBIVQQEFAxJET/BUMJ2oeIp6Brw7w3kmPPWMp+IpChh+AgonKiASVEAyisACsqRd8rJxdn5/1Iw7LBtmqquruvv7eb9e9WJF6jtP9053P9/qqqdAkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkqR69ZUOQFISawDTgPWAqcAEYPKw/2884XqfOvjvhv//Qx4e/Odi4PHBP88D5g/++bHBP88Z1hamPAhJ+ZgASM01DZgBbAFsMvi/hx7y04B1h/27CWVC5AlCIjB7sA1PDmYDMwfbHcCTRSKUtFwmAFI5U1j6gB/65/A/r1korro8ANzJ0qRgeLuDMNogKRMTAKl+44Btge2BHYDdB/+8BV6Dw90LXAXcCNw0+OdbgP6SQUld5c1HSms6sBOwC7Dz4J+3I7yD1+jNIyQD1wHXD7ZrgQdLBiV1gQmAFG8s8ExgH2DfwX9uWTSi3nEvcCnwu8F/XgMsKRqR1DImANLIrQ7sylMf+GsXjUhDHgeuJCQEVwGXAI8WjUhqOBMAacUmA88HDiE88HcmfOtX8y0G/kRIBM4f/OeCohFJDWMCID3VlsBBg+1Qwhp6td88wujAhcA5hHkFUk8zAVCvm0QYyj8IeClhwp6673ZCMnAhYYTg8ZX/51L3mACoF20AHAm8DNifckV01AzzgYuBnwA/IhQwkjrPBEC9Ym3gcOAo4GBclqfl6weuAM4CziAUL5I6yQRAXTaVMKzvQ18xhicD38ORAXWMCYC6ZgrwcuBo4IXAamXDUUcsAC4Afgj8jLAHgtRqJgDqir2AEwgP/tULx1LaIsIDatmd/PoH22OD/274/z+VcD8Yx9I9CCYBEwf/PIUwgrJWnYG3xBOEROBrwO8LxyJFMwFQm60DvJbw4N+hcCx1WgzcQ9hI536Wv+ve8B35Hlv+xyQxjrD74Dos3YlwqA3fnXA6sDlhwmWXXQt8nfCK4JHCsUijYgKgNtodOBH4B56+p31bPUxYmrZsu3fwn23dKW8CsDGhvsJQmw5sNPjnGcCYUsElNJ9QX+BrwK+AgbLhSKtmAqC2WA84HngjYWe9trqPpRvaDG1ucxO9W6VuTWBHQpXFnYf9eWrJoCq6iTAqcDrwUOFYpBUyAVDTbQu8CziO8E66LRaxdAe7oX+6i93IbUrYSXHnYf/cnnaNFswDvgN8Fri1cCyS1Br7AmcS3n8PtKA9BvwSOJVQVbBNyUpbrEH4vTiFMNz+MOX/3kfS+gfj3Sf9KZGkbhhDKNZzGeVv2qtqswgJyjsIcxLa9M20K8YSJn+eSBhuv5Hyvxeran8kjGa5qZQkEb7ZnUSY7Fb6Br2idj/hIXMs3Z/Z3mabAW8gFO9p8gjBnwmJy9AyS0nqKWsRhswfovwNedm2mLB73AeBPfAbfhuNA/YDPgZcBSyh/O/V8hLLDxLqLEhS561OeI87h/I34OHtAcKw/onAhrUdvUpZj1AW+quE5ZWlf9+GtzmEa6Iry1ol6SkmEB6uTbr5ziYM7R+O72V7yVjChMLTCN/CS/8eDk9CT8FXA5I6YjXCg/8eyt9gh75tDT30x9V43GqH4cnAA5T//RwA7iJcM/5+Smql8YQZz7dR/ob6EEsf+u4KqBUZS1jGeTrwKOV/b28nJAKOTklqjSOAv1L25rkI+ClwGD70NXoTgVcCvyCs5S/5u/wn4CX1Hq4kVbMdcD5lb5Z3A58kLAmTUtiY8G5+JmV/ty+k2xtfSWqhdQjvUEtV7ltAqLZ2FA6Xqj5jCK8IziSMMJX4XV9IuNbcmllSUeMJ1fBKFV35C+Gb2fp1H6i0jI0Iv3ulCljdS5gfYI0KSdkdRqhoVuLm9yvgxbihlcobA7wcuJQy18IVwJ61H6UkAVtT5j3/QuB7wG71H6IUZW/gx+SfNNgPfBPLVEuqyTjCkOeT5L25PQp8Bif1qT22Ab5C2BI457XyCPAWHBmTlNAuwB/IezO7l7BXwNr1H55Ui/UIv8MPkvfauRTYtv7Dk9Rlk4BPkXfG80zgjbh2X90xmbDjZc4y2HOBd+GqGEkR9gNuId8N636sg65um0xYNXMf+a6ry4HtcxycpPabStgxLdf2qQ8SHvyTchyc1ABrEH7ncy2fXUgojrVajoOT1E4vJt8w5WzgfYTtgaVeNI3wim0uea65q4FnZTkySa0xCfgv8nzrfwz4CDAly5FJzbcR4fpbQJ7RgA/j3ABJhBn+N1D/jacf+BbhZifp6WYAZ5NnNOBiYJMsRyWpcfoIE5LmU//N5vfAXnkOS2q95wPXUf91+QhwTJ5DktQUGwDnUf8N5m/AcViYRBqtcYRa/zlqCJxOWKEgqeNeTv03lbmEWcdrZDomqaty7bR5I7BTpmOSlNlEQnnSur9NnAFsmumYpF6xG/VvODSXUIRLUodsRngPX+fNYyZwaKbjkXpRH/BawhLaOq/lHwJrZTomSTV6HvVWHltCKBy0Zq4Dknrc+oT39nUmAbcCO+Q6IElpDc3yX0h9N4m/EGYsS8rvMMJE27qu78eAV2Q7GklJrAGcSX03hqHSohNyHZCk5aq7dPcSwrU+JtcBSYq3DfUW9rkMhwalpjkEuJP6rvtzsHqn1GivAB6lnhvAAuC9+E1AaqophJU+dY0GXAtske1oJI3YB6nvwr+ZsAxJUvMdTH0Tf2cDB+Y7FEkrMx74JvUN/X0Fq4RJbbMBcAH13BMWESYYSypoTeDn1HORPwi8LN+hSEpsaCVQXbsMfpNQslhSZhsD11DPhf1LYHq+Q5FUoz0I6/rruFf8hLCduKRMdgNmkf5ink/4xuDmPVK3TAG+Tz1JwCXA2vkORepdB1PPTP+7gedkPA5J+R0HPE76+8eNhJLjkmryVurZFexCYL2MxyGpnGcCt5D+PnIX1giRanEK6S/YJYStRsdnPA5J5a0J/JT095SHgf0zHofUaX3Ap0l/oT4OHJXxOCQ1Sx/hi0Xq+iHzgaMzHofUSWMI6/BTP/xvBrbLeBySmusYYC5p7zGLgRNzHoTUJWOBb5H+4f8zwgYikjRkZ+B20t5rlgBvz3kQUhesBpxF+of/aVjLX9LyTSNMCE6dBJyU8yCkNpsEnEfai3Ah8PqcByGplcYDXyR9EmDpYGkVVidU4Ut58T0OHJrzICS13juAftLei96f9QikFlkD+B1pL7g7gZ1yHoSkzjiW9PsIvDvrEUgtMAn4NWkvtGuBTXIehKTOOQB4hLT3pn/JegRSg40HziXtBXY+ofa3JFW1I6FUeMp71AezHoHUQOOAs0l7YX2FsIRQklLZgvTlg0/OegRSg4wBTiftBfUp3MlPUj3WBa4g3f1qMZYNVg/qI32Fv49kPQJJvWgyaV9ZXp43fKm8/yDdBbQEZ9ZKymc88CPS3cO2zBu+VM6/ku7C6QfenDd8SWI86aqVHpM5dqmIfyLt+7Pj8oYvSX83Dvgh1e9lbhqkzjuc8NBO8fBfAByZN3xJeppxwBlUu5+9NHvUUka7A0+Q7uF/WN7wJWmFxgLfI34kc738IUt5bA7MIt2wv9/8JTXNWOC7jP6e9uMSwUo5rAXcQJqHfz/w2rzhS9KIjQW+w8jvaY8AzygSqVSz8aTbW3sJzvaX1HxjgC+x6nvaY8ALC8Uo1aoP+BZpHv4DWDJTUru8BriL5d/PzgO2LReaVK8Pke7h/+HMsUtSCmOBfQnLn98HvA6L/qjjjiQM2ad4+P9H5tglSVKE7QjvtlI8/L+cOXZJkhRhTeBG0jz8z8UtfSVJarw+0tXFvgpYPW/4kiQpxgdI8/D/G7BJ5tglSVKEA0lT4/9RYOfMsUuSpAibAQ9S/eG/EItiSJLUChOBP1D94b+EsD5WkiS1wNdJ897/o7kDlyRJcY4kzcP/LMIKAkmS1HAbA7Op/vC/BZiSOXZJkhRhDGl2+HsM2D5z7JIkKdJ7STPp75W5A5ckSXF2BRZQPQH499yBS5KkOBOB66n+8L8Qa/xLktQa/031h/+dwLq5A5ckSXFeSvWH/zxgt9yBS5KkONOA+6meALwtd+CSJCned6j+8P8FFvuRJDWID6WVewFh0l6V8/QgYYe/+5JE1D1jgG2BZwAbEQojOUlSXdRP2PHzXuA24C+D/04qYlzpABpsMqHWf5WH/wDwenz4L2sz4GXAAcD+hNcsUq95Avg9cB5wJvC3suFIGvI5qg/9fyF71M22L+FGt4jq59Zm61LrB84BDkJSUXsCi6l2Qd8ITModeEPtRvimU/oma7O1of0W2AFJ2Y0DrqbaBTwf2CV34A00GfgkfuO32UbbFhKunQlIyuZDVL9435U96ubZAriZ8jdSm63N7WrC5FhJNXsm4dt7lQv2YlxdsSdh4mPpm6fN1oU2E9gOSbX6FdUu1HmEJW297PnAXMrfNG22LrU5WElUqs0RVL9IP5A96mbZAniA8jdLm62LbRawMVIivT5UPWQ14AZg6wqfcR2wB2HCWy9aE7gM2LF0IFKHXU6on7GgdCBqvzGlA2iId1Pt4b8EeDO9+/AH+BI+/KW67QV8unQQUldsQCjPWWVortcvyH0ISVDpIVKbrRdaPyERkFTRt6h2Md4BrJE96uYYg0V+bLbc7Up8hStVsishm65yIb4oe9TNcizlb4Y2Wy+2lyBV0MsZZB9wCaE+fazTgePThNNalwPPTfRZDxPWPM9J9HlNsjOwfkS/WcBNiWPJZXtgekS/BwiTartmGjADWDvR510IvDDRZ0k9peo318exQtdWVP8Wswj4BrA73Z6UGltj4jMlgk3ks8Qd84Ulgs1kDPBswpeHqqOPS4At84Yvtd8EwjfNKhff+3MH3UCnUO0c3kFYOtkLbiLuHL27RLCJ/DNxx3xjiWAL2A+4l2rX0HuyRy213NupdtHdDkzMHnXzXE+1c7hh/pCLeYS483RsiWATeTVxx/xwiWALeQZwP/HX0dX5Q5baayLwN6olAEdkj7p5diX+/C0a7N8rVif+XD0/f7jJHED8cU8uEG8pB1FtGe1O+UOW2undVHv4/zp/yI30OeLP4dcKxFvS1sSfq20KxJvKtsQf9zMKxFvSWcSfq08ViFdqndWpNty2GNgle9TNM45qu/312qYmzyP+XLW5xsSaxB/3/gXiLWkv4s/VPcDY/CFL7fIB4i+yAeAr+UNupBcTfw6vLxBvaa8i7lw9WiLYxB4j7tiPKRFsYX8m/rrq9XokitDlZVfLWotqM6ofA05NE0rrHVeh73eTRdEem0T2uydpFGXMiuzXi7veVbk2XpssCvWMXkoA3gWsU6H/JwjD3r1uCvDSyL5LgO8njKUtYutF3Js0ijJij6EXa2x8l3CNxDiC8MpFGrFeSQCmAu+o0H82Ybc7haHZSZF9f0VYgdFrYh9msd+emyT2GHoxAbgT+G1k38nAKxPG0kXjB5sG9UoCcAohCYj1cULlP1UbauzF4X+IK4cLvZ0AxJ6ztvM1QFr7EVZYzAEWAk8AfwT+jd5aityzphBfhGWAcAOL/cbbNZsTv175Cdo9o72KvxB3zt5ZItjETibu2G8pEWwDTAHmEnfO+oFN84fcSJMY2U6vtxO2c9+b3vlC3FPeS/zDfwB4a/6QG+vDxJ/H7xSItykeJ+6cHV0i2MRiV0D08ojbGcRfZ5YoD8P8v2T0524W8GVCYaZx2aNWcuOBu4i/mO4k7Bug4Bbiz+VBBeJtgrWIP2dVdqpsiv2JP/5endRWZZntnwvE2zQfJf78DbXZhBGEw7Hse2sdR7VfgjfkD7mx9ib+PPZyoZLtiD9vXdjp7RnEH/+2BeJtgnFU2yRoz/whN8YU4mtPrKg9BvyAMCLXq68xW+ka4v/S/4ozRof7b+LP5ScLxNsUBxJ/3row92Qy8cd/QIF4m+IzxJ+3LxSItymOJ+3Df9k2j/B64R3ABpmOSRFeSLW/aGfULrUaYUgs9lz28mYl/0DcOXuoRLA1iZ2E++oSwTbEs4i/3mYTrtle9FPqTQCGt8XApYRkoBcLVzXa+cT/xd5G7w5ZL88riT+XVxWIt0liJ6HeUCLYmtxE3Dn45xLBNsi1xF93LysQb2lrAE+SLwEY3voJywtPpUUbeHV12cOOVKuN/TnCX6gC1/7H6+UiQEMsBhTnfyv07cURzBdT7rXZGGB34COEiZg3EpKB3QvF09O+TXwmNwcnegw3DVhA3LlcBGyYP+RG+SFx5+7bBWKty+nEnYMzSgTbINMJw8wx524B4drtJVWWT9bZbgNOI6zq6avt6CN0cQRgOnBshf5fIRStUXAs8e8TL8D9E3q5CuAQqwHGmQVcGNl3NbpRR2KkJhBGAJpoS+AkQpnnO4DPAvsUjajDPkR8pjYfhx2XdSXx57MXt3Rd1m3Enbu3lwi2Ju8g7hzcWiLYhnkN8dffZQXiLeUwyn/TH237E6FOhhIZQ8iwYv9CvpE/5Ebbhvhz+SjdWMZWVeykpC5t7HIUcedgbolgG2Yy1da190othf+h/AM9pi3GejPJHEz8X8QSYIf8ITfax4g/n18vEG/TrEP8+durQLx12Yf481BlE6+u+Bbx5++jBeLNbRzVlimXbotxJCCJs4n/SzivQLxN1ke10RR/ocNqlNjzt3mBeOuyBfHnYfsC8TbNC4g/fzNp2MSzGlQpttWUdl3ys9JjNiBs9xj7F/CC/CE32gF406kqthjVErq1B8UE4neRPLBAvE1jMr5yX6L8AzxFe07qE7MqXVoFcDzxpXuvB36dMJYuqLKOeGjZV6+LncU+h7CMqysWAA9H9u31lQAQrqUqSyK7XBNgDPDy0kEksnfuH9iVBKAPeGOF/r6vfqpJwBEV+n8vVSAt5xLApVwKWM23K/Q9mjCZsIv2oju/I9nrNnQlATgA2Dqy7zyqVdzqoiMI29jGuAK3JB1iFcClrAZYzV+AP0T2nQK8NGEsTfKKDD9jcYafAfB4pp/zd11JAE6o0Pds4ocnu8rSv2k4ArCUIwDVVbm2uvoaoMpI5Uj9D2E+z38TtmmuS2yC19OmEQr4xE682C9/yI22EdXKj66bP+TGuoy48/hvJYKtWeyS0ktLBNtQluV+qt3IMzlvLrD24M8cqvl/KmFUJtXPuIMCG9B1YQTgSOJnTP8ZbzDLeg3xv4jnEdbjKoj99lrnt4xSYo/JEYCl5hB2OY0xjmol0psox/A/hPkTrxv88xLCDqenEgql7QF8HLil4s94D25AF+XXxGddJxeIt+mqbEGa64Jsgz7iR6a6Mqt5uCOIOxfzcUnpcEcSf31eXSDeOt1InhGAAeCvrPoL8/bABwnneTSf/fEK56CnbUi14er18ofcaM8i/gKZQ7fWrle1LvHn8tkF4q3bc4k/H+sUiLepVqNa1bud84dci2eS7+E/1A4fRXxbAv9MeA3Yv4LPmwP84+gPXUP+ifi/zF7fanR5PkP8+fxSgXibbGfiz+WmBeKt2+bEn48dC8TbZP9N/Ln8VIF46/AB8icAsa9fphPq/X8VOBP4IuFVa1eXZmZzMfF/mQcViLfJxhLe08aez+fmD7nRDiHuPPYTX9Cqycaz4m9Cq2ovKhBvk+1N/HV6DwUmm9XgKvInAEuArXIcXC7jSgdQwUbAvpF97wN+kzCWLngR8bOE5wK70J3hxRRiy3rOp7vDgvOJ+9ZzNDAjbSit1ke45laP6Dud8OXngqQR5TUD2DWy7/WEDaZiRtn6gNcD/xL5s5XQO4nP5L5QIN6m+z75M2qbzZa/tb3w2cnEH/uHgA9X6H8v3Ryha53YNdYDhO1JtdQUwjeK0jcmm81Wf3uS+EqfTXAp8ce+A2H0uMrGcTmKD2XR1joAmxL/zvlvwOUJY+mCo3BCitQrqu71UdKGhPr/Mf5CWDp4L3BOhRhOrNC3UdqaABxD/NrgMwmTObRUV8uESlq+tl7zRxD/3Dp72J+/WiGGF9KRlTptTQBeVqHvWcmi6Ia1sByy1GueRzvrK1QpNvaTYX/+JXBr5OeMAV5dIY7GaGMCsDbxw/93AVcmjKUL9qSdvweS4o2hfat2pgHPj+x7N2Hp4JABqm0Df1yFvo3Rxhv/C4lfvvgDwl+8lrLIitSb2nbtv5T4e//ZPP3e/z+EpakxtifsA9BqbUwADq3Q94fJouiOSaUDkFTEGqUDGKVUw/9D5gA/qvCZx1fo2whtSwD6gIMj+86ke5thSFIvWIMw+hvjfsKy8eWpMhnwVbS7mF7rEoBnEdZwxvhFykAkSdkcBkyM7PtTVrzV7m+Jnwy4LvCCyL6N0LYEoMrwvwmAJLVTlZVfyxv+H+4HFT77mAp9i2tbAnBIZL+FWPtfktpq78h+j7Dqe//3Iz8bQl2C1m6D3qYEYArxy/8uAZ5IGIskKY8JwGaRfc8hfAFcmVuAP0V+/lTi5yYU16YJDC8ifhOG2H2ctWKPE0pr6unGEXZHjHEj8UuTmm4ioRZ7jGuBxQlj6ZJtgDVLB1GjhYR3+DHbGP94hP/dDwhzzGIcDZwb2Vcj9HXiN2/YvkC8bfF+4s6pr1RWbBrxv6vbFIg3l22JPy9trFqXy0XEndP3FYg11vWM/vieYOTLnDcnlIiPOY8P0dIdAtv0CmD/yH53AzelDESSlNVPI/qcBcwb4X97JyteKrgqaxP/fCqqLQnAusDWkX1/njIQSVJ2nyUU7hmpBcAnRvkzzhjlfz/cyyv0LaYtCcC+xO/+5/I/SWq3h4F/YNUT+iAMy/8To5+jdBbx80xeSvwzqpi2JACxS0CWEN6PSZLa7XzgcGDWSv6bRwlbHX8j4vMfAH4V0Q/CKoXdIvsW05YEYN/IftcTfiEkSe33f4RJ3ScRJiLfTXhwXw58mDCJ9nsVPn+kqwaW57AKfYtowzLACcRnVr9LGYgkqbhHgf8abKmdS3iFEDOcfwjw0bTh1KsNIwB7El9pyQRAkjRSs4DrIvvuSVgC3BptSAD2qdDXBECSNBrnRfYbS8uqAnY5AbiHsLZTkqSRqrJ0PHa/miKangD0EV///9KUgUiSesIVjK7mwHAH06LlgE1PALYC1ovse3nKQCRJPaEfuCCy74a0qPR80xOA2M0ZAH6bLApJUi+p8hrggGRR1KzpCcBOkf3mEj+TU5LU235BGAmIYQKQSGwCcDVuHSpJivMQcGVk3+fT/Gcr0PwgY/dUvzZpFJKkXnN+ZL91iH92ZdXkBGBNYIvIvtenDESS1HOqzCN7XrIoatTkBGBH4pdT+P5fklTFlYxs98HlqVLALpsmJwA7R/ZbAtyQMhBJUs+ZR5hPFiN2B9usmpwAxE4AvB14ImUgkqSeFPsaYDowI2EctWhyAhA7AuDwvyQphSrzABr/GqCpCUAf8SMATgCUJKVwKeG1cozGvwZoagKwITA1sq8JgLRqfcDag601tculzB4Gborsu0fKQOrQ1AQgdvkfWANAWpH9gS8SkuSFhGInDwELCNfNF4B9i0UnNVPsa4CdgHEpA0mtqQnAjMh+8wmTACUt9ULCkqaLgbcRltgOvzGNJ8y5eTvhZnc5cGDmGKWmik0AJgHbpAwktaYmAFtG9ruT+Pc1Utc8EzgT+D/g2aPo91zgQuCXxE/Glbqiytbyja4I2NQEYEZkv5kJY5Daal3gNMJQ/1EVPucg4BrgdMK8HKkX3Q08ENnXBCDCjMh+d6QMQmqZycApwG3ASaR5/zgGeC3wV+CThBLdUq+JXV5eZUv72jU1AYidBDgzZRBSS4whfNO/ifCQnlLDz1idkFzcApwIjK3hZ0hNFTu5fNekUSTWxARgLLBpZF9HANRrDgKuIrzr3zzDz5sOfJXwjeglGX6e1ASxCcD6wEYpA0mpiQnAJoRZyTFmJoxDarLtCA/9X1JmmHF74NzBn9/o95xSAlWWlzf2NUATE4AZFfo6AqCuSzXBL5WDCBumnE6Dv+lIFd1M/M6AjU2Qm5gAxL7/nws8mDIQqUGWneDXpHfwQxMFb8WJguqmRYQkIIYJwChsEtlvZsogpIbIMcEvFScKqstiXwM0tpZGExOAdSP7zUwZhNQAQ8PruSb4pTI0UfB64LDCsUipxCYAW9HQZLhLCcD9SaOQytkOOIf2T7DrynFIEJ8ATAA2SxlIKk3cqGBaZL85SaOQyvgscAgN/cYQaWip4vmlA5EqiN0VEMKeAI2bpN6lEQATAHXBS8j38P/RYMthLNYNULvdBzwZ2XfrlIGk0sQEIHYEYHbSKKTu+gPwPODIwfZcqm14IvWCAeLnmpkAjFDsCIAJgLRydwCvAp4DXDLs318J7D/4/zVumFJqkNjt5rdKGkUiTUsAVgPWiOzrKwA1xdzSASzjYeB9hOp9PyR8k1nWwOD/ty3wJppXU+OJ0gFIxCfIjVzF07QEYBrQF9nXEQA1xXyakQQsBD4PPAP4D0Jcq7II+BrwzMG+sdXPUnqMZsQhmQDUKHb4HxwBULPEbh+ayrnADsC7gIci+j802Hdr4Lssf9Qglyp12KWUYl8BrAmsnTKQFJqWAMROABwgDHNKTXFRoZ97BbAPcDjw1wSfdxdwHLDv4GeXcHGhnystKzYBgAaOAjQtAYjNkB4BFqcMRKrojMw/73bgGGBv4LIaPv+ywc8+hmo3wdEaAL6f8edJK1NlkuyMVEGk0rQEYEJkv0eTRiFVdz3w8ww/Z2iC3w6EksF1DtUPDP6MZ5JvouDPiN+ERUrtCeCByL7TUwaSQlcSgAVJo5DSeA8jm3gXYyHwOUY3wS+V4RMFP0d9E/TmEZIbqUliR8A2TBpFAl1JAJwhrCa6CXh34s8cAM4iLOk7mbgJfqk8NBjD9oMxpR59eCdhZ0GpSe6L7LdB0igSaFoCsFpkP0c7FD3MAAAdDUlEQVQA1FRfBj6e6LMuI0zwOxq4LdFnpnAbIaZ9gMsTfea/EkYZpKaJXXLuCMAqOAKgLvoX4J+IT1RvA44izMRP9YCtw+VUT1DmA28BPpIqKCmx2ATAEYBViB0BMAFQ030J2B34v1H0uY+wFn974GzKrsUfqWVfUYxmm+7zCefoKzXEJaXiCEBNnASoLrsROBjYA/gCYXb7sg/1hwgz348nLBtqSjW+0RqapDgD+EfgHJ5eq2MJYZ7EacBuwKFU23JVyiG26FxsnZvajCsdwDLGR/Zr4w1SveuqwQYwiTA0OIaw1WjsBKOmmg98e7BB+BY0mfDwv58w019qk9jlr2sQnnGLEsZSSdMSAOcAqNfMI36L0TbqWoKj3lNl35mpNGijraa9AnAVgCSpyaokAI3aD6ArCUBjhlQkSZ1mAlCT2K2AY/tJkjQaVbanNgFYidgNfWLnDkiSNBpVdp9dPWUgVTUtAeiP7GcCIEnKJXbe2eSkUVTUlQQgdu6AJEmjZQJQA0cAJElNF5sA+ApgJZwDIElqOkcAahC7p7mvACRJucQmAJOSRlFR0xKAuZH9HAGQJOUSuwxwbNIoKmpaAvBkZD9HACRJucSOADSq/H5XEgBHACRJucQmAI4ArETsK4CJSaOQJGnFHAGoQWwCsE7SKCRJWjFHAGoQW15xImGvZUmS6rYksl+j9q1pWgLwSIW+6yaLQpKkFYudd9aoreublgDEjgAArJcsCkmSVix25ZkJwEpUSQAcAZAk5RA7AhBbP6AWTUsA5hNfDdAEQJKUQ+wIgAnAKsyJ7GcCIEnKwTkANbkvst+0pFFIkrR8zgGoSWwC4AiAJCkH5wDUJDYBcBWAJCkHXwHU5P7IfhsmjUKSpOVzEmBNYkcAtkgahSRJy2cCUJNZkf02BCanDESSpOWYGtkvdpl7LZqYANwV2a8P2DxlIJIkLWMCsGZk39hl7rVoYgJwZ4W+WyaLQpKkp6uy5NwEYBUeBOZF9jUBkCTVqcqS89nJokigiQnAAHB3ZF8nAkqS6hQ7ArCEavvdJNfEBABgZmQ/RwAkSXWKHQF4GOhPGUhVTU0Abo/s5wiAJKlOsSMAjXr/D81NAG6N7GcCIEmqU+wIQKPe/0NzE4A/R/ZbE0sCS5Lq4whAzWJHAAB2SBaFJElPFZsAOAIwQncAiyL77pIyEEmShlk/st9DSaNIoKkJwCJCEhDDBECSVJcZkf0cARiFmyL7mQBIkupQpeR8bH2b2jQ5Abg+st8OwPiUgUiSBGwETIzsGzuqXZsmJwA3RvabAGyTMhBJkqi21HxmqiBSaXICEDsCAL4GkCSlNyOy33zgvoRxJNHkBOAvwILIviYAkqTUYkcA7iTsBdAoTU4AFgM3R/Y1AZAkpTYjsl/j3v9DsxMAgKsi++2aNApJkuJHAEwAIsQmAOsD01MGIknqebEJwMyUQaTS9ATgjxX67pMsCklSrxsHbBLZd2bCOJJpegJwHbAwsu9+KQORJPW0bYmvMeMrgAgLiK8HYAIgSUplpwp9Z6YKIqWmJwAAV0b22wlYK2UgkqSetXNkvwcHW+O0IQG4PLLfWGDvlIFIknpWbAJwXdIoEmpDAvC7Cn33TRaFJKmXxb4CMAGo4DbiSyg6D0CSVNVUYNPIvlXK2teqDQkAxL8GeDbxOzdJkgRh+L8vsq8jABVdFtlvArBHykAkST0n9v1/P3BTykBSaksCcHGFvr4GkCRVEfv+/1ZgXspAUmpLAnA18Ehk34NTBiJJ6jmxCUBj3/9DexKAfuC3kX33IUzgkCRptMYTv8NsY9//Q3sSAIDfRPYbB7woZSCSpJ6xBzA5sq8JQCKxCQDAS5JFIUnqJVUKypkAJHId8EBk30Np17FKkpohtqDc/TR0D4AhbXooLgF+Htl3PWDPhLFIkrqvj/gRgEtTBlKHNiUAAOdV6OtrAEnSaGwNrB/Zt0oZ+yzalgCcT9giOIYJgCRpNKrsJ+MIQGJPAJdE9t0V2DhhLJKkbtsnst884NqUgdShbQkAxL8G6CNMBqxiQ+BU4ApgNmFS4q+BdwJrVfxsSVKzxCYAVwALUwaiYCtgILLFTiIEOB54dCWffR/trDr4fuLOZZVlmZLSuYi4a/h9BWJtk3UJk89jzu2/F4h31No4AnAbcHNk34MIf6mj9WbgW8CUlfw3GwDnAC+O+HxJUrMcSPwOgI1//w/tTAAAzo3sNx44apR9tgc+z8h+EcYD3yEuyZAkNUfsK+MlhFcAjddrCQDAsaP8799D2FZ4pNYF3jrKnyFJao4+4kvI30D85nVZtTUBuAx4KLLvPsCmI/xvJzP6EQOAIyP6SJKa4VnARpF9Yzeuy66tCcBi4if0jQGOGeF/ezCwesTP2I72nltJ6nVVVoydnyyKmrX5IXVWhb4jfQ1wROTnj4vsJ0kqLzYBWEhYldEKbU4Azgcejuy7G2Fy38qMJ7564J2EiSCSpHZZC3hOZN9LCAXrWqHN31QXAv8PeF1k/6MJRX1W5EBg7cjPbnwNaGUxiVBHfGzpQFqqn1Bsa17pQNRTXkT4AhjjFykDqVubEwCAHxKfALyGlScAr4z8XICfVOirdhsDvIqwEmQv2j3K1gT9wOXAlwjX+0DZcNQDqrz/b1UC0HbjCSV5YysDrmibx7GEvZxjPvNJYI2kR1kvKwGmMxW4gPjfR9vK2y+w5PbyXETc+bQS4NP1AfcQdz5n5g+3mrZ/O1kEnFmh/5tW8O/3I34LyPNp0TsgJTMe+DHxa4e1aocQqm2uVjoQddbewPTIvq2Z/T+k7QkAwOkV+h4DrLecf/+KCp/p8H9veidwQOkgesB+wNtKB6HOGukS8eVp3fB/FxKAK4BbIvtOAF67zL/rA14e+XmLqFalUO00Bji5dBA95D10496lZhlD/NyvhYSdYVulKxfRdyv0fStPrfP/bGCzyM/6FfFLE9VeuxG2ilYeGxEqtUkp7Uf88P/vgMcTxpJFVxKA7xBmC8fYCnjBsP/t8L9Ga0bpAHrQlqUDUOdUGf7/cbIoMupKAnAP1Walv3nYn2Or//UT6hKo91j0Kb/FpQNQp4wl/t6/BBOA4r5eoe/LCUM/OwNbR37GpYSlg+o9fy0dQA/ynCulA4ANIvteDMxKGEs2bS8ENNxPgHuJ28FpHPB6qp0Ph/971/WENcAzyobRM24nbLkqpVJl+P+HyaLIrEsjAIuotiTwBOJngA5gAtDLBoCPlw6ih/x76QDUKeOJn/vVT4vv/V1KAAC+Rvz72M2AHSP7/gG4K7KvuuEbVCtKpZH5CfDt0kGoU14ETIvs+2vCfhWt1IRXAJMI2ddehHcwDwO/JxRVGO17ldsJS/FemDLAEWhtBqhkBoDjCRvXHF84lq76FvAWwrmWUjmhQt/WDv83wT+y4lr+/cBlwD8DW4ziM1+2gs+rs207+kNvDPcCSO/5wFnAHMrXz297m0MYWXneaP4CesxFxJ1b9wII9TsWEnf+FhI/ctAIJUcAPgmcspL/fwxhVGAv4D+BawhLLX4M3LSSfucCdzC6pKGKG4A/Z/pZaoeLBhvAZELFSY3eAsLmWlJdXk/81r+/JCSoGqVXUe1bwc3Ax4DdV/D57674+aNpH616MgpzBEBqt4twBCBGH3Ar8ff+4/KH3H5jCe/qUz2A7wROAw5i6YjGVEJZxhwJwC4Jz00JJgBSu12ECUCMA4m/78+lA1tTl1gF8HzSDs9vBpxEGI65C/gysAdwRsKfsSK3Addm+DmSpLROrND3TODRVIGUUmIOwLNr/OyNCLOE30KeUqHO/pek9plGmDAeq0rl2cYoMQIwJdPPyZHc/CjDz5AkpfU64ifn3gJcni6UckokALML/Mw63ANcWToISdKo9AFvqND/q4R5AK1XIgHoROYE/JSO/BJIUg85BNgusu9C4HsJYymqRAJwGd3YyMPhf0lqn3dX6Psj4MFUgZRWai+AtxEq/bXVbOC3pYOQJI3KzsALKvTvxOS/IaUSgEuAN9HeJOBn5FllIElK572EOQAxbmdphc9OKLkb4DcJNQGuKRhDLIf/JaldNgGOrtD/a3Rs3lfp7YAvBXYD9gE+R6jq13SPEXYclCS1xzuJr/s/nw5uQ106ARhyGXAyMAPYkVBff2Ub/pR0DmGTEklSO0wB3lih/+nA/YliaYymJADD3QicCuwAbEXI2n5Hc4ZerP4nSe3yZuJr9w8An08YS2M0MQEY7nbCRj/7EvYPGEoGlhSK50ng/EI/W5I0euOBt1fofy5hB9rOaXoCMNzQrn/7AhsAxxP+YhZljOF8wi5QkqR2+EfCBMBYn04VSNO0KQEYbjbhnczhwIaEZOAs6n84O/wvSe2xGmHL81h/JCxb76S2JgDDPURIBo4GpgOvBs4mfTLwGGH9vySpHd5EmFwe6z8TxdFIXUgAhnsMOAM4ClgPeAXwXeCRBJ/9+cHPlyQ130TglAr9ZwI/ThNKM3UtARhuHmHDnuMIcwYOIRRyeCDis34LfCxdaJKkmr0N2LhC/89ixdfOGQs8jzCh8C7CEo+VtR8BaxSJNI/3s+pzsLz2mxLBSnqai4i7ht9XINZcVies2485LwOEV8tdvu8D3R4BWJF+4GLgHcDmwHOA/wCuY2m29wTwc+Aw4JWD/1uS1A4nAetX6H8a3vd7zkRgbcIoQa9wBEBqt4twBGC4tYA5xH/7fxiYmj3qAsaVDqBh5g+2XhJbYTF2Ry1JacVei02prprau4B1KvT/FGkmjjdeL74C0FPF7mvQExmy1AKxD7t5SaNoho2Bd1foPxv4YqJYGs8EQI9H9tsMf3+k0sYCm0b2jb32m+wTVJu89wm6eV6k5Tqc+HdlexWIV9JS+xJ//b64QLx1eg5hn5jY8zELmJw9aqmgbYi/YL6dP1xJw/wv8dfvVgXirUsfcCnx52KAUDdA6injCGWTYy6YfuDZ+UOWRBiB6yfu2n2cbq12ei3VHv53AhOyRy01wP8Rf+HcTbVqW5JGbxPgHuKv25/nD7k2kwkP8CoJwAnZo5Ya4j1Uu3juxpEAKZe9qPbwHyAsleuKf6PaubgVGJ89aqkhNiN+KHGo9QPfAfbG1QFSamOAfQibm1W9VhfTnVG7TYl/hTnUXpY96oawmIuG/BI4KNFnPUIYFbg/0edJvWwDwoMuVe2NCwibo3XB2YRy7bF+Rbr7XuuYAGjIwcD5pYOQVLsDgV+XDiKBlwDnVujfD+wKXJ8mnPZxqFZDLgCuLB2EpFpdSjce/lOAr1T8jK/Qww9/cARAT7UHcAXdWh4kKegH9gSuKR1IAl8G3lKh/8OEGiiz04TTTo4AaLg/Ei4sSd1zGt14+O8FvKniZ5xKjz/8wREAPd0E4DJgt9KBSErmj4SywbGbfzXFBOBqYPsKn3EzsAuwKElELeYIgJa1ADgKZ/BLXTELOJL2P/wBPki1hz/AyfjwBxwB0IrtCvwGWKt0IJKiPQI8D7iudCAJ7EQYyVitwmecBxyWJpz2MwHQyuxIWBrYlaIhUi+5j7DjXxfe+48FfkfY8S/WXEIScUeSiDrAVwBamRuA/enGDUTqJX8Ankt3rt33Ue3hD/BhfPhLozaRMIO4aglSm81Wb1sMfIZqw+RNszth/kKV8/J7XN4sVbIHYYVA6ZuczWZ7evstYe5Ol6wO3EK187KI7p0XqZgXEvYOcETAZivb+glVPA+km75J9XP0sexRt4STAFXFJsAxhIRgX0K2Lqlec4FLCEn4mYStgbvoFcCPK37GXwhr/udXD6d7TACUyjhgBrAtsBGwBqFoh6RqFgCPA/cSHmgzCe/6u2xj4FpgWoXPGCDs9NeFvQ8kSeq8MYRteqsO/VfdLEiSJGX0Xqo//O/BImaSJLXGXlRf8reEUABJkiS1wAbA36j+7f+zuQOXJElxxgMXU/3hfwOhcJkkSWqBL1D94T8P2Dl34JIkKc6xVH/4DwBvyx24JEmKsxPwBNUf/r/AujaSJLXCVOBWqj/87wc2zBy7JEmKMAY4h+oP/yXAoZljlyRJkT5Nmvf+n88duCRJinMCaR7+lwGrZY5dkiRFOBRYRPWH/32EDYMkSVLD7UrY1bDqw38hsH/m2CVJUoSNgbtJM/T/9syxS5KkCGsCfyLNw//7mWOXJEkRxgMXkObhfx2wet7wJUnSaPUB3yLNw/9hYKu84UuSpBgpNvgZAPqBl2SOvSeMKx2A/u6ZwAGEPbEfJQx3XQwsLhmUJEX4BOkm650CnJfos6RG2RH4NcvPfP8GHFcuNEkatQ+Q5pv/APDlzLFL2RzCyHbC+jKhdrYkNdlJpHv4nwuMzRu+lMczgccY+cVwOl4MkprrDYTNeVI8/K8G1sgbvpRPzE5Y/4tJgKTmeRVhvlKKh/9dwPS84Uv5TCfMbI25OL6PSYCk5ngFoTxviof/o8BOecOX8jqSahfJD3AFh6TyjiXdw38h8KK84Uv5vZXqF8uZmARIKueNpBv2HyDMIZA67zWkuWDOIpTalKSc3kG6CX8DwPvyhi+Vsw3pLpxzgQl5w5fUw04h3f1rAPj3vOFL5V1B2iTATTIk1e0TpH34n5Y3fKkZ9ift+7MrgHWzHoGkXtEH/BdpH/7fGPxcqSe9i7QX1J+BLbIegaSuGw98m7T3qjNwObPEu0l7Yd0L7Jb1CCR11ZrAz0l7j/p/OHlZ+ruTSXuBPU7YZ0CSYm0MXEPae9OFwMScByG1QeokYAGhSIckjdZuwCzS3pMuwcnK0gq9mbRra5cQluxI0kgdTCjJm/Lh/xvc3EdapZNImwQMEGbvWjVQ0qq8lbSrkwYI7/ytVSKN0NtInwT8BpcJSlq+McCnSXvPGSDM9nfCnzRKJxC/Y+CK2t3AHjkPQlLjTQF+QvqH/+k48ihFO4H0w3FzgWNyHoSkxtoF+CvpH/6fxyI/UmUvA54k/QV6GhbikHrZqwlfCFLfWz6Z8yCkrtsXmEP6C/U8YK2MxyGpvPHAF0h/PxnAXf2kWmwP3EX6C/YWYLuMxyGpnOnApaS/jywEXp/xOKSesxHpK3MNEF4xvCPjcUjKb1/SF/cZAB4DDs14HFLPmgpcRD3Dd98nzAiW1B1jgfcTvqWnvmfcCeyY71AkTQB+QD1JwExg72xHIqlOm1LfF4ZrgU2yHYmkv+sD/pN6LuxFwKmE4iCS2umV1DN5eAA4H0cLpeJOpJ6hvQHgV4RJQ5LaY03gq9RzTxgAvo4FfqTGOAB4kHou9vsIm4NIar7nUE9hnwFCZdKT8x2KpJHaAvgT9Vz4S4Cv4JCf1FRjgQ8RXt/VcQ94CGf6S402kVB/u66hv1mEyoSSmmMn4Erqu+7/BGyZ7WgkResDTiH9RkLD25m4s6BU2kTCZN0F1Hetfw+YnOl4JCVyKPAw9d0Y7gOOzHY0kobbF7iZ+q7vRYQvEpJaamvgRuq7SQwA5+BKASmXtQgbedU5wncP1gKROmEKcAb1JgEPAq/F7T+lOh1BPaV8h7dLgA1zHZCkPF4PPEG9N49Lgd1yHZDUI7YCfkq91+4S4DOEnQIlddC2wNXUeyPpJ6xE2CDTMUldtTphkt886r1m7wdekueQJJU0gfAOcQn13lQeJkwiWi3PYUmd0QccB9xLvdfoAKGkr0P+Uo95KTCb+m8wt2ABEWmk9gQuo/7rch5hC3Dn7Ug9ahPq2yls2fYjQrVCSU+3KWE77rpH5gYIrwG3y3NYkppsqIRoXRsKDW8LgC/iskFpyDrAx4C51H/99RN2EPW1nKSn2AW4ijyjAU8SbkRWE1SvmgJ8BHiEPNfc3cBBWY5MUiuNI0zcq3vW8VB7HPgkMDXHwUkNsDrh3fv95LnGlhC2BnYjL0kj8gzyzQ0YAOYQljt5k1JXrQacSP2FfIa3WwlbhUvSqIwB3kmed5ND7T7Ct6PVMxyflMME4G2E8rq5rqMFwEcHf7YkRdsCuJB8N68B4FFCrQInC6qtphCS2b+R99q5GqtxSkqoD3gT9e4uuLw2j/D+cpv6D1FKYkvgC9RfdnvZ9jhwEmHkTpKSWx/4BvXuRLa81g/8GHcoU3M9GzgTWEzea2MA+Amwef2HKEmwB3mqlS2vXQq8HL/pqLwxhIqal1DmWrgeOLD2o5SkZfQBRwF3Uubm9zfCEsIZNR+ntKwNCctl/0qZ3/05hPkF4+o+UElamaEdy+ZT5mbYD/ySkIy4lanqMoZQSOdM8lTNXF5bRJgTYwEtSY3yDOAcytwYh9oswqjAljUfq3rHdMK3/Tso+7t9IbBjzccqSZUcClxD2ZtlP/AL4EhgUr2Hqw6aABwB/Jz8E16XbbcAh9V7uJKUTh9wOHAtZW+eA4R9B84h7K8+uc6DVquNBfYlDLHnqs+/sjaTUDnQ9/ySWmkM4d38rZS/oQ4QbuynE5ITd0TT0EP/NPLV5l9Vu4swwc8qfpI6YTzh20zuqmgraw+xNBlw8mDvGMPSh/59lP89HGoPEOYaTKzv0CWpnKENUe6l/A13eJtDmN19IrBJbUevUtYljER9lbyb8YykPUh48Pt6SlJPWAN4H81LBAYI26deDXwc2B/fwbbRWGAv4F+BP1B+It/y2gPABwjXgiT1nAnAG4CbKH9DXlF7BDgbeCOWW22yTYDjgR8QRnRK/96sqP0FeDOuTpEkIKwaOIjydQRG0mYNxnkK4V2ykwnL2JKwsuOrwI2U/71YVfvjYLxj6zgZktQFuxEm5y2i/E17JO0Jwv4EnyRMKFwn/SnpeZMJydYphOSryd/wh7f+wXj3SX9KpOr6SgcgrcBWwMnA62jXBKklwM3AdYPteuAGwp4JWrWNgJ2AXQb/uROhAl6b5mI8CXwb+BxhvwCpkUwA1HRrA68FTqDdpVAfZWkyMDwxeKRkUAVNBrbjqQ/6XWh3nfubga8TRrDmFI5FWiUTALXJ7oSleq+mO7OnHyashpgF3L5M+yshcWij8cCmhHf10wnf7Lcc1mbQjS2d5xOG+b8G/Iow9C+1ggmA2mgtQhJwArBr4Vjq9iChLOwsQvGiOcDswTZn2L8baotqjGVtwjf0aYNt2T+vC6xPWC2xMd14wK/Inwjf9r9He5M09TgTALXdHoRE4FhgzcKxNMFjhMlnQ/XsFxEmKgLMZelWtkOvHiaxtPrcVMI9YTXCNs8Qzuk4YArOYH8cOIPw4P9j4VikykwA1BWrE3ZNO4awI6ElVZXCfOB8QqXInxGSKElSQ00iLMk7k3ADL70czNautpiwtPNEwusmqZMcAVDXTQVeSqgF/yIs3KPl6weuAM4Cvk+YeyF1mgmAesk04Ajg5cDzaVd9AaU3D7gY+CnwI8LESqlnmACoV00kVJc7aLDtXjYcZXI7cOFgO58wsU/qSSYAUjCD8IrgoMF/+u63G+YBvyM88M8hbDwlCRMAaXlWA/YDDhn8526EwjZqvsWE7ZwvBS4ALiFMBJW0DBMAadXGAzsTXhnsAxxAu0vWdskTwLWEB/7vCA98C/NII2ACIMXZkqUJwb6EuvZeT/W7l6UP+0uBawgbMEkaJW9YUhrrsnRjmx0JIwY74EqDWAsI7+uvH2zXDv7zvpJBSV1iAiDVazphhcH2hIRgd2BbLKs73L3AjYQH/lWDf76BkARIqokJgJTfasAmLN0Zb9nd8mbQrY105rP83Q5vB24l7F8gKTMTAKl5JhGSgBmEnfXWJxQxWoen7743pUiEYXnd0A6EswmV84bvSng3YRfDO1i68ZCkBjEBkNptPEuTgmmE0YWhXf3GA2sM/neTgQmDfx76/4csb5fA+YSHPIRZ9f089QH/ZPpDkSRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJkiRJUpf8f8zLJmKO1eQNAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>
                        </span>
                        <div class="trust-text">
                            <strong>Cambios y devoluciones</strong>
                            <span>Te ofrecemos una garantía sin complicaciones</span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <span class="trust-icon">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="42" height="42" fill="url(#pattern0_23233_13355)" />
                                <defs>
                                    <pattern id="pattern0_23233_13355" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_23233_13355" transform="scale(0.00195312)" />
                                    </pattern>
                                    <image id="image0_23233_13355" width="512" height="512" preserveAspectRatio="none"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </span>
                        <div class="trust-text">
                            <strong>Pagos Seguros</strong>
                            <span>Tu pago es 100% seguro. Tus datos están siempre protegidos</span>
                        </div>
                    </div>
                </div>

            </div><!-- /product-info -->
        </div><!-- /product-detail -->

    </div><!-- /main-container -->

    <script>
        document.querySelectorAll('.thumb').forEach(thumb => {
            thumb.addEventListener('click', () => {
                const mainImage = document.getElementById('mainProductImage');
                if (!mainImage) return;
                // Cambiar imagen principal
                mainImage.src = thumb.dataset.image;
                // Remover active anterior
                document.querySelectorAll('.thumb')
                    .forEach(t => t.classList.remove('active'));
                // Activar thumbnail actual
                thumb.classList.add('active');
            });
        });
        function agregarAlCarrito(e) {
            e.preventDefault();

            const producto = {
                id: {{ $product->id }},
                nombre: "{{ $product->name }}",
                precio: {{ $product->price }},
                imagen: "{{ $images->first()->image_path ?? 'https://via.placeholder.com/100' }}",
                cantidad: 1
            };

            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const existe = carrito.find(item => item.id === producto.id);

            if (existe) {
                existe.cantidad += 1;
            } else {
                carrito.push(producto);
            }

            localStorage.setItem('carrito', JSON.stringify(carrito));

            // Mostrar notificación
            const btn = e.target;
            const textoOriginal = btn.textContent;
            btn.textContent = '✓ Agregado al carrito';
            btn.style.background = '#34d399';

            setTimeout(() => {
                btn.textContent = textoOriginal;
                btn.style.background = '';
                // Actualizar badge del carrito
                actualizarBadgeCarrito();
            }, 2000);
        }

        function actualizarBadgeCarrito() {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const total = carrito.reduce((sum, item) => sum + item.cantidad, 0);
            const badge = document.querySelector('.cart-badge');
            if (badge) {
                badge.textContent = total;
            }
        }

        // Actualizar badge al cargar la página
        document.addEventListener('DOMContentLoaded', actualizarBadgeCarrito);

        // Hacer el icono del carrito clickeable
        document.querySelector('.cart-icon').addEventListener('click', () => {
            window.location.href = '/carrito';
        });
    </script>
</body>

</html>