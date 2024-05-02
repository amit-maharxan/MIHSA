<?php do_action('mihsa_header'); ?>

<section class="mainGrid">
      <div class="halfWidthOuter inner-page-banner">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id(150), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <h1 class="post-type-title">TESTIMONIALS</h1>
            <div class="breadcrumb">
                  <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li>/</li>
                        <li>Testimonials</li>
                  </ul>
            </div>
      </div>
</section>

<section class="mainGrid">
  <div class="content">
    <div class="testimonials-lists">
      <?php
      $wp_query = new WP_Query(array(
          'post_type'       => 'testimonials', // Fetch regular WordPress posts
          'posts_per_page'  => 12, // Number of posts to display
      ));
    
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="testimonialWrapper">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <div class="right-testimonial-contents">
              <p><?php the_content();?></p>
              <span class="bold"><?php the_title();?></span>
            </div>
        </div>
      <?php endwhile; wp_reset_query();?>
    </div>
  </div>
</section>

<?php do_action('mihsa_footer'); ?>