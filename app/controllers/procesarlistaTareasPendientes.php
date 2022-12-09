<?php
session_start();
include "varios.php";

include(MODELS_FOLDER.'Tarea.php');
include(MODELS_FOLDER.'BD.php');
include(LIBRARIES_FOLDER.'creaTable.php');

//$listaTareas = Tarea::getListaTareas();

/*$nombreCampos = [
    'id', 'nif_cif', 'nombre', 'apellidos', 'telefono', 'descripcion', 'correo', 'direccion', 'poblacion',
    'codigo_postal', 'provincia', 'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
    'anotaciones_ant', 'anotaciones_pos', 'fichero_resumen', 'foto_trabajo'
];*/

$nombreCamposImp = [
    'id', 'nombre', 'apellidos', 'telefono', 'correo', 'estado',
    'operario_encargado', 'fecha_realizacion'
];

$nombresScreen = ["Identificador", "Nombre", "Apellidos", "Teléfono", "Correo", "Estado",
"Operario Encargado", "Fecha Realización"];

// Preparar

$tamanioPagina = 5;

if (isset($_GET['pagina'])) {

    if ($_GET['pagina'] == 1) {
        header('location:procesarlistaTareasPendientes.php');
    } else {

        $pagina = $_GET['pagina'];
    }
} else {

    $pagina = 1;
}

$empezarDesde = ($pagina - 1) * $tamanioPagina;

if ($empezarDesde < 0) {
    $empezarDesde = 0;
    $pagina = 1;
}

$numFilas = Tarea::getNumeroTareasPendientes();
$totalPaginas = ceil($numFilas / $tamanioPagina);


echo $blade->render('listaTareasPendientes', [
    'tareas' => Tarea::getTareasPendientes($empezarDesde, $tamanioPagina),
    'empezarDesde' => $empezarDesde,
    'tamanioPagina' => $tamanioPagina,
    'pagina' => $pagina,
    'totalPaginas' => $totalPaginas,
    'nombreCamposImp'=>$nombreCamposImp,
    'nombresScreen'=>$nombresScreen
]);