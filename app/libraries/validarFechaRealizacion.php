<?php

/**
 * validarFechaRealizacion
 *
 * @param  mixed $fecha string fecha
 * @return void true si es correcto y false si es incorrecto
 */
function validarFechaRealizacion($fecha)
{
    $fecha = new DateTime($fecha);
    $hoy = new DateTime();
    if ($fecha <= $hoy) {
        return false;
    } else {
        return true;
    }
}