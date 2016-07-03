<!-- filter -->
<ul id="work-filter">
	<li><strong>Filter: </strong></li>
    <li class="filter" data-filter="all">All</li>
    <?php
	$taxonomy = 'work_category';	// for work posts
	$args = array( 'taxonomy' => $taxonomy );
	$categories = get_categories( $args );
	foreach($categories as $cat){
		echo '<li class="filter" data-filter="'.$cat->slug.'">'.$cat->slug.'</li>';
	}
?>
</ul>
<!-- ENDS filter -->

