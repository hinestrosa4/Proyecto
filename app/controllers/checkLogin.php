<?php

include "varios.php";
include CONTROLLERS_FOLDER . "utilsFormulario.php";
include MODELS_FOLDER . "BD.php";

$bd = BD::getInstance();

if (!$_POST) { // Si no han enviado el fomulario
    echo $blade->render('login');
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
        echo $blade->render('login');
    } else
        echo $blade->render('nada');
    //include VIEWS_FOLDER.'menuAdmin.php';
}
