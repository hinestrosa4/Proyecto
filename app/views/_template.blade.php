<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Gestor Tareas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/cfd51bb6e6.js" crossorigin="anonymous"></script>

</head>

<body>
  <header>
    <div style="background: #9AE562;">
    
      <div style="text-align: center;">
      <img src="/assets/img/logo.png" width="100px"><h2><b>Bunglebuild S.L.</b></h2>
      </div>
      <div style="margin-top:-100px;padding-bottom:30px">
      <div style="margin-left: 80%;">
        <?php
        if ($_SESSION["rol"] == "operario") {
        ?>
          <b>Rol:</b> Operario <i class="fa-solid fa-user"></i>
        <?php
        } else{
        ?>
        <b>Rol:</b> Administrador <i class="fa-solid fa-user-gear"></i><?php } ?>

        <br><b>Usuario:</b> <?= $_SESSION["login"]; ?> <a href="/app/controllers/checkLogin.php">
          <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>
      <div style="margin-left: 80%;">
        <b>Fecha Log In:</b> <?= $_SESSION["fechaLogin"]; ?>
      </div>
      </div>
  </header>
  </div>

  <nav id="menu">
    @include('menu')
  </nav>
  <main id="cuerpo">
    @yield('cuerpo')
  </main><br><br>
  <footer>
    <footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Twitter -->
          <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

          <!-- Google -->
          <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

          <!-- Instagram -->
          <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

          <!-- Linkedin -->
          <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
          <!-- Github -->
          <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright: Rafael Hinestrosa
      </div>
      <!-- Copyright -->
    </footer>
  </footer>
</body>

</html>