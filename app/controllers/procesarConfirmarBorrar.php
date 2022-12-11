<?php
//Iniciamos la sesion
session_start();

//Si es admin, nos permite confirmar para borrar Tarea
if ($_SESSION['rol'] == "admin") {
    include "varios.php";
    include LIBRARIES_FOLDER . 'creaSimpleTable.php';
    include MODELS_FOLDER . 'BD.php';

    $bd = BD::getInstance();

    $detalles = $bd->showTarea($_GET['id']);

    echo $blade->render('confirmarBorrar', [
        'detalles' => $detalles,
    ]);
} else
    header('Location: procesarlistaTareas.php');
