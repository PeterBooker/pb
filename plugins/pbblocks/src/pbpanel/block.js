/**
 * BLOCK: pbblocks
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './style.scss'
import './editor.scss'

const { __ } = wp.i18n
const { registerBlockType } = wp.blocks
const {
	PanelBody,
	RadioControl,
	ToggleControl,
} = wp.components
const {
	InspectorControls,
	InnerBlocks,
} = wp.editor
const { Fragment } = wp.element

/**
 * Allowed blocks constant is passed to InnerBlocks precisely as specified here.
 * The contents of the array should never change.
 * The array should contain the name of each block that is allowed.
 * In columns block, the only block we allow is 'core/column'.
 *
 * @constant
 * @type {string[]}
*/
const ALLOWED_BLOCKS = [ 'pb/column', 'pb/full', 'pb/main', 'pb/sub', ]

/**
 * Returns the layouts configuration for a given panel type.
 *
 * @param {string} type Type of panel.
 *
 * @return {Object[]} Columns layout configuration.
 */
const getColumnsTemplate = ( type ) => {
	switch ( type ) {
		case 'full':
			return [ [ 'pb/full' ] ]
		case 'split':
			return [
				[ 'pb/main' ],
				[ 'pb/sub' ]
			]
		default:
			return [ [ 'pb/full' ] ]
	}
}

/**
 * Register: a Gutenberg Block.
 *
 * Registers a new block provided a unique name and an object defining its
 * behavior. Once registered, the block is made editor as an option to any
 * editor interface where blocks are implemented.
 *
 * @link https://wordpress.org/gutenberg/handbook/block-api/
 * @param  {string}   name     Block name.
 * @param  {Object}   settings Block settings.
 * @return {?WPBlock}          The block, if it has been successfully
 *                             registered; otherwise `undefined`.
 */
registerBlockType( 'pb/panel', {

	title: __( 'Panel' ),
	icon: 'welcome-widgets-menus',
	category: 'layout',
	keywords: [
		__( 'Panel' ),
		__( 'PB Panel' ),
	],

	attributes: {
		type: {
            type: 'string',
            default: 'full',
		},
		contained: {
            type: 'boolean',
			default: false,
        },
	},

	/**
	 * The edit function describes the structure of your block in the context of the editor.
	 * This represents what the editor will render when the block is used.
	 *
	 * The "edit" property must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 */
	edit: function( props ) {

		const { attributes: { type, contained }, setAttributes } = props;

		function onChangeContained() {
            setAttributes( {
                contained: ! contained
            } )
        }

		return (
			<Fragment>
				<InspectorControls>
					<PanelBody>
						<RadioControl
							label="Panel Type"
							help="The type of Panel to display"
							selected={ type }
							options={ [
								{ label: 'Split', value: 'split' },
								{ label: 'Full', value: 'full' },
							] }
							onChange={ ( option ) => {
								setAttributes( {
									type: option,
								} );
							} }
						/>
						<ToggleControl
							label={ 'Contained' }
							checked={ contained }
							onChange={ onChangeContained }
						/>
					</PanelBody>
				</InspectorControls>
				{ contained ? (
					<div className="pbpanel">
						<div class="container">
							<div class="row">
								<InnerBlocks
								template={ getColumnsTemplate( type ) }
								allowedBlocks={ ALLOWED_BLOCKS } />
							</div>
						</div>
					</div>
				) : (
					<div className="pbpanel">
						<InnerBlocks
							template={ getColumnsTemplate( type ) }
							allowedBlocks={ ALLOWED_BLOCKS } />
					</div>
				)}
			</Fragment>
		);
	},

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by Gutenberg into post_content.
	 *
	 * The "save" property must be specified and must be a valid function.
	 *
	 * @link https://wordpress.org/gutenberg/handbook/block-api/block-edit-save/
	 */
	save: function( props ) {

		const { attributes: { type, contained } } = props;

		return (
			<div className="panel">
			{ contained ? (
				<div className="container">
					<div class="row">
						<InnerBlocks.Content />
					</div>
				</div>
            ) : (
				<InnerBlocks.Content />
			)}
			</div>
		);
	},
} );
