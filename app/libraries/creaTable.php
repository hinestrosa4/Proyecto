<?php

/**
 * creaTable
 *
 * @param  mixed $name nombre del elemento table
 * @param  mixed $nombreCampos array de campos sacados de la BD
 * @param  mixed $nombresScreen array con los campos para la cabecera de la tabla
 * @param  mixed $listaValores array con valores que vamos a introcudirle
 * @param  mixed $pk primary key de la tabla
 * @return void tabla en html
 */
function creaTable($name, $nombreCampos, $nombresScreen, $listaValores, $pk)
{

    $html = '<table class="table table-hover" name="' . $name . '" style=text-align:center;><tr><thead>';

    foreach ($nombresScreen as $id => $value) :

        $html .= '<th>' . $nombresScreen[$id] . '</th>';


    endforeach;

    $html .= '<th>Funcionalidades</th></thead></tr>';

    foreach ($listaValores as $valor) :

        $html .= '<tr>';

        foreach ($nombreCampos as $id => $value) :

            $html .= '<td>' . $valor[$nombreCampos[$id]] . '</td>';

        endforeach;
        $html.="<td>";
        if ($name != "listaUsuarios") {
            $html .= "<a class=" . "'btn btn-primary'" . "href=../controllers/procesarVerDetalles.php?id=$valor[$pk] name=$valor[$pk]>Ver detalles</a>";
        }
        if ($_SESSION["rol"] == "admin" && $name == "listaUsuarios") {
            $html .= " <a class=" . "'btn btn-warning'" . "href=../controllers/procesarModificarUsuario.php?nif=$valor[$pk] name=$valor[$pk]>Modificar</a>";
            $html .= " <a class=" . "'btn btn-danger'" . "href=../controllers/procesarConfirmarBorrarUsuario.php?nif=$valor[$pk] name=$valor[$pk]>Borrar</a>";
        }

        if ($_SESSION["rol"] == "admin" && $name != "listaUsuarios") {
            $html .= " <a class=" . "'btn btn-warning'" . "href=../controllers/procesarModificar.php?id=$valor[$pk] name=$valor[$pk]>Modificar</a>";
            $html .= " <a class=" . "'btn btn-danger'" . "href=../controllers/procesarConfirmarBorrar.php?id=$valor[$pk] name=$valor[$pk]>Borrar</a>";
        }

        if ($_SESSION["rol"] == "operario") {

            $html .= " <a class=" . "'btn btn-success'" . "href=../controllers/procesarCompletarTarea.php?id=$valor[$pk] name=$valor[$pk]>Completar</a></td>";
        }
        $html .= '</tr>';

    endforeach;

    $html .= '</table>';

    return $html;
}
