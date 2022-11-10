<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Auto</title>
    <link rel="stylesheet" href="/ventaAutos1/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <!-- <img src="/ventaAutos1/build/img/logo.svg" alt="Logotipo de Bienes Raices"> -->
                    <p style="font-size: 4rem; margin: 0; color:white" >FAST <span> <b> AUTO</b></span></p>
                </a>

                <div class="mobile-menu">
                    <img src="/ventaAutos1/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/ventaAutos1/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
                
            </div> <!--.barra-->

            <?php 
            if($inicio){
                echo '<h1>Rueda como nunca antes</h1>';
            }
             ?>


        </div>
    </header>