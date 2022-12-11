<?php
session_start();
if ($_SESSION['rol'] == "admin") {
    include(__DIR__ . '/../ctrl.php');
    include(MODELS_FOLDER . 'BD.php');

    $bd = BD::getInstance();
    $bd->deleteUsuario($_GET['nif']);
}
header('Location: procesarlistaUsuarios.php');
