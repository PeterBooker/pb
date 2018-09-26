<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

?>
<section class="no-results not-found">
	<div class="title-panel">
		<header class="entry-header">
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'pb' ); ?></h1>
		</header>
	</div>
	<div class="panel">
		<div class="container">
			<div class="row">
				<div class="full">
					<div class="entry-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) :

						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pb' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url( admin_url( 'post-new.php' ) )
						);

					elseif ( is_search() ) :
						?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pb' ); ?></p>
						<?php
						get_search_form();

					else :
						?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pb' ); ?></p>
						<?php
						get_search_form();

					endif;
					?>
					</div><!-- .entry-content -->
				</div><!-- .full -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .panel -->
</section><!-- #post-<?php the_ID(); ?> -->
