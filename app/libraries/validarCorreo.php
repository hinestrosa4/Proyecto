<?php

/**
 * validarCorreo
 *
 * @param  mixed $correo string correo
 * @return void true si es correcto y false si es incorrecto
 */
function validarCorreo($correo)
{
    $a = "^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$";
    if (preg_match("/$a/", $correo)) {
        return true;
    } else {
        return false;
    }
}
