<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito - Eterna Koreana</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #faf8f5 0%, #ffe8f0 50%, #fff5e6 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }

        /* ==================== NAVBAR ==================== */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: linear-gradient(99deg, #ffffff 0%, #faf8f5 45%, #f5f1ed 100%);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-circle {
            background-color: #ffd880;
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 1.4rem;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            gap: 35px;
            margin-left: auto;
            margin-right: 40px;
        }

        .nav-links a {
            text-decoration: none;
            color: #1f1f1f;
            font-size: 0.9rem;
            font-weight: 500;
            transition: 0.3s;
            cursor: pointer;
        }

        .nav-links a:hover {
            color: #ff91a4;
        }

        .cart-icon {
            position: relative;
            font-size: 1.6rem;
            cursor: pointer;
            font-weight: bold;
            color: #ff91a4;
        }

        .cart-badge {
            position: absolute;
            top: -4px;
            right: -6px;
            background-color: #ff91a4;
            color: #fff;
            font-size: 0.65rem;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* ==================== MAIN CONTENT ==================== */
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .cart-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .cart-title {
            font-size: 2.5rem;
            color: #1f1f1f;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .cart-subtitle {
            font-size: 1rem;
            color: #666;
            font-weight: 400;
        }

        /* ==================== CARRITO VACÍO ==================== */
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-icon {
            font-size: 4rem;
            color: #ff91a4;
            margin-bottom: 20px;
        }

        .empty-text {
            font-size: 1.2rem;
            color: #1f1f1f;
            margin-bottom: 10px;
        }

        .empty-subtitle {
            color: #999;
            font-size: 0.95rem;
            margin-bottom: 30px;
        }

        /* ==================== ITEMS DEL CARRITO ==================== */
        .cart-items {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-radius: 25px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .item {
            display: flex;
            gap: 20px;
            padding: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            align-items: center;
        }

        .item:last-child {
            border-bottom: none;
        }

        .item-image {
            width: 100px;
            height: 100px;
            background: #f0f0f0;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .item-image ion-icon {
            font-size: 3rem;
            color: #ddd;
        }

        .item-info {
            flex: 1;
            min-width: 0;
        }

        .item-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f1f1f;
            margin-bottom: 8px;
        }

        .item-price {
            font-size: 0.9rem;
            color: #ff91a4;
            font-weight: 600;
        }

        .item-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ff91a4;
            background: transparent;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ff91a4;
            font-weight: 600;
            transition: 0.3s;
        }

        .quantity-btn:hover {
            background: #ff91a4;
            color: white;
        }

        .quantity-display {
            min-width: 30px;
            text-align: center;
            font-weight: 600;
            color: #1f1f1f;
        }

        .item-total {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f1f1f;
            min-width: 100px;
            text-align: right;
        }

        .remove-btn {
            background: rgba(255, 107, 107, 0.1);
            color: #ff6b6b;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .remove-btn:hover {
            background: #ff6b6b;
            color: white;
        }

        /* ==================== RESUMEN ==================== */
        .cart-summary {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-radius: 25px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            max-width: 400px;
            margin-left: auto;
        }

        .summary-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1f1f1f;
            margin-bottom: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            color: #666;
            font-size: 0.95rem;
        }

        .summary-row.total {
            border-top: 2px solid rgba(0, 0, 0, 0.05);
            padding-top: 12px;
            font-size: 1.2rem;
            font-weight: 700;
            color: #1f1f1f;
        }

        /* ==================== BOTONES ==================== */
        .button-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 25px;
        }

        .btn {
            padding: 14px 32px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s ease;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff9fb2 0%, #ff859a 100%);
            color: white;
            box-shadow: 0 10px 25px rgba(255, 159, 178, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(255, 159, 178, 0.4);
        }

        .btn-secondary {
            background: transparent;
            color: #1f1f1f;
            border: 2px solid #ffd880;
        }

        .btn-secondary:hover {
            background: rgba(255, 208, 128, 0.1);
            transform: translateY(-2px);
        }

        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .nav-links {
                gap: 15px;
                margin-right: 20px;
                font-size: 0.8rem;
            }

            .cart-title {
                font-size: 2rem;
            }

            .item {
                flex-direction: column;
                text-align: center;
            }

            .item-controls {
                justify-content: center;
            }

            .item-total {
                text-align: center;
            }

            .cart-summary {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo-circle" onclick="window.location.href='/'">K</div>
        <nav class="nav-links">
            <a href="/">Inicio</a>
            <a href="/#categorias">Colecciones</a>
            <a href="/#destacados">Ofertas</a>
            <a href="/contacto">Contacto</a>
            <a href="{{ route('dashboard') }}">Mi Cuenta</a>
        </nav>

        <div class="cart-icon" onclick="window.location.href='/carrito'" style="cursor: pointer;">
            <ion-icon name="bag-outline"></ion-icon>
            <span class="cart-badge">0</span>
        </div>
    </header>

    <main class="container">
        <div class="cart-header">
            <h1 class="cart-title">Mi Carrito </h1>
            <p class="cart-subtitle">Revisa y confirma tu compra</p>
        </div>

        <div id="empty-state" class="empty-cart" style="display: none;">
            <div class="empty-icon">
                <ion-icon name="bag-outline"></ion-icon>
            </div>
            <p class="empty-text">Tu carrito está vacío</p>
            <p class="empty-subtitle">Explora nuestros productos y agrega lo que te guste</p>
            <a href="/" class="btn btn-primary">Volver a Comprar</a>
        </div>

        <div id="cart-content" style="display: none;">
            <div class="cart-items">
                <div id="items-container"></div>
            </div>

            <div class="cart-summary">
                <h3 class="summary-title">Resumen</h3>
                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span id="subtotal">$0</span>
                </div>
                <div class="summary-row">
                    <span>Envío:</span>
                    <span id="shipping">Gratis</span>
                </div>
                <div class="summary-row total">
                    <span>Total:</span>
                    <span id="total">$0</span>
                </div>

                <div class="button-group">
                    <button class="btn btn-primary" onclick="proceedToCheckout()">
                        <ion-icon name="card-outline"></ion-icon> Proceder al pago
                    </button>
                    <a href="/" class="btn btn-secondary">Seguir comprando</a>
                </div>
            </div>
        </div>
    </main>

    <script>
        function cargarCarrito() {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const container = document.getElementById('items-container');
            const emptyState = document.getElementById('empty-state');
            const cartContent = document.getElementById('cart-content');

            if (carrito.length === 0) {
                emptyState.style.display = 'block';
                cartContent.style.display = 'none';
                return;
            }

            emptyState.style.display = 'none';
            cartContent.style.display = 'block';
            container.innerHTML = '';

            let subtotal = 0;

            carrito.forEach((item, index) => {
                const total = item.precio * item.cantidad;
                subtotal += total;

                const itemHTML = `
                    <div class="item">
                        <div class="item-image">
                            <img src="${item.imagen}" alt="${item.nombre}" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22><text x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2224%22 fill=%22%23ddd%22>Imagen</text></svg>'">
                        </div>
                        <div class="item-info">
                            <div class="item-name">${item.nombre}</div>
                            <div class="item-price">$${item.precio.toLocaleString('es-CO')}</div>
                        </div>
                        <div class="item-controls">
                            <button class="quantity-btn" onclick="cambiarCantidad(${index}, -1)">−</button>
                            <div class="quantity-display">${item.cantidad}</div>
                            <button class="quantity-btn" onclick="cambiarCantidad(${index}, 1)">+</button>
                        </div>
                        <div class="item-total">$${total.toLocaleString('es-CO')}</div>
                        <button class="remove-btn" onclick="eliminarItem(${index})">
                            <ion-icon name="trash-outline"></ion-icon>
                        </button>
                    </div>
                `;
                container.innerHTML += itemHTML;
            });

            document.getElementById('subtotal').textContent = '$' + subtotal.toLocaleString('es-CO');
            document.getElementById('total').textContent = '$' + subtotal.toLocaleString('es-CO');

            // Actualizar badge
            const totalItems = carrito.reduce((sum, item) => sum + item.cantidad, 0);
            document.querySelector('.cart-badge').textContent = totalItems;
        }

        function cambiarCantidad(index, cambio) {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            carrito[index].cantidad += cambio;

            if (carrito[index].cantidad <= 0) {
                carrito.splice(index, 1);
            }

            localStorage.setItem('carrito', JSON.stringify(carrito));
            cargarCarrito();
        }

        function eliminarItem(index) {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            cargarCarrito();
        }

        function proceedToCheckout() {
            alert('En construcción: Sistema de pago 💳');
        }

        // Cargar carrito al entrar
        document.addEventListener('DOMContentLoaded', cargarCarrito);

        // Hacer clickeable el logo para ir al inicio
        document.querySelector('.logo-circle').addEventListener('click', () => {
            window.location.href = '/';
        });
    </script>
</body>

</html>
