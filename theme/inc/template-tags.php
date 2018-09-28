<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package peterbooker
 */

if ( ! function_exists( 'pb_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function pb_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'pb' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'pb_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function pb_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'pb' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'pb_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function pb_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'pb' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'pb' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'pb' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'pb' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'pb' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}
	}
endif;

if ( ! function_exists( 'pb_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function pb_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'pb_recent_posts' ) ) :
	/**
	 * Displays recent posts.
	 */
	function pb_recent_posts() {
		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => 3,
		);

		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
			?>
			<div class="panel">
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="sub">
					<div class="thumbnail">
						<?php pb_post_thumbnail(); ?>
					</div>
				</div>
				<div class="main">
					<h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</div>
				<?php else : ?>
				<div class="full">
					<h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
					<div class="excerpt"><?php the_excerpt(); ?></div>
				</div>
				<?php endif; ?>
			</div>
			<?php
			}
			wp_reset_postdata();
		} else {
			?>

			<?php
		}
	}
endif;

if ( ! function_exists( 'pb_blocks' ) ) :
	/**
	 * Displays recent posts.
	 */
	function pb_blocks() {
		$blocks = array(
			array(
				'title' => 'WPDirectory',
				'url'   => 'https://github.com/wpdirectory/wpdir',
				'text'  => 'Regex search of all WordPress Plugin and Theme code.',
			),
			array(
				'title' => 'Summit',
				'url'   => 'https://github.com/PeterBooker/summit',
				'text'  => 'Electron starter kit built on React and Go.',
			),
			array(
				'title' => 'Factorigo',
				'url'   => 'https://github.com/PeterBooker/factorigo',
				'text'  => 'Tech demo of building the game Factorio in Go.',
			),
			array(
				'title' => 'Foundation Utils',
				'url'   => 'https://github.com/PeterBooker/wp-foundation-utils',
				'text'  => 'Collection of Foundation framework helpers for WordPress.',
			),
			array(
				'title' => 'PromPress',
				'url'   => 'https://github.com/PeterBooker/wp-prompress',
				'text'  => 'Metrics (Prometheus) client for WordPress.',
			),
			array(
				'title' => 'WPDev',
				'url'   => 'https://github.com/PeterBooker/wpdev',
				'text'  => 'Docker Compose based development environment for WordPress.',
			),
		);
		?>
		<div class="panel collapse blocks">
			<?php
			foreach ( $blocks as $block ) {
				?>
				<div class="block">
					<h4><a href="<?php echo esc_url( $block['url'] ); ?>"><?php echo esc_html( $block['title'] ); ?></a></h4>
					<p><?php echo esc_html( $block['text'] ); ?></p>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
endif;
