<?php
/**
 * creaSimpleTable
 *
 * @param  mixed $name nombre del elemento tabla
 * @param  mixed $datos opciones de la tabla (contenido)
 * @return void elemnento tabla en html
 */
function creaSimpleTable($name, $datos){

    $html = '<table class="table table-bordered name="' . $name . '" style=text-align:center;><tr><thead>';

    foreach($datos as $id => $value){
        $html .= '<th>' . $datos[$id] . '</th>';
        echo $datos[0];
    }

        
        $html .= '</table>';

        return $html;
}