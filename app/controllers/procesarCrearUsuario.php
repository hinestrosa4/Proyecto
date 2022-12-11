<?php
session_start();
include "varios.php";
include CONTROLLERS_FOLDER."utilsFormulario.php";
include MODELS_FOLDER."BD.php";
//include '../controllers/queryProvincia.php';
$bd = BD::getInstance();
include LIBRARIES_FOLDER."creaSelect.php";
include MODELS_FOLDER."Provincia.php";
include MODELS_FOLDER."Usuario.php";

//Librerias
include LIBRARIES_FOLDER."validarDNI.php";
include LIBRARIES_FOLDER."validarTelefono.php";
include LIBRARIES_FOLDER."validarCorreo.php";
include LIBRARIES_FOLDER."validarStringyNumber.php";

$hayError = FALSE;
$errores = [];

if (!$_POST) { // Si no han enviado el fomulario
    echo $blade->render('crearUsuario');
} else {

    $nombre = $_POST['nombre'];

    if (empty($nombre)) {
        $errores['nombre'] = 'El nombre no debe estar vacio';
        $hayError = TRUE;
    }
    if (!validarStringyNumber($_POST["nombre"])) {
        $errores['nombre'] = 'Formato incorrecto o se encuentra vacio';
        $hayError = TRUE;
    }

    /*Validar CIF o NIF*/
    $dni = $_POST['nif'];

    if (empty($dni) || !validarDni($dni) && !cifValido($dni)) {
        $errores['nif'] = 'NIF o CIF debe ser correcto';
        $hayError = TRUE;
    }
    /*Validar Telefono*/
    $telefono = $_POST['telefono'];

    if (empty($telefono) || !validarTelefono($telefono)) {
        $errores['telefono'] = 'El telefono debe ser válido';
        $hayError = TRUE;
    }

    /*Validar Correo*/
    $correo = $_POST['correo'];

    if (empty($correo) || !validarCorreo($correo)) {
        $errores['correo'] = 'El correo debe ser valido';
        $hayError = TRUE;
    }

    $clave = $_POST['clave'];
    if (empty($clave) || strlen($clave)<5) {
        $errores['clave'] = 'La clave debe ser mayor o igual a 5 caracteres';
        $hayError = TRUE;
    }
    
    $admin = $_POST['isAdmin'];

    if (($admin!=0) && ($admin!=1)) {
        $errores['isAdmin'] = 'Debe ser 0 (operario) o 1 (admin)';
        $hayError = TRUE;
    }

    if ($hayError) {
        echo $blade->render('crearUsuario');
    } else {
        $bd->catchUsuario();
    }
}
