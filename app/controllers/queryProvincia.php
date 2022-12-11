<?php
//Iniciamos la sesion
session_start();

//Declaramos array de provincias vacio
$prov = array();

//Hacemos la consulta select para obtener el codigo y los nombres
$stmt = $pdo->prepare('SELECT codPoblacion,nombre FROM poblacion');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $prov[$row['codPoblacion']] = $row['nombre'];
}
