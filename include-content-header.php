<?php
global $options;
foreach ($options as $value) {
    if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
            $$value['id'] = $value['std'];
        }
    elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}
?>

<?php

get_header('inside'); ?>

<div class="content-wrapper" id="scrollable">
<div id="ios-scroll">
<div class="content" role="main">
<div class="wide-column">

<div class="wide-column-content single">

	<?php include (TEMPLATEPATH . '/includes/appName_logo.php'); ?>
	
</div>
<div class="wide-column-content singlebody">