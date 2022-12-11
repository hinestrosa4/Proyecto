<?php

/**
 * getContenido
 *
 * @param  array $todos_los_campos es un array indexado que trae en el index el nombre del campo y en el contenido el valor
 * @param  string $valor booleano que dependiendo de su valor retornara un array o un string
 * @return array o string dependiendo del boolean
 */

function getContenido($todos_los_campos, $valor)
{
    $contenido = "";

    $nombre_del_campo = "";

    foreach ($todos_los_campos as $nam => $cont) {
        $contenido  .= $cont . ',';
        $nombre_del_campo .= $nam . ',';
    }

    $contenido = substr($contenido, 0, -1);

    $nombre_del_campo = substr($nombre_del_campo, 0, -1);

    $a_campos = explode(",", $contenido);

    if ($valor) {
        return $a_campos;
    } else {
        return $nombre_del_campo;
    }
}