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
@extends('_template')
    @section('cuerpo')
    <h1>Detalles de Tarea <?= $id ?></h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NIF/CIF</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Descripción</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Población</th>
            <th>Código Postal</th>
            <th>Provincias</th>
            <th>Estado</th>
            <th>Fecha de Creacion</th>
            <th>Operario Encargado</th>
            <th>Fecha de Realizacion</th>
            <th>Anotaciones Anteriores</th>
            <th>Anotaciones Posteriores</th>
            <th>Fichero Resumen</th>
            <th>Foto Trabajo</th>
        </tr>
        <tr>
            <td><?= $datosTarea[0]['id'] ?></td>
            <td><?= $datosTarea[0]['nif_cif'] ?></td>
            <td><?= $datosTarea[0]['nombre'] ?></td>
            <td><?= $datosTarea[0]['apellidos'] ?></td>
            <td><?= $datosTarea[0]['telefono'] ?></td>
            <td><?= $datosTarea[0]['descripcion'] ?></td>
            <td><?= $datosTarea[0]['correo'] ?></td>
            <td><?= $datosTarea[0]['direccion'] ?></td>
            <td><?= $datosTarea[0]['poblacion'] ?></td>
            <td><?= $datosTarea[0]['codigo_postal'] ?></td>
            <td><?= $datosTarea[0]['provincia'] ?></td>
            <td><?= $datosTarea[0]['estado'] ?></td>
            <td><?= $datosTarea[0]['fecha_creacion'] ?></td>
            <td><?= $datosTarea[0]['operario_encargado'] ?></td>
            <td><?= $datosTarea[0]['fecha_realizacion'] ?></td>
            <td><?= $datosTarea[0]['anotaciones_ant'] ?></td>
            <td><?= $datosTarea[0]['anotaciones_pos'] ?></td>
            <td><?= ($datosTarea[0]['fichero_resumen'] != "") ? "<a class='btn btn-info' href='/app/files/" . $datosTarea[0]['fichero_resumen'] . "' download='/app/files/" . $datosTarea[0]['fichero_resumen'] . "'>Descargar</a>" : "" ?> </td>
            <td><?= ($datosTarea[0]['foto_trabajo'] != "") ? "<a class='btn btn-info' href='/app/files/" . $datosTarea[0]['foto_trabajo'] . "' download='/app/files/" . $datosTarea[0]['foto_trabajo'] . "'>Descargar</a>" : "" ?> </td>
        </tr>
    </table>
    <div>
        <a class="btn btn-success" href="../controllers/procesarlistaTareas.php?id=<?=$id?>">Atrás</a>
    </div>
    @endsection
</body>
</html>