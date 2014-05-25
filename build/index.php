<!doctype html>
<html class="no-js" lang="en">
  <head>
		  <title><?php echo get_bloginfo('name'); ?></title>
	  <meta charset="utf-8" />
	  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
	  <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  	
		  <link href='<?php bloginfo('stylesheet_url'); ?>' rel='stylesheet' type='text/css'>
		  <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/modernizr.js"></script>
  </head>
  
  <body class="index">
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
      <div class='columns small-10 medium-10 large-10 small-push-1 medium-push-1 large-push-1'>
					<?php
						$args = array(
							'sort_order' => 'ASC',
							'sort_column' => 'order',
							'number' => '4'
						); 
			      $pages = get_pages($args);
					  $row_count = (count($pages) < 5) ? 1 : 2;
			 		  $current_page_id = get_the_ID();
			
					  for($i = 0; $i < $row_count; $i++) {
							$slice_from = ($row_count == 1) ? 0 : (($i1 == 0) ? 0 : $i1);
							$slice_to = ($row_count == 1) ? count($pages) : 0;
							$this_rows_pages = array_slice($pages, $slice_from, $slice_to);
				
							echo "<div class='row'>\n";
				
						  foreach($this_rows_pages as $page) {
								$icon_size = 12 / count($pages);
								$page_link = get_page_link($page->ID);
								$link_class = ($current_page_id == $page->ID) ? 'current' : '';
								$icon = get_post_meta($page->ID, "Page Icon", true);
								$icon = ($icon == '') ? 'fa-bars' : $icon; 
						    echo "<div class='columns small-{$icon_size}'>\n";
								echo "<div class='mobile-menu-icon {$link_class}'>\n";
						    echo "<a href='{$page_link}'><span class='fa {$icon} fa-2x'></span></a>\n";
								echo "</div>\n";
						    echo "</div>\n";
						  }
							echo "</div>\n";
					  }
					?>
      </div>
    </div>
  </div>

  <div class='columns small-12 medium-6 large-6' id='second'>

    <div class='row hide-for-small hide-for-medium'>
      <div class='columns large-12'>
	        <?php
				  	$options = array(
			  			'menu'            => 'top-menu',
		  				'menu_id'         => 'large-menu',
							'after'           => '<span>·</span>',
	  				);
				  
						wp_nav_menu($options);
					?>
      </div>
    </div>

    <div class='row show-for-medium'>    
      <div class='columns medium-6 medium-push-3' id='medium-menu'>
				  <span class='fa fa-bars menu-icon'></span><a href="#"><?php the_title(); ?></a>
      </div>
	      <?php 
	 				$options = array(
	 					'menu'            => 'top-menu',
	 					'container_id'    => 'medium-menu-items'
	 				);
				
	 			  wp_nav_menu($options);
	 			?>
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
				<p id='copyright'>&#169; 2014 Mathilde, All Rights Reserved.</p>
		
        <a id='top' href='#' class='hide-for-small'>Back to top</a>
        <a id='mobile-top' href='#' class='show-for-small'>Back to top</a>
      </div>
    </div>

  </div>  
</div>

		  <script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/all.js"></script>

  </body>
</html>
