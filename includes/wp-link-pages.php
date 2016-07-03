<?php 
/*
* For paginated posts
*
*/ ?>

<?php wp_link_pages(array('before' => '<p class="wp-link-pages"><strong>'.__('Pages:', 'ansimuz').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>