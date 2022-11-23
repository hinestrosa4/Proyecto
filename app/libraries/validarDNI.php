<?php
function validarDni($dni)
{
    $lista = "TRWAGMYFPDXBNJZSQVHLCKE";

    if (strlen(substr($dni, 0, -1)) == 8 && is_numeric(substr($dni, 0, -1))) {
        $resultado = (int)substr($dni, 0, -1) % 23;
        $letraAsign = str_split($lista)[$resultado];
        if (substr($dni, -1) == $letraAsign) {
            return true;
        } else {
            return false;
        }
    }
}