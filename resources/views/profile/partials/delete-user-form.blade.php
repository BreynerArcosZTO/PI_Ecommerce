<div style="margin-bottom: 20px;">
    <p style="color: #666; font-size: 0.95rem; margin-bottom: 15px;">
        Una vez que elimines tu cuenta, todos tus datos serán <strong>permanentemente eliminados</strong>. 
        Esta acción <strong>no se puede deshacer</strong>.
    </p>
</div>

<button type="button" class="btn btn-danger" onclick="openDeleteModal()">
    <ion-icon name="trash-outline"></ion-icon> Eliminar Mi Cuenta
</button>

<!-- Modal de Confirmación -->
<div id="deleteModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
    background: rgba(0, 0, 0, 0.5); z-index: 2000; align-items: center; justify-content: center;">
    <div style="background: white; padding: 35px; border-radius: 25px; max-width: 450px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);">
        <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
            <div style="width: 50px; height: 50px; background: rgba(255, 107, 107, 0.2); border-radius: 15px; 
                display: flex; align-items: center; justify-content: center; color: #ff6b6b; font-size: 1.6rem;">
                <ion-icon name="warning-outline"></ion-icon>
            </div>
            <h3 style="font-size: 1.2rem; color: #1f1f1f; margin: 0;">¿Estás seguro?</h3>
        </div>

        <p style="color: #666; margin-bottom: 15px;">
            Esta acción es irreversible. Todos tus datos de cuenta, pedidos y favoritos serán eliminados permanentemente.
        </p>

        <form method="post" action="{{ route('profile.destroy') }}" style="margin-bottom: 20px;">
            @csrf
            @method('delete')

            <div class="form-group">
                <label for="delete_password">Ingresa tu contraseña para confirmar</label>
                <input id="delete_password" name="password" type="password" 
                    placeholder="Tu contraseña" required autocomplete="current-password">
                @if ($errors->userDeletion->has('password'))
                    <p class="error-message show">{{ $errors->userDeletion->first('password') }}</p>
                @endif
            </div>

            <div style="display: flex; gap: 15px;">
                <button type="button" class="btn btn-secondary" style="flex: 1;" onclick="closeDeleteModal()">
                    Cancelar
                </button>
                <button type="submit" class="btn btn-danger" style="flex: 1;">
                    Sí, Eliminar Cuenta
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openDeleteModal() {
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
    }

    // Cerrar modal al hacer clic fuera
    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDeleteModal();
        }
    });
</script>
