<?php

class Usuario
{
    private function __construct()
    {
    }

    /**
     * DEvuelve la lista de provincias para crear un select cod->nombre
     */

    //el static no funciona.

    static function listaSelect()
    {
        return BD::getInstance()->getListaSelect('usuarios', 'nif', 'nombre', 'WHERE isAdmin = 0');
    }
}