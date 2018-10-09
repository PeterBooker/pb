/**
 * BLOCK: pbblocks
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

const { __ } = wp.i18n
const { registerBlockType } = wp.blocks
const { InnerBlocks } = wp.editor

/**
 * Register: a Gutenberg Block.
 */
registerBlockType( 'pb/sub', {

	title: __( 'Column - Sub' ),
	parent: [ 'pb/panel' ],
	icon: 'welcome-widgets-menus',
	description: __( 'A single sub column within a panel block.' ),
	category: 'layout',
	keywords: [
        __( 'Column' ),
		__( 'Sub' ),
		__( 'PB Column' ),
	],

	supports: {
		inserter: false,
	},

	attributes: {},

	edit: function() {
        const type = 'sub'

		return (
			<div className={type}><InnerBlocks /></div>
		);
	},

	save: function() {
		const type = 'sub'

		return (
			<div className={type}><InnerBlocks.Content /></div>
		);
	},
} );
