<?php/*///////////////////////////////////////////////////////////////////////Part of the code from the book Building Findable Websites: Web Standards, SEO, and Beyondby Aarron Walter (aarron@buildingfindablewebsites.com)http://buildingfindablewebsites.comDistrbuted under Creative Commons licensehttp://creativecommons.org/licenses/by-sa/3.0/us////////////////////////////////////////////////////////////////////////*/function storeAddress(){	// Validation
	if(!$_GET['thekey']){ return '<p class="error">No MailChimp API Key.</p>'; } 
	
	if(!$_GET['lname']){ return '<p class="error">No MailChimp List Unique ID.</p>'; } 
		if(!$_GET['email']){ return '<p class="error">No email address provided</p>'; } 	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $_GET['email'])) {		return '<p class="error">Email address is invalid</p>'; 	}	require_once('MCAPI.class.php');	// grab an API Key from http://admin.mailchimp.com/account/api/
	$apikey = $_GET['thekey'];
	$api = new MCAPI($apikey);
			// grab your List's Unique Id by going to http://admin.mailchimp.com/lists/
	// Click the "settings" link for the list - the Unique Id is at the bottom of that page. 	$list_id = $_GET['lname'];	if($api->listSubscribe($list_id, $_GET['email'], '') === true) {		// It worked!			return '<p class="success">Success! Check your email to confirm sign up.</p>';	}else{		// An error ocurred, return error message			return 'Error: ' . $api->errorMessage;	}	}// If being called via ajax, autorun the functionif($_GET['ajax']){ echo storeAddress(); }?>
