<?php

/*
 *
 * Template for the front page options
 *
 */ 

// Information

$info = array(
	'name' => 'front-options',  // The options page identifier
	'pagename' => 'front-options', // The page slug
	'title' => 'Front Page',
	'sublevel' => 'yes'
);

// Options and array of arguments


// Create a list of all post categories
$all_categories=get_categories('hide_empty=0&orderby=name');
$cat_options=array();
$cat_options[] = '-Any category-';
foreach ($all_categories as $category_list ) {
    $cat_options[] = $category_list->cat_name;
}




$options = array(


	// Header bg
		
		array(
			"type" => "heading",
			"name" => "Header Background" 	
		),
	
		array(
				"type" => "image",
				"name" => "Front Page Header Background #1",
				"id" => "ansimuz_front_page_bg1", 
				"desc" => "Upload a logo image file to be used as a background for the header on the front , it can be jpg, gif or png",
				"default" => ANSIMUZ_THEME_DIR . "/img/slides/01.jpg"	
			),
			
		array(
			"type" => "image",
			"name" => "Front Page Header Background #2",
			"id" => "ansimuz_front_page_bg2", 
			"desc" => "NEED MORE SLIDES? <br/>Edit your js/custom.js file and add a new line with the url of the image after myJsVars.front_background2,",
			"default" => ANSIMUZ_THEME_DIR . "/img/slides/02.jpg"	
		),
		
		array(
		"type" => "text",
		"name" => "Front Page Background Duration",
		"id" => "ansimuz_front_page_bg_duration",
		"desc" => "Enter duration in milliseconds for example 4000 equals 4 seconds",
		"default" => "4000" 	
	),
	
	
	// Headline
	
	array(
		"type" => "heading",
		"name" => "Front Page Heading" 	
	),
	
	

		
	array(
		"type" => "text",
		"name" => "Front page headline",
		"id" => "ansimuz_headline",
		"desc" => "Enter a title to be displayed below the front page logo headline",
		"default" => "" 	
	),
	
	array(
		"type" => "text",
		"name" => "Front page secondary headline",
		"id" => "ansimuz_tagline",
		"desc" => "Enter a text to be displayed below the front page logo headline",
		"default" => "" 	
	),

	
	
	
	// Featured work
	
	array(
		"type" => "heading",
		"name" => "Front Featured Work" 	
	),
	
	

		
	array(
		"type" => "text",
		"name" => "Number of Items",
		"id" => "ansimuz_featured_nposts",
		"desc" => "Limit the number of featured posts displayed, enter decimal value",
		"default" => "3" 	
	),
	
	array(
		"type" => "textarea",
		"name" => "Categories filter",
		"id" => "ansimuz_featured_categories",					
		"desc" => "Display featured posts only from these categories, Enter multiple separated by commas.",
		"default" => ""
	),
	
	array(
		"type" => "textarea",
		"name" => "Featured Work Text",
		"id" => "ansimuz_featured_work_content",					
		"desc" => "Enter some text to be displayed below the work front page slider.",
		"default" => ""
	),
	
	array(
		"type" => "checkbox",
		"name" => "Hide Featured Posts",
		"id" => array("ansimuz_featured_display"),
		"options" => array("Check to hide the feature posts"),					
		"desc" => "Hide the front page featured posts",
		"default" => array( "not")	
	),
	
	// Latest post
	
	array(
		"type" => "heading",
		"name" => "Recent  posts" 	
	),
	
		
	array(
		"type" => "text",
		"name" => "Number of Items",
		"id" => "ansimuz_recent_nposts",
		"desc" => "Limit the number of featured posts displayed, enter decimal value",
		"default" => "3" 	
	),
	
	array(
		"type" => "textarea",
		"name" => "Categories filter",
		"id" => "ansimuz_recent_categories",					
		"desc" => "Display recent posts only from these categories, Enter multiple separated by commas.",
		"default" => ""
	),
	
	array(
		"type" => "checkbox",
		"name" => "Hide Recent Posts",
		"id" => array("ansimuz_recent_display"),
		"options" => array("Check to hide the recent posts"),					
		"desc" => "Hide the front page recent posts",
		"default" => array( "not")	
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