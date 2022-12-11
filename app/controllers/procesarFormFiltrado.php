<?php
session_start();

include "varios.php";

include MODELS_FOLDER."BD.php";
include MODELS_FOLDER."Tarea.php";

include LIBRARIES_FOLDER."getContenido.php";
include LIBRARIES_FOLDER."creaTable.php";

/**
 *  Si no han enviado el fomulario
 */

if (!isset($_GET['pagina'])) {

    if (!$_POST) {

        echo $blade->render('formularioFiltrado');
    } else {

        $todos_los_datos = $_POST;

        $consulta = " WHERE ";

        if (!empty($todos_los_datos["valor1"])) {
            $consulta .= $todos_los_datos["campo1"] . $todos_los_datos["criterio1"] . "'" . $todos_los_datos["valor1"] . "'";
            if (!empty($todos_los_datos["valor2"]) || !empty($todos_los_datos["valor3"])) {
                $consulta .= " AND ";
            }
        }
        if (!empty($todos_los_datos["valor2"])) {
            $consulta .= $todos_los_datos["campo2"] . $todos_los_datos["criterio2"] . "'" . $todos_los_datos["valor2"] . "'";
            if (!empty($todos_los_datos["valor3"])) {
                $consulta .= " AND ";
            }
        }
        if (!empty($todos_los_datos["valor3"])) {
            $consulta .= $todos_los_datos["campo3"] . $todos_los_datos["criterio3"] . "'" . $todos_los_datos["valor3"] . "'";
        }

        $nombreCampos = [
            'id', 'nif_cif', 'nombre', 'descripcion', 'poblacion',
            'estado', 'fecha_creacion', 'operario_encargado', 'fecha_realizacion',
        ];

        $nombreScreen = [
            'ID', 'NIF', 'Nombre', 'Descripción', 'Población',
            'Estado', 'Fecha Creación', 'Operario Encargado', 'Fecha Realización',
        ];

        echo $blade->render('listaFiltradoTarea', [
            'tareas' => Tarea::buscarTarea($consulta),
            'nombreCampos' => $nombreCampos,
            'nombreScreen'=>$nombreScreen,
        ]);
    }
}