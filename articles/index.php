<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UI UX Design Articles & Insights | UniKwan Blog</title>
    <meta name="description" content="Explore UniKwan's design thinking — articles on UX strategy, ecommerce UX, AI design, and digital transformation written by our senior design team.">
    <?php
      include '../header.php';
    ?>
    <meta name="author" content="UniKwan Innovations" />
    <meta property='og:title' content='UI UX Design Articles & Insights | UniKwan Blog' />
    <meta property='og:description' content="Explore UniKwan's design thinking — articles on UX strategy, ecommerce UX, AI design, and digital transformation written by our senior design team." />
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
          <p class="ff_satoshi content_20 fw_700 color_blue">All articles</p>
        </div>
        <div class="blog_hero_description_flex heading_mt pl_pr">
          <h1 class="heading_wls_60 fw_700 color_black blog_hero_heading">
            Immerse in our creative chronicles
          </h1>
          <p class="ff_satoshi content_20 fw_400 color_grey blog_hero_content">
            At UniKwan Innovations, we craft narratives that resonate with the soul of design. 
            Our UI/UX design articles serve as a canvas for the stories we live & breathe - 
            from overcoming design hurdles to celebrating the milestones that shape our journey. 
            Dive deep into the creativity, innovation, and pursuit of excellence that define our every endeavor.
          </p>
        </div>
        <div class="blog_bg_container">
          <img src="<?php echo $baseUrl; ?>assets/images/right-arrow-bg.png" alt="projects bg" width="933px" height="874px" />
        </div>
      </section>
      <!-- End Hero Content Section -->
    </section>
    <!-- End Hero Section -->

    <!-- Begin Blog Carousel Section -->
    <!-- <section class="blog_carousel_section" aria-label="blog slider">
      <div class="blog_carousel_container">
        <div class="blog_carousel_image_container">
          <a href="">
            <img src="<?php echo $baseUrl; ?>assets/images/blog-carousel1.png" alt="blog carousel" width="932px" height="653px" />
            <div class="blog_carousel_content_container">
              <h2 class="heading_24 fw_500 color_white blog_carousel_heading">
                Top 10 Books on Branding No Branding Designer Should Miss
              </h2>
              <p class="ff_satoshi content_wls_16 fw_400 color_white blog_carousel_description">
                At Unikwan Innovations, we are driven by a passion for creativity, 
                innovation, and excellence. Our mission is to empower businesses and 
                individuals with cutting-edge design solutions that inspire, engage, and elevate.
              </p>
            </div>
            <div class="blog_carousel_info_container">
              <p class="ff_satoshi content_wls_16 fw_500 color_white">24 May, 2024</p>
              <div class="blog_carousel_readtime_container">
                <img src="<?php echo $baseUrl; ?>assets/images/timer.svg" alt="blog read time" width="16px" height="16px" />
                <p class="ff_satoshi content_wls_16 fw_500 color_white">12 Min Read</p>
              </div>
            </div>
          </a>
        </div>
        <div class="blog_carousel_image_container">
          <a href="">
            <img src="<?php echo $baseUrl; ?>assets/images/blog-carousel2.png" alt="blog carousel" width="932px" height="653px" />
            <div class="blog_carousel_content_container">
              <h2 class="heading_24 fw_500 color_white blog_carousel_heading">
                Top 10 Books on Branding No Branding Designer Should Miss
              </h2>
              <p class="ff_satoshi content_wls_16 fw_400 color_white blog_carousel_description">
                At Unikwan Innovations, we are driven by a passion for creativity, 
                innovation, and excellence. Our mission is to empower businesses and 
                individuals with cutting-edge design solutions that inspire, engage, and elevate.
              </p>
            </div>
            <div class="blog_carousel_info_container">
              <p class="ff_satoshi content_wls_16 fw_500 color_white">24 May, 2024</p>
              <div class="blog_carousel_readtime_container">
                <img src="<?php echo $baseUrl; ?>assets/images/timer.svg" alt="blog read time" width="16px" height="16px" />
                <p class="ff_satoshi content_wls_16 fw_500 color_white">12 Min Read</p>
              </div>
            </div>
          </a>
        </div>
        <div class="blog_carousel_image_container">
          <a href="">
            <img src="<?php echo $baseUrl; ?>assets/images/blog-carousel1.png" alt="blog carousel" width="932px" height="653px" />
            <div class="blog_carousel_content_container">
              <h2 class="heading_24 fw_500 color_white blog_carousel_heading">
                Top 10 Books on Branding No Branding Designer Should Miss
              </h2>
              <p class="ff_satoshi content_wls_16 fw_400 color_white blog_carousel_description">
                At Unikwan Innovations, we are driven by a passion for creativity, 
                innovation, and excellence. Our mission is to empower businesses and 
                individuals with cutting-edge design solutions that inspire, engage, and elevate.
              </p>
            </div>
            <div class="blog_carousel_info_container">
              <p class="ff_satoshi content_wls_16 fw_500 color_white">24 May, 2024</p>
              <div class="blog_carousel_readtime_container">
                <img src="<?php echo $baseUrl; ?>assets/images/timer.svg" alt="blog read time" width="16px" height="16px" />
                <p class="ff_satoshi content_wls_16 fw_500 color_white">12 Min Read</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section> -->
    <!-- End Blog Carousel Section -->

    <!-- Begin Blog Lisitng Section -->
    <section class="blog_listing_section pl_pr">
      <h2 class="sub_heading_34 fw_700 color_grey">Latest Articles</h2>
      <div class="blog_listing_flex">
      <div class="blog_listing_container">
          <a href="<?php echo $baseUrl; ?>articles/post/how-a-culture-shapes-what-people-want-from-ai/" class="blog_image_continer">
            <img src="<?php echo $baseUrl; ?>assets/images/global-ai-perspectives.png" alt="blog" width="399px" height="280px" />
          </a>
          <a href="<?php echo $baseUrl; ?>articles/post/how-a-culture-shapes-what-people-want-from-ai/" class="blog_title_continer">
            <h3 class="sub_heading_24 fw_500 color_light_black blog_title">
              How Culture Shapes What People Want from AI (A Stanford Study) 
            </h3>
          </a>
          <div class="blog_listing_details_flex">
            <p class="ff_satoshi content_16 fw_400 color_grey">04 April, 2025</p>
            <div class="blog_listing_readtime_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/clock.svg" alt="clock" width="23px" height="23px" />
              <p class="ff_satoshi content_16 fw_400 color_grey">12 Min Read</p>
            </div>
          </div>
        </div>
        <div class="blog_listing_container">
          <a href="<?php echo $baseUrl; ?>articles/post/how-to-turn-curious-browsers-into-buyers-with-effective-ecommerce-site-search/" class="blog_image_continer">
            <img src="<?php echo $baseUrl; ?>assets/images/e-commerce-site-search.png" alt="e-commerce site search blog" width="399px" height="280px" />
          </a>
          <a href="<?php echo $baseUrl; ?>articles/post/how-to-turn-curious-browsers-into-buyers-with-effective-ecommerce-site-search/" class="blog_title_continer">
            <h3 class="sub_heading_24 fw_500 color_light_black blog_title">
              How to Turn Curious Browsers into Buyers with Effective E-commerce Site Search
            </h3>
          </a>
          <div class="blog_listing_details_flex">
            <p class="ff_satoshi content_16 fw_400 color_grey">14 February, 2025</p>
            <div class="blog_listing_readtime_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/clock.svg" alt="clock" width="23px" height="23px" />
              <p class="ff_satoshi content_16 fw_400 color_grey">12 Min Read</p>
            </div>
          </div>
        </div>
        <div class="blog_listing_container">
          <a href="<?php echo $baseUrl; ?>articles/post/ux-design-in-the-age-of-digital-bharat/" class="blog_image_continer">
            <img src="<?php echo $baseUrl; ?>assets/images/digital-bharat-ux-challenges.png" alt="digital bharat ux challenges blog" width="399px" height="280px" />
          </a>
          <a href="<?php echo $baseUrl; ?>articles/post/ux-design-in-the-age-of-digital-bharat/" class="blog_title_continer">
            <h3 class="sub_heading_24 fw_500 color_light_black blog_title">
              UX Design in the Age of Digital Bharat: The Top 7 Challenges
            </h3>
          </a>
          <div class="blog_listing_details_flex">
            <p class="ff_satoshi content_16 fw_400 color_grey">30 January, 2025</p>
            <div class="blog_listing_readtime_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/clock.svg" alt="clock" width="23px" height="23px" />
              <p class="ff_satoshi content_16 fw_400 color_grey">12 Min Read</p>
            </div>
          </div>
        </div>
        <div class="blog_listing_container">
          <a href="<?php echo $baseUrl; ?>articles/post/how-to-create-an-amazing-ecommerce-mobile-user-experience/" class="blog_image_continer">
            <img src="<?php echo $baseUrl; ?>assets/images/e-commerce-mobile-ux.png" alt="e-commerce mobile ux" width="399px" height="280px" />
          </a>
          <a href="<?php echo $baseUrl; ?>articles/post/how-to-create-an-amazing-ecommerce-mobile-user-experience/" class="blog_title_continer">
            <h3 class="sub_heading_24 fw_500 color_light_black blog_title">
              How to Create an Amazing E-commerce Mobile User Experience
            </h3>
          </a>
          <div class="blog_listing_details_flex">
            <p class="ff_satoshi content_16 fw_400 color_grey">17 January, 2025</p>
            <div class="blog_listing_readtime_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/clock.svg" alt="clock" width="23px" height="23px" />
              <p class="ff_satoshi content_16 fw_400 color_grey">7 Min Read</p>
            </div>
          </div>
        </div>
        <div class="blog_listing_container">
          <a href="<?php echo $baseUrl; ?>articles/post/how-a-ux-audit-can-boost-your-bottom-line/" class="blog_image_continer">
            <img src="<?php echo $baseUrl; ?>assets/images/user-experience-audit-roi.png" alt="blog" width="399px" height="280px" />
          </a>
          <a href="<?php echo $baseUrl; ?>articles/post/how-a-ux-audit-can-boost-your-bottom-line/" class="blog_title_continer">
            <h3 class="sub_heading_24 fw_500 color_light_black blog_title">
              The ROI of UX: How a UX Audit Can Boost Your Bottom Line
            </h3>
          </a>
          <div class="blog_listing_details_flex">
            <p class="ff_satoshi content_16 fw_400 color_grey">10 January, 2025</p>
            <div class="blog_listing_readtime_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/clock.svg" alt="clock" width="23px" height="23px" />
              <p class="ff_satoshi content_16 fw_400 color_grey">8 Min Read</p>
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