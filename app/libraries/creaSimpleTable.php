<?php
//PENDIENTE
function creaSimpleTable($name, $datos){

    $html = '<table class="table table-bordered name="' . $name . '" style=text-align:center;><tr><thead>';

    foreach($datos as $id => $value){
        $html .= '<th>' . $datos[$id] . '</th>';
        echo $datos[0];
    }

        
        $html .= '</table>';

        return $html;
}