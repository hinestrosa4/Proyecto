<?php

include "varios.php";
include CONTROLLERS_FOLDER . "utilsFormulario.php";
include MODELS_FOLDER . "BD.php";

$bd = BD::getInstance();

//Si hay una sesion ya iniciada, se destruye
if (isset($_SESSION['login'])) {
    session_destroy();
}

//Si no envia datos, se redirige al login
if (!$_POST) { // Si no han enviado el fomulario
    echo $blade->render('login');
} else {

    //Si envia datos, recogemos los datos enviados y los de la BD
    $user = $_POST['tCorreoLogin'];
    $password = $_POST['tPasswordLogin'];
    $hayError = FALSE;
    $errores = [];
    $datosUser = $bd->checkUser($user, $password);

    //Comprobamos si los datos existen
    if (isset($datosUser['correo'])) {
    } else {
        $errores['login'] = "Este usuario no existe";
        $hayError = TRUE;
    }

    //Si hay errores, se muestra login
    if ($hayError) {
        echo $blade->render('login');
    } else {
        //Si esta todo bien, iniciamos las sesiones correspondientes
        session_start();
        $fechaActual = date('H:i:s');

        $_SESSION["fechaLogin"] = $fechaActual;
        $_SESSION["login"] = $datosUser["nombre"];

        if ($datosUser["isAdmin"] == 0) {
            $_SESSION["rol"] = "operario";
        } else
            $_SESSION["rol"] = "admin";

        echo $blade->render('inicio');
    }
}
