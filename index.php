<?php get_header(); ?>
<?php 
// This doesn't belong here
  if ( has_post_thumbnail() ) {
    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
    if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		}
  }
?>
    
<div class='row' id='main-row'>
  
  <div id='first' class='columns small-12 medium-6 large-6' style="background: url('<?php echo $thumbnail; ?>') no-repeat center center;">
    <div class='row' id="placeholder_1"></div>
    <div class='row' id="caption_row">
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1' id='caption'>
        <div class='row'>
          <p id='site-title' class='site-title-font'><?php echo get_bloginfo('name'); ?></p>
        </div>
        <div class='row'>
          <p class='site-subtitle-font'><?php echo get_bloginfo('description'); ?></p>
        </div>
      </div>
    </div>
    <div class='row' id="placeholder_2"></div>    
    <div class='row show-for-small'>    
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1 mobile-menu'>
        <span class='fa fa-bars menu-icon'></span><a class='dropdown' href="#" data-dropdown="menu-menu"><?php the_title(); ?></a>
        <div data-dropdown-content>
          <?php wp_nav_menu('menu=top-menu'); ?>
        </div>
      </div>
    </div>
  </div>
  
  <div class='columns small-12 medium-6 large-6' id='second'>
	
    <div class='row hide-for-small hide-for-medium' id='large-menu'>    
      <div class='columns small-12 medium-12 large-12'>
        <?php wp_nav_menu('menu=top-menu&after=<span>·</span>'); ?>
      </div>
    </div>
	
    <div class='row show-for-medium'>    
      <div class='columns medium-6 medium-push-3 mobile-menu-font mobile-menu' id="menu-row">
        <span class='fa fa-bars menu-icon'></span><a href="#" data-dropdown="menu-menu-2"><?php the_title(); ?></a>
        <div data-dropdown-content>
          <?php wp_nav_menu('menu=top-menu'); ?>
        </div>
      </div>
    </div>    
	
    <div class='row'>    
      <div class='columns small-10 medium-10 large-8 small-push-1 medium-push-1 large-push-2'>
        <?php while(have_posts()) : the_post(); ?>
          <div class='page'>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
    
    <div class='row' id='copyright-div'>    
      <div class='columns small-10 medium-10 large-8 small-push-1 medium-push-1 large-push-2'>
        <p id='copyright'>© 2014 Mathilde, All Rights Reserved.</p>
        <a id='top' href='#top' class='hide-for-small'>Back to top</a>
        <a id='mobile-top' href='#mobile-top' class='show-for-small'>Back to top</a>
      </div>
    </div>
	
  </div>  
</div>

<?php get_footer(); ?>
