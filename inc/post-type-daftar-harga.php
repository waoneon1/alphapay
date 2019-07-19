<?php

add_action( 'init', 'daftar_harga_init' );
/**
 * Register a Daftar Harga post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function daftar_harga_init() {
	$labels = array(
		'name'               => _x( 'Daftar Harga', 'post type general name', 'alpay' ),
		'singular_name'      => _x( 'Daftar Harga', 'post type singular name', 'alpay' ),
		'menu_name'          => _x( 'Daftar Harga', 'admin menu', 'alpay' ),
		'name_admin_bar'     => _x( 'Daftar Harga', 'add new on admin bar', 'alpay' ),
		'add_new'            => _x( 'Add New', 'Daftar Harga', 'alpay' ),
		'add_new_item'       => __( 'Add New Daftar Harga', 'alpay' ),
		'new_item'           => __( 'New Daftar Harga', 'alpay' ),
		'edit_item'          => __( 'Edit Daftar Harga', 'alpay' ),
		'view_item'          => __( 'View Daftar Harga', 'alpay' ),
		'all_items'          => __( 'All Daftar Harga', 'alpay' ),
		'search_items'       => __( 'Search Daftar Harga', 'alpay' ),
		'parent_item_colon'  => __( 'Parent Daftar Harga', 'alpay' ),
		'not_found'          => __( 'No Daftar Harga found.', 'alpay' ),
		'not_found_in_trash' => __( 'No Daftar Harga found in Trash.', 'alpay' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'alpay' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'daftar-harga' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-format-aside',
		'supports'           => array( 'title', 'editor', 'page-attributes')
	);

	register_post_type( 'daftar_harga', $args );
}

?>