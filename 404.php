<?php include (TEMPLATEPATH . '/include-content-header.php'); ?>


			<div id="post-0" class="post error404 not-found">
				<h2 class="single-post"><?php _e( 'Not Found', 'Appify' ); ?></h2>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'Appify' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

			<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
	
</div><!-- end wide-column content -->
</div><!-- end wide-column -->

<div class="narrow-column">
  <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>