<?php 

// Prints the social link if its set
function ansimuz_set_social($name){
	$lname = strtolower($name);
	$link = get_option('ansimuz_social_' . $lname);
	if(!empty($link)){
	?>
		<a class="<?php echo $lname ?>" href="<?php echo $link ?>"></a>		
	<?php	
	}
}

?>


<!-- social -->
<section class="page-section" >
	<!--  social icons -->
	<div class="icons ">
	    <?php ansimuz_set_social('twitter') ?>
	    <?php ansimuz_set_social('dribbble') ?>
	    <?php ansimuz_set_social('rss') ?>
	    <?php ansimuz_set_social('pinterest') ?>
	    <?php ansimuz_set_social('digg') ?>
	    <?php ansimuz_set_social('flickr') ?>
	    <?php ansimuz_set_social('forrst') ?>
	    <?php ansimuz_set_social('vimeo') ?>
	    <?php ansimuz_set_social('reddit') ?>
	    <?php ansimuz_set_social('linkedin') ?>
	    <?php ansimuz_set_social('facebook') ?>
	    <?php ansimuz_set_social('paypal') ?>
	    <?php ansimuz_set_social('stumbleupon') ?>
	    <?php ansimuz_set_social('email') ?>
	    <?php ansimuz_set_social('deviantart') ?>
	    <?php ansimuz_set_social('netvibes') ?>
	    <?php ansimuz_set_social('yahoo') ?>
	    <?php ansimuz_set_social('github') ?>
	    <?php ansimuz_set_social('addthis') ?>
	    <?php ansimuz_set_social('behance') ?>
	    <?php ansimuz_set_social('blogger') ?>
	    <?php ansimuz_set_social('slashdot') ?>
	    <?php ansimuz_set_social('technorati') ?>
	    <?php ansimuz_set_social('googleplus') ?>
	    <?php ansimuz_set_social('apple') ?>
	    <?php ansimuz_set_social('myspace') ?>
	    <?php ansimuz_set_social('sharethis') ?>
	    <?php ansimuz_set_social('yelp') ?>
	    <?php ansimuz_set_social('delicious') ?>
	    <?php ansimuz_set_social('lastfm') ?>
	    <?php ansimuz_set_social('youtube') ?>
	    <?php ansimuz_set_social('skype') ?>
	    <?php ansimuz_set_social('tumblr') ?>
	    <?php ansimuz_set_social('aim') ?>
	    <?php ansimuz_set_social('google') ?>
	</div>
	<!-- ENDS social icons -->
</section >
<!-- ENDS social -->