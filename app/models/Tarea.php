<?php

class Tarea
{

    private function __construct()
    {
    }
    
    /**
     * addTarea
     *
     * @param  mixed $campos campos añadir tarea
     * @param  mixed $names nombres de la tarea
     * @return void confirmacion de añadir tarea
     */
    static function addTarea($campos, $names)
    {
        return BD::getInstance()->insertarCampos('tareas', $names, $campos);
    }
    
    /**
     * completarTarea
     *
     * @param  mixed $id string id de la tarea
     * @param  mixed $camposCompletar campos de la tarea
     * @return void confirmacion completar tarea
     */
    static function completarTarea($id, $camposCompletar)
    {
        return BD::getInstance()->modTarea($id, $camposCompletar);
    }
    
    /**
     * getNumeroTareas
     *
     * @return int numero de filas
     */
    static function getNumeroTareas()
    {

        return BD::getInstance()->numFilas('tareas');
    }
    
    /**
     * getNumeroTareasPendientes
     *
     * @return void lista de tareas pendientes
     */
    static function getNumeroTareasPendientes()
    {

        return BD::getInstance()->numFilasPendientes('tareas');
    }
    
    /**
     * getTareasImpPorPagina
     *
     * @param  mixed $empezarDesde int donde empieza
     * @param  mixed $tamanioPagina tamaño de página
     * @return void lista de tareas con campos importantes
     */
    static function getTareasImpPorPagina($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->contenidoImpTabla('tareas', $empezarDesde, $tamanioPagina);
    }
    
    /**
     * getTareasPendientes
     *
     * @param  mixed $empezarDesde int donde empieza
     * @param  mixed $tamanioPagina tamaño de pagina
     * @return void devuelve lista de tareas pendiente
     */
    static function getTareasPendientes($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->tareasPendiente('tareas', $empezarDesde, $tamanioPagina);
    }
    
    /**
     * getTareas
     *
     * @param  mixed $id string id de la tarea
     * @return void devuelve datos de la tarea
     */
    static function getTareas($id)
    {
        return BD::getInstance()->showTarea($id);
    }
    
    /**
     * buscarTarea
     *
     * @param  mixed $consulta string consulta sql
     * @return void devuelve datos de la tarea filtrada
     */
    static function buscarTarea($consulta)
    {
        return BD::getInstance()->resultadosPorPagina($consulta);
    }
}
