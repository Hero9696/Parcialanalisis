<?php
session_start();
require_once  __DIR__ . '/../views/modules/AuthModel.php';

class TemplateController {

    // Main view template
    public function index() {
        include __DIR__ . '/../views/template.php';
    }

    // Main route URL
    static public function path() {
        $protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") ? "https" : "http";
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . "/";
    }
}


$authModel = new AuthModel();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($authModel->validateUser($user, $pass)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['login_message'] = '<div class="alert alert-success">Inicio de sesión exitoso</div>';
    } else {
        $_SESSION['login_message'] = '<div class="alert alert-danger">Credenciales incorrectas</div>';
    }

    TemplateController::path();
    header('Location: ' . TemplateController::path());
    exit();
}
?>
