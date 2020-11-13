<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php qtr_custom_meta_description(); ?>">
  <?php wp_head();?>
</head>
<body <?php body_class(''); ?>>
  <header class="site-header">
    <div class="contenedor">
      <div class="barra-navegacion">
        <div class="logo">
          <?php
            if(has_custom_logo()):
              the_custom_logo();
            else:
              echo'<a href="'.esc_url(home_url('/')).'"></a>';
            endif;
          ?>
        </div>
        <?php
          if(has_nav_menu('menu_principal')):
            wp_nav_menu(array(
              'theme_location' => 'menu_principal',
              'container' => 'nav',
              'container_id' => 'MenuPrincipal',
              'container_class' => 'menu-principal'
            ));
          else:
        ?>
          <h1></h1>
        <?php endif; ?>
      </div>
    </div>
  </header>
