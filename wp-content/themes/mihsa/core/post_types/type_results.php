<?php

class mihsa_results_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'ewhere_results_init' ) );
	}

	/**
	 * Register a custom post type called "results".
	 * @return void
	 */
	function ewhere_results_init() {
	    $labels = array(
	        'name'                  => _x( 'Results', 'Post type general name', 'mihsa_results' ),
	        'singular_name'         => _x( 'Result', 'Post type singular name', 'mihsa_results' ),
	        'menu_name'             => _x( 'Results', 'Admin Menu text', 'mihsa_results' ),
	        'name_admin_bar'        => _x( 'Results', 'Add New on Toolbar', 'mihsa_results' ),
	        'add_new'               => __( 'Add New', 'mihsa_results' ),
	        'add_new_item'          => __( 'Add New Result', 'mihsa_results' ),
	        'new_item'              => __( 'New Result', 'mihsa_results' ),
	        'edit_item'             => __( 'Edit Result', 'mihsa_results' ),
	        'view_item'             => __( 'View Results', 'mihsa_results' ),
	        'all_items'             => __( 'All Results', 'mihsa_results' ),
	        'search_items'          => __( 'Search Result', 'mihsa_results' ),
	        'parent_item_colon'     => __( 'Parent Results:', 'mihsa_results' ),
	        'not_found'             => __( 'No Result found.', 'mihsa_results' ),
	        'not_found_in_trash'    => __( 'No Result found in Trash.', 'mihsa_results' ),
	        'featured_image'        => _x( 'Result Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mihsa_results' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mihsa_results' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mihsa_results' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mihsa_results' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'results' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'      		=> 'dashicons-marker',
	    );

	    register_post_type( 'results', $args );
	}

}
new mihsa_results_post_type();