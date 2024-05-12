<?php do_action('mihsa_header'); ?>

<!-- <section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper"><?php the_title();?></h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Home</a></li>
                              <li>/</li>
                              <li><a href="<?php echo site_url('monthly-specials');?>">Monthly Specials</a></li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
            </div>
      </div>
</section> -->

<section class="specials-details-perks-contents mainGrid">
        <div class="contents">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="">
        </div>
</section>

<?php do_action('mihsa_footer'); ?>