<?php 
/*
* Displays the page
*
*/
?>

<?php get_header() ?>
	<?php the_post() ?>
	<!-- page-content -->
	<section class="page-section zigzag" >
		<div class="page-section-inner entry-content">
			<h2 class="heading"><?php the_title() ?></h2>
			<?php the_content() ?>
			<?php get_template_part('includes/wp-link-pages') ?>
		</div>
	</div>
	<!-- ENDS page-content -->	
<?php get_footer() ?>