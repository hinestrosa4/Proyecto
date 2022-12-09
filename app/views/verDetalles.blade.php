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

    <table class="table table-hover" style="text-align:center">
        <tr>
            <th>ID</th>
            <td><?= $datosTarea[0]['id'] ?></td>
        </tr>
        <tr>
            <th>NIF/CIF</th>
            <td><?= $datosTarea[0]['nif_cif'] ?></td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td><?= $datosTarea[0]['nombre'] ?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?= $datosTarea[0]['apellidos'] ?></td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td><?= $datosTarea[0]['telefono'] ?></td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td><?= $datosTarea[0]['descripcion'] ?></td>
        </tr>
        <tr>
            <th>Correo</th>
            <td><?= $datosTarea[0]['correo'] ?></td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td><?= $datosTarea[0]['direccion'] ?></td>
        </tr>
        <tr>
            <th>Población</th>
            <td><?= $datosTarea[0]['poblacion'] ?></td>
        </tr>
        <tr>
            <th>Código Postal</th>
            <td><?= $datosTarea[0]['codigo_postal'] ?></td>
        </tr>
        <tr>
            <th>Provincias</th>
            <td><?= $datosTarea[0]['provincia'] ?></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td><?= $datosTarea[0]['estado'] ?></td>
        </tr>
        <tr>
            <th>Fecha de Creacion</th>
            <td><?= $datosTarea[0]['fecha_creacion'] ?></td>
        </tr>
        <tr>
            <th>Operario Encargado</th>
            <td><?= $datosTarea[0]['operario_encargado'] ?></td>
        </tr>
        <tr>
            <th>Fecha de Realizacion</th>
            <td><?= $datosTarea[0]['fecha_realizacion'] ?></td>
        </tr>
        <tr>
            <th>Anotaciones Anteriores</th>
            <td><?= $datosTarea[0]['anotaciones_ant'] ?></td>
        </tr>
        <tr>
            <th>Anotaciones Posteriores</th>
            <td><?= $datosTarea[0]['anotaciones_pos'] ?></td>
        </tr>
        <tr>
            <th>Fichero Resumen</th>
            <td><?= ($datosTarea[0]['fichero_resumen'] != "") ? "<a class='btn btn-info' href='/app/files/" . $datosTarea[0]['fichero_resumen'] . "' download='" . $datosTarea[0]['fichero_resumen'] . "'>Descargar</a>" : "" ?> </td>
        </tr>
        <tr>
            <th>Foto Trabajo</th>
            <td><?= ($datosTarea[0]['foto_trabajo'] != "") ? "<a class='btn btn-info' href='/app/files/" . $datosTarea[0]['foto_trabajo'] . "' download='" . $datosTarea[0]['foto_trabajo'] . "'>Descargar</a>" : "" ?> </td>
        </tr>
    </table>
    <div>
        <a class="btn btn-success" href="../controllers/procesarlistaTareas.php?id=<?=$id?>">Atrás</a>
    </div>
    @endsection
</body>
</html>