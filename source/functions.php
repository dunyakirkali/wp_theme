<?php 
	function get_background_image()
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
?>