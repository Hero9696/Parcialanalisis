<section class="login">
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <h2>Iniciar Sesión</h2>
            <form method="POST" action="../../../controllers/AuthController.php">
                <input type="text" name="username" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit">Ingresar</button>
            </form>
            <?php if (isset($_GET['error'])) { echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>"; } ?>
        </div>
    </div>

</section>