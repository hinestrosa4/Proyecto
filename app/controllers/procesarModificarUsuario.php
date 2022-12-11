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
include LIBRARIES_FOLDER."validarCodigoPostal.php";
include LIBRARIES_FOLDER."validarCorreo.php";
include LIBRARIES_FOLDER."validarFechaRealizacion.php";
include LIBRARIES_FOLDER."validarCIF.php";
include LIBRARIES_FOLDER."uploadFile.php";


$nif = $_GET['nif'];
$hayError = FALSE;
$errores = [];
$fechaActual = date('Y-m-d');

if (!$_POST) { // Si no han enviado el fomulario
    $datosUser = Usuario::getUsuarios($nif);
    echo $blade->render('modificarUsuario', [
        'usuario' => Usuario::getUsuarios($nif),
        'nif'=>$nif,
        'datosUser' => $datosUser,
    ]);
} else {
    /*Validar Correo*/
    $correo = $_POST['correo'];

    if (empty($correo) || !validarCorreo($correo)) {
        $errores['correo'] = 'El correo debe ser valido';
        $hayError = TRUE;
    }

    if ($hayError) {
        echo $blade->render('modificarUsuario', [
            'ususarios' => Usuario::getUsuarios($nif),
            'nif'=>$nif,
        ]);
    } else {
        
        $bd->modUser($nif, $_POST);
        header('Location: procesarlistaUsuarios.php');
    } 
}
