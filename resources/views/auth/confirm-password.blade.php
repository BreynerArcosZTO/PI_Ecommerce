<x-guest-layout>
    <div class="login-box">
        <h1>Confirmar Contraseña</h1>
        <p>Esta es un área segura. Confirma tu contraseña para continuar</p>
        
        @if ($errors->any())
            <div class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-login">Confirmar</button>

            <div class="signup-link">
                <a href="{{ route('login') }}">Volver a Iniciar Sesión</a>
            </div>
        </form>
    </div>
</x-guest-layout>
