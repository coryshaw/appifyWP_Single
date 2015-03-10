jQuery(document).ready(function(){

  var isMobileView = false;
  
  // calculate window width
  var windowWidth = jQuery(window).width();
    
  if(windowWidth < 1025){
    isMobileView = true;
  }
  
  
  // set nav opacity
  jQuery('.menu li a').css('opacity',0.7);



  //smooth scrolling
  jQuery('.menu').localScroll({
	 hash: true,
	 easing: 'swing',
	 duration:500
  });



  // scroll to top when you click the icon

	  jQuery('#header .icon').localScroll({
		 hash: false,
		 easing: 'swing',
		 duration:500
	    }).click(function(){
			jQuery(".arrow").animate({
		  	"marginTop": '50'
	      }, 500,'swing');
	      jQuery(this).addClass('selected');
	      jQuery('.platforms-menu li').removeClass('selected').css('opacity',0.7);
		  jQuery('.menu li a').removeClass('selected').css('opacity',0.7);
	  });

  
  // Slideshow & Nav

  

  function loadslideshow(template) {
  
    
    if(!(jQuery('#'+template+' .scrollable.video').length != 0)){
    
  	  if ((jQuery('#'+template+' .slideshow-nav').length != 0)) {
  	    
  	  	if ((jQuery('#'+template+' .autoplayslideshow').length != 0)) {
  	  	  
  	  		jQuery('#'+template+' .scrollable').scrollable({circular: true}).autoscroll({ autoplay: true, autopause: true, interval: 4000}).navigator('#'+template+' .slideshow-buttons');
  	  		var api = jQuery('#'+template+' .scrollable').data("scrollable");
  	  		jQuery('#'+template+' .slideshow-buttons a, #'+template+' .scrollable a').click(function(){
  	  			  api.pause();
  	  		});
  	  		
  	 	  }
    	 	else {
    	 		jQuery('#'+template+' .scrollable').scrollable().navigator('#'+template+' .slideshow-buttons');
    	 	}
  	  }
  	  
  		if ((jQuery('#'+template+' .slideshow-buttons > a').size()) == 1) {
  			jQuery('#'+template+' .slideshow-buttons').hide();
  		}
		}
	
	}
	
	// load slideshows based on template

	if ((jQuery('.content.iphonetemp').length != 0)) {
		loadslideshow('iPhone');
	}
	
	if ((jQuery('.content.ipadtemp').length != 0)) {
		loadslideshow('iPad');
	}
	
	if ((jQuery('.content.androidtemp').length != 0)) {
		loadslideshow('android');
	}
	
	if ((jQuery('.content.macApptemp').length != 0)) {
		loadslideshow('macApp');
	}
	
	if ((jQuery('.content.pctemp').length != 0)) {
		loadslideshow('pc');
	}
	
	if ((jQuery('.content.wp7temp').length != 0)) {
		loadslideshow('wp7');
	}
	
	if ((jQuery('.content.blackberrytemp').length != 0)) {
		loadslideshow('blackberry');
	}
	
	
	

  // Nav header fade
  
	  jQuery(".menu li a, .platforms-menu li").not('.mobileNav .platforms-menu li').hover(
	    function () {
	      jQuery(this).not(".menu li a.selected, .platforms-menu li.selected").fadeTo("350", 1);
	    }, 
	    function () {
	      jQuery(this).not(".menu li a.selected, .platforms-menu li.selected").fadeTo("350", 0.7);
	    }
	  );




  // nav click
  // mousedown
  jQuery(".menu li a").mousedown(function(){
    jQuery(this).css({
		'marginLeft':'3px',
		'marginBottom':'7px',
		'marginTop':'7px',
		'padding':'17px 25px',
		'opacity':0.9
	});
  });
  

  // mouseup
  var clickedItem = null;
  var animateTo = null;

  jQuery(".menu li").mouseup(function(){
  	
	jQuery('.menu li a, .platforms-menu li').removeClass('selected').css('opacity',0.7);
	jQuery('#header .icon').removeClass('selected');
    jQuery('a',this).css({
		'marginLeft':'0px',
		'marginBottom':'6px',
		'marginTop':'0',
		'padding':'18px 25px',
		'opacity':1
	});
	jQuery('a',this).addClass('selected');
	//	jQuery('.platforms-menu li a').removeClass('selected-template');
	
	// figure out where to animate the arrow to
	clickedItemPosition = jQuery(this).position().top;
	clickedItemHeight = jQuery(this).height() / 2;
	animateTo = clickedItemPosition + clickedItemHeight - 20;
	jQuery("#header .arrow").animate({
	  "marginTop": animateTo
	}, 500,'swing');
  });


  // platform buttons
  
  jQuery('.platforms-menu li a').mouseup(function(){
  	
	  clickedItemPosition = jQuery(this).position().top;
	  animateTo = clickedItemPosition - 5;
	  jQuery("#header .arrow").animate({
	    "marginTop": animateTo
	  }, 500,'swing');
	  jQuery('.icon').removeClass('selected');
	  
	  jQuery('.content.current').removeClass('current');
	  jQuery('.menu li a').removeClass('selected').css('opacity',0.7);
	  
	  
	  if (!jQuery(this).hasClass("selected-template")){
	  	jQuery('.platforms-menu li a').removeClass('selected-template');
	  	
	  	var thisplatform = jQuery(this).attr('class').split(' ')[0];
	  	jQuery('.main-slideshow .content').fadeOut(500);
	  	var clickedPlatformContentHeight = jQuery('#'+thisplatform+".content").height() + 30;
	  	
	  	jQuery('#'+thisplatform+".content").addClass('current').parent().animate({
	  	    height: [clickedPlatformContentHeight, 'swing']
	  	  }, 500, 'linear', function() {
	  	      jQuery('.content.current').fadeIn('fast');
	  	      getsidebarposition();
	  	  });
	  }
	  
	  jQuery(this).addClass('selected-template').parent('li').addClass('selected');
	  jQuery.scrollTo('#top', 500, {easing:'swing'});
	  
  });




// sticky sidebar
window.sidebarYloc = null;

function getsidebarposition() {
	if (jQuery('.stickySidebar').length != 0) {
		window.sidebarYloc = jQuery('.main-slideshow').height() +30;
	}
}

if (jQuery('.stickySidebar').length != 0) {
  	
  	getsidebarposition();

  	if (window.sidebarYloc < jQuery(document).scrollTop()) {
		jQuery('.stickySidebar').addClass('fixed');
	}
	else {
		jQuery('.stickySidebar').removeClass('fixed');
	}
	
	

	jQuery(document).scroll(function () { 
		if (window.sidebarYloc < jQuery(document).scrollTop()) {
			jQuery('.stickySidebar').addClass('fixed');
		}
		else {
			jQuery('.stickySidebar').removeClass('fixed');
		}
	});
}
  


 


  

  // set bg color of input submit buttons
  jQuery('input[type=submit]').css('backgroundColor','#555');
  
  
  //tooltips
  jQuery(".facebook, .gplus, .twitter, .feed, .appstore").tipTip({delay: 0});
  
  
  // if more than one platform and any of those platforms are selected
  if ((jQuery('.platforms-menu').length != 0 && jQuery('.platforms-menu .selected-template').length != 0)) {
  	var currentplatformposition = jQuery('.platforms-menu a.selected-template').position().top - 5;
  	jQuery("#header .arrow").css('marginTop',currentplatformposition);
  	jQuery('.content.current').fadeIn('fast',function(){
  		setTimeout(function() {
  		   getsidebarposition();
  		}, 300);
  	});

  } 
  
  // if more than one platform and none are selected by default, this will choose the first as a default
  if ((jQuery('.platforms-menu').not('.platforms-menu.inside, .mobileNav .platforms-menu').length != 0 && jQuery('.platforms-menu .selected-template').length == 0)) {
    var firstplatforminlist = jQuery('.platforms-menu li a:first').attr('class').split(' ')[0];
    jQuery('.platforms-menu li a.'+firstplatforminlist).addClass('selected-template');
  	var currentplatformposition = jQuery('.platforms-menu a.selected-template').position().top - 5;
  	jQuery("#header .arrow").css('marginTop',currentplatformposition);
  	jQuery('#'+firstplatforminlist+'.content').fadeIn('fast',function(){
  		setTimeout(function() {
  		   getsidebarposition();
  		}, 300);
  	});
  } 
  
  
  // if there's only one platform
  if (!(jQuery('.platforms-menu').length != 0)) {
    	jQuery('.main-slideshow .content').show(function(){
    		setTimeout(function() {
    		   getsidebarposition();
    		}, 300);
    	});
  }
 
 // if inside page, unhilight platforms-menu
 
 if (jQuery('.platforms-menu.inside').length != 0) {
 	jQuery('.platforms-menu li').removeClass('selected');
 }
  
  
  jQuery('.platforms-menu li a').mousedown(function(){
  	jQuery(this).addClass('down');
  });
  
  jQuery('.platforms-menu li a').mouseup(function(){
  	jQuery(this).removeClass('down');
  });
  
  
  
  // if hash in url, highlight proper nav section
  if(window.location.hash) {
  	  var currenthash = window.location.hash;
  	  if (currenthash != '#top') {
  	  	if (jQuery('.platforms-menu').length != 0) {
  	  		if (jQuery('.platforms-menu li a[href*='+currenthash+']').length != 0) {
  		  		//jQuery('.platforms-menu li').removeClass('selected');
  		  		jQuery('.main-slideshow .content').hide();
  		  		jQuery('.platforms-menu li a').removeClass('selected-template');
  		  		jQuery('.content.current').removeClass('current');
  		  		jQuery('#'+currenthash+".content").addClass('current');
  		  		jQuery('.content.current').fadeIn('fast',function(){
  		  		  setTimeout(function() {
  		  		     getsidebarposition();
  		  		  }, 800);
  		  			
  		  		});
  		  		jQuery('.platforms-menu li a[href*='+currenthash+']').addClass('selected-template');
  	  			var currentSelectedItemOffset = jQuery('.platforms-menu li a[href*='+currenthash+']').position().top -5;
  	  			jQuery("#header .arrow").css('marginTop',currentSelectedItemOffset);
  	  			
  	  		}
  	  		
  	  	}
  	  	
  	  	if (jQuery('.menu li a[href*='+currenthash+']').length != 0) {
  	  		jQuery('.platforms-menu li a').removeClass('selected-template');
  	  		jQuery('.platforms-menu li').removeClass('selected').css('opacity',0.7);
  	  		jQuery('.menu li a[href*='+currenthash+']').addClass('selected').css('opacity',1);
  	  		var currentSelectedItemOffset = jQuery('.menu li a[href='+currenthash+']').parent().position().top;
  	  		var currentItemHeight = jQuery('.menu li a[href*='+currenthash+']').height() / 2 + currentSelectedItemOffset - 3;
  	  		jQuery("#header .arrow").css('marginTop',currentItemHeight);
  	  	}
  	  	
  	  }
  	  
  	  
  	  
  } 
  
  
  
  //polish when you click the download btns
  jQuery('#getapp a').mousedown(function(){
  	jQuery(this).addClass('down');
  });
  
  jQuery('#getapp a').mouseup(function(){
  	jQuery(this).removeClass('down');
  	jQuery('#getapp .loading').show();
  });
  
  jQuery('#getapp a').mouseout(function(){
  	jQuery(this).removeClass('down');
  });
  
  jQuery('#getapp .loading').hide();


	// set bg color of input submit buttons
	jQuery('input[type="submit"], button').css('backgroundColor','#555');
	jQuery('a[href$=".jpg"],a[href$=".png"],a[href$=".gif,a[href$=".jpeg"]').addClass('nyroModal');
	jQuery('.nyroModal').nyroModal();
	
	
	// mobile logic
	
	
	jQuery('#header .mobileNav .platforms-menu li').css('opacity',1);
	
	jQuery('#header .mobileNav').click(function(){
	  jQuery('#header .mobileNav .mobileMenu').toggleClass('show');
	});
	
	
	
	
	// contact form
	  if (jQuery('#contactForm').length != 0) {
		  
	  	var temppath = jQuery('#contactForm .submitpath').val() + '/contact_submit.php';
	    jQuery("#contactForm").validate({
	       submitHandler: function(form) {
	         jQuery('#contactForm .onesec').show();
	         jQuery('#contactForm .contact-submit').hide();
  	       var contactFormData = jQuery('#contactForm').serialize(); 
  	       jQuery('.submitError').hide();
  	       jQuery.ajax({
  	  	    	data: contactFormData,
  	  				url: temppath,
  	  				type: 'post',
  	  				success:function(data){
  	  				  jQuery('.contact').html(data);
  	  				  jQuery('#contactForm .onesec').hide();
  	  				},
  	  				error:function(){
  	  				  jQuery('.submitError').show();
  	  				}
  	        });
	       	}
	    })// end validate
	  
	  	jQuery('#contactForm .contact-submit').click(function(){
	  		jQuery('#contactForm').submit(); 
	  	});
	  	
	  	jQuery('#contactForm #name, #contactForm #email').keypress(function(e){   
	  	  if(e.which == 13){
	  	    e.preventDefault();
	  	    jQuery('#contactForm').submit(); 
	  	  }
	  	});
	  	
	  }
	  
	  

	  
	
	

	
	
	
	// mail chimp widget
	
	function submitMailChimpForm(){
	   // update user interface
	   	jQuery('#MCsignup #response').html('Adding email address...');
	   	
	   	// Prepare query string and send AJAX request
	   	jQuery.ajax({
	   		url: temppath2,
	   		data: 'ajax=true&email=' + escape(jQuery('.regWidget #email').val()) +'&thekey='+ escape(jQuery('.regWidget #thekey').val()) +'&lname='+ escape(jQuery('.regWidget #lname').val()),
	   		success: function(msg) {
	   			jQuery('.regWidget #response').html(msg);
	   		}
	   	});
	 }
	
	
	  if (jQuery('.regWidget #MCsignup').length != 0) {
		  var temppath2 = jQuery('#MCsignup .submitpath').val() + '/includes/store-address.php';
			jQuery('.addMailListBtn').click(function(){
					submitMailChimpForm();
						return false;
			});
		}
		
		jQuery('#MCsignup #email').keypress(function(e){   
		  if(e.which == 13){
		    e.preventDefault();
		    submitMailChimpForm();
		  }
		});
	
	
}); // end doc ready




