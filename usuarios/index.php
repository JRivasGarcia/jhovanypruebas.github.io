<?php
//todo esto el index de los usuarios donde modificamos la apariencia con respecto al listado de usuarios 

include('../app/config.php');
//incluimos todos los archivos php para poder reducir el codigo y ya que los incluimos podemos acceder a todo lo que tienen esos archivos
include('../layout/sesion.php');//incluimos el archivo layout

include('../layout/parte1.php'); //incluimos el archivo que esta dentro de layout parte1 

include('../app/controllers/usuarios/listado_de_usuarios.php');//incluimos al controlador listado de usuarios

if(isset($_SESSION['mensaje'])){ //preguntamos si existe la session del mensaje que se visualize

  $respuesta = $_SESSION['mensaje']; ?>
 <script>
      Swal.fire({
        position: "top-end",
        icon: "success",
        title: "<?php echo $respuesta;?>",
        showConfirmButton: false,
        timer: 3000
      });
    </script>
<?php

unset($_SESSION['mensaje']);//unset elimina una sesion especifica que le indiquemos

}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de Usuarios</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro de Usuarios</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display:block">
               
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><center>NumRgo</center></th>
                    <th><center>Nombres</center></th>
                    <th><center>Emails</center></th>
                    <th><center>Acciones</center></th>
                  </tr>
                  </thead>
                  <tbody>
                   <?php 
                   $contador = 0; //creamos una variable llamada contador 
                   foreach ($usuarios_datos as $usuarios_dato) { //usamos un foreach para despelgar toda la informacion de la consulta 
                     $id_usuario = $usuarios_dato['id_usuario'];// creamos una variable llamada id_usuario y le damos el valor del id que tiene el usuario en la base de datos ?>
                   <tr>
                     <td><?php echo $contador=$contador+1;?></td><!-- mandamos a imprimir el numero de registro de la tabla usuario para que se muestre en la tabla -->
                     <td><?php echo $usuarios_dato['nombres'];?></td>
                     <td><?php echo $usuarios_dato['email'];?></td>
                     <td>
                        <center>
                        <div class="btn-group">
                           <a href="show.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i>Mostrar</button>
                           <a href="update.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i>Actualizar</button> <!-- llamamos el id del usuario para poder tener la informacion -->
                           <a href="delete.php?id=<?php echo $id_usuario;?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</button>
                        </div>
                        </center>
                     </td>
                   </tr>
                   <?php
                   }
                   ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th><center>NumRgo</center></th>
                    <th><center>Nombres</center></th>
                    <th><center>Emails</center></th>
                    <th><center>Acciones</center></th>
                  </tr>
                  </tfoot>
                </table>
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

  <!-- este codigo sirve para habilitar un id en el datable -->
  <script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5, //estamos diciendo que el ancho sea de 5
      "language": {
        "emptyTable":"No hay Informacion",
        "info":"Mostrando_START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 a 0 de 0 Archivos",
        "infoFiltered": "(Filtrado de _MAX_ total Archivos)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu":"Mostrar _MENU_ Archivos",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "primero",
            "last": "ultimo",
            "next": "siguiente",
            "previous": "Anterior"
          }
      },
      "responsive": true, "lengthChange": true, "autoWidth": false,
      /* Ajuste de botones */
      buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy'
                        }, {
                            extend: 'pdf',
                        }, {
                            extend: 'csv',
                        }, {
                            extend: 'excel',
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }
                        ]
                    },
                        {
                            extend: 'colvis',
                            text: 'Visol de columnas'
                        }
                    ],
                    /*Fin de ajuste de botones*/

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>


 
