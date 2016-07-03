<?php 
/*
Template name: Sidebar Page
*/
?>
<?php get_header() ?>
	<?php the_post() ?>
	<!-- posts list -->
	<div id="posts-list" class="cf"> 
	
		<!-- page-content -->
		<div class="page-content entry-content cf">
			<h2 class="heading"><?php the_title() ?></h2>
			<?php the_content() ?>
		</div>
		<!-- ENDS page-content -->
		
	</div>
	<!-- ENDS posts-list -->
	<?php get_sidebar('page') ?>
<?php get_footer() ?>