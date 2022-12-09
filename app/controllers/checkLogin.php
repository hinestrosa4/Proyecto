<?php

include "varios.php";
include CONTROLLERS_FOLDER . "utilsFormulario.php";
include MODELS_FOLDER . "BD.php";

$bd = BD::getInstance();

if (isset($_SESSION['login'])) {
    session_destroy();
}

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
    } else {
        session_start();
        //var_dump($datosUser);
        $fechaActual = date('H:i:s');

        $_SESSION["fechaLogin"] = $fechaActual;
        $_SESSION["login"] = $datosUser["nombre"];

        //echo $datosUser["isAdmin"];
        if ($datosUser["isAdmin"] == 0) {
            $_SESSION["rol"] = "operario";
        } else
            $_SESSION["rol"] = "admin";

        echo $blade->render('inicio');
    }
}
