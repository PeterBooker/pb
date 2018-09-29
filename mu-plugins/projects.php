<?php
/**
 * Registers Projects Custom Post Type
 *
 * @package peterbooker
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the Projects CPT
 */
function pb_create_projects_cpt() {

	/**
	 * Set the Labels to be used for the CPT
	 */
	$labels = array(
		'name' => __( 'Projects', 'pb' ),
		'menu_name' => __( 'Projects', 'pb' ),
		'singular_name' => __( 'Project', 'pb' ),
		'all_items' => __( 'All Projects', 'pb' ),
		'add_new' => _x( 'Add Project', 'pb' ),
		'add_new_item' => __( 'Add New Project', 'pb' ),
		'edit' => __( 'Edit', 'pb' ),
		'edit_item' => __( 'Edit Project', 'pb' ),
		'new_item' => __( 'New Projects', 'pb' ),
		'view' => __( 'View', 'pb' ),
		'view_item' => __( 'View Project', 'pb' ),
		'search_items' => __( 'Search Projects', 'pb' ),
		'not_found' => __( 'No Projects Found', 'pb' ),
		'not_found_in_trash' => __( 'No Projects Found in Trash', 'pb' ),
		'parent' => __( 'Parent Project', 'pb' ),
		'parent_item_colon' => __( 'Project:', 'pb' ),
	);

	/**
	 * Prepare the args used to register the CPT
	 */
	$args = array(
		'labels'              => $labels,
		'description'         => __( 'Tools', 'pb' ),
		'public'              => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => true,
		'show_in_rest'        => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-analytics',
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'          => array(),
		'rewrite'             => array(
			'slug'       => 'project',
			'feeds'      => false,
			'pages'      => false,
			'with_front' => false,
		),
		'has_archive'         => true,
		'can_export'          => true,
	);

	register_post_type( 'pb_projects', $args );

}
add_action( 'init', 'pb_create_projects_cpt' );
