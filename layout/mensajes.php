<?php
if( (isset($_SESSION['mensaje'])) && isset($_SESSION['icono']) ){ //preguntamos si existe la session del mensaje que se visualize

    $respuesta = $_SESSION['mensaje']; 
    $icono = $_SESSION['icono'];
    ?>
   <script>
        Swal.fire({
          position: "top-end",
          icon: '<?php echo $icono; ?>',
          title: "<?php echo $respuesta;?>",
          showConfirmButton: false,
          timer: 3000
        });
      </script>
  <?php
  
  unset($_SESSION['mensaje']);//unset elimina una sesion especifica que le indiquemos
  unset($_SESSION['icono']);
}
?>