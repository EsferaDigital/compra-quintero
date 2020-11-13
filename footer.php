  <footer class="site-footer">
    <section class="Footer-container">
      <div class="Footer-container-item imagen">
        <a href="https://www.muniquintero.cl/" target="_blank">
          <img class="logo-footer" src="<?php echo get_template_directory_uri() . '/img/logo-municipio.png'; ?>" alt="<?php bloginfo('name'); ?>">
        </a>
      </div>
      <div class="Footer-container-item gnl">
        <a href="http://www.gnlquintero.com/" target="_blank">
          <img class="logo-gnl" src="<?php echo get_template_directory_uri() . '/img/logo-gnl.png'; ?>" alt="Logo GNL">
        </a>
      </div>
    </section>
    <div class="Card-copy">
      <p class="Small-text">Copyright &copy; <?php echo date('Y');?> Compra en Quintero.</p>
    </div>
    <div class="Box-creditos">
      <p class="Small-text">Desarrollado por<a class="Link-text-creditos" href="https://esferadigital.cl" target="_blank"> esferadigital.cl</a></p>
    </div>
  </footer>
  <?php wp_footer();?>
</body>
</html>