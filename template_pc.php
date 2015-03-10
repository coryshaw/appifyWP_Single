	  
	  <div id="pc" class="content pctemp<?php if($apfy_pc_isdefault){?> current<?php } ?>">
	  
	  <div class="content-main">
	  
	      <?php include (TEMPLATEPATH . '/includes/appName_logo.php'); ?>
	      	  
	  	 	<div class="pc-wrapper">
	  	      <div class="pc-image"></div>
	  	      <div class="slideshow-wrapper">
	  
	  	        <!-- root element for scrollable --> 
	  	        <div class="scrollable<?php if ($apfy_pcFeatureType == 1){ ?> video<?php } ?>">
	  
	  	        <div class="slideshow">
	  	        <?php if ($apfy_pcFeatureType == 1){ ?>
	  	         
	  	           <?php if ($apfy_pc_videoID) { ?>
	  	             <?php if( is_numeric($apfy_pc_videoID) ){ ?>
	  	             	<iframe src="http://player.vimeo.com/video/<?php echo $apfy_pc_videoID; ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	  	             <?php } else { ?>
	  	             	<iframe src="http://www.youtube.com/embed/<?php echo $apfy_pc_videoID; ?>?rel=0&autohide=1&egm=1&modestbranding=1&showinfo=0&wmode=opaque" frameborder="0" allowfullscreen controls="0" wmode="opaque"></iframe>
	  	             <?php } ?>
	  	           <?php } else { ?>
	  	             <h3>No Video ID Found</h3><p>Go to <a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">AppifyWP Settings</a> to enter the YouTube or Vimeo video ID</p>
	  	           <?php } ?>
	  	           
	  	        <?php } else { ?>
	  	        
      	  	    <?php if ($apfy_pc_appImg1 || $apfy_pc_appImg2 || $apfy_pc_appImg3 || $apfy_pc_appImg4 || $apfy_pc_appImg5 || $apfy_pc_appImg6 || $apfy_pc_appImg7 || $apfy_pc_appImg8) { ?>
      	  				<?php if ($apfy_pc_appImg1) { ?><div><a href="<?php echo $apfy_pc_appImg1; ?>"><img src="<?php echo $apfy_pc_appImg1; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg2) { ?><div><a href="<?php echo $apfy_pc_appImg2; ?>"><img src="<?php echo $apfy_pc_appImg2; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg3) { ?><div><a href="<?php echo $apfy_pc_appImg3; ?>"><img src="<?php echo $apfy_pc_appImg3; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg4) { ?><div><a href="<?php echo $apfy_pc_appImg4; ?>"><img src="<?php echo $apfy_pc_appImg4; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg5) { ?><div><a href="<?php echo $apfy_pc_appImg5; ?>"><img src="<?php echo $apfy_pc_appImg5; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg6) { ?><div><a href="<?php echo $apfy_pc_appImg6; ?>"><img src="<?php echo $apfy_pc_appImg6; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg7) { ?><div><a href="<?php echo $apfy_pc_appImg7; ?>"><img src="<?php echo $apfy_pc_appImg7; ?>"/></a></div><?php } ?>
      	  				<?php if ($apfy_pc_appImg8) { ?><div><a href="<?php echo $apfy_pc_appImg8; ?>"><img src="<?php echo $apfy_pc_appImg8; ?>"/></a></div><?php } ?>
      	  			<?php } else { ?>
      	  				<div class="noscreenshots"><h3>No Screenshots</h3><p>Go to <a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">AppifyWP Settings</a> to add your app's screenshots</p></div>
      	  			<?php } ?>
      	  			
      	  		<?php } ?>
	  				
	  	        </div>
	  	        </div><!-- end scrollable -->
	  	      </div><!-- end slideshow wrapper -->
	  	      
	  	      <?php if ($apfy_pcFeatureType == 0){ ?>
	  	      
          	  <?php if ($apfy_pc_appImg1 || $apfy_pc_appImg2 || $apfy_pc_appImg3 || $apfy_pc_appImg4 || $apfy_pc_appImg5 || $apfy_pc_appImg6 || $apfy_pc_appImg7 || $apfy_pc_appImg8) { ?>
          	  	<div class="slideshow-nav<?php if ($apfy_pc_autoplay) { ?> autoplayslideshow<?php } ?>">
          	  		<div><div class="slideshow-buttons navi"></div></div>
          	  	</div><!-- end slideshow nav -->
          	  <?php } ?>
          	<?php } ?>
	  
	  	  	</div><!-- end air wrapper -->
	  
	  	  	

	
	<?php if ($apfy_pc_description) { ?>
		<div class="caption"><?php echo stripslashes($apfy_pc_description); ?></div>
	<?php } else { ?>
		<p class="caption"><?php bloginfo('description'); ?></p>
	<?php } ?>

	<?php if ($apfy_pc_appURL) { ?>
	<div class="buynow">
	<a style="background:#222" class="fancy_button" href="<?php echo $apfy_pc_appURL; ?>"><span>Download</span></a>
	</div>
	<?php } ?>


  <div class="clear"></div>

	 	</div><!-- end content main -->

<div class="clear"></div>

	 	</div><!-- end content -->
	  