<?php 
/*
* Displays all the posts entries
*
*/
?>

<?php get_header() ?>


<!-- blog section -->
<section class="page-section zigzag" >
	<div class="page-section-inner">

		<!-- posts list -->
		<div id="posts-list" class="clearfix">
			<?php get_template_part('includes/loop') ?>
			
			
			<!-- page-navigation -->
			<div class="page-navigation clearfix">
				<div class="nav-next"><?php  next_posts_link(__('OLDER','ansimuz')) ?></div>
				<div class="nav-previous"><?php previous_posts_link(__('NEWER','ansimuz')) ?></div>
			</div>
			<!--ENDS page-navigation -->
			
			
		</div>
		<!-- ENDS posts list -->

	</div><!-- ENDS inner page -->
</section>
<!-- ENDS blog section -->
	
<?php get_footer() ?>