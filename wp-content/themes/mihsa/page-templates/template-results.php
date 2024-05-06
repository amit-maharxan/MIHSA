<?php do_action('mihsa_header');

/**
 * Template Name: Results Layout
 */

?>

<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <!-- <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?> -->
            <?php $url = "https://mihsaaesthetics.com/dev/wp-content/uploads/2024/05/Rectangle-99-3.png" ; ?>
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
  <div class="breakout">
    <ul
      id="resultsGrid"
      class="resultGrid">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'results', // Fetch regular WordPress posts
          'posts_per_page'  => -1, // Number of posts to display
      ));
      
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <div class="absoluteCenters">
          <a class="no-hover" href="<?php the_permalink();?>">
            <div class="imgWrappers">
              <div class="imgWrapper">
                <!-- <img class="before_image" src="<?php the_field('before_image');?>" alt="" /> -->
                <img class="before_image" src="https://mihsaaesthetics.com/dev/wp-content/uploads/2024/05/Rectangle-869.png" alt="" />
                </div>
                <div class="imgWrapper">

                  <!-- <img class="after_image" src="<?php the_field('after_image');?>" alt="" /> -->
                  <img class="after_image" src="https://mihsaaesthetics.com/dev/wp-content/uploads/2024/05/Rectangle-868.png" alt="" />
                </div>
              <span class="titleFancy"><?php the_title();?></span>
            </div>
          </a>
        </div>
      </li>
      <?php endwhile; wp_reset_query();?>
    </ul>
  </div>
</section>

<?php do_action('mihsa_footer'); ?>