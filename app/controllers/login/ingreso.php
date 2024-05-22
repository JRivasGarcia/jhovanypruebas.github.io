<?php

include('../../config.php');/** incluimos el archivo config para acceder a todas las lineas de codigo que tiene ese archivo*/

$email = $_POST['email'];/** pasamos la variable con el metodo post que estamos recibiendo la informacion desde el input de email osea la informacion que hay en el input email la pasamos y lo almacenamos en la variable php, el nombre del input es el que va dentro de los corchetes */

$password_user = $_POST['password_user'];


$contador=0;

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' ";/** hacemos una consulta a la base de datos para saber si el email existe  el email son los que recibimos del fomrularario*/

$query = $pdo->prepare($sql); /**almacenamos el resultado de la variable en la variable query */
$query->execute();/**ejecutamos la consulta */
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);/**lo que hacemos es desplazar la consulta en una cadena y lo pasamos a la variable usuarios */

foreach($usuarios as $usuario){/**imprimimos toda la cadena con un bucle for each */
    $contador=$contador+1;//si los datos existen entonces el contador aumenta
    $email_tabla =$usuario['email'];/**imprimimos que campo queremos que se recupere de la base de datos */
    $nombres =$usuario['nombres'];
    $password_user_tabla=$usuario['password_user'];//recuperamos el password encriptado 
}


if( ($contador>0) && (password_verify($password_user, $password_user_tabla)) ){ //si el contador es mayor  0 entonces hara las intrsucciones siguientes de lo contrario los datos estan mal y ademas preguntamos si la contraseña esta verificada y lo verificamos con el password user que viene desdel el formulario y con $password_user_tabla que viene de la base de datos   

    echo "Datos Correctos";
    session_start();//inicializamos una secion
    $_SESSION['sesion_email'] = $email;//creamos nuestra primera secion Y entre corchetes ponemos el nombre de la secion y lo igualamos al $email que esta ingresando desde el formulario
    header('Location: '.$URL.'/index.php');//una vez creada la sesion que nos redirija a la locacion que quieres que te redirija

}else{
    
    echo "datos incorrectos vuelve a intentar";
    session_start();//inicializamos una sesion
    $_SESSION['mensaje']="Datos Incorrectos";//creamos una sesion con nombre mensaje ya que especificamente va a ser para mensajes
    header('Location: '.$URL.'/login');

}

