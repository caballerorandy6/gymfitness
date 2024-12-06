<?php

function gymfitness_setup(){
 //Habilitar imagenes destacadas cuando editas una pagina o post
 add_theme_support("post-thumbnails");
}
add_action('after_setup_theme', 'gymfitness_setup');

//Funcion para crear menu dinamico con un Hook de Wordpress, puedo crear varios menus
function gymfitness_menus() {
    register_nav_menus(array(
        'main-menu' => __( 'Main Menu', 'gymfitness' ),
        'social-networks-menu' => __( 'Social Networks Menu', 'gymfitness' )
    ));
}
//Hook de Wordpress, init es un hook que se ejecuta cuando wordpress inicializa
add_action( 'init', 'gymfitness_menus' );

//Instalando Tailwind
// function enqueue_tailwind(){
//     wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css');
// }

// add_action('wp_enqueue_scripts', 'enqueue_tailwind');


//Funcion para cargar los estilos
function gymfitness_scripts_styles() {
    // Cargando Normalize
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');

    //Cargando hoja de estilos
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

//Hook de Wordpress, wp_enqueue_scripts es un hook que se ejecuta cuando wordpress carga los scripts y estilos
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

?>