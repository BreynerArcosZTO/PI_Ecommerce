<x-guest-layout>
    <div class="login-box">
        <h1>Verifica tu Correo</h1>
        <p>¡Gracias por registrarte! Verifica tu correo electrónico para continuar</p>
        
        <div class="form-group" style="background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px; text-align: center;">
            <p style="color: #666; font-size: 14px; margin: 0;">Hemos enviado un enlace de verificación a tu correo. Por favor verifica tu bandeja de entrada.</p>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="alert" style="background-color: #e8f5e9; color: #2e7d32; border: 1px solid #a5d6a7;">
                Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
            </div>
        @endif

        <form method="POST" action="{{ route('verification.send') }}" style="margin-bottom: 15px;">
            @csrf
            <button type="submit" class="btn-login">Reenviar Correo de Verificación</button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-login" style="background: linear-gradient(135deg, #ccc 0%, #bbb 100%); margin-top: 10px;">Cerrar Sesión</button>
        </form>
    </div>
</x-guest-layout>
