<?php do_action('mihsa_header'); ?>

<style>
  .faq {
    margin-bottom: 20px;
  }
  .question {
    cursor: pointer;
    font-weight: bold;
  }
  .answer {
    display: none;
  }
</style>

<section class="mainGrid">
      <div class="fullWidthOuter banner-sm">
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

<section class="service-details-page-contents mainGrid">
      <div class="service_contents content">
            <div class="image">
                  <img src="<?php echo $url;?>" alt="" class=""/>
            </div>
            <div class="contents">
                  <div class="heading-section">
                        <div class="left-details">
                              <h1 class="title titleFancy"><?php the_title();?></h1>
                              <span class="time">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9.00024 16.9998C13.1424 16.9998 16.5002 13.6419 16.5002 9.49976C16.5002 5.35762 13.1424 1.99976 9.00024 1.99976C4.85811 1.99976 1.50024 5.35762 1.50024 9.49976C1.50024 13.6419 4.85811 16.9998 9.00024 16.9998Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M9.00049 5V9.5L12.0005 11" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <?php the_field('treatment_time');?>
                                    <span>

                                          WEEEEEEE
                                    </span>
                                    
                              </span>
                        </div>
                        <div class="right-btn">
                              <a href="#" class="btn btn--primary" target="_blank">BOOK NOW</a>
                        </div>
                  </div>
                  <div class="price_per_session">
                        <?php the_field('price_per_session');?>
                  </div>
                  <div class="description">
                        <?php the_content();?>
                  </div>
            </div>
      </div>
</section>

<section class="service-details-perks-contents">
      <h3 class="">Perks of <?php the_title();?></h3>
      <ul>
      <?php if( have_rows('perks_lists') ):
      while( have_rows('perks_lists') ) : the_row(); ?>
            <li><?php the_sub_field('perks_text');?></li>
      <?php endwhile; endif; ?>
      </ul>
</section>

<section class="service-details-faq-contents">
      <h2 class="faq_title">FAQ</h3>
      <ul>
      <?php if( have_rows('qas') ):
      while( have_rows('qas') ) : the_row(); ?>
            <div class="faq">
                  <div class="question"><?php the_sub_field('question');?></div>
                  <div class="answer"><?php the_sub_field('answer');?></div>
            </div>
      <?php endwhile; endif; ?>
      </ul>
</section>

<script>
      $(document).ready(function(){
            $('.answer').hide();
            $('.question:first').next('.answer').show();
            
            $('.question').click(function(){
                  var $thisAnswer = $(this).next('.answer');
                  $('.answer').not($thisAnswer).slideUp();
                  $thisAnswer.slideToggle();
            });
      });
</script>

<?php do_action('mihsa_footer'); ?>