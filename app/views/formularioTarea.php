<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Rafael Hinestrosa</title>
</head>

<body>

    <form method="post" action="../controllers/validarFormTarea.php">

        <label>NIF o CIF</label> <input type="text" name="nif_cif" value="<?= ValorPost('nif_cif') ?>"><br>
        <?= VerError('nif_cif') ?><br><br>

        <label><strong>Persona de Contacto</strong></label><br>
        <label>Nombre</label> <input type="text" name="nombre" value="<?= ValorPost('nombre') ?>"><br>
        <?= VerError('nombre') ?><br><br>
        <label>Apellidos</label> <input type="text" name="apellidos" value="<?= ValorPost('apellidos') ?>"><br>
        <?= VerError('apellidos') ?><br><br><br>

        <label>Nº de teléfono</label> <input type="text" name="telefono" value="<?= ValorPost('telefono') ?>"><br>
        <?= VerError('telefono') ?><br><br>

        <label>Descripción</label><br>
        <textarea name="descripcion" id="descripcion" cols="40" rows="10"><?= ValorPost('descripcion') ?></textarea><br>
        <?= VerError('descripcion') ?><br><br>

        <label>Correo electrónico</label> <input type="text" name="correo" value="<?= ValorPost('correo') ?>"><br>
        <?= VerError('correo') ?><br><br>

        <label>Dirección</label> <input type="text" name="direccion" value="<?= ValorPost('direccion') ?>"><br><br>

        <label>Población</label> <input type="text" name="poblacion" value="<?= ValorPost('poblacion') ?>"><br><br>

        <label>Codigo postal</label> <input type="text" name="codigo_postal" value="<?= ValorPost('codigo_postal') ?>"><br>
        <?= VerError('codigo_postal') ?><br><br>

        <label>Provincia</label>

        <?= CreaSelect('provincia', Provincia::listaSelect(), filter_input(INPUT_POST, 'prov')) ?>
        <br><br>

        <label>Estado</label>
        <select name="estado" id="estados">
            <option value="0" hidden>Elija el estado de la tarea</option>
            <option value="b">Esperando ser aprobada</option>
            <option value="p">Pendiente</option>
            <option value="r">Realizada</option>
            <option value="c">Cancelada</option>
        </select><br><br>

        <label>Fecha de creación</label> <input readonly type="date" name="fecha_creacion" value="<?= $fechaActual ?>"><br>


        <label>Operario encargado</label>
        <?= CreaSelect('operario_encargado', Usuario::listaSelect(), filter_input(INPUT_POST, 'prov')) ?>
        <br><br>

        <label>Fecha de realización</label> <input type="date" name="fecha_realizacion" value="<?= ValorPost('fecha_realizacion') ?>"><br>
        <?= VerError('fecha_realizacion') ?><br><br>

        <label>Anotaciones anteriores</label><br><textarea name="anotaciones_ant" id="anotaciones1" cols="40" rows="10"><?= ValorPost('anotaciones_ant') ?></textarea><br><br>

        <label>Anotaciones posteriores</label><br><textarea name="anotaciones_pos" id="anotaciones2" cols="40" rows="10"><?= ValorPost('anotaciones_pos') ?></textarea><br><br>

        <label>Fichero resumen</label><br><input type="file" name=""><br><br>

        <label>Fotos del trabajo realizado</label><br><input type="file" name=""><br><br>

        <button type="submit" name="">Enviar</button>
    </form>
</body>

</html>