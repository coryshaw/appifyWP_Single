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
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage AppifyWP
 */
?>

		<div id="primary" class="widget-area<?php if ($apfy_stickySidebar) { ?> stickySidebar<?php } ?>" role="complementary">
			<ul class="xoxo">

	<?php if ($apfy_iphone_appURL || $apfy_ipad_appURL || $apfy_android_appURL || $apfy_macApp_appURL || $apfy_pc_appURL || $apfy_wp7_appURL || $apfy_blackberry_appURL ) { ?>
	<li id="getapp">
		<blockquote>
		
		<div class="loading"></div>
		
		<center>
			<p>Get this app <em>for:</em></p>
			<?php if ($apfy_iphone && $apfy_iphone_appURL) { ?>
				<a class="dliphone" href="<?php echo $apfy_iphone_appURL; ?>">iPhone</a>
			<?php } ?>
			<?php if ($apfy_ipad && $apfy_ipad_appURL) { ?>
				<a class="dlipad" href="<?php echo $apfy_ipad_appURL; ?>">iPad</a>
			<?php } ?>
			<?php if ($apfy_android && $apfy_android_appURL) { ?>
				<a class="dlandroid" href="<?php echo $apfy_android_appURL; ?>">Android</a>
			<?php } ?>
			<?php if ($apfy_wp7 && $apfy_wp7_appURL) { ?>
				<a class="dlwp7" href="<?php echo $apfy_wp7_appURL; ?>">WP7</a>
			<?php } ?>
			<?php if ($apfy_macApp && $apfy_macApp_appURL) { ?>
				<a class="dlmacapp" href="<?php echo $apfy_macApp_appURL; ?>">Mac</a>
			<?php } ?>
			<?php if ($apfy_pc && $apfy_pc_appURL) { ?>
				<a class="dlpc" href="<?php echo $apfy_pc_appURL; ?>">PC</a>
			<?php } ?>
			<?php if ($apfy_blackberry && $apfy_blackberry_appURL) { ?>
				<a class="dlblackberry" href="<?php echo $apfy_blackberry_appURL; ?>">BB</a>
			<?php } ?>
			<div class="clear"></div>
			</center>
		</blockquote>
	</li>
	<?php } ?>

	<li id="social">
		<?php if ($apfy_facebookURL) { ?>
			<a class="facebook" href="<?php echo $apfy_facebookURL; ?>" target="_blank" title="Facebook"></a>
		<?php } ?>
		<?php if ($apfy_twitterURL) { ?>
			<a class="twitter" href="<?php echo $apfy_twitterURL; ?> " target="_blank" title="Twitter"></a>
		<?php } ?>
		<?php if ($apfy_googlePlusURL) { ?>
			<a class="gplus" href="<?php echo $apfy_googlePlusURL; ?>" target="_blank" title="Google+"></a>
		<?php } ?>
		<?php if ($apfy_RSSicon == "true") { ?>
			<a class="feed" href="<?php bloginfo('rss2_url'); ?> " target="_blank" title="Subscribe"></a>
		<?php } ?>
	</li>

  <?php
  	// A second sidebar for widgets, just because.
  	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
      <?php dynamic_sidebar( 'secondary-widget-area' ); ?>
    <?php endif; ?>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>


		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

