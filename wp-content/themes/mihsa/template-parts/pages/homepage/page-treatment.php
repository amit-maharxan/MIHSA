<section class="mainGrid">
  <div class="content">
    <h1 class="heading-title">
      <?php the_field('story_title');?>
    </h1>
    <ul
      id="treatmentGrid"
      class="treatmentGrid">
      <?php
      $i = 1;
      // Custom query to fetch WordPress posts
      $wp_query = new WP_Query(array(
          'post_type'       => 'services', // Fetch regular WordPress posts
          'posts_per_page'  => 8, // Number of posts to display
      ));
      
      // Loop through the WordPress posts
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <li>
        <a href="<?php the_permalink();?>">
        <div class="imgWrapper">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="" />
            <div class="absoluteCenter">
              <img src="<?php the_field('service_icon');?>" alt="" />
              <span><?php the_title();?></span>
            </div>
          </div>
        </a>
      </li>
      <?php endwhile; wp_reset_query();?>
    </ul>
    <a href="<?php the_field('story_button_url');?>"
      class="btn-md btn-dark btn-pill floatRight"
      onclick="toggleViewClicked('treatmentGrid')">
      <?php the_field('story_button_text');?>
    </a>
  </div>
</section>