<?php

class mihsa_testimonial_post_type {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'ewhere_testimonial_init' ) );
	}

	/**
	 * Register a custom post type called "testimonial".
	 * @return void
	 */
	function ewhere_testimonial_init() {
	    $labels = array(
	        'name'                  => _x( 'Testimonials', 'Post type general name', 'mihsa_testimonial' ),
	        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'mihsa_testimonial' ),
	        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'mihsa_testimonial' ),
	        'name_admin_bar'        => _x( 'Testimonials', 'Add New on Toolbar', 'mihsa_testimonial' ),
	        'add_new'               => __( 'Add New', 'mihsa_testimonial' ),
	        'add_new_item'          => __( 'Add New Testimonials', 'mihsa_testimonial' ),
	        'new_item'              => __( 'New Testimonial', 'mihsa_testimonial' ),
	        'edit_item'             => __( 'Edit Testimonial', 'mihsa_testimonial' ),
	        'view_item'             => __( 'View Testimonials', 'mihsa_testimonial' ),
	        'all_items'             => __( 'All Testimonials', 'mihsa_testimonial' ),
	        'search_items'          => __( 'Search Testimonials', 'mihsa_testimonial' ),
	        'parent_item_colon'     => __( 'Parent Testimonials:', 'mihsa_testimonial' ),
	        'not_found'             => __( 'No Testimonials found.', 'mihsa_testimonial' ),
	        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'mihsa_testimonial' ),
	        'featured_image'        => _x( 'Testimonials Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mihsa_testimonial' ),
	        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mihsa_testimonial' ),
	        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mihsa_testimonial' ),
	        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mihsa_testimonial' ),
	    );

	    $args = array(
	        'labels'             	=> $labels,
	        'public'             	=> true,
	        'publicly_queryable' 	=> true,
	        'show_ui'            	=> true,
	        'show_in_menu'       	=> true,
	        'query_var'          	=> true,
	        'rewrite'            	=> array( 'slug' => 'testimonial' ),
	        'capability_type'    	=> 'post',
	        'has_archive'        	=> true,
	        'hierarchical'       	=> true,
	        'menu_position'      	=> null,
	        'supports'           	=> array( 'title', 'editor', 'thumbnail' ),
	        'menu_icon'      		=> 'dashicons-marker',
	    );

	    register_post_type( 'testimonial', $args );
	}

}
new mihsa_testimonial_post_type();