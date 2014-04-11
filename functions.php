<?php

function register_top_menu() {
  register_nav_menu('top-menu', __( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );

?>