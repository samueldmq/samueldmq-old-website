<?php
/*
* Content for the work archives, tags and categories
*
*/
?>


<!-- work-->
<section class="page-section zigzag " >
	<div class="page-section-inner">
	<h1 class="heading"><?php echo get_option('ansimuz_work_title') ?></h1>
		<div class="subheading"><?php echo get_option('ansimuz_work_desc') ?></div>
	
		<?php get_template_part('includes/work-cat-filter') ?>
			
		<!-- work list -->
		<div id="work-container" class="work-list"  >
			
			<?php 
			$args = array(
				'post_type' => 'work',
				'posts_per_page'=> -1,
				'orderby' => 'id'
			);
			
			
			
			// do the query
			$the_query = new WP_Query( $args );
			
			 ?>
			 
			 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					
					<!-- item -->
					 <?php $the_categories = get_the_terms($post->ID, 'work_category'); ?>
					 <div class="mix <?php foreach($the_categories as $cat) {  echo $cat->slug . ' ';} ?>">
						<?php get_template_part('includes/work-thumbnail') ?>
						<a href="<?php the_permalink() ?>"  class="title"><?php the_title() ?> <?php foreach($the_categories as $cat) {  echo $cat->slug . '  -  ';} ?></a>
					</div>
					<!-- ENDS item -->
					
					<?php endwhile ?>
			
			

		</div>
		<!-- ENDS work list -->	
		
	</div>
	<!-- ENDS page section inner-->
		
</section>
<!-- ENDS work-->


<?php get_template_part('includes/testimonials') ?>


<?php wp_reset_postdata(); ?>
