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

    <form class="row g-3 needs-validation" method="post" action="../controllers/validarFormTarea.php" enctype="multipart/form-data">

        <div class="col-md-3">
            <div class="col-md-3">
                <label class="form-label">Estado</label>
                <select class="form-select" name="estado" id="estados">
                    <option value="b">Esperando ser aprobada</option>
                    <option value="p">Pendiente</option>
                    <option value="r">Realizada</option>
                    <option value="c">Cancelada</option>
                </select>
            </div>

            <div class="col-md-3">
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
            </div>

            <div class="col-md-3" id="buttonE">
                <button class="btn btn-primary" type="submit" name="">Enviar</button>
            </div>
    </form>
</body>
</html>