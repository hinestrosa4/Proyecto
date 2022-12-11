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
    <h1>Crear Usuario</h1>
    <hr>
    <form class="row g-3 needs-validation" method="post" action="/app/controllers/procesarCrearUsuario.php">
    <div class="col-md-3">
        <label class="form-label">NIF</label>
        <input class="form-control" type="text" name="nif" value="<?= ValorPost('nif') ?>">
        <?= VerError('nif') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" value="<?= ValorPost('nombre') ?>">
        <?= VerError('nombre') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Clave</label>
        <input class="form-control" type="text" name="clave" value="<?= ValorPost('clave') ?>">
        <?= VerError('clave') ?><br>
        </div>

        <div class="col-md-3">
        <label class="form-label">Nº de teléfono</label>
        <input class="form-control" type="text" name="telefono" value="<?= ValorPost('telefono') ?>">
        <?= VerError('telefono') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Correo electrónico</label>
        <input class="form-control" type="text" name="correo" value="<?= ValorPost('correo') ?>">
        <?= VerError('correo') ?><br>
        </div>

        <div class="col-md-3">
        <label class="form-label">Admin</label>
        <input class="form-control" type="text" name="isAdmin" value="<?= ValorPost('isAdmin') ?>">
        <?= VerError('isAdmin') ?><br>
        </div>

        <div id="buttonE">
        <button class="btn btn-primary" type="submit" name="">Enviar</button>
        <a class="btn btn-success" href="/app/controllers/procesarlistaUsuarios.php">Atrás</a>
    </div>
    </form>
    @endsection
</body>
</html>