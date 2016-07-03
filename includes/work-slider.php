<?php
	/*
	*
	* Retrieve and displays all images 
	*
	*/ 
	
	$args = array( 
		'post_type' => 'attachment', 
		'numberposts' => -1, 
		'post_status' => null, 
		'post_parent' => $post->ID,
		'post_mime_type' => 'image',
		'order' => 'ASC'
	); 
	$attachments = get_posts($args);
?>
		
<div id="project-gallery"><!-- swipper -->
<div class="gallery-container">
	<div class="swiper-container clearfix">
		<div class="swiper-wrapper clearfix">
	    
		
		<!-- Images  -->
		<?php if ($attachments) : ?>
			<?php
				foreach ( $attachments as $attachment ) :
					$this_image = aq_resize($attachment->guid, 672);
			?>
				<div class="swiper-slide"> <img src="<?php echo $this_image ?>" alt="<?php echo $attachment->guid ?>"> </div>
				
			<?php endforeach ?>
		<?php endif ?>	
		<!-- ENDS images -->
		
		
		</div>
	
	</div>
</div>
<!-- ENDS swipper -->


