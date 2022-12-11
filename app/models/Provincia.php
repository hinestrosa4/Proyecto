<?php

class Provincia
{
    private function __construct()
    {
    }
    
    /**
     * listaSelect
     *
     * @return array Devuelve la lista de provincias para crear un select cod->nombre
     */
    static function listaSelect()
    {
        return BD::getInstance()->getListaSelect('provincias', 'codPoblacion', 'nombre');
    }
}
