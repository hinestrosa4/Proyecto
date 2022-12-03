<?php


include '../models/BD.php';

$bd = BD::getInstance();

$detalles = $bd->showTarea($_GET['id']);

include '../views/confirmarBorrar.php';