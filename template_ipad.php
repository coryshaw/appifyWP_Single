
	  	<div id="iPad" class="content ipadtemp <?php if($apfy_ipadOrientation == 0) echo "portrait"; else echo "landscape"; ?> <?php if($apfy_ipad_isdefault){?>current<?php } ?>">
	  
	  <div class="content-main">
	  
	      <?php include (TEMPLATEPATH . '/includes/appName_logo.php'); ?>
	  
	  	 	<div class="ipad-wrapper">
	  	      <div class="ipad"></div>
	  	      <div class="slideshow-wrapper">
	  
	  	        <!-- root element for scrollable --> 
	  	        <div class="scrollable<?php if ($apfy_ipadFeatureType == 1){ ?> video<?php } ?>">
	  
	  	        <div class="slideshow">
	  	        <?php if ($apfy_ipadFeatureType == 1){ ?>
	  	         
	  	           <?php if ($apfy_ipad_videoID) { ?>
	  	             <?php if( is_numeric($apfy_ipad_videoID) ){ ?>
	  	             	<iframe src="http://player.vimeo.com/video/<?php echo $apfy_ipad_videoID; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	  	             <?php } else { ?>
	  	             	<iframe src="http://www.youtube.com/embed/<?php echo $apfy_ipad_videoID; ?>?rel=0&autohide=1&egm=1&modestbranding=1&showinfo=0&wmode=opaque" frameborder="0" allowfullscreen controls="0" wmode="opaque"></iframe>
	  	             <?php } ?>
	  	           <?php } else { ?>
	  	             <h3>No Video ID Found</h3><p>Go to <a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">AppifyWP Settings</a> to enter the YouTube or Vimeo video ID</p>
	  	           <?php } ?>
	  	           
	  	        <?php } else { ?>
	  	        
    	  	      <?php if ($apfy_ipad_appImg1 || $apfy_ipad_appImg2 || $apfy_ipad_appImg3 || $apfy_ipad_appImg4 || $apfy_ipad_appImg5 || $apfy_ipad_appImg6 || $apfy_ipad_appImg7 || $apfy_ipad_appImg8) { ?>
      	  				<?php if ($apfy_ipad_appImg1) { ?><div><a href="<?php echo $apfy_ipad_appImg1; ?>"><img src="<?php echo $apfy_ipad_appImg1; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg2) { ?><div><a href="<?php echo $apfy_ipad_appImg2; ?>"><img src="<?php echo $apfy_ipad_appImg2; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg3) { ?><div><a href="<?php echo $apfy_ipad_appImg3; ?>"><img src="<?php echo $apfy_ipad_appImg3; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg4) { ?><div><a href="<?php echo $apfy_ipad_appImg4; ?>"><img src="<?php echo $apfy_ipad_appImg4; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg5) { ?><div><a href="<?php echo $apfy_ipad_appImg5; ?>"><img src="<?php echo $apfy_ipad_appImg5; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg6) { ?><div><a href="<?php echo $apfy_ipad_appImg6; ?>"><img src="<?php echo $apfy_ipad_appImg6; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg7) { ?><div><a href="<?php echo $apfy_ipad_appImg7; ?>"><img src="<?php echo $apfy_ipad_appImg7; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_ipad_appImg8) { ?><div><a href="<?php echo $apfy_ipad_appImg8; ?>"><img src="<?php echo $apfy_ipad_appImg8; ?>"/></a></div><?php } ?>
    	  			<?php } else { ?>
    	  			  <div class="noscreenshots"><h3>No Screenshots</h3><p>Go to <a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">AppifyWP Settings</a> to add your app's screenshots</p></div>
    	  			<?php } ?>
    	  			
	  				<?php } ?>
	  				
	  	        </div>
	  	        </div><!-- end scrollable -->
	  	      </div><!-- end slideshow wrapper -->
	  <?php if ($apfy_ipadFeatureType == 0){ ?>
  	  <?php if ($apfy_ipad_appImg1 || $apfy_ipad_appImg2 || $apfy_ipad_appImg3 || $apfy_ipad_appImg4 || $apfy_ipad_appImg5 || $apfy_ipad_appImg6 || $apfy_ipad_appImg7 || $apfy_ipad_appImg8) { ?>
  	  	<div class="slideshow-nav<?php if ($apfy_ipad_autoplay) { ?> autoplayslideshow<?php } ?>">
  	  		<div><div class="slideshow-buttons navi"></div></div>
  	  	</div><!-- end slideshow nav -->
  	  	<?php } ?>
  	<?php } ?>
	  <div class="clear"></div>
	  	  	</div><!-- end ipad wrapper -->
	  
	  	  	
	 <div class="toprightcol">

		<?php if ($apfy_ipad_app_description) { ?>
		<div class="caption"><?php echo stripslashes($apfy_ipad_app_description); ?></div>
		<?php } else { ?>
		<?php bloginfo('description'); ?>
		<?php } ?>
	
		<?php if ($apfy_ipad_appURL) { ?>
		<a class="buynow" href="<?php echo $apfy_ipad_appURL; ?>" target="_blank" title="Get <?php echo $apfy_app_name; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/buy_now.png" alt="Available on the App Store" border="0"/></a>
		<?php } ?>
	
	</div><!-- end top rightcol -->
	
    <div class="clear"></div>


	 	</div><!-- end content main -->

<div class="clear"></div>

	 	</div><!-- end content -->