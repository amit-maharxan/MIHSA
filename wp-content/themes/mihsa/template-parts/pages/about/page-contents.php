<section class="mainGrid">
      <div class="halfWidthOuter inner-page-banner">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>

            <div class="breadcrumb">
                  <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li>/</li>
                        <li><?php the_title();?></li>
                  </ul>
            </div>
      </div>
</section>

<section class="mainGrid">
      <div class="section about-contents">
            <div class="image">
                  <img src="<?php the_field('about_image');?>" alt="" />
            </div>
            <div class="contents">
                  <p class="about-contents">
                        <?php the_content();?>
                  </p>
                  <div class="certification-images">
                        <?php if( have_rows('certification_images') ):
                        while( have_rows('certification_images') ) : the_row(); ?>
                              <img src="<?php the_sub_field('image');?>" alt="" />
                        <?php endwhile; endif; ?>
                  </div>
            </div>
      </div>
</section>