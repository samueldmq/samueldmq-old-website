<?php

/*
 *
 * Template for the general options
 *
 */ 

// Information

$info = array(
	'name' => 'general-options',  // The options page identifier
	'pagename' => 'general-options', // The page slug
	'title' => 'General'
);

// Options and array of arguments


$options = array(
		

	array(
		"type" => "checkbox",
		"name" => "Responsive Design",
		"id" => array("ansimuz_responsive"),
		"options" => array("Disable Responsive Design "),					
		"desc" => "Check this option to make your site look the same on whatever device",
		"default" => array( "not")	
	),
	
	
	array(
		"type" => "textarea",
		"name" => "404 text content ",
		"id" => "ansimuz_404", 
		"desc" => "Text displayed when error 404 pops",
		"default" => ""
	),
	
	array(
		"type" => "textarea",
		"name" => "Footer text ",
		"id" => "ansimuz_footer", 
		"desc" => "Text displayed at the bottom of the footer",
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