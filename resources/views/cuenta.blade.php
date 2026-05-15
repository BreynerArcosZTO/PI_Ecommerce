<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta - Eterna Koreana</title>
    <link rel="icon" type="image/webp" href="{{ asset('Eterna-Koreana-icon.webp') }}">
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
            /* Uso de la URL de Cloudinary solicitada */
            background-image: url('https://res.cloudinary.com/deyudesls/image/upload/f_auto,q_auto:low,c_limit,w_1920,dpr_auto,fl_progressive,fl_immutable_cache/v1754793669/heroPink.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        /* ==================== NAVBAR ==================== */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: rgba(255, 255, 255, 0.9);
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
            margin-left: auto;
            margin-right: 50px;
        }

        .nav-links a {
            text-decoration: none;
            color: #1f1f1f;
            margin: 0 15px;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ff9fb2;
        }

        .cart-icon {
            font-size: 1.5rem;
            position: relative;
            cursor: pointer;
        }

        .cart-container {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
            color: #1f1f1f;
            font-size: 28px;
            margin-left: 15px;
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background: #333;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 50%;
            font-weight: 700;
        }

        /* ==================== CONTENEDOR CENTRAL ==================== */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
            min-height: calc(100vh - 80px);
        }

        .card-auth {
            /* Efecto cristal para que se vea la rosa de fondo */
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            width: 100%;
            max-width: 480px;
            padding: 45px;
            border-radius: 30px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.4);
            text-align: center;
        }

        .card-auth h2 {
            font-size: 2.2rem;
            color: #1f1f1f;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #555;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.85rem;
            color: #333;
            margin-bottom: 8px;
            margin-left: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: #ff9fb2;
            background: #fff;
            box-shadow: 0 5px 15px rgba(255, 159, 178, 0.1);
        }

        .btn-submit {
            width: 100%;
            background-color: #ff9fb2;
            color: white;
            padding: 18px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 15px;
            box-shadow: 0 10px 20px rgba(255, 159, 178, 0.3);
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: #ff859a;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 159, 178, 0.4);
        }

        .footer-link {
            margin-top: 25px;
            font-size: 0.9rem;
            color: #444;
        }

        .footer-link a {
            color: #ff9fb2;
            text-decoration: none;
            font-weight: 700;
        }

        @media (max-width: 480px) {
            .card-auth {
                padding: 35px 25px;
            }

            .navbar {
                padding: 15px 5%;
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
            <a href="#categorias">Colecciones</a>
            <a href="#">Ofertas</a>
            <a href="/contacto">Contacto</a>
            <a href="/cuenta">Cuenta</a>

            <div class="cart-container">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <span class="cart-badge">0</span>
            </div>
        </nav>
    </header>

    <main class="main-content">
        <section class="card-auth">
            <h2>Mi Cuenta</h2>
            <p class="subtitle">Regístrate para gestionar tus pedidos y favoritos.</p>

            <form action="/register" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label>Nombre Completo</label>
                    <input type="text" name="name" placeholder="Tu nombre y apellido"
                        onkeypress="return soloLetras(event)" required>
                </div>

                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="tel" name="phone" placeholder="300 000 0000">
                </div>

                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" placeholder="Mínimo 8 caracteres" required>
                </div>

                <button type="submit" class="btn-submit">Crear cuenta</button>

                <p class="footer-link">
                    ¿Ya eres miembro? <a href="#">Inicia sesión aquí</a>
                </p>
            </form>
        </section>
    </main>

    <script>
        function soloLetras(e) {
            const key = e.keyCode || e.which;
            const tecla = String.fromCharCode(key).toLowerCase();
            const letras = " abcdefghijklmnñopqrstuvwxyzáéíóú";
            const especiales = [8, 37, 39, 46];

            let tecla_especial = false;
            for (let i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                return false;
            }
        }
    </script>

</body>

</html>
