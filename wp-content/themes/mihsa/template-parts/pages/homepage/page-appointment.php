<section class="mainGrid">
  <div class="fullWidthOuter banner booking">
    <div class="fullCol relative" style='--bg-url:url("<?php the_field('app_image', 2);?>")'>
      <!-- <img src="<?php the_field('app_image');?>" alt="" /> -->
    </div>
    <div class="absoluteCenter">
      <span><?php the_field('app_title', 2);?></span>
      <span><?php the_field('app_phone_number', 2);?></span>
      <span><?php the_field('app_text', 2);?></span>
      <div class="p2r">
        <a href="<?php the_field('app_button_url', 2);?>" class="btn-md btn-dark btn-pill">
          <?php the_field('app_button_text', 2);?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php if(is_front_page()){ ?>
  <section class="mainGrid">
    <div class="content testimonialGrid">
      <div class="grid-item">
        <h1 class="heading-title">
          <?php the_field('testimonial_title');?>
        </h1>
        <a href="<?php the_field('testimonial_button_url');?>" class="btn-md btn-light">
          <?php the_field('testimonial_button_text');?>
        </a>
      </div>
      <div class="grid-item">
        <div class="quote monsterFont">“</div>
        <div
          id="splide"
          class="splide">
          <div class="splide__track">
            <ul class="splide__list">
              <?php
              $wp_query = new WP_Query(array(
                  'post_type'       => 'testimonials',
                  'posts_per_page'  => 6
              ));

              while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
              <li class="splide__slide">
                <div class="quoteSlide">
                  <cite>
                    <?php the_content(); ?>
                  </cite>
                  <div class="author"><?php the_title(); ?></div>
                </div>
              </li>
            <?php endwhile; wp_reset_query();?>
            </ul>
          </div>

          <div class="slide-pagination">
            <div class="custom-arrow custom-arrow-prev">
              <img
                src="<?php echo site_url('wp-content/uploads/2024/04/left-arrow-svgrepo-com.svg');?>"
                alt=""
                style="width: 25px" />
            </div>
            <div class="custom-pagination">
              <span class="current-page"></span>
              <span class="separator">/</span>
              <span class="total-pages"></span>
            </div>
            <div class="custom-arrow custom-arrow-next">
              <img src="<?php echo site_url('wp-content/uploads/2024/04/left-arrow-svgrepo-com.svg');?>" alt="" style="width: 25px" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<section class="mainGrid">
  <div class="breakout bg-light">
    <div class="content newsletterGrid hover-link">
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_1', 'option');?>
        </h2>
        <?php echo do_shortcode('[mc4wp_form id=173]');?>
        <p style="max-width: 250px">
          <?php the_field('footer_column_description_1', 'option');?>
        </p>
      </div>
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_2', 'option');?>
        </h2>

        <ul class="dashList">
          <li>
            <a href="<?php the_field('instagram', 'option');?>" target="_blank">Instagram</a>
          </li>
          <li>
            <a href="<?php the_field('linkedin', 'option');?>" target="_blank">Linkedin</a>
          </li>
          <li>
            <a href="<?php the_field('facebook', 'option');?>" target="_blank">Facebook</a>
          </li>
          <li>
            <a href="<?php the_field('twitter', 'option');?>" target="_blank">Twitter</a>
          </li>
        </ul>
      </div>
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_3', 'option');?>
        </h2>

        <ul class="iconTxtList">
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/envelope-svgrepo-com.svg');?>" alt="" />
            </span>
            <span>
              <a href="mailto:<?php the_field('footer_email_address', 'option');?>"><?php the_field('footer_email_address', 'option');?></a>
            </span>
          </li>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/phone-circle-svgrepo-com.svg');?>" alt="" />
            </span>
            <span>
              <a href="tel:<?php the_field('footer_phone_number', 'option');?>"><?php the_field('footer_phone_number', 'option');?></a><br />
              <span class="newsletterGrey">(24/7 General Enquiry)</span>
            </span>
          </li>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/location-svgrepo-com.png');?>" alt="" />
            </span>
            <span><?php the_field('footer_address', 'option');?></span>
          </li>
          <li>
            <a href="<?php the_field('map_url', 'option');?>" class="btn-md btn-highlight btn-pill w300" target="_blank">
              Get directions on the map
            </a>
          </li>
        </ul>
      </div>
      <div class="grid-item">
        <h2 class="newsletterTitle">
          <?php the_field('footer_column_title_4', 'option');?>
        </h2>

        <ul class="duoColGrid">
          <?php if( have_rows('time_table', 'option') ):
          while( have_rows('time_table', 'option') ) : the_row(); ?>
            <li>
              <span><?php the_sub_field('day');?></span>
              <span><?php the_sub_field('time');?></span>
            </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>