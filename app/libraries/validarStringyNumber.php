<?php

/**
 * validarStringyNumber
 *
 * @param  mixed $string cadena del campo
 * @return void true si es correcto y false si es incorrecto
 */
function validarStringyNumber($string)
{
    $a = "^[a-zA-Z0-9 ]{2,300}+$";
    if (preg_match("/$a/", $string)) {
        return true;
    } else {
        return false;
    }
}