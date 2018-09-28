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
			<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
			<h4 class="sub-title"><?php bloginfo( 'description' ); ?></h4>
		</div>

		<div class="panel">
			<div class="main">
				<h2><a href="<?php echo esc_url( home_url( '/projects/wpdirectory/' ) ); ?>">Regex search of 2 million files. How hard can it be?</a></h2>
				<p>I recently explored speeding up the process of downloading and regex searching all code in the WordPress Plugin and Theme Directories. The current methods use PHP scripts to download and extract every plugin and theme zip archive and then perform searches using tools like grep, ag, ripgrep, etc. This process could take the best part of a day.</p>
				<p>Read about the journey, what worked, what didn't work and what I settled on.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/projects/wpdirectory/' ) ); ?>">Read More</a>
			</div>
			<div class="sub">
				<div class="thumbnail">
					<div class="post-thumbnail">
						<a href="<?php echo esc_url( home_url( '/projects/wpdirectory/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/feature-wpdirectory.png' ); ?>" alt="Code Editor" />
						</a>
					</div>
				</div>
			</div>
		</div>

		<?php pb_recent_posts(); ?>

		<?php pb_blocks(); ?>

		<div class="panel">
			<div class="main">
				<h2>I build things which save people time and help them reach their potential.</h2>
				<p>My projects range from websites and services to REST APIs, micro services and CLI tools. I love identifying problems, researching solutions, prototyping ideas and developing solutions.</p>
				<p>Take a look at my projects to see more.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">Projects</a>
			</div>
			<div class="sub">
				<div class="thumbnail">
					<div class="post-thumbnail">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/feature-wpdirectory.png' ); ?>" alt="Code Editor" />
					</div>
				</div>
			</div>
		</div>
	</div><!-- .panels -->
</section>
<?php
get_footer();
