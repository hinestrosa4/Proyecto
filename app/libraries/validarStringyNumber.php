<?php
function validarStringyNumber($string)
{
    $a = "^[a-zA-Z0-9 ]{2,300}+$";
    if (preg_match("/$a/", $string)) {
        return true;
    } else {
        return false;
    }
}