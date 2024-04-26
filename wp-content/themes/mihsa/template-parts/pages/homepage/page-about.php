<section class="mainGrid">
  <div class="breakout-inner">
    <div class="fullCol welcomeGrid">
      <div class="welcomeImgWrapper">
        <img src="<?php the_field('hp_image_1');?>" alt="" />
        <img src="<?php the_field('hp_image_2');?>" alt="" />
      </div>
      <article>
        <h1 class="heading-title">
          <?php the_field('wel_title_1');?>
        </h1>
        <p><?php the_field('wel_title_2');?></p>
        <?php the_field('wel_description');?>
      </article>
    </div>
  </div>
</section>