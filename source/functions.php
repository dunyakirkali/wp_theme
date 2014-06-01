<?php

  remove_theme_support('post-thumbnails');
	remove_theme_support('post-formats');
	remove_theme_support('custom-background');
	remove_theme_support('custom-header');
	
  add_theme_support('automatic-feed-links');
	
	function hw_get_background_featured_image() {
		$thumbnail = '';
	  if ( has_post_thumbnail() ) {
			$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	  }
    return $thumbnail;
	}
	
	function hw_large_menu() {
  	$options = array(
			'menu'            => 'top-menu',
			'menu_id'         => 'large-menu',
			'after'           => '<span>&#183;</span>',
		);
    wp_nav_menu($options);
    return true;
  }

	function hw_medium_menu() {
    $ret = '';
		$options = array(
			'menu'            => 'top-menu',
			'container_id'    => 'medium-menu-items'
		);
    
    wp_nav_menu($options);
		return true;
  }
    	
	function hw_small_menu() {
		$args = array(
			'sort_order' => 'ASC',
			'sort_column' => 'menu_order',
			'number' => '4'
		); 
    $pages = get_pages($args);
	  $row_count = (count($pages) < 5) ? 1 : 2;
		$current_page_id = get_the_ID();
		$ret = ''; 
		for($i = 0; $i < $row_count; $i++) {
			$slice_from = ($row_count == 1) ? 0 : (($i1 == 0) ? 0 : $i1);
			$slice_to = ($row_count == 1) ? count($pages) : 0;
			$this_rows_pages = array_slice($pages, $slice_from, $slice_to);
		
			$ret .= "<div class='row'>\n";
		
		  foreach($this_rows_pages as $page) {
				$icon_size = 12 / count($pages);
				$page_link = get_page_link($page->ID);
				$link_class = ($current_page_id == $page->ID) ? 'current' : '';
				$icon = get_post_meta($page->ID, "Page Icon", true);
				$icon = ($icon == '') ? 'fa-bars' : $icon; 
		    $ret .= "<div class='columns small-{$icon_size}'>\n";
				$ret .= "<div class='mobile-menu-icon {$link_class}'>\n";
		    $ret .= "<a href='{$page_link}'><span class='fa {$icon} fa-2x'></span></a>\n";
				$ret .= "</div>\n";
		    $ret .= "</div>\n";
		  }
			$ret .= "</div>\n";
		}
		
		echo $ret;
		return true;
	}
?>