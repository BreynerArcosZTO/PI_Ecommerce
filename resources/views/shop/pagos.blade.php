<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos - Eterna Koreana</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            color: #1f1f1f;
            min-height: 100vh;
        }

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
            gap: 18px;
            margin-left: auto;
        }

        .nav-links a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #1f1f1f;
            font-size: 0.9rem;
            font-weight: 600;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ff91a4;
        }

        .container {
            max-width: 1180px;
            margin: 40px auto;
            padding: 0 20px 50px;
        }

        .checkout-header {
            text-align: center;
            margin-bottom: 34px;
        }

        .checkout-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .checkout-subtitle {
            color: #666;
            font-size: 1rem;
        }

        .checkout-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 390px;
            gap: 28px;
            align-items: start;
        }

        .panel {
            background: rgba(255, 255, 255, 0.82);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.55);
            border-radius: 25px;
            padding: 30px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-title ion-icon {
            color: #ff91a4;
            font-size: 1.35rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            color: #444;
            font-size: 0.85rem;
            font-weight: 600;
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 1.5px solid rgba(255, 145, 164, 0.22);
            background: rgba(255, 255, 255, 0.9);
            border-radius: 16px;
            color: #1f1f1f;
            font-size: 0.95rem;
            outline: none;
            padding: 13px 15px;
            transition: 0.2s ease;
        }

        textarea {
            min-height: 96px;
            resize: vertical;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #ff91a4;
            box-shadow: 0 0 0 4px rgba(255, 145, 164, 0.12);
        }

        .payment-options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
            margin-top: 26px;
        }

        .payment-option {
            position: relative;
        }

        .payment-option input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

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

        .payment-card ion-icon {
            color: #ff91a4;
            font-size: 1.25rem;
        }

        .payment-option input:checked + .payment-card {
            border-color: #ff91a4;
            background: rgba(255, 145, 164, 0.12);
            color: #1f1f1f;
            box-shadow: 0 10px 24px rgba(255, 145, 164, 0.16);
        }

        .summary {
            position: sticky;
            top: 105px;
        }

        .items-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 22px;
        }

        .summary-item {
            display: grid;
            grid-template-columns: 62px minmax(0, 1fr) auto;
            gap: 12px;
            align-items: center;
        }

        .summary-image {
            width: 62px;
            height: 62px;
            border-radius: 14px;
            background: #f0f0f0;
            overflow: hidden;
        }

        .summary-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .summary-name {
            font-size: 0.88rem;
            font-weight: 600;
            line-height: 1.35;
        }

        .summary-qty {
            color: #777;
            font-size: 0.78rem;
            margin-top: 3px;
        }

        .summary-price {
            font-size: 0.9rem;
            font-weight: 700;
            text-align: right;
            white-space: nowrap;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 12px;
            color: #666;
            font-size: 0.95rem;
        }

        .summary-row.total {
            border-top: 2px solid rgba(0, 0, 0, 0.05);
            color: #1f1f1f;
            font-size: 1.2rem;
            font-weight: 700;
            margin-top: 14px;
            padding-top: 14px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            padding: 14px 32px;
            text-align: center;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff9fb2 0%, #ff859a 100%);
            box-shadow: 0 10px 25px rgba(255, 159, 178, 0.3);
            color: white;
            margin-top: 24px;
        }

        .btn-primary:hover {
            box-shadow: 0 15px 35px rgba(255, 159, 178, 0.4);
            transform: translateY(-3px);
        }

        .empty-cart {
            display: none;
            text-align: center;
            padding: 60px 20px;
        }

        .empty-cart ion-icon {
            color: #ff91a4;
            font-size: 4rem;
            margin-bottom: 16px;
        }

        .empty-cart p {
            color: #666;
            margin: 8px 0 26px;
        }

        .notice {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            color: #777;
            font-size: 0.82rem;
            line-height: 1.55;
            margin-top: 18px;
        }

        .notice ion-icon {
            color: #ffd880;
            flex-shrink: 0;
            font-size: 1.2rem;
            margin-top: 1px;
        }

        @media (max-width: 920px) {
            .checkout-layout {
                grid-template-columns: 1fr;
            }

            .summary {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .checkout-title {
                font-size: 2rem;
            }

            .panel {
                padding: 22px;
            }

            .form-grid,
            .payment-options {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo-circle" onclick="window.location.href='{{ route('carrito') }}'">K</div>
        <nav class="nav-links">
            <a href="{{ route('carrito') }}">
                <ion-icon name="arrow-back-outline"></ion-icon>
                Carrito
            </a>
        </nav>
    </header>

    <main class="container">
        <div class="checkout-header">
            <h1 class="checkout-title">Finalizar pago</h1>
            <p class="checkout-subtitle">Confirma tus productos y completa los datos de envio.</p>
        </div>

        <div id="empty-state" class="empty-cart panel">
            <ion-icon name="bag-outline"></ion-icon>
            <h2>Tu carrito esta vacio</h2>
            <p>Agrega productos antes de continuar con el pago.</p>
            <a href="{{ route('carrito') }}" class="btn btn-primary">Volver al carrito</a>
        </div>

        <div id="checkout-content" class="checkout-layout" style="display: none;">
            <section class="panel">
                <h2 class="section-title">
                    <ion-icon name="location-outline"></ion-icon>
                    Datos de entrega
                </h2>

                <form id="payment-form">
                    <div class="form-grid">
                        <div class="field">
                            <label for="recipient_name">Nombre del destinatario</label>
                            <input id="recipient_name" name="recipient_name" type="text" value="@auth{{ Auth::user()->name }}@endauth" required>
                        </div>

                        <div class="field">
                            <label for="phone">Telefono <span style="color: #ff91a4;">*</span></label>
                            <input id="phone" name="phone" type="tel" inputmode="tel" placeholder="300 000 0000" required>
                        </div>

                        <div class="field">
                            <label for="country">Pais</label>
                            <input id="country" name="country" type="text" value="Colombia" required>
                        </div>

                        <div class="field">
                            <label for="department">Departamento</label>
                            <input id="department" name="department" type="text" placeholder="Ej. Antioquia" required>
                        </div>

                        <div class="field">
                            <label for="city">Ciudad</label>
                            <input id="city" name="city" type="text" placeholder="Ej. Medellin" required>
                        </div>

                        <div class="field">
                            <label for="postal_code">Codigo postal</label>
                            <input id="postal_code" name="postal_code" type="text" inputmode="numeric" placeholder="050001">
                        </div>

                        <div class="field full">
                            <label for="address_line_1">Direccion principal</label>
                            <input id="address_line_1" name="address_line_1" type="text" placeholder="Calle, carrera, numero, barrio" required>
                        </div>

                        <div class="field full">
                            <label for="address_line_2">Apartamento, torre o indicaciones adicionales</label>
                            <input id="address_line_2" name="address_line_2" type="text" placeholder="Apto 301, torre 2, porteria...">
                        </div>

                        <div class="field full">
                            <label for="reference">Referencia para la entrega</label>
                            <textarea id="reference" name="reference" placeholder="Punto de referencia o instrucciones para encontrar la direccion"></textarea>
                        </div>
                    </div>

                    <h2 class="section-title" style="margin-top: 30px;">
                        <ion-icon name="card-outline"></ion-icon>
                        Metodo de pago
                    </h2>

                    <div class="payment-options">
                        <label class="payment-option">
                            <input type="radio" name="payment_method" value="transfer" checked required>
                            <span class="payment-card">
                                <ion-icon name="swap-horizontal-outline"></ion-icon>
                                Transferencia
                            </span>
                        </label>
                    </div>

                    <div class="notice">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                        <span>Estos datos siguen la estructura de la tabla addresses y se guardan temporalmente para continuar la compra.</span>
                    </div>
                </form>
            </section>

            <aside class="panel summary">
                <h2 class="section-title">
                    <ion-icon name="receipt-outline"></ion-icon>
                    Tu pedido
                </h2>

                <div id="items-container" class="items-list"></div>

                <div class="summary-row">
                    <span>Subtotal:</span>
                    <span id="subtotal">$0</span>
                </div>
                <div class="summary-row">
                    <span>Envio:</span>
                    <span>Gratis</span>
                </div>
                <div class="summary-row total">
                    <span>Total:</span>
                    <span id="total">$0</span>
                </div>

                <button class="btn btn-primary" type="submit" form="payment-form">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    Confirmar pago
                </button>
            </aside>
        </div>
    </main>

    <script>
        const currency = new Intl.NumberFormat('es-CO', {
            style: 'currency',
            currency: 'COP',
            maximumFractionDigits: 0
        });

        function getCart() {
            return JSON.parse(localStorage.getItem('carrito')) || [];
        }

        function validateNumericOnly(value) {
            return /^[0-9\s\-\+\(\)]+$/.test(value);
        }

        function validatePostalCode(value) {
            return value === '' || /^[0-9\-]+$/.test(value);
        }

        function renderCheckout() {
            const carrito = getCart();
            const checkoutContent = document.getElementById('checkout-content');
            const emptyState = document.getElementById('empty-state');
            const itemsContainer = document.getElementById('items-container');

            if (carrito.length === 0) {
                checkoutContent.style.display = 'none';
                emptyState.style.display = 'block';
                return;
            }

            checkoutContent.style.display = 'grid';
            emptyState.style.display = 'none';
            itemsContainer.innerHTML = '';

            let subtotal = 0;

            carrito.forEach((item) => {
                const itemTotal = Number(item.precio || 0) * Number(item.cantidad || 1);
                subtotal += itemTotal;

                itemsContainer.innerHTML += `
                    <div class="summary-item">
                        <div class="summary-image">
                            <img src="${item.imagen}" alt="${item.nombre}" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22><text x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2214%22 fill=%22%23bbb%22>Imagen</text></svg>'">
                        </div>
                        <div>
                            <div class="summary-name">${item.nombre}</div>
                            <div class="summary-qty">Cantidad: ${item.cantidad}</div>
                        </div>
                        <div class="summary-price">${currency.format(itemTotal)}</div>
                    </div>
                `;
            });

            document.getElementById('subtotal').textContent = currency.format(subtotal);
            document.getElementById('total').textContent = currency.format(subtotal);
        }

        function restoreAddressData() {
            const savedData = JSON.parse(localStorage.getItem('checkoutAddress')) || {};

            Object.entries(savedData).forEach(([key, value]) => {
                const field = document.querySelector(`[name="${key}"]`);
                if (!field) return;

                if (field.type === 'radio') {
                    const selected = document.querySelector(`[name="${key}"][value="${value}"]`);
                    if (selected) selected.checked = true;
                    return;
                }

                field.value = value;
            });
        }

        function saveAddressData() {
            const formData = new FormData(document.getElementById('payment-form'));
            const data = Object.fromEntries(formData.entries());
            localStorage.setItem('checkoutAddress', JSON.stringify(data));
            return data;
        }

        // Validación de campos numéricos
        document.getElementById('phone').addEventListener('input', (e) => {
            const value = e.target.value;
            if (value && !validateNumericOnly(value)) {
                e.target.value = value.replace(/[^0-9\s\-\+\(\)]/g, '');
            }
        });

        document.getElementById('postal_code').addEventListener('input', (e) => {
            const value = e.target.value;
            if (value && !validatePostalCode(value)) {
                e.target.value = value.replace(/[^0-9\-]/g, '');
            }
        });

        document.getElementById('payment-form').addEventListener('input', saveAddressData);
        document.getElementById('payment-form').addEventListener('change', saveAddressData);

        document.getElementById('payment-form').addEventListener('submit', async (event) => {
            event.preventDefault();

            if (getCart().length === 0) {
                window.location.href = "{{ route('carrito') }}";
                return;
            }

            const formData = new FormData(document.getElementById('payment-form'));
            const data = Object.fromEntries(formData.entries());

            // Agregar datos del carrito
            data.order_data = getCart();

            try {
                const response = await fetch('{{ route("payment.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (!response.ok) {
                    if (response.status === 401 && result.redirect) {
                        alert(result.message || 'Ingresa o registrate para continuar con el pago.');
                        window.location.href = result.redirect;
                        return;
                    }

                    const errors = result.errors || {};
                    const errorMessages = Object.values(errors).flat().join('\n');
                    alert(errorMessages ? 'Error en el formulario:\n' + errorMessages : (result.message || 'Error al procesar el pago.'));
                    return;
                }

                // Limpiar localStorage y redirigir a confirmación
                localStorage.removeItem('carrito');
                localStorage.removeItem('checkoutAddress');
                window.location.href = `/pagos/confirmacion/${result.address_id}`;

            } catch (error) {
                console.error('Error:', error);
                alert('Error al procesar el pago. Por favor, intenta nuevamente.');
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            restoreAddressData();
            renderCheckout();
        });
    </script>
</body>

</html>
