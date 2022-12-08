<?php

function creaTable($name, $nombreCampos, $nombresScreen, $listaValores)
{

    $html = '<table class="table table-striped table-hover" name="' . $name . '" style=text-align:center;><tr><thead>';

    foreach ($nombresScreen as $id => $value) :

        $html .= '<th>' . $nombresScreen[$id] . '</th>';

    endforeach;

    $html .= '<th>Funcionalidades</th></thead></tr>';

    foreach ($listaValores as $valor) :

        $html .= '<tr>';

        foreach ($nombreCampos as $id => $value) :

            $html .= '<td>' . $valor[$nombreCampos[$id]] . '</td>';
            
        endforeach;

        $html.= "<td><a class="."'btn btn-primary'"."href=../controllers/procesarVerDetalles.php?id=$valor[id] name=$valor[id]>Ver detalles</a>
        <a class="."'btn btn-warning'"."href=../controllers/procesarModificar.php?id=$valor[id] name=$valor[id]>Modificar</a>
        <a class="."'btn btn-danger'"."href=../controllers/procesarConfirmarBorrar.php?id=$valor[id] name=$valor[id]>Borrar</a>
        <a class="."'btn btn-success'"."href=../controllers/procesarCompletarTarea.php?id=$valor[id] name=$valor[id]>Completar</a></td>";
        $html .= '</tr>';

    endforeach;

    $html .= '</table>';

    return $html;
}
