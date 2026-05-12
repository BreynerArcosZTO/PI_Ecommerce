<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Eterna Koreana</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        /* ==================== ESTILOS GENERALES ==================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: #000000;
            scroll-behavior: smooth;
            justify-content: center;
        }

        /* ==================== NAVBAR ==================== */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: linear-gradient(99deg, #ffffff 0%, #dcdbd8 45%, #b5b3af 100%);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo-circle {
            background-color: #ffd880;
            /* El amarillo de tu logo */
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
            /* EMPUJA EL MENÚ A LA DERECHA */
            margin-right: 50px;
            /* ESPACIO RESPECTO AL CARRITO */
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
            /* Rosa de la marca */
        }

        .cart-icon {
            font-size: 1.5rem;
            position: relative;
            cursor: pointer;
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
        }

        /* ==================== SECCIÓN CONTACTO ==================== */
        .contact-section {
            padding: 80px 8%;
            background-color: #fffaf5;
            background-image: url('https://res.cloudinary.com/deyudesls/image/upload/f_auto,q_auto:low,c_limit,w_1920,dpr_auto,fl_progressive,fl_immutable_cache/v1754793669/heroPink.webp');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            /* Crema suave del hero */
        }

        .contact-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .contact-mini-title {
            color: #000;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }

        .contact-header h2 {
            font-size: 2.2rem;
            font-weight: 700;
        }

        .contact-container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 40px;
        }

        /* Tarjetas de Info */
        .info-card {
            background: white;
            padding: 20px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
            transition: 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(255, 159, 178, 0.1);
        }

        .info-card .icon {
            font-size: 1.5rem;
            width: 50px;
            height: 50px;
            background-color: #fffaf5;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #ff9fb2;
        }

        .info-card h4 {
            font-size: 1rem;
            margin-bottom: 2px;
        }

        .info-card p {
            font-size: 0.9rem;
            color: #777;
        }

        /* Formulario */
        .contact-form-container {
            background: white;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #f0f0f0;
            border-radius: 12px;
            background: #fdfdfd;
            outline: none;
            transition: 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #ff9fb2;
            background: #fff;
        }

        .btn-enviar {
            background-color: #ff9fb2;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            box-shadow: 0 5px 15px rgba(255, 159, 178, 0.3);
        }

        .btn-enviar:hover {
            background-color: #ff859a;
            transform: scale(1.02);
        }

        /* Responsive */
        @media (max-width: 850px) {
            .contact-container {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 20px 4%;
            }
        }
    </style>
</head>

<body id="inicio">

    <header class="navbar" id="navbar">
        <div class="logo">
            <div class="logo-circle">K</div>
        </div>
        <nav class="nav-links">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="#categorias">Colecciones</a>
            <a href="#">Ofertas</a>
<<<<<<< Updated upstream
            <a href="#contacto">Contacto</a>
            <a href="/cuenta">Cuenta</a>
=======
            <a href="{{ route('contacto') }}">Contacto</a>
            @guest
                <a href="{{ route('login') }}">Iniciar sesion</a>
                <a href="{{ route('register') }}">Registrarse</a>
            @else
                <a href="{{ route('dashboard') }}">Mi cuenta</a>
            @endguest
>>>>>>> Stashed changes
        </nav>

        <div class="cart-icon">
            <ion-icon name="bag-outline"></ion-icon>
            <span class="cart-badge">0</span>
        </div>
    </header>

    <div class="main-container">
        <section class="contact-section" id="contacto">
            <div class="contact-header">
                <p class="contact-mini-title">Atención personalizada</p>
                <h2>¿Necesitas ayuda?</h2>
                <p style="color: #1f1f1f; max-width: 500px; margin: 10px auto;">Estamos aquí para asesorarte en tu rutina de skincare y responder tus dudas.</p>
            </div>

            <div class="contact-container">

                <div class="contact-info">
                    <div class="info-card">
                        <div class="icon"><ion-icon name="logo-whatsapp"></ion-icon></div>
                        <div>
                            <h4>WhatsApp</h4>
                            <p>+57 300 123 4567</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
                        <div>
                            <h4>Correo</h4>
                            <p>soporte@eternakoreana.com</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="icon"><ion-icon name="time-outline"></ion-icon></div>
                        <div>
                            <h4>Horario</h4>
                            <p>Lunes - Sábado / 9am - 7pm</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="icon"><ion-icon name="location-outline"></ion-icon></div>
                        <div>
                            <h4>Ubicación</h4>
                            <p>Medellín, Colombia</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <form class="contact-form" action="#" method="POST">
                        @csrf
                        <input type="text" name="nombre" placeholder="Tu nombre" required>
                        <input type="email" name="email" placeholder="Tu correo electrónico" required>
                        <input type="text" name="asunto" placeholder="Asunto del mensaje">
                        <textarea name="mensaje" rows="5" placeholder="¿En qué podemos ayudarte?" required></textarea>
                        <button type="submit" class="btn-enviar">Enviar mensaje</button>
                    </form>
                </div>

            </div>
        </section>
    </div>

</body>

</html>
