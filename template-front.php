<?php 
/*
Template name: Front Page 
*/
?>

<?php get_header() ?>
	<?php the_post() ?>	
	
	<?php get_template_part('includes/front-content') ?>
	<?php get_template_part('includes/front-work') ?>
	<?php get_template_part('includes/front-latest-post') ?>
	
<?php get_footer() ?>

