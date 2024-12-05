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
  <header class="bg-[#2f2e2e] py-8 px-0">
    <div class="w-[95%] max-w-[120rem] mx-auto flex flex-col lg:flex-row lg:justify-between items-center">

      <!-- Renderizando Imagen -->
      <div class="logo w-6/12 mx-auto flex justify-center items-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
      </div>

      <!-- Renderizando Menu Dinámico -->
      <?php
$args = array(
  'theme_location' => 'main-menu', // Indico qué menú quiero renderizar
  'container' => 'nav', // Indico qué etiqueta quiero que contenga el menú
  'container_class' => 'menu-principal w-6/12 flex justify-center items-center', // Indico la clase que quiero que tenga el contenedor
  'menu_class' => 'hidden w-full lg:flex justify-center lg:justify-around items-center font-mono text-white uppercase text-xl py-2 px-8', // Clases de los enlaces
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

  <?php wp_footer(); ?>
</body>

</html>