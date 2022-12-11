<?php

/**
 * uploadFile
 *
 * @param  mixed $fich nombre del fichero
 * @param  mixed $id id de la tarea
 * @return void 
 */
function uploadFile($fich, $id)
{
    $destino = __DIR__ . "/../files/";
    $dest = $destino . "Tarea_" . $id . "-" .  basename($_FILES[$fich]['name']);

    if (is_uploaded_file($_FILES[$fich]['tmp_name'])) {
        move_uploaded_file($_FILES[$fich]['tmp_name'], $dest);
        return true;
    } else {
        return false;
    }
}
