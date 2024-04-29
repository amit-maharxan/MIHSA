<section class="mainGrid">
  <div class="fullWidth banner booking">
    <div class="fullCol relative" style='--bg-url:url("<?php the_field('app_image');?>")'>
      <!-- <img src="<?php the_field('app_image');?>" alt="" /> -->
    </div>
    <div class="absoluteCenter">
      <span><?php the_field('app_title');?></span>
      <span><?php the_field('app_phone_number');?></span>
      <span><?php the_field('app_text');?></span>
      <div>
        <a href="<?php the_field('app_button_url');?>" class="btn-md btn-dark btn-pill">
          <?php the_field('app_button_text');?>
        </a>
      </div>
    </div>
  </div>
</section>