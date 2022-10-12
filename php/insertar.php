<style>
    .rojo{
    text-align: center;
    margin-top: 15px
}
.verde{
    text-align: center;
    margin-top: 15px;
}
</style>

<?php
    include("conexion.php");

    if(isset($_POST['btnEnviar'])){
        $nombre = $_POST['nombreUsuario'];
        $apellido = $_POST['apellidoUsuario'];
        $usuario = $_POST['nombreDelUsuario'];
        $edad = $_POST['edadUsuario'];
        $email = $_POST['emailUsuario'];
        $contra = $_POST['contrsUsuario'];
        $validar = true;
      
        if(empty($nombre)){ 
            $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                Campo Nombre vacio, Completelo PorFavor!
            </div>
            <?php
        }
        else{
            if(strlen($nombre) < 2){
                $validar = false;
                ?> 
                <div class="alert alert-danger" role="alert">
                    Nombre maximo 2 caracteres
                </div>
                <?php
            }
            else{
                if(strlen($nombre) > 10){
                    $validar = false;
                    ?> 
                    <div class="alert alert-danger" role="alert">
                        Nombre no puede superar 10 caracteres
                    </div>
                    <?php
                }
            
            }
        }
        if(empty($apellido)){
            $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                Campo Apellido vacio, Completelo PorFavor!
            </div>
            <?php
        }
        else{
            if(strlen($apellido) < 2){
                $validar = false;
                ?> 
                <div class="alert alert-danger" role="alert">
                    Apelido maximo 2 caracteres
                </div>
                <?php
            }
            else{
                if(strlen($apellido) > 10){
                    $validar = false;
                    ?> 
                    <div class="alert alert-danger" role="alert">
                    Apellido no puede superar 10 caracteres
                    </div>
                    <?php
                }
            }
        }
        if(empty($usuario)){
            $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                 Campo usuario vacio, Completelo PorFavor!
            </div>
            <?php
        }
        else{
            if(strlen($usuario) < 2){
                $validar = false;
                ?> 
                <div class="alert alert-danger" role="alert">
                     Nombre Usuario maximo 2 caracteres
                </div>
                <?php
            }
            else{
                if(strlen($usuario) > 14){
                $validar = false;
                ?> 
                <div class="alert alert-danger" role="alert">
                     Nombre Usuario no puede superar 14 caracteres
                </div>
                <?php
                }
            }
        }
        if(empty($edad)){
            $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                 Campo Edad vacio, Completelo PorFavor!
            </div>
            <?php
        }
        else{
            if(!is_numeric($edad)){
                $validar = false;
                ?> 
                <div class="alert alert-danger" role="alert">
                    Ingrese su edad, no caracteres
                </div>
                <?php
            }
        }
        if(empty($email)){
            $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                 Campo Email vacio, Completelo PorFavor!
            </div>
            <?php
        }
        else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $validar = false;
                ?> 
                <div class="alert alert-danger" role="alert">
                    Usa example@gmail.com de ejemplo
                </div>
                <?php
            }
        }
        if(empty($contra)){
            $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                 Campo Contraseña vacio, Completelo PorFavor!
            </div>
            <?php
        }
        else{
            if(strlen($contra) <= 8){
                $validar = false;
            ?> 
            <div class="alert alert-danger" role="alert">
                Usa 8 Caracteres como minimo para la contraseña
            </div>
            <?php
            }
        }

        $consulta = "INSERT INTO usuario (nombreusuario, apellidousuario, nombredelusuario,
        edadusuario, correousuario, contrausuario) VALUES ('$nombre', '$apellido',
        '$usuario', '$edad', '$email', '$contra')";


       if(!$validar == false){
        $ejecutar = mysqli_query($conexion, $consulta);
        ?> 
                <div class="alert alert-success" role="alert">
                    Usuario Registrado Con Exito!
                </div>
                <?php 
            }
           
       }
?>    
       
       

