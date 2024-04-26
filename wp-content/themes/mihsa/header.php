<?php
/**
 * Header Template
 * 
 * @package MIHSA
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php 
	/**
	 * mihsa_meta hook
	 *
	 * @hooked mihsa_add_meta
	 */
	do_action('mihsa_meta');

	/**
	 * mihsa_links hook
	 *
	 * @hooked mihsa_add_links
	 */
	do_action('mihsa_links');

    // Keep it for plugins.
	wp_head(); ?> 

</head>

<?php if(is_front_page()){
    $class_name = 'home_page';
} else if(is_page(8)){
    $class_name = 'about_page';
} else if(is_page(10)){
    $class_name = 'community_page';
} else if(is_page(13)){
    $class_name = 'team_page';
} else {
    $class_name = '';
} ?>

<body class="<?php echo $class_name;?>">
<main>

<?php

    /**
     * mihsa_header_content hook
     *
     * @hooked mihsa_output_header_content()
     *
     */
    do_action( 'mihsa_header_content' );

?>