<!DOCTYPE html>
<html lang="en">
 <!-- este es el index para lo que es el login donde trabajas la apariencia  -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Ventas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css"><!-- los dos puntos al principio es para salir de la carpeta y entrar a la de public lo que estamos haciendo es redireccionando los estilos -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!--Libreria de SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->


    <?php
    session_start();
    if (isset($_SESSION['mensaje'])) { //preguntamos si la sesion existe
      $respuesta = $_SESSION['mensaje'];//almacenamos el mensaje de la sesion en la variable respuesta ?>
    <script>
      Swal.fire({
        position: "top-end",
        icon: "error",
        title: "<?php echo $respuesta;?>",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
  <?php
    }
  ?>


  <center>
    <img src="https://img.freepik.com/vector-gratis/analistas-demanda-dandose-mano-pantallas-portatiles-planificando-demanda-futura-planificacion-demanda-analisis-demanda-ilustracion-concepto-pronostico-ventas-digitales_335657-2098.jpg?w=740&t=st=1704237488~exp=1704238088~hmac=117baff02dee19bbec94e33752d77c9d73370e4c62c38036d38565ed97643d58" alt="" width="300px">
  </center>
  <br>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../public/templates/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de </b>Ventas</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingrese sus Datos</p>

      <form action="../app/controllers/login/ingreso.php" method="post"> <!-- el formulario va a mandar infomracion al controlador que creamos  por un metodo post -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <hr>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>