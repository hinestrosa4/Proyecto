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

    static function getTareasPorPagina($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->resultadosPorPagina('tareas', $empezarDesde, $tamanioPagina);
    }
}
