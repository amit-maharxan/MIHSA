<?php
/**
 * MIHSA Template Hooks
 *
 * Action/filter hooks used for MIHSA functions/templates
 *
 * @package 	MIHSA
 *
 * @since     	MIHSA 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions
  ==================================================================================================*/

if (!function_exists('mihsa_output_header')){
	function mihsa_output_header(){
		get_header();
	}
}

if (!function_exists('mihsa_output_header_content')){
	function mihsa_output_header_content(){
		get_template_part('template-parts/header/content', 'header');
	}
}

if (!function_exists('mihsa_output_footer')){
	function mihsa_output_footer(){
		get_footer();
	}
}

if (!function_exists('mihsa_output_footer_content')){
	function mihsa_output_footer_content(){
		get_template_part('template-parts/footer/content', 'footer');
	}
}

// MIHSA Homepage Content Hooks
if (!function_exists('mihsa_homepage_banner')){
	function mihsa_homepage_banner(){
		get_template_part('template-parts/pages/homepage/page', 'banner');
	}
}

if (!function_exists('mihsa_homepage_about')){
	function mihsa_homepage_about(){
		get_template_part('template-parts/pages/homepage/page', 'about');
	}
}

if (!function_exists('mihsa_homepage_treatment')){
	function mihsa_homepage_treatment(){
		get_template_part('template-parts/pages/homepage/page', 'treatment');
	}
}

if (!function_exists('mihsa_homepage_appointment')){
	function mihsa_homepage_appointment(){
		get_template_part('template-parts/pages/homepage/page', 'appointment');
	}
}

if (!function_exists('mihsa_homepage_testimonial')){
	function mihsa_homepage_testimonial(){
		get_template_part('template-parts/pages/homepage/page', 'testimonial');
	}
}


/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Metas and Links
 * @see  mihsa_add_meta()
 * @see  mihsa_add_links()
 */
add_action( 'mihsa_meta', 'mihsa_add_meta' );
add_action( 'mihsa_links', 'mihsa_add_links' );

/**
* Header / Footer Content
* @see mihsa_output_header_content()
* @see mihsa_output_footer_content()
*/
 add_action('mihsa_header_content', 'mihsa_output_header_content', 10);
 add_action('mihsa_footer_content', 'mihsa_output_footer_content', 10);

/**
 * Header / Footer  
 */
add_action( 'mihsa_header', 'mihsa_output_header');
add_action( 'mihsa_footer', 'mihsa_output_footer');

/**
 * Homepage Hook
 */
add_action( 'mihsa_homepage_content', 'mihsa_homepage_banner', 10 );
add_action( 'mihsa_homepage_content', 'mihsa_homepage_about', 20 );
add_action( 'mihsa_homepage_content', 'mihsa_homepage_treatment', 30 );
add_action( 'mihsa_homepage_content', 'mihsa_homepage_appointment', 40 );
add_action( 'mihsa_homepage_content', 'mihsa_homepage_testimonial', 50 );