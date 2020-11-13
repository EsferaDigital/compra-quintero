<?php
/*
* My hub Theme Functions and Definitions
*
*@link https://developer.wordpress.org(themes/basic/theme-functions)
*
*@package wordpress
*@subpackage hub
*@since 1.0.0
*@version 1.2.0
*/

//Establecer el ancho máximo permitido para cualquier contenido en el tema, como por ejemplo, embeds e imágenes.
if(!isset($content_width)){
  $content_width = 800;
}

//Establecer variables globales y asignar un valor a esas variables

global $font_awesome;
global $animate;
// global $Jquery;
// global $slicknavCSS;
// global $slicknavJS;

$font_awesome = 'https://use.fontawesome.com/releases/v5.7.2/css/all.css';
$animate = 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css';
// $Jquery = 'https://code.jquery.com/jquery-3.4.1.min.js';




// declaramos, registramos y cargamos los css y js
if(!function_exists('qtr_scripts')):
  function qtr_scripts() {
    // Declaramos variables
    global $font_awesome;
    global $animate;
    // global $Jquery;

    // $sweet = 'https://cdn.jsdelivr.net/npm/sweetalert2@8';
    $style = get_stylesheet_uri();

    // Registramos los archivos css

    wp_enqueue_style('iconos', $font_awesome, array(), '5.7.2', 'all' );
    wp_enqueue_style('animate', $animate, array(), '3.7.2', 'all' );
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
    wp_enqueue_style('style', $style, array('normalize'), fileatime(get_template_directory() . '/style.css'), 'all');

    // Registramos los archivos js

    // wp_register_script('Jquery', $Jquery, array(), '3.4.1', true);
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('globaljs', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), fileatime(get_template_directory() . '/js/scripts.js'), true);

  }
endif;
add_action( 'wp_enqueue_scripts', 'qtr_scripts' );

//Creamos Menús
if(!function_exists('qtr_menus')):
  function qtr_menus() {
    register_nav_menus(array(
      'menu_principal' => __('Menú Principal', 'qtr'),
      'menu_secundario' => __('Menú Secundario', 'qtr'),
    ));
  }
endif;
add_action( 'init', 'qtr_menus' );

// Creamos Widgets
if(!function_exists('qtr_register_sidebars')):
  function qtr_register_sidebars() {

    register_sidebar(array(
      'name' => __('Sidebar Principal', 'qtr'),
      'id' => 'sidebar_main',
      'description' => __('Este es el sidebar principal y aparecerá al lado del contenido principal.', 'qtr'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));

    // register_sidebar(array(
    //   'name' => __('Footer Columna I', 'qtr'),
    //   'id' => 'footer_uno',
    //   'description' => __('Columna uno del footer.', 'qtr'),
    //   'before_widget' => '<article id="%1$s" class="Widget %2$s">',
    //   'after_widget' => '</article>',
    //   'before_title' => '<h3>',
    //   'after_title' => '</h3>'
    // ));

    // register_sidebar(array(
    //   'name' => __('Footer Columna II', 'qtr'),
    //   'id' => 'footer_dos',
    //   'description' => __('Columna dos del footer.', 'qtr'),
    //   'before_widget' => '<article id="%1$s" class="Widget %2$s">',
    //   'after_widget' => '</article>',
    //   'before_title' => '<h3>',
    //   'after_title' => '</h3>'
    // ));

    // register_sidebar(array(
    //   'name' => __('Footer Columna III', 'qtr'),
    //   'id' => 'footer_tres',
    //   'description' => __('Columna tres del footer.', 'qtr'),
    //   'before_widget' => '<article id="%1$s" class="Widget %2$s">',
    //   'after_widget' => '</article>',
    //   'before_title' => '<h3>',
    //   'after_title' => '</h3>'
    // ));
  }
endif;
add_action('widgets_init', 'qtr_register_sidebars');

// Añadimos soportes básicos
if(!function_exists('qtr_setup')):
  function qtr_setup() {
    // soporte a imagen destacada
    add_theme_support('post-thumbnails');

    //soporte a etiquetas semánticas de html5
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));

    // soporte a formatos de entrada
    add_theme_support('post-formats', array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ));

    //Soporte a títulos dinámicos de páginas del sitio (para el SEO)
    add_theme_support('title-tag');

    //Soporte para que añada meta que permite interactuar con lectores RSS
    add_theme_support('automatic-feed-links');

    // Remueve meta etiqueta que muestra la versión de wordpress que usamos
    remove_action('wp_head', 'wp_generator');
  }
endif;
add_action('after_setup_theme', 'qtr_setup');

// Soportes adicionales
require_once get_template_directory() . '/inc/custom-header.php';
require_once get_template_directory() . '/inc/custom-excerpt.php';
require_once get_template_directory() . '/inc/custom-description.php';

