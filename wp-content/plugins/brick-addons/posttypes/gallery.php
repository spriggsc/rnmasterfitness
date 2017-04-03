<?php 
function brickgallery() {
	/*-----------------------------------------------------------------------------------*/
/* Register Trainers post type
/*-----------------------------------------------------------------------------------*/
$t_labels = array(
			'name'               => _x( 'Gallerys', 'post type general name', 'brick' ),
			'singular_name'      => _x( 'Gallery', 'post type singular name', 'brick' ),
			'menu_name'          => _x( 'Gallerys', 'admin menu', 'brick' ),
			'name_admin_bar'     => _x( 'Gallery', 'add new on admin bar', 'brick' ),
			'add_new'            => _x( 'Add New', 'Gallery', 'brick' ),
			'add_new_item'       => __( 'Add New Gallery', 'brick' ),
			'new_item'           => __( 'New Gallery', 'brick' ),
			'edit_item'          => __( 'Edit Gallery', 'brick' ),
			'view_item'          => __( 'View Gallery', 'brick' ),
			'all_items'          => __( 'All Gallerys', 'brick' ),
			'search_items'       => __( 'Search Gallerys', 'brick' ),
			'parent_item_colon'  => __( 'Parent Gallerys:', 'brick' ),
			'not_found'          => __( 'No Gallerys found.', 'brick' ),
			'not_found_in_trash' => __( 'No Gallerys found in Trash.', 'brick' ),
		);

		$t_args = array(
			'labels'             => $t_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'gallery' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'			=> 'dashicons-format-gallery',
			'supports'           => array( 'title')
		);

register_post_type( 'brick_gallery', $t_args );
}

	add_action( 'init', 'brickgallery' );
 ?>