<?php

//Funcion para crear menu dinamico con un Hook de Wordpress, puedo crear varios menus
function gymfitness_menus() {
    register_nav_menus(array(
        'main-menu' => __( 'Main Menu', 'gymfitness' ),
        // 'social-networks-menu' => __( 'Social Networks Menu', 'gymfitness' )
    ));
}
//Hook de Wordpress, init es un hook que se ejecuta cuando wordpress inicializa
add_action( 'init', 'gymfitness_menus' );

//Funcion para cargar los estilos
function gymfitness_scripts_styles(){
 wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

//Hook de Wordpress, wp_enqueue_scripts es un hook que se ejecuta cuando wordpress carga los scripts y estilos
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');


?>