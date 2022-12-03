<?php
include "utilsFormulario.php";
include "../models/BD.php";

$bd = BD::getInstance();

if (!$_POST) { // Si no han enviado el fomulario
    include '../views/login.php';
} else {

    $user = $_POST['tCorreoLogin'];
    $password = $_POST['tPasswordLogin'];
    $hayError = FALSE;
    $errores = [];
    $datosUser = $bd->checkUser($user, $password);

    if (isset($datosUser['correo'])) {

    } else {
        $errores['login'] = "Este usuario no existe";
        $hayError = TRUE;
    }

    if ($hayError) {
        include '../views/login.php';
    } else
        include '../views/menuAdmin.php';
}
