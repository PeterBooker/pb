<?php
/**
 * Template part for displaying single post content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title-panel">
		<header class="entry-header">
			<?php the_title( '<h1 class="title">', '</h1>' ); ?>
			<div class="entry-meta">
				<?php pb_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail">
				<?php pb_post_thumbnail(); ?>
			</div>
			<?php endif; ?>
		</header>
	</div>

	<?php
	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pb' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		)
	);

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pb' ),
			'after'  => '</div>',
		)
	);
	?>

	<div class="panel">
		<div class="container">
			<div class="full">
				<footer class="entry-footer">
					<?php pb_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

