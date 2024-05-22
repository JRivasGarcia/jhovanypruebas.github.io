<?php
session_start();
if(isset($_SESSION['sesion_email'])){ //preguntamos si la secion existe
   //echo "si existe sesion de".$_SESSION['sesion_email'];
   $email_sesion = $_SESSION['sesion_email']; //creamos una variable y le almacenamos la sesion
   $sql = "SELECT * FROM tb_usuarios WHERE email='$email_sesion'";//hacemos una consulta para traer la infomacion, la consulta dice seleccionar todo de la tabla usuarios cuando el email sea igual al correo que fue ingresado y esta haciendo secion que se encuentra en la variable $email_sesion
   $query = $pdo->prepare($sql); /**almacenamos el resultado de la variable en la variable query */
   $query->execute();/**ejecutamos la consulta */
   $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);/**lo que hacemos es desplazar la consulta en una cadena y lo pasamos a la variable usuarios */

foreach($usuarios as $usuario){/**imprimimos toda la cadena con un bucle for each */

    $nombres_sesion =$usuario['nombres'];
}
}else{
    echo "no existe sesion";
    header('Location: '.$URL.'/login');//si la sesion no existe te regresa al login
}