<?php
    require 'includes/funciones.php';    
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Automóviles en venta</h2>

        <?php 
        $limite = 3;
        include 'includes/templates/anuncios.php'; 
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todos</a>
        </div>
    </section>

    <br>

    <section class="imagen-contacto">
        <h2>Encuentra el auto de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <!-- <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg"> -->
                        <img loading="lazy" src="build/img/ferrari.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Conoce el modelo de Ferrari más barato del mundo</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span> </p>

                        <p>
                        Olvidado por muchos, despreciado por otros, el Ferrari Mondial es hoy por hoy el modelo de la marca italiana más accesible, aunque no para cualquier bolsillo
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <!-- <source srcset="build/img/blog2.webp" type="image/webp"> -->
                        <!-- <source srcset="build/img/blog2.jpg" type="image/jpeg"> -->
                        <img loading="lazy" src="build/img/Noticia.png" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Autos a hidrógeno, ¿serán una alternativa viable?</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span> </p>

                        <p>
                        Ante la desaparición inminente de los autos de combustión interna y la limitada autonomía de los autos eléctricos, los autos a hidrógeno surgen como alternativa
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y el automóvil que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Angel Martínez</p>
            </div>
        </section>
    </div>

<?php
    incluirTemplate('footer');
?>