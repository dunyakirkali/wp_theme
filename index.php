<?php get_header(); ?>

<div id='container'>
  <div id='left'>
    <div id='image'>
      <?php the_post_thumbnail(); ?>
    </div>
    <div id='caption'>
      <p><?php echo get_bloginfo('name'); ?><?php echo get_bloginfo('description'); ?></p>
    </div>
  </div>
  
  <div id='right'>
    <div id='right-container'>
      <?php wp_nav_menu('menu=top-menu&after=<span>.</span>'); ?>
    
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
</div>

<?php get_footer(); ?>