<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package peterbooker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="theme-color" content="#C3073F">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="header">
		<div class="bar">
			<canvas id="bar-bg"></canvas>
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Peter Booker">
				<span class="p">P</span>
				<span class="b">B</span>
			</a>
			<div id="burger" class="bar-icon" data-toggle="primary-menu">
				<button class="burger-icon" type="button" aria-controls="primary-menu" aria-expanded="false"></button>
			</div>
		</div>

		<div id="menu-area">
			<?php get_template_part( 'template-parts/menu' ); ?>

			<div class="social-highlight">
				<h5>Contact</h5>
				<ul class="menu">
					<li><a href="mailto: <?php echo esc_attr( antispambot( 'mail@peterbooker.com' ) ); ?>" title="Email"><?php pb_the_icon( 'envelope' ); ?></a></li>
					<li><a href="https://twitter.com/peter_booker/" title="Twitter"><?php pb_the_icon( 'twitter' ); ?></a></li>
					<li><a href="https://www.reddit.com/user/peterbooker/" title="Reddit"><?php pb_the_icon( 'reddit' ); ?></a></li>
					<li><a href="https://profiles.wordpress.org/peterbooker/" title="WordPress"><?php pb_the_icon( 'wordpress' ); ?></a></li>
					<li><a href="https://github.com/PeterBooker/" title="Github"><?php pb_the_icon( 'github' ); ?></a></li>
				</ul>
			</div>

			<div class="project-highlight">
				<h5>Latest Projects</h5>
				<div class="projects">
					<div class="project"></div>
					<div class="project"></div>
					<div class="project"></div>
					<div class="project"></div>
				</div>
			</div>
		</div><!-- #menu-area -->
	</header><!-- #masthead -->
