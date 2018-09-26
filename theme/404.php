<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package peterbooker
 */

get_header();
?>
<section id="content">
	<div class="panels">

		<section class="no-results not-found">
			<div class="title-panel">
				<header class="entry-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pb' ); ?></h1>
				</header>
			</div>
			<div class="panel">
				<div class="container">
					<div class="row">
						<div class="full">
							<div class="entry-content">
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pb' ); ?></p>

								<?php
								the_widget( 'WP_Widget_Recent_Posts' );
								?>

								<div class="widget widget_categories">
									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'pb' ); ?></h2>
									<ul>
										<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										?>
									</ul>
								</div><!-- .widget -->

								<?php
								/* translators: %1$s: smiley */
								$pb_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'pb' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$pb_archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
								?>
							</div><!-- .entry-content -->
						</div><!-- .full -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- .panel -->
		</section>

	</div><!-- .panels -->
</section>
<?php
get_footer();
