
<?php get_header(); ?>
  <div class="Banner-inicio">
    <img src="<?php echo get_template_directory_uri() . '/img/compra-en-quintero.png'; ?>" alt="Logo">
    <p>
      Catálogo online para comercios de Quintero.
    </p>
  </div>
  <div class="contenedor Categorias">
    <a href="https://compraenquintero.cl/?search_62936=Restaurantes%20y%20comida%20preparada">
      <p>Restaurantes y comida preparada</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/restaurantes.jpg'; ?>" alt="Restaurantes">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Tienda%20de%20alimentos%20y%20bebidas">
      <p>Tienda de alimentos y bebidas</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/alimentos-bebidas.jpg'; ?>" alt="Tienda de alimentos y bebidas">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Otras%20tiendas">
      <p>Otras tiendas</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/otras-tiendas.jpg'; ?>" alt="Otras tiendas">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Veh%C3%ADculos">
      <p>Vehículos</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/vehiculos.jpg'; ?>" alt="Vehículos">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Salud">
      <p>Salud</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/salud.jpg'; ?>" alt="Salud">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Mascotas%20y%20animales">
      <p>Mascotas y animales</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/mascotas.jpg'; ?>" alt="Mascotas y animales">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Servicios">
      <p>Servicios</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/servicios.jpg'; ?>" alt="Servicios">
    </a>
    <a href="https://compraenquintero.cl/?search_62936=Talleres">
      <p>Talleres</p>
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/talleres.jpg'; ?>" alt="Talleres">
    </a>
  </div>
  <div class="contenedor Container-central">
  <?php
    while(have_posts()): the_post();
    the_content();
    endwhile;
  ?>
  </div>
<?php get_footer(); ?>