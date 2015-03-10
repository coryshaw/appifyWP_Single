<?php include (TEMPLATEPATH . '/include-content-header.php'); ?>
				<h2 class="page-title"><?php
					printf( __( '%s', 'Appify' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h2>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
<?php include (TEMPLATEPATH . '/include-content-footer.php'); ?>