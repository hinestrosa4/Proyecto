<?php
session_start();
include "varios.php";
include(MODELS_FOLDER.'Tarea.php');
include(MODELS_FOLDER.'BD.php');
include(LIBRARIES_FOLDER.'creaTable.php');

$id = $_GET['id'];

/*$nombreCampos = [
    'id', 'nif_cif', 'nombre', 'apellidos', 'telefono', 'descripcion', 'correo', 'direccion', 'poblacion',
    'codigo_postal', 'provincia', 'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
    'anotaciones_ant', 'anotaciones_pos', 'fichero_resumen', 'foto_trabajo'
];

$nombresScreen = ["Identificador", "Nif/CIF","Nombre", "Apellidos", "Teléfono", "Descripción", "Correo", "Dirección", "Población",
  "Codigo Postal", "Provincia","Estado", "Fecha Creación","Operario Encargado", "Fecha Realización","Anotaciones Anteriores",
"Anotaciones Posteriores", "Fichero Resumen", "Foto Trabajo"];*/

$datosTarea = Tarea::getTareas($id);

echo $blade->render('verDetalles', [
    'tareas' => Tarea::getTareas($id),
    'datosTarea' => $datosTarea,
    'id'=>$id,
    //'nombresScreen'=>$nombresScreen,
    //'nombreCampos'=>$nombreCampos,
]);