<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


    <link rel="icon" href="imagen/iconoTerminado.png" type="icono/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="Carrito.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/c26c0283ef.js"></script> 

<?php
    include("puente.php");

     $_SESSION['usuario'];

    $elnombreusuario = $_SESSION['usuario'];
?>

<?php 
    include("conexion.php");

   
?> 

<div class="contenedor-principal">
     <!--CABECERA -->
     <header class="cabecera">
        <img src="imagen/titulo1.png" alt="">

        <div class="cabecera-shop">
            <img src="imagen/carrito.png" alt="">
             <h1>Shop Regedit</h1>
        </div>

        <div class="contenedor-botones"> 
        <p class="Usuario"> <?php echo $_SESSION['usuario']   ?></p>

            <a href="cerrarSesion.php">Salir</a>
        </div>
    </header>

     <!-- MENU -->
     <nav class="menu">
        <a href="index.php">Home</a>
        <a href="#">Contactos</a>
        <a href="#">Descripciones</a>
        <a href="precioAdd.php">Precios/Adquirir</a>
    </nav>

     <!-- SECCION DE BUSQUEDAS -->
     <main class="busquedas">
   

    <div class="busqueda">
        <form action="precioAdd.php" method="POST">
            <div class="content-dos">
            <input type="search" name="estoy-buscando" placeholder="Buscar" class="buscar">
            <input type="submit" name="busco-regedit" value="buscar" class="boton-buscar">
            </div>
        </form>
    </div>

     </main>

<!-- PRODUCTOS -->
<main class="productos">
   <div class="contenedor-tabla">
      <h1>Carrito De Compras</h1>

   <div class="container-xl">
      <form action="" method="POST">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-8"><h2>Regedits En <b>Carrito</b></h2></div>
            </div>
         </div>
         <table class="table table-striped table-hover table-bordered">
            <thead>
               <tr>
                   <th>Imagen <i class="fa fa-sort"></i></th>
                   <th>Producto</th>
                   <th>Precio <i class="fa fa-sort"></i></th>
                   <th>Sensibilidad</th>
                   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
<?php 
   include("conexion.php");
      $consultaCarrito = "";

      $consultaCarrito = "SELECT * FROM vercarrito";
                               
      $ejecutarCarrito = mysqli_query($conexion, $consultaCarrito);

      while($fila = mysqli_fetch_assoc($ejecutarCarrito)){                     
?>  
    <tr>
       <td> <img class="imagenAcomodo" src="regedit/<?php echo $fila['numimagen']?>.jpg" alt=""> </td>
       <td><?php echo $fila['nombrereg'] ?></td>
       <td><?php echo $fila['precioreg'] ?></td>
       <td><?php echo $fila['tiposensi'] ?></td>
       <td> <input type="hidden" value="<?php echo $fila['nombrereg']?>" name="borro">
          <a href="eliminarCarrito.php?id=<?php echo $fila['idreg']?>" class="btn-close" aria-label="Close"><?php echo $fila['idreg'] ?></a>              
       </td>
    </tr>
<?php 
    }
    ?>
            </tbody>
        </table>
      </form>
    </div>

    </div>  
</div>   
        </div>
</main>

<?php
   $consultaTotal = "SELECT sum(precioreg) as suma from vercarrito";

   $ejecutarTotal = mysqli_query($conexion, $consultaTotal);

   while($total = mysqli_fetch_assoc($ejecutarTotal)){
       $totalCarrito = $total['suma'];
    }
?>  

<section class="totalApagar">
   <div class="conten-uno">
      <h1>Total Del carrito</h1>

   <div class="total">
       <h3>Total A Pagar: </h3>
       <p>$<?php echo $totalCarrito ?></p>
   </div>
   <div class="finalizo-compra">
      <form action="carrito.php" method="POST">
         <input type="hidden" name="nameuser" value="<?php echo $elnombreusuario ?>">
         <input type="hidden" name="totaal" value="<?php echo $totalCarrito ?>">
         <button type="submit" name="btnfinalizar" class="btn btn-primary btn-lg btn-block">Finalizar Compra</button>
      </form>
   </div>
   </div>
   
<div class="conten-dos">
   <div class="alerta">
       <?php
           if(isset($_POST['btnfinalizar'])){
               $nombreusuario = $_POST['nameuser'];
               $total = $_POST['totaal'];
               $inserto = "";

        $insertarfinalizar = "INSERT INTO finalizarcompra (nombreusuario, totalpagar)
        VALUES ('$nombreusuario', '$total')";

        $ejecutarfinalizar = mysqli_query($conexion, $insertarfinalizar);

        if($ejecutarfinalizar){
            ?>
               <div class="alert alert-success" role="alert">
            <?php    
               echo "Su compra ha sido exitosa";
            ?>    
               </div>
            <?php   
        }
        else{
            ?>
               <div class="alert alert-danger" role="alert">
            <?php    
               echo "Su compra no pudo ser exitosa";
            ?>    
               </div>
        <?php   
        }
    }
        ?>
    </div>

<div class="mostrarDatos">
<?php  
    $inserto = mysqli_insert_id($conexion);

    $consultaFinalizar = "SELECT * FROM finalizarcompra WHERE idfinalizar = '$inserto'";

    $ejecutarfinal = mysqli_query($conexion, $consultaFinalizar);

    while($recorrer = mysqli_fetch_assoc($ejecutarfinal)){
        $nombre = $recorrer['nombreusuario'];

?>
    <h1>Datos De compra</h1>

    <p>Nombre: <?php echo $nombre ?> </p>

    <p>Total:$ <?php echo $recorrer['totalpagar'] ?></p>
<?php 
}

if(isset($_POST['btnfinalizar'])){
$consultarCarrito = "SELECT * from vercarrito";

$ejecutarElcarrito = mysqli_query($conexion, $consultarCarrito);

?>  
    <div class="table-title">
        <div class="row">
            <div class="col-sm-5"><h2>Detalles De<b>Compra De Regedits</b></h2></div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Regedit</th>
                <th>Precio</th>
            </tr>     
        </thead>
    <tbody>
    <?php            
    while($recorrocarro = mysqli_fetch_assoc($ejecutarElcarrito)){
    ?>
        <tr>
            <td><?php  echo $recorrocarro['nombrereg'] ?></td>
            <td><?php  echo $recorrocarro['precioreg'] ?></td>
        </tr>
<?php            
}    

}
?>      
    </tbody>
    </table>
</div>


</div>
</section>
    
<!-- FOOTER -->
<footer class="footer">
   <p>@Todos los derechos reservados a Cristian Ludueña ©</p>
   <img src="imagen/icono.png" alt="Creador de pagina web">
</footer>

</div>

    </body>
</html>