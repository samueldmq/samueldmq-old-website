<?php 
/*
* Displays  work post on the front page  
*
*/ ?>

<?php 

if ( get_option('ansimuz_featured_display') == 'true') return;

$args = array(
	'post_type' => 'work',
	'posts_per_page'=> get_option('ansimuz_featured_nposts', 1 ),
	'orderby' => 'id',
	 'work_category' => get_option('ansimuz_featured_categories') 
);



// do the query
$the_query = new WP_Query( $args );

?>


<!-- work -->
<section class="page-section-odd " >
	<div class="page-section-inner-no-margin">
		<h2 class="heading"><?php _e('Recent Work','ansimuz'); ?></h2>
		<div class="subheading"><?php _e('Take a look at our recent work','ansimuz'); ?></div>
	</div>
	
	<!-- swipper -->
	<div class="gallery-container">
		<div class="swiper-container clearfix">
			<div class="swiper-wrapper clearfix">
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
				<div class="swiper-slide">
					<a href="<?php the_permalink() ?>" ><?php get_template_part('includes/front-work-thumb') ?></a>
				</div>
			<?php endwhile ?>
				
			
			 </div>
		
		</div>
	</div>
	<!-- ENDS swipper -->

	<div class="page-section-inner">
		<p><?php echo get_option('ansimuz_featured_work_content')  ?> </p>
	</div>
	
</section>
<!-- ENDS work -->

<?php wp_reset_postdata(); ?>