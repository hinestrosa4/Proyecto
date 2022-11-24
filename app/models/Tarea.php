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
}