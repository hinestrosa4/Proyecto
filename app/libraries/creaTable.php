<?php

function creaTable($name, $nombreCampos, $listaValores)
{

    $html = '<table class="table table-bordered name="' . $name . '"><tr><thead>';

    foreach ($nombreCampos as $id => $value) :

        $html .= '<th>' . $nombreCampos[$id] . '</th>';

    endforeach;

    $html .= '</thead></tr>';

    foreach ($listaValores as $valor) :

        $html .= '<tr>';

        foreach ($nombreCampos as $id => $value) :

            $html .= '<td >' . $valor[$nombreCampos[$id]] . '</td>';

        endforeach;


        $html .= '</tr>';

    endforeach;

    $html .= '</table>';

    return $html;
}
