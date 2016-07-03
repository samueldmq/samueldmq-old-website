<!-- Feeds all the posts for the blog page -->


<div>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part('includes/content' ) ?>
<?php endwhile; else:  ?>	
	<?php get_template_part('includes/woops') ?>
<?php endif; ?>

</div>