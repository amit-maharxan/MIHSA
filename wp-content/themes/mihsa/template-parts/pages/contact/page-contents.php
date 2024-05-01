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

<section class="mainGrid-contact">
      <div class="left-section">
            <h1 class="contactPageTitle"><?php the_title(); ?></h1>
            <div class="contact-details">
                  <p class="our_location">
                        <?php the_field('location');?>
                  </p>
                  <p class="our_email">
                        <a href="mailto:<?php the_field('email_address');?>">
                              <?php the_field('email_address');?>
                        </a>
                  </p>
                  <p class="our_phone">
                        <a href="tel:<?php the_field('phone');?>">
                              <?php the_field('phone');?>
                        </a>
                  </p>
            </div>
            <div class="social_icons">
                  <a target="_blank" href="<?php the_field('instagram', 'options');?>">
                        <i class="fa fa-instagram"></i>
                  </a>
                  <a target="_blank" href="<?php the_field('facebook', 'options');?>">
                        <i class="fa fa-facebook"></i>
                  </a>
                  <a target="_blank" href="<?php the_field('twitter', 'options');?>">
                        <i class="fa fa-twitter"></i>
                  </a>
            </div>
            <div class="opening_hours">
                  <h2>Opening Hours</h2>
                  <table>
                  <?php
                  if( have_rows('opening_hours') ):
                  while( have_rows('opening_hours') ) : the_row(); ?>
                        <tr>
                              <td class="day"><?php the_sub_field('day')?></td>
                              <td class="time"><?php the_sub_field('time');?></td>
                        </tr>
                  <?php endwhile; endif; ?>
                  </table>
            </div>
      </div>
      <div class="right-section">
            <?php echo do_shortcode('[contact-form-7 id="f25b27d" title="Contact form"]');?>
      </div>
</section>