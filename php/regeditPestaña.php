<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adquirir Regedit</title>
    <link rel="icon" href="imagen/iconoTerminado.png" type="icono/png">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 

    <link href="regeditpestaña.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<style>
   .numero{
    padding: 9px;
    font-size: 25px;
    border-radius: 50px;
    text-align: center;
    width: 80px;
    margin-bottom: 20px
   }

   .parrafo{
       color:white;
       font-size:25px;
   }

</style>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/c26c0283ef.js"></script>
    <?php
        include("puente.php");

        $_SESSION['usuario'];
        $_SESSION['idusuario'];
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

    <!-- REGEDIT PRODUCTO -->
<main class="informacion">

<?php 
   if(isset($_POST['btn-comprar'])){
        $variableID = $_POST['IDgeneral'];

        $consulta = "SELECT * FROM regedits WHERE idRegedit = ('$variableID')";

        $ejecutar = mysqli_query($conexion, $consulta);

        while($fila = mysqli_fetch_assoc($ejecutar)){
            $regedit = $fila['tipoSensi'];
            $_SESSION['nombre'] = $fila['nombreR'];
            $_SESSION['idR'] = $fila['idRegedit'];
            $_SESSION['descrip'] = $fila['descripcionR'];
            $_SESSION['precioR'] = $fila['precioR'];
            $_SESSION['carac'] = $fila['caracteristicasR'];
            $_SESSION['cod'] = $fila['codigoR'];
            $_SESSION['vid'] = $fila['videoR'];
        }
      }
?> 

<div class="container">
	<br>  <p class="text-center parrafo-titulo">Disfruta los increibles Regedits<a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr>
<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
            <article class="gallery-wrap"> 
    <div class="img-big-wrap">
            <div> <a href="#"><img src="regedit/<?php echo $_SESSION['idR']?>.jpg"></a></div>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
  <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
	</aside>
	    <aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3 titulo-h3"><?php echo $_SESSION['nombre'] ?> </h3>
     
    <p class="price-detail-wrap"> 
	    <span class="price h3 text-warning"> 
		    <span class="currency">$</span><span class="num"><?php echo $_SESSION['precioR']?></span>
	    </span> 
    
    </p> 
<dl class="item-property">
  <dt class="titulo-descripcion">Description</dt>
  <dd><p><?php echo $_SESSION['descrip']?> </p></dd>
  <p><?php echo $_SESSION['tipoSensi']?></p>
</dl>
<dl class="param param-feature">
  <dt class="titulo-caracteristicas">Caracteristicas</dt>
  <dd><p>
    <?php echo $_SESSION['carac']?>
  </p></dd>
</dl> 

<hr>
    <div class="row">
		
<div class="col-sm-7">
<dl class="param param-inline">
		<dd>
			
		</dd>
</dl>  <!-- item-property .// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
<hr>  
    <form action="regeditPestaña.php" method="POST">
    <input type="hidden" value="<?php echo $_SESSION['idR']?> ">
    <input type="hidden" value="<?php echo $_SESSION['nombre']?> ">
    <input type="hidden" value="<?php echo $_SESSION['precioR']?>">
    <input type="hidden" value="<?php echo $_SESSION['lasensi']?>">
    <a href="#" class="btn btn-lg btn-primary text-uppercase"> Comprar </a>
	<button class="btn btn-lg btn-outline-primary text-uppercase" name="btn-agregar"> <span class="fa fa-shopping-cart"></span> Agregar Al Carrito </button>
    </form>
</article> <!-- card-body.// -->
</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->
</div>
</main>

<?php 
    


?>



<section class="interfaces">
    <div class="interfaces-centrado">
    <h2 class="sist-int-log">Observa Su Interfaz Y Su Sistema De Login!</h2>

        <div class="interfaz">
        <img src="regedit/<?php echo $_SESSION['nombre']?>.png " alt="" height="500px" width="590px">
        <p>Cada Regedit te garantizara multiples opciones para elegir la potencia
            y ademas la sensibilidad que mas gustes!
        </p>
        </div>

        <div class="logueo">
        <img src="regedit/<?php echo $_SESSION['cod']?>.png " height="500px" width="400px" alt="">
        <p>Cada regedit te proporciona seguridad cada vez que quieras ingresar tus datos!</p>
        </div>
    </div>
</section>

<section class="videos"> 

      <div class="contenedor-video">
      <h1 class="video-regedit">Video Relacionado Al Regedit</h1>  
      <iframe width="650" height="400" src="<?php echo $_SESSION['vid'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

