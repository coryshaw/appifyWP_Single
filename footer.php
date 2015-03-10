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
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage AppifyWP
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
<div class="left">
<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	<?php if ($apfy_app_name) { ?>
		<?php echo stripslashes($apfy_app_name); ?>
	<?php } else { ?>
		<?php stripslashes(bloginfo('name')); ?>
	<?php } ?>
</a> is powered by <a target="_blank" href="http://www.wordpress.org">Wordpress</a> and <a target="_blank" href="http://appifywp.com<?php if ($apfy_affiliateID){ echo '?ap_id='.$apfy_affiliateID ; } ?>">AppifyWP</a>. 
</div>

<div class="copy">Copyright &copy; <?php bloginfo( 'name' ); ?> <?php echo date("Y");  ?></div>
				
			
		</div><!-- #colophon -->
		<div class="clear"></div>
	</div><!-- #footer -->

	</div><!-- #content -->
	</div><!-- #ios scroll -->
	</div><!-- #content wrapper -->

</div><!-- #wrapper -->
</div><!-- .outer wrap -->




<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>


</body>
</html>
