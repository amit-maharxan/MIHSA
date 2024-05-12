<?php do_action('mihsa_header');

/**
 * Template Name: Special Dates Layout
 */

?>

<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper"><?php the_title();?></h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Home</a></li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
                  <!-- <div class="squareThingy"></div> -->
            </div>
      </div>
</section>

<section class="mainGrid">
  <div class="content">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'specials', // Fetch regular WordPress posts
          'posts_per_page'  => -1, // Number of posts to display
      ));
      
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="special_date">
            <a href="<?php the_permalink();?>">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">
            </a>
        </div>
      <?php endwhile; wp_reset_query();?>
  </div>
</section>

<?php do_action('mihsa_footer'); ?>