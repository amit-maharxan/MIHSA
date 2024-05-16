<header class="mainGrid">
  <div class="fullWidthOuter bg-lightGrey">
    <div class="breakout-inner">
      <div class="header-top-bar-content fullCol">
        <ul>
          <li>
            <span class="iconContainer">
              <img src="<?php echo site_url('wp-content/uploads/2024/04/envelope-svgrepo-com.svg');?>" alt="" class="footerTopIconfilter"/>
            </span>
            <span><?php the_field('footer_email_address', 'option');?></span>
          </li>
          <li>
            <span class="iconContainer">
              <img src="<?php echo site_url('wp-content/uploads/2024/04/phone-circle-svgrepo-com.svg');?>" alt="" class="footerTopIconfilter"/>
            </span>
            <span><?php the_field('footer_phone_number', 'option');?></span>
          </li>
          <li>
            <span class="iconContainer">
              <img src="<?php echo site_url('wp-content/uploads/2024/04/location-svgrepo-com.png');?>" alt="" class="footerTopIconfilter" />
            </span>
            <span><a href="<?php the_field('map_url', 'option');?>" target="_blank"><?php the_field('footer_address', 'option');?></a></span>
          </li>
        </ul>
        <ul>
          <li>
            <span class="iconContainer">
              <a href="<?php the_field('facebook', 'option');?>" target="_blank">
                <!-- <img src="<?php echo site_url('wp-content/uploads/2024/04/facebook-logo-button.png');?>" alt=""/> -->
                <svg fill="#000000" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M169.5,357.6l-2.9,38.3h-39.3 v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2 c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"></path> </g></svg>
              </a>
            </span>
          </li>
          <li>
            <span class="iconContainer">
              <a href="<?php the_field('instagram', 'option');?>" target="_blank">
                <!-- <img src="<?php echo site_url('wp-content/uploads/2024/04/instagram-logo.png');?>" alt=""/> -->
                <svg fill="#000000" width="64px" height="64px" viewBox="0 0 19.2 19.2" data-name="Instagram w/circle" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M13.498 6.651a1.656 1.656 0 0 0-.95-.949 2.766 2.766 0 0 0-.928-.172c-.527-.024-.685-.03-2.02-.03s-1.493.006-2.02.03a2.766 2.766 0 0 0-.929.172 1.656 1.656 0 0 0-.949.95 2.766 2.766 0 0 0-.172.928c-.024.527-.03.685-.03 2.02s.006 1.493.03 2.02a2.766 2.766 0 0 0 .172.929 1.656 1.656 0 0 0 .95.949 2.766 2.766 0 0 0 .928.172c.527.024.685.029 2.02.029s1.493-.005 2.02-.03a2.766 2.766 0 0 0 .929-.171 1.656 1.656 0 0 0 .949-.95 2.766 2.766 0 0 0 .172-.928c.024-.527.029-.685.029-2.02s-.005-1.493-.03-2.02a2.766 2.766 0 0 0-.171-.929zM9.6 12.168A2.568 2.568 0 1 1 12.168 9.6 2.568 2.568 0 0 1 9.6 12.168zm2.669-4.637a.6.6 0 1 1 .6-.6.6.6 0 0 1-.6.6zM11.267 9.6A1.667 1.667 0 1 1 9.6 7.933 1.667 1.667 0 0 1 11.267 9.6zM9.6 0a9.6 9.6 0 1 0 9.6 9.6A9.6 9.6 0 0 0 9.6 0zm4.97 11.661a3.67 3.67 0 0 1-.233 1.214 2.556 2.556 0 0 1-1.462 1.462 3.67 3.67 0 0 1-1.213.233c-.534.024-.704.03-2.062.03s-1.528-.006-2.062-.03a3.67 3.67 0 0 1-1.213-.233 2.556 2.556 0 0 1-1.462-1.462 3.67 3.67 0 0 1-.233-1.213c-.024-.534-.03-.704-.03-2.062s.006-1.528.03-2.062a3.67 3.67 0 0 1 .232-1.213 2.556 2.556 0 0 1 1.463-1.463 3.67 3.67 0 0 1 1.213-.232c.534-.024.704-.03 2.062-.03s1.528.006 2.062.03a3.67 3.67 0 0 1 1.213.232 2.556 2.556 0 0 1 1.462 1.463 3.67 3.67 0 0 1 .233 1.213c.024.534.03.704.03 2.062s-.006 1.528-.03 2.062z"></path></g></svg>
              </a>
            </span>
          </li>
          <li>
            <span class="iconContainer">
              <a href="<?php the_field('twitter', 'option');?>" target="_blank">
                <!-- <img src="<?php echo site_url('wp-content/uploads/2024/04/twitter-logo-button.png');?>" alt=""/> -->
                <svg fill="#000000" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M215.2,361.2 c0.1,2.2,0.1,4.5,0.1,6.8c0,69.5-52.9,149.7-149.7,149.7c-29.7,0-57.4-8.7-80.6-23.6c4.1,0.5,8.3,0.7,12.6,0.7 c24.6,0,47.3-8.4,65.3-22.5c-23-0.4-42.5-15.6-49.1-36.5c3.2,0.6,6.5,0.9,9.9,0.9c4.8,0,9.5-0.6,13.9-1.9 C13.5,430-4.6,408.7-4.6,383.2v-0.6c7.1,3.9,15.2,6.3,23.8,6.6c-14.1-9.4-23.4-25.6-23.4-43.8c0-9.6,2.6-18.7,7.1-26.5 c26,31.9,64.7,52.8,108.4,55c-0.9-3.8-1.4-7.8-1.4-12c0-29,23.6-52.6,52.6-52.6c15.1,0,28.8,6.4,38.4,16.6 c12-2.4,23.2-6.7,33.4-12.8c-3.9,12.3-12.3,22.6-23.1,29.1c10.6-1.3,20.8-4.1,30.2-8.3C234.4,344.5,225.5,353.7,215.2,361.2z"></path> </g></svg>
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
             'menu_class'      => 'hover-link',
             'depth'           => 3,
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
             'menu_class'      => 'hover-link',
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
        <div id="close" class="close" onClick="hamburgerToggle('#menuDrawer')">
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#0F0F0F"></path> </g></svg>
        </div>
      </div>
    </nav>
  </div>
</header>