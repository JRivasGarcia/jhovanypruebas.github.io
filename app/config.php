<?php
/** este archivo va a ser especifico para los detalles de configuracion de conexion y variables globales */

/** declaramos variables globales */

define('SERVIDOR','localhost');/** esto funciona ya que estamos trabajando localmente ya si fuera global tendras que cambiar la variable  */
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemadeventas');/** nombre de tu base de datos */

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR; /** Declaramos una variable llamada servidor y hacemos la consulta, el debname es el nombre de la base de datos y para concatenar se usan los puntos el BD y el SERVIDOR son de las variables globales */

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); /** creamos un objeto del PDO, el pdo es para la conexion a la base de datos osea que aqui hacemos la conexion a la base de datos  */
    //echo"La Conexion a la Base de Datos fue exitosa";
}catch (PDOException $e) {

    print_r($e);

    echo"error al conectar a la base de datos";
}

$URL = "http://localhost/www.sistemadeventas.com";//cremaos una variable llamada url y guardamos la url de nuestro servidor para que cuando se cambien la direccion solo lo cambies aqui y no en todos los archivos ya que incluyendo la clase config tendras acceso a esta variable

date_default_timezone_set("America/Mexico_City");//sirve para traer la hora y la fecha de nuestro pais ya que siempre hay un cambio de hora

$fechaHora = date('Y-m-d H:i:s');//creamos una variable llamada fechahora

