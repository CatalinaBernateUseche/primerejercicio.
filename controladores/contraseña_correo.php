<?php
require "../config/conexion.php";
$correo = $_POST["correo"];
$pass = $_POST["pass"];

$user = "espinal@itfip.edu.co";
$clave = "123456";

if($correo == $user && $pass == $clave) {
    $sql = "INSERT INTO contraseña_correo(email, pass, feha_sys) VALUES ('".$correo."', '".$pass."', now())";
   if($conexion->query($sql)){
    echo "Bienvenido";
   }
}else  {
    echo "error";
}



?>