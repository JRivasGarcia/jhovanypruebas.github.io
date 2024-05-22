<?php

//lo que haremos en este controlador es recibir el id desde index.php por el metodo get ya que esta en la url y eso nos ayudara a que se muestre la informacion 

$id_usuario_get = $_GET['id']; //creamos una variable llamada $id_usuario_get y le decimos que recupere el valor que se encuentra en la url que en este caso es el id y se lo damos como valor 

//hacemos la consulta para traer la informacion del usuario 

$sql_usuarios = "SELECT * FROM tb_usuarios where id_usuario = '$id_usuario_get' ";//hacemos una consulta para traer la infomacion, la consulta dice seleccionar todo de la tabla usuarios donde el id usuario de la tabla de datos sea igual al id que esta ingresando por el metodo get
   $query_usuarios = $pdo->prepare($sql_usuarios); /**almacenamos el resultado de la variable en la variable query y preparamos con el pdo la consulata query_usuarios */
   $query_usuarios->execute();/**ejecutamos la consulta */
   $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);/**lo que hacemos es desplazar la consulta en una cadena y lo pasamos a la variable usuarios */


   foreach ($usuarios_datos as $usuarios_dato){ //desplegamos toda la informacion con el foreach y se lo pasamos a usuarios_dato
    //desplegamos la informacion de la base de datos 
    $nombres = $usuarios_dato['nombres']; //creamos la variable nombres que va a ser igual a $usuarios_dato['nombres'] que es a lo que le pasamos la informacion y lo que esta dentro de los corchetes es la informacion que extraemos de la base de datos 
    $email = $usuarios_dato['email'];
   }