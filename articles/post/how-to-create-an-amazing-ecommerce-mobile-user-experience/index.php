<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ecommerce Mobile UX Design: Best Practices Guide | UniKwan</title>
    <meta name="description" content="UniKwan's guide to ecommerce mobile UX — covering thumb-zone design, fast checkout, product discovery, and the patterns that reduce mobile cart abandonment.">
    <?php
      include '../../../header.php';
    ?>
    <meta name="author" content="UniKwan Innovations" />
    <meta property='og:title' content='Ecommerce Mobile UX Design: Best Practices Guide | UniKwan' />
    <meta property='og:description' content="UniKwan's guide to ecommerce mobile UX — covering thumb-zone design, fast checkout, product discovery, and the patterns that reduce mobile cart abandonment." />
    <meta property='og:url' content='<?php echo $baseUrl; ?>/articles/post/how-to-create-an-amazing-ecommerce-mobile-user-experience/' />
    <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/how-to-create-an-amazing-ecommerce-mobile-user-experience.png' />
    <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/how-to-create-an-amazing-ecommerce-mobile-user-experience.png" />
    <meta property="og:site_name" content="UniKwan Innovations">
    <meta property="og:type" content="Website">
  </head>
  <body>
    <section class="wrapper">
      <!-- Begin Hero Section -->
      <section class="mobileux_post_hero_section">
        <!-- Begin Navbar Section -->
        <?php include '../../../navbar.php'; ?>
        <!-- End Navbar Section -->

        <!-- Begin Hero Content Section -->
          <div class="blog_post_hero pl_pr">
            <h1 class="heading_wls_60 fw_700 color_white blog_post_hero_title">
              How to Create an Amazing <br/> E-commerce Mobile User Experience
            </h1>
            <p class="sub_heading_wls_20 ff_satoshi color_white fw_400 blog_post_sub_text blog_post_mt">
              Looking for innovative and effective ways to create a unique e-commerce mobile user experience? Read on to learn everything about the topic!
            </p>
            <div class="blog_post_info_container blog_post_mt">
              <p class="ff_satoshi content_wls_16 color_white fw_400">17 January, 2025</p>
              <div class="timer_block">
                <img src="<?php echo $baseUrl; ?>assets/images/timer.svg" alt="timer" width="23px" height="23px" />
                <p class="ff_satoshi content_wls_16 color_white fw_400">7 Min Read</p>
              </div>
            </div>
            <div class="blog_post_author_block">
              <div class="hero_author_image_container">
                <img src="<?php echo $baseUrl; ?>assets/images/author-juhi.png" alt="Juhi Chakravertty" class="hero_author_image" width="83px" height="83px" />
              </div>
              <div class="post_author_info_container">
                <h3 class="color_white sub_heading_24 fw_500">Juhi Chakravertty</h4>
                <p class="color_white fw_400 content_20">Growth Marketer</p>
              </div>
            </div>
          </div>
        <!-- End Hero Content Section -->
      </section>

      <!-- Begin Blog Post Content Section -->
      <section class="blog_post_content_section pl_pr">
        <!-- Begin Article Consultation Section -->
        <?php include '../../../components/article-consultation/index.php'; ?>
        <!-- End Article Consultation Section -->
        <div class="blog_content_block">
          <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
            The mobile user experience of an e-commerce site is one of the most important factors in a customer's purchasing decision. Consumers are spending an increasing amount of time shopping on their phones, so optimizing your site for mobile users is crucial. But first, let's dive into the history of e-commerce before we delve deeper into how we can create an amazing e-commerce mobile user experience!
          </p>
        </div>
        <div class="blog_post_scroll_container margin_top_64">
          <div class="blog_post_left_container">
            <div id="scrollToSection0" class="table_container">
              <h2 class="heading_48 fw_700 color_grey">Table of Content</h2>
              <ul class="table_content_container">
                <li class="fw_500 sub_heading_24 color_grey">
                  E-commerce has come a Long Way
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  The Availability of a Range of E-commerce Platforms
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  Users Involved in E-commerce
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  Types of Mobile E-commerce Experiences
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  Tips for Designing a User Experience for Mobile E-commerce
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  How to Optimize your E-commerce Website for Mobile Devices?
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  Designing an E-commerce UX for Mobile Devices
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  Conclusion
                </li>
                <li class="fw_500 sub_heading_24 color_grey">
                  FAQ'S
                </li>
              </ul>
            </div>
            <div id="scrollToSection1" class="margin_top_64">
              <h2 class="heading_48 fw_700 color_grey heading_width">
                E-commerce Has Come a Long Way
              </h2>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                E-commerce has come a long way since it <span class="fw_700">first emerged in the 1990s</span>. One key aspect of e-commerce is mobile shopping, as a rowing number of customers use their smartphones to shop online. Many e-commerce brands have optimized their websites for mobile devices, making it easier for customers to browse and purchase products. Some examples of successful e-commerce brands include Amazon, eBay, and Alibaba, among the world's largest and most well-known e-commerce companies.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                These brands use various data, systems, and tools to manage their online operations, including databases to store customer and product information, payment gateways to process transactions securely, and marketing tools to reach and engage customers. Online payment encryption helps to protect the sensitive financial information of both buyers and sellers. By using secure payment methods such as SSL and PCI DSS, e-commerce brands can protect their customers' data and reduce the risk of fraud or identity theft.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                When it comes to e-commerce, we've come a long way!
              </p>
            </div>
            <div id="scrollToSection2" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey heading_width">
                The Availability of a Range of E-commerce Platforms
              </h2>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                E-commerce platforms are the backbone of your online store. They do all the heavy lifting, from storing data to processing transactions and helping you manage your inventory. The e-commerce platform you choose will influence every aspect of your business: security, logistics, payment options, and much more.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                There are three main categories of e-commerce platforms: desktop, mobile, and mobile-first (for apps). Each has unique strengths and weaknesses regarding the user experience on different devices, and each is better suited for different businesses.
              </p>
            </div>
            <div id="scrollToSection3" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">Users Involved in E-commerce</h2>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                There are a few different types of e-commerce users that you need to consider when designing your mobile site. These include the following:
              </p>
              <ol class="blog_post_content_ol">
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black">First, the consumers who shop on their phones.</li>
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black">Second, the business owners who sell items through an online store.</li>
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black">Third, the developers and designers who create platforms for e-commerce websites like Shopify or Magento.</li>
              </ol>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                Each of these groups has different needs and expectations for their mobile user experience, so it's important to keep them all in mind when designing your website.
              </p>
            </div>
            <div id="scrollToSection4" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">Types of Mobile E-commerce User Experiences</h2>
              <img class="post_dg_image_three blog_post_mt" src="<?php echo $baseUrl; ?>assets/images/shopping-cart.png" alt="shopping cart" width="100%" height="100%" />
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                While many businesses have a traditional approach to their e-commerce websites, some companies are taking advantage of the unique capabilities of mobile devices by crafting innovative shopping experiences.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                For instance, you can use NFC technology in your mobile app or website to create an experience where users can pay for products with their phones. UPI (Unified Payments Interface) is another one of the most convenient ways to allow your customers to pay with just a QR code or UPI ID.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                This allows customers without cash or credit cards on hand to wave their phone at a reader and complete their transaction instantly, essentially creating a much more convenient experience.
              </p>
            </div>
            <div id="scrollToSection5" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">Tips for Designing a User Experience for Mobile E-commerce</h2>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                Discussed below are some strategies to help you create an outstanding e-commerce mobile user experience:
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                1. The main aspect that needs to be considered is that designing for mobile is a different process than designing for desktop. You should create an optimized experience for the device rather than trying to replicate what you already have.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                2. Another tip is creating intuitive, responsive, or dynamic user interfaces (UIs). Your UI must make sense so users can easily interact with it and find what they need quickly without having to look at instructions or Google how- tos. You can simplify menus, create visually attractive yet simple application icons, and have features such as infinite scroll for your e-commerce website. Incorporating dynamic or responsive UIs ensures your application is accessible across all devices.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                3. Make sure your content works well across multiple devices! If users visit from their phones or tablets, ensure there isn't any missing information on the screen, like missing images or text.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                <span class="fw_700">Read also: </span>
                <a target="_blank" href="<?php echo $baseUrl; ?>articles/post/how-to-turn-curious-browsers-into-buyers-with-effective-ecommerce-site-search">
                  How to Turn Curious Browsers into Buyers with Effective E-Commerce Site Search
                </a>
              </p>
            </div>
            <div id="scrollToSection6" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">How to Optimize your E-commerce Website for Mobile Devices?</h2>
              <img class="post_dg_image_three blog_post_mt" src="<?php echo $baseUrl; ?>assets/images/shopping-cart.png" alt="shopping cart" width="100%" height="100%" />
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                Consider these aspects to better optimize the website experience for your mobile users:
              </p>
              <ul class="mobile_ecommerce_post">
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black"><span class="fw_700">Use responsive design:</span> As mentioned above, responsive designs are an ideal way to optimize for mobile devices, and they're easy to implement if you already have a website. Intuitive designers allow you to resize your browser window during the design process so that they can see how their layout will look on different devices. This will ensure that your site looks good on desktop, computers and smartphones before publishing it online.</li>
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black"><span class="fw_700">Replace higher resolution images with optimized images:</span> If your e-commerce site uses large images to make products look appealing, consider using optimized ones. These images will reduce the page load time due to the updated nature of the FCP & LCP of your website.</li>
              </ul>
            </div>
            <div id="scrollToSection7" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">Designing an E-commerce UX for Mobile Devices</h2>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                When designing for mobile devices, you're not just designing for a small screen; you're designing for a different interaction with your customers. That's why it's important to take into account these factors:
              </p>
              <ul class="mobile_ecommerce_post">
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black"><span class="fw_700"> Screen size and resolution:</span>  Mobile device screens have evolved - from large smartphones to tablets that can be used as computers. Designing an e-commerce site with multiple device types in mind is essential because there are numerous different device sizes out there now!</li>
                <li class="blog_post_mt fw_400 content_20 ff_satoshi color_black"><span class="fw_700">Touchscreens: </span> Touchscreens allow easier navigation than a mouse or keyboard on desktop sites. This is why you should ensure the optimal placement of the tap buttons to prevent accidentally navigating away from the page. When planning how users will interact with objects on their pages, ensure that both desktop and touchscreen users can access them easily!</li>
              </ul>
            </div>
            <div id="scrollToSection8" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">Conclusion</h2>
              <img class="post_dg_image_three blog_post_mt" src="<?php echo $baseUrl; ?>assets/images/conclusion.png" alt="conclusion" width="100%" height="100%" />
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                Mobile UX entails creating an intuitive interface and ensuring a seamless shopping experience. The important elements to consider are ease-of-use, accessibility, and simplicity. Here, the key factors to ensure optimal lead conversion are speed, convenience, and trustworthiness.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                Since users tend to switch between sites on mobile quickly, it is crucial to keep things simple and avoid distractions. By focusing on creating easy-to-use menus, intuitive user interfaces, and responsive designs that work across a wide range of screen sizes, you can ensure that your users will always have an enjoyable shopping experience no matter where they are or what device they use.
              </p>
              <p class="blog_post_mt fw_400 content_20 ff_satoshi color_black">
                <span class="fw_700">If you're looking for an e-commerce web design company, get in touch with us</span> 
                <a href="<?php echo $baseUrl; ?>contact/" class="text_decoration_underline">here</a>.
              </p>
            </div>
            <div id="scrollToSection9" class="margin_top_32">
              <h2 class="heading_48 fw_700 color_grey">FAQ</h2>
              <div class="post_faq_container">
                <h3 class="fw_700 sub_heading_24 color_grey">
                  Q. What are the best practices for Mobile E-commerce?
                </h4>
                <p class="fw_400 content_20 ff_satoshi color_black">
                  Listed below are a few of the best practices for mobile e-commerce:
                </p>
                
              </div>
              <div class="post_faq_container">
                <h3 class="fw_700 sub_heading_24 color_grey">
                  Q. How important is Mobile UX Design?
                </h4>
                <p class="fw_400 content_20 ff_satoshi color_black">
                  One of the most crucial components in a customer's purchasing decision is the mobile experience of an e-commerce site. Because consumers are spending more time buying on their phones, it is critical.
                </p>
              </div>
              <div class="post_faq_container">
                <h3 class="fw_700 sub_heading_24 color_grey">
                  Q. What trends are happening in Mobile UI right now?
                </h4>
                <p class="fw_400 content_20 ff_satoshi color_black">
                  The top trends in Mobile UI right now are splash screens, easy login/logouts, illustrations, material design, and the use of video in mobile UX.
                </p>
              </div>
              <div class="post_faq_container">
                <h3 class="fw_700 sub_heading_24 color_grey">
                  Q. What makes a great e-commerce user experience?
                </h4>
                <p class="fw_400 content_20 ff_satoshi color_black">
                  The primary aim of mobile usability should be conversion. The most important qualities, in this case, are speed, convenience, and trustworthiness. Because the user's attention span on mobile is shorter than on desktop, it's critical to keep things simple and avoid distractions.
                </p>
              </div>
              <div class="post_faq_container">
                <h3 class="fw_700 sub_heading_24 color_grey">
                  Q. What are the consequences of poor customer experience on mobile devices?
                </h4>
                <p class="fw_400 content_20 ff_satoshi color_black">
                  A negative client experience may quickly discourage a brand. It increases customer attrition, stifles potential revenue development, creates negative word-of-mouth, decreases net promoter score, and eventually sends more business to your competitors.
                </p>
              </div>
            </div>
          </div>
          <div class="post_sticky_container">
            <div class="post_progress_container">
              <svg viewBox="0 0 100 100" id="post_progress_svg">
                <circle class="progress_circle" cx="50" cy="50" r="40" stroke="#F1F1F1" stroke-width="8" fill="#F6F6F6" />
                <circle class="post_progress_fill" cx="50" cy="50" r="40" stroke="#5583FE" stroke-width="8" stroke-dasharray="251, 251" stroke-linecap="round" stroke-dashoffset="251" fill="transparent" />
                <image href="<?php echo $baseUrl; ?>assets/images/blog-post-arrowdown.svg" class="post_arrow_svg_img" x="0" y="0" width="20" height="24" />
              </svg>
            </div>
          </div>
        </div>
        <div class="share_author_container">
          <div class="share_container">
            <p class="fw_500 content_20 ff_satoshi color_grey">Share</p>
            <a href="https://www.linkedin.com/shareArticle?url=<?php echo $baseUrl; ?>post/" target="_blank">
              <img src="<?php echo $baseUrl; ?>assets/images/share-linkedin.svg" alt="share linkedin" width="24px" height="24px" />
            </a>
            <a href="https://web.whatsapp.com/send?text=<?php echo $baseUrl; ?>post/" data-action="share/whatsapp/share" target="_blank">
              <img src="<?php echo $baseUrl; ?>assets/images/share-whatsapp.svg" alt="share whatsapp" width="24px" height="24px" />
            </a>
            <a href="https://www.facebook.com/sharer.php?u=<?php echo $baseUrl; ?>post/" target="_blank">
              <img src="<?php echo $baseUrl; ?>assets/images/share-facebook.svg" alt="share facebook" width="25px" height="25px" />
            </a>
          </div>
          <div class="about_author_block">
            <div class="author_container">
              <img src="<?php echo $baseUrl; ?>assets/images/author-juhi.png" alt="Juhi Chakravertty" class="author_image" width="131px" height="131px" />
              <div class="author_name_block">
                <h3 class="sub_heading_24 fw_700 color_dark_black">Juhi Chakravertty</h4>
                <!-- <a href="" target="_blank">
                  <img src="<?php echo $baseUrl; ?>assets/images/author-linkedin.svg" alt="author linkedin" width="24px" height="24px" />
                </a> -->
              </div>
              <p class="content_20 fw_500 ff_satoshi color_lighter_grey">Growth Marketer</p>
            </div> 
            <div class="author_right_block">
              <p class="ff_satoshi fw_400 content_20 color_black author_desc">
                Juhi Chakravertty is a dynamic growth marketer at UniKwan, where she thrives in the world of digital marketing and user-centric strategies. Alongside her marketing prowess, she finds joy in traveling, photography, and lively discussions about innovative marketing strategies. Juhi's diverse interests and unwavering curiosity make her a valuable asset in the ever-changing landscape of design and marketing.
              </p>
            </div>  
          </div>
        </div>
      </section>
      <!-- End Blog Post Content Section -->

      <!-- Begin Similar Blogs Section -->
      <section class="similar_blogs_section pl_pr">
        <h2 class="heading_48 fw_700 color_light_black">Read few more.</h2>
        <div class="blog_listing_flex">
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
      <!-- End Similar Blogs Section -->

      <!-- Begin Footer Section -->
      <?php include '../../../footer.php';?>
      <!-- End Footer Section -->
    </section>
  </body>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", (event) => {
      gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
      
      document.querySelectorAll(".table_content_container li").forEach((btn, index) => {
        btn.addEventListener("click", () => {
          gsap.to(window, {duration: 2, scrollTo:{y: "#scrollToSection" + (index + 1), offsetY: 25}});
        });
      });

      var lastBlogPostTop = 0;
      var scrollToId = "#scrollToSection9";
      var progressPercentage = 0;
      $(window).scroll(function() {
        var window_top_position = $(window).scrollTop();
        if(window_top_position > lastBlogPostTop) {
          if(progressPercentage < 90) {
            scrollToId = "#scrollToSection9";
            $(".post_arrow_svg_img").attr("href", "<?php echo $baseUrl; ?>assets/images/blog-post-arrowdown.svg");
          }
          else {
            scrollToId = "#scrollToSection0";
            $(".post_arrow_svg_img").attr("href", "<?php echo $baseUrl; ?>assets/images/blog-post-arrowup.svg");
          }
        }
        else if(window_top_position < lastBlogPostTop) {
          if(progressPercentage > 22) {
            scrollToId = "#scrollToSection0";
            $(".post_arrow_svg_img").attr("href", "<?php echo $baseUrl; ?>assets/images/blog-post-arrowup.svg");
          }
          else {
            scrollToId = "#scrollToSection9";
            $(".post_arrow_svg_img").attr("href", "<?php echo $baseUrl; ?>assets/images/blog-post-arrowdown.svg");
          }
        }
        lastBlogPostTop = window_top_position;
      });

      $("#post_progress_svg").click(function () {
        gsap.to(window, {duration: 2, scrollTo:{y: scrollToId, offsetY: 25}});
      });

      const progressCircle = document.querySelector(".post_progress_fill");

      const scrollTrigger = ScrollTrigger.create({
        trigger: ".blog_post_scroll_container",
        start: "top bottom",
        end: "bottom center",
        scrub: 1,
        onUpdate: (self) => {
          const progress = self.progress * 100;
          progressCircle.style.strokeDashoffset = 251 - (progress * 2.51);
          progressPercentage = (Math.round(progress));
        },
      });
    });

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
            end: "bottom center",
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