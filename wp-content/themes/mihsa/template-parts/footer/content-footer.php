<?php
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
} ?>

<?php if (is_single('services') || is_post_type('services')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-161').addClass('active');
  });
</script>
<?php } ?>

<?php if (is_single('results') || is_post_type('results')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-160').addClass('active');
  });
</script>
<?php } ?>

<?php if (is_single('specials') || is_post_type('specials')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-159').addClass('active');
  });
</script>
<?php } ?>

<?php if (is_single('testimonials') || is_post_type('testimonials')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-158').addClass('active');
  });
</script>
<?php } ?>

<script>
    window.onload = function() {
        var checkboxes = document.querySelectorAll('.wpcf7-list-item-label');
        checkboxes.forEach(function(checkboxLabel) {
            checkboxLabel.addEventListener('click', function() {
                var checkbox = this.previousElementSibling;
                checkbox.checked = !checkbox.checked;
            });
        });
    };
</script>

<footer class="mainGrid">
  <div class="breakout">
    <div class="fullCol footerContent">
      <span>Copyright © <?php echo date('Y');?> Mihsa Aesthetics. All rights reserved.</span>
      <ul class="iconGroup">
        <li>
          <a href="<?php the_field('facebook', 'option');?>" target="_blank">
            <img src="<?php echo site_url('wp-content/uploads/2024/04/facebook-logo-button.png');?>" alt="" />
          </a>
        </li>
        <li>
          <a href="<?php the_field('instagram', 'option');?>" target="_blank">
            <img src="<?php echo site_url('wp-content/uploads/2024/04/instagram-logo.png');?>" alt="" />
          </a>
        </li>
        <li>
          <a href="<?php the_field('twitter', 'option');?>" target="_blank">
            <img src="<?php echo site_url('wp-content/uploads/2024/04/twitter-logo-button.png');?>" alt="" />
          </a>
        </li>
      </ul>
      <span>Made with <span style="color: #e02b40"> &#x2764; </span> by Fifth Designs.</span>
    </div>
  </div>
</footer>

<script defer>
  function toggleViewClicked(targetId) {
    document.getElementById(targetId).toggleAttribute('data-moreClicked');
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/3.6.12/js/splide.min.js" defer></script>
<script defer>
  document.addEventListener('DOMContentLoaded', function () {
    const splide = new Splide('#splide', {
      type: 'swipe',
      rewind: true,
      arrows: false,
      pagination: false,
      autoplay: true,
      interval: 5000,
    }).mount();

    var currentPageElement = document.querySelector('.current-page');
    var totalPagesElement = document.querySelector('.total-pages');

    // Update custom pagination
    function updateCustomPagination() {
      var currentPage = splide.index + 1;
      var totalPages = splide.length;

      currentPageElement.textContent = currentPage;
      totalPagesElement.textContent = totalPages;
    }

    // Listen to slide change event and update custom pagination
    splide.on('moved', updateCustomPagination);

    // Initial update
    updateCustomPagination();

    // Custom arrows
    var prevArrow = document.querySelector('.custom-arrow-prev');
    var nextArrow = document.querySelector('.custom-arrow-next');

    prevArrow.addEventListener('click', function () {
      splide.go('-${1}');
    });

    nextArrow.addEventListener('click', function () {
      splide.go('+${1}');
    });
  });
</script>
<script
		src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
		integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script >
  AOS.init();
</script>