<?php 
    include("conexion.php");

    if(isset($_GET['id'])){
       $obtengoId = $_GET['id'];

       $consultaEliminar = "DELETE FROM vercarrito WHERE idreg = '$obtengoId'";

      $ejecutarEliminacion = mysqli_query($conexion, $consultaEliminar);

      if($ejecutarEliminacion)
            
        header("LOCATION: carrito.php");
      }
      else{
          echo "no se borro";
      }

?>