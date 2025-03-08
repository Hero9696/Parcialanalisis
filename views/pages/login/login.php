<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content shadow-lg border-0">

            <div class="modal-header text-white" style="background-color: var(--bs-primary);">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" disabled></button> <!-- La "X" sigue ahí, pero deshabilitada -->
            </div>

            <div class="modal-body" style="background-color: var(--bs-gray-100);">
                <form id="loginForm" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label text-dark">Usuario</label>
                        <input type="text" class="form-control border-0 shadow-sm" id="username" name="username" placeholder="Ingrese su usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">Contraseña</label>
                        <input type="password" class="form-control border-0 shadow-sm" id="password" name="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <button type="submit" class="btn text-white w-100" style="background-color: var(--bs-primary);">Ingresar</button>
                </form>
                <div id="errorMessage" class="alert alert-danger mt-3 text-center shadow-sm d-none"></div>
            </div>

            <div class="modal-footer border-0" style="background-color: var(--bs-secondary);">
                <button type="button" class="btn text-white w-100" style="background-color: var(--bs-gray-700);" disabled> Cerrar </button>
            </div>
        </div>
    </div>
</div>