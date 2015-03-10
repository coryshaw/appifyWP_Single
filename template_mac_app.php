	  
	  <div id="macApp" class="content macApptemp<?php if($apfy_macapp_isdefault){?> current<?php } ?>">
	  
	  <div class="content-main">
	  
	      <?php include (TEMPLATEPATH . '/includes/appName_logo.php'); ?>
	  
	  	 	<div class="air-wrapper">
	  	      <div class="air"></div>
	  	      <div class="slideshow-wrapper">
	  
	  	        <!-- root element for scrollable --> 
	  	        <div class="scrollable<?php if ($apfy_macFeatureType == 1){ ?> video<?php } ?>">
	  
	  	        <div class="slideshow">
	  	        <?php if ($apfy_macFeatureType == 1){ ?>
	  	         
	  	           <?php if ($apfy_macApp_videoID) { ?>
	  	             <?php if( is_numeric($apfy_macApp_videoID) ){ ?>
	  	             	<iframe src="http://player.vimeo.com/video/<?php echo $apfy_macApp_videoID; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	  	             <?php } else { ?>
	  	             	<iframe src="http://www.youtube.com/embed/<?php echo $apfy_macApp_videoID; ?>?rel=0&autohide=1&egm=1&modestbranding=1&showinfo=0&wmode=opaque" frameborder="0" allowfullscreen controls="0" wmode="opaque"></iframe>
	  	             <?php } ?>
	  	           <?php } else { ?>
	  	             <h3>No Video ID Found</h3><p>Go to <a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">AppifyWP Settings</a> to enter the YouTube or Vimeo video ID</p>
	  	           <?php } ?>
	  	           
	  	        <?php } else { ?>
	  	        
      	  	    <?php if ($apfy_macApp_appImg1 || $apfy_macApp_appImg2 || $apfy_macApp_appImg3 || $apfy_macApp_appImg4 || $apfy_macApp_appImg5 || $apfy_macApp_appImg6 || $apfy_macApp_appImg7 || $apfy_macApp_appImg8) { ?>
      	  				<?php if ($apfy_macApp_appImg1) { ?><div><a href="<?php echo $apfy_macApp_appImg1; ?>"><img src="<?php echo $apfy_macApp_appImg1; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg2) { ?><div><a href="<?php echo $apfy_macApp_appImg2; ?>"><img src="<?php echo $apfy_macApp_appImg2; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg3) { ?><div><a href="<?php echo $apfy_macApp_appImg3; ?>"><img src="<?php echo $apfy_macApp_appImg3; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg4) { ?><div><a href="<?php echo $apfy_macApp_appImg4; ?>"><img src="<?php echo $apfy_macApp_appImg4; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg5) { ?><div><a href="<?php echo $apfy_macApp_appImg5; ?>"><img src="<?php echo $apfy_macApp_appImg5; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg6) { ?><div><a href="<?php echo $apfy_macApp_appImg6; ?>"><img src="<?php echo $apfy_macApp_appImg6; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg7) { ?><div><a href="<?php echo $apfy_macApp_appImg7; ?>"><img src="<?php echo $apfy_macApp_appImg7; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_macApp_appImg8) { ?><div><a href="<?php echo $apfy_macApp_appImg8; ?>"><img src="<?php echo $apfy_macApp_appImg8; ?>"/></a></div><?php } ?>
      	  			<?php } else { ?>
      	  				<div class="noscreenshots"><h3>No Screenshots</h3><p>Go to <a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">AppifyWP Settings</a> to add your app's screenshots</p></div>
      	  			<?php } ?>
      	  			
      	  		<?php } ?>
	  				
	  	        </div>
	  	        </div><!-- end scrollable -->
	  	      </div><!-- end slideshow wrapper -->
	  	      <?php if ($apfy_macFeatureType == 0){ ?>
          	  <?php if ($apfy_macApp_appImg1 || $apfy_macApp_appImg2 || $apfy_macApp_appImg3 || $apfy_macApp_appImg4 || $apfy_macApp_appImg5 || $apfy_macApp_appImg6 || $apfy_macApp_appImg7 || $apfy_macApp_appImg8) { ?>
          	  	<div class="slideshow-nav<?php if ($apfy_macApp_autoplay) { ?> autoplayslideshow<?php } ?>">
          	  		<div><div class="slideshow-buttons navi"></div></div>
          	  	</div><!-- end slideshow nav -->
          	  <?php } ?>
          	<?php } ?>
	  
	  	  	</div><!-- end air wrapper -->
	  
	  	  	

	
	<?php if ($apfy_macApp_description) { ?>
		<div class="caption"><?php echo stripslashes($apfy_macApp_description); ?></div>
	<?php } else { ?>
		<p class="caption"><?php bloginfo('description'); ?></p>
	<?php } ?>

	<?php if ($apfy_macApp_appURL) { ?>
	<a class="buynow" href="<?php echo $apfy_macApp_appURL; ?>" target="_blank" title="Get <?php echo $apfy_app_name; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/buy_now.png" alt="Available on the Mac App Store" border="0"/></a>
	<?php } ?>
<div class="clear"></div>


	 	</div><!-- end content main -->



<div class="clear"></div>

	 	</div><!-- end content -->
	  