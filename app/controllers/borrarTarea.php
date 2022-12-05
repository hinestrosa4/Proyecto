<?php

include __DIR__.'/../models/BD.php';

$bd = BD::getInstance();
$bd->deleteTarea($_GET['id']);

header('Location: procesarlistaTareas.php');
