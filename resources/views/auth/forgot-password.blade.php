<x-guest-layout>
    <div class="login-box">
        <h1>Recuperar Contraseña</h1>
        <p>Ingresa tu correo para recibir un enlace de recuperación</p>
        
        @if (session('status'))
            <div class="alert" style="background-color: #e8f5e9; color: #2e7d32; border: 1px solid #a5d6a7;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-login">Enviar Enlace de Recuperación</button>

            <div class="signup-link">
                <a href="{{ route('login') }}">Volver a Iniciar Sesión</a>
            </div>
        </form>
    </div>
</x-guest-layout>
