<!-- testimonial -->
<?php if(get_option('ansimuz_testimonial_quote_1') != "" ): ?>
	<section class="page-section-white clearfix" >
	
		
		<div class="testimonial-holder">
		
			<ul class="testimonial-list  cycle-slideshow"
		    data-cycle-fx="scrollHorz" 
		    data-cycle-timeout="5000"
		    data-cycle-slides="> li"  >
				
				
				<?php if(get_option('ansimuz_testimonial_quote_1') != "" ): ?>
				<li>
					<p class="quote"><?php echo stripcslashes(get_option('ansimuz_testimonial_quote_1')) ?></p>	
					<p class="source"><?php echo stripcslashes(get_option('ansimuz_testimonial_source_1')) ?></p>
				</li>
				<?php endif; ?>
				
				<?php if(get_option('ansimuz_testimonial_quote_2') != "" ): ?>
				<li>
					<p class="quote"><?php echo stripcslashes(get_option('ansimuz_testimonial_quote_2')) ?></p>	
					<p class="source"><?php echo stripcslashes(get_option('ansimuz_testimonial_source_2')) ?></p>
				</li>
				<?php endif; ?>
				
				<?php if(get_option('ansimuz_testimonial_quote_3') != "" ): ?>
				<li>
					<p class="quote"><?php echo stripcslashes(get_option('ansimuz_testimonial_quote_3')) ?></p>	
					<p class="source"><?php echo stripcslashes(get_option('ansimuz_testimonial_source_3')) ?></p>
				</li>
				<?php endif; ?>
				
				
			</ul>
		
		
		</div>
	
		
		
	</section>
<!-- ENDS testimonial -->
<?php endif; ?>