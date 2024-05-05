<?php
/**
 * Footer Template
 *
 * @package MIHSA
 */
?>

<?php if(!is_front_page()){
      get_template_part( 'template-parts/pages/homepage/page', 'appointment' );
} ?>
</main>

<?php

/**
 * mihsa_footer_content hook
 *
 * @hooked mihsa_output_footer_content()
 *
 */
do_action( 'mihsa_footer_content' );

wp_footer(); ?>

</body>
</html>