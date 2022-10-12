<?php
    include("conexion.php");

    session_start();

    if(isset($_POST['btnAceptar'])){
       if(!empty($_POST['txtCorreo']) && !empty($_POST['txtContra'])){
          if(strlen($_POST['txtCorreo']) > 1 &&
             strlen($_POST['txtContra']) > 1){
                $correo = $_POST['txtCorreo'];
                $contra = $_POST['txtContra'];

                $consulta = "SELECT idusuario,nombredelusuario, correousuario, 
                contrausuario FROM usuario WHERE correousuario = 
                ('$correo') and contrausuario = ('$contra')";

                $ejecutar = mysqli_query($conexion, $consulta);

                $fila = mysqli_num_rows($ejecutar);

                if($fila){
                    while($datos = mysqli_fetch_assoc($ejecutar)){
                    $_SESSION['usuario'] = $datos['nombredelusuario'];
                    $_SESSION['idusuario'] = $datos['idusuario'];
                    $_SESSION['nombre'] = $datos['nombreusuario'];
                    $_SESSION['apellido'] = $datos['apellidousuario'];
                };
                header("location:index.php");
                }
                else{
                    header("location: loginn.php");
                   $_SESSION['mensaje'] = "Ingrese datos validos";
                }      
          }
          else{
              header("location: loginn.php");
              $_SESSION['mensaje'] = "La longitud tiene que ser mayor";
          }
       }
       else{
        header("location: loginn.php");
        $_SESSION['mensaje'] = "Los campos estan vacios, completelos!";
    }

    }

?>