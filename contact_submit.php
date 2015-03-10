<?php


?>

<?php
if ($_POST)
{
	$to = $_POST['tizoo'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = 'Name:'." \n".$_POST['name']."\n\n";
	$message .= 'Email:'." \n".$mailFrom."\n\n";
	$message .= 'Message:'."\n".$_POST['message'];
		
	// Email subject and body text
	$headers = '';
	 
	// Load WP components, no themes
	define('WP_USE_THEMES', false);
	require('../../../wp-load.php');
	 
	// Call the wp_mail function, display message based on the result.
	if( wp_mail( $to, $subject, $message, $headers ) ) {
	    // the message was sent...
	    echo '<div class="thanks">Message Sent.</div>';
	} else {
	    // the message was not sent...
	    echo '<div class="ohsnaperror">Cannot send email because of a server error.</div>';
	};  
}


?>