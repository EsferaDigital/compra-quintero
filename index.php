<?php
// Archivo principal
get_header(); ?>
<div class="contenedor Container-central">
  <?php while(have_posts()): the_post();
      the_content();
    endwhile;
  ?>
</div>
<?php get_footer();