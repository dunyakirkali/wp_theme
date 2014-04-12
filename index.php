<?php 
  get_header();
?>
<?php 
  if ( has_post_thumbnail() ) {
    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
    if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		}
  }
?>
    
<div class='row'>
  <a name="mobile-top"></a>
  
  <div id='first' class='columns small-12 medium-6 large-6' style="background: url('<?php echo $thumbnail; ?>') no-repeat center center;">
    <div class='row' id="placeholder_1"></div>
    <div class='row'>
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1' id='caption'>
        <div class='row'>
          <p id='site-title'><?php echo get_bloginfo('name'); ?></p>
        </div>
        <div class='row'>
          <p><?php echo get_bloginfo('description'); ?></p>
        </div>
      </div>
    </div>
    <div class='row' id="placeholder_2"></div>    
    <div class='row show-for-small'>    
      <div id='mobile-menu' class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1'>
        <span class='fa fa-2x fa-flag'></span><a class='dropdown' href="#" data-dropdown="menu-menu"><?php the_title(); ?></a>
        <?php
          $defaults = array(
            'menu' => 'top-menu',
//        	  'walker' => new themeslug_walker_nav_menu
          );
        ?>
        <div data-dropdown-content>
          <?php wp_nav_menu($defaults); ?>
        </div>
      </div>
    </div>
  </div>
  
  <div class='columns small-12 medium-6 large-6' id='second'>
    <a name="top"></a>
    <div class='row hide-for-small hide-for-medium'>    
      <div class='columns small-12 medium-12 large-12'>
        <?php wp_nav_menu('menu=top-menu&after=<span>.</span>'); ?>
      </div>
    </div>
    <div class='row show-for-medium'>    
      <div class='columns medium-6 medium-push-3' id="menu-row">
        <div class='row' data-dropdown="menu-menu-2">    
          <div class='columns medium-2'>
            <span class='fa fa-2x fa-flag'></span>
          </div>
          <div class='columns medium-10' id='menu-link'>
            <a href="#"><?php the_title(); ?></a>
          </div>
          <?php wp_nav_menu('menu=top-menu'); ?>
        </div>
      </div>
    </div>    
    <div class='row'>    
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1'>
        <?php while(have_posts()) : the_post(); ?>
          <div class='page'>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    
    <div class='row'>    
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1'>
        <p>© 2014 Mathilde, All Rights Reserved.</p>
        <a href='#top' class='hide-for-small'>Back to top</a>
        <a href='#mobile-top' class='show-for-small'>Back to top</a>
      </div>
    </div>
  </div>  
</div>




<?php get_footer(); ?>