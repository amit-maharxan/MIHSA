<?php
/**
 * Template Name: About Layout
 */

do_action('mihsa_header'); ?>

	<?php 
        /**
         * mihsa_about_content hook
         *
         */
        do_action( 'mihsa_about_content' );
    ?>
    
    <?php get_template_part( 'template-parts/pages/homepage/page', 'appointment' ); ?>

<?php do_action('mihsa_footer'); ?>