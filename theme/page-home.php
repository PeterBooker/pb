<?php
/**
 * The template for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

get_header();
?>
<section id="content">
	<div class="panels">
		<div class="title-panel">
			<h1 class="title">Hi, my name is Peter.</h1>
			<h4 class="sub-title">I solve problems faster than I create them.</h4>
		</div>
		<div class="panel">
			<div class="main">
				<h2>Building Tools for the WordPress Project</h2>
				<p>WPDirectory offers regex based text search of all 2+ million files in the WordPress Plugin and Theme Directories. It combines trigram indexing and concurrenct searching to deliver results in around 10 seconds.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/projects/wpdirectory/' ) ); ?>">Read More</a>
			</div>
			<div class="sub">
				<img src="http://via.placeholder.com/640x360" alt="Placeholder Image" />
			</div>
		</div>
		<div class="panel">
			<div class="sub">
				<img src="http://via.placeholder.com/640x360" alt="Placeholder Image" />
			</div>
			<div class="main">
				<h2>I build things which save people time and help them reach their potential.</h2>
				<p>From </p>
				<a class="button" href="<?php echo esc_url( home_url( '/projects/wpdirectory/' ) ); ?>">My Work</a>
			</div>
		</div>
		<div class="panel">Three</div>
		<div class="panel">Four</div>
	</div><!-- .panels -->
</section>
<?php
get_footer();
