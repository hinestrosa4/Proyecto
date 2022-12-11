<?php

/**
 * ValorPost
 *
 * @param  mixed $nombreCampo nombre del campo que indiquemos
 * @param  mixed $valorPorDefecto si no indicamos nada, sera vacio
 * @return void devuelve el valor introducido o valor por defecto vacio
 */
function ValorPost($nombreCampo, $valorPorDefecto='')
{
	if (isset($_POST[$nombreCampo]))
		return $_POST[$nombreCampo];
	else
		return $valorPorDefecto;
}
 
 /**
  * VerError
  *
  * @param  mixed $campo nombre del elemento
  * @return void devuelve el codigo html de error
  */
 function VerError($campo)
{
	global $errores;
	if (isset($errores[$campo]))
	{
		echo '<span style="color:red">'.$errores[$campo].'</span>';
	}
}