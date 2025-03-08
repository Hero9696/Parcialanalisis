<section class="modal" id="loginModal">
        <div class="modal-content">
            <h2>Iniciar Sesión</h2>
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit">Ingresar</button>
            </form>
            <?php 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $user = $_POST['username'];
                    $pass = $_POST['password'];
                    if ($user === "usuario1" && $pass === "pass123") {
                        echo "<script>document.getElementById('loginModal').style.display = 'none';</script>";
                    } else {
                        echo "<p style='color: red;'>Credenciales incorrectas</p>";
                    }
                }
            ?>
        </div>
    </section>
    ?>
?>