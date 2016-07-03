<?php

// File responsible for including every option page we need to create

// Options




include('options/general-options.php');
include('options/front-options.php');
include('options/appearance-options.php');
include('options/work-options.php');
include('options/social-options.php');




// metabox

include('meta-boxes/work.php');
get_template_part('options/front-options');