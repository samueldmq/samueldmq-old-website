<?php

/*
 *
 * Template for the Social options
 *
 */ 

// Information

$info = array(
	'name' => 'social-options',  // The options page identifier
	'pagename' => 'social-options', // The page slug
	'title' => 'Social',
	'sublevel' => 'yes'
);

// Options and array of arguments


$icon_path = get_template_directory_uri() . "/img/social-icons/";

$options = array(
	
	
	// Social links
	
	array(
		"type" => "heading",
		"name" => "Social Links" 	
	),
	
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."twitter.png' alt='icon'  /> </div>Twitter ",
		"id" => "ansimuz_social_twitter", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."dribbble.png' alt='icon'  /> </div>Dribbble ",
		"id" => "ansimuz_social_dribbble", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."rss.png' alt='icon'  /> </div>Rss ",
		"id" => "ansimuz_social_rss", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."pinterest.png' alt='icon'  /> </div>Pinterest ",
		"id" => "ansimuz_social_pinterest", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."digg.png' alt='icon'  /> </div>Digg ",
		"id" => "ansimuz_social_digg", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."flickr.png' alt='icon'  /> </div>Flickr ",
		"id" => "ansimuz_social_flickr", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."forrst.png' alt='icon'  /> </div>Forrst ",
		"id" => "ansimuz_social_forrst", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."vimeo.png' alt='icon'  /> </div>Vimeo ",
		"id" => "ansimuz_social_vimeo", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."reddit.png' alt='icon'  /> </div>reddit ",
		"id" => "ansimuz_social_reddit", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."linkedin.png' alt='icon'  /> </div>linkedin ",
		"id" => "ansimuz_social_linkedin", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."facebook.png' alt='icon'  /> </div>facebook ",
		"id" => "ansimuz_social_facebook", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."paypal.png' alt='icon'  /> </div>paypal ",
		"id" => "ansimuz_social_paypal", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."stumbleupon.png' alt='icon'  /> </div>stumbleupon ",
		"id" => "ansimuz_social_stumbleupon", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."email.png' alt='icon'  /> </div>email ",
		"id" => "ansimuz_social_email", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."deviantart.png' alt='icon'  /> </div>deviantart ",
		"id" => "ansimuz_social_deviantart", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."netvibes.png' alt='icon'  /> </div>netvibes ",
		"id" => "ansimuz_social_netvibes", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."yahoo.png' alt='icon'  /> </div>yahoo ",
		"id" => "ansimuz_social_yahoo", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."github.png' alt='icon'  /> </div>github ",
		"id" => "ansimuz_social_github", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."addthis.png' alt='icon'  /> </div>addthis ",
		"id" => "ansimuz_social_addthis", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."behance.png' alt='icon'  /> </div>behance ",
		"id" => "ansimuz_social_behance", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."blogger.png' alt='icon'  /> </div>blogger ",
		"id" => "ansimuz_social_blogger", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."slashdot.png' alt='icon'  /> </div>slashdot ",
		"id" => "ansimuz_social_slashdot", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."technorati.png' alt='icon'  /> </div>technorati ",
		"id" => "ansimuz_social_technorati", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."googleplus.png' alt='icon'  /> </div>googleplus ",
		"id" => "ansimuz_social_googleplus", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."apple.png' alt='icon'  /> </div>apple ",
		"id" => "ansimuz_social_apple", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."myspace.png' alt='icon'  /> </div>myspace ",
		"id" => "ansimuz_social_myspace", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."sharethis.png' alt='icon'  /> </div>sharethis ",
		"id" => "ansimuz_social_sharethis", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."yelp.png' alt='icon'  /> </div>yelp ",
		"id" => "ansimuz_social_yelp", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."delicious.png' alt='icon'  /> </div>delicious ",
		"id" => "ansimuz_social_delicious", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."lastfm.png' alt='icon'  /> </div>lastfm ",
		"id" => "ansimuz_social_lastfm", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."youtube.png' alt='icon'  /> </div>youtube ",
		"id" => "ansimuz_social_youtube", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."skype.png' alt='icon'  /> </div>skype ",
		"id" => "ansimuz_social_skype", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."tumblr.png' alt='icon'  /> </div>tumblr ",
		"id" => "ansimuz_social_tumblr", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."aim.png' alt='icon'  /> </div>aim ",
		"id" => "ansimuz_social_aim", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
	
	array(
		"type" => "text",
		"name" => "<div class='admin-social-icon'><img src='".$icon_path."google.png' alt='icon'  /> </div>google ",
		"id" => "ansimuz_social_google", 
		"desc" => "Enter Social Link or leave blank to remove",
		"default" => ""
	),
	
);

$optionspage = new ansimuz_options_page($info, $options);

/* Options arguments

	"type" => "text | textarea | image | ",
	"name" => "",
	"id" => "", 
	"desc" => "",
	"default" => ""
	
	
	"type" => "checkbox",
	"name" => "",
	"id" => array(),
	"options" => array(),					
	"desc" => "",
	"default" => array( "checked","not")
	
	
	"type" => "select | radio",
	"name" => "",
	"id" => "",
	"options" => array( ""),					
	"desc" => "",
	"default" => "" 
	
*/