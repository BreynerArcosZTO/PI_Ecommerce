<form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="update_password_current_password">Contraseña Actual</label>
        <input id="update_password_current_password" type="password" name="current_password" 
            placeholder="Ingresa tu contraseña actual" autocomplete="current-password" required>
        @if ($errors->updatePassword->has('current_password'))
            <p class="error-message show">{{ $errors->updatePassword->first('current_password') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label for="update_password_password">Nueva Contraseña</label>
        <input id="update_password_password" type="password" name="password" 
            placeholder="Mínimo 8 caracteres" autocomplete="new-password" required>
        @if ($errors->updatePassword->has('password'))
            <p class="error-message show">{{ $errors->updatePassword->first('password') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label for="update_password_password_confirmation">Confirmar Contraseña</label>
        <input id="update_password_password_confirmation" type="password" name="password_confirmation" 
            placeholder="Repite la nueva contraseña" autocomplete="new-password" required>
        @if ($errors->updatePassword->has('password_confirmation'))
            <p class="error-message show">{{ $errors->updatePassword->first('password_confirmation') }}</p>
        @endif
    </div>

    <div class="button-group">
        <button type="submit" class="btn btn-primary">
            <ion-icon name="checkmark-outline"></ion-icon> Actualizar Contraseña
        </button>
    </div>

    @if (session('status') === 'password-updated')
        <div class="success-message show">
            ✓ Tu contraseña ha sido actualizada exitosamente
        </div>
    @endif
</form>
