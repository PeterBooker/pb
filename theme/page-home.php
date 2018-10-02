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
				<h2><a href="<?php echo esc_url( home_url( '/project/wordpress-directory-code-search/' ) ); ?>">Regex search of 2 million files. How hard can it be?</a></h2>
				<p>I recently explored speeding up the process of downloading and regex searching all code in the WordPress Plugin and Theme Directories. The current methods use PHP scripts to download and extract every plugin and theme zip archive and then perform searches using tools like grep, ag, ripgrep, etc. This process could take the best part of a day.</p>
				<p>Read about the journey, what worked, what didn't work and what I settled on.</p>
				<a class="button" href="<?php echo esc_url( home_url( '/project/wordpress-directory-code-search/' ) ); ?>">Read More</a>
			</div>
			<div class="sub">
				<div class="thumbnail">
					<div class="post-thumbnail">
						<a href="<?php echo esc_url( home_url( '/project/wordpress-directory-code-search/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/feature-wpdirectory.png' ); ?>" alt="Code Editor" />
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="panel darkred">
			<div class="main">
				<h3>Job Opportunities</h3>
				<p>Looking for work focused on WordPress and/or the Go language. Experience creating, scaling and maintaing user-friendly customisations/integrations for WordPress. Excellent track record on working with and supporting customers through all mediums. Broad experience with Go from REST APIs, CLI Tools all the way to visual displays.</p>
				<p>If you have something you think I would be a good fit for send me an <a href="mailto: <?php echo esc_attr( antispambot( 'mail@peterbooker.com' ) ); ?>" title="Email">email</a>.</p>
			</div>
			<div class="sub">
				<h3>Current Focus</h3>
				<p>I am working my way through Computer Science degree material online to expand my knowledge of algorithms and patterns. This has paid off by helping me to better specify problems, improving my ability to troubleshoot and solve them.</p>
				<p>My current focus is on learning to use the Qt framework for creating cross-platform desktop applications in Go and improving my workflow with CI/CD through testing and Travis.</p>
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
