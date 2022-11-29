<?php

include('../models/Tarea.php');
include('../models/BD.php');
include('../libraries/creaTable.php');

//$listaTareas = Tarea::getListaTareas();

$nombreCampos = [
    'id', 'nif_cif', 'nombre', 'apellidos', 'telefono', 'descripcion', 'correo', 'direccion', 'poblacion',
    'codigo_postal', 'provincia', 'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
    'anotaciones_ant', 'anotaciones_pos', 'fichero_resumen', 'foto_trabajo'
];


// Preparar

$tamanioPagina = 5;

if (isset($_GET['pagina'])) {

    if ($_GET['pagina'] == 1) {

        header('location:procesarListaTareas.php');
    } else {

        $pagina = $_GET['pagina'];
    }
} else {

    $pagina = 1;
}

$empezarDesde = ($pagina - 1) * $tamanioPagina;
//echo "empezardesde: " . $empezarDesde . " pagina: " . $pagina . "<br>";

$numFilas = Tarea::getNumeroTareas();
$totalPaginas = ceil($numFilas / $tamanioPagina);

$registro = Tarea::getTareasPorPagina($empezarDesde, $tamanioPagina);

include('../views/listaTareas.php');

for ($i = 1; $i <= $totalPaginas; $i++) {

    echo "<a href='?pagina=" . $i . "'>" . $i . "</a> ";
}
