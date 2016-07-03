<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right'); ?><?php bloginfo('name'); ?> </title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/initializr.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/idangerous.swiper.css">
	
	
	<?php  if(get_option('ansimuz_responsive') != 'true'): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
	<?php endif; ?>
	
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>

	<script src="<?php echo get_template_directory_uri() ?>/js/modernizr.min.js"></script>
	
	<?php /* Always have wp_head() just before the closing </head> */ wp_head() ?>
</head>
<body <?php body_class(); ?>>

	<?php get_template_part('includes/nav') ?>
	
	
	<!-- main content -->
	<div class="main">

		<?php get_template_part('includes/logo') ?>