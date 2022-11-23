<?php

class Provincia
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
        return BD::getInstance()->getListaSelect('poblacion', 'codPoblacion', 'nombre');
    }
}