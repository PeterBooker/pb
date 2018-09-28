<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

?>

<div class="panel">
	<div class="container">
		<div class="row">
			<div class="full">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
						<div class="thumbnail">
							<?php pb_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
						<?php the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
					</header>

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
				</article><!-- #post-<?php the_ID(); ?> -->
			</div><!-- .full -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .panel -->


