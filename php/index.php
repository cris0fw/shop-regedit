 <!-- CODIGO HTML -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regedits</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet"> 
   
    <link rel="icon" href="imagen/iconoTerminado.png" type="icono/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
 .rojo{
     color:red;
 }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" 
     src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v12.0" 
     nonce="vAaZ9K7S"></script>   

     <?php
    include("puente.php");

     $_SESSION['usuario'];
 
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
            <a href="#">Home</a>
            <a href="#">Contactos</a>
            <a href="#">Descripciones</a>
            <a href="precioAdd.php">Precios/Adquirir</a>
        </nav>

        <!-- Slider Regedit -->
        <main class="slider">
            <div class="contenedor-slider">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://i.ibb.co/7CqHvpj/Slider4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.ibb.co/tCVmmYK/slider1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.ibb.co/bBjg5QC/slider2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                   
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://i.ibb.co/fqGHYc9/slider3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                   
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              </div>
        </main>
   
         <!-- Bienivedo al usuario -->
        <main class="bienvenida">
            <div class="bienvenidaUsuario">
             <h1>Bienvenido  <?php echo $_SESSION['usuario']  ?> </h1>
                 
                <p>Ahora que pudiste acceder con tu cuenta te invitamos a 
                    disfrutar de estos increibles regedits que tenemos para ofrecerte puedes comprar el que te quede mas comodo tenemos de muchos tipos hasta te enseñaremos a configurarlos ya que es facil esta pagina ademas te muestra las ventajas y desventajas que pueden tener algunos regedits a la hora de probarlos y ademas detallamos videos para garantizarte que todos los regedits tienen buena calidad a la hora de tener cerca a un rival sirven especialmente para pvp, de clasificatoria pero en clasificatoria te recomendamos usar otra especie de configuracion!.
                </p>
            </div>
        </main>

        <div class="contengoBienvenida">
            <div class="imagen-flex">
            <img src="https://i.ibb.co/999h96K/c.png" alt="" width="60%" height="330px">
            </div>
        </div>


        <!-- INFORMACION PRINCIPAL -->
        <main class="informacion">
            <article class="informacion1">
                <h2 class="titulo1">¿Que Es Regedit?</h2>
                <p>
                    Regedit o regedit.exe es un archivo estándar de Windows que abre el editor 
                    del registro nativo del sistema. Este permite visualizar y editar claves y 
                    valores en el registro de Windows. El archivo se encuentra en el directorio 
                    de Windows (normalmente C:\Windows) y se puede iniciar haciendo doble clic en 
                    él. Si lo prefieres, puedes abrir el editor escribiendo “regedit” en el cuadro 
                    de búsqueda del menú de inicio o en el cuadro de diálogo “Ejecutar”, que se 
                    activa con la combinación de teclas [Windows] + [R].
                </p>
            </article>

            <article class="informacion2">
                <h2 class="titulo2">¿Para Que Sirve En Free Fire?</h2>
                <p>
                    En free fire se puede utlizar de muchas formas, siendo lo más común la 
                    modificación del puntero del ratón. Cuando se modifica, el punteo del mouse
                    levanta automaticamente la mira al disparar, para aumentar el numero de disparos
                    de la cabeza. También puede modificar la configuración de la sensibilidad del 
                    juego y otras mejoras. Se puede decir que Regedit no es considerado como "hack",
                    más bien es como una pequeña ayuda que le ofrece al usuario para poder aumentar
                    la tasa de cabeza.
                </p>
            </article>

            <article class="informacion3">
                <h2 class="titulo3">En Este Artitulo Encontraras</h2>
                <p>Noticias sobre Regedit, principalmente toda clase de regedit con su descripcion
                    proximamente los regedits de android, la mayoria de regedit son de PC algunos
                    son economicos otros son más caros. Pero cada regedit garantiza un porcentaje 
                    a la cabeza, tambien depende mucho de la configuracion que le des al Regedit 
                    ya que por lo tanto cada regedit tiene una configuracion distinta donde en el
                    juego la configuración que usted tenga quizás no le sirva tanto para el regedit.
                </p>
            </article>
        </main>

        <!-- PUBLICIDAD -->
        <aside class="publicidad">
            <h1>Más Información</h1>
           
            <div class="imagen1">
                <img src="https://i.ibb.co/71JZx2S/imagen1.jpg" alt="" >
                <p>Proximamente regedits para android no te pierdas de la potencia que cargan estos regedits</p>
            </div>

            <div class="imagen2">
                <img src="https://i.ibb.co/kcG26bQ/imagen2.jpg" alt="" >
                <p>El nuevo regedit nexus llega con el mejor aimlock y aimbot que ningun otro regedit te puede garantizar!.</p>
            </div>

            <div class="imagen3">
                <img src="https://i.ibb.co/Wx4bGrd/imagen3.jpg" alt="">
                <p>El regedit red god llega para quedarse venido desde el infierno y con una gran precision no te puedes perder su lanzamiento</p>
            </div>

            <div class="imagen4">
                <img src="https://i.ibb.co/XWb3SHL/imagen4.jpg" alt="">
                <p>Con el regedit tendras una gran precision de la que no te imaginas! vas a verlos en accion!.</p>
            </div>
        </aside>

        <!-- SECCIONES -->
        <article class="article">
        <h1 class="tituloArticulo">Guias</h1>
            <div class="contenedor-padre-a">

           <div class="haciendoFlex">
             <div class="card" style="width: 19rem;">
                <img src="https://i.ibb.co/S6p8qtF/seccion1.png"class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">¿Como Instalar?</h5>
                  <p class="card-text parrafoHover">Si tienes dudas a como instalar tu regedit en la PC pues sigue estos pasos!</p>
                  <a href="comoInstalar.html" class="btn btn-dark w-50">Ver</a>
                </div>
              </div>
              <div class="card" style="width: 19rem;">
                <img src="https://i.ibb.co/Qnfj3Bh/como-Borrar.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">¿Como Borrar?</h5>
                  <p class="card-text parrafoHover">Si ya no quieres mas usar al regedit o quieres probar otro te enseñaremos a como borrarlo!.</p>
                  <a href="#" class="btn btn-dark w-50">Ver</a>
                </div>
              </div>  
              
        </div>   
        </article>

         <!-- COMENTARIOS -->
    <div class="comentar">
        <div class="contenedor-coment">
        <div id="disqus_thread"></div>
        <script>
            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://regedits.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div> 
    </div>    
     
    <!-- FOOTER -->
        <footer class="footer">
            <p>@Todos los derechos reservados a Cristian Ludueña ©</p>

            <img src="imagen/icono.png" alt="Creador de pagina web">
        </footer>

    </div>
    
</body>
</html>