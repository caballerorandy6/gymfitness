<!-- Obteniendo el Header -->
<?php get_header(); ?>

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