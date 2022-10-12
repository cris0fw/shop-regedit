<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adquirir</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


    <link rel="icon" href="imagen/iconoTerminado.png" type="icono/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="Estilos/precioadquirido.css" rel="stylesheet"> 
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/c26c0283ef.js"></script>

<?php 
    include("php/conexion.php");

    $filtro = "";

    if(isset($_POST['xopcion'])){
        $opcionFiltro = $_POST['opcionesFiltro'];
        if($opcionFiltro == 'todos'){
            $consulta = "SELECT * FROM regedits";
        }
        
        if($opcionFiltro == 'lenta'){
            $filtro = "WHERE tipoSensi LIKE '%$opcionFiltro'";
        }
        if($opcionFiltro == 'regular'){
            $filtro = "WHERE tipoSensi LIKE '%$opcionFiltro'";
        }
        if($opcionFiltro == 'alta'){
            $filtro = "WHERE tipoSensi LIKE '%$opcionFiltro'";
        }
    }

    if(isset($_POST['busco-regedit'])){
        $textoBusqueda = $_POST['estoy-buscando'];

      $filtro = "WHERE nombreR LIKE '%$textoBusqueda'"."or tipoSensi like '%$textoBusqueda'";
    }
    $consulta = "SELECT * FROM regedits $filtro";

    $ejecutar = mysqli_query($conexion, $consulta);
?> 

<div class="contenedor-principal">
   <!--CABECERA -->
   <header class="cabecera">
        <img src="imagenes/titulo1.png" alt="">

        <div class="cabecera-shop">
             <img src="imagenes/carrito.png" alt="">
            <h1>Shop Regedit</h1>
        </div>

        <div class="contenedor-botones"> 
            <a href="php/registrar.php">sign up</a>
             <a href="php/loginn.php">Login</a>
        </div>
    </header>

     <!-- MENU -->
     <nav class="menu">
        <a href="index.html">Home</a>
        <a href="contactos.php">Contactos</a>
        <a href="#">Descripciones</a>
        <a href="precioAdquirido.php">Precios/Adquirir</a>
    </nav>

     <!-- SECCION DE BUSQUEDAS -->
     <main class="busquedas">
  <!-- BUSQUEDA -->
    <div class="busqueda">
        <form action="precioAdquirido.php" method="POST">
            <div class="content-dos">
            <input type="search" name="estoy-buscando" placeholder="Buscar" class="buscar">
            <input type="submit" name="busco-regedit" value="buscar" class="boton-buscar">
            </div>
        </form>
    </div>

     </main>

    <!-- PRODUCTOS -->
    <main class="productos">
        <div class="flexfiltroproductos">
          <!-- FILTRADO -->
        <form action="precioAdquirido.php" method="POST">
        <div class="container">
            <h1>Filtrar</h1>
            <select class="form-select form-select-lg mb-3 bg-light mt-1" name="opcionesFiltro" aria-label=".form-select-lg example">
                <option selected>Tipo De Sensibilidad</option>
                <option value="todos">Todos</option>
                <option value="lenta">lenta</option>
                <option value="regular">regular</option>
                <option value="alta">alta</option>
            </select>
            
            <button type="submit" name="xopcion" class="btn btn-primary btn-lg">Filtrar</button>
            </div>
        </form>
       

        <div class="grid-product">
  <!-- SELECCIONANDO TODOS LOS PRODUCTOS -->
        <?php 
        while($fila = mysqli_fetch_assoc($ejecutar)){
        ?> 
        <form action="regeditpestaña.php" method="POST">
            <div class="col-md-11 offset-md-0 offset-sm-2 offset-1 col-sm-8 col-10 offset-sm-2 offset-1 mb-3">
                <div class="card">
                    <div class="px-2 red text-uppercase">new</div>
                    <div class="d-flex justify-content-center"> <input type="submit" name="btn-comprar"  class="imgRegedits" style="background-image:url('php/regedit/<?php echo $fila['idRegedit'] ?>.jpg')"> </div> <b class="px-2">
                        <p class="descrip">DAÑOS: <?php echo $fila['daños'] ?></p>
                    </b>
                    <div class="d-flex align-items-center justify-content-start rating border-top border-bottom py-2">
                        <div class="text-muted text-uppercase px-2 border-right sensi">Sensibilidad</div>
                        <div class="px-lg-2 px-1 parrafo"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <?php echo $fila['tipoSensi'] ?> </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between py-2 px-3">
                        <div class="h4"><span>$</span><?php echo $fila['precioR'] ?></div>
                        <input type="hidden" name="IDgeneral" value="<?php echo $fila['idRegedit']?>">
                    </div>
                    </form> 
                      <!-- AGREGANDO PRODUCTOS AL CARRITO -->
                    <form class="obtener" action="php/registrar.php" method="POST">
                        <input type="hidden" value="<?php echo $fila['idRegedit'] ?>" name="enviando-imagen">
                        <input type="hidden" value="<?php echo $fila['nombreR'] ?>" name="enviando-nombre">
                        <input type="hidden" value="<?php echo $fila['precioR'] ?>" name="enviando-precio">
                        <input type="hidden" value="<?php echo $fila['tipoSensi'] ?>" name="enviando-sensi">
                        
                        <div> <button name="btn-compro-r" type="submit" 
                        class="btn btn-dark text-uppercase carrito">
                        <span class="fa fa-shopping-cart faa">
                        </span>Agregar Al Carrito</button> </div> 
                    </form>  
                </div>    
            </div>     
        <?php    
        }
        ?>    
        </div>  
    </main>

        
    <?php  
    include("php/conexion.php");

    if(isset($_POST['agregar-carrito'])){
        $carritoImagen = $_POST['enviando-imagen'];
        $carritoNombre = $_POST['enviando-nombre'];
        $carritoPrecio = $_POST['enviando-precio'];
        $carritoSensi = $_POST['enviando-sensi'];

        $consultaInsertar = "INSERT INTO vercarrito (numimagen, nombrereg, precioreg, tiposensi)
        VALUES ('$carritoImagen', '$carritoNombre', '$carritoPrecio', '$carritoSensi')";

       $ejecutarInsert = mysqli_query($conexion, $consultaInsertar);

       if($ejecutarInsert){
        ?> 
        <script>
        alert("Producto: " + " <?php echo $carritoNombre ?>" +" Agregado al carrito!");
        </script>
        <?php 
       }
    }
?>  
  
    <!-- FOOTER -->
    <footer class="footer">
        <p>@Todos los derechos reservados a Cristian Ludueña ©</p>

        <img src="imagenes/icono.png" alt="Creador de pagina web">
    </footer>

</div>



</body>
</html>