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
    static function addUsuario($campos, $names)
    {
        return BD::getInstance()->insertarCampos('usuarios', $names, $campos);
    }
    static function listaSelect()
    {
        return BD::getInstance()->getListaSelect('usuarios', 'nif', 'nombre', 'WHERE isAdmin = 0');
    }

    static function getTareasImpPorPagina($empezarDesde, $tamanioPagina)
    {

        return BD::getInstance()->contenidoImpTablaUsers('usuarios', $empezarDesde, $tamanioPagina);
    }

    static function getNumeroUsuarios()
    {
        return BD::getInstance()->numFilas('usuarios');
    }

    static function getUsuarios($nif)
    {
        return BD::getInstance()->showUser($nif);
    }
}