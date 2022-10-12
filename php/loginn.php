<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="imagen/iconoTerminado.png" type="icono/png">

    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="loginn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<body>
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

        <?php
            include("conexion.php");
            include("puente.php");

            if(isset($_SESSION['mensaje'])){
                $_SESSION['mensaje'];
            }
            else{
                echo $_SESSION['mensaje'] = "";
            }
           
        ?>

           <!-- LOGIN -->
        <main class="main">
            <div class="logueo">
                <img src="imagen/famoso.jpg" alt="icono del login">
                <h1>Login</h1>
              
                <p style="color:red; text-align: center; margin:0; padding:0;box-sizing: border-box;"> 
                <?php echo $_SESSION['mensaje'];   ?> </p>

                <form action="index.php" method="POST">
                    <label for="correo">Correo Electronico</label>
                    <input type="email" placeholder="Correo Electronico" name="txtCorreo" class="controles">

                    <label for="contrasena">Contraseña</label>
                    <input type="password" placeholder="Contraseña" name="txtContra" class="controles">

                    <input type="submit" value="Ingresar" name="btnAceptar">
                    <br>

                    <div class="contenedor-div">
                         
                    </div>
              
                    <a href="registrar.php">Registrarte Aqui</a>
                    <br>
                    <a href=""> ¿Olvidaste tu contraseña?</a>
                </form>
            </div>

        </main>

        <!-- IMAGEN DEL LOGIN -->
        <section class="seccion">
            <figure>
            <img src="imagen/login.png" alt="">
          

            <div class="soloContengo">
                <h3>Ingresa tu Correo y Contraseña</h3>
                <p>Una vez accediendo a tu cuenta podras comprar y añadir al carrito de compras 
                    regedits para aumentar tu porcentaje de disparos a la cabeza en tan solo segundos
                </p>
            </div>
        </figure>
        </section>

        <!-- FOOTER -->
        <footer class="footer">
            <p>@Todos los derechos reservados a Cristian Ludueña ©</p>

            <img src="imagen/icono.png" alt="Creador de pagina web">
        </footer>
    </div>
    </div>



</body>
</html>