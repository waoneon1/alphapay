<?php

add_action( 'init', 'produk_init' );
/**
 * Register a Produk post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function produk_init() {
	$labels = array(
		'name'               => _x( 'Produk', 'post type general name', 'alpay' ),
		'singular_name'      => _x( 'Produk', 'post type singular name', 'alpay' ),
		'menu_name'          => _x( 'Produk', 'admin menu', 'alpay' ),
		'name_admin_bar'     => _x( 'Produk', 'add new on admin bar', 'alpay' ),
		'add_new'            => _x( 'Add New', 'Produk', 'alpay' ),
		'add_new_item'       => __( 'Add New Produk', 'alpay' ),
		'new_item'           => __( 'New Produk', 'alpay' ),
		'edit_item'          => __( 'Edit Produk', 'alpay' ),
		'view_item'          => __( 'View Produk', 'alpay' ),
		'all_items'          => __( 'All Produk', 'alpay' ),
		'search_items'       => __( 'Search Produk', 'alpay' ),
		'parent_item_colon'  => __( 'Parent Produk', 'alpay' ),
		'not_found'          => __( 'No Produk found.', 'alpay' ),
		'not_found_in_trash' => __( 'No Produk found in Trash.', 'alpay' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'alpay' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'produk' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-format-aside',
		'supports'           => array( 'title', 'editor', 'page-attributes')
	);

	register_post_type( 'produk', $args );
}

function jenis_produk(){

	//set the name of the taxonomy
	$taxonomy = 'jenis_produk';
	//set the post types for the taxonomy
	$object_type = 'produk';

	//populate our array of names for our taxonomy
	$labels = array(
		'name'               => 'Jenis Produk',
		'singular_name'      => 'Jenis Produk',
		'search_items'       => 'Search Jenis Produk',
		'all_items'          => 'All Jenis Produk',
		'parent_item'        => 'Parent Jenis Produk',
		'parent_item_colon'  => 'Parent Jenis Produk:',
		'update_item'        => 'Update Jenis Produk',
		'edit_item'          => 'Edit Jenis Produk',
		'add_new_item'       => 'Add New Jenis Produk',
		'new_item_name'      => 'New Type Jenis Produk',
		'menu_name'          => 'Jenis Produk'
	);

	//define arguments to be used
	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'show_ui'           => true,
		'how_in_nav_menus'  => true,
		'public'            => true,
		'show_admin_column' => true,
		'query_var'         => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','jenis_produk');

?>