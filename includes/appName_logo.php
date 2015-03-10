<div class="title-tagline">

  <?php if ($apfy_app_logo) { ?>
    <h1 class="haslogo"><img alt="<?php echo stripslashes($apfy_app_name); ?>" class="logo" src="<?php echo stripslashes($apfy_app_logo); ?>"/></h1>
  <?php } else if ($apfy_app_name) { ?>
    <h1><?php echo stripslashes($apfy_app_name); ?></h1>
  <?php } else { ?>
  	<h1><?php stripslashes(bloginfo('name')); ?></h1>
  <?php } ?>
	    
	<?php if ($apfy_app_tagline) { ?>
	  <div class="tagline"><?php echo stripslashes($apfy_app_tagline); ?></div>
	<?php } ?>
	  	
</div><!-- end title tagline -->