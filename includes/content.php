<article id="post-<?php the_ID(); ?>"    <?php post_class("clearfix"); ?>>
	<div class="feature-image">
		<a href="<?php the_permalink(); ?>" ><?php get_template_part('includes/post-thumbnail') ?></a>
	</div>
	<div class="entry-title">
		<div class="entry-date"> <?php the_time('F d, Y') ?></div>
		<a href="<?php the_permalink(); ?>" class="entry-heading" ><?php the_title() ?></a>
	</div>
	<div class="entry-content">
		<?php the_excerpt() ?>
	</div>	
	<a href="<?php the_permalink(); ?>" class="action-link"><?php _e('READ MORE','ansimuz'); ?></a>	
</article>