<?php
session_start();
require_once "../models/AuthModel.php";

$authModel = new AuthModel();
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($authModel->validateUser($user, $pass)) {
        $_SESSION['loggedin'] = true;
        header("Location: ../views/login.php");
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>