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
registerBlockType( 'pb/full', {

	title: __( 'Column - Full' ),
	parent: [ 'pb/panel' ],
	icon: 'welcome-widgets-menus',
	description: __( 'A single full width column within a panel block.' ),
	category: 'layout',
	keywords: [
        __( 'Column' ),
		__( 'Full' ),
		__( 'PB Column' ),
	],

	supports: {
		inserter: false,
	},

	attributes: {},

	edit: function() {
        const type = 'full'

		return (
			<div className={type}><InnerBlocks /></div>
		);
	},

	save: function() {
		const type = 'full'

		return (
			<div className={type}><InnerBlocks.Content /></div>
		);
	},
} );
