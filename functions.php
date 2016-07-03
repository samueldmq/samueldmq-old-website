<?php

#--------------------------------------------------------------------
#
#	NEW OPTIONS PANEL FRAME WORK
#
#--------------------------------------------------------------------


// Theme suport

add_theme_support('post-thumbnails');
	
// Theme version

$curr_theme = wp_get_theme();
$theme_version = trim($curr_theme->Version);
if(!$theme_version) $theme_version = "1.0";

//Define constants:

define('ANSIMUZ_FUNCTIONS', get_template_directory() . '/functions/');
define('ANSIMUZ_POST_TYPES', get_template_directory() . '/functions/custom-post-types/');
define('ANSIMUZ_INCLUDES', get_template_directory() . '/includes/');
define('ANSIMUZ_THEME', 'Doke');
define('ANSIMUZ_THEME_DIR', get_template_directory_uri());
define('ANSIMUZ_THEME_DOCS', 'http://luiszuno.com/forums/');
define('ANSIMUZ_THEME_LOGO', ANSIMUZ_THEME_DIR.'/img/logo.png');
define('ANSIMUZ_MAINMENU_NAME', 'general-options');
define('ANSIMUZ_THEME_VERSION', $theme_version);

// INCLUDES ---------------------------------------------------------//



// Load All-Purpose
require_once(get_template_directory() . '/php/aq_resizer.php');
include_once(ANSIMUZ_FUNCTIONS.'custom-functions.php');

// Custom post types
require_once(ANSIMUZ_POST_TYPES . 'work.php');
include_once(ANSIMUZ_FUNCTIONS.'custom-functions-tgm.php');

// Admin enqueue scripts
if(is_admin()):
	require_once(ANSIMUZ_FUNCTIONS . 'admin-helper.php');
	require_once(ANSIMUZ_FUNCTIONS . 'ajax-image.php');
	
	// Classes
	require_once(ANSIMUZ_FUNCTIONS . 'generate-meta-box.php');
	require_once(ANSIMUZ_FUNCTIONS . 'generate-options.php');
	
	// Options
	require_once(ANSIMUZ_FUNCTIONS . 'include-options.php' );
endif;

add_action('admin_head', 'ansimuz_admin_head');



#--------------------------------------------------------------------
#
#	GENERAL
#
#--------------------------------------------------------------------

// Video and Images Max Width ----------------------------------------------------//

if ( ! isset( $content_width ) ) $content_width = 960;

// Localization ----------------------------------------------------//

load_theme_textdomain( 'ansimuz', get_template_directory() . '/languages/' );

// SHORTCUT CONSTANTS ----------------------------------------------------//

define('CSSPATH', get_template_directory_uri() . "/css/");
define('JSPATH', get_template_directory_uri() . "/js/");
define('IMGPATH', get_template_directory_uri() . "/img/");

// ADD ADMIN JS SCRIPTS ----------------------------------------------------//

function load_custom_wp_admin_scripts(){
    
    // scripts
	//wp_enqueue_script('jquery-ui-encore');
	wp_enqueue_script('jquery-ui-sortable');
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_scripts');

// ADD FRONTEND CSS and JS SCRIPTS ----------------------------------------------------//

function load_js_scripts() {
    if ( !is_admin() ) {
    	//  JS
    	wp_enqueue_script( 'custom', JSPATH . "/custom.js", array('jquery'), false, true );
		wp_enqueue_script('superfish', JSPATH . '/superfish.js', array('jquery'), false, true);
		wp_enqueue_script('backstretch', JSPATH . '/backstretch.js', array('jquery'), false, true);
		wp_enqueue_script('swiper', JSPATH . '/idangerous.swiper.js', array('jquery'), false, true);
		wp_enqueue_script('mixitup', JSPATH . '/jquery.mixitup.min.js', array('jquery'), false, true);
		wp_enqueue_script('cycle2', JSPATH . '/jquery.cycle2.js', array('jquery'), false, true);
		
		
		if( is_singular() ) wp_enqueue_script( 'comment-reply' ); // loads the javascript required for threaded comments
		
		
		// get INNER PAGE bakcground
		$ansimuz_inner_page_bg = (get_option('ansimuz_inner_page_bg') == "" ) ? IMGPATH . "dummies/page-bg.jpg" : get_option('ansimuz_inner_page_bg') ;
		
		// Get front page backgrounds
		$ansimuz_front_page_bg1 = (get_option('ansimuz_front_page_bg1') == "" ) ? IMGPATH . "slides/01.jpg" : get_option('ansimuz_front_page_bg1') ;
		$ansimuz_front_page_bg2 = (get_option('ansimuz_front_page_bg2') == "" ) ? IMGPATH . "slides/02.jpg" : get_option('ansimuz_front_page_bg2') ;
		
		$ansimuz_front_page_bg_duration = (get_option('ansimuz_front_page_bg_duration') == "" ) ? 4000 : get_option('ansimuz_front_page_bg_duration') ;
		
		
		
		// declare javascripts vars to be used in the js file 
		// http://pippinsplugins.com/use-wp_localize_script-it-is-awesome/
		wp_localize_script('custom', 'myJsVars', array( 
			'inner_background' => $ansimuz_inner_page_bg,
			'front_background1' => $ansimuz_front_page_bg1,
			'front_background2' => $ansimuz_front_page_bg2,
			'front_background_duration' => $ansimuz_front_page_bg_duration
		));
		
    }
}
add_action('wp_enqueue_scripts', 'load_js_scripts');





// Remove the autoupdate -----------------------------------//

function ansimuz_remove_themeupdate( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}

add_filter( 'http_request_args', 'ansimuz_remove_themeupdate', 5, 2 );


// Enable support for thumbnails -----------------------------------//

if( function_exists('add_theme_support') ){
	// Image sizes
	add_image_size( 'post-feature-image', 610, 9999, false ); 
}

add_filter('post_thumbnail_html', 'thumbnail_html', 10, 3);
function thumbnail_html($html, $post_id, $post_image_id){
	$link = get_permalink($post_id);
	$title = esc_attr(get_post_field('post_title', $post_id));
	$html = '<a href="'.$link.'" title="'.$title.'">'.$html.'</a>';
	return $html;
}


// Enable excerpt support for pages -----------------------------//

add_post_type_support( 'page', 'excerpt' );

// theme support -----------------------------------------------*/

add_theme_support( 'automatic-feed-links' );

//  sidebar & footer ----------------------------------------------------//

if ( function_exists('register_sidebar') ){
	
	
	register_sidebar(array(
		'name' => 'Footer 1',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'Footer 2',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'Footer 3',
		'before_widget' => '<div class="widget-block">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="heading">',
		'after_title' => '</h4>',
	));
	
}





// Enable Nav Menu -----------------------------//

if ( function_exists( 'add_theme_support' ) )
add_theme_support ('nav-menus');


function register_ansimuz_menus() {
	register_nav_menus  (array(
		'main'   => __('Main Navigation', 'top_navigation' )
	));
}
add_action('init', 'register_ansimuz_menus' );


// adds nav menu if exists if not add regular menu
function ansimuz_menu(){
	
	wp_nav_menu( array(
			'menu' => 'main_menu',
			'menu_id' => 'main-nav',
			'menu_class' => 'sf-menu',
			'theme_location' => 'main',
			'link_before' => '<span>',
			'link_after' => '</span>',
			'fallback_cb' => 'regular_ansimuz_menu'
	));
}

function regular_ansimuz_menu(){
	?>
	<ul id="main-nav" class="sf-menu">
		<?php 
		$args = array('title_li' => '',
						'sort_column' => 'menu_order',
						'show_home' => 0,
						'link_before' => '<span>',
						'link_after' => '</span>'
						);
		wp_list_pages($args)
		?>
	</ul>
	<?php
}
