<?php 
	$img_size = 900;
?>

<?php
	// Renders the image for the posts
	$image_url = ansimuz_post_image();
	if(!$image_url) 
		return;
	$image_url = aq_resize($image_url, $img_size);
?>
<img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />
