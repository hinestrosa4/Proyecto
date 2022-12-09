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
include MODELS_FOLDER."Tarea.php";

//Librerias
include LIBRARIES_FOLDER."validarDNI.php";
include LIBRARIES_FOLDER."validarTelefono.php";
include LIBRARIES_FOLDER."validarCodigoPostal.php";
include LIBRARIES_FOLDER."validarCorreo.php";
include LIBRARIES_FOLDER."validarFechaRealizacion.php";
include LIBRARIES_FOLDER."validarCIF.php";
include LIBRARIES_FOLDER."uploadFile.php";

$id = $_GET['id'];
$hayError = FALSE;
$errores = [];
$fechaActual = date('Y-m-d');

if (!$_POST) { // Si no han enviado el fomulario
    $datosTarea = Tarea::getTareas($id);
    echo $blade->render('modificarTarea', [
        'tareas' => Tarea::getTareas($id),
        'id'=>$id,
        'datosTarea' => $datosTarea,
    ]);
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

    /*Validar Fichero Resumen*/
    uploadFile("fichero_resumen", $bd->getCodTarea()[0] + 1);

    /*Validar Foto Trabajo*/
    uploadFile("foto_trabajo", $bd->getCodTarea()[0] + 1);

    if ($hayError) {
        echo $blade->render('modificarTarea', [
            'tareas' => Tarea::getTareas($id),
            'id'=>$id,
        ]);
    } else {
        $bd->modTarea($id, $_POST);
        header('Location: procesarListaTareas.php');
    } 
}
