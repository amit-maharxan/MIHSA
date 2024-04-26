<?php
/**
 * Template Name: Community Layout
 */

do_action('mihsa_header'); ?>

	<?php 
        /**
         * mihsa_community_content hook
         *
         */
        do_action( 'mihsa_community_content' );
    ?>

<?php do_action('mihsa_footer'); ?>