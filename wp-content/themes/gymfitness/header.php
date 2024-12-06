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

      <!-- Renderizando Menu Dinámico -->
      <?php
$args = array(
  'theme_location' => 'menu-principal', // Indico qué menú quiero renderizar
  'container' => 'nav', // Indico qué etiqueta quiero que contenga el menú
  'container_class' => 'menu-principal', // Indico la clase que quiero que tenga el contenedor // Clases de los enlaces
  'menu_class' => 'listado-menu' // Clases de los enlaces
);

wp_nav_menu($args);
?>
    </div>
  </header>