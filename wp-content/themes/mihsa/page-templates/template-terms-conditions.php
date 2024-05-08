<?php
/**
 * Template Name: Terms & Conditions Layout
 */

do_action('mihsa_header'); ?>

<section class="mainGrid">
      <div class="fullWidthOuter banner">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>

            <div class="absoluteCenter color-light">
                  <h1 class="heading-title-sm margin-reset upper"><?php the_title()?></h1>
                  <div class="breadcrumb">
                        <ul class="flexList">
                              <li><a href="<?php echo site_url();?>">Home</a></li>
                              <li>/</li>
                              <li><?php the_title();?></li>
                        </ul>
                  </div>
            </div>
      </div>
</section>

<section class="mainGrid">
      <div class="breakout">
            <div class="fullCol terms-contents">
                  <h3 class="terms-title">
                        <?php the_title();?>
                  </h3>
                  <p class="terms-description">
                        <?php the_content();?>
                  </p>
            </div>
      </div>
</section>

<?php do_action('mihsa_footer'); ?>