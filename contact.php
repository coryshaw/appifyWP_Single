<?php
/*
Template Name: Contact Form
*/

?>


<?php include (TEMPLATEPATH . '/include-content-header.php'); ?>
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
          <div class="contact">
          	<div class="submitError" style="display: none ;">There was an error submitting the form</div>
          	<form action="#" method="post" id="contactForm" accept-charset="utf-8">
          	  <input type="hidden" name="tizoo" value="<?php echo get_bloginfo( 'admin_email' ); ?>"/>
          	  <input type="hidden" name="subject" value="<?php if ($apfy_app_name) { echo $apfy_app_name; } else { bloginfo('name'); } ?> Contact Form"/>
          	  <input type="hidden" name="submitpath" class="submitpath" value="<?php echo get_bloginfo('template_directory') ?>"/>
          	  <label for="name">Name:</label>
          	  <label class="error" for="name" id="name_error">This field is required.</label>
          	  <input type="text" name="name" class="required" value="" id="name"/>
          	  
          	  <label for="email">Email:</label>
          	  <label class="error" for="email" id="email_error">Must be a valid email address.</label>
          	  <input type="text" name="email" class="required email" value="" id="email"/>
          	  
          	  <label for="message">Message:</label>
          	  <label class="error" for="message" id="message_error">This field is required.</label>
          	  <textarea cols="40" rows="5" class="required" name="message" id="message"></textarea>	  
          
          	<a class="fancy_button contact-submit" href="#" onclick="return false;">
          	  <span style="background-color: #555;">Submit</span>
          	  
          	</a>
          	<div class="onesec"></div>
          
          	</form>
          </div><!-- end contact -->
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

<?php include (TEMPLATEPATH . '/include-content-footer.php'); ?>
