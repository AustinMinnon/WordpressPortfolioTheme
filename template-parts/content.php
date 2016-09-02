<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_single() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<div class="blog-post">
			<?php the_post_thumbnail(); ?>

			<?php if (is_home() ) { ?>
				<p><?php the_excerpt(); ?></p>
			<?php } else { ?>
				<p><?php the_content(); ?></p>
			<?php } ?>



			<div class="callout">
				<ul class="menu simple">
					<li><a href="#">Posted on: <?php echo get_the_date('F j, Y'); ?> </a></li>
					<li><a href="#">Comments: <?php comments_number(); ?></a></li>
				</ul>
			</div>
		</div>

		<?php
		endif; ?>

</article><!-- #post-## -->
