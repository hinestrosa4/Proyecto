<?php

/**
 * validarTelefono
 *
 * @param  mixed $tel string telefono
 * @return void true si es correcto y false si es incorrecto
 */
function validarTelefono($tel)
{
    $a = "^(?:(?:\+?[0-9]{2,4})?[ ]?[6789][0-9 ]{8,13})$";
    if (preg_match("/$a/", $tel)) {
        return true;
    } else {
        return false;
    }
}