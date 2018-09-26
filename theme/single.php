<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package peterbooker
 */

get_header();
?>
<section id="content">
	<div class="panels">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );
		endwhile; // End of the loop.
		?>
	</div><!-- .panels -->
</section>
<?php
get_footer();
