<section class="mainGrid">
  <div class="fullWidthOuter banner booking">
    <div class="fullCol relative" style='--bg-url:url("<?php the_field('app_image', 2);?>")'>
      <!-- <img src="<?php the_field('app_image');?>" alt="" /> -->
    </div>
    <div class="absoluteCenter">
      <span><?php the_field('app_title', 2);?></span>
      <span><?php the_field('app_phone_number', 2);?></span>
      <span><?php the_field('app_text', 2);?></span>
      <div>
        <a href="<?php the_field('app_button_url', 2);?>" class="btn-md btn-dark btn-pill">
          <?php the_field('app_button_text', 2);?>
        </a>
      </div>
    </div>
  </div>
</section>