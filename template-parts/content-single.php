<article class="Post">
  <div class="Post-img">
    <?php the_post_thumbnail('blog');?>
  </div>
  <div class="Post-content">
    <h2 class="Post-titulo">
      <?php the_title(); ?>
    </h2>
    <div class="Post-bloques">
      <?php the_content();?>
    </div>
  </div>
</article>