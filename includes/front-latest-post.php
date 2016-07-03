<?php 
/*
* Displays  post on the front page  
*
*/ ?>

<?php 

if ( get_option('ansimuz_recent_display') == 'true') return;

$args = array(
	'post_type' => 'post',
	'posts_per_page'=> get_option('ansimuz_recent_nposts', 3 ),
	'orderby' => 'id'
);

$categories_filter = array( 'work_category' => get_option('ansimuz_featured_categories') );


// do the query
$the_query = new WP_Query( $args );

?>


<!-- latest post -->
<section class="page-section zigzag" >
	<div class="page-section-inner">
	
		<h2 class="heading">Latest Post</h2>
		<!-- posts list -->
		<div id="posts-list" class="clearfix"> 
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			
				<?php get_template_part('includes/content') ?>
			
			
			<?php endwhile ?>
			
			
		</div>
		<!-- ENDS posts list -->
	</div><!-- ENDS page-section-inner -->
	
</section>
<!-- ENDS latest post-->

<?php wp_reset_postdata(); ?>