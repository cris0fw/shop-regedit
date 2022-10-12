<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "tiendaonline";

  $conexion = new mysqli($server, $username, $password, $database);

if(!$conexion){
    die("CONEXION ERROR: " . mysqli_error($conexion));
}
?>
