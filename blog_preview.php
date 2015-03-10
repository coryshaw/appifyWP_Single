<?php
/*
Template Name: Blog Preview
*/

?>

        <?php

         $lastposts = get_posts('numberposts=5&orderby=date');
         foreach($lastposts as $post) :
            setup_postdata($post);
         ?>
		 <div class="blog-post-preview">
         <div class="post-title"><em class="pointer"></em><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?>
			<em class="comments"><p></p><?php comments_number('0', '1', '%'); ?></em>
		</a></div>
		 <div class="meta">
		<p><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></p>
		 
		
		
		</div> <!-- end meta -->
		
         <?php the_excerpt(); ?>
		 </div><!-- end blog post preview -->
         <?php endforeach; ?>

