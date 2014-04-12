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
        <a href="#" data-dropdown="menu-menu"><?php the_title(); ?></a>
        <?php wp_nav_menu('menu=top-menu'); ?>
      </div>
    </div>
  </div>
  
  <div class='columns small-12 medium-6 large-6' id='second'>
    <div class='row hide-for-small hide-for-medium'>    
      <div class='columns small-12 medium-12 large-12'>
        <?php wp_nav_menu('menu=top-menu&after=<span>.</span>'); ?>
      </div>
    </div>
    <div class='row show-for-medium'>    
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1'>
        <a href="#" data-dropdown="menu-menu-2"><?php the_title(); ?></a>
        <?php wp_nav_menu('menu=top-menu'); ?>
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
        <a href='#top'>Back to top</a>
      </div>
    </div>
  </div>  
</div>




<?php get_footer(); ?>