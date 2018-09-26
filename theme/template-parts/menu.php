<?php
/**
 * Template part for displaying the menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peterbooker
 */

?>


<nav id="navigation">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>
</nav><!-- #navigation -->
