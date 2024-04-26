<?php
/**
 * Template Name: Homepage Layout
 */

do_action('mihsa_header'); ?>

	<?php 
        /**
         * mihsa_homepage_content hook
         *
         */
        do_action( 'mihsa_homepage_content' );
    ?>

<?php do_action('mihsa_footer'); ?>