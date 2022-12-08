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
    <h1>Modificar Tarea <?= $id ?></h1>

    <form class="row g-3 needs-validation" method="post" action="/app/controllers/procesarModificar.php?id=<?= $id ?>" enctype="multipart/form-data">

        <div class="col-md-3">
            <label class="form-label">NIF o CIF</label>
            <input class="form-control" type="text" name="nif_cif" value="<?= isset($datosTarea[0]['nif_cif']) ? $datosTarea[0]['nif_cif'] : ValorPost('nif_cif') ?>">
            <?= VerError('nif_cif') ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre" value="<?= isset($datosTarea[0]['nombre']) ? $datosTarea[0]['nombre'] : ValorPost('nombre') ?>">
            <?= VerError('nombre') ?>
        </div>
        <div class="col-md-3">
            <label class="form-label">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" value="<?= isset($datosTarea[0]['apellidos']) ? $datosTarea[0]['apellidos'] : ValorPost('apellidos') ?>">
            <?= VerError('apellidos') ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Nº de teléfono</label>
            <input class="form-control" type="text" name="telefono" value="<?= isset($datosTarea[0]['telefono']) ? $datosTarea[0]['telefono'] : ValorPost('telefono') ?>">
            <?= VerError('telefono') ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Descripción</label>
            <textarea class="form-control" placeholder="Escriba la descipción..." name="descripcion" id="descripcion" cols="40" rows="4"><?= isset($datosTarea[0]['descripcion']) ? $datosTarea[0]['descripcion'] : ValorPost('descripcion') ?></textarea>
            <?= VerError('descripcion') ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Correo electrónico</label>
            <input class="form-control" type="text" name="correo" value="<?= isset($datosTarea[0]['correo']) ? $datosTarea[0]['correo'] : ValorPost('correo') ?>">
            <?= VerError('correo') ?><br>
        </div>

        <div class="col-md-3">
            <label class="form-label">Dirección</label>
            <input class="form-control" type="text" name="direccion" value="<?= isset($datosTarea[0]['direccion']) ? $datosTarea[0]['direccion'] : ValorPost('direccion') ?>">
        </div>

        <div class="col-md-3">
            <label class="form-label">Población</label>
            <input class="form-control" type="text" name="poblacion" value="<?= isset($datosTarea[0]['poblacion']) ? $datosTarea[0]['poblacion'] : ValorPost('poblacion') ?>">
        </div>

        <div class="col-md-3">
            <label class="form-label">Codigo postal</label>
            <input class="form-control" type="text" name="codigo_postal" value="<?= isset($datosTarea[0]['codigo_postal']) ? $datosTarea[0]['codigo_postal'] : ValorPost('codigo_postal') ?>">
            <?= VerError('codigo_postal') ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Provincia</label>
            <?= CreaSelect('provincia', Provincia::listaSelect(), (isset($datosTarea[0]["provincia"]) ? $datosTarea[0]["provincia"] : ValorPost('provincia')), filter_input(INPUT_POST, 'prov')) ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Estado</label>
            <select class="form-select" name="estado">
                <option value="b" <?= (isset($datosTarea[0]["estado"]) ? $datosTarea[0]["estado"] : ValorPost('estado')) == 'b' ? 'selected' : '' ?>>Esperando ser aprobada</option>
                <option value="p" <?= (isset($datosTarea[0]["estado"]) ? $datosTarea[0]["estado"] : ValorPost('estado')) == 'p' ? 'selected' : '' ?>>Pendiente</option>
                <option value="r" <?= (isset($datosTarea[0]["estado"]) ? $datosTarea[0]["estado"] : ValorPost('estado')) == 'r' ? 'selected' : '' ?>>Realizada</option>
                <option value="c" <?= (isset($datosTarea[0]["estado"]) ? $datosTarea[0]["estado"] : ValorPost('estado')) == 'c' ? 'selected' : '' ?>>Cancelada</option>
            </select>
        </div>

        <!--<div class="col-md-3">
        <label>Fecha de creación</label>
        <input class="form-control" readonly type="date" name="fecha_creacion" value="<?= $fechaActual ?>">
        </div>-->

        <div class="col-md-3">
            <label>Operario encargado</label>
            <?= CreaSelect('operario_encargado', Usuario::listaSelect(), (isset($datosTarea[0]["operario_encargado"]) ? $datosTarea[0]["operario_encargado"] : ValorPost('operario_encargado')), filter_input(INPUT_POST, 'prov')) ?>
        </div>

        <div class="col-md-3">
            <label>Fecha de realización</label>
            <input class="form-control" type="date" name="fecha_realizacion" value="<?= isset($datosTarea[0]['fecha_realizacion']) ? $datosTarea[0]['fecha_realizacion'] : ValorPost('fecha_realizacion') ?>">
            <?= VerError('fecha_realizacion') ?>
        </div>

        <div class="col-md-3">
            <label>Anotaciones anteriores</label>
            <textarea class="form-control" placeholder="Escriba sus anotaciones..." name="anotaciones_ant" id="anotaciones1" cols="10" rows="4"><?= isset($datosTarea[0]['anotaciones_ant']) ? $datosTarea[0]['anotaciones_ant'] : ValorPost('anotaciones_ant') ?></textarea>
        </div>

        <div class="col-md-3">
            <label>Anotaciones posteriores</label>
            <textarea class="form-control" placeholder="Escriba sus anotaciones..." name="anotaciones_pos" id="anotaciones2" cols="10" rows="4"><?= isset($datosTarea[0]['anotaciones_pos']) ? $datosTarea[0]['anotaciones_pos'] : ValorPost('anotaciones_pos') ?></textarea>
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
            <button class="btn btn-primary" type="submit" name="">Modifcar Tarea</button>
            <a class="btn btn-success" href="../controllers/procesarlistaTareas.php">Atrás</a>
        </div>
    </form>
    @endsection
</body>

</html>