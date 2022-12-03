<?php

function creaTable($name, $nombreCampos, $listaValores)
{

    $html = '<table class="table table-bordered name="' . $name . '" style=text-align:center;><tr><thead>';

    foreach ($nombreCampos as $id => $value) :

        $html .= '<th>' . $nombreCampos[$id] . '</th>';

    endforeach;

    $html .= '<th>Funcionalidades</th></thead></tr>';

    foreach ($listaValores as $valor) :

        $html .= '<tr>';

        foreach ($nombreCampos as $id => $value) :

            $html .= '<td>' . $valor[$nombreCampos[$id]] . '</td>';
            
        endforeach;
        
        $html.= "<td><a class="."'btn btn-primary'"."href=../controllers/procesarVerDetalles.php?id=$valor[id] name=$valor[id]>Ver detalles</a>
        <a class="."'btn btn-warning'"."href=# name=$valor[id]>Modificar</a>
        <a class="."'btn btn-danger'"."href=../controllers/procesarConfirmarBorrar.php?id=$valor[id] name=$valor[id]>Borrar</a></td>";
        $html .= '</tr>';

    endforeach;

    $html .= '</table>';

    return $html;
}
