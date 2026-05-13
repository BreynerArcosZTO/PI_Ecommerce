<x-guest-layout>
    <div class="login-box">
        <h1>Crear Cuenta</h1>
        <p>Únete a nuestra comunidad Eterna Koreana</p>
        
        @if ($errors->any())
            <div class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-login">Crear Cuenta</button>

            <div class="signup-link">
                ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
            </div>
        </form>
    </div>
</x-guest-layout>
