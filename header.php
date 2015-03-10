<?php
global $options;
foreach ($options as $value) {
    if (isset($value['id']) && get_option( $value['id'] ) === FALSE && isset($value['std'])) {
            $$value['id'] = $value['std'];
        }
    elseif (isset($value['id'])) { $$value['id'] = get_option( $value['id'] ); }
}

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage AppifyWP
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include (TEMPLATEPATH . '/head.php'); ?>
</head>

<body <?php body_class(); ?>>
<div class="outter-wrap" id="top">
<div id="wrapper" class="hfeed">
	
	<div id="header">
	<div class="arrow"></div>
	<div class="content-dropshadow"></div>
    <div class="header-content">
    <?php if ($apfy_app_icon) { ?>
      <div class="icon selected" style="background:url(<?php echo $apfy_app_icon ?>)"><a href="#top"></a></div>
    <?php } else { ?>
      <div class="icon selected" style="background:url(<?php bloginfo('template_directory'); ?>/images/headers/app_icon.png)"><a href="#top"></a></div>
    <?php } ?>
<?php
$a = $apfy_iphone . " " . $apfy_ipad . " " . $apfy_android . " " . $apfy_macApp . " " . $apfy_pc . " " . $apfy_wp7 . " " . $apfy_blackberry;
$numberoftemplates = substr_count($a, 'true'); 
?>

<?php if ($numberoftemplates > 1) { ?>
	<ul class="platforms-menu">
		<li class="selected">
			<?php if ($apfy_iphone) { ?>
				<a class="iPhone iphonebtn<?php if($apfy_iphone_isdefault){?> selected-template<?php } ?>" href="#iPhone">iPhone</a>
			<?php	}  ?>
			
			<?php if ($apfy_ipad) { ?>
				<a class="iPad ipadbtn<?php if($apfy_ipad_isdefault){?> selected-template<?php } ?>" href="#iPad">iPad</a>
			<?php	}  ?>
			
			<?php if ($apfy_android) { ?>
				<a class="android androidbtn <?php if($apfy_android_isdefault){?> selected-template<?php } ?>" href="#android">Android</a>
			<?php	}  ?>
			<?php if ($apfy_wp7) { ?>
				<a class="wp7 wp7btn <?php if($apfy_wp7_isdefault){?> selected-template<?php } ?>" href="#wp7">WP7</a>
			<?php	}  ?>
			<?php if ($apfy_blackberry) { ?>
				<a class="blackberry blackberrybtn <?php if($apfy_blackberry_isdefault){?> selected-template<?php } ?>" href="#blackberry">BlackBerry</a>
			<?php	}  ?>
			<?php if ($apfy_macApp) { ?>
				<a class="macApp macappbtn <?php if($apfy_macapp_isdefault){?> selected-template<?php } ?>" href="#macApp">Mac</a>
			<?php	}  ?>
			<?php if ($apfy_pc) { ?>
				<a class="pc pcbtn <?php if($apfy_pc_isdefault){?> selected-template<?php } ?>" href="#pc">PC</a>
			<?php	}  ?>
			
			
			
		</li>
	</ul>
<?php	}  ?>



 <?php 

	

	if(has_nav_menu('primary')){
		wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker' => new AppPressMenu() ) );
		?>
	  <div class="mobileNav">
	  
	          <div class="mobileMenu">
	          
	           <?php if ($numberoftemplates > 1) { ?>
	          
	          <ul class="platforms-menu">
	          	<li class="selected">
	          		<?php if ($apfy_iphone) { ?>
	          			<a class="iPhone iphonebtn<?php if($apfy_iphone_isdefault){?> selected-template<?php } ?>" href="#iPhone">iPhone</a>
	          		<?php	}  ?>
	          		
	          		<?php if ($apfy_ipad) { ?>
	          			<a class="iPad ipadbtn<?php if($apfy_ipad_isdefault){?> selected-template<?php } ?>" href="#iPad">iPad</a>
	          		<?php	}  ?>
	          		
	          		<?php if ($apfy_android) { ?>
	          			<a class="android androidbtn <?php if($apfy_android_isdefault){?> selected-template<?php } ?>" href="#android">Android</a>
	          		<?php	}  ?>
	          		<?php if ($apfy_wp7) { ?>
	          			<a class="wp7 wp7btn <?php if($apfy_wp7_isdefault){?> selected-template<?php } ?>" href="#wp7">WP7</a>
	          		<?php	}  ?>
	          		<?php if ($apfy_blackberry) { ?>
	          			<a class="blackberry blackberrybtn <?php if($apfy_blackberry_isdefault){?> selected-template<?php } ?>" href="#blackberry">BlackBerry</a>
	          		<?php	}  ?>
	          		<?php if ($apfy_macApp) { ?>
	          			<a class="macApp macappbtn <?php if($apfy_macapp_isdefault){?> selected-template<?php } ?>" href="#macApp">Mac</a>
	          		<?php	}  ?>
	          		<?php if ($apfy_pc) { ?>
	          			<a class="pc pcbtn <?php if($apfy_pc_isdefault){?> selected-template<?php } ?>" href="#pc">PC</a>
	          		<?php	}  ?>
	          		
	          		
	          		
	          	</li>
	          </ul>
	          
	          
	  <?php 
	  
	        }
	  
	          wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker' => new AppPressMenu() ) );
	          ?>
	          </div>
	        </div>
	    <?php       
	}
	else { ?>
		<div class="menu-header">
			<ul class="menu" id="menu-test">
				<li class="menu-item menu-item-type-post_type" id="menu-item-5">
				<a href="#getstarted">Getting Started</a></li>
			</ul>
			<ul class="menu" id="menu-test">
				<li class="menu-item menu-item-type-post_type" id="menu-item-5">
				<a href="#posts">Posts</a></li>
			</ul>
		</div>
	<?php } ?>
    </div><!-- end header content -->		

	</div><!-- #header -->

	<div id="main">


