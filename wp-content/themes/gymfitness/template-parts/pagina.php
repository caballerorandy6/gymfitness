<?php

//Loop de wordpress
    while (have_posts()): the_post();

           the_title('<h1 class="text-center texto-primary">', '</h1>'); //Agrego etiquetas h1 al titulo

           if(has_post_thumbnail()){ //Verifico si el post tiene una imagen destacada y si no la tiene no renderizo nada
           the_post_thumbnail('full', array('class' => 'imagen-destacada')); //Agrego la imagen destacada y la renderiza en la pagina o post, le agrego un tamano y una clase
      }

            the_content();
    endwhile;

?>