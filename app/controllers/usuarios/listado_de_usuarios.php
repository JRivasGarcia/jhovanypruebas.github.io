<?php
//aqui crearemos el controlador que nos va a servir para hacer la lectura de datos desde la base de datos de la tabla usuarios


   $sql_usuarios = "SELECT * FROM tb_usuarios";//hacemos una consulta para traer la infomacion, la consulta dice seleccionar todo de la tabla usuarios
   $query_usuarios = $pdo->prepare($sql_usuarios); /**almacenamos el resultado de la variable en la variable query y preparamos con el pdo la consulata query_usuarios */
   $query_usuarios->execute();/**ejecutamos la consulta */
   $usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC);/**lo que hacemos es desplazar la consulta en una cadena y lo pasamos a la variable usuarios */