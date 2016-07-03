<?php 
/*
* Displays the single work/portfolio entry
*
*/
?>

<?php get_header() ?>
<?php the_post() ?>

	<?php 
	// Get post meta data
	$work_name = get_post_meta($post->ID, 'ansimuz_work_name', true);
	$work_date = get_post_meta($post->ID, 'ansimuz_work_date', true);
	$work_url = get_post_meta($post->ID, 'ansimuz_work_url', true);
	$work_services = get_post_meta($post->ID, 'ansimuz_work_services', true);
	?>
	
	<!-- work-->
	<section class="page-section zigzag" >
		<div class="page-section-inner">
		<h1 class="heading"><?php the_title() ?></h1>
			<div class="subheading"><?php the_excerpt() ?></div>
		</div>
	
		<?php get_template_part('includes/work-slider') ?>
		
		<div class="page-section-inner clearfix">
			
			<!-- project info -->
			<div class="project-info">
				<?php if(!empty($work_name)): ?>
					<p><strong><?php _e('Client ','ansimuz'); ?></strong><br/><?php echo $work_name ?></p>
				<?php endif  ?>
				<?php if(!empty($work_date)): ?>
					<p><strong><?php _e('Date ','ansimuz'); ?></strong><br/><?php echo $work_date ?></p>
				<?php endif  ?>
				<?php if(!empty($work_url)): ?>
					<p><a href="<?php echo $work_url ?>" target="_blank" ><?php _e('Launch Project','ansimuz'); ?></a></p>
				<?php endif  ?>

			</div>
			<!-- ENDS project info -->
			
			<div class="project-content"><?php the_content() ?></div>
				
			
		
		</div>
		
	</section>
	<!-- ENDS work-->
			
			
			<?php get_template_part('includes/related-projects') ?>
										
<?php get_footer() ?>