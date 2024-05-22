<?php
//aqui haremos la logica para poder actualizar la informacion que se reciba del formulario echo en update.php

//incluimos el archivo config y recuperamos la informacion de las 4 variables 

include('../../config.php'); //incluimos la conexion a la base de datos que esta en el archivo config

$nombres = $_POST['nombres']; //creamos una variable llamada nombres y hacemos lectura con el metodo post y adentro ponemos el nombre especifico que tiene el input del formulario para que la informacion que venga de alla se almacene en esta variable
$email = $_POST['email'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat'];
$id_usuario = $_POST['id_usuario']; //recuperamos el id_usuario que hicimos en update.php

if ($password_user == $password_repeat) { //creamos una condicional para saber si el password user es igual al password repeat osea de que si las contraseñas son iguales y si es igual entonces  y si lo son se hace la siguiente instruccion que es que la contraseña se  encripte

    $password_user = password_hash($password_user, PASSWORD_DEFAULT); //usamos el metodo de encriptacion hash y dentro del parentesis pones la variable que quieres encriptar

    //hacemos la siguiente sentencia sql para actualizar la informacion, lo que haremos sera mandar la informacion con parametros le ponemos dos puntos a los valores para que reconozca a los parametros que les pasaremos
    $sentencia = $pdo->prepare("UPDATE tb_usuarios 
    SET nombres=:nombres,
        email=:email,
        password_user=:password_user,
        fyh_actualizacion=:fyh_actualizacion
    WHERE id_usuario =:id_usuario"); //la condicion sera donde el id_usuario sea igual al id_usuario que vamos a pasar en el parametro de abajo recuerda que no haya espacio entre los dos puntos y el parametro xq si no te manda error

    $sentencia->bindParam('nombres', $nombres); //pasamos los parametros con bindParam() y pasamos el nombre del parametro que estamos declarando y separando con una coma ponemos que variable va a ir a ese parametro
    $sentencia->bindParam('email', $email);
    $sentencia->bindParam('password_user', $password_user);
    $sentencia->bindParam('fyh_actualizacion', $fechaHora);
    $sentencia->bindParam('id_usuario', $id_usuario);

    $sentencia->execute(); //ejecutamos la sentencia

    session_start(); //creamos una sesion star para que el mensaje vaya internamente 

    $_SESSION['mensaje'] = "Se actualizo de forma Correcta";
    $_SESSION['icono'] = "success";

    header('Location: ' . $URL . '/usuarios/'); //redireccionamos a la pagina

} else {
    //echo "las contraseñas no coinciden";

    session_start(); //creamos una sesion star para que el mensaje vaya internamente 
    $_SESSION['mensaje'] = "Error las Contraseñas No Coinciden";
    $_SESSION['icono'] = "error";
    header('Location: ' . $URL . '/usuarios/update.php?id=' . $id_usuario); //redireccionamos a la pagina 
}
