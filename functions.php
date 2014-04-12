<?php

class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul data-dropdown-content class=\"sub-menu\">\n";
  }
}

function register_top_menu() {
  register_nav_menu('top-menu', __( 'Top Menu' ));
}



add_action( 'init', 'register_top_menu' );
add_theme_support( 'post-thumbnails' );

?>