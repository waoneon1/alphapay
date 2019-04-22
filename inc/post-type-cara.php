<?php

add_action( 'init', 'cara_init' );
/**
 * Register a How To post type.
 * How TO / cara
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function cara_init() {
	$labels = array(
		'name'               => _x( 'How To', 'post type general name', 'alpay' ),
		'singular_name'      => _x( 'How To', 'post type singular name', 'alpay' ),
		'menu_name'          => _x( 'How To', 'admin menu', 'alpay' ),
		'name_admin_bar'     => _x( 'How To', 'add new on admin bar', 'alpay' ),
		'add_new'            => _x( 'Add New', 'How To', 'alpay' ),
		'add_new_item'       => __( 'Add New How To', 'alpay' ),
		'new_item'           => __( 'New How To', 'alpay' ),
		'edit_item'          => __( 'Edit How To', 'alpay' ),
		'view_item'          => __( 'View How To', 'alpay' ),
		'all_items'          => __( 'All How To', 'alpay' ),
		'search_items'       => __( 'Search How To', 'alpay' ),
		'parent_item_colon'  => __( 'Parent How To', 'alpay' ),
		'not_found'          => __( 'No How To found.', 'alpay' ),
		'not_found_in_trash' => __( 'No How To found in Trash.', 'alpay' )

	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'alpay' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cara' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-book-alt',
		'supports'           => array( 'title', 'page-attributes')
	);

	register_post_type( 'cara', $args );
}

?>