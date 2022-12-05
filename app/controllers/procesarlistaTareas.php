<?php

include('../models/Tarea.php');
include('../models/BD.php');
include('../libraries/creaTable.php');

//$listaTareas = Tarea::getListaTareas();

/*$nombreCampos = [
    'id', 'nif_cif', 'nombre', 'apellidos', 'telefono', 'descripcion', 'correo', 'direccion', 'poblacion',
    'codigo_postal', 'provincia', 'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
    'anotaciones_ant', 'anotaciones_pos', 'fichero_resumen', 'foto_trabajo'
];*/

$nombreCamposImp = [
    'id', 'nombre', 'apellidos', 'telefono', 'correo', 'fecha_creacion',
    'operario_encargado', 'fecha_realizacion'
];

$nombresScreen = ["Identificador", "Nombre", "Apellidos", "Teléfono", "Correo", "Fecha Creación",
"Operario Encargado", "Fecha Realización"];

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
//echo $empezarDesde;

if ($empezarDesde < 0) {
    $empezarDesde = 0;
    $pagina = 1;
}

$numFilas = Tarea::getNumeroTareas();
$totalPaginas = ceil($numFilas / $tamanioPagina);

include(__DIR__.'/../views/listaTareas.php');
echo "<p><b>Página Actual:</b> $pagina</p>";


echo "<ul class=pagination>";

echo "<li class=page-item><a class=page-link href='? pagina=" . 1 . "'>Primera</a> ";
echo "<li class=page-item><a class=page-link href='? pagina=" . $pagina - 1 . "'><<</a> ";

for ($i = 1; $i <= $totalPaginas; $i++) {
    echo "<li class=page-item><a class=page-link href='? pagina=" . $i . "'>" . $i . "</a> ";
}

echo "<li class=page-item><a class=page-link href='? pagina=" . $pagina + 1 . "'>>></a> ";
echo "<li class=page-item><a class=page-link href='? pagina=" . $totalPaginas . "'>Última</a> ";
echo "</ul>";
