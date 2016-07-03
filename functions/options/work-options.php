<?php

/*
 *
 * Template for the work page options
 *
 */ 

// Information

$info = array(
	'name' => 'work-options',  // The options page identifier
	'pagename' => 'work-options', // The page slug
	'title' => 'Work Page',
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
		
	array(
		"type" => "text",
		"name" => "Work Page Title",
		"id" => "ansimuz_work_title",
		"desc" => "Enter a heading to display the title",
		"default" => "" 	
	),
	
	array(
		"type" => "textarea",
		"name" => "Work Content Text",
		"id" => "ansimuz_work_desc",					
		"desc" => "A small description for your work page",
		"default" => ""
	),
	
	
		
	// Testimonials
	
	array(
		"type" => "heading",
		"name" => "Testimonials" 	
	),
	
	
	array(
		"type" => "textarea",
		"name" => "Testimonial Quote #1",
		"id" => "ansimuz_testimonial_quote_1",					
		"desc" => "Enter the quote for the testimonial 1",
		"default" => ""
	),
	array(
		"type" => "text",
		"name" => "Testimonial Source #1",
		"id" => "ansimuz_testimonial_source_1",
		"desc" => "Testimonial source",
		"default" => "" 	
	),
	
	array(
		"type" => "textarea",
		"name" => "Testimonial Quote #2",
		"id" => "ansimuz_testimonial_quote_2",					
		"desc" => "Enter the quote for the testimonial 1",
		"default" => ""
	),
	array(
		"type" => "text",
		"name" => "Testimonial Source #2",
		"id" => "ansimuz_testimonial_source_2",
		"desc" => "Testimonial source",
		"default" => "" 	
	),
	
	array(
		"type" => "textarea",
		"name" => "Testimonial Quote #3",
		"id" => "ansimuz_testimonial_quote_3",					
		"desc" => "Enter the quote for the testimonial 1",
		"default" => ""
	),
	array(
		"type" => "text",
		"name" => "Testimonial Source #3",
		"id" => "ansimuz_testimonial_source_3",
		"desc" => "Testimonial source",
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