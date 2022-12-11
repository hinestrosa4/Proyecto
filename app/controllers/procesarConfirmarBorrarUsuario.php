<?php
//Iniciamos la sesion
session_start();

//Si es admin, nos permite confirmar para borrar Usuario
if ($_SESSION['rol'] == "admin") {
    include "varios.php";
    include MODELS_FOLDER . 'BD.php';

    $bd = BD::getInstance();

    $detalles = $bd->showUser($_GET['nif']);

    echo $blade->render('confirmarBorrarUsuario', [
        'detalles' => $detalles,
    ]);
} else
    header('Location: procesarlistaUsuarios.php');
