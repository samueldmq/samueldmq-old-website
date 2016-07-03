<?php


#--------------------------------------------------------------------
#
#	Theme custom functions
#
#--------------------------------------------------------------------

// Get the image path from post (meta, featured or content) --------------------------//

function ansimuz_post_image(){
	global $post;
	$image = '';
	
	// Get the image from the post meta box (no used)
	
	//$image = get_post_meta($post->ID, 'aansimuz_post_image', true);
	//if($image) return $image;

	// If the above doesn't exist, get the post thumbnail
	
	$image_id = get_post_thumbnail_id();	
	$image = wp_get_attachment_image_src($image_id, 'full');
	$image = $image[0];
	if($image) 
		return $image;
	
	// If there is still no image, get the first image from the post
	
	//return ansimuz_get_first_image();
	
	
}

// Get the first image in the content of the post -------------------------//

function ansimuz_get_first_image(){
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	
	$first_img="";
	if(isset($matches[1][0]))
		$first_img = $matches[1][0];
	
	return $first_img;
	
}



//CUSTOM EXCERPT LENGTH ------------------------------------------//

function ansimuz_excerpt($len=20, $trim="&hellip;"){
	$limit = $len+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	$num_words = count($excerpt);
	if($num_words >= $len){
		$last_item=array_pop($excerpt);
	}
	else{
	$trim="";
	}
	$excerpt = implode(" ",$excerpt)."$trim";
	echo $excerpt;

}					

// Returns a youtube or vimeo embed code ----------------------------------------------------//

function ansimuz_parse_video($path){
	$parsedUrl  = parse_url($path);
	
	if($parsedUrl['host'] == 'youtube.com' || $parsedUrl['host'] == 'www.youtube.com'){
		// for youtube  
	    $embed	= $parsedUrl['query'];  
	    parse_str($embed, $out);  
	    $embedUrl   = $out['v']; 
	    return  "http://www.youtube.com/embed/$embedUrl"; 
	}
	
	if($parsedUrl['host'] == 'vimeo.com' || $parsedUrl['host'] == 'www.vimeo.com'){
		// for vimeo
		$embed	= $parsedUrl['path'];
		return "http://player.vimeo.com/video$embed";
	}
}

// get Current taxonomy slug ------------------------------------------//

function getCurrentTaxSlug(){
	global $wp_query;
	$cat_obj = $wp_query->get_queried_object();
	return $cat_obj->slug;
}

// get Current taxonomy name  ------------------------------------------//

function getCurrentTaxName(){
	global $wp_query;
	$cat_obj = $wp_query->get_queried_object();
	return $cat_obj->name;
}
