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
<div class="outter-wrap">
<div id="wrapper" class="hfeed">
	<?php $blogpath = get_bloginfo('template_directory'); ?>
	<div id="header">

	<div class="content-dropshadow"></div>
    <div class="header-content">    
    <?php if ($apfy_app_icon) { ?>
      <div class="icon selected" style="background:url(<?php echo $apfy_app_icon ?>)"><a href="<?php echo home_url(); ?>"></a></div>
    <?php } else { ?>
      <div class="icon selected" style="background:url(<?php bloginfo('template_directory'); ?>/images/headers/app_icon.png)"><a href="<?php echo home_url(); ?>"></a></div>
    <?php } ?>


<?php
$a = $apfy_iphone . " " . $apfy_ipad . " " . $apfy_android . " " . $apfy_macApp . " " . $apfy_pc . " " . $apfy_wp7 . " " . $apfy_blackberry;
$numberoftemplates = substr_count($a, 'true'); 
?>

<?php if ($numberoftemplates > 1) { ?>
	<ul class="platforms-menu inside">
		<li class="selected">
			<?php if ($apfy_iphone) { ?>
				<a class="iPhone iphonebtn" href="<?php echo home_url(); ?>/#iPhone">iPhone</a>
			<?php	}  ?>
			
			<?php if ($apfy_ipad) { ?>
				<a class="iPad ipadbtn" href="<?php echo home_url(); ?>/#iPad">iPad</a>
			<?php	}  ?>
			
			<?php if ($apfy_android) { ?>
				<a class="android androidbtn" href="<?php echo home_url(); ?>/#android">Android</a>
			<?php	}  ?>
			
			<?php if ($apfy_wp7) { ?>
				<a class="wp7 wp7btn" href="<?php echo home_url(); ?>/#wp7">WP7</a>
			<?php	}  ?>
			
			<?php if ($apfy_blackberry) { ?>
				<a class="blackberry blackberrybtn" href="<?php echo home_url(); ?>/#blackberry">BlackBerry</a>
			<?php	}  ?>
			
			<?php if ($apfy_macApp) { ?>
				<a class="macApp macappbtn" href="<?php echo home_url(); ?>/#macApp">Mac</a>
			<?php	}  ?>
			<?php if ($apfy_pc) { ?>
				<a class="pc pcbtn" href="<?php echo home_url(); ?>/#pc">PC</a>
			<?php	}  ?>
		</li>
	</ul>

<?php	}  ?>


 <?php 

if(has_nav_menu('primary')){
	wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker' => new AppPressInsideMenu() ) );
?>

  <div class="mobileNav">
          <div class="mobileMenu">
          <ul class="platforms-menu">
          	<li class="selected">
          		<?php if ($apfy_iphone) { ?>
          			<a class="iPhone iphonebtn<?php if($apfy_iphone_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#iPhone">iPhone</a>
          		<?php	}  ?>
          		
          		<?php if ($apfy_ipad) { ?>
          			<a class="iPad ipadbtn<?php if($apfy_ipad_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#iPad">iPad</a>
          		<?php	}  ?>
          		
          		<?php if ($apfy_android) { ?>
          			<a class="android androidbtn <?php if($apfy_android_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#android">Android</a>
          		<?php	}  ?>
          		<?php if ($apfy_wp7) { ?>
          			<a class="wp7 wp7btn <?php if($apfy_wp7_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#wp7">WP7</a>
          		<?php	}  ?>
          		<?php if ($apfy_blackberry) { ?>
          			<a class="blackberry blackberrybtn <?php if($apfy_blackberry_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#blackberry">BlackBerry</a>
          		<?php	}  ?>
          		<?php if ($apfy_macApp) { ?>
          			<a class="macApp macappbtn <?php if($apfy_macapp_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#macApp">Mac</a>
          		<?php	}  ?>
          		<?php if ($apfy_pc) { ?>
          			<a class="pc pcbtn <?php if($apfy_pc_isdefault){?> selected-template<?php } ?>" href="<?php echo home_url(); ?>/#pc">PC</a>
          		<?php	}  ?>
          		
          		
          		
          	</li>
          </ul>
  <?php 
  
          wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker' => new AppPressInsideMenu() ) );
          ?>
          </div>
        </div>

<?php       
}
else { ?>
	<div class="menu-header">
		<ul class="menu" id="menu-test">
			<li class="menu-item menu-item-type-post_type" id="menu-item-5">
			<a href="<?php bloginfo('wpurl'); ?>/#getstarted">Getting Started</a></li>
		</ul>
		<ul class="menu" id="menu-test">
			<li class="menu-item menu-item-type-post_type" id="menu-item-5">
			<a href="<?php bloginfo('wpurl'); ?>/#posts">Posts</a></li>
		</ul>
	</div>
<?php } ?>



    </div><!-- end header content -->		

	</div><!-- #header -->

	<div id="main">


