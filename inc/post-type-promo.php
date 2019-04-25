<?php

add_action( 'init', 'promo_init' );
/**
 * Register a Promo post type.
 * Promo
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function promo_init() {
	$labels = array(
		'name'               => _x( 'Promo', 'post type general name', 'alpay' ),
		'singular_name'      => _x( 'Promo', 'post type singular name', 'alpay' ),
		'menu_name'          => _x( 'Promo', 'admin menu', 'alpay' ),
		'name_admin_bar'     => _x( 'Promo', 'add new on admin bar', 'alpay' ),
		'add_new'            => _x( 'Add New', 'Promo', 'alpay' ),
		'add_new_item'       => __( 'Add New Promo', 'alpay' ),
		'new_item'           => __( 'New Promo', 'alpay' ),
		'edit_item'          => __( 'Edit Promo', 'alpay' ),
		'view_item'          => __( 'View Promo', 'alpay' ),
		'all_items'          => __( 'All Promo', 'alpay' ),
		'search_items'       => __( 'Search Promo', 'alpay' ),
		'parent_item_colon'  => __( 'Parent Promo', 'alpay' ),
		'not_found'          => __( 'No Promo found.', 'alpay' ),
		'not_found_in_trash' => __( 'No Promo found in Trash.', 'alpay' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'alpay' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'promo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 6,
		'menu_icon'			 => 'dashicons-tag',
		'supports'           => array( 'title')
	);

	register_post_type( 'promo', $args );
}

function jenis_promo(){

	//set the name of the taxonomy
	$taxonomy = 'jenis-promo';
	//set the post types for the taxonomy
	$object_type = 'promo';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Jenis Promo',
		'singular_name'      => 'Jenis Promo',
		'search_items'       => 'Search Jenis Promo',
		'all_items'          => 'All Jenis Promo',
		'parent_item'        => 'Parent Jenis Promo',
		'parent_item_colon'  => 'Parent Jenis Promo:',
		'update_item'        => 'Update Jenis Promo',
		'edit_item'          => 'Edit Jenis Promo',
		'add_new_item'       => 'Add New Jenis Promo',
		'new_item_name'      => 'New Type Jenis Promo',
		'menu_name'          => 'Jenis Promo'
	);

	//define arguments to be used
	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'how_in_nav_menus'  => true,
		'public'            => false,
		'show_admin_column' => true,
		'query_var'         => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','jenis_promo');
?>