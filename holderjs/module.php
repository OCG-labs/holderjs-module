<?php
/**
 * Load Holder.js
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */

if( !function_exists( 'ot_load_holderjs_js' ) ) :
  function ot_load_holderjs_js() {
    if(!is_child_theme()){
      wp_register_script( 'holderjs_js', get_template_directory_uri().'/lib/modules/holderjs/js/holder.js', array( 'jquery' ), '1.3.0', true );
  } else {
      wp_register_script( 'holderjs_js', get_stylesheet_directory_uri().'/lib/modules/holderjs/js/holder.js', array( 'jquery' ), '1.3.0', true );
  }
    wp_enqueue_script( 'holderjs_js' );
  }
  add_action( 'init', 'ot_load_holderjs_js' );

endif;
