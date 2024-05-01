<?php
/**
 * Template Name: Policies Layout
 */

do_action('mihsa_header'); ?>

	<?php 
        /**
         * mihsa_policy_content hook
         *
         */
        do_action( 'mihsa_policy_content' );
    ?>

    <?php get_template_part( 'template-parts/pages/homepage/page', 'appointment' ); ?>

<?php do_action('mihsa_footer'); ?>