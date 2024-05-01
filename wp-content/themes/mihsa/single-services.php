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
      <div class="halfWidthOuter inner-page-banner">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
            <img src="<?php echo $url;?>" alt="" class="fullCol"/>
            <h1 class="post-type-title"><?php the_title();?></h1>
            <div class="breadcrumb">
                  <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li>/</li>
                        <li><a href="<?php echo site_url('services');?>">SERVICE</a></li>
                        <li>/</li>
                        <li><?php the_title();?></li>
                  </ul>
            </div>
      </div>
</section>

<section class="service-details-page-contents">
      <div class="service_contents">
            <div class="image">
                  <img src="<?php echo $url;?>" alt="" class=""/>
            </div>
            <div class="contents">
                  <div class="heading-section">
                        <div class="left-details">
                              <h1 class="title"><?php the_title();?></h1>
                              <span class="time"><?php the_field('treatment_time');?></span>
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