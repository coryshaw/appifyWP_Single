<?php
	if(!$_GET['thekey']){ return '<p class="error">No MailChimp API Key.</p>'; } 
	
	if(!$_GET['lname']){ return '<p class="error">No MailChimp List Unique ID.</p>'; } 
	
	$apikey = $_GET['thekey'];
	$api = new MCAPI($apikey);
	
	// Click the "settings" link for the list - the Unique Id is at the bottom of that page. 