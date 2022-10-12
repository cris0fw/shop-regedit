<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="registrar.css">
    <link rel="icon" href="imagen/iconoTerminado.png" type="icono/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<div class="contenedor-principal">
    <!--CABECERA -->
    <header class="cabecera">
            <img src="imagen/titulo1.png" alt="">

            <div class="cabecera-shop">
            <img src="imagen/carrito.png" alt="">
            <h1>Shop Regedit</h1>
        </div>
    </header>

    <!-- MENU -->
    <nav class="menu">
        <a href="../index.html">Home</a>
        <a href="../contactos.php">Contactos</a>
        <a href="#">Descripciones</a>
        <a href="../precioAdquirido.php">Precios/Adquirir</a>
    </nav>

<main class="registrando">
<div class="signup-form">
    <form action="registrar.php" method="post" id="formulario">
    <?php
    if(isset($_POST['btn-compro-r'])){
    ?>    
    <div class="alert alert-danger" role="alert"> 
    <?php    
     echo $mensaje = "Por favor debe crear un usuario antes de comprar";
     ?> 
     </div>
     <?php 
    }
    else{
     $mensaje = "";
    }
    ?>  
		<h2>Registrate</h2>

        <?php
        include("insertar.php");
        ?> 
      
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" id="nombre" name="nombreUsuario" placeholder="Nombre" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="apellidoUsuario" placeholder="Apellido" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="nombreDelUsuario" placeholder="Nombre Usuario" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="edadUsuario" placeholder="Edad" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="emailUsuario" placeholder="Correo Electronico" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="contrsUsuario" placeholder="Contraseña" required="required">
        </div>       
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> Acepto Los<a href="#">Terminos De Uso</a> &amp; <a href="#">Privadad Y Politica</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-lg btn-block registrar" name="btnEnviar">Registrar Ahora</button>
        </div>
    </form>
	<div class="text-center">¿Ya Tienes Cuenta?<a href="loginn.php">Sign in</a></div>
</div>
</main>

<section class="publicidad">
    <div class="contenedor-flex">
        <div class="card" style="width: 20rem;">
            <img src="imagen/imagen2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
             <p class="card-text">Somos una pagina que se va actualizando mas y saca los mejores regedits solamente con crearte una cuenta ya podras comprar los mejores regedits del mercado!</p>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="imagen/imagen1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
             <p class="card-text">Registrarte para poder loguearte y poder comprar estos maravillosos regedits que estan pegando cada vez mejor!</p>
            </div>
        </div>
    </div>
</section>
   

    <!-- FOOTER -->
    <footer class="footer">
        <p>@Todos los derechos reservados a Cristian Ludueña ©</p>

        <img src="imagen/icono.png" alt="Creador de pagina web">
    </footer>
</div>

<script src="prueba.js"></script>
</body>
</html>