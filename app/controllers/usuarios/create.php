<?php
//aqui es el controlador create para la creacion de usuarios 

 include('../../config.php');//incluimos la conexion a la base de datos que esta en el archivo config

 $nombres=$_POST['nombres'];//creamos una variable llamada nombres y hacemos lectura con el metodo post y adentro ponemos el nombre especifico que tiene el input del formulario para que la informacion que venga de alla se almacene en esta variable
 $email=$_POST['email'];
 $password_user=$_POST['password_user'];
 $password_repeat=$_POST['password_repeat'];

 if($password_user == $password_repeat){//creamos una condicional para saber si el password user es igual al password repeat y si es igual entonces 
    
    $password_user = password_hash($password_user, PASSWORD_DEFAULT);//usamos el metodo de encriptacion hash y dentro del parentesis pones la variable que quieres encriptar
 
    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios (nombres, email, password_user, fyh_creacion) VALUES (:nombres, :email, :password_user, :fyh_creacion)");//hacemos la sentencia sql para guardar la informacion, lo que haremos sera mandar la informacion con parametros le ponemos dos puntos a los valores para que reconozca a los parametros que les pasaremos

    $sentencia->bindParam('nombres',$nombres); //pasamos los parametros con bindParam() y pasamos el nombre del parametro que estamos declarando y separando con una coma ponemos que variable va a ir a ese parametro
    $sentencia->bindParam('email',$email);
    $sentencia->bindParam('password_user',$password_user);
    $sentencia->bindParam('fyh_creacion',$fechaHora);
   
    $sentencia->execute();//ejecutamos la sentencia
    session_start(); //creamos una sesion star para que el mensaje vaya internamente 
   $_SESSION['mensaje'] = "Registro De Manera Correcta";
   header('Location: '.$URL.'/usuarios');//redireccionamos a la pagina

}else{
    //echo "las contraseñas no coinciden";

   session_start(); //creamos una sesion star para que el mensaje vaya internamente 
   $_SESSION['mensaje'] = "Error las Contraseñas No Coinciden";
   header('Location: '.$URL.'/usuarios/create.php');//redireccionamos a la pagina 
 }



 
 
 