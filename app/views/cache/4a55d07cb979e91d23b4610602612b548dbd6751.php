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

    <?php $__env->startSection('cuerpo'); ?>
    <h1>Confirmación Borrar Ususario</h1>
    <p>¿Estás seguro de que quieres borrar este usuario?</p>

    <table class="table" style="text-align: center;">
        <tr>
            <th>Nif</th>
            <th>Nombre</th>
            <th>Clave</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>isAdmin</th>
        </tr>
        <tr>
            <th><?= $detalles[0]['nif'] ?></th>
            <td><?= $detalles[0]['nombre'] ?></td>
            <td><?= $detalles[0]['clave'] ?></td>
            <td><?= $detalles[0]['correo'] ?></td>
            <td><?= $detalles[0]['telefono'] ?></td>
            <td><?= $detalles[0]['isAdmin'] ?></td>
        </tr>
    </table>

    <div>
        <a class="btn btn-success" href="../controllers/borrarUsuario.php?nif=<?= $_GET['nif'] ?>">Si, estoy seguro</a>
        <a class="btn btn-danger" href="../controllers/procesarlistaUsuarios.php">No</a>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hinestrosa\Desktop\DAW\2\PHP\Proyectos\Proyecto\app\views/confirmarBorrarUsuario.blade.php ENDPATH**/ ?>