<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Rafael Hinestrosa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../../assets/css/styleForm.css" rel="stylesheet">
</head>

<body>
@extends('_template')
    @section('cuerpo')
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

    <form class="row g-3 needs-validation" method="post" action="/app/controllers/procesarCompletarTarea.php?id=<?= $id ?>" enctype="multipart/form-data">

    <div class="col-md-3">
            <label class="form-label">Estado</label>
            <select class="form-select" name="estado">
                <option value="b" <?= (isset($detalles[0]["estado"]) ? $detalles[0]["estado"] : ValorPost('estado')) == 'b' ? 'selected' : '' ?>>Esperando ser aprobada</option>
                <option value="p" <?= (isset($detalles[0]["estado"]) ? $detalles[0]["estado"] : ValorPost('estado')) == 'p' ? 'selected' : '' ?>>Pendiente</option>
                <option value="r" <?= (isset($detalles[0]["estado"]) ? $detalles[0]["estado"] : ValorPost('estado')) == 'r' ? 'selected' : '' ?>>Realizada</option>
                <option value="c" <?= (isset($detalles[0]["estado"]) ? $detalles[0]["estado"] : ValorPost('estado')) == 'c' ? 'selected' : '' ?>>Cancelada</option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Anotaciones anteriores</label>
            <textarea class="form-control" placeholder="Escriba sus anotaciones..." name="anotaciones_ant" id="anotaciones1" cols="10" rows="4"><?= isset($detalles[0]["anotaciones_ant"]) ? $detalles[0]["anotaciones_ant"] : "" ?>
</textarea>
        </div>

        <div class="col-md-3">
            <label>Anotaciones posteriores</label>
            <textarea class="form-control" placeholder="Escriba sus anotaciones..." name="anotaciones_pos" id="anotaciones2" cols="10" rows="4"><?= isset($detalles[0]["anotaciones_pos"]) ? $detalles[0]["anotaciones_pos"] : "" ?>
</textarea>
        </div>

        <div class="col-md-3">
            <label>Fichero resumen</label>
            <input class="form-control" name="fichero_resumen" type="file">
        </div>

        <div class="col-md-3">
            <label>Fotos del trabajo realizado</label>
            <input class="form-control" name="foto_trabajo" type="file">
        </div>

        <div>
        <button class="btn btn-primary" type="submit" name="">Enviar</button>
        <a class="btn btn-danger" href="../controllers/procesarlistaTareas.php">Atrás</a>
        </div>
    </form>
    @endsection
</body>
</html>