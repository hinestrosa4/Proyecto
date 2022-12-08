<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../../assets/css/styleLogin.css" rel="stylesheet">

</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="/app/controllers/checkLogin.php" method="POST">
            
            <img class="mb-4" src="../../assets/img/login.png" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>

            <div class="form-floating">
                <input type="text" name="tCorreoLogin" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo Electrónico</label>
            </div>

            <div class="form-floating">
                <input type="password" name="tPasswordLogin" class="form-control" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <?= VerError('login') ?>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recordarme
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesion</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
        </form>
    </main>
</body>
</html>