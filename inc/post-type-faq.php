<?php

add_action( 'init', 'faq_init' );
/**
 * Register a FAQ post type.
 * FAQ
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function faq_init() {
	$labels = array(
		'name'               => _x( 'FAQ', 'post type general name', 'alpay' ),
		'singular_name'      => _x( 'FAQ', 'post type singular name', 'alpay' ),
		'menu_name'          => _x( 'FAQ', 'admin menu', 'alpay' ),
		'name_admin_bar'     => _x( 'FAQ', 'add new on admin bar', 'alpay' ),
		'add_new'            => _x( 'Add New', 'FAQ', 'alpay' ),
		'add_new_item'       => __( 'Add New FAQ', 'alpay' ),
		'new_item'           => __( 'New FAQ', 'alpay' ),
		'edit_item'          => __( 'Edit FAQ', 'alpay' ),
		'view_item'          => __( 'View FAQ', 'alpay' ),
		'all_items'          => __( 'All FAQ', 'alpay' ),
		'search_items'       => __( 'Search FAQ', 'alpay' ),
		'parent_item_colon'  => __( 'Parent FAQ', 'alpay' ),
		'not_found'          => __( 'No FAQ found.', 'alpay' ),
		'not_found_in_trash' => __( 'No FAQ found in Trash.', 'alpay' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'alpay' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'faq-agen' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 6,
		'menu_icon'			 => 'dashicons-admin-comments',
		'supports'           => array( 'title', 'page-attributes')
	);

	register_post_type( 'faq', $args );
}
?>