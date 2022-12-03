<?php

$id = $_GET['id'];

$nombreCampos = [
    'id', 'nif_cif', 'nombre', 'apellidos', 'telefono', 'descripcion', 'correo', 'direccion', 'poblacion',
    'codigo_postal', 'provincia', 'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
    'anotaciones_ant', 'anotaciones_pos', 'fichero_resumen', 'foto_trabajo'
];
include '../models/Tarea.php';
include '../models/BD.php';
include '../libraries/creaTable.php';
include '../views/verDetalles.php';