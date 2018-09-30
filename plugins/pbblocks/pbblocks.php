<?php
/**
 * Plugin Name: PB Blocks
 * Plugin URI: https://www.peterbooker.com/
 * Description: Custom Blocks for the PeterBooker website.
 * Author: Peter Booker
 * Author URI: https://www.peterbooker.com/
 * Version: 1.0.0
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 *
 * @package peterbooker
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 */
if ( ! defined( 'PBB_VERSION' ) ) {
	define( 'PBB_VERSION', '1.0.0' );
}
if ( ! defined( 'PBB_NAME' ) ) {
	define( 'PBB_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}
if ( ! defined( 'PBB_DIR' ) ) {
	define( 'PBB_DIR', WP_PLUGIN_DIR . '/' . PBB_NAME );
}
if ( ! defined( 'PBB_URL' ) ) {
	define( 'PBB_URL', WP_PLUGIN_URL . '/' . PBB_NAME );
}

/**
 * BLOCK: Basic Block.
 */
require_once PBB_DIR . '/blocks/class-pbpanel.php';
