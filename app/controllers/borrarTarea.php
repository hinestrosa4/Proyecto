<?php
//Iniciamos la sesión
session_start();

//Solo permitirá borrar si es administrador
if ($_SESSION['rol'] == "admin") {
    include(__DIR__ . '/../ctrl.php');
    include(MODELS_FOLDER . 'BD.php');

    $bd = BD::getInstance();
    $bd->deleteTarea($_GET['id']);
}
header('Location: procesarlistaTareas.php');
