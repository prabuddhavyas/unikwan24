<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page not Found | UniKwan Innovations</title>
    <meta name="description" content="UniKwan Innovations">
    <?php include '../header.php'; ?>
    <meta name="author" content="UniKwan Innovations" />
    <!-- <meta property='og:title' content='Contact Us: UniKwan Innovations' /> -->
    <!-- <meta property='og:description' content='Share with us your challenges and aspirations. Together, we can craft design and development solutions that make a difference.' /> -->
    <!-- <meta property='og:url' content='<?php echo $baseUrl; ?>' />  -->
    <!-- <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png' /> -->
    <!-- <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png" /> -->
    <meta property="og:site_name" content="UniKwan Innovations">
    <meta property="og:type" content="Website">
  </head>
  <body>    
    <!-- Begin Page not Found Hero Section -->
    <section class="page_not_found_hero_section">
      <!-- Begin Navbar Section -->
      <?php include '../navbar.php'; ?>
      <!-- End Navbar Section -->
      
      <!-- Begin Page not Found Hero Content Section -->
      <div class="page_not_found_hero_container pl_pr">
        <h3 class="sub_heading_24 fw_300 color_white text_center pnf_heading">
          The page you were looking for doesn't exist.
        </h3>
        <div class="pnf_hero_img">
          <img src="<?php echo $baseUrl; ?>assets/images/page-not-found-bg.png" alt="page not found" class="page_not_found_image" width="626px" height="100%">
        </div>
        <div class="goto_home_cta_container">
          <a href="<?php echo $baseUrl; ?>" class="content_wls_16 fw_300 color_white goto_home_cta text_center">Go to homepage</a>
        </div>
      </div>
      <!-- End Page not Found Hero Content Section -->
    </section>
    <!-- End Page not Found Hero Section -->

    <!-- Begin Footer Section -->
    <?php include '../footer.php'; ?>
    <!-- End Footer Section -->
  </body>
</html>