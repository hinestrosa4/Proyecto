<?php
/**
 * CreaSelect
 *
 * @param  mixed $name nombre del elemento select
 * @param  mixed $opciones opciones del elemento select
 * @param  mixed $valorDefecto valor si no indicamos nada 
 * @return void select con codigo html
 */
function CreaSelect($name, $opciones, $valorDefecto = '')
{
    $html = "\n" . '<select class="form-select" name="' . $name . '">';
    foreach ($opciones as $value => $text) {
        if ($value == $valorDefecto)
            $select = 'selected="selected"';
        else
            $select = "";
        $html .= "\n\t<option value=\"$value\" $select>$text</option>";
    }
    $html .= "\n</select>";

    return $html;
}