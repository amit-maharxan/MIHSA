<?php do_action('mihsa_header'); ?>

<section class="mainGrid">
      <div class="halfWidthOuter inner-page-banner">
            <img src="<?php echo DK_IMG.'/service-banner.png';?>" alt="" class="fullCol"/>
            <h1 class="post-type-title">SERVICES</h1>
            <div class="breadcrumb">
                  <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li>/</li>
                        <li>SERVICES</li>
                  </ul>
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