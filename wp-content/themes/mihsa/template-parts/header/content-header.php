<header class="mainGrid">
  <div class="fullWidth bg-lightGrey">
    <div class="breakout-inner">
      <div class="header-top-bar-content fullCol">
        <ul>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/close-envelope.png');?>" alt="" />
            </span>
            <span><?php the_field('footer_email_address', 'option');?></span>
          </li>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/auricular-phone-symbol-in-a-circle.png');?>" alt="" />
            </span>
            <span><?php the_field('footer_phone_number', 'option');?></span>
          </li>
          <li>
            <span>
              <img src="<?php echo site_url('wp-content/uploads/2024/04/facebook-placeholder-for-locate-places-on-maps.png');?>" alt="" />
            </span>
            <span><?php the_field('footer_address', 'option');?></span>
          </li>
        </ul>
        <ul>
          <li>
            <span>
              <a href="<?php the_field('facebook', 'option');?>" target="_blank">
                <img src="<?php echo site_url('wp-content/uploads/2024/04/facebook-logo-button.png');?>" alt=""/>
              </a>
            </span>
          </li>
          <li>
            <span>
              <a href="<?php the_field('instagram', 'option');?>" target="_blank">
                <img src="<?php echo site_url('wp-content/uploads/2024/04/instagram-logo.png');?>" alt=""/>
              </a>
            </span>
          </li>
          <li>
            <span>
              <a href="<?php the_field('twitter', 'option');?>" target="_blank">
                <img src="<?php echo site_url('wp-content/uploads/2024/04/twitter-logo-button.png');?>" alt=""/>
              </a>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="fullWidth bg-light">
    <div class="content header-bottom-content">
      <?php
          wp_nav_menu([
             'menu'            => 'top',
             'theme_location'  => 'header-menu-1',
             'container'       => false,
             'menu_id'         => '',
             'menu_class'      => '',
             'depth'           => 2,
             'fallback_cb'     => 'bs4navwalker::fallback',
             'walker'          => new bs4navwalker()
          ]);
      ?>
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
      <img src="<?php echo $image[0];?>" alt="" class="logoIcon" />
      <?php
          wp_nav_menu([
             'menu'            => 'top',
             'theme_location'  => 'header-menu-2',
             'container'       => false,
             'menu_id'         => '',
             'menu_class'      => '',
             'depth'           => 2,
             'fallback_cb'     => 'bs4navwalker::fallback',
             'walker'          => new bs4navwalker()
          ]);
      ?>
    </div>
  </div>
</header>