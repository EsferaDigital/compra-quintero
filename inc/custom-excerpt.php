<?php

// Para modificar el extracto
if(!function_exists('qtr_excerpt_length')):
  function qtr_excerpt_length() {
    return 40;
  }
endif;
add_filter( 'excerpt_length', 'qtr_excerpt_length' );
