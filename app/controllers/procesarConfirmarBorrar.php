<?php
session_start();
include "varios.php";

include LIBRARIES_FOLDER.'creaSimpleTable.php';
include MODELS_FOLDER.'BD.php';

$bd = BD::getInstance();

$detalles = $bd->showTarea($_GET['id']);

echo $blade->render('confirmarBorrar', [
    'detalles'=>$detalles,
]);