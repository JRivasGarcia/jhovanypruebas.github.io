<?php

include('../../config.php');

session_start();//inicializamos la sesion
if(isset($_SESSION['sesion_email'])) { //preguntamos si la sesion existe

    session_destroy();//si la session existe la destrimos con el destroy
    header('Location: '.$URL.'/');//una vez destruida la sesion la redireccionamos al login

}