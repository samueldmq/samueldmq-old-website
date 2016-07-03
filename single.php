<?php 
/*
* Displays the single post entry
*
*/
?>

<?php get_header() ?>
	<?php the_post() ?>
		
		<!-- blog section -->
		<section class="page-section zigzag" >
			<div class="page-section-inner">
			
				<!-- posts list -->
				<div id="posts-list" class="clearfix">
						<?php get_template_part('includes/single-content') ?>
				</div>
				<!-- ENDS posts list -->
					
			</div>
			<!-- ENDS inner section -->
		</section>
		<!-- ENDS blog section -->
			
		<!-- Reply wrapper-->
		<div class="reply-wrapper clearfix">	
			<?php comments_template(); ?>
			<?php comment_form(); ?>
		</div>
		<!-- ENDS Reply wrapper-->
		
	</div>
	<!-- ENDS posts list -->

	<?php if (get_option('ansimuz_fullwidth_blog') != 'true' ) get_sidebar() ?>
	
<?php get_footer() ?>