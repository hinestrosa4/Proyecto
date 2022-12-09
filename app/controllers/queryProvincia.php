<?php
session_start();
$prov = array();

$stmt = $pdo->prepare('SELECT codPoblacion,nombre FROM poblacion');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $prov[$row['codPoblacion']] = $row['nombre'];
}
