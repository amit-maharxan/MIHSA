<?php

class mihsa_specials_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'ewhere_specials_init' ) );
	}

	/**
	 * Register a custom post type called "specials".
	 * @return void
	 */
	function ewhere_specials_init() {
	    $labels = array(
	        'name'                  => _x( 'Specials', 'Post type general name', 'mihsa_specials' ),
	        'singular_name'         => _x( 'Special', 'Post type singular name', 'mihsa_specials' ),
	        'menu_name'             => _x( 'Specials', 'Admin Menu text', 'mihsa_specials' ),
	        'name_admin_bar'        => _x( 'Specials', 'Add New on Toolbar', 'mihsa_specials' ),
	        'add_new'               => __( 'Add New', 'mihsa_specials' ),
	        'add_new_item'          => __( 'Add New Special', 'mihsa_specials' ),
	        'new_item'              => __( 'New Special', 'mihsa_specials' ),
	        'edit_item'             => __( 'Edit Special', 'mihsa_specials' ),
	        'view_item'             => __( 'View Specials', 'mihsa_specials' ),
	        'all_items'             => __( 'All Specials', 'mihsa_specials' ),
	        'search_items'          => __( 'Search Special', 'mihsa_specials' ),
	        'parent_item_colon'     => __( 'Parent Specials:', 'mihsa_specials' ),
	        'not_found'             => __( 'No Special found.', 'mihsa_specials' ),
	        'not_found_in_trash'    => __( 'No Special found in Trash.', 'mihsa_specials' ),
	        'featured_image'        => _x( 'Special Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mihsa_specials' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mihsa_specials' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mihsa_specials' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mihsa_specials' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'specials' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'thumbnail' ),
	        'menu_icon'		=> 'dashicons-marker',
	    );

	    register_post_type( 'specials', $args );
	}

}
new mihsa_specials_post_type();