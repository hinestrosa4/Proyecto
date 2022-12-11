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

    static function completarTarea($id, $camposCompletar)
    {
        return BD::getInstance()->modTarea($id, $camposCompletar);
    }

    static function getNumeroTareas()
    {

        return BD::getInstance()->numFilas('tareas');
    }

    static function getNumeroTareasPendientes()
    {

        return BD::getInstance()->numFilasPendientes('tareas');
    }

    static function getTareasImpPorPagina($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->contenidoImpTabla('tareas', $empezarDesde, $tamanioPagina);
    }

    static function getTareasPendientes($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->tareasPendiente('tareas', $empezarDesde, $tamanioPagina);
    }

    static function getTareas($id)
    {
        return BD::getInstance()->showTarea($id);
    }

    static function buscarTarea($consulta)
    {
        return BD::getInstance()->resultadosPorPagina($consulta);
    }
}
