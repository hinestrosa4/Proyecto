<?php

include "utilsFormulario.php";

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

if (empty($dni) || !validarDni($dni)) {
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
}else{
    //Enviar a base de datos
}
}

/*Funciones*/
function validarDni($dni)
{
    $lista = "TRWAGMYFPDXBNJZSQVHLCKE";

    if (strlen(substr($dni, 0, -1)) == 8 && is_numeric(substr($dni, 0, -1))) {
        $resultado = (int)substr($dni, 0, -1) % 23;
        $letraAsign = str_split($lista)[$resultado];
        if (substr($dni, -1) == $letraAsign) {
            return true;
        } else {
            return false;
        }
    }
}

function validarTelefono($tel)
{
    $a = "^(?:(?:\+?[0-9]{2,4})?[ ]?[6789][0-9 ]{8,13})$";
    if (preg_match("/$a/", $tel)) {
        return true;
    } else {
        return false;
    }
}

function validarCodigoPostal($cp)
{
    $a = "^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$";
    if (preg_match("/$a/", $cp)) {
        return true;
    } else {
        return false;
    }
}

function validarCorreo($correo)
{
    $a = "^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$";
    if (preg_match("/$a/", $correo)) {
        return true;
    } else {
        return false;
    }
}

function validarFechaRealizacion($fecha)
{
    $fecha = new DateTime($fecha);
    $hoy = new DateTime();
    if ($fecha <= $hoy) {
        return false;
    } else {
        return true;
    }
}