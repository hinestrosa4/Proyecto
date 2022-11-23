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

$hayError=FALSE;
$errores=[];
$fechaActual = date('Y-m-d');

if ( ! $_POST ) 
{ // Si no han enviado el fomulario
	include '../views/formularioTarea.php';
}else{

/*Validar Descripcion y Persona de contacto*/
$nombre = $_POST['textNombre'];
$apellidos = $_POST['textApellidos'];
$descripcion = $_POST['textDescripcion'];

if (empty($nombre)) {
    $errores['nombre']= 'El nombre no debe estar vacio';
	$hayError=TRUE;
}

if (empty($apellidos)) {
    $errores['apellidos']= 'Los apellidos no debe estar vacio';
	$hayError=TRUE;
}

if (empty($descripcion)) {
    $errores['descripcion']= 'La descripción no debe estar vacia';
	$hayError=TRUE;
}

/*Validar CIF o NIF*/
$dni = $_POST['textNif'];

if (empty($dni) || !validarDni($dni) && !cifValido($dni)) {
    $errores['nif']= 'NIF o CIF debe ser correcto';
	$hayError=TRUE;
}

/*Validar Telefono*/
$telefono = $_POST['textTelefono'];

if (empty($telefono) || !validarTelefono($telefono)) {
    $errores['telefono']= 'El telefono debe ser válido';
	$hayError=TRUE;
}

/*Validar CP*/
$cp = $_POST['textCp'];

if (empty($cp) || !validarCodigoPostal($cp)) {
    $errores['cp']= 'El codigo postal debe ser valido';
	$hayError=TRUE;
}

/*Validar Correo*/
$correo = $_POST['textCorreo'];

if (empty($correo) || !validarCorreo($correo)) {
    $errores['correo']= 'El correo debe ser valido';
	$hayError=TRUE;
}

/*Validar Fecha Realizacion*/
$fechaRealizacion = $_POST['fechaRealizacion'];

if (empty($fechaRealizacion) || !validarFechaRealizacion($fechaRealizacion)) {
    $errores['fechaRealizacion']= 'La fecha de creacion debe ser posterior a la fecha actual';
	$hayError=TRUE;
}

if($hayError){
    include "../views/formularioTarea.php";
}
}