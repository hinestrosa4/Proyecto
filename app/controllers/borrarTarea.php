<?php
session_start();
include (__DIR__.'/../ctrl.php');
include (MODELS_FOLDER.'BD.php');

$bd = BD::getInstance();
$bd->deleteTarea($_GET['id']);

header('Location: procesarlistaTareas.php');
