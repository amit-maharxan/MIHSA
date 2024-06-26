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
            <div class="fullCol about-contents">
                  <div class="imgWrapper">
                        <img src="<?php the_field('about_image');?>" alt="" />
                  </div>
                  <div class="contents">
                        <!-- Content is wrapped in paragraphs, styled accordingly -->
                        <!-- <p class="about-contents"> -->
                              <?php the_content();?>
                        <!-- </p> -->
                        <div class="certification-images">
                              <?php if( have_rows('certification_images') ):
                        while( have_rows('certification_images') ) : the_row(); ?>
                              <img src="<?php the_sub_field('image');?>" alt="" />
                              <?php endwhile; endif; ?>
                        </div>
                  </div>
            </div>
      </div>
</section>