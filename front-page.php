
<?php get_header(); ?>
  <div class="Banner-inicio">
    <img src="<?php echo get_template_directory_uri() . '/img/compra-en-quintero.png'; ?>" alt="Logo">
    <p>
      Catálogo online para comercios de Quintero.
    </p>
  </div>
  <div class="contenedor Container-central">
  <?php
    while(have_posts()): the_post();
    the_content();
    endwhile;
  ?>
  </div>
<?php get_footer(); ?>