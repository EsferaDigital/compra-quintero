<?php

function qtr_lista_restaurantes(){ ?>
  <ul class="listado-blog">
    <?php
      $args = array(
        'post_type' => 'qtr_restaurantes',
        'posts_per_page' => 10
      );
      $restaurantes = new WP_Query($args);
      while($restaurantes->have_posts()): $restaurantes->the_post();
    ?>
    <li class="PostCard">
      <h3 class="PostCard-titulo">
        <?php the_title(); ?>
      </h3>
      <div class="PostCard-img">
        <?php the_post_thumbnail('card');?>
      </div>
      <div class="PostCard-extracto">
        <?php the_excerpt();?>
      </div>
      <div class="PostCard-link">
        <a href="<?php the_permalink(); ?>">
          VER <span>+</span>
        </a>
      </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>
  </ul>
<?php
}