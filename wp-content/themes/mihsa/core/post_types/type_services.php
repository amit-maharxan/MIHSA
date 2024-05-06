<?php

class mihsa_services_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'ewhere_services_init' ) );
	}

	/**
	 * Register a custom post type called "services".
	 * @return void
	 */
	function ewhere_services_init() {
	    $labels = array(
	        'name'                  => _x( 'Services', 'Post type general name', 'mihsa_services' ),
	        'singular_name'         => _x( 'Service', 'Post type singular name', 'mihsa_services' ),
	        'menu_name'             => _x( 'Services', 'Admin Menu text', 'mihsa_services' ),
	        'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'mihsa_services' ),
	        'add_new'               => __( 'Add New', 'mihsa_services' ),
	        'add_new_item'          => __( 'Add New Service', 'mihsa_services' ),
	        'new_item'              => __( 'New Service', 'mihsa_services' ),
	        'edit_item'             => __( 'Edit Service', 'mihsa_services' ),
	        'view_item'             => __( 'View Services', 'mihsa_services' ),
	        'all_items'             => __( 'All Services', 'mihsa_services' ),
	        'search_items'          => __( 'Search Service', 'mihsa_services' ),
	        'parent_item_colon'     => __( 'Parent Services:', 'mihsa_services' ),
	        'not_found'             => __( 'No Service found.', 'mihsa_services' ),
	        'not_found_in_trash'    => __( 'No Service found in Trash.', 'mihsa_services' ),
	        'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mihsa_services' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mihsa_services' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mihsa_services' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mihsa_services' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'services' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor', 'thumbnail', 'page-attributes' ), // Add 'page-attributes' here
	        'menu_icon'		=> 'dashicons-marker',
	    );

	    register_post_type( 'services', $args );
	}

}
new mihsa_services_post_type();