<article id="post-<?php the_ID(); ?>" class="clearfix">
	<div class="feature-image">
		<?php get_template_part('includes/post-thumbnail') ?>
	</div>
	<div class="entry-title">
		<div class="entry-date"> <?php the_time('F d, Y') ?></div>
		<div class="entry-heading" ><?php the_title() ?></div>
	</div>
	<div class="entry-content">
		<?php the_content() ?>
	</div>	
	
	<!-- sharebox -->
	<div class="share-post"> <a class="facebook" href="http://www.facebook.com/sharer.php" target="blank"> Like</a> / <a href="http://twitter.com/home?status=" target="blank" class="twitter">Tweet</a> </div>
	<!-- ENDS  sharebox -->
							
</article>