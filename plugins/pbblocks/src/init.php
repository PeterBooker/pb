<?php
/**
 * Blocks Initializer
 *
 * Enqueue CSS/JS of all the blocks.
 *
 * @since   1.0.0
 * @package peterbooker
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * `wp-blocks`: includes block type registration and related functions.
 *
 * @since 1.0.0
 */
function pbblocks_block_assets() {
	wp_enqueue_style(
		'pbblocks-cgb-style-css',
		PBB_URL . '/dist/blocks.style.build.css',
		array( 'wp-blocks' ),
		filemtime( PBB_DIR . '/dist/blocks.style.build.css' )
	);
}
add_action( 'enqueue_block_assets', 'pbblocks_block_assets' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function pbblocks_editor_assets() {
	wp_enqueue_script(
		'pbblocks-block-js',
		PBB_URL . '/dist/blocks.build.js',
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( PBB_DIR . '/dist/blocks.build.js' ),
		true
	);
	wp_enqueue_style(
		'pbblocks-block-editor-css',
		PBB_URL . '/dist/blocks.editor.build.css',
		array( 'wp-edit-blocks' ),
		filemtime( PBB_DIR . '/dist/blocks.editor.build.css' )
	);
}
add_action( 'enqueue_block_editor_assets', 'pbblocks_editor_assets' );
