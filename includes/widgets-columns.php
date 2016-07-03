<!-- WIDGETS -->
<section class="page-section" >
	<ul  class="widget-cols clearfix">
		<li class="first-col">
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 1')) : ?><?php endif; ?>
		</li>
		
		<li class="second-col">
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 2')) : ?><?php endif; ?>
		</li>
		
		<li class="third-col">
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 3')) : ?><?php endif; ?>
		</li>
		
	</ul>
</section>
<!-- ENDS WIDGETS -->