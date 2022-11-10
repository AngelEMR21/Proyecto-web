<?php

//Importar la conexión
require '../includes/config/database.php';
$db = conectarDB();

//Escribir el query
// $query = "SELECT * FROM autos";

$query = "SELECT autos.id, titulo, precio, imagen, vendedores.nombre, vendedores.apellido FROM
    autos LEFT JOIN vendedores on autos.vendedores_id = vendedores.id";

//Consultar la BD
$resultadoConsulta = mysqli_query($db, $query);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;


//ELIMINACION DE REGISTROS
//Crea las variables solo cuando existe POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    
    if($id){

        //Eliminar el archivo
        $query = "SELECT imagen FROM autos WHERE id = ${id}";
        $resultado = mysqli_query($db, $query);
        $auto = mysqli_fetch_assoc($resultado);

        unlink('../imagenes/' . $auto['imagen']);

        //Eliminar registro de un auto
        $query = "DELETE FROM autos WHERE id=${id}";
        $resultado = mysqli_query($db, $query);

        if($resultado){
            header('Location: /ventaAutos1/admin?resultado=3');
        }

    }
} //ELIMINACION DE REGISTROS

//Incluye un template 
// require '../includes/funciones.php';    
// incluirTemplate('header');
?>

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
                        <a href="../nosotros.php">Nosotros</a>
                        <a href="../anuncios.php">Anuncios</a>
                        <a href="../blog.php">Blog</a>
                        <a href="../contacto.php">Contacto</a>
                    </nav>
                </div>

            </div>
            <!--.barra-->
        </div>
    </header>

    <main class="contenedor seccion">
        <h1>Administrador</h1>

        <?php if (intval($resultado) === 1) : ?>
            <p class="alerta exito">Publicación creada correctamente</p>
        <?php elseif(intval($resultado) === 2): ?>
            <p class="alerta exito">Publicación actualizada correctamente</p>
        <?php elseif(intval($resultado) === 3): ?>
            <p class="alerta exito">Registro eliminado correctamente</p>
        <?php endif;  ?>

        <a href="/ventaAutos1/admin/propiedades/crear.php" class="boton boton-verde">Registrar nuevo auto</a>

        <table class="autos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Vendedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <!-- Mostrar los resultados de la BD -->
                <?php while ($auto = mysqli_fetch_assoc($resultadoConsulta)) : ?>


                    <tr>
                        <td><?php echo $auto['id'];  ?></td>
                        <td><?php echo $auto['titulo'];  ?></td>
                        <td><img src="/ventaAutos1/imagenes/<?php echo $auto['imagen'];  ?>" class="imagen-tabla"></td>
                        <td>$ <?php echo $auto['precio'];  ?></td>
                        <td><?php echo $auto['nombre'] . " " . $auto['apellido'];  ?></td>
                        <td>
                            <br>
                            <a style="border-radius: 1rem" href="/ventaAutos1/admin/propiedades/actualizar.php?id=<?php echo $auto['id'];  ?>" class="boton-amarillo-block">Actualizar</a>
                            <!-- Eliminar - Obtener el id del registro -->
                            <form method="POST" class="w-100">
                            <br>
                            <input type="hidden" name="id" value="<?php echo $auto['id']; ?>">
                            <input type="submit" style="border-radius: 1rem" class="boton-rojo-block" value="Eliminar">
                            </form> <!-- Eliminar -->

                        </td>
                    </tr>

                <?php endwhile; ?>

            </tbody>
        </table>


    </main>


    <br>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="../nosotros.php">Nosotros</a>
                <a href="../anuncios.php">Anuncios</a>
                <a href="../blog.php">Blog</a>
                <a href="../contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados <?php echo date('Y'); ?> &copy;</p>
    </footer>

    <script src="/ventaAutos1/build/js/bundle.min.js"></script>
</body>

</html>

<?php

//Cerrar la conexión de la BD
mysqli_close($db);

// incluirTemplate('footer');
?>