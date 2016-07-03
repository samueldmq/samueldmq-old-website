<?php

/*
*
* Displays the post related to this category a these posts
*
*/

$custom_post = 'work';
$args = array(
	'fields' => 'ids'
); 
$tags = wp_get_post_terms($post->ID, 'work_tags', $args);
$cats = wp_get_post_terms($post->ID, 'work_category', $args);

 
    $related_query = new wp_query(array(
        'tax_query'         => array(
        						'relation' => 'OR',
                                array(
                                    'taxonomy'  => 'work_category',
                                    'field'     => 'id',
                                    'terms'     => $cats
                                ),
                                 array(
                                    'taxonomy'  => 'work_tags',
                                    'field'     => 'id',
                                    'terms'     => $tags
                                )
                            ),
        'post_type'         => $custom_post, 
        'post__not_in'      => array($post->ID), 
    //  'order'             => 'ASC', 
        'orderby'           => 'rand', 
        'showposts'         => 3, 
        'caller_get_posts'  => 1
    ));

?>

<?php if($related_query->have_posts()): ?>




<!-- similar projects-->
<section class="page-section-white" >

	<div class="related-projects-holder">
		<div class="heading"><?php _e('Similar Projects','ansimuz'); ?></div>
		<ul class="related-projects clearfix">
			
			<?php while($related_query->have_posts()) : $related_query->the_post();?>
        	
        	<li>
				
				
				<a href="<?php the_permalink() ?>" class="thumb"><?php get_template_part('includes/work-thumbnail')?></a>
				
				
				<a href="<?php the_permalink() ?>" class="heading"><?php the_title() ?></a>
			</li>
			
			<?php endwhile ?>
			
		</ul>
	</div>	
</section>
<!-- ENDS similar projects-->
			
			

<?php endif ?>


<?php wp_reset_query() ?>

