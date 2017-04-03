<?php 
function brick_teammember() {

		
		$labels = array(
			'name'               => esc_html__('Teammembers', 'ninzio-addons'),
			'singular_name'      => esc_html__('Teammembers', 'ninzio-addons'),
			'add_new'            => esc_html__('Add new', 'ninzio-addons'),
			'add_new_item'       => esc_html__('Add new Teammember', 'ninzio-addons'),
			'edit_item'          => esc_html__('Edit Teammember', 'ninzio-addons'),
			'new_item'           => esc_html__('New Teammember', 'ninzio-addons'),
			'all_items'          => esc_html__('All Teammembers', 'ninzio-addons'),
			'view_item'          => esc_html__('View Teammember', 'ninzio-addons'),
			'search_items'       => esc_html__('Search Teammembers', 'ninzio-addons'),
			'not_found'          => esc_html__('No Teammembers found', 'ninzio-addons'),
			'not_found_in_trash' => esc_html__('No Teammembers found in trash', 'ninzio-addons'), 
			'parent_item_colon'  => '',
			'menu_name'          => esc_html__('Teammembers', 'ninzio-addons')
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true, 
			'show_in_menu'       => true, 
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'teammembers','with_front' => false ),
			'capability_type'    => 'post',
			'has_archive'        => true, 
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon'          => 'dashicons-id',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt'),
		);

		register_post_type( 'teammembers', $args );
	}

	add_action( 'init', 'brick_teammember' );
 ?>