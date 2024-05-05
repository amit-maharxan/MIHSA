<?php do_action('mihsa_header'); ?>

<section class="blog-section mainGrid">
      <div class="container content">
        <div class="row align-items-center justify-content-between">
          <div id="blog-image" class="">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="image">
          </div>
          <div class="blog-details">
            <h2><?php the_title();?></h2>
            <p class="added-on">Added on: <?php echo get_the_date();?></p>
            <p class="desc"><?php the_content();?></p>
          </div>
        </div>
      </div>
</section>

<?php do_action('mihsa_footer'); ?>