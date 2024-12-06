<!-- Obteniendo el Header -->
<?php

//Se agrega el template name para que aparezca en el editor de wordpress
/*  
 * Template Name: Contenido Centrado (No Sidebars)
*/

get_header(); ?>


<main class="contenedor seccion contenido-centrado">
  <?php
       get_template_part('template-parts/pagina'); //Obtengo el archivo paginas.php que esta en la carpeta template-parts
    ?>
</main>

<?php wp_footer(); ?>
</body>

</html>