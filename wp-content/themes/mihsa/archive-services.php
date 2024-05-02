<?php do_action('mihsa_header'); ?>

<section class="mainGrid">
      <div class="fullWidthOuter banner">
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
    <ul
      id="treatmentGrid"
      class="treatmentGrid">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'services', // Fetch regular WordPress posts
          'posts_per_page'  => -1, // Number of posts to display
      ));
      
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <div class="imgWrapper">
          <a href="<?php the_permalink();?>">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <div class="absoluteCenter">
              <img src="<?php the_field('service_icon');?>" alt="" />
              <span><?php the_title();?></span>
            </div>
          </a>
        </div>
      </li>
      <?php endwhile; wp_reset_query();?>
    </ul>
  </div>
</section>

<?php do_action('mihsa_footer'); ?>