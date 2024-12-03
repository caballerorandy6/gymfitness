<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Fitness</title>
  <!-- Link a la hoja de estilo -->
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="contenedor barra-navegacion">

      <!-- Renderizando Imagen -->
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
      </div>

      <!-- Renderizando Menu Dinamico -->
      <?php
       $args = array(
           'theme_location' => 'main-menu', //Indico que menu especificamente quiero renderizar
           'container' => 'nav', //Indico que etiqueta quiero que contenga el menu
           'container_class' => 'menu-principal' //Indico la clase que quiero que tenga el contenedor
       );
        wp_nav_menu($args);

       ?>
    </div>

  </header>
  <main>
    <?php
        //Loop de wordpress
        while (have_posts()): the_post();
            the_title();
            the_content();

        endwhile;

    ?>
  </main>

</body>

</html>