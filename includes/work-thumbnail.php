<?php
	// Renders the image for the work post
	$image_url = ansimuz_post_image();
	
	if(!$image_url) 
		return;
	$image_url = aq_resize($image_url, 672);
	
	
?>		

<a href="<?php the_permalink() ?>" class="thumb" >
	<img src="<?php echo $image_url ?>" alt="<?php the_title() ?>" />
</a>

