<?php
/*
Template Name: AppifyWP Homepage
*/

?>

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


$whichmenu = '';

?>

<?php get_header(); ?>
<a name="top"></a>
<div class="content-wrapper" id="scrollable">
<div id="ios-scroll">

  



<div  class="main-slideshow">
<?php if ($apfy_iphone || $apfy_ipad || $apfy_android || $apfy_macApp || $apfy_pc || $apfy_wp7 || $apfy_blackberry) { ?>
	<?php if ($apfy_iphone) { ?>
		<?php include (TEMPLATEPATH . '/template_iphone.php'); ?>
	<?php } ?>
	<?php if ($apfy_ipad) { ?>
		<?php include (TEMPLATEPATH . '/template_ipad.php'); ?>
	<?php } ?>
	<?php if ($apfy_macApp) { ?>
		<?php include (TEMPLATEPATH . '/template_mac_app.php'); ?>
	<?php } ?>
	<?php if ($apfy_android) { ?>
		<?php include (TEMPLATEPATH . '/template_android.php'); ?>
	<?php } ?>
	<?php if ($apfy_pc) { ?>
		<?php include (TEMPLATEPATH . '/template_pc.php'); ?>
	<?php } ?>
	<?php if ($apfy_wp7) { ?>
		<?php include (TEMPLATEPATH . '/template_wp7.php'); ?>
	<?php } ?>
	<?php if ($apfy_blackberry) { ?>
		<?php include (TEMPLATEPATH . '/template_blackberry.php'); ?>
	<?php } ?>
	
<?php } else { ?>
<?php include (TEMPLATEPATH . '/template_iphone.php'); ?>
<?php } ?>
</div><!-- end main-slideshow -->	



  
  <div class="content" role="main">
    <div class="wide-column">
      

<?php if(has_nav_menu('primary')){ ?>

      <?php
      
      $list=wp_nav_menu( array( 
        'container_class' => 'pagestoload', 
        'theme_location' => 'primary', 
        'echo' => FALSE,
        'walker' => new pages_from_nav()
        ) );

      
      $list2 = str_replace(array("\n", "\r", "\t", " ", "\o", "\xOB"), '', $list);
      $list2 = strip_tags($list2);
      $list2 = substr_replace($list2 ,"",-1);
      $pieces = explode(",", $list2);
      
      ?>


		<?php 
		query_posts(array(
		 'post__in' => $pieces, 
		 'post_type' => 'any',
		 'Post_status' => 'publish',
		 'orderby' => 'post__in'
		));
		 ?>

		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); 
		$pageslug = toAscii(get_the_title(), "-");
		if ($pageslug == ''){
		  $pageslug = get_the_id();
		}
		?>
		
		
				<div class="section post-<?php the_ID(); ?>" id="<?php echo $pageslug ?>">
   					<div class="entry-content">
   					  <?php the_title('<h2>', '</h2>'); ?>
					  <?php edit_post_link( __( 'Edit', 'Appify' ), '<span class="edit-link">', '</span>' ); ?>
 					
					  <?php the_content(); ?>

					  <?php global $wp_query; $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true ); ?>
					  <?php 
						if ($template_name == 'blog_preview.php') { 
							include (TEMPLATEPATH . '/blog_preview.php'); 
						} 
						if ($template_name == 'contact.php') { 
							include (TEMPLATEPATH . '/contact-slim.php'); 
						} 
					  						  
					  ?>

   						
   						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Appify' ), 'after' => '</div>' ) ); ?>
						<div class="clear"></div>
   					</div><!-- .entry-content -->
   				</div><!-- #post-## -->
		
		<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
		
  <?php } else { ?>
  <div class="section" id="getstarted">
  <h2>Getting Started with AppifyWP</h2>
  <p>This section will show until you've created and assigned a <a href="<?php bloginfo('wpurl'); ?>/wp-admin/nav-menus.php">custom menu</a> and will help guide you in setting up your AppifyWP powered site.</p>
  
  
  <h3>Step1) Configure the AppifyWP Settings</h3>
  <ul>
	  <li><a href="<?php bloginfo('wpurl'); ?>/wp-admin/themes.php?page=appify_controlpanel.php">Configure AppifyWP Settings</a>. Here you'll be able to do things like:
	  <ul>
	  	<li>Add your app's icon</li>
	  	<li>Choose the platforms that your app supports and add screenshots, description, and download urls for each.</li>
	  	<li>Add links to your Twitter and Facebook accounts</li>
	  	<li>Customize the background color and texture of your site</li>
	  </ul>
	  </li>
 </ul>
  <br/>

  <h3>Step2) Build out the sections of your homepage</h3>
  <p>Each section of content on your homepage is treated as a “page” in wordpress. This getting started guide is a section of content. "Posts" is another section.</p>
  
  	<p> For example, if you want one section to show your app's version history, and another section to show customer testimonials, you create 2 pages, one for “Version History”, and one for “Testimonials”.</p>
  	
  	<p> Once you've created pages of your sections, you use "<a href="<?php bloginfo('wpurl'); ?>/wp-admin/nav-menus.php">Menus</a>" to tell AppifyWP what sections to show on your homepage and in which order.</p>
  	<ul>
  	<li>
  	<a href="<?php bloginfo('wpurl'); ?>/wp-admin/post-new.php?post_type=page">Get started creating pages</a> in the "Pages" section of the admin. </li>
  	</ul>
 <br/>

  <h3>Step3) Create a custom menu</h3>
	<p>This is where the magic of AppifyWP happens. With a custom menu, you tell Wordpress which pages you want to display as sections of content on your homepage and in which order to display them. AppifyWP will build a fancy menu and display your page content based on this.</p>
	<ul>
	<li><a href="<?php bloginfo('wpurl'); ?>/wp-admin/nav-menus.php">Create a custom menu</a></li>
	<li>Assign that menu as your primary menu.</li>
	</ul>
   <br/>
  
  <h3>Goodies</h3>
  <ul>  <li>AppifyWP comes pre-loaded with two custom page templates. Use the "Template" dropdown menu when creating a page to take advantage of the following:
  	<ul>
  	<li>The "<b>Contact Form</b>" template will populate the section with a beautiful and bulletproof contact form for your visitors to send you a message. Emails will be sent to the email address you provided when setting up wordpress. Forget about a captcha, you won't get spam emails with this.</li>
  	<li>The "<b>Blog Preview</b>" template will populate the section with the 5 most recent blog posts, like you see below.</li>
  	<li>The "<b>No Sidebar</b>" page template hide the sidebar on permalinked pages and display a full-width content area</li>
  </li></ul></li></ul>
  <br/>
  
  <h3>Thats it!</h3>
  <p>If you have any questions at all, contact me personally using the <a href="http://appifywp.com#support">support form</a>.</p>
  </div>
  
  <div class="section" id="posts">
  <h2>Posts</h2>
  <?php include (TEMPLATEPATH . '/blog_preview.php'); ?>
  </div>
  
  <?php } ?>
		</div><!-- end wide-column -->
		
		<div class="narrow-column">
		  <?php get_sidebar(); ?>
		</div>
		
		<div class="clear"></div>
		



		<?php get_footer(); ?>

		