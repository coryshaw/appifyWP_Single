<?php include (TEMPLATEPATH . '/include-content-header.php'); ?>

				<h2 class="page-title"><?php
					printf( __( '%s', 'Appify' ), '' . single_cat_title( '', false ) );
				?></h2>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
<?php include (TEMPLATEPATH . '/include-content-footer.php'); ?>
