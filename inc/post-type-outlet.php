<?php

add_action( 'init', 'outlet_init' );
/**
 * Register a Outlet post type.
 * How TO / outlet
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function outlet_init() {
	$labels = array(
		'name'               => _x( 'Outlet', 'post type general name', 'alpay' ),
		'singular_name'      => _x( 'Outlet', 'post type singular name', 'alpay' ),
		'menu_name'          => _x( 'Outlet', 'admin menu', 'alpay' ),
		'name_admin_bar'     => _x( 'Outlet', 'add new on admin bar', 'alpay' ),
		'add_new'            => _x( 'Add New', 'Outlet', 'alpay' ),
		'add_new_item'       => __( 'Add New Outlet', 'alpay' ),
		'new_item'           => __( 'New Outlet', 'alpay' ),
		'edit_item'          => __( 'Edit Outlet', 'alpay' ),
		'view_item'          => __( 'View Outlet', 'alpay' ),
		'all_items'          => __( 'All Outlet', 'alpay' ),
		'search_items'       => __( 'Search Outlet', 'alpay' ),
		'parent_item_colon'  => __( 'Parent Outlet', 'alpay' ),
		'not_found'          => __( 'No Outlet found.', 'alpay' ),
		'not_found_in_trash' => __( 'No Outlet found in Trash.', 'alpay' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'alpay' ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'outlet' ),
		'capability_type'    => 'post',
		'publicaly_queryable'=> false,
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-store',
		'supports'           => array( 'title' )
	);

	register_post_type( 'outlet', $args );
}

?>