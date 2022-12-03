<?php

class Tarea
{

    private function __construct()
    {
    }

    static function addTarea($campos, $names)
    {
        return BD::getInstance()->insertarCampos('tareas', $names, $campos);
    }

    static function getNumeroTareas()
    {

        return BD::getInstance()->numFilas('tareas');
    }

    static function getTareasImpPorPagina($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->contenidoImpTabla('tareas', $empezarDesde, $tamanioPagina);
    }

    static function getTareas($id)
    {

        return BD::getInstance()->showTarea($id);
    }
}
