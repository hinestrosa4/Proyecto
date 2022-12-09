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

    <?php $__env->startSection('cuerpo'); ?>
    <h1>Añadir Tarea</h1>
    <hr>
    <form class="row g-3 needs-validation" method="post" action="/app/controllers/validarFormTarea.php" enctype="multipart/form-data">
    <div class="col-md-3">
        <label class="form-label">NIF o CIF</label>
        <input class="form-control" type="text" name="nif_cif" value="<?= ValorPost('nif_cif') ?>">
        <?= VerError('nif_cif') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre" value="<?= ValorPost('nombre') ?>">
        <?= VerError('nombre') ?>
        </div>
        <div class="col-md-3">
        <label class="form-label">Apellidos</label>
        <input class="form-control" type="text" name="apellidos" value="<?= ValorPost('apellidos') ?>">
        <?= VerError('apellidos') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Nº de teléfono</label>
        <input class="form-control" type="text" name="telefono" value="<?= ValorPost('telefono') ?>">
        <?= VerError('telefono') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" placeholder="Escriba la descipción..." name="descripcion" id="descripcion" cols="40" rows="4"><?= ValorPost('descripcion') ?></textarea>
        <?= VerError('descripcion') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Correo electrónico</label>
        <input class="form-control" type="text" name="correo" value="<?= ValorPost('correo') ?>">
        <?= VerError('correo') ?><br>
        </div>

        <div class="col-md-3">
        <label class="form-label">Dirección</label>
        <input class="form-control" type="text" name="direccion" value="<?= ValorPost('direccion') ?>">
        </div>

        <div class="col-md-3">
        <label class="form-label">Población</label>
        <input class="form-control" type="text" name="poblacion" value="<?= ValorPost('poblacion') ?>">
        </div>

        <div class="col-md-3">
        <label class="form-label">Codigo postal</label>
        <input class="form-control" type="text" name="codigo_postal" value="<?= ValorPost('codigo_postal') ?>">
        <?= VerError('codigo_postal') ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Provincia</label>
        <?= CreaSelect('provincia', Provincia::listaSelect(), filter_input(INPUT_POST, 'prov')) ?>
        </div>

        <div class="col-md-3">
        <label class="form-label">Estado</label>
        <select class="form-select" name="estado" id="estados">
            <option value="b">Esperando ser aprobada</option>
            <option value="p">Pendiente</option>
            <option value="r">Realizada</option>
            <option value="c">Cancelada</option>
        </select>
        </div>

        <!--<div class="col-md-3">
        <label>Fecha de creación</label>
        <input class="form-control" readonly type="date" name="fecha_creacion" value="<?= $fechaActual ?>">
        </div>-->

        <div class="col-md-3">
        <label>Operario encargado</label>
        <?= CreaSelect('operario_encargado', Usuario::listaSelect(), filter_input(INPUT_POST, 'prov')) ?>
        </div>

        <div class="col-md-3">
        <label>Fecha de realización</label>
        <input class="form-control" type="date" name="fecha_realizacion" value="<?= ValorPost('fecha_realizacion') ?>">
        <?= VerError('fecha_realizacion') ?>
        </div>

        <!--<div class="col-md-3">
        <label>Anotaciones anteriores</label>
        <textarea class="form-control" placeholder="Escriba sus anotaciones..." name="anotaciones_ant" id="anotaciones1" cols="10" rows="4"><?= ValorPost('anotaciones_ant') ?></textarea>
        </div>

        <div class="col-md-3">
        <label>Anotaciones posteriores</label>
        <textarea class="form-control" placeholder="Escriba sus anotaciones..." name="anotaciones_pos" id="anotaciones2" cols="10" rows="4"><?= ValorPost('anotaciones_pos') ?></textarea>
        </div>

        <div class="col-md-3">
        <label>Fichero resumen</label>
        <input class="form-control" name="fichero_resumen" type="file">
        </div>

        <div class="col-md-3">
        <label>Fotos del trabajo realizado</label>
        <input class="form-control" name="foto_trabajo" type="file">
        </div>-->

        <div id="buttonE">
        <button class="btn btn-primary" type="submit" name="">Enviar</button>
        <a class="btn btn-success" href="/app/controllers/procesarlistaTareas.php">Atrás</a>
    </div>
    </form>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hinestrosa\Desktop\DAW\2\PHP\Proyectos\Proyecto\app\views/formularioTarea.blade.php ENDPATH**/ ?>