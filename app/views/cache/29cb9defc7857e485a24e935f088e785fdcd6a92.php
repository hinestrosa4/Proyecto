<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../../assets/css/styleMenu.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #F0C80A;">
        <ul>
            <a class="navbar-brand" href="/app/controllers/procesarlistaTareas.php">Ver Lista Tareas</a>
            <a class="navbar-brand" href="/app/controllers/procesarlistaTareasPendientes.php">Ver Tareas Pendientes</a>
            <a class="navbar-brand" href="#">Filtros</a>
            <?php
            //echo $_SESSION["admin"];
            if ($_SESSION["rol"] == "admin") {

            ?>
                <a class="navbar-brand" href="/app/controllers/validarFormTarea.php">Añadir Incidencia/Tarea</a>
                <a class="navbar-brand" href="/app/controllers/procesarlistaUsuarios.php">Usuarios</a>
                <a class="navbar-brand" href="/app/controllers/procesarCrearUsuario.php">Crear Usuario</a>
            <?php
            }

            ?>
        </ul>
    </nav>
</body>

</html><?php /**PATH C:\Users\Hinestrosa\Desktop\DAW\2\PHP\Proyectos\Proyecto\app\views/menu.blade.php ENDPATH**/ ?>