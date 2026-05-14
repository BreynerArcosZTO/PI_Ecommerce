<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Iniciar Sesión - Eterna Koreana</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #fff5f0 0%, #ffe4ec 50%, #fce4ec 100%);
            min-height: 100vh;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background: linear-gradient(135deg, #fff5f0 0%, #ffe4ec 100%);
            box-shadow: 0 2px 10px rgba(244, 143, 177, 0.1);
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
            text-decoration: none;
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
        
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 85px);
            padding: 40px 20px;
        }
        
        .login-box {
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(244, 143, 177, 0.2);
            width: 100%;
            max-width: 400px;
        }
        
        .login-box h1 {
            text-align: center;
            color: #1f1f1f;
            margin-bottom: 10px;
            font-size: 28px;
        }
        
        .login-box p {
            text-align: center;
            color: #888;
            margin-bottom: 30px;
            font-size: 14px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #1f1f1f;
            font-weight: 500;
            font-size: 14px;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #f0f0f0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s;
            font-family: 'Poppins', sans-serif;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #ff9fb2;
            box-shadow: 0 0 10px rgba(255, 159, 178, 0.2);
        }
        
        .form-group input:invalid {
            border-color: #ff6b6b;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember-me input {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            cursor: pointer;
            accent-color: #ff9fb2;
        }
        
        .remember-me label {
            margin: 0;
            cursor: pointer;
            color: #888;
            font-size: 14px;
        }
        
        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
        }
        
        .forgot-password a {
            color: #ff9fb2;
            text-decoration: none;
            font-size: 14px;
            transition: 0.3s;
        }
        
        .forgot-password a:hover {
            color: #ff7fa8;
        }
        
        .btn-login {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #ffb3cc 0%, #ffa3bd 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Poppins', sans-serif;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(255, 179, 204, 0.25);
        }
        
        .signup-link {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 14px;
        }
        
        .signup-link a {
            color: #ff9fb2;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }
        
        .signup-link a:hover {
            color: #ff7fa8;
        }
        
        .alert {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .alert-error {
            background-color: #ffe0e0;
            color: #d32f2f;
            border: 1px solid #ff9fb2;
        }
        
        .error-message {
            color: #d32f2f;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="logo-circle">K</a>
        <div class="nav-links" style="margin-left: auto; margin-right: 0;">
            <a href="/">Inicio</a>
        </div>
    </nav>
    
    <div class="login-container">
        {{ $slot }}
    </div>
</body>
</html>
