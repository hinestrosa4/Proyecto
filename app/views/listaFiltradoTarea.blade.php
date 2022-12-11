<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lista de Tareas Pendientes</title>
</head>

<body>
    @extends('_template')
    @section('cuerpo')

    <?= creaTable('tareasfiltrado', $nombreCampos, $nombreScreen, $tareas, "id") ?>

    @endsection
</body>

</html>