// Jquery with no conflict
jQuery(document).ready(function($) {

	/*-----------------------------------------------------------------------------------*/
	/*	Main Background slide
	/*
	/* ADDING SLIDES 
	/* after myJsVars.front_background2, enter a new line with the url of the image inside quotes
	/* example "http://someserver.com/img_3.jpg"
	/*
	/*-----------------------------------------------------------------------------------*/

	$('#home-title').backstretch([
	myJsVars.front_background1,
	myJsVars.front_background2,
	], {duration: myJsVars.front_background_duration, fade: 750});
	
	/*-----------------------------------------------------------------------------------*/
	/*	INNER PAGES TITLE BACKGROUND
	/*-----------------------------------------------------------------------------------*/
	
	$('#page-title').backstretch(myJsVars.inner_background);


	/*-----------------------------------------------------------------------------------*/
	/*	Mix it Up sorting
	/*-----------------------------------------------------------------------------------*/

	if($().mixitup){
		 $('#work-container').mixitup();	
	}
	
	/*-----------------------------------------------------------------------------------*/
	/*	share social
	/*-----------------------------------------------------------------------------------*/
	
	$('#twitter-share').click(function(event) {
    
     	 var pathname = window.location;
     	 
     
	    // Create the twitter URL
	    var tweeturl = 'http://twitter.com/share?url='+encodeURI(pathname);
	    
	    this.href = tweeturl;
                
     
		});

	
	
	
	/*-----------------------------------------------------------------------------------*/
	/*	swipper slides
	/*-----------------------------------------------------------------------------------*/
	
	/* Initialize Slider */	
	var swiper = $('.swiper-container').swiper({
		loop:true,
		grabCursor: true,
		autoPlay: 3000,
		calculateHeight: true
	});
	
	
	/*-----------------------------------------------------------------------------------*/
	/*	dropdown menus sperfish
	/*-----------------------------------------------------------------------------------*/
	
	$(".sf-menu").superfish({ 
        animation: {height:'show'},   // slide-down effect without fade-in 
        delay:     800 ,              // 1.2 second delay on mouseout 
        autoArrows:  false,
        speed: 100
    });
    
    /*-----------------------------------------------------------------------------------*/
	/*	ACCORDIONS
	/*-----------------------------------------------------------------------------------*/
	
	$('.accordion-container').hide(); 
	$('.accordion-trigger:first').addClass('active').next().show();
	$('.accordion-trigger').click(function(){
		if( $(this).next().is(':hidden') ) { 
			$('.accordion-trigger').removeClass('active').next().slideUp();
			$(this).toggleClass('active').next().slideDown();
		}
		return false;
	});
	
	/*-----------------------------------------------------------------------------------*/
	/*	TOGGLE
	/*-----------------------------------------------------------------------------------*/
	
	$('.toggle-trigger').click(function() {
		$(this).next().toggle('slow');
		$(this).toggleClass("active");
		return false;
	}).next().hide();
    
    
	/*-----------------------------------------------------------------------------------*/
    /*	MOBILE NAVIGATION
    /*-----------------------------------------------------------------------------------*/
    
    // Prepend combo nav holder
    $('.navbar').append('<div id="combo-holder"></div>');
    
    // Create the dropdown base
	$("<select id='comboNav' />").appendTo("#combo-holder");
	
	// Create default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Navigation"
	}).appendTo("#combo-holder select");
	
	// Populate dropdown with menu items
	$(".navbar a").each(function() {
		var el = $(this);		
		var label = $(this).parent().parent().attr('id');
		var sub = (label == 'main-nav') ? '' : '- ';
		
		$("<option />", {
		 "value"   : el.attr("href"),
		 "text"    :  sub + el.text()
		}).appendTo("#combo-holder select");
	});
	
	/* Combo navigation action ----------------------------------------------------*/  
	
	$("#comboNav").change(function() {
	  location = this.options[this.selectedIndex].value;
	});
	

});


