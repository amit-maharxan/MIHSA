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
        if( have_rows('dates') ):
        while( have_rows('dates') ) : the_row(); ?>
        <div class="special_date">
            <img src="<?php the_sub_field('select_image');?>" alt="">
        </div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php do_action('mihsa_footer'); ?>