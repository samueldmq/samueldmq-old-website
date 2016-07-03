<?php 
	$img_size_w = 672;
	$img_size_h = 400;
?>

<?php
	// Renders the image for the posts
	$image_url = ansimuz_post_image();
	if(!$image_url) 
		return;
	$image_url = aq_resize($image_url, $img_size_w, $img_size_h);
?>
<img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />
