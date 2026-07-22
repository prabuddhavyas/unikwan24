<!DOCTYPE html>
<html lang="en">

<head>
  <title>UI UX Design Agency India | Award-Winning UX | UniKwan</title>
  <meta name="description"
    content="UniKwan is an award-winning UI UX design agency serving global brands across ecommerce, OTT, healthtech, and SaaS — trusted by Philips, Lionsgate, and Titan.">
    <meta name="google-site-verification" content="hQI4CxsS_aShZluyc8vgcqWcxZLcSRuX_4BfT6AaYYk" />
  <?php
  include 'header.php';
  ?>
  <meta name="author" content="UniKwan Innovations" />
  <meta property='og:title' content='UI UX Design Agency India | Award-Winning UX | UniKwan' />
  <meta property='og:description'
    content='UniKwan is an award-winning UI UX design agency serving global brands across ecommerce, OTT, healthtech, and SaaS — trusted by Philips, Lionsgate, and Titan.' />
  <meta property='og:url' content='<?php echo $baseUrl; ?>' />
  <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/logo-v2.png' />
  <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/logo-v2.png" />
  <meta property="og:site_name" content="UniKwan Innovations">
  <meta property="og:type" content="Website">
</head>

<body>
  <!-- Begin Hero Section -->
  <section class="hero_section">
    <!-- Begin Navbar Section -->
    <?php include 'navbar.php'; ?>
    <!-- End Navbar Section -->

    <!-- Begin Hero Content Section -->
    <div class="hero_content_section">
      <h2 class="heading_34 fw_300 color_white home_hero_sub_title">Driving Innovation Through</h2>
      <h1 class="heading_48 fw_400 color_white home_hero_title">Thoughtful AI UX Design</h1>
    </div>
    <!-- End Hero Content Section -->
    <div id="desktop_unikwan_hero_animation" class="unikwan_hero_animation desktop"></div>
    <div id="tablet_unikwan_hero_animation" class="unikwan_hero_animation tablet"></div>
    <div id="mobile_unikwan_hero_animation" class="unikwan_hero_animation mobile"></div>
  </section>
  <!-- End Hero Section -->

  <!-- Begin Video Section -->
  <section class="video_section">
    <!-- <div class="video_image_container">
        <div class="video_image_poster">
          <img src="<?php echo $baseUrl; ?>assets/images/video-poster.png" alt="unikwan video" width="100%" height="100%" />
        </div>
      </div> -->
    <div class="video_container">
      <video controls crossorigin playsinline muted>
        <source src="<?php echo $baseUrl; ?>assets/videos/UniKwan_Showreel_2023_480.mp4" type="video/mp4" size="480">
        <source src="<?php echo $baseUrl; ?>assets/videos/UniKwan_Showreel_2023_720.mp4" type="video/mp4" size="720">
        <source src="<?php echo $baseUrl; ?>assets/videos/UniKwan_Showreel_2023_1080.mp4" type="video/mp4" size="1080">
      </video>
    </div>
  </section>
  <!-- End Video Section -->

  <!-- Begin Award Section -->
  <section class="award_section">
    <div class="award_container">
      <!-- <h2 class="award_text first_element heading_60 fw_700 color_grey">
          <span class="award_text_shadow">Award-Winning</span> <br/> <span class="primary_gradient award_text_shadow">UX Design Company</span>
        </h2>
        <div class="second_element awards_container">
          <div class="awards_inner_container">
            <div class="awards_image_container">
              <img src="<?php echo $baseUrl; ?>assets/images/clutch.png" alt="clutch" width="111px" height="121px" />
              <h3 class="award_name sub_heading_24 fw_500 color_grey">Clutch India</h3>
            </div>
            <div class="awards_image_container">
              <img src="<?php echo $baseUrl; ?>assets/images/clutch.png" alt="clutch" width="111px" height="121px" />
              <h3 class="award_name sub_heading_24 fw_500 color_grey">Clutch India</h3>
            </div>
            <div class="awards_image_container">
              <img src="<?php echo $baseUrl; ?>assets/images/clutch.png" alt="clutch" width="111px" height="121px" />
              <h3 class="award_name sub_heading_24 fw_500 color_grey">Clutch India</h3>
            </div>
            <div class="awards_image_container">
              <img src="<?php echo $baseUrl; ?>assets/images/dia.png" alt="dia" width="118px" height="118px" />
              <h3 class="award_name sub_heading_24 fw_500 color_grey">DIA Intelligence Award</h3>
            </div>
            <div class="awards_image_container">
              <img src="<?php echo $baseUrl; ?>assets/images/ces.png" alt="ces" width="118px" height="118px" />
              <h3 class="award_name sub_heading_24 fw_500 color_grey">CES Innovation Award</h3>
            </div>
          </div>
        </div> -->
      <div id="award_winning_animation" class="award_winning_animation"></div>
    </div>
  </section>
  <!-- End Award Section -->

  <!-- Begin Project Section -->
  <section class="project_section pl_pr">
    <div class="project_flex_container">
      <div class="project_card_container fastrack">
        <a href="<?php echo $baseUrl; ?>projects/fastrack/">
          <div id="project_fastrack" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_52 fw_800 color_white">Fastrack</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                    Fastrack transforms e-commerce for youth with a vibrant, engaging UX,
                    significantly reducing cart abandonment and increasing user interaction.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_orange">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/fastrack-base.png" alt="project image" width="369px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/fastrack-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Ecommerce</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Design System</p>
        </div>
      </div>
      <!-- <div class="project_card_container waggle mt">
        <a href="<?php echo $baseUrl; ?>projects/waggle/">
          <div id="project_waggle" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_52 fw_800 color_white">Waggle</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                    Waggle innovates pet parenting via a mobile app, merging real-time safety
                    features with a dynamic social platform for comprehensive community engagement.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_green">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-green.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/waggle-base.png" alt="project image" width="468px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/waggle-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Social Media</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Mobile App</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
        </div>
      </div> -->
      <div class="project_card_container visist mt">
        <a href="<?php echo $baseUrl; ?>projects/visist/">
          <div id="project_visist" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_52 fw_800 color_white">Visist.AI</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                   Visist.ai is an AI-powered sports analytics platform designed for young athletes that generates detailed match assessments and performance reports.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_dark_green">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/visist-base.webp" alt="project image" width="475px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/visist-hover.webp" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Sports Analytics</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">AI UX</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX App</p>
        </div>
      </div>
    </div>
    <div class="project_flex_container pt">
      <div class="project_card_container lionsgate">
        <a href="<?php echo $baseUrl; ?>projects/lionsgate-play/">
          <div id="project_lionsgateplay" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Lionsgate Play</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                    Lionsgate Play transforms the OTT space with personalized, multi-device
                    streaming experiences, leveraging a vast library of premium, curated content.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_black">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/lionsgate-home-base.png" alt="project image"
                  width="554px" height="100%" />
              </div>
              <div class="project_image project_hover_image small_mobile">
                <img src="<?php echo $baseUrl; ?>assets/images/lionsgate-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image mediummobile_tablet_desktop">
                <img src="<?php echo $baseUrl; ?>assets/images/lionsgate-home-hover.png" alt="project image"
                  width="100%" height="100%" />
              </div>
            </div>
          </div>
        </a>
          <div class="project_categories">
            <div class="project_category_container">
              <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">OTT</p>
              <span class="grey_circle"></span>
            </div>
            <div class="project_category_container">
              <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
              <span class="grey_circle"></span>
            </div>
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Multi-device</p>
          </div>
      </div>
    </div>
    <div class="project_flex_container pt">
      <!-- <div class="project_card_container edprime">
        <a href="<?php echo $baseUrl; ?>projects/edprime/">
          <div id="project_edprime" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_52 fw_800 color_white">Edprime</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                    EdPrime redefines educational management with a user-centric ERP system,
                    boosting engagement and operational efficiency in school settings.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_purple">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-purple.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/edprime-base.png" alt="project image" width="485px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/edprime-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">SaaS</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">ERP System</p>
        </div>
      </div> -->
      <div class="project_card_container brelyon">
        <a href="<?php echo $baseUrl; ?>projects/brelyon/">
          <div id="project_brelyon" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_52 fw_800 color_white">Brelyon</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                    Founded by an MIT graduate, Brelyon's Visual Engine turns dense AI-powered behavioral data into real-time visual intelligence.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_black">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/brelyon-base.webp" alt="project image" width="436px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/brelyon-hover.webp" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Enterprise software</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Spatial UI</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">AI UX</p>
        </div>
      </div>
      <div class="project_card_container bsk mt">
        <a href="<?php echo $baseUrl; ?>projects/bapuji-seva-kendra/">
          <div id="project_bsk" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_52 fw_800 color_white">BSK</h2>
                  <p class="project_description ff_satoshi content_wls_18 fw_400 color_white">
                    Enhancing rural Karnataka's government services, the BSK app offers
                    streamlined processes, improved access, and integrated voice search
                    in a comprehensive solution.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_blue">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-blue.svg" alt="button arrow"
                      width="13px" height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/bsk-base.png" alt="project image" width="414px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">

                <img src="<?php echo $baseUrl; ?>assets/images/bsk-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Government</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Interface design</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Mobile App</p>
        </div>
      </div>
    </div>
    <div class="project_button_container">
      <a class="ff_satoshi content_wls_16 fw_500 button button_grey" href="<?php echo $baseUrl; ?>projects/">
        View all cases
      </a>
    </div>
  </section>
  <!-- End Project Section -->

  <!-- Begin Expertise Section -->
  <section class="expert_section">
    <div class="label_purple ml_mr">
      <p class="ff_satoshi content_20 fw_700 color_white">Expertise</p>
    </div>
    <div class="expert_heading_container heading_mt pl_pr">
      <h2 class="sub_heading_48 fw_700 color_white expertise_heading">What we do?</h2>
      <div class="expert_button_container">
        <a href="<?php echo $baseUrl; ?>expertise/" class="ff_satoshi content_wls_16 fw_500 button button_white">See
          All</a>
      </div>
    </div>
    <div class="expert_content_container">
      <div class="expert_slider_container_mobile mobile"></div>
      <div class="expert_left_container tablet_desktop">
        <div class="expert_image_container box_active">
          <img src="<?php echo $baseUrl; ?>assets/images/expert-arrow.png" alt="expert arrow" width="334px"
            height="100%" />
        </div>
        <div class="expert_slider_container">
          <div class="expert_icon_flex">
            <div id="eq1" class="expert_icon_container box_icon active">
              <img src="<?php echo $baseUrl; ?>assets/images/box-hover.svg" data-id="eimg1"
                onmouseenter='hoverOnExpert("eq1", event)' alt="box" width="24px" height="24px" />
            </div>
            <div id="eq2" class="expert_icon_container browser_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/browser.svg" data-id="eimg2"
                onmouseenter='hoverOnExpert("eq2", event)' alt="browser" width="24px" height="24px" />
            </div>
            <div id="eq3" class="expert_icon_container robot_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/robot.svg" data-id="eimg3"
                onmouseenter='hoverOnExpert("eq3", event,)' alt="robot" width="24px" height="24px" />
            </div>
          </div>
          <img src="<?php echo $baseUrl; ?>assets/images/expert-half-circle.png" alt="expert half circle"
            class="expert_half_circle" width="130px" height="329px" />
        </div>
      </div>
      <div class="expert_right_container pr">
        <div class="expert_accordion">
          <div class="expert_accordion_flex">
            <div id="eqm1" class="expert_icon_container box_icon active mobile">
              <img src="<?php echo $baseUrl; ?>assets/images/box-hover.svg" data-id="eimg1"
                onmouseenter='hoverOnExpert("eqm1", event)' alt="box" width="24px" height="24px" />
            </div>
            <div id="eq1" class="expert_accordion_container hr_grey tablet_desktop"
              onclick='expertAccordion("eq1", event)'>
              <div class="expert_accordion_left_container">
                <div class="expert_accordion_header">
                  <h3 class="sub_heading_24 fw_500 color_white expert_question">
                    Product Strategy & Growth Design
                  </h3>
                </div>
                <div class="expert_accordion_content">
                  <div class="feature_list_flex">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">North Star Metric Framework</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Product Strategy & Management</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Data & Consumer Value Optimization</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">A/B Testing & Experimentation</p>
                  </div>
                </div>
              </div>
              <div class="expert_accordion_right_container expert_link">
                <!-- <a href="" class="expert_link_container" target="_blank"> -->
                <div class="expert_link_container">
                  <div class="expert_icon">
                    <img src="<?php echo $baseUrl; ?>assets/images/up.svg" alt="expand link arrow" class="collapsed"
                      width="19px" height="16px" />
                  </div>
                </div>
                <!-- </a> -->
              </div>
            </div>
            <div id="eqm1" class="expert_accordion_container hr_grey mobile" onclick='expertAccordion("eqm1", event)'>
              <div class="expert_accordion_left_container">
                <div class="expert_accordion_header">
                  <h3 class="sub_heading_24 fw_500 color_white expert_question">
                    Product Strategy & Growth Design
                  </h3>
                </div>
                <div class="expert_accordion_content">
                  <div class="feature_list_flex">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">North Star Metric Framework</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Product Strategy & Management</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Data & Consumer Value Optimization</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">A/B Testing & Experimentation</p>
                  </div>
                </div>
              </div>
              <div class="expert_accordion_right_container expert_link">
                <!-- <a href="" class="expert_link_container" target="_blank"> -->
                <div class="expert_link_container">
                  <div class="expert_icon">
                    <img src="<?php echo $baseUrl; ?>assets/images/up.svg" alt="expand link arrow" class="collapsed"
                      width="19px" height="16px" />
                  </div>
                </div>
                <!-- </a> -->
              </div>
            </div>
          </div>
          <div class="expert_accordion_flex">
            <div id="eqm2" class="expert_icon_container browser_icon mobile">
              <img src="<?php echo $baseUrl; ?>assets/images/browser.svg" data-id="eimg2"
                onmouseenter='hoverOnExpert("eqm2", event)' alt="browser" width="24px" height="24px" />
            </div>
            <div id="eq2" class="expert_accordion_container hr_grey tablet_desktop"
              onclick='expertAccordion("eq2", event)'>
              <div class="expert_accordion_left_container">
                <div class="expert_accordion_header">
                  <h3 class="sub_heading_24 fw_500 color_white expert_question">
                    User Experience Design
                  </h3>
                </div>
                <div class="expert_accordion_content">
                  <div class="feature_list_flex">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Design System Development</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Consumer & Enterprise UI/UX</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">UI Design & Development</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">UX Audit & Usability Practices</p>
                  </div>
                </div>
              </div>
              <div class="expert_accordion_right_container">
                <!-- <a href="" class="expert_link_container" target="_blank"> -->
                <div class="expert_link_container">
                  <div class="expert_icon">
                    <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px"
                      height="16px" />
                  </div>
                </div>
                <!-- </a> -->
              </div>
            </div>
            <div id="eqm2" class="expert_accordion_container hr_grey mobile" onclick='expertAccordion("eqm2", event)'>
              <div class="expert_accordion_left_container">
                <div class="expert_accordion_header">
                  <h3 class="sub_heading_24 fw_500 color_white expert_question">
                    User Experience Design
                  </h3>
                </div>
                <div class="expert_accordion_content">
                  <div class="feature_list_flex">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Design System Development</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Consumer & Enterprise UI/UX</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">UI Design & Development</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">UX Audit & Usability Practices</p>
                  </div>
                </div>
              </div>
              <div class="expert_accordion_right_container">
                <!-- <a href="" class="expert_link_container" target="_blank"> -->
                <div class="expert_link_container">
                  <div class="expert_icon">
                    <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px"
                      height="16px" />
                  </div>
                </div>
                <!-- </a> -->
              </div>
            </div>
          </div>
          <div class="expert_accordion_flex">
            <div id="eqm3" class="expert_icon_container robot_icon mobile">
              <img src="<?php echo $baseUrl; ?>assets/images/robot.svg" data-id="eimg3"
                onmouseenter='hoverOnExpert("eqm3", event,)' alt="robot" width="24px" height="24px" />
            </div>
            <div id="eq3" class="expert_accordion_container hr_grey tablet_desktop"
              onclick='expertAccordion("eq3", event)'>
              <div class="expert_accordion_left_container">
                <div class="expert_accordion_header">
                  <h3 class="sub_heading_24 fw_500 color_white expert_question">
                    AI UX Design
                  </h3>
                </div>
                <div class="expert_accordion_content">
                  <div class="feature_list_flex">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">System & User Personas</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Conversational AI UX design</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Chatbot Design & Development</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Affordances & Interactions Patterns</p>
                  </div>
                </div>
              </div>
              <div class="expert_accordion_right_container">
                <!-- <a href="" class="expert_link_container" target="_blank"> -->
                <div class="expert_link_container">
                  <div class="expert_icon">
                    <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px"
                      height="16px" />
                  </div>
                </div>
                <!-- </a> -->
              </div>
            </div>
            <div id="eqm3" class="expert_accordion_container hr_grey mobile" onclick='expertAccordion("eqm3", event)'>
              <div class="expert_accordion_left_container">
                <div class="expert_accordion_header">
                  <h3 class="sub_heading_24 fw_500 color_white expert_question">
                    AI UX Design
                  </h3>
                </div>
                <div class="expert_accordion_content">
                  <div class="feature_list_flex">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">System & User Personas</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Conversational AI UX design</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Chatbot Design & Development</p>
                  </div>
                  <div class="feature_list_flex mt">
                    <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                    <p class="ff_satoshi content_20 fw_400 color_half_white">Affordances & Interactions Patterns</p>
                  </div>
                </div>
              </div>
              <div class="expert_accordion_right_container">
                <!-- <a href="" class="expert_link_container" target="_blank"> -->
                <div class="expert_link_container">
                  <div class="expert_icon">
                    <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px"
                      height="16px" />
                  </div>
                </div>
                <!-- </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Expertise Section -->

  <!-- Begin Client Section -->
  <section class="client_section">
    <div class="label_purple ml_mr">
      <p class="ff_satoshi content_20 fw_700 color_white">Clients</p>
    </div>
    <h2 class="sub_heading_48 fw_700 color_white heading_mt pl_pr client_heading">Trusted by Leading Brands</h2>
    <div class="client_logo_container">
      <div aria-label="clients logo ltr slider">
        <div class="client_logo_inner_container left_direction_slider">
          <img src="<?php echo $baseUrl; ?>assets/images/philips.svg" alt="philips" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/openstream.svg" alt="openstream" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/dialog.svg" alt="dialog" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/nokia.svg" alt="nokia" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/nasscom-community.svg" alt="nasscom community" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/ge-healthcare.svg" alt="GE healthcare" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/lightmetrics.svg" alt="lightmetrics" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/nagra.svg" alt="nagra" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/your-story.svg" alt="your story" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/tata-elxsi.svg" alt="tata elxsi" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/mit.svg" alt="MIT" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/dish-tv.svg" alt="dish tv" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/aditya-birla.svg" alt="aditya birla" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/mahindra-finance.svg" alt="mahindra finance" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/nimble.svg" alt="nimble" width="276px" height="259px" />
        </div>
      </div>
      <div aria-label="clients logo rtl slider" dir="rtl">
        <div class="client_logo_inner_container right_direction_slider">
          <img src="<?php echo $baseUrl; ?>assets/images/titan.svg" alt="titan" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/karnataka-government.svg" alt="government of karnataka"
            width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/mit-media-lab.svg" alt="mit media lab" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/adobe.svg" alt="adobe" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/hp-enterprise.svg" alt="hp enterprise" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/lionsgate-play.svg" alt="lionsgate play" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/jeevn.svg" alt="jeevn" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/plim.svg" alt="plim" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/nworx.svg" alt="nworx" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/national-institute.svg" alt="national institute of design"
            width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/canal-digital.svg" alt="canal digital" width="276px"
            height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/open-tv.svg" alt="open tv" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/microsoft.svg" alt="microsoft" width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/interview-kickstart.svg" alt="interview kickstart"
            width="276px" height="259px" />
          <img src="<?php echo $baseUrl; ?>assets/images/mcafee.svg" alt="mcafee" width="276px" height="259px" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Section -->

  <!-- Begin Resources Section -->
  <!-- <section class="resource_section pl_pr">
    <div class="label_purple">
      <p class="ff_satoshi content_20 fw_700 color_white">Resources</p>
    </div>
    <h2 class="sub_heading_48 fw_700 color_white heading_mt resource_heading">
      Your Toolbox for Design Excellence
    </h2>
    <div class="resource_outer_flex_container">
      <div class="resource_flex_container">
        <div id="articles" class="resource_card_container border_op2_white" onmouseenter="resourceMouselog(event)"
          onmouseleave="resourceMouselog(event)">
          <div class="resource_top_container">
            <h3 class="sub_heading_34 fw_500 color_white resource_sub_heading">Articles</h3>
            <img src="<?php echo $baseUrl; ?>assets/images/blog-gif.gif" class="gif_image" alt="Articles" width="84px"
              height="84px" />
          </div>
          <div class="resource_content_container">
            <hr class="hr_purple resource_hr" />
            <p class="resource_description ff_satoshi content_20 fw_400 color_lighter_grey">
              Our UI/UX design articles capture our journey, from tackling challenges to
              celebrating milestones. Explore the creativity, innovation, and excellence that drive us.
            </p>
          </div>
          <div class="button_container">
            <a href="<?php echo $baseUrl; ?>articles/" class="resource_button resource_button_rounded">
              <div class="button_content_container">
                <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Learn more</p>
                <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-primary.svg" class="resource_button_icon"
                  alt="button arrow" width="13px" height="11px" />
              </div>
            </a>
          </div>
        </div> -->
        <!-- <div id="success_stories" class="resource_card_container border_op2_white"
          onmouseenter="resourceMouselog(event)" onmouseleave="resourceMouselog(event)"> -->
          <!-- <div class="resource_top_container">
            <h3 class="sub_heading_34 fw_500 color_white resource_sub_heading">Success Stories</h3>
            <img src="<?php echo $baseUrl; ?>assets/images/success-gif.gif" class="gif_image" alt="success stories"
              width="84px" height="84px" />
          </div>
          <div class="resource_content_container">
            <hr class="hr_purple resource_hr" />
            <p class="resource_description ff_satoshi content_20 fw_400 color_lighter_grey">
              Explore compelling success stories from our clients. Discover how we've helped
              businesses like yours achieve their goals through innovative design solutions.
            </p>
          </div> -->
          <!-- <div class="button_container">
            <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Coming soon</p> -->
            <!-- <a href="<?php echo $baseUrl; ?>success-stories/" class="resource_button resource_button_rounded">
                <div class="button_content_container">
                  <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Learn more</p>
                  <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-primary.svg" class="resource_button_icon" alt="button arrow" width="13px" height="11px" />
                </div>
              </a> -->
          <!-- </div> -->
        <!-- </div> -->

        <!-- <div id="templates_ebboks" class="resource_card_container border_op2_white"
          onmouseenter="resourceMouselog(event)" onmouseleave="resourceMouselog(event)">
          <div class="resource_top_container">
            <h3 class="sub_heading_34 fw_500 color_white resource_sub_heading">Free templates & eBooks</h3>
            <img src="<?php echo $baseUrl; ?>assets/images/ebook-gif.gif" class="gif_image" alt="ebook" width="84px"
              height="84px" />
          </div>
          <div class="resource_content_container">
            <hr class="hr_purple resource_hr" />
            <p class="resource_description ff_satoshi content_20 fw_400 color_lighter_grey">
              Elevate your design process with our curated collection of free templates
              and eBooks, crafted to inspire and guide businesses across all industries.
            </p>
          </div>
          <div class="button_container">
            <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Coming soon</p> -->
            <!-- <a href="<?php echo $baseUrl; ?>free-templates-and-ebooks/" class="resource_button resource_button_rounded">
                <div class="button_content_container">
                  <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Learn more</p>
                  <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-primary.svg" class="resource_button_icon" alt="button arrow" width="13px" height="11px" />
                </div>
              </a> -->
          <!-- </div> -->
        <!-- </div> -->
      <!-- </div>
    </div>
    <div class="resource_bg_container">
      <img src="<?php echo $baseUrl; ?>assets/images/resource-bg.png" alt="resources bg image" width="356px"
        height="362px" />
    </div>
  </section> -->
  <!-- End Resources Section -->

  <!-- Begin FAQ Section -->
  <section class="faq_section pl_pr">
    <div class="label_purple">
      <p class="ff_satoshi content_20 fw_700 color_white">FAQ</p>
    </div>
    <h2 class="sub_heading_48 fw_700 color_white heading_mt faq_heading">Here's everything you may ask</h2>
    <div class="faq_categeory_outer_container">
      <div class="faq_categeory_flex">
        <!-- <div id="all" class="faq_categeory_container">
            <p class="ff_satoshi content_wls_16 fw_400 color_half_white faq_categeory_name">
              All
            </p>
          </div> -->
        <div id="products" class="faq_categeory_container border_op1_white">
          <p class="ff_satoshi content_wls_16 fw_400 color_white_op50 faq_categeory_name">
            Products
          </p>
        </div>
        <div id="user_experience" class="faq_categeory_container">
          <p class="ff_satoshi content_wls_16 fw_400 color_white_op50 faq_categeory_name">
            User Experience
          </p>
        </div>
        <div id="development" class="faq_categeory_container">
          <p class="ff_satoshi content_wls_16 fw_400 color_white_op50 faq_categeory_name">
            Development
          </p>
        </div>
        <div id="design_costs" class="faq_categeory_container">
          <p class="ff_satoshi content_wls_16 fw_400 color_white_op50 faq_categeory_name">
            Design Costs
          </p>
        </div>
      </div>
    </div>
    <div class="faq_accordion_block">
      <!-- <div id="all" class="faq_accordion">
          <div id="faq1" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                UX Design in the Age of Digital Bharat
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                With HOP Design, you gain access to a diverse team of seasoned product designers, 
                each with their own expertise and perspective. This collective knowledge brings a 
                broader range of creative ideas and solutions to your digital products. Cost-efficiency 
                is a significant advantage. Our team offers top UX/UI design without the heavy costs 
                associated with hiring a full-time senior product designer, including salaries, 
                benefits, and equipment. We offer flexible subscription plans, including both 
                half-time and full-time options, with a minimum duration of just one month. 
                This ensures you get the right level of design support on your terms.
              </p>
            </div>
          </div>
          <div id="faq2" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                UX Design in the Age of Digital Bharat
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                With HOP Design, you gain access to a diverse team of seasoned product designers, 
                each with their own expertise and perspective. This collective knowledge brings a 
                broader range of creative ideas and solutions to your digital products. Cost-efficiency 
                is a significant advantage. Our team offers top UX/UI design without the heavy costs 
                associated with hiring a full-time senior product designer, including salaries, 
                benefits, and equipment. We offer flexible subscription plans, including both 
                half-time and full-time options, with a minimum duration of just one month. 
                This ensures you get the right level of design support on your terms.
              </p>
            </div>
          </div>
          <div id="faq3" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                UX Design in the Age of Digital Bharat
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                With HOP Design, you gain access to a diverse team of seasoned product designers, 
                each with their own expertise and perspective. This collective knowledge brings a 
                broader range of creative ideas and solutions to your digital products. Cost-efficiency 
                is a significant advantage. Our team offers top UX/UI design without the heavy costs 
                associated with hiring a full-time senior product designer, including salaries, 
                benefits, and equipment. We offer flexible subscription plans, including both 
                half-time and full-time options, with a minimum duration of just one month. 
                This ensures you get the right level of design support on your terms.
              </p>
            </div>
          </div>
          <div id="faq4" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                UX Design in the Age of Digital Bharat
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                With HOP Design, you gain access to a diverse team of seasoned product designers, 
                each with their own expertise and perspective. This collective knowledge brings a 
                broader range of creative ideas and solutions to your digital products. Cost-efficiency 
                is a significant advantage. Our team offers top UX/UI design without the heavy costs 
                associated with hiring a full-time senior product designer, including salaries, 
                benefits, and equipment. We offer flexible subscription plans, including both 
                half-time and full-time options, with a minimum duration of just one month. 
                This ensures you get the right level of design support on your terms.
              </p>
            </div>
          </div>
          <div id="faq5" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                UX Design in the Age of Digital Bharat
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                With HOP Design, you gain access to a diverse team of seasoned product designers, 
                each with their own expertise and perspective. This collective knowledge brings a 
                broader range of creative ideas and solutions to your digital products. Cost-efficiency 
                is a significant advantage. Our team offers top UX/UI design without the heavy costs 
                associated with hiring a full-time senior product designer, including salaries, 
                benefits, and equipment. We offer flexible subscription plans, including both 
                half-time and full-time options, with a minimum duration of just one month. 
                This ensures you get the right level of design support on your terms.
              </p>
            </div>
          </div>
        </div> -->
      <div id="products" class="faq_accordion">
        <div id="faq1" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What products or services do you offer?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We offer strategic product design, advanced UI UX design services, and specialized conversation AI design
              solutions to enhance/support your business growth and user engagement.
            </p>
          </div>
        </div>
        <div id="faq2" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What are the benefits of using your product/service?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We bring an outside-in perspective to amplify business outcomes and enhance your brand's reputation
              through innovative designs. Additionally, we drive systemic innovation by integrating new-age design
              practices, deep tech and AI. This enables you to harness the full potential of emerging and future
              technologies.
            </p>
          </div>
        </div>
        <div id="faq3" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Who is your target audience?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We specialize in a wide range of industries including Life Sciences, Energy, Conversation AI, Artificial
              Intelligence, SaaS, Enterprise UX, Consumer UX, Fashion & Retail, Fintech, Ecommerce, Healthcare, and
              Edutech.
            </p>
          </div>
        </div>
        <div id="faq4" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Do you offer a free trial or demo?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We do not offer a free trial or demo, but we provide free consultations to discuss your project needs. You
              can also schedule a 30-minute session on Calendly to explore how we can assist you.
            </p>
          </div>
        </div>
        <div id="faq5" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What marketing services do you offer specifically related to UX design?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              While our primary focus is on the UI/UX design process itself, we understand how UX principles can
              influence marketing success. We provide insights and strategies on how to leverage effective UI/UX design
              to enhance your marketing efforts and improve user engagement. Feel free to reach out if you have any more
              questions or need further information!
            </p>
          </div>
        </div>
      </div>
      <div id="user_experience" class="faq_accordion">
        <div id="faq1" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What is UX design, and how can it benefit my business?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              UX design enhances user satisfaction by improving usability, accessibility, and efficiency in interactions
              with your product. UniKwan's strategic UX design leads to increased customer loyalty, higher conversion
              rates, and a competitive edge in the market.
            </p>
          </div>
        </div>
        <div id="faq2" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What is your UX design process?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Our process at UniKwan includes extensive user research, iterative design, prototyping, and user testing
              to ensure innovative and practical solutions. We focus on delivering designs that meet your users' real
              needs, ensuring every interaction is optimized for engagement and usability.
            </p>
          </div>
        </div>
        <div id="faq3" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Do you offer usability testing?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Yes, UniKwan provides comprehensive usability testing to validate designs and ensure they meet user
              expectations. This critical step helps refine user interfaces for optimal performance and satisfaction.
            </p>
          </div>
        </div>
        <div id="faq4" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How do you ensure an accessible user experience?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We prioritize accessibility throughout our design process, ensuring that our designs meet WCAG guidelines.
              This approach ensures all users can access and benefit from your product, regardless of their abilities.
            </p>
          </div>
        </div>
        <div id="faq5" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Can you integrate UX design with my existing development process?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Absolutely. We specialize in seamlessly integrating UI UX design with existing development processes to
              enhance product coherence and increase efficiency throughout the project lifecycle.
            </p>
          </div>
        </div>
        <div id="faq6" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Can your UI UX design services help improve product marketing?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Yes, our UI UX design services can significantly enhance product marketing. By focusing on the user
              experience, we help create more engaging and user-friendly products, which can lead to increased user
              satisfaction and better marketing outcomes.
            </p>
          </div>
        </div>
      </div>
      <div id="development" class="faq_accordion">
        <div id="faq1" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What technologies do you use for development?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We utilize a robust blend of technologies, including HTML, CSS, JavaScript, jQuery, Bootstrap, MUI, and
              Tailwind, alongside frameworks like Next.js, React.js, React Native, Angular, and WordPress. We also
              incorporate GSAP for animations, ensuring our solutions are cutting-edge and versatile as a leading UI UX
              design agency in Bangalore.
            </p>
          </div>
        </div>
        <div id="faq2" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What is your development process like?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              At UniKwan, our development process begins with a design hand-off to developers, followed by a thorough
              review of the design and selection of a suitable tech stack. We set up the project infrastructure,
              proceeded through iterative development sprints, provided regular updates via demo links, and conducted
              extensive cross-device and browser testing, ensuring the highest quality outcomes as a premier UI UX
              design agency.
            </p>
          </div>
        </div>
        <div id="faq3" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How do you ensure the security of my project?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We prioritize project security by implementing the latest security protocols and compliance standards. Our
              meticulous approach ensures that all projects handled by our UI/UX design agency in Bangalore are secure
              from inception to deployment.
            </p>
          </div>
        </div>
        <div id="faq4" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Do you offer custom development solutions?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              We specialize in front-end development, focusing on creating intuitive and engaging user interfaces. Our
              team excels in bringing designs to life, ensuring a seamless and attractive user experience for your
              customers.
            </p>
          </div>
        </div>
        <div id="faq5" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What is your typical timeline for development projects?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              For a Minimum Viable Product (MVP), we follow a streamlined 100-day plan to ensure a timely and efficient
              launch. The timeline for other projects depends on the project's scale and specific requirements, allowing
              us to tailor our approach to meet your unique needs.
            </p>
          </div>
        </div>
        <div id="faq6" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              What is a design system and how can it benefit my product development process?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              A design system is a collection of reusable components, guided by clear standards, that can be assembled
              to build any number of applications. It ensures consistency, efficiency, and scalability in your product
              development process, enabling your team to deliver high-quality products faster.
            </p>
          </div>
        </div>
      </div>
      <div id="design_costs" class="faq_accordion">
        <div id="faq1" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How much does UX/UI design cost?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              The UI/UX design cost varies based on project complexity, feature intricacy, and design team experience.
              At UniKwan, we tailor our pricing to your needs, ensuring you receive the most value from our
              award-winning design services.
            </p>
          </div>
        </div>
        <div id="faq2" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Do you offer project-based or hourly UX/UI design billing?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              UniKwan offers project- and resource-based billing options, providing flexibility to align with your
              project’s scope and budget requirements.
            </p>
          </div>
        </div>
        <div id="faq3" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              Can I get a free quote for my UX/UI design project?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              Yes. We offer free consultations to discuss your project needs and provide a tailored quote. This ensures
              that you understand the potential costs and scope before committing.
            </p>
          </div>
        </div>
        <div id="faq4" class="faq_accordion_container hr_grey">
          <div class="faq_accordion_header">
            <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
              How long do UX/UI design projects typically take?
            </h3>
            <div class="faq_icon">
              <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px"
                height="25px" />
            </div>
          </div>
          <div class="faq_accordion_content">
            <p class="sub_heading_wls_20 fw_400 color_white">
              The duration varies depending on the project's scope: from 4-6 weeks for rapid designs to over six months
              for extensive product and service innovation strategies, ensuring thorough development and implementation.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="faq_bg_container">
      <img src="<?php echo $baseUrl; ?>assets/images/faq-bg.png" alt="faq bg image" width="1385px" height="1406px" />
    </div>
  </section>
  <!-- End FAQ Section -->

  <!-- Begin Footer Section -->
  <?php include 'footer.php'; ?>
  <!-- End Footer Section -->

</body>

<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

<script>
  const DESKTOP_HERO_LOTTIE_PATH = "https://lottie.host/4ba70a20-9bae-489c-95cc-784c7bf2bb0f/N61Hq8l7Tg.json";

  let desktopHeroAnimation = lottie.loadAnimation({
    container: document.getElementById("desktop_unikwan_hero_animation"),
    path: DESKTOP_HERO_LOTTIE_PATH,
    autoplay: false,
    loop: false,
    renderer: "svg",
  });

  desktopHeroAnimation.addEventListener("DOMLoaded", () => {
    desktopHeroAnimation.play();

    const TABLET_HERO_LOTTIE_PATH = "https://lottie.host/4ba70a20-9bae-489c-95cc-784c7bf2bb0f/N61Hq8l7Tg.json";

    let tabletHeroAnimation = lottie.loadAnimation({
      container: document.getElementById("tablet_unikwan_hero_animation"),
      path: TABLET_HERO_LOTTIE_PATH,
      autoplay: false,
      loop: false,
      renderer: "svg",
    });

    tabletHeroAnimation.addEventListener("DOMLoaded", () => {
      tabletHeroAnimation.play();

      const MOBILE_HERO_LOTTIE_PATH = "https://lottie.host/07fea0b4-4caf-4eae-9b76-7e40ce30d02a/cMK9SFkAPS.json";

      let mobileHeroAnimation = lottie.loadAnimation({
        container: document.getElementById("mobile_unikwan_hero_animation"),
        path: MOBILE_HERO_LOTTIE_PATH,
        autoplay: false,
        loop: false,
        renderer: "svg",
      });

      mobileHeroAnimation.addEventListener("DOMLoaded", () => {
        mobileHeroAnimation.play();

        const AWARD_WINNING_LOTTIE_PATH = "https://lottie.host/796e7a7b-854c-46cf-afbc-7eaeec4e6545/yXkZQ5b1ZC.json";

        let awardWinningAnimation = lottie.loadAnimation({
          container: document.getElementById("award_winning_animation"),
          path: AWARD_WINNING_LOTTIE_PATH,
          autoplay: false,
          loop: true,
          renderer: "svg"
        });

        awardWinningAnimation.addEventListener("DOMLoaded", () => {
          awardWinningAnimation.setSpeed(0.5);
          gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

          ScrollTrigger.create({
            invalidateOnRefresh: true,
            trigger: '.award_section',
            start: 'top center',
            end: 'bottom center',
            onEnter: () => awardWinningAnimation.play(),
            onEnterBack: () => awardWinningAnimation.play(),
            onLeave: () => awardWinningAnimation.pause(),
            onLeaveBack: () => awardWinningAnimation.pause()
          });
        });
      });
    });
  });

  var lastVideoScrollTop = 0;
  var videoPadding = 90;
  var windowWidth;
  $(window).scroll(function () {
    var self_section = $(".video_section").offset().top;
    var bottom_section = $(".award_section").offset().top;
    var window_top_position = $(window).scrollTop();
    var window_bottom_position = (window_top_position + $(window).height());
    var element_height = $('.video_section').height();
    var element_top_position = $('.video_section').offset().top + 200;
    var element_bottom_position = (element_top_position + element_height) - 200;
    var video_top_position = $('.video_section').offset().top + 500;
    var video_bottom_position = (element_top_position + element_height) - 500;
    var padding = parseInt($(".video_section").css("padding"));
    if (window_bottom_position >= element_top_position && window_top_position <= element_bottom_position) {
      if (window_top_position > lastVideoScrollTop) {
        if (windowWidth < 768) {
          padding = 0;
        }
        else if (windowWidth > 767 && windowWidth < 1155) {
          padding -= 5;
        }
        else {
          padding -= 20;
        }
        $(".video_section").css("padding", padding + "px");
      }
      else {
        if (windowWidth < 768) {
          padding = 0;
        }
        else if (windowWidth > 767 && windowWidth < 1155) {
          padding += 5;
        }
        else {
          padding += 20;
        }
        if (padding <= videoPadding) {
          $(".video_section").css("padding", padding + "px");
        }
      }
      if (window_bottom_position >= video_top_position && window_top_position <= video_bottom_position) {
        //$('.video_image_container').hide();
        //$('.video_container').show();
        player.muted = true;
        player.play();
      }
      lastVideoScrollTop = window_top_position;
    }
    else if (window_top_position > bottom_section) {
      $(".video_section").css("padding", "0px");
      player.stop();
      // $('.video_container').hide();
      // $('.video_image_container').show();
    }
    else if (window_bottom_position < self_section) {
      $(".video_section").css("padding", videoPadding + "px");
      player.stop();
      // $('.video_container').hide();
      // $('.video_image_container').show();
    }
  });

  $(window).on('load resize orientationchange', function () {
    windowWidth = $(window).width();
    if (windowWidth > 1699) {
      videoPadding = 200;
    }
    else if (windowWidth < 768) {
      videoPadding = 0;
    }
    else if (windowWidth > 767 && windowWidth < 1155) {
      videoPadding = 32;
    }
    else {
      videoPadding = 90;
    }
  });

  // var lastAwardScrollTop = 0;
  // var flag = 0;
  // $(window).scroll(function() {
  //   var window_top_position = $(window).scrollTop();
  //   var self_section = $(".award_container").offset().top;
  //   var bottom_section = $(".project_section").offset().top;
  //   var window_bottom_position = (window_top_position + $(window).height());
  //   var scrollPos = $(window).scrollTop();
  //   var element_height = $('.award_container').height();
  //   var element_top_position = $('.award_container').offset().top + 400;
  //   var scrolldown_element_bottom_position = (element_top_position + element_height) - 800;
  //   var scrollup_element_bottom_position = (element_top_position + element_height) - 800;
  //   if ((window_bottom_position >= element_top_position) && (window_top_position <= scrolldown_element_bottom_position)) {
  //     if(window_top_position > lastAwardScrollTop) {
  //       $('.first_element').removeClass('award_fadein').addClass('award_fadeout').hide();
  //       $('.second_element').removeClass('award_fadeout').show().addClass('award_fadein');
  //     }
  //     else {
  //       if ((window_bottom_position >= element_top_position) && (window_top_position <= scrollup_element_bottom_position)) {
  //         if(flag === 1) {
  //           $('.second_element').removeClass('award_fadein').addClass('award_fadeout').hide();
  //           $('.first_element').removeClass('award_fadeout').show().addClass('award_fadein');
  //           flag = 0;
  //         }
  //       }
  //     }
  //   }
  //   else if(window_top_position > bottom_section) {
  //     if(window_top_position < lastAwardScrollTop) {
  //       flag = 1;
  //     }
  //     else {

  //     }
  //     $('.first_element').removeClass('award_fadein').addClass('award_fadeout').hide();
  //     $('.second_element').removeClass('award_fadeout').show().addClass('award_fadein');
  //   }
  //   else if(window_bottom_position < self_section) {
  //     $('.second_element').removeClass('award_fadein').addClass('award_fadeout').hide();
  //     $('.first_element').removeClass('award_fadeout').show().addClass('award_fadein');
  //   }
  //   lastAwardScrollTop = window_top_position;
  // });

  function projectMouselog(event) {
    if ($(window).width() < 768) {
      event.preventDefault();
    }
    else {
      var hovered_element = event.target.id;
      if (event.type == "mouseenter") {
        var hoverImg = $('#' + hovered_element).find('.project_image').attr('hover-img');
        $('#' + hovered_element).find('.project_name').stop().addClass('project_slide');
        $('#' + hovered_element).find('.project_base_image').children('img').stop().removeClass('project_fadein').stop().addClass('project_fadeout');
        setTimeout(() => {
          $('#' + hovered_element).find('.project_name').stop().addClass('project_slide');
          $('#' + hovered_element).find('.project_base_image').stop().hide();
          $('#' + hovered_element).find('.project_description').stop().removeClass('project_fadeout').stop().show().stop().addClass('project_fadein');
          $('#' + hovered_element).find('.project_button').stop().removeClass('project_fadeout').stop().show().stop().addClass('project_fadein');
          $('#' + hovered_element).find('.project_hover_image').stop().show().children('img').stop().removeClass('project_fadeout').stop().addClass('project_fadein');
        }, 300);
      }
      else {
        var baseImg = $('#' + hovered_element).find('.project_image').attr('base-img');
        $('#' + hovered_element).find('.project_hover_image').children('img').stop().removeClass('project_fadein').stop().addClass('project_fadeout');
        $('#' + hovered_element).find('.project_description').children('img').stop().removeClass('project_fadein').stop().addClass('project_fadeout');
        $('#' + hovered_element).find('.project_button').stop().removeClass('project_fadein').stop().addClass('project_fadeout');
        setTimeout(() => {
          $('#' + hovered_element).find('.project_hover_image').stop().hide();
          $('#' + hovered_element).find('.project_description').stop().hide();
          $('#' + hovered_element).find('.project_button').stop().hide();
          $('#' + hovered_element).find('.project_name').stop().removeClass('project_slide');
          $('#' + hovered_element).find('.project_base_image').stop().show().children('img').stop().removeClass('project_fadeout').stop().addClass('project_fadein');
        }, 300);
      }
    }
  }

  function projectActivateHover($project_element) {
    var hoverImg = $project_element.find('.project_image').attr('hover-img');
    $project_element.find('.project_page_navigator').removeClass('project_page_direct');
    setTimeout(() => {
      $project_element.find('.project_name').stop().addClass('project_slide');
      $project_element.find('.project_base_image').children('img').stop().removeClass('project_fadein').stop().addClass('project_fadeout');
      $project_element.find('.project_base_image').stop().hide();
      $project_element.find('.project_description').stop().removeClass('project_fadeout').stop().show().stop().addClass('project_fadein');
      $project_element.find('.project_button').stop().removeClass('project_fadeout').stop().show().stop().addClass('project_fadein');
      $project_element.find('.project_hover_image').stop().show();
      $project_element.find('.project_hover_image').children('img').stop().removeClass('project_fadeout').stop().addClass('project_fadein');
    }, 300);
  }

  function projectDeactivateHover($project_element) {
    var baseImg = $project_element.find('.project_image').attr('base-img');
    $project_element.find('.project_page_navigator').addClass('project_page_direct');
    setTimeout(() => {
      $project_element.find('.project_hover_image').children('img').stop().removeClass('project_fadein').stop().addClass('project_fadeout');
      $project_element.find('.project_hover_image').stop().hide();
      $project_element.find('.project_description').stop().removeClass('project_fadein').stop().addClass('project_fadeout').stop().hide();
      $project_element.find('.project_button').stop().removeClass('project_fadein').stop().addClass('project_fadeout').stop().hide();
      $project_element.find('.project_name').stop().removeClass('project_slide');
      $project_element.find('.project_base_image').stop().show();
      $project_element.find('.project_base_image').children('img').stop().removeClass('project_fadeout').stop().addClass('project_fadein');
    }, 300);
  }

  var lastProjectScrollTop = 0;
  var $project_animation_elements = $('.project_card_outer_container');
  function projectScroll() {
    var window_top_position = $(window).scrollTop();
    var window_bottom_position = (window_top_position + $(window).height());
    $.each($project_animation_elements, function () {
      var $project_element = $(this);
      var project_element_height = $project_element.height();
      var scrolldown_element_top_position = $project_element.offset().top + 340;
      var scrolldown_element_bottom_position = (scrolldown_element_top_position + project_element_height) - 550;
      var scrollup_element_top_position = $project_element.offset().top + 250;
      var scrollup_element_bottom_position = (scrollup_element_top_position + project_element_height) - 550;

      if (window_top_position > lastProjectScrollTop) {
        if ((window_bottom_position >= scrolldown_element_top_position) && (window_top_position <= scrolldown_element_bottom_position)) {
          projectActivateHover($project_element);
        }
        else {
          projectDeactivateHover($project_element);
        }
      }
      else if (window_top_position < lastProjectScrollTop) {
        if ((window_bottom_position >= scrollup_element_top_position) && (window_top_position <= scrollup_element_bottom_position)) {
          projectActivateHover($project_element);
        }
        else {
          projectDeactivateHover($project_element);
        }
      }
    });
    lastProjectScrollTop = window_top_position;
  }

  function projectOnResizeDeactivateHover() {
    $(".project_card_outer_container").find('.project_hover_image').children('img').stop().removeClass('project_fadein').stop().addClass('project_fadeout').stop().removeClass('project_fadeout');
    $(".project_card_outer_container").find('.project_hover_image').stop().hide();
    $(".project_card_outer_container").find('.project_description').stop().removeClass('project_fadein').stop().addClass('project_fadeout').stop().hide().stop().removeClass('project_fadeout');
    $(".project_card_outer_container").find('.project_button').stop().removeClass('project_fadein').stop().addClass('project_fadeout').stop().hide().stop().removeClass('project_fadeout');
    $(".project_card_outer_container").find('.project_name').stop().removeClass('project_slide');
    $(".project_card_outer_container").find('.project_base_image').stop().show();
    $(".project_card_outer_container").find('.project_base_image').children('img').stop().removeClass('project_fadeout').stop().addClass('project_fadein').stop().removeClass('project_fadein');
    $(".project_card_outer_container").find('.project_page_navigator').addClass('project_page_direct');
  }

  function handleProjectLoadAndResize(event) {
    var windowWidth = $(window).width();
    if (event.type === "resize" || event.type === "change") {
      if (windowWidth < 768) {
        $(window).on('scroll', projectScroll);
      }
      else {
        projectOnResizeDeactivateHover();
        $(window).off('scroll', projectScroll);
      }
    }
    else {
      if (windowWidth < 768) {
        $(window).on('scroll', projectScroll);
      }
      else {
        $(window).off('scroll', projectScroll);
      }
    }
  }

  window.addEventListener("load", handleProjectLoadAndResize);
  window.addEventListener("resize", handleProjectLoadAndResize);
  screen.orientation.addEventListener("change", handleProjectLoadAndResize);

  const player = new Plyr('video');
  window.player = player;

  $(document).ready(function () {
    var clientSlickLTROptions = {
      dots: false,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 2000,
      cssEase: 'linear',
      variableWidth: true,
    };

    var clientSlickRTLOptions = {
      dots: false,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 2000,
      rtl: true,
      cssEase: 'linear',
      variableWidth: true,
    };

    $('.client_logo_inner_container.left_direction_slider').slick(clientSlickLTROptions);
    $('.client_logo_inner_container.right_direction_slider').slick(clientSlickRTLOptions);

    function handleClientsResize() {
      $('.client_logo_inner_container.left_direction_slider').slick('unslick');
      $('.client_logo_inner_container.left_direction_slider').slick(clientSlickLTROptions);
      $('.client_logo_inner_container.right_direction_slider').slick('unslick');
      $('.client_logo_inner_container.right_direction_slider').slick(clientSlickRTLOptions);
    }

    window.addEventListener("resize", handleClientsResize);
    screen.orientation.addEventListener("change", handleClientsResize);

    $(window).scroll(function () {
      var window_top_position = $(window).scrollTop();
      var window_bottom_position = (window_top_position + $(window).height());
      var scrollPos = $(window).scrollTop();
      var ltr_element_height = $('.client_logo_inner_container.left_direction_slider').height();
      var ltr_element_top_position = $('.client_logo_inner_container.left_direction_slider').offset().top + 100;
      var ltr_element_bottom_position = (ltr_element_top_position + ltr_element_height - 100);
      var rtl_element_height = $('.client_logo_inner_container.right_direction_slider').height();
      var rtl_element_top_position = $('.client_logo_inner_container.right_direction_slider').offset().top + 100;
      var rtl_element_bottom_position = (rtl_element_top_position + rtl_element_height - 100);
      if ((window_bottom_position >= ltr_element_top_position) && (window_top_position <= ltr_element_bottom_position)) {
        $('.client_logo_inner_container.left_direction_slider').slick('slickPlay');
      }
      else {
        $('.client_logo_inner_container.left_direction_slider').slick('slickPause');
      }
      if ((window_bottom_position >= rtl_element_top_position) && (window_top_position <= rtl_element_bottom_position)) {
        $('.client_logo_inner_container.right_direction_slider').slick('slickPlay');
      }
      else {
        $('.client_logo_inner_container.right_direction_slider').slick('slickPause');
      }
    });
  });

  function resourceMouselog(event) {
    if ($(window).width() < 768) {
      event.preventDefault();
    }
    else {
      var hovered_element = event.target.id;
      if (event.type == "mouseenter") {
        $('#' + hovered_element).find('.resource_top_container').find('.gif_image').stop().removeClass('resource_fadeout');
        $('#' + hovered_element).find('.resource_content_container').stop().removeClass('resource_fadeout');
        $('#' + hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadeout');
        $('#' + hovered_element).stop().addClass("resource_active");
        $(".resource_card_container").not($('#' + hovered_element)).stop().addClass("decrease_width");
        $('#' + hovered_element).stop().addClass("increase_width");
        $('#' + hovered_element).find('.resource_top_container').find('.gif_image').stop().addClass('resource_fadein');
        $('#' + hovered_element).find('.resource_content_container').stop().addClass('resource_fadein');
        setTimeout(() => {
          $('#' + hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadeout');
          $('#' + hovered_element).find('.resource_button').stop().removeClass('resource_button_rounded');
          $('#' + hovered_element).find('.resource_button_text').stop().show().addClass('resource_button_text_fadein');
          $('#' + hovered_element).find('.resource_button_icon').stop().addClass('button_icon_slide');
        }, 100);
      }
      else {
        $('#' + hovered_element).stop().removeClass("resource_active");
        $('#' + hovered_element).find('.resource_top_container').find('.gif_image').stop().removeClass('resource_fadein');
        $('#' + hovered_element).find('.resource_content_container').stop().removeClass('resource_fadein');
        $('#' + hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadein');
        $(".resource_card_container").stop().removeClass("increase_width decrease_width");
        $('#' + hovered_element).find('.resource_top_container').find('.gif_image').stop().addClass('resource_fadeout');
        $('#' + hovered_element).find('.resource_content_container').stop().addClass('resource_fadeout');
        setTimeout(() => {
          $('#' + hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadein');
          $('#' + hovered_element).find('.resource_button_text').stop().addClass('resource_button_text_fadeout').hide();
          $('#' + hovered_element).find('.resource_button_icon').stop().removeClass('button_icon_slide');
          $('#' + hovered_element).find('.resource_button').stop().addClass('resource_button_rounded');
        }, 100);
      }
    }
  }

  function resourceActivateHover($resource_element) {
    $resource_element.find('.resource_top_container').find('.gif_image').stop().removeClass('resource_fadeout');
    $resource_element.find('.resource_content_container').stop().removeClass('resource_fadeout');
    $resource_element.find('.resource_button_text').stop().removeClass('resource_button_text_fadeout');
    $resource_element.stop().addClass("resource_active");
    $(".resource_card_container").not($resource_element).stop().addClass("decrease_width");
    $resource_element.stop().addClass("increase_width");
    $resource_element.find('.resource_top_container').find('.gif_image').stop().addClass('resource_fadein');
    $resource_element.find('.resource_content_container').stop().addClass('resource_fadein');
    setTimeout(() => {
      $resource_element.find('.resource_button_text').stop().removeClass('resource_button_text_fadeout');
      $resource_element.find('.resource_button').stop().removeClass('resource_button_rounded');
      $resource_element.find('.resource_button_text').stop().show().addClass('resource_button_text_fadein');
      $resource_element.find('.resource_button_icon').stop().addClass('button_icon_slide');
    }, 100);
  }

  function resourceDeactivateHover($resource_element) {
    $resource_element.stop().removeClass("resource_active");
    $resource_element.find('.resource_top_container').find('.gif_image').stop().removeClass('resource_fadein');
    $resource_element.find('.resource_content_container').stop().removeClass('resource_fadein');
    $resource_element.find('.resource_button_text').stop().removeClass('resource_button_text_fadein');
    $(".resource_card_container").stop().removeClass("increase_width decrease_width");
    $resource_element.find('.resource_top_container').find('.gif_image').stop().addClass('resource_fadeout');
    $resource_element.find('.resource_content_container').stop().addClass('resource_fadeout');
    setTimeout(() => {
      $resource_element.find('.resource_button_text').stop().removeClass('resource_button_text_fadein');
      $resource_element.find('.resource_button_text').stop().addClass('resource_button_text_fadeout').hide();
      $resource_element.find('.resource_button_icon').stop().removeClass('button_icon_slide');
      $resource_element.find('.resource_button').stop().addClass('resource_button_rounded');
    }, 100);
  }

  var lastResourceScrollTop = 0;
  var $resource_animation_elements = $('.resource_card_container');
  function resourceScroll() {
    var window_top_position = $(window).scrollTop();
    var window_bottom_position = (window_top_position + $(window).height());
    $.each($resource_animation_elements, function () {
      var $resource_element = $(this);
      var resource_element_height = $resource_element.height();
      var scrolldown_element_top_position = $resource_element.offset().top + 350;
      var scrolldown_element_bottom_position = (scrolldown_element_top_position + resource_element_height) - 550;
      var scrollup_element_top_position = $resource_element.offset().top + 300;
      var scrollup_element_bottom_position = (scrollup_element_top_position + resource_element_height) - 550;

      if (window_top_position > lastResourceScrollTop) {
        if ((window_bottom_position >= scrolldown_element_top_position) && (window_top_position <= scrolldown_element_bottom_position)) {
          resourceActivateHover($resource_element);
        }
        else {
          resourceDeactivateHover($resource_element);
        }
      }
      else if (window_top_position < lastResourceScrollTop) {
        if ((window_bottom_position >= scrollup_element_top_position) && (window_top_position <= scrollup_element_bottom_position)) {
          resourceActivateHover($resource_element);
        }
        else {
          resourceDeactivateHover($resource_element);
        }
      }
    });
    lastResourceScrollTop = window_top_position;
  }

  function resourceOnResizeDeactivateHover() {
    $(".resource_card_container").removeClass("resource_active");
    $(".resource_card_container").find('.resource_top_container').find('.gif_image').removeClass('resource_fadein');
    $(".resource_card_container").find('.resource_content_container').removeClass('resource_fadein');
    $(".resource_card_container").removeClass("increase_width decrease_width");
    $(".resource_card_container").find('.resource_top_container').find('.gif_image').addClass('resource_fadeout');
    $(".resource_card_container").find('.resource_content_container').addClass('resource_fadeout');
    $(".resource_card_container").find('.resource_button_text').removeClass('resource_button_text_fadein');
    $(".resource_card_container").find('.resource_button_text').addClass('resource_button_text_fadeout').hide();
    $(".resource_card_container").find('.resource_button_icon').removeClass('button_icon_slide');
    $(".resource_card_container").find('.resource_button').addClass('resource_button_rounded');
  }

  function handleResourceLoadAndResize(event) {
    var windowWidth = $(window).width();
    if (event.type === "resize" || event.type === "change") {
      if (windowWidth < 768) {
        $(window).on('scroll', resourceScroll);
      }
      else {
        resourceOnResizeDeactivateHover();
        $(window).off('scroll', resourceScroll);
      }
    }
    else {
      if (windowWidth < 768) {
        $(window).on('scroll', resourceScroll);
      }
      else {
        $(window).off('scroll', resourceScroll);
      }
    }
  }

  window.addEventListener("load", handleResourceLoadAndResize);
  window.addEventListener("resize", handleResourceLoadAndResize);
  screen.orientation.addEventListener("change", handleResourceLoadAndResize);

  $(".faq_categeory_container").click(function () {
    var clicked_id = $(this).attr('id');
    $(".faq_categeory_container").removeClass('border_op1_white');
    $(".faq_categeory_container").find('.faq_categeory_name').removeClass('color_half_white');
    $(".faq_categeory_container").find('.faq_categeory_name').addClass('color_white_op50');
    $("#" + clicked_id).find('.faq_categeory_name').removeClass('color_white_op50');
    $(".faq_accordion").each(function () {
      $(".faq_accordion").not("#" + clicked_id).stop().removeClass('resource_fadein').addClass('resource_fadeout').hide();
    });
    $(".faq_accordion").parent().find("#" + clicked_id).stop().removeClass('resource_fadeout').show().addClass('resource_fadein');
    $("#" + clicked_id).addClass('border_op1_white');
    $("#" + clicked_id).find('.faq_categeory_name').addClass('color_half_white');
  });

  var clicked_id = "eq1";
  var flag_slider = "";
  var flag_accord = "";
  function hoverOnExpert(elementId, event) {
    $(".browser_icon").stop().removeClass('active');
    $(".browser_icon").parent().parent().parent().find('.expert_image_container').stop().removeClass('browser_active');
    $(".browser_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/browser.svg');
    $(".robot_icon").stop().removeClass('active');
    $(".robot_icon").parent().parent().parent().find('.expert_image_container').stop().removeClass('robot_active');
    $(".robot_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/robot.svg');
    $(".box_icon").stop().removeClass('active');
    $(".box_icon").parent().parent().parent().find('.expert_image_container').stop().removeClass('box_active');
    $(".box_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/box.svg');
    if ($("#" + elementId).attr('class').split(' ')[1] === 'browser_icon') {
      $("#" + elementId).stop().addClass('active');
      $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('browser_active');
      $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/browser-hover.svg');
    }
    else if ($("#" + elementId).attr('class').split(' ')[1] === 'robot_icon') {
      $("#" + elementId).stop().addClass('active');
      $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('robot_active');
      $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/robot-hover.svg');
    }
    else {
      $("#" + elementId).stop().addClass('active');
      $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('box_active');
      $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/box-hover.svg');
    }
    flag_accord = "flagAccord";
    if (flag_accord === "flagAccord" && flag_slider !== "flagSlider") {
      if ($("#" + elementId).hasClass("hovered")) {
      }
      else {
        expertAccordion(elementId, event);
      }
    }
    flag_accord = "";
  }

  function expertAccordion(clickedId, event) {
    clicked_id = event.currentTarget.id ? event.currentTarget.id : clicked_id;
    windowWidth = $(window).width();
    $(".expert_icon_container").stop().removeClass("hovered");
    $(".expert_accordion_container").each(function () {
      $(".expert_accordion_container")
        .not("#" + clickedId)
        .find(".expert_accordion_content").stop()
        .slideUp();
      $(".expert_accordion_container")
        .not("#" + clickedId)
        .find(".expert_icon img").stop()
        .removeClass("collapsed");
      $(".expert_accordion_container")
        .not("#" + clickedId)
        .find(".expert_icon img").stop()
        .attr('src', '<?php echo $baseUrl; ?>assets/images/down.svg')
      $(".expert_accordion_container")
        .not("#" + clickedId)
        .find(".expert_accordion_right_container").stop()
        .removeClass("expert_link");
    });
    if ($("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").hasClass("collapsed")) {
      // if($(event.target).is("a.expert_link_container") || $(event.target).is("div.expert_icon") || $(event.target).is("img.collapsed") || clickedId === "eq1") {

      // }
      if (clickedId === "eq1" || clickedId === "eqm1") {

      }
      else {
        $("#" + clickedId + ".expert_accordion_container").find(".expert_accordion_content").stop().slideUp();
        $("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").stop().removeClass("collapsed");
        $("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/down.svg');
        $("#" + clickedId + ".expert_accordion_container").find(".expert_accordion_right_container").stop().removeClass("expert_link");
        if (windowWidth > 767) {
          $("#eq1.expert_accordion_container").find(".expert_accordion_content").stop().slideDown();
          $("#eq1.expert_accordion_container").find(".expert_icon img").stop().addClass("collapsed");
          $("#eq1.expert_accordion_container").find(".expert_accordion_right_container").stop().addClass("expert_link");
          $("#eq1.expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/up.svg');
        }
        else {
          $("#eqm1.expert_accordion_container").find(".expert_accordion_content").stop().slideDown();
          $("#eqm1.expert_accordion_container").find(".expert_icon img").stop().addClass("collapsed");
          $("#eqm1.expert_accordion_container").find(".expert_accordion_right_container").stop().addClass("expert_link");
          $("#eqm1.expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/up.svg');
        }
        flag_slider = "flagSlider";
        if (flag_slider === "flagSlider" && flag_accord !== "flagAccord") {
          //hoverOutExpert(clickedId, event, "flag");
          if (windowWidth > 767) {
            hoverOnExpert("eq1", event);
          }
          else {
            hoverOnExpert("eqm1", event);
          }
        }
        flag_slider = "";
      }
    }
    else {
      $("#" + clickedId + ".expert_accordion_container").find(".expert_accordion_content").stop().slideDown();
      $("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").stop().addClass("collapsed");
      $("#" + clickedId + ".expert_accordion_container").find(".expert_accordion_right_container").stop().addClass("expert_link");
      $("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/up.svg');
      flag_slider = "flagSlider";
      if (flag_slider === "flagSlider" && flag_accord !== "flagAccord") {
        hoverOnExpert(clickedId, event);
      }
      flag_slider = "";
      $("#" + clickedId + ".expert_icon_container").stop().addClass("hovered");
    }
  }

  $(window).on('resize orientationchange', function () {
    windowWidth = $(window).width();
    $(".browser_icon").stop().removeClass('active');
    $(".browser_icon").parent().parent().parent().find('.expert_image_container').stop().removeClass('browser_active');
    $(".browser_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/browser.svg');
    $(".robot_icon").stop().removeClass('active');
    $(".robot_icon").parent().parent().parent().find('.expert_image_container').stop().removeClass('robot_active');
    $(".robot_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/robot.svg');
    $(".box_icon").stop().removeClass('active');
    $(".box_icon").parent().parent().parent().find('.expert_image_container').stop().removeClass('box_active');
    $(".box_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/box.svg');
    $(".box_icon").stop().addClass('active');
    $(".box_icon").parent().parent().parent().find('.expert_image_container').stop().addClass('box_active');
    $(".box_icon").children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/browser-hover.svg');
    if (windowWidth > 767) {
      $(".expert_accordion_container").not("#eq1").find(".expert_accordion_content").slideUp();
      $(".expert_accordion_container").not("#eq1").find(".expert_icon img").stop().removeClass("collapsed");
      $(".expert_accordion_container").not("#eq1").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/down.svg');
      $(".expert_accordion_container").not("#eq1").find(".expert_accordion_right_container").stop().removeClass("expert_link");
      $("#eq1.expert_accordion_container").find(".expert_accordion_content").slideDown();
      $("#eq1.expert_accordion_container").find(".expert_icon img").stop().addClass("collapsed");
      $("#eq1.expert_accordion_container").find(".expert_accordion_right_container").stop().addClass("expert_link");
      $("#eq1.expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/up.svg');
    }
    else {
      $(".expert_accordion_container").not("#eqm1").find(".expert_accordion_content").slideUp();
      $(".expert_accordion_container").not("#eqm1").find(".expert_icon img").stop().removeClass("collapsed");
      $(".expert_accordion_container").not("#eqm1").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/down.svg');
      $(".expert_accordion_container").not("#eqm1").find(".expert_accordion_right_container").stop().removeClass("expert_link");
      $("#eqm1.expert_accordion_container").find(".expert_accordion_content").slideDown();
      $("#eqm1.expert_accordion_container").find(".expert_icon img").stop().addClass("collapsed");
      $("#eqm1.expert_accordion_container").find(".expert_accordion_right_container").stop().addClass("expert_link");
      $("#eqm1.expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/up.svg');
    }
  });

  $(".faq_accordion_container").click(function () {
    var clicked_id = $(this).attr("id");
    $(".faq_accordion_container").each(function () {
      $(".faq_accordion_container")
        .not("#" + clicked_id)
        .find(".faq_accordion_content")
        .slideUp();
      $(".faq_accordion_container")
        .not("#" + clicked_id)
        .find(".faq_accordion_header")
        .find(".faq_icon img")
        .removeClass("collapsed");
      $(".faq_accordion_container")
        .not("#" + clicked_id)
        .find(".faq_accordion_header")
        .find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/plus.svg');
      $(".faq_accordion_container")
        .not("#" + clicked_id)
        .find(".faq_accordion_header")
        .find(".faq_question").removeClass('color_white_op50').addClass('color_white');
    });
    $(this).find(".faq_accordion_content").slideToggle();
    if ($(this).find(".faq_accordion_header").find(".faq_icon img").hasClass("collapsed")) {
      $(this).find(".faq_accordion_header").find(".faq_icon img").removeClass("collapsed");
      $(this).find(".faq_accordion_header").find(".faq_question").removeClass('color_white_op50').addClass('color_white');
      $(this).find(".faq_accordion_header").find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/plus.svg');
    } else {
      $(this).find(".faq_accordion_header").find(".faq_icon img").addClass("collapsed");
      $(this).find(".faq_accordion_header").find(".faq_question").removeClass('color_white').addClass('color_white_op50');
      $(this).find(".faq_accordion_header").find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/minus.svg');
    }
  });
</script>

</html>