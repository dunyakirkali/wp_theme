<?php 
	function get_background_featured_image()
	{
		  if ( has_post_thumbnail() ) {
		    $post_image_id = get_post_thumbnail_id($post_to_use->ID);
		    if ($post_image_id) {
					$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
					if ($thumbnail) (string)$thumbnail = $thumbnail[0];
				}
		  }
	    return $thumbnail;
	}

	function medium_menu() {
    $ret = '';
		$options = array(
			'menu'            => 'top-menu',
			'container_id'    => 'medium-menu-items'
		);
    
    return wp_nav_menu($options);
  }
    	
	function small_menu() {
		$args = array(
			'sort_order' => 'ASC',
			'sort_column' => 'order',
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
		return $ret;
	}
?>