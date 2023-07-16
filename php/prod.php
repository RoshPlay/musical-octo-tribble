<?php
session_start();
require("Base.php");

?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ||SuperToys|| - Catalogo  </title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/skeleton.css">
        <link rel="stylesheet" href="../css/EstiloH.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="./index.html"><img src="../images/SLogo.png" alt=""></a>
                </div>
            </div>   
            
            <nav>
                <a href="index.html">Inicio</a>
                <a href="Historia.html">Historia</a>
                <a href="Categorias.html">Categorias</a>
                <a href="Avance.html">Avance 1</a>
                <a href="producto.html">Registrar Productos</a>
                <a href="Login.html">Login</a>
                <a href="cliente.html">Registrar Clientes</a>
                <a href="contacto.html">Contactenos</a>
                <a href="Encuesta.html">Encuesta</a>
                <a href="Grupo.html">Informacion del Grupo</a>
            </nav>
        </header>
       

        <div class="six-columns">
            <div class="contenido-hero">
                <h2>Pide tu Juguete favorito</h2>
                <p>Todos los juguetes con Descuento</p>
            </div>
        </div>
            
        </div>   
        

        <div id="lista-cafe" class="container"> 
            <h1 id="encabezado" class="encabezado" >Juguetes</h1>
            <div class="row">
               
            <?php
            $producto = "select * from productos";
				$sql = mysqli_query($miconexion,$producto);
            while ($arreglo = mysqli_fetch_array($sql)) {
            echo '
               
                <div class="four columns">
                    <div class="card">
                    <img src="../Fotos/'.$arreglo['Foto'].'" class="u-full-width">
                        <div class="info-card">
                            <h4>'.$arreglo["Nombre_Producto"].'</h4>
                            <p class="precio"><span class="u-pull-right">'.$arreglo["Precio"].'</span></p>
                            
                            <a href="#" class="u-full-width button-primary button input agregar-carrito">Agregar Al Carrito
                            </a>
                            <a href="#" class="u-full-width button-primary button input agregar-carrito">Detalles</a>
                        </div>
                    </div>
                    <br>
                </div>
            ';
         	}?>
         	
       		</div>
        </div>

        <footer>

            <div class="container-footer-all">
                <div class="container-body">
                    <!--Logo Empresa-->
                    <div class="empresa">
                        <a href="index.html">
                        <img src="../images/SLogo.png">
                        </a>
                    </div>
                    <!--Servicios-->
                    <div class="servicios">
                    <h6> Servicios </h6>
                    <ul class="datos">
                        <li class="op">
                          <a href="#">Mi cuenta</a>
                        </li>
                        <li class="op">
                          <a href="#">Tus Ordenes</a>
                        </li>
                        <li class="op">
                          <a href="#">Contáctenos</a>
                        </li>
                        <li class="op">
                          <a href="#">Información de envíos</a>
                        </li>
                        <li class="op">
                          <a href="#">Términos de Uso</a>
                        </li>
                    </ul>
                    </div>   
                    <!--Información-->
                    <div class="atencion">
                        <h6> Dirección </h6>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste optio natus fugit quos, ad voluptate minus maiores est, sint laboriosam eveniet dolorum deleniti sapiente. Mollitia aperiam sunt recusandae porro voluptatum.
                        </p>
                    </ul class="dire">
                    <h6> Horarios de Atención </h6>
                    <ul class="horario">
                        <li>
                            Lunes a Viernes: 8:00 am - 7:00 pm
                        </li>
                        <li>
                            Sábado: 9:00 am - 6:00 pm    
                        </li>
                        <li>
                            Domingo: 9:00 am - 4:00 pm  
                        </li>
                    </ul>    
                    </div>
                    <!--Redes Sociales-->
                    
                    <div class="redes">
                        <h6>Contactanos</h6>
                    <a target="_blank" class="net" href="#">
                        <img src="../images/facebook.png" width="36px">
                    </a>
                    <a target="_blank" class="net" href="#">
                        <img src="../images/instagram.png" width="36px">
                    </a>
                    <p>
                        WhastApp Tel: 8888-8888
                    </p>
                    <p>
                        Sucursal Tel: 5478-8888
                    </p>
                    </div>
                </div>
            </div>
            <!--Derechos Reservados-->
            <div class="container-footer">
                <div class="copyright">
                    © 2021 Todos los Derechos Reservados | <a href="#">SuperStoys</a>
                </div>
                <div>
                    <div class="informacion">
                        <a href="#">Información Compañia</a> |
                        <a href="#">Privación y Politica</a> |
                        <a href="#">Terminos y Condiciones</a> 
                    </div>
                </div>
            </div>
            </footer>
            <script src="../js/jquery-3.6.0.min.js"></script>
            <script src="js/script.js"></script>
            
    </body>
</html>    