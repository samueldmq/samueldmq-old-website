<?php

/*
 *
 * Template for the apperance options
 *
 */ 

// Information

$info = array(
	'name' => 'appearance-options',  // The options page identifier
	'pagename' => 'appearance-options', // The page slug
	'title' => 'Appearance',
	'sublevel' => 'yes'
);

// Options and array of arguments


$options = array(

	
	array(
		"type" => "image",
		"name" => "logo",
		"id" => "ansimuz_logo", 
		"desc" => "Upload a logo image file logo, it can be jpg, gif or png",
		"default" => ANSIMUZ_THEME_DIR . "/img/logo.png"	
	),
	
	array(
		"type" => "image",
		"name" => "Inner Pages Background",
		"id" => "ansimuz_inner_page_bg", 
		"desc" => "Upload a logo image file to be used as a background for the header on the inner pages, it can be jpg, gif or png",
		"default" => ANSIMUZ_THEME_DIR . "/img/dummies/page-bg.jpg"	
	),
	
	array(
		"type" => "textarea",
		"name" => "Custom CSS",
		"id" => "ansimuz_css", 
		"desc" => "Override CSS style rules. Don't include the &lt;style&gt; tags.",
		"default" => ""
	),
	
	
	
	// Reset
	
	array(
		"type" => "heading",
		"name" => "Reset" 	
	),
	
	array(	
		"type" => "checkbox",
		"name" => "Reset to Default",
		"id" => array("ansimuz_reset"),
		"options" => array("Check and save to reset"),					
		"desc" => "You made a mess?",
		"default" => array( "not")	
	)
	
						
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