
<?php get_header(); ?>
  <div class="Banner-inicio">
    <img src="<?php echo get_template_directory_uri() . '/img/compra-en-quintero.png'; ?>" alt="Logo">
    <p>
      Catálogo online para comercios de Quintero.
    </p>
  </div>
  <div class="contenedor btn-categorias">
    <?php echo '<a href="'.esc_url(home_url('/')).'" id="showCategorys">Mostrar Categorias</a>'; ?>
  </div>
  <div id="categorias" class="contenedor Categorias">
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Tienda%20de%20alimentos%20y%20bebidas">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/alimentos-bebidas.jpg'; ?>" alt="Tienda de alimentos y bebidas">
      <h4>Tienda de alimentos y bebidas</h4>
      <p>Supermercados, minimercados y almacenes, pescaderias, congelados, panaderías, pastelerías, frutos del país, frutería y verdulería, confitería.</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Otras%20tiendas">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/otras-tiendas.jpg'; ?>" alt="Otras tiendas">
      <h4>Otras tiendas</h4>
      <p>Bazares, cordonerías, librerías, jugueterías, artículos de aseo, vestuario y calzado, celulares, cumpleaños, ferreterías, mueblerías, joyería, artesanías, vidrios y ventanas.</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Restaurantes%20y%20comida%20preparada">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/restaurantes.jpg'; ?>" alt="Restaurantes">
      <h4>Restaurantes y comida preparada</h4>
      <p>Restaurantes, cocinerías, cafeterías, fuente de soda, suchis, pizzería, empanadas, parrilladas, sandwiches y comida al paso, bares y pub.</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Salud">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/salud.jpg'; ?>" alt="Salud">
      <h4>Salud</h4>
      <p>Centros médicos y consultas médicas, consulta enfermería, laboratorios y toma de muestras, farmacia, psicólogo/a, terapias alternativas.</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Veh%C3%ADculos">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/vehiculos.jpg'; ?>" alt="Vehículos">
      <h4>Vehículos</h4>
      <p>Venta de vehículos, arriendo de vehículos y maquinaria, estaciones de servicio, talleres mecánicos, electricos y venta de repuestos.</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Mascotas%20y%20animales">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/mascotas.jpg'; ?>" alt="Mascotas y animales">
      <h4>Mascotas y animales</h4>
      <p>Clínicas y consultas veterinarias, alimentos para mascotas, accesorios para mascotas.</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Servicios">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/servicios.jpg'; ?>" alt="Servicios">
      <h4>Servicios</h4>
      <p>Servicios legales, notarías, conservador de bienes raices, informática y computación, contabilidad, corretaje de propiedades</p>
    </a>
    <a href="http://localhost:8080/CompraQuintero/?search_62936=Talleres">
      <img src="<?php echo get_template_directory_uri() . '/img/categorias/talleres.jpg'; ?>" alt="Talleres">
      <h4>Talleres</h4>
      <p>Reparadora de calzado, carpintería, servicio técnico y electrónica, impresiones y encuadernaciones.</p>
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