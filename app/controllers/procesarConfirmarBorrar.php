<?php

include __DIR__.'/../libraries/creaSimpleTable.php';
include __DIR__.'/../models/BD.php';

$bd = BD::getInstance();

$detalles = $bd->showTarea($_GET['id']);

include '../views/confirmarBorrar.php';