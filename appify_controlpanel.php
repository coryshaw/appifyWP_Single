<?php

$themename = "AppifyWP";
$shortname = "apfy";

$options = array (


			
	array(	"type" => "open"),
	
	array(	"name" => "App Icon",
			"desc" => "URL to your app icon. Resize it to <b>exactly 80x80 pixels</b> before uploading for best results.",
			"id" => $shortname."_app_icon",
			"std" => "",
			"type" => "appicon"),
	
	array(	"name" => "App Name",
			"desc" => "What is the name of your app?",
			"id" => $shortname."_app_name",
			"std" => "",
			"type" => "text"),
			
	array(	"name" => "App Logo",
			"desc" => "If you have a logo for your app, you can provide the url to it here. This will replace the main app name text at the top of your site with this logo.",
			"id" => $shortname."_app_logo",
			"std" => "",
			"type" => "applogo"),
	
	array(	"name" => "App Tagline",
			"desc" => "What is the tagline for your app?",
			"id" => $shortname."_app_tagline",
			"std" => "",
			"type" => "text"),


	
	
	
	array(	"id" => "Platforms",
			"desc" => "Select the platforms that your app supports below.",
			"type" => "platformstart"),

	
	
	
			// iphone template
			
			array(	"name" => "iPhone",
					"desc" => "",
			        "id" => $shortname."_iphone",
			        "type" => "templateOption"),
			
			array(	"name" => "iPhone Orientation",
					"desc" => "",
			        "id" => $shortname."_iphoneOrientation",
			        "options" => array("Portrait", "Landscape"),
			        "type" => "orientation",
			        "std" => "Portrait"),
				
			array(	"id" => "iphone-options",
					"type" => "platformOptionsStart"),
			
			array(	"name" => "Default Template?",
					"desc" => "Make the iPhone App template visible by default when someone visits my site",
			        "id" => $shortname."_iphone_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "iPhone App Description",
					"desc" => "",
			        "id" => $shortname."_iphone_app_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "iPhone App Store URL",
					"desc" => "Enter the URL of your iPhone app in the app store. This will link your visitors to buy your app. (include http://)",
				    "id" => $shortname."_iphone_appURL",
				    "type" => "text",
				    "std" => ""),
	
	
	    array(	"name" => "Feature Type",
	    		"desc" => "Select how you would like to feature your app.",
	            "id" => $shortname."_iphoneFeatureType",
	            "options" => array("Slideshow", "Video"),
	            "type" => "featureType",
	            "std" => "Slideshow"),
			
			array(	"name" => "iPhone",
					"desc" => "iPhone5 screenshots are resized to fit within 214px x 379px. iPhone4 and below screenshots are letterboxed within the phone.",
					"type" => "SlideshowStart"),
				
				array(  "name" => "iPhone Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "iPhone Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "iPhone Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "iPhone Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "iPhone Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "iPhone Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "iPhone Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "iPhone Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_iphone_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_iphone_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

      array(	"name" => "Video ID",
      		"desc" => "Enter your YouTube or Vimeo video ID",
              "id" => $shortname."_iphone_videoID",
              "type" => "videoID",
              "std" => ""),

			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),
	
	
	
	
	
	
			// ipad template
			
			array(	"name" => "iPad",
					"desc" => "",
			        "id" => $shortname."_ipad",
			        "type" => "templateOption"),
			
			array(	"name" => "iPad Orientation",
					"desc" => "",
			        "id" => $shortname."_ipadOrientation",
			        "options" => array("Portrait", "Landscape"),
			        "type" => "orientation",
			        "std" => "Landscape"),
				
			array(	"id" => "ipad-options",
					"type" => "platformOptionsStart"),
			
			
			array(	"name" => "Default Template?",
					"desc" => "Make the iPad App template visible by default when someone visits my site",
			        "id" => $shortname."_ipad_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "iPad App Description",
					"desc" => "",
			        "id" => $shortname."_ipad_app_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "iPad App Store URL",
					"desc" => "Enter the URL of your iPad app in the app store. This will link your visitors to buy your app. (include http://)",
				    "id" => $shortname."_ipad_appURL",
				    "type" => "text",
				    "std" => ""),
			
			
			array(	"name" => "iPad Feature Type",
					"desc" => "Select how you would like to feature your iPad app.",
			        "id" => $shortname."_ipadFeatureType",
			        "options" => array("Slideshow", "Video"),
			        "type" => "featureType",
			        "std" => "Slideshow"),
			
			array(	"name" => "iPad",
					"desc" => "iPad screenshots are resized to 402px x 301px. To maintain proper aspect ratio, include the status bar if it is in your screenshot.",
					"type" => "SlideshowStart"),
				
				array(  "name" => "iPad Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "iPad Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "iPad Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "iPad Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "iPad Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "iPad Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "iPad Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "iPad Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_ipad_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_ipad_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

			array(	"name" => "Video ID",
					"desc" => "Enter your YouTube or Vimeo video ID",
			        "id" => $shortname."_ipad_videoID",
			        "type" => "videoID",
			        "std" => ""),
			
			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),
	
	
	
		
			
			// android template
			
			array(	"name" => "Android",
					"desc" => "",
			        "id" => $shortname."_android",
			        "type" => "templateOption"),
			
			array(	"name" => "Android Orientation",
					"desc" => "",
			        "id" => $shortname."_androidOrientation",
			        "options" => array("Portrait", "Landscape"),
			        "type" => "orientation",
			        "std" => "Landscape"),
				
			array(	"id" => "android-options",
					"type" => "platformOptionsStart"),
			
			array(	"name" => "Default Template?",
					"desc" => "Make the Android App template visible by default when someone visits my site",
			        "id" => $shortname."_android_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "Android App Description",
					"desc" => "",
			        "id" => $shortname."_android_app_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "Google Play URL",
					"desc" => "Enter the URL of your Android app in Google Play or provide a direct download. This will link your visitors to buy/download your app. (include http://)",
				    "id" => $shortname."_android_appURL",
				    "type" => "text",
				    "std" => ""),
				    
			array(  "name" => "Google Play Download QR-Code",
					"desc" => "Enter the URL to a QR-code image. Make your QR code exactly 135x135px. Suggested QR-code generator: <a href=\"http://qrcode.kaywa.com/\" target=\"_blank\">http://qrcode.kaywa.com</a>. Use the small setting.",
				    "id" => $shortname."_android_QRcode",
				    "type" => "qrcode",
				    "std" => ""),
			
			array(	"name" => "Android Feature Type",
					"desc" => "Select how you would like to feature your Android app.",
			        "id" => $shortname."_androidFeatureType",
			        "options" => array("Slideshow", "Video"),
			        "type" => "featureType",
			        "std" => "Slideshow"),
			
			array(	"name" => "Android",
					"desc" => "Android App screenshots are re-sized to 226px x 354px. To maintain proper aspect ratio, include the status bar if it is in your screenshot. Optimized for Nexus One.",
					"type" => "SlideshowStart"),
				
				array(  "name" => "Android Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Android Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Android Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Android Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Android Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Android Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Android Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Android Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_android_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_android_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

			array(	"name" => "Video ID",
					"desc" => "Enter your YouTube or Vimeo video ID",
			        "id" => $shortname."_android_videoID",
			        "type" => "videoID",
			        "std" => ""),
			
			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),




			// wp7 template
			
			array(	"name" => "Windows Phone",
					"desc" => "",
			        "id" => $shortname."_wp7",
			        "type" => "templateOption"),
			
			array(	"name" => "WP7 Orientation",
					"desc" => "",
			        "id" => $shortname."_wp7Orientation",
			        "options" => array("Portrait", "Landscape"),
			        "type" => "orientation",
			        "std" => "Landscape"),
				
			array(	"id" => "wp7-options",
					"type" => "platformOptionsStart"),
			
			array(	"name" => "Default Template?",
					"desc" => "Make the Windows Phone App template visible by default when someone visits my site",
			        "id" => $shortname."_wp7_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "Windows Phone App Description",
					"desc" => "",
			        "id" => $shortname."_wp7_app_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "Windows Phone Download - App Store URL",
					"desc" => "Enter the URL to download your Windows Phone app. This will link your visitors to buy/download your app. (include http://)",
				    "id" => $shortname."_wp7_appURL",
				    "type" => "text",
				    "std" => ""),
				    
			
			array(	"name" => "WP Feature Type",
					"desc" => "Select how you would like to feature your WP app.",
			        "id" => $shortname."_wpFeatureType",
			        "options" => array("Slideshow", "Video"),
			        "type" => "featureType",
			        "std" => "Slideshow"),
			
			array(	"name" => "Windows Phone",
					"desc" => "Windows Phone App screenshots are re-sized to 220px x 370px for portrait or 367px x 223px for landscape.",
					"id" => "SlideshowStart",
					"type" => "SlideshowStart"),

				
				array(  "name" => "Windows Phone Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Windows Phone Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Windows Phone Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Windows Phone Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Windows Phone Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Windows Phone Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Windows Phone Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Windows Phone Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_wp7_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_wp7_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

			array(	"name" => "Video ID",
					"desc" => "Enter your YouTube or Vimeo video ID",
			        "id" => $shortname."_wp7_videoID",
			        "type" => "videoID",
			        "std" => ""),
			
			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),






// Blackberry template
			
			array(	"name" => "BlackBerry",
					"desc" => "",
			        "id" => $shortname."_blackberry",
			        "type" => "templateOption"),
			
			array(	"name" => "BlackBerry Orientation",
					"desc" => "",
			        "id" => $shortname."_blackberryOrientation",
			        "options" => array("Portrait", "Landscape"),
			        "type" => "orientation",
			        "std" => "Landscape"),
				
			array(	"id" => "blackberry-options",
					"type" => "platformOptionsStart"),
			
			array(	"name" => "Default Template?",
					"desc" => "Make the Blackberry template visible by default when someone visits my site",
			        "id" => $shortname."_blackberry_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "BlackBerry App Description",
					"desc" => "",
			        "id" => $shortname."_blackberry_app_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "BlackBerry Download",
					"desc" => "Enter the URL to download your Blackberry app. This will link your visitors to buy/download your app. (include http://)",
				    "id" => $shortname."_blackberry_appURL",
				    "type" => "text",
				    "std" => ""),
				    
			
			array(	"name" => "Blackberry Feature Type",
					"desc" => "Select how you would like to feature your Blackberry app.",
			        "id" => $shortname."_blackberryFeatureType",
			        "options" => array("Slideshow", "Video"),
			        "type" => "featureType",
			        "std" => "Slideshow"),
			
			array(	"name" => "BlackBerry",
					"desc" => "Blackberry app screenshots are re-sized to 225px x 300px for portrait or 300px x 225px for landscape.",
					"id" => "SlideshowStart",
					"type" => "SlideshowStart"),

				
				array(  "name" => "Blackberry Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Blackberry Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Blackberry Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Blackberry Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Blackberry Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Blackberry Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Blackberry Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Blackberry Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_blackberry_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_blackberry_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

			array(	"name" => "Video ID",
					"desc" => "Enter your YouTube or Vimeo video ID",
			        "id" => $shortname."_blackberry_videoID",
			        "type" => "videoID",
			        "std" => ""),
			
			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),








	

			// mac app template
			
			array(	"name" => "Mac App",
					"desc" => "",
			        "id" => $shortname."_macApp",
			        "type" => "templateOption"),
			
			array(	"name" => "",
			        "type" => "macAppThumb"),
				
			array(	"id" => "macApp-options",
					"type" => "platformOptionsStart"),
			
			array(	"name" => "Default Template?",
					"desc" => "Make the Mac App template visible by default when someone visits my site",
			        "id" => $shortname."_macapp_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "Mac App Description",
					"desc" => "",
			        "id" => $shortname."_macApp_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "Mac App Store URL",
					"desc" => "Enter the URL of your Mac App in the Mac App store. This will link your visitors to buy/download your app. (include http://)",
				    "id" => $shortname."_macApp_appURL",
				    "type" => "text",
				    "std" => ""),
			
			array(	"name" => "Mac App Feature Type",
					"desc" => "Select how you would like to feature your Mac App.",
			        "id" => $shortname."_macFeatureType",
			        "options" => array("Slideshow", "Video"),
			        "type" => "featureType",
			        "std" => "Slideshow"),
				    			
			array(	"name" => "Mac App",
					"desc" => "Mac App screenshots are re-sized if larger than 549px x 344px. Aspect ratio is maintained progromatically.",
					"type" => "SlideshowStart"),
				
				array(  "name" => "Mac App Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Mac App Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Mac App Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Mac App Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Mac App Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Mac App Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Mac App Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Mac App Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_macApp_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_macApp_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

			array(	"name" => "Video ID",
					"desc" => "Enter your YouTube or Vimeo video ID",
			        "id" => $shortname."_macApp_videoID",
			        "type" => "videoID",
			        "std" => ""),
			
			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),


	
	
	
			// PC template
			
			array(	"name" => "PC",
					"desc" => "",
			        "id" => $shortname."_pc",
			        "type" => "templateOption"),
			
			array(	"name" => "",
			        "type" => "pcThumb"),
				
			array(	"id" => "pc-options",
					"type" => "platformOptionsStart"),
			
			array(	"name" => "Default Template?",
					"desc" => "Make the PC template visible by default when someone visits my site",
			        "id" => $shortname."_pc_isdefault",
			        "type" => "defaultcheckbox",
			        "std" => ""),
			
			array(	"name" => "PC Description",
					"desc" => "",
			        "id" => $shortname."_pc_description",
			        "type" => "textarea",
			        "std" => ""),
	
			array(  "name" => "PC Download URL",
					"desc" => "Enter the URL where people can download your app. This will link your visitors to buy/download your app. (include http://)",
				    "id" => $shortname."_pc_appURL",
				    "type" => "text",
				    "std" => ""),
			
			array(	"name" => "PC Feature Type",
					"desc" => "Select how you would like to feature your PC app.",
			        "id" => $shortname."_pcFeatureType",
			        "options" => array("Slideshow", "Video"),
			        "type" => "featureType",
			        "std" => "Slideshow"),
				    			
			array(	"name" => "PC App",
					"desc" => "PC App screenshots are re-sized if larger than 549px x 293px. Aspect ratio is maintained progromatically.",
					"type" => "SlideshowStart"),
				
				array(  "name" => "PC App Slideshow Screenshot 1",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg1",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Mac App Slideshow Screenshot 2",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg2",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Mac App Slideshow Screenshot 3",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg3",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Mac App Slideshow Screenshot 4",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg4",
						"type" => "slideshow",
						"std" => ""),
			
				array(  "name" => "Mac App Slideshow Screenshot 5",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg5",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Mac App Slideshow Screenshot 6",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg6",
						"type" => "slideshow",
						"std" => ""),
				
				array(  "name" => "Mac App Slideshow Screenshot 7",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg7",
						"type" => "slideshow",
						"std" => ""),	
			
				array(  "name" => "Mac App Slideshow Screenshot 8",
						"desc" => "Enter the URL to a screenshot of your app. Tip: Use the Wordpress media center to upload.",
						"id" => $shortname."_pc_appImg8",
						"type" => "slideshow",
						"std" => ""),
						
				array(  "name" => "Auto-play slideshow",
						"desc" => "If checked, AppifyWP will auto-play and rotate through your app screenshots",
						"id" => $shortname."_pc_autoplay",
						"type" => "slideshowautoplay",
						"std" => ""),
			
			array(	"type" => "SlideshowEnd",
					"id" => "SlideshowEnd"),
			

			array(	"name" => "Video ID",
					"desc" => "Enter your YouTube or Vimeo video ID",
			        "id" => $shortname."_pc_videoID",
			        "type" => "videoID",
			        "std" => ""),
			
			array(  "type" => "platformOptionsEnd",
					"id" => "platformOptionsEnd"),


	array(  "type" => "platformsend",
					"id" => "platformsend"),
		
	

	
	array(  "name" => "Facebook",
			"desc" => "Paste the URL to your app's facebook fan page.",
			"id" => $shortname."_facebookURL",
			"type" => "text",
			"std" => ""),

	array(  "name" => "Twitter",
			"desc" => "Paste the URL to your app's twitter page.",
			"id" => $shortname."_twitterURL",
			"type" => "text",
			"std" => ""),
			
	array(  "name" => "Google+",
			"desc" => "Paste the URL to your app's Google+ page.",
			"id" => $shortname."_googlePlusURL",
			"type" => "text",
			"std" => ""),
			
			
	array(  "name" => "Show RSS Icon?",
			"desc" => "If you have a blog on your site, show the RSS icon so that people can easily subscribe to your posts.",
			"id" => $shortname."_RSSicon",
			"type" => "checkbox",
			"std" => ""),
			
	array(  "name" => "Sticky Sidebar",
			"desc" => "If checked, your sidebar will follow the user as they scroll/navigate your homepage. <br><b>NOTE: Make sure that your sticky sidebar is not too tall otherwise the bottom content will be hidden below the fold!</b>",
			"id" => $shortname."_stickySidebar",
			"type" => "checkbox",
			"std" => ""),
			
	array(	"name" => "Custom Background Image",
			"desc" => "You can upload a custom background image which will appear in the fixed navigation to the left. This will overwrite any background color or background texture below.",
			"id" => $shortname."_backgroundImage",
			"std" => "",
			"type" => "backgroundImage"),		
	
	array(	"name" => "Background Texture",
			"desc" => "Choose a background texture to add some flavor to your site.",
	        "id" => $shortname."_texture",
	        "type" => "texture",
	        "options" => array("none" => "None", "wood" => "Wood","wall" => "Wall","fabric" => "Fabric"),
	        "std" => ""),
	
	array(  "name" => "Background Color",
			"desc" => "Choose a background color for your left panel. TIP: darker shades of color tend to work better with the AppifyWP design.",
			"id" => $shortname."_backgroundColor",
			"type" => "backgroundcolor",
			"std" => "#232323"),
			
	array(  "name" => "Header Color",
			"desc" => "Choose a custom color for your site headers.",
			"id" => $shortname."_headerColor",
			"type" => "backgroundcolor",
			"std" => "#76797C"),
			
	array(  "name" => "Link Color",
			"desc" => "Choose a custom color for your site headers.",
			"id" => $shortname."_linkColor",
			"type" => "backgroundcolor",
			"std" => "#444444"),
	
	array(	"name" => "Font Theme",
			"desc" => "Choose from a list of carefully and beautifully paired header and text fonts complements of Google Fonts.",
	        "id" => $shortname."_fontTheme",
	        "type" => "fonttheme",
	        "options" => array("helvetica" => "Helvetica (default)", "lobsterCabin" => "Lobseter/Cabin","arvoPTsans" => "Arvo/PT Sans","ubuntuVollkorn" => "Ubuntu/Vollkorn","droid" => "Droid Serif/Droid Sans"),
	        "std" => "helvetica"),
	
	array(  "name" => "AppifyWP Affiliate ID",
			"desc" => "Get paid to promote AppifyWP! <a href=\"http://appifywp.com/affiliate-program\">Signup for the affiliate program</a> and put your affiliate ID here. This will affiliatize the powered by AppifyWP link in your footer.",
			"id" => $shortname."_affiliateID",
			"type" => "text",
			"std" => ""),

	array(	"type" => "close",
			"id" => "close")
	
);

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    //if ( $_GET['page'] == basename(__FILE__) ) {
    if ( isset($_GET['page']) && $_GET['page'] == basename(__FILE__) ) {
    
    	if ( isset($_REQUEST['action']) && 'save' == $_REQUEST['action'] ) {
        //if ( 'save' == $_REQUEST['action'] ) {


				foreach ($options as $value) {
				  if (isset($_REQUEST[ $value['id'] ])) {
				    update_option( $value['id'], $_REQUEST[ $value['id'] ] );
				  }
				}

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); 
                    } 
                }

                header("Location: themes.php?page=appify_controlpanel.php&saved=true");
                die;

        } else if( isset($_REQUEST['action']) && 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=appify_controlpanel.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Settings", "".$themename." Settings", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( isset($_REQUEST['saved']) && $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( isset($_REQUEST['reset']) && $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>
<script src="<?php bloginfo('template_directory'); ?>/js/colorpicker.js" type="text/javascript" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/colorpicker.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/settings.css" /> 


<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style="padding:10px;" cellpadding="0" cellspacing="0">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table><br />
        
        
        
		<?php break;

		case 'text':
		?>
        
        <tr class="row-<?php echo $value['id']; ?>">
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
            <td width="75%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(htmlspecialchars(get_option( $value['id'] ))); } else { echo stripslashes($value['std']); } ?>" /></td>
        </tr>

        <tr class="row-<?php echo $value['id']; ?>">
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr class="row-<?php echo $value['id']; ?>"><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>


<?php break;

		case 'videoID':
		?>
        
        <tr class="videoID">
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
            <td width="75%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(htmlspecialchars(get_option( $value['id'] ))); } else { echo stripslashes($value['std']); } ?>" /></td>
        </tr>

        <tr class="videoID>">
            <td><small><?php echo $value['desc']; ?></small></td>
        <tr><td colspan="2">&nbsp;</td></tr>




		<?php break;
		
		case 'appicon':
				?>
		        <?php 
		        	if (get_option( $value['id'] ) != "") { 
		        		$appiconurl = stripslashes(get_option( $value['id'] )); 
		        	} elseif (header_image() != "") { 
		        		$appiconurl = header_image();
		        	}
		        	else { 
		        		$appiconurl = $value['std']; 
		        	} 
		        ?>
		        <tr>
		            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
		            <td width="75%">
		            	<div class="imgpreview appicon"></div>
		            	<label for="upload_image">
		            	    <input style="width:400px;" id="<?php echo $value['id']; ?>" type="text" name="<?php echo $value['id']; ?>" value="<?php echo $appiconurl ?>" />
		            	    <input id="upload_image_button" type="button" value="Upload Image..." />
		            	</label>
		            	
		            </td>
		        </tr>
		
		        <tr>
		            <td>
			            <small><?php echo $value['desc']; ?></small>
		            </td>
		        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		



<?php break;

case 'applogo':
		?>
        <?php 
        	if (get_option( $value['id'] ) != "") { 
        		$applogourl = stripslashes(get_option( $value['id'] )); 
        	} else {
        	  $applogourl = ''; 
        	}
        ?>
        <tr>
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
            <td width="75%">
            	<div class="imgpreview applogo"></div>
            	<label for="upload_image">
            	    <input style="width:400px;" id="<?php echo $value['id']; ?>" type="text" name="<?php echo $value['id']; ?>" value="<?php echo $applogourl ?>" />
            	    <input id="upload_logo_button" type="button" value="Upload Image..." />
            	</label>
            	
            </td>
        </tr>

        <tr>
            <td>
	            <small><?php echo $value['desc']; ?></small>
            </td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>






		
		<?php break;
		
		
		
		case 'backgroundImage':
				?>
		        <?php 
		        	if (get_option( $value['id'] ) != "") { 
		        		$backgroundImageURL = stripslashes(get_option( $value['id'] )); 
		        	} else {
		        	  $backgroundImageURL = ''; 
		        	}
		        ?>
		        <tr>
		            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
		            <td width="75%">
		            	<div class="imgpreview backgroundImage"></div>
		            	<label for="upload_image">
		            	    <input style="width:400px;" id="<?php echo $value['id']; ?>" type="text" name="<?php echo $value['id']; ?>" value="<?php echo $backgroundImageURL ?>" />
		            	    <input id="upload_bgimage_button" type="button" value="Upload Image..." />
		            	</label>
		            	
		            </td>
		        </tr>
		
		        <tr>
		            <td>
			            <small><?php echo $value['desc']; ?></small>
		            </td>
		        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		
		
		
		<?php break;
		
		
		
		case 'fontTheme':
				?>
		
		
				
				<?php break;
		

		case 'qrcode':
		?>
        
        <tr class="qr-row">
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
            <td width="75%"><input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
        </tr>

        <tr class="qr-row">
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr class="qr-row"><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>



		<?php 
		break;
		
		
		case 'textarea':
		?>
        
        <tr>
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong><br/><br/>
            What does your app do in a couple of sentences or less? TIP: HTML is supported.
            </td>
            <td width="75%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'template':
		?>
        <tr>
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
            <td width="75%">
            
            <?php
            
            $blogpath = get_bloginfo('template_directory');
            
            echo '<div class="group template">';
            
            foreach ($value['options'] as $option_value => $option_text) {
                    $checked = ' ';
                    if (get_option($value['id']) == $option_text) {
                        $checked = ' checked="checked" ';
                    } else if (get_option($value['id']) === FALSE){
                        if ($option_value == "iPhone") {
                        	$checked = ' checked="checked"';
                        } else {
                        	$checked = '';
                        }
                        	
                    } else {
                        $checked = '';
                    }
                    echo '<div class="option"><input id="'.$option_text.'" type="radio" name="'.$value['id'].'" value="'.
                        $option_text.'" '.$checked."/>".'<label class="imgselector" for="'.$option_text.'"><img src="'.$blogpath.'/images/options_template_'.$option_text.'.jpg"/>'.$option_text.'</label>'."</div>\n";
                }
            
            echo '</div>';
            
            ?>
            
   			</td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		
		
				<?php 
				break;
		
		case 'SlideshowStart':
		?>
		
		<tr class="slideshowOptions">
		<td width="25%" valign="top"><strong><?php echo $value['name']; ?> Slideshow Screenshots</strong><br/><br/>
		Enter the URLs of your app screenshots. <br/><br/>Tip: use the <a target="_blank" href="media-new.php">media uploader</a> to upload your screenshots, then paste the URLs to them here.<br/><br/>
		<div class="screenshotinfo"><?php echo $value['desc']; ?></div>
		</td>
		<td width="75%">
		<table style="border:0;">
		<?php 
		break;
		
		case 'slideshow':
		?>
		<tr>
		<td>
		<input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(htmlentities(get_option( $value['id'] ))); } else { echo $value['std']; } ?>" />
		</td>
		</tr>
		
		<?php 
		break;
		
		case 'slideshowautoplay':
		?>
		
		<tr>
		<td>
		<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
		        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /> Auto-play Slideshow
		</td>
		</tr>
		
		<?php 
		break;
		
		case 'SlideshowEnd':
		?>
		
		</table></td></tr>
		

		<?php
        break;          
            
		case "checkbox":
		?>
            <tr>
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
                <td width="75%">
                	<?php 
                	if(get_option($value['id'])){ 
                		$checked = "checked=\"checked\""; 
                	}else { 
                		$checked = ""; 
                	} ?>
                    <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />&nbsp;&nbsp;<small><?php echo $value['desc']; ?></small>
                 </td>
            </tr>
                        
            <tr>
                <td></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
        
        
        
        <?php
        break;          
            
        case "defaultcheckbox":
        ?>
            <tr class="defaultcheckboxrow">
            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
                <td width="75%">
                	<?php 
                	if(get_option($value['id'])){ 
                		$checked = "checked=\"checked\""; 
                	}else { 
                		$checked = ""; 
                	} ?>
                    <input class="defaultcheckbox" type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />&nbsp;&nbsp;<small><?php echo $value['desc']; ?></small>
                 </td>
            </tr>
                        
            <tr class="defaultcheckboxrow">
                <td></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
        
        
            
        <?php 		
		break;

		case "file":
		?>
         	   <tr>
		            <td width="25%" rowspan="2" valign="top"><strong><?php echo $value['name']; ?></strong></td>
		            <td width="75%">
		
						<form enctype="multipart/form-data" id="upload-form" method="post" action="">
						<label for="upload"><?php _e('Choose an image from your computer:'); ?></label><br /><input type="file" id="upload" name="import" />
						<input type="hidden" name="action" value="save" />
						<?php wp_nonce_field('custom-background-upload', '_wpnonce-custom-background-upload') ?>
						<input type="submit" class="button" value="<?php esc_attr_e('Upload'); ?>" />
						</p>
						</form>
		
					</td>

		        </tr>

		        <tr>
		            <td><small><?php echo $value['desc']; ?></small></td>
		        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>




		<?php 
		break;
		         
		case 'backgroundcolor': 
		?>
		                 
		         <tr>
		         
		         <td width="25%" valign="top"><strong><?php echo $value['name']; ?></strong><br/><br/>
		         <?php echo $value['desc']; ?>
		         </td>
		         
		         <td width="75%">
		
			
			         	<input maxlength="7" style="width: 100px; background: white url(<?php bloginfo('template_directory'); ?>/images/settings_icon_colorpicker.png) no-repeat 73px 3px" class="colorpick" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /> 
			         	<div id="<?php echo $value['id']; ?>-preview" class="colorpreview"></div>        
		         
		         </td>
		         
		         
		         </tr>
		         <tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
		
		
		





         <?php 
         break;
         
         
         
         
         
         
         
         case 'texture':
         ?>
                 
         <tr>
         
         <td width="25%" valign="top"><strong><?php echo $value['name']; ?></strong><br/><br/>
         <?php echo $value['desc']; ?>
         </td>
         
         <td width="75%">

         	
			<?php
			
			$blogpath = get_bloginfo('template_directory');
			echo '<div class="group texture">';
			foreach ($value['options'] as $option_value => $option_text) {
			        $checked = ' ';
			        if (get_option($value['id']) == $option_value) {
			            $checked = ' checked="checked" ';
			        }
			        else if (get_option($value['id']) === FALSE){
			            if ($option_value == "none") {
			            	$checked = ' checked="checked"';
			            } else {
			            	$checked = '';
			            }
			        }
			        else {
			            $checked = ' ';
			        }
			        echo '<div class="option"><input id="'.$option_text.'" type="radio" name="'.$value['id'].'" value="'.
			            $option_value.'" '.$checked."/>".'<label class="imgselector" for="'.$option_text.'"><img src="'.$blogpath.'/images/options_texture_'.$option_text.'.png"/>'.$option_text.'</label>'."</div>\n";
			    }
			    echo '</div>';
			
			?>
         
         </td>
         
         </tr>
         <tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
         



<?php 
         break;
         
         
         
         
         
         
         
         case 'featureType':
         ?>
                 
         <tr>
         
         <td width="25%" valign="top"><strong><?php echo $value['name']; ?></strong><br/><br/>
         <?php echo $value['desc']; ?>
         </td>
         
         <td width="75%">

         	
			<?php
			
			$blogpath = get_bloginfo('template_directory');
			echo '<div class="featureType group">';
			foreach ($value['options'] as $option_value => $option_text) {
			        $checked = ' ';
			        if (get_option($value['id']) == $option_value) {
			            $checked = ' checked="checked" ';
			        }
			        else if (get_option($value['id']) === FALSE){
			            if ($option_value == "none") {
			            	$checked = ' checked="checked"';
			            } else {
			            	$checked = '';
			            }
			        }
			        else {
			            $checked = ' ';
			        }
			        echo '<div class="option"><input id="'.$option_text.'" type="radio" name="'.$value['id'].'" value="'.
			            $option_value.'" '.$checked."/>".'<label class="imgselector" for="'.$option_text.'"><img src="'.$blogpath.'/images/options_featureType_'.$option_text.'.png"/>'.$option_text.'</label>'."</div>\n";
			    }
			    echo '</div>';
			
			?>
         
         </td>
         
         </tr>
         <tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
         





         <?php 
         break;
         
         
         
         case 'fonttheme':
                  ?>
                          
                  <tr>
                  
                  <td width="25%" valign="top"><strong><?php echo $value['name']; ?></strong><br/><br/>
                  <?php echo $value['desc']; ?>
                  </td>
                  
                  <td width="75%">
         
                  	
         			<?php
         			
         			$blogpath = get_bloginfo('template_directory');
         			echo '<div class="group texture">';
         			foreach ($value['options'] as $option_value => $option_text) {
         			        $checked = ' ';
         			        if (get_option($value['id']) == $option_value) {
         			            $checked = ' checked="checked" ';
         			        }
         			        else if (get_option($value['id']) === FALSE){
         			            if ($option_value == "none") {
         			            	$checked = ' checked="checked"';
         			            } else {
         			            	$checked = '';
         			            }
         			        }
         			        else {
         			            $checked = ' ';
         			        }
         			        echo '<div class="option"><input id="'.$option_text.'" type="radio" name="'.$value['id'].'" value="'.
         			            $option_value.'" '.$checked."/>".'<label class="imgselector" for="'.$option_text.'"><img src="'.$blogpath.'/images/options_fontTheme_'.$option_value.'.jpg"/>'.$option_text.'</label>'."</div>\n";
         			    }
         			    echo '</div>';
         			
         			?>
                  
                  </td>
                  
                  </tr>
                  <tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
                  
         
                  <?php 
                  break;
         
         
         
         case 'platformstart':
         ?>
         <tr class="platformstart">
             <td colspan="3" valign="top">
             	<strong><?php echo $value['id']; ?></strong>
             	<p><?php echo $value['desc']; ?></p>
             </td>
         </tr>
         
         
         <?php 
         break;
         
         case 'platformsend':
         ?>
         <tr class="platformbottom">
             <td colspan="3" valign="top">
             
             </td>
         </tr>
         
         
             
       
 
 	<?php 
 	break;
 	case 'templateOption':
 	?>
 	<tr class="platform <?php echo $value['name']; ?>">
 	
 	  <td valign="top">
 		<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
 		        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
 		<label class="platformtype" for="<?php echo $value['id']; ?>">
 		<?php echo $value['name']; ?></label>
 		
 	  </td>
 	<?php 
 	break;
 	case 'orientation':
 	?>
	  <td>
	  		<div class="group orientation">
	  		<?php
	  		foreach ($value['options'] as $option_value => $option_text) {
	  		        $checked = ' ';
	  		        if (get_option($value['id']) == $option_value) {
	  		            $checked = ' checked="checked" ';
	  		        }
	  		        else if (get_option($value['id']) === FALSE){
	  		            if ($option_value == $value['std']) {
	  		            	$checked = ' checked="checked"';
	  		            } else {
	  		            	$checked = '';
	  		            }
	  		        }
	  		        else {
	  		            $checked = ' ';
	  		        }
	  		        echo '<div class="option"><input id="'.$value['id'].$option_text.'" type="radio" name="'.$value['id'].'" value="'.
	  		            $option_value.'" '.$checked."/>".'<label class="platformthumb '.$value['id'].' '.$option_text.'" for="'.$value['id'].$option_text.'"></label>'."<p>".$option_text."</p></div>\n";
	  		    }
	  			?>
	  			</div>
	  
 	  </td>
    </tr>
        
   <tr><td colspan="2">&nbsp;</td></tr>    
   
   
   <?php 
   	break;
   	case 'macAppThumb':
   	?>
   	  <td>
   	  		<div class="platformthumb apfy_macAppThumb selected option"></div>   	  
   	  </td>
    </tr>
        
   <tr><td colspan="2">&nbsp;</td></tr>   



<?php 
	break;
	case 'pcThumb':
	?>
	  <td>
	  		<div class="platformthumb apfy_pcThumb selected option"></div>   	  
	  </td>
 </tr>
     
<tr><td colspan="2">&nbsp;</td></tr>   

   

     <?php 
     break;
     case 'platformOptionsStart':
     ?> 
     
     <tr class="platform-options <?php echo $value['id']; ?>">               
         <td width="100%" colspan="3">
     		<table width="75%" border="0" class="platformoptionstable">
     
     <?php 
     break;
     case 'platformOptionsEnd':
     ?> 
     		</table>
     	</td>
     </tr>

<?php 
} 
}
?>



<p class="submit" style="margin-top:0; padding-top:0;">
<input name="save" class="button-primary" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>

<?php
}

add_action('admin_menu', 'mytheme_add_admin'); ?>