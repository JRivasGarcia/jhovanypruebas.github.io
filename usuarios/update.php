<?php

include('../app/config.php');
//incluimos todos los archivos php para poder reducir el codigo y ya que los incluimos podemos acceder a todo lo que tienen esos archivos
include('../layout/sesion.php');//incluimos el archivo layout

include('../layout/parte1.php'); //incluimos el archivo que esta dentro de layout parte1

include ('../app/controllers/usuarios/update_usuario.php');//incluimos el archivo controlador que nos sirva para visualizar el update

 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Editar Datos de usuario</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <div class="row">
        <div class="col-md-5">
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">ingrese los Datos Correctamente</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                  <div class="row">
                    <div class="col-md-12">

                      <!--Creacion de formulario -->
                      <form action="../app/controllers/usuarios/update.php" method="post"> <!-- creamos un fomrulario y en action especificamos la ruta del controlador  -->
                         <input type="text" name="id_usuario" value="<?php echo $id_usuario_get; ?>" hidden> <!--creamos un input es el mecanismo de solo lectura que nos ayuda a recibir y leer los valores de una fuente en específico y le pasamos el dato a imprimir que es el $id_usuario_get  -->
                         <div class="form-group">
                          <label for="">Nombres</label>
                          <input type="text" name="nombres" class="form-control" value="<?php echo $nombres;?>" placeholder="Escriba aqui el nombre del nuevo usuario" required> <!-- creamos una caja de tipo texto que herede de la clase boostrap form-control con el values imprimimos la variable de nuestroc ontrolador que es nombres -->
                         </div>
                         <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $email;?>" placeholder="Escriba aqui el correo del nuevo usuario" required> <!-- creamos una caja de tipo email que herede de la clase boostrap form-control  -->
                         </div>
                         <div class="form-group">
                          <label for="">Contraseña</label>
                          <input type="text" name="password_user" class="form-control">
                         </div>
                         <div class="form-group">
                          <label for="">Verificacion de Contraseña</label>
                          <input type="text" name="password_repeat" class="form-control">
                         </div>
                         <hr>
                         <div class="form-group">
                          <a href="index.php" class="btn btn-secondary">Cancelar</a>
                          <button class="btn btn-success" type="submit">Actualizar</button>
                         </div>
                      </form>
                     
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div> 
        </div>
      </div> 


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php include('../layout/parte2.php');//incluimos el archivo que esta dentro de layout parte2?>
<?php include('../layout/mensajes.php');//incluimos el archivo que esta dentro de layout mensajes.php?>