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
    <h1>Modificar Usuario</h1>

    <form class="row g-3 needs-validation" method="post" action="/app/controllers/procesarModificarUsuario.php?nif=<?= $nif ?>">

        <div class="col-md-3">
            <label class="form-label">Correo</label>
            <input class="form-control" type="text" name="correo" value="<?= isset($datosUser[0]['correo']) ? $datosUser[0]['correo'] : ValorPost('correo') ?>">
            <?= VerError('correo') ?>
        </div>

        <div class="col-md-3">
            <label class="form-label">Clave</label>
            <input class="form-control" type="text" name="clave" value="<?= isset($datosUser[0]['clave']) ? $datosUser[0]['clave'] : ValorPost('clave') ?>">
        </div>

        <div>
            <button class="btn btn-primary" type="submit" name="">Modificar Usuario</button>
            <a class="btn btn-success" href="../controllers/procesarlistaUsuarios.php">Atrás</a>
        </div>
    </form>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hinestrosa\Desktop\DAW\2\PHP\Proyectos\Proyecto\app\views/modificarUsuario.blade.php ENDPATH**/ ?>