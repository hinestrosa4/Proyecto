<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <header>
        <h1>Menu Administrador</h1>
    </header>

    <div id="menuSup">
        <a href="../controllers/procesarlistaTareas.php" id="verLista" class="btn btn-primary">Ver Incidencias/Tareas</a><br><br>
        <a href="../controllers/validarFormTarea.php" id="addIncidencia" class="btn btn-primary">Añadir Incidencia/Tarea</a><br><br>
        <a id="cambiarEstado" class="btn btn-primary">Cambiar Estado de Incidencia/Tarea</a><br><br>
        <a id="buscarFiltrar" class="btn btn-primary">Buscar Tarea</a><br>
    </div>
</body>
</html>