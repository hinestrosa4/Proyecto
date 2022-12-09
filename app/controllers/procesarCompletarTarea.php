<?php
session_start();
include "varios.php";
include CONTROLLERS_FOLDER . 'utilsFormulario.php';
include LIBRARIES_FOLDER . 'creaSimpleTable.php';
include MODELS_FOLDER . 'BD.php';
include LIBRARIES_FOLDER . 'uploadFile.php';

$bd = BD::getInstance();
$id = $_GET['id'];
$detalles = $bd->showTarea($id);

if (!$_POST) {

    echo $blade->render('completarTarea', [
        'id' => $id,
        'detalles' => $detalles,
    ]);
} else {
    var_dump($_POST);

    $bd->completarTarea($id, $_POST);

    /*Validar Fichero Resumen*/
    uploadFile("fichero_resumen", $id);

    /*Validar Foto Trabajo*/
    uploadFile("foto_trabajo", $id);

header('Location: procesarlistaTareas.php');
}
