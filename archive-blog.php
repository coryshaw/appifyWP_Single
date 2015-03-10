<?php
/*
Template Name: Blog Archive
*/

?>
<?php include (TEMPLATEPATH . '/include-content-header.php'); ?>

				<h2 class="page-title">
<?php the_title(); ?>
			</h2>

<article>

		<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<div class="post-title"><em class="pointer"></em><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"><?php the_title(); ?>
			<em class="comments"><p></p><?php comments_number('0', '1', '%'); ?></em>
		</a></div><br/>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>


<?php $wp_query = null; $wp_query = $temp;?>

<?php include (TEMPLATEPATH . '/include-content-footer.php'); ?>