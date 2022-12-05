<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <h1>Confirmación Borrar Tarea</h1>
    <p>¿Estás seguro de que quieres borrar la tarea?</p>

    <!--<?= creaSimpleTable("tablaBorrar",$detalles) ?>-->

    <table class="table" style="text-align: center;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Descripción</th>
            <th>Correo</th>
            <th>Fecha Realización</th>
        </tr>
        <tr>
            <th><?= $detalles[0]['id'] ?></th>
            <td><?= $detalles[0]['nombre'] ?></td>
            <td><?= $detalles[0]['apellidos'] ?></td>
            <td><?= $detalles[0]['telefono'] ?></td>
            <td><?= $detalles[0]['descripcion'] ?></td>
            <td><?= $detalles[0]['correo'] ?></td>
            <td><?= $detalles[0]['fecha_realizacion'] ?></td>
        </tr>
    </table>

    <div>
        <a class="btn btn-success" href="../controllers/borrarTarea.php?id=<?= $_GET['id'] ?>">Si, estoy seguro</a>
        <a class="btn btn-danger" href="../controllers/procesarlistaTareas.php">No</a>
    </div>

</body>
</html>