<?php 
	/*
	* Displays the header either for front or inner pages.
	*
	*/
	
	$logo_path = ( get_option('ansimuz_logo') != '' ) ? get_option('ansimuz_logo') : ANSIMUZ_THEME_LOGO;
?>

<?php if( is_front_page() ) :  ?>
	
	<div  id="home-title" class="main-title">
		<img src="<?php echo $logo_path ?>"  alt="<?php bloginfo('name') ?>"class="main-logo" />
		
		
			<h1 ><?php echo stripcslashes(get_option('ansimuz_headline')) ?></h1>
			<h2> <?php echo stripcslashes(get_option('ansimuz_tagline')) ?></h2>
		
	</div>
	
	<?php else:  ?>
		<div  id="page-title" class="main-title">
		<img src="<?php echo $logo_path ?>"  alt="<?php bloginfo('name') ?>"class="main-logo" />
		
		
		
	</div>

<?php endif;  ?>