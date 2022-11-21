<?php
//include "connect.php";

$query = "SELECT * FROM comautonoma";
$result = $conex->query($query);

$numfilas = $result->num_rows;
echo "El número de elementos es ".$numfilas;

for ($x=0;$x<$numfilas;$x++) {
	$fila = $result->fetch_object();
	echo "<br>";
	echo "".$fila->codComunidad."";
	echo " ".$fila->nombre."";
	echo "";
}
