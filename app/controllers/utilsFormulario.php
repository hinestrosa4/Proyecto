<?php

function ValorPost($nombreCampo, $valorPorDefecto='')
{
	if (isset($_POST[$nombreCampo]))
		return $_POST[$nombreCampo];
	else
		return $valorPorDefecto;
}

 function VerError($campo)
{
	global $errores;
	if (isset($errores[$campo]))
	{
		echo '<span style="color:red">'.$errores[$campo].'</span>';
	}
}