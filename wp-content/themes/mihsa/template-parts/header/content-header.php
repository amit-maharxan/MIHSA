<header class="mainGrid">
  <div class="fullWidthOuter bg-lightGrey">
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
  <div class="fullWidthOuter bg-light">
    <nav class="content header-bottom-content" data-lg>
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
      <a href="<?php echo site_url();?>">
        <img src="<?php echo $image[0];?>" alt="" class="logoIcon" />
      </a>
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
    </nav>
    <nav class="content header-bottom-content" data-sm>
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>
      <a href="<?php echo site_url();?>">
        <img src="<?php echo $image[0];?>" alt="" class="logoIcon" />
      </a>
      <div id="hamburger" class="iconContainer" onClick="hamburgerToggle('#menuDrawer')">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> </g></svg>
      </div>
      <div id="menuDrawer" class="menu-drawer">
      <div class="menu-drawer-content">
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
    </nav>
  </div>
</header>