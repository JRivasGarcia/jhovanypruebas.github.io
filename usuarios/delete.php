<?php

include('../app/config.php');
//incluimos todos los archivos php para poder reducir el codigo y ya que los incluimos podemos acceder a todo lo que tienen esos archivos
include('../layout/sesion.php'); //incluimos el archivo layout

include('../layout/parte1.php'); //incluimos el archivo que esta dentro de layout parte1

include('../app/controllers/usuarios/show_usuario.php');

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0" Eliminar usuario</h1>
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
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">¿Seguro de que quieres eliminar el usuario?</h3>

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
                                    <form action="../app/controllers/usuarios/delete_usuario.php" method="post">
                                    <div class="form-group">
                                        <label for="">Nombres</label>
                                        <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>" disabled><!-- creamos una caja de tipo texto que herede de la clase boostrap form-control  -->
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" disabled><!-- creamos una caja de tipo email que herede de la clase boostrap form-control  -->
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <a href="index.php" class="btn btn-secondary">Volver atras</a>
                                        <button class="btn btn-danger">Eliminar</button>
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

<?php include('../layout/mensajes.php'); //incluimos el archivo que esta dentro de layout mensajes.php
?>
<?php include('../layout/parte2.php'); //incluimos el archivo que esta dentro de layout parte2
?>