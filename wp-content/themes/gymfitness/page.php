<!-- Obteniendo el Header -->
<?php get_header(); ?>

<main class="contenedor seccion">
  <?php
         get_template_part('template-parts/pagina'); //Obtengo el archivo paginas.php que esta en la carpeta template-parts
    ?>
</main>

<?php wp_footer(); ?>
</body>

</html>