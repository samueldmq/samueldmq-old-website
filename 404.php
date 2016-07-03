<?php 
/*
* Not Found Page
*
*/
?>



<?php get_header() ?>
	<?php the_post() ?>
	<!-- page-content -->
	<section class="page-section zigzag" >
		<div class="page-section-inner entry-content">
			<?php echo get_option('ansimuz_404') ?>
		</div>
	</div>
	<!-- ENDS page-content -->	
<?php get_footer() ?>