<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - Eterna Koreana</title>
    <link rel="icon" type="image/png" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="shortcut icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('Eterna-Koreana-icon.png') }}?v=2">
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
            background-image: url('https://res.cloudinary.com/deyudesls/image/upload/f_auto,q_auto:low,c_limit,w_1920,dpr_auto,fl_progressive,fl_immutable_cache/v1754793669/heroPink.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            background-color: #faf8f5;
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
        }

        .nav-links a:hover {
            color: #ff91a4;
        }

        .cart-icon {
            position: relative;
            font-size: 1.6rem;
            cursor: pointer;
            font-weight: bold;
        }

        .cart-badge {
            position: absolute;
            top: -4px;
            right: -6px;
            background-color: #1f1f1f;
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
        .main-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .profile-title {
            font-size: 2.5rem;
            color: #1f1f1f;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .profile-subtitle {
            font-size: 1rem;
            color: #666;
            font-weight: 400;
        }

        /* ==================== CARDS CONTENEDOR ==================== */
        .cards-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 45px rgba(255, 159, 178, 0.15);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ff9fb2 0%, #ff859a 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: white;
        }

        .card-title {
            font-size: 1.3rem;
            color: #1f1f1f;
            font-weight: 700;
        }

        .card-subtitle {
            font-size: 0.85rem;
            color: #999;
            margin-top: 5px;
        }

        /* ==================== FORM ELEMENTS ==================== */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            color: #333;
            margin-bottom: 10px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.95);
            font-size: 0.95rem;
            font-family: 'Poppins', sans-serif;
            outline: none;
            transition: 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #ff9fb2;
            background: #fff;
            box-shadow: 0 5px 15px rgba(255, 159, 178, 0.15);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* ==================== BUTTONS ==================== */
        .button-group {
            display: flex;
            gap: 15px;
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
            background: rgba(255, 208, 128, 0.2);
            color: #1f1f1f;
            border: 2px solid #ffd880;
        }

        .btn-secondary:hover {
            background: rgba(255, 208, 128, 0.3);
            transform: translateY(-3px);
        }

        .btn-danger {
            background: rgba(255, 107, 107, 0.1);
            color: #ff6b6b;
            border: 2px solid #ff6b6b;
        }

        .btn-danger:hover {
            background: rgba(255, 107, 107, 0.2);
            transform: translateY(-3px);
        }

        .success-message {
            background: rgba(52, 211, 153, 0.1);
            border: 1px solid #34d399;
            color: #059669;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: none;
        }

        .success-message.show {
            display: block;
            animation: slideIn 0.3s ease;
        }

        .error-message {
            background: rgba(255, 107, 107, 0.1);
            border: 1px solid #ff6b6b;
            color: #dc2626;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: none;
        }

        .error-message.show {
            display: block;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .info-display {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-item {
            background: rgba(255, 208, 128, 0.05);
            padding: 15px;
            border-radius: 12px;
            border-left: 4px solid #ffd880;
        }

        .info-label {
            font-size: 0.85rem;
            color: #999;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 1rem;
            color: #1f1f1f;
            font-weight: 600;
        }

        /* ==================== FOOTER ==================== */
        .profile-footer {
            text-align: center;
            padding: 30px;
            font-size: 0.9rem;
            color: #ffffff;
            margin-top: 40px;
        }

        .profile-footer a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
        }

        .profile-footer a:hover {
            text-decoration: underline;
        }

        /* ==================== RESPONSIVE ==================== */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }

            .nav-links {
                gap: 15px;
                margin-right: 20px;
            }

            .profile-title {
                font-size: 2rem;
            }

            .cards-container {
                grid-template-columns: 1fr;
            }

            .info-display {
                grid-template-columns: 1fr;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo">
            <div class="logo-circle">K</div>
        </div>
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

    <main class="main-container">
        <div class="profile-header">
            <h1 class="profile-title">Hola, {{ $user->name }}</h1>
            <p class="profile-subtitle">Aquí puedes gestionar tu perfil y cambiar tu información personal</p>
        </div>

        <div class="cards-container">
            <!-- Card 1: Información Personal -->
            <div class="profile-card">
                <div class="card-header">
                    <div class="card-icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div>
                        <div class="card-title">Información Personal</div>
                        <p class="card-subtitle">Actualiza tus datos básicos</p>
                    </div>
                </div>

                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')

                    <div class="info-display">
                        <div class="info-item">
                            <div class="info-label">Nombre</div>
                            <div class="info-value">{{ $user->name }}</div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Correo</div>
                            <div class="info-value">{{ $user->email }}</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            required autofocus>
                        @if ($errors->has('name'))
                            <p class="error-message show">{{ $errors->first('name') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            required>
                        @if ($errors->has('email'))
                            <p class="error-message show">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">
                            <ion-icon name="checkmark-outline"></ion-icon> Guardar Cambios
                        </button>
                    </div>

                    @if (session('status') === 'profile-updated')
                        <div class="success-message show">
                            ✓ Tu perfil ha sido actualizado exitosamente
                        </div>
                    @endif
                </form>
            </div>

            <!-- Card 2: Cambiar Contraseña -->
            <div class="profile-card">
                <div class="card-header">
                    <div class="card-icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div>
                        <div class="card-title">Seguridad</div>
                        <p class="card-subtitle">Protege tu cuenta</p>
                    </div>
                </div>

                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Card 3: Zona de Peligro -->
        <div class="profile-card" style="border: 3px solid #ff6b6b; margin-top: 25px;">
            <div class="card-header">
                <div class="card-icon" style="background: rgba(255, 107, 107, 0.2);">
                    <ion-icon name="warning-outline" style="color: #ff6b6b;"></ion-icon>
                </div>
                <div>
                    <div class="card-title">Zona de Peligro</div>
                    <p class="card-subtitle">Acciones que no se pueden deshacer</p>
                </div>
            </div>

            @include('profile.partials.delete-user-form')
        </div>
    </main>

    <footer class="profile-footer">
        <p>¿Necesitas ayuda? <a href="/contacto">Contáctanos aquí</a></p>
        <p style="margin-top: 10px; font-size: 0.8rem;">© 2026 Eterna Koreana. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Auto-hide success messages
        setTimeout(() => {
            const messages = document.querySelectorAll('.success-message');
            messages.forEach(msg => {
                if (msg.classList.contains('show')) {
                    setTimeout(() => msg.classList.remove('show'), 3000);
                }
            });
        }, 100);
    </script>
</body>

</html>
