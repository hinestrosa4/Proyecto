<?php

/**
 * validarCodigoPostal
 *
 * @param  mixed $cp string codigo postal
 * @return void true si es correcto y false si es incorrecto
 */
function validarCodigoPostal($cp)
{
    $a = "^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$";
    if (preg_match("/$a/", $cp)) {
        return true;
    } else {
        return false;
    }
}