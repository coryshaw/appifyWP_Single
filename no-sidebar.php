<?php
/*
Template Name: Wide Content - No Sidebar
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

get_header('inside'); ?>

<div class="content-wrapper" id="scrollable">
<div id="ios-scroll">
<div class="content" role="main">
<div class="wide-column nosidebar">

<div class="wide-column-content single">

	<?php include (TEMPLATEPATH . '/includes/appName_logo.php'); ?>

</div>
<div class="wide-column-content singlebody">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="single post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<h2 class="single-post"><?php the_title(); ?></h2>
				<?php edit_post_link( __( 'Edit', 'Appify' ), '<span class="edit-link">', '</span>' ); ?>
<div class="meta">
<p>Posted <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?> by <?php echo get_the_author(); ?></p>
 


</div> <!-- end meta -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Appify' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'Appify_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'Appify' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'Appify' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>
					<div class="clear"></div>
				</div><!-- #post-## -->

<?php endwhile; ?>	

</div><!-- end wide-column content -->
</div><!-- end wide-column -->

<div class="clear"></div>
<?php get_footer(); ?>