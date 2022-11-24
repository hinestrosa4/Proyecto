<?php

include "utilsFormulario.php";
include "../models/BD.php";
//include '../controllers/queryProvincia.php';
$a = BD::getInstance();
include "../libraries/creaSelect.php";
include "../models/Provincia.php";
include "../models/Usuario.php";

//Librerias
include "../libraries/validarDNI.php";
include "../libraries/validarTelefono.php";
include "../libraries/validarCodigoPostal.php";
include "../libraries/validarCorreo.php";
include "../libraries/validarFechaRealizacion.php";
include "../libraries/validarCIF.php";

$hayError = FALSE;
$errores = [];
$fechaActual = date('Y-m-d');

if (!$_POST) { // Si no han enviado el fomulario
    include '../views/formularioTarea.php';
} else {
    
    /*Validar Descripcion y Persona de contacto*/
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $descripcion = $_POST['descripcion'];

    if (empty($nombre)) {
        $errores['nombre'] = 'El nombre no debe estar vacio';
        $hayError = TRUE;
    }
    if (empty($apellidos)) {
        $errores['apellidos'] = 'Los apellidos no debe estar vacio';
        $hayError = TRUE;
    }
    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripción no debe estar vacia';
        $hayError = TRUE;
    }
    /*Validar CIF o NIF*/
    $dni = $_POST['nif_cif'];

    if (empty($dni) || !validarDni($dni) && !cifValido($dni)) {
        $errores['nif_cif'] = 'NIF o CIF debe ser correcto';
        $hayError = TRUE;
    }
    /*Validar Telefono*/
    $telefono = $_POST['telefono'];

    if (empty($telefono) || !validarTelefono($telefono)) {
        $errores['telefono'] = 'El telefono debe ser válido';
        $hayError = TRUE;
    }

    /*Validar CP*/
    $cp = $_POST['codigo_postal'];

    if (empty($cp) || !validarCodigoPostal($cp)) {
        $errores['codigo_postal'] = 'El codigo postal debe ser valido';
        $hayError = TRUE;
    }

    /*Validar Correo*/
    $correo = $_POST['correo'];

    if (empty($correo) || !validarCorreo($correo)) {
        $errores['correo'] = 'El correo debe ser valido';
        $hayError = TRUE;
    }

    /*Validar Fecha Realizacion*/
    $fechaRealizacion = $_POST['fecha_realizacion'];

    if (empty($fechaRealizacion) || !validarFechaRealizacion($fechaRealizacion)) {
        $errores['fecha_realizacion'] = 'La fecha de creacion debe ser posterior a la fecha actual';
        $hayError = TRUE;
    }

    if ($hayError) {
        include "../views/formularioTarea.php";
    } else {
        $a->catchTarea();
    }
}
