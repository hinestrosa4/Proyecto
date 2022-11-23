<?php

class Tarea
{

    private function __construct()
    {
    }

    static function listaSelect()
    {
        return BD::getInstance()->intoValues();
    }
}