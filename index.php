<?php get_header(); ?>

<div id='container'>
  <div id='left'>
    <div id='caption'>
      <p>MATHILDE</p>
      <p>Atelier de couture</p>
    </div>
  </div>
  
  <div id='right'>
    <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
    
    <div id='copyright'>
      <p>© 2014 Mathilde, All Rights Reserved. Back to top</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>