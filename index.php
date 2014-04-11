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
    
    <div>
      <?php while(have_posts()) : the_post(); ?>
        <div class='page'>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
    
    <div id='copyright'>
      <p>© 2014 Mathilde, All Rights Reserved. Back to top</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>