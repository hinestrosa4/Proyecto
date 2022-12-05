<?php

$id = $_GET['id'];

$nombreCampos = [
    'id', 'nif_cif', 'nombre', 'apellidos', 'telefono', 'descripcion', 'correo', 'direccion', 'poblacion',
    'codigo_postal', 'provincia', 'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
    'anotaciones_ant', 'anotaciones_pos', 'fichero_resumen', 'foto_trabajo'
];

$nombresScreen = ["Identificador", "Nif/CIF","Nombre", "Apellidos", "Teléfono", "Descripción", "Correo", "Dirección", "Población",
  "Codigo Postal", "Provincia","Estado", "Fecha Creación","Operario Encargado", "Fecha Realización","Anotaciones Anteriores",
"Anotaciones Posteriores", "Fichero Resumen", "Foto Trabajo"];

include __DIR__.'/../models/Tarea.php';
include __DIR__.'/../models/BD.php';
include __DIR__.'/../libraries/creaTable.php';
include __DIR__.'/../views/verDetalles.php';