<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Unikwan Courses</title>
    <meta name="description" content="Unikwan Courses">
    <?php
      include '../header.php';
    ?>
    <meta name="author" content="UniKwan Innovations" />
    <meta property='og:title' content='Unikwan Courses' />
    <meta property='og:description' content='Unikwan Courses' />
    <meta property='og:url' content='<?php echo $baseUrl; ?>articles/' />
    <!-- <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png' /> -->
    <!-- <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png" /> -->
    <meta property="og:site_name" content="UniKwan Innovations">
    <meta property="og:type" content="Website">
  </head>
  <body>
    <!-- Begin Hero Section -->
    <section class="blog_hero_section">
      <!-- Begin Navbar Section -->
      <?php include '../navbar.php'; ?>
      <!-- End Navbar Section -->

      <!-- Begin Hero Content Section -->
      <section class="blog_hero_content_section">
        <div class="label_blue ml_mr">
          <p class="ff_satoshi content_20 fw_700 color_blue">All courses</p>
        </div>
        <div class="blog_hero_description_flex heading_mt pl_pr">
          <h1 class="heading_wls_60 fw_700 color_black blog_hero_heading">
            Unikwan Webinar<br/> Courses
          </h1>
          <p class="ff_satoshi content_20 fw_400 color_grey blog_hero_content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget sem est. 
            Aenean ut laoreet ex. Nulla facilisi. Etiam et condimentum turpis. Curabitur 
            ac pulvinar augue. Sed viverra nisi et turpis pretium, at bibendum purus ultrices. 
            Morbi pellentesque tempus euismod.
          </p>
        </div>
        <div class="blog_bg_container">
          <img src="<?php echo $baseUrl; ?>assets/images/right-arrow-bg.png" alt="projects bg" width="933px" height="874px" />
        </div>
      </section>
      <!-- End Hero Content Section -->
    </section>
    <!-- End Hero Section -->

    <!-- Begin Blog Lisitng Section -->
    <section class="blog_listing_section pl_pr">
      <h2 class="sub_heading_34 fw_700 color_grey">Latest Courses</h2>
      <div class="blog_listing_flex">
        <div class="blog_listing_container">
          <a href="<?php echo $baseUrl; ?>courses/product-management/" class="blog_image_continer">
            <img src="<?php echo $baseUrl; ?>assets/images/courses/product-management-course.jpg" alt="product management course" width="399px" height="280px" />
          </a>
          <a href="<?php echo $baseUrl; ?>courses/product-management/" class="blog_title_continer">
            <h3 class="sub_heading_24 fw_500 color_light_black blog_title">
              Product Management
            </h3>
          </a>
          <div class="blog_listing_details_flex">
            <p class="ff_satoshi content_16 fw_400 color_grey">17 October, 2024</p>
            <div class="blog_listing_readtime_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/clock.svg" alt="clock" width="23px" height="23px" />
              <p class="ff_satoshi content_16 fw_400 color_grey">1 Hour</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Lisitng Section -->

    <!-- Begin Footer Section -->
    <?php include '../footer.php';?>
    <!-- End Footer Section -->
  </body>

  <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

  <script>
    // $('.blog_carousel_container').slick({
    //   infinite: true,
    //   dots: false,
    //   arrows: false,
    //   variableWidth: true,
    //   centerMode: true,
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   autoplay: true,
    //   autoplaySpeed: 5000,
    //   cssEase: 'linear',
    //   touchThreshold: 100,
    // });

    function blogHover() {
      $(".blog_image_continer").hover(function() {
        $(this).stop().addClass('zoomIn');
      }, function() {
        $(this).stop().removeClass('zoomIn');
      });

      $(".blog_title_continer").hover(function() {
        $(this).prev().stop().addClass('zoomIn');
      }, function() {
        $(this).prev().stop().removeClass('zoomIn');
      });
    }

    function blogScrollHover() {
      gsap.registerPlugin(ScrollTrigger);

      let mediaQuery = gsap.matchMedia();
      mediaQuery.add("(max-width: 767.95px)", () => {
        const sections = document.querySelectorAll('.blog_image_continer');
        sections.forEach(section => {
          ScrollTrigger.create({
            trigger: section,
            start: "-=25px center",
            end: "bottom +=225px",
            toggleClass: "zoomIn",
          });
        });
      });
    }

    $(window).on('load resize orientationchange', function() {
      var windowWidth = $(window).width();
      if(windowWidth > 767) {
        blogHover();
      }
      else {
        blogScrollHover();
      }
    });
  </script>
</html>