<?php
$host="localhost";
$User="root";
$pass="";
$db="proyecto gav";
$conexion=mysqli_connect($host,$User,$pass,$db);
if(!$conexion){
    echo "Conexion fallida";
}
?>