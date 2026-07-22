<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Redefine Your Digital Identity with Top UI UX Services</title>
    <meta name="description" content="With a focus on innovation, our Award-Winning UI UX Services approach complex problems with systems thinking and human-centered design.">
    <?php
      include '../header.php';
    ?>
    <meta name="author" content="UniKwan Innovations" />
    <meta property='og:title' content='Redefine Your Digital Identity with Top UI UX Services' />
    <meta property='og:description' content='With a focus on innovation, our Award-Winning UI UX Services approach complex problems with systems thinking and human-centered design.' />
    <meta property='og:url' content='<?php echo $baseUrl; ?>expertise/' />
    <!-- <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png' /> -->
    <!-- <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png" /> -->
    <meta property="og:site_name" content="UniKwan Innovations">
    <meta property="og:type" content="Website">
  </head>
  <body>
    <!-- Begin Hero Section -->
    <section class="expertise_hero_section">
      <!-- Begin Navbar Section -->
      <?php include '../navbar.php'; ?>
      <!-- End Navbar Section -->

      <!-- Begin Hero Content Section -->
      <section class="expertise_hero_content_section pillar_hero_content_section mt">
        <div class="label_blue ml_mr">
          <p class="ff_satoshi content_20 fw_700 color_blue">Key Word</p>
        </div>
        <h1 class="heading_wls_60 fw_700 color_black heading_mt pl_pr expertise_hero_heading pillar_hero_heading">
            Transform Your Digital Experience with Expert UX/UI Design Services
        </h1>
        <p class="ff_satoshi content_20 fw_400 color_lighter_grey pl_pr expertise_hero_content">
            At UniKwan, we specialize in creating intuitive and engaging user experiences that drive results. Our expertise in UX/UI design ensures that your digital products not only meet user needs but also enhance brand loyalty and satisfaction.
        </p>
        <div class="pillar_cta_flex pl_pr pillar_cta_flex_mt">
            <div class="schedule_call">
                <a class="ff_satoshi fw_400 content_wls_16 button button_blue" href="">Schedule a call</a>
            </div>
            <div class="pillar_cta_flex button take_ux_assessment_cta">
                <a class="ff_satoshi fw_400 content_wls_16" href="#ux-assessment">Take UX Assessment</a>
                <img src="<?php echo $baseUrl; ?>assets/images/right-sided-arrow.svg" alt="">
            </div>
        </div>
        <div class="expertise_bg_container">
          <img src="<?php echo $baseUrl; ?>assets/images/expertise-bg.png" alt="expertise bg" width="794px" height="870px" />
        </div>
      </section>
      <!-- End Hero Content Section -->
    </section>
    <!-- End Hero Section -->

    <!-- Begin Business impact Section -->
        <section class="business_impact_section">
            <h1 class="heading_48 fw_700 color_black heading_mt pl_pr expertise_hero_heading">
                UX/UI for  Business Impact
            </h1>
            <p class="ff_satoshi content_20 fw_400 color_dark_black pl_pr business_impact_description">
                At UniKwan, we specialize in creating intuitive and engaging user experiences that drive results. Our expertise in UX/UI design ensures that your digital products not only meet user needs but also enhance brand loyalty and satisfaction.
            </p>
            <div class="business_impact_container pl_pr">
              <div class="business_content_container">
                <img src="<?php echo $baseUrl; ?>assets/images/user-engagement.png" alt="goal" width="67px" height="67px" />
                <h3 class="sub_heading_24 fw_700 color_black goal_name product_name">Enhanced <br>
                user engagement</h3>
              </div>
              <div class="business_content_container">
                <img src="<?php echo $baseUrl; ?>assets/images/user-engagement.png" alt="goal" width="67px" height="67px" />
                <h3 class="sub_heading_24 fw_700 color_black goal_name product_name">Increased
                customer retention</h3>
              </div>
              <div class="business_content_container">
                <img src="<?php echo $baseUrl; ?>assets/images/user-engagement.png" alt="goal" width="67px" height="67px" />
                <h3 class="sub_heading_24 fw_700 color_black goal_name product_name">Improved <br>
                brand perception</h3>
              </div>
              <div class="business_content_container">
                <img src="<?php echo $baseUrl; ?>assets/images/user-engagement.png" alt="goal" width="67px" height="67px" />
                <h3 class="sub_heading_24 fw_700 color_black goal_name product_name">Lorem ipsum <br>
                dolor sit amet</h3>
              </div>
            </div>
        </section>
    <!-- End Business impact Section -->

    <!-- Begin Expertise Section -->
    <section class="expert_section">
      <div class="expert_heading_container heading_mt pl_pr">
        <div>
          <div class="label_purple">
            <p class="ff_satoshi content_20 fw_700 color_white">Key Word</p>
          </div>
          <h2 class="sub_heading_48 fw_700 color_white expertise_heading margin_top_32">Our Services</h2>
          <p class="ff_satoshi content_20 fw_400 color_white services_description">At UniKwan, we specialize in creating intuitive and engaging user experiences that drive results. Our expertise in UX/UI design ensures that your digital products not only meet user needs but also enhance brand loyalty and satisfaction.</p>
        </div>
        <!-- <div class="expert_button_container">
          <a href="<?php echo $baseUrl; ?>expertise/" class="ff_satoshi content_wls_16 fw_500 button button_white">See All</a>
        </div> -->
        <div class="tablet_desktop">
        <img src="<?php echo $baseUrl; ?>assets/images/our-services-bg-arrow.png" alt="expert arrow" width="334px" height="100%" />
        </div>
      </div>
      <div class="expert_content_container">
        <div class="expert_slider_container_mobile mobile"></div>
        <div class="expert_left_container tablet_desktop">
          <div class="expert_image_container service_one_active">
            <img src="<?php echo $baseUrl; ?>assets/images/expert-arrow.png" alt="expert arrow" width="334px" height="100%" />
          </div>
          <div class="expert_slider_container">
            <div class="expert_icon_flex">
              <div id="eq1" class="expert_icon_container services_icon_1 active">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-hover-1.svg" data-id="eimg1" onmouseenter='hoverOnExpert("eq1", event)' alt="box" width="24px" height="24px" />
              </div>
              <div id="eq2" class="expert_icon_container services_icon_2">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-2.svg" data-id="eimg2" onmouseenter='hoverOnExpert("eq2", event)' alt="browser" width="24px" height="24px" />
              </div>
              <div id="eq3" class="expert_icon_container services_icon_3">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-3.svg" data-id="eimg3" onmouseenter='hoverOnExpert("eq3", event,)' alt="robot" width="24px" height="24px" />
              </div>
              <div id="eq4" class="expert_icon_container services_icon_4">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-4.svg" data-id="eimg4" onmouseenter='hoverOnExpert("eq4", event,)' alt="robot" width="24px" height="24px" />
              </div>
            </div>
            <img src="<?php echo $baseUrl; ?>assets/images/expert-half-circle.png" alt="expert half circle" class="expert_half_circle" width="130px" height="329px" />
          </div>
        </div>
        <div class="expert_right_container pr">
          <div class="expert_accordion">
            <div class="expert_accordion_flex">
              <div id="eqm1" class="expert_icon_container services_icon_1 active mobile">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-hover-1.svg" data-id="eimg1" onmouseenter='hoverOnExpert("eqm1", event)' alt="box" width="24px" height="24px" />
              </div>
              <div id="eq1" class="expert_accordion_container hr_grey tablet_desktop" onclick='expertAccordion("eq1", event)'>
                <div class="expert_accordion_left_container">
                  <div class="expert_accordion_header">
                    <h3 class="sub_heading_24 fw_500 color_white expert_question">
                      User Research and Analysis
                    </h3>
                  </div>
                  <div class="expert_accordion_content">
                    <div class="feature_list_flex">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white"><span class="fw_700">User Interviews:</span> Gathering insights directly from users.</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white"><span class="fw_700">Usability Testing:</span> Identifying pain points through real-world testing.</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white"><span class="fw_700"> Competitive Analysis:</span> Benchmarking against industry standards.</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white"><span class="fw_700">User Persona Development:</span> Creating detailed profiles for targeted design.</p>
                    </div>
                  </div>
                </div>
                <div class="expert_accordion_right_container expert_link">
                  <!-- <a href="" class="expert_link_container" target="_blank"> -->
                  <div class="expert_link_container">
                    <div class="expert_icon">
                      <img src="<?php echo $baseUrl; ?>assets/images/up.svg" alt="expand link arrow" class="collapsed" width="19px" height="16px" />
                    </div>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
              <div id="eqm1" class="expert_accordion_container hr_grey mobile" onclick='expertAccordion("eqm1", event)'>
                <div class="expert_accordion_left_container">
                  <div class="expert_accordion_header">
                    <h3 class="sub_heading_24 fw_500 color_white expert_question">
                      User Experience Design
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
                      <img src="<?php echo $baseUrl; ?>assets/images/up.svg" alt="expand link arrow" class="collapsed" width="19px" height="16px" />
                    </div>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
            <div class="expert_accordion_flex">
              <div id="eqm2" class="expert_icon_container services_icon_2 mobile">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-2.svg" data-id="eimg2" onmouseenter='hoverOnExpert("eqm2", event)' alt="browser" width="24px" height="24px" />
              </div>
              <div id="eq2" class="expert_accordion_container hr_grey tablet_desktop" onclick='expertAccordion("eq2", event)'>
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
                      <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px" height="16px" />
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
                      <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px" height="16px" />
                    </div>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
            <div class="expert_accordion_flex">
              <div id="eqm3" class="expert_icon_container services_icon_3 mobile">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-3.svg" data-id="eimg3" onmouseenter='hoverOnExpert("eqm3", event,)' alt="robot" width="24px" height="24px" />
              </div>
              <div id="eq3" class="expert_accordion_container hr_grey tablet_desktop" onclick='expertAccordion("eq3", event)'>
                <div class="expert_accordion_left_container">
                  <div class="expert_accordion_header">
                    <h3 class="sub_heading_24 fw_500 color_white expert_question">
                      User Experience Design
                    </h3>
                  </div>
                  <div class="expert_accordion_content">
                    <div class="feature_list_flex">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">System & User Personas</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">Conversation design Consulting</p>
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
                      <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px" height="16px" />
                    </div>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
              <div id="eqm3" class="expert_accordion_container hr_grey mobile" onclick='expertAccordion("eqm3", event)'>
                <div class="expert_accordion_left_container">
                  <div class="expert_accordion_header">
                    <h3 class="sub_heading_24 fw_500 color_white expert_question">
                      Conversation AI Design
                    </h3>
                  </div>
                  <div class="expert_accordion_content">
                    <div class="feature_list_flex">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">System & User Personas</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">Conversation design Consulting</p>
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
                      <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px" height="16px" />
                    </div>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
            </div>
            <div class="expert_accordion_flex">
              <div id="eqm4" class="expert_icon_container services_icon_4 mobile">
                <img src="<?php echo $baseUrl; ?>assets/images/service-icon-4.svg" data-id="eimg4" onmouseenter='hoverOnExpert("eqm4", event,)' alt="robot" width="24px" height="24px" />
              </div>
              <div id="eq4" class="expert_accordion_container hr_grey tablet_desktop" onclick='expertAccordion("eq4", event)'>
                <div class="expert_accordion_left_container">
                  <div class="expert_accordion_header">
                    <h3 class="sub_heading_24 fw_500 color_white expert_question">
                      User Experience Design
                    </h3>
                  </div>
                  <div class="expert_accordion_content">
                    <div class="feature_list_flex">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">System & User Personas</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">Conversation design Consulting</p>
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
                      <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px" height="16px" />
                    </div>
                  </div>
                  <!-- </a> -->
                </div>
              </div>
              <div id="eqm4" class="expert_accordion_container hr_grey mobile" onclick='expertAccordion("eqm4", event)'>
                <div class="expert_accordion_left_container">
                  <div class="expert_accordion_header">
                    <h3 class="sub_heading_24 fw_500 color_white expert_question">
                      Conversation AI Design
                    </h3>
                  </div>
                  <div class="expert_accordion_content">
                    <div class="feature_list_flex">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">System & User Personas</p>
                    </div>
                    <div class="feature_list_flex mt">
                      <img src="<?php echo $baseUrl; ?>assets/images/disc.svg" alt="disc icon" width="6px" height="6px" />
                      <p class="ff_satoshi content_20 fw_400 color_half_white">Conversation design Consulting</p>
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
                      <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="expand link arrow" width="19px" height="16px" />
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

    <!-- Begin Recognition Section -->
  <section class="recognition_section pl_pr">
    <div class="recognition_container">
      <div class="recognition_left_container">
        <h2 class="sub_heading_48 fw_700 color_white recognition_title">Our Capabilities </h2>
        <p class="ff_satoshi content_20 fw_400 color_white recognition_content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="recognition_right_container" aria-label="vertical awards slider">
        <div class="recognition_award_container">
          <div class="recognition_award_inner_container mt">
            <h3 class="sub_heading_34 fw_700 color_white recognition_award_title">
              Design Tools and Technologies
            </h3>
            <p class="ff_satoshi content_20 fw_400 color_white recognition_award_content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            </p>
            <div class="design_tools_flex">
              <img src="<?php echo $baseUrl; ?>assets/images/xd.svg" alt="xd">
              <img src="<?php echo $baseUrl; ?>assets/images/adobe-tool.svg" alt="adobe">
              <img src="<?php echo $baseUrl; ?>assets/images/figma.svg" alt="figma">
              <img src="<?php echo $baseUrl; ?>assets/images/diamond-shape.svg" alt="diamond">
              <img src="<?php echo $baseUrl; ?>assets/images/linkedin-logo.svg" alt="linkedin">
            </div>
          </div>
          <div class="recognition_award_inner_container mt">
            <h3 class="sub_heading_34 fw_700 color_white recognition_award_title">
              Frameworks and Methodologies
            </h3>
            <p class="ff_satoshi content_20 fw_400 color_white recognition_award_content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
          </div>
          <div class="recognition_award_inner_container mt">
            <h3 class="sub_heading_34 fw_700 color_white recognition_award_title">
              Integration Capabilities
            </h3>
            <p class="ff_satoshi content_20 fw_400 color_white recognition_award_content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
          </div>
          <div class="recognition_award_inner_container mt">
            <h3 class="sub_heading_34 fw_700 color_white recognition_award_title">
              Platform Expertise
            </h3>
            <p class="ff_satoshi content_20 fw_400 color_white recognition_award_content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Recognition Section -->

  <!-- Begin Results Section -->
  <section class="results_section">
    <div class="results_container">
      <div class="results_left_container services_left_container pl_pr">
        <h2 class="sub_heading_48 fw_700 color_white results_title">
          Services and Benefits
        </h2>
        <p class="ff_satoshi content_20 fw_400 color_white results_content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        </p>
        <div class="counter_animation_flex">
          <div class="results_stat_container">
            <div class="results_stat_inner_container">
              <h3 class="sub_heading_60 fw_700 results_stat_number"><span class="projects">0</span>+</h3>
              <p class="ff_satoshi content_20 fw_400 color_white results_stat_title">Improved User <br> Engagement</p>
            </div>
            <div class="results_stat_inner_container">
              <h3 class="sub_heading_60 fw_700 results_stat_number"><span class="client">0</span>+</h3>
              <p class="ff_satoshi content_20 fw_400 color_white results_stat_title">Higher Conversion <br> Rates</p>
            </div>
            <div class="results_stat_inner_container">
              <h3 class="sub_heading_60 fw_700 results_stat_number"><span class="countries">0</span>+</h3>
              <p class="ff_satoshi content_20 fw_400 color_white results_stat_title">Reduced <br> Development Costs</p>
            </div>
          </div>
          <div class="results_stat_container">
            <div class="results_stat_inner_container">
              <h3 class="sub_heading_60 fw_700 results_stat_number"><span class="market">0</span>+</h3>
              <p class="ff_satoshi content_20 fw_400 color_white results_stat_title">Faster Time to <br> Market</p>
            </div>
            <div class="results_stat_inner_container">
              <h3 class="sub_heading_60 fw_700 results_stat_number"><span class="brand">0</span>+</h3>
              <p class="ff_satoshi content_20 fw_400 color_white results_stat_title">Enhanced Brand <br> Perception</p>
            </div>
            <div class="results_stat_inner_container">
              <h3 class="sub_heading_60 fw_700 results_stat_number"><span class="user">0</span>+</h3>
              <p class="ff_satoshi content_20 fw_400 color_white results_stat_title">Better User <br> Satisfaction</p>
            </div>
          </div>
        </div>
      </div>
      <div class="results_right_container services_benifits_arrow tablet_desktop">
        <img src="<?php echo $baseUrl; ?>assets/images/results.png" alt="results" width="492px" height="553px" />
      </div>
    </div>
  </section>
  <!-- End Results Section -->

    <!-- Begin Goals Section -->
    <section class="work_section">
      <div class="goal_description_flex pl_pr">
        <div class="we_work_content">
          <div class="label_purple">
            <p class="ff_satoshi content_20 fw_700 color_white">Key Word</p>
          </div>
          <h2 class="sub_heading_48 heading_mt fw_700 color_white goal_heading">
            How We Work
          </h2>
        </div>
        <p class="ff_satoshi content_20 fw_400 color_white goal_content services_description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        </p>
      </div>
      <div class="goal_container pl_pr">
        <div class="goal_content_container">
          <img src="<?php echo $baseUrl; ?>assets/images/how-we-work.svg" alt="goal" width="67px" height="67px" />
          <h3 class="sub_heading_24 fw_700 color_white goal_name">Process Breakdown</h3>
          <p class="ff_satoshi content_20 fw_400 color_white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
          </p>
        </div>
        <div class="goal_content_container">
          <img src="<?php echo $baseUrl; ?>assets/images/how-we-work.svg" alt="goal" width="67px" height="67px" />
          <h3 class="sub_heading_24 fw_700 color_white goal_name">Methodology Overview</h3>
          <p class="ff_satoshi content_20 fw_400 color_white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
          </p>
        </div>
        <div class="goal_content_container">
          <img src="<?php echo $baseUrl; ?>assets/images/how-we-work.svg" alt="goal" width="67px" height="67px" />
          <h3 class="sub_heading_24 fw_700 color_white goal_name">Timeline Expectations</h3>
          <p class="ff_satoshi content_20 fw_400 color_white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
          </p>
        </div>
        <div class="goal_content_container">
          <img src="<?php echo $baseUrl; ?>assets/images/how-we-work.svg" alt="goal" width="67px" height="67px" />
          <h3 class="sub_heading_24 fw_700 color_white goal_name">Collaboration Approach</h3>
          <p class="ff_satoshi content_20 fw_400 color_white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
          </p>
        </div>
      </div>
    </section>
    <!-- End Goals Section -->

    <!-- Begin UX Assessment tool section -->
     <section id="ux-assessment" class="assessment_section">
        <div class="pl_pr">
          <h2 class="sub_heading_48 fw_700 feature_gradient_heading results_title">
            UX Assessment Tool
          </h2>
          <p class="ff_satoshi content_20 fw_400 color_light_black results_content">
            Evaluate your UX needs with our interactive Assessment and get personalized recommendations
          </p>
        </div>
        <div class="assessment_form margin_top_20 pl_pr">
          <div class="margin_top_20">
            <input type="text" name="name" id="name" class="input-field assessment-input-field" placeholder="Type your Company Name" onkeypress="return isTextKey(event)">
            <span class="form_error fw_400 ff_satoshi" id="nameErr"></span>
          </div>
          <div class="margin_top_20">
            <input type="text" name="name" id="name" class="input-field assessment-input-field" placeholder="Type your Website URL" onkeypress="return isTextKey(event)">
            <span class="form_error fw_400 ff_satoshi" id="nameErr"></span>
          </div>
          <div class="margin_top_20">
            <input type="text" name="name" id="name" class="input-field assessment-input-field" placeholder="Type your Input" onkeypress="return isTextKey(event)">
            <span class="form_error fw_400 ff_satoshi" id="nameErr"></span>
          </div>
          <div class="margin_top_20">
            <input type="text" name="name" id="name" class="input-field assessment-input-field" placeholder="Type your Input" onkeypress="return isTextKey(event)">
            <span class="form_error fw_400 ff_satoshi" id="nameErr"></span>
          </div>
        </div>
        <div class="start_assessment pl_pr">
          <a class="ff_satoshi fw_400 content_wls_16 button button_blue" href="">Start Assessment</a>
        </div>
     </section>
    <!-- End UX Assessment tool section -->

    <!-- Begin Resources Section -->
    <section class="resource_section pl_pr">
      <div class="label_purple">
        <p class="ff_satoshi content_20 fw_700 color_white">Resources</p>
      </div>
      <h2 class="sub_heading_48 fw_700 color_white heading_mt resource_heading">
        Your Toolbox for Design Excellence
      </h2>
      <div class="resource_outer_flex_container">
        <div class="resource_flex_container">
          <div id="articles" class="resource_card_container border_op2_white" onmouseenter="resourceMouselog(event)" onmouseleave="resourceMouselog(event)">
            <div class="resource_top_container">
              <h3 class="sub_heading_34 fw_500 color_white resource_sub_heading">Articles</h3>
              <img src="<?php echo $baseUrl; ?>assets/images/blog-gif.gif" class="gif_image" alt="Articles" width="84px" height="84px" />
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
                  <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-primary.svg" class="resource_button_icon" alt="button arrow" width="13px" height="11px" />
                </div>
              </a>
            </div>
          </div>
          <div id="success_stories" class="resource_card_container border_op2_white" onmouseenter="resourceMouselog(event)" onmouseleave="resourceMouselog(event)">
            <div class="resource_top_container">
              <h3 class="sub_heading_34 fw_500 color_white resource_sub_heading">Success Stories</h3>
              <img src="<?php echo $baseUrl; ?>assets/images/success-gif.gif" class="gif_image" alt="success stories" width="84px" height="84px" />
            </div>
            <div class="resource_content_container">
              <hr class="hr_purple resource_hr" />
              <p class="resource_description ff_satoshi content_20 fw_400 color_lighter_grey">
                Explore compelling success stories from our clients. Discover how we've helped 
                businesses like yours achieve their goals through innovative design solutions.
              </p>
            </div>
            <div class="button_container">
              <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Coming soon</p>
              <!-- <a href="<?php echo $baseUrl; ?>success-stories/" class="resource_button resource_button_rounded">
                <div class="button_content_container">
                  <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Learn more</p>
                  <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-primary.svg" class="resource_button_icon" alt="button arrow" width="13px" height="11px" />
                </div>
              </a> -->
            </div>
          </div>
          <div id="templates_ebboks" class="resource_card_container border_op2_white" onmouseenter="resourceMouselog(event)" onmouseleave="resourceMouselog(event)">
            <div class="resource_top_container">
              <h3 class="sub_heading_34 fw_500 color_white resource_sub_heading">Free templates & eBooks</h3>
              <img src="<?php echo $baseUrl; ?>assets/images/ebook-gif.gif" class="gif_image" alt="ebook" width="84px" height="84px" />
            </div>
            <div class="resource_content_container">
              <hr class="hr_purple resource_hr" />
              <p class="resource_description ff_satoshi content_20 fw_400 color_lighter_grey">
                Elevate your design process with our curated collection of free templates 
                and eBooks, crafted to inspire and guide businesses across all industries.
              </p>
            </div>
            <div class="button_container">
              <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Coming soon</p>
              <!-- <a href="<?php echo $baseUrl; ?>free-templates-and-ebooks/" class="resource_button resource_button_rounded">
                <div class="button_content_container">
                  <p class="ff_satoshi content_20 fw_400 color_grey resource_button_text">Learn more</p>
                  <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-primary.svg" class="resource_button_icon" alt="button arrow" width="13px" height="11px" />
                </div>
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="resource_bg_container">
        <img src="<?php echo $baseUrl; ?>assets/images/resource-bg.png" alt="resources bg image" width="356px" height="362px" />
      </div>
    </section>
    <!-- End Resources Section -->

    <!-- Begin FAQ Section -->
    <section class="faq_section pl_pr">
      <div class="label_purple">
        <p class="ff_satoshi content_20 fw_700 color_white">FAQ</p>
      </div>
      <h2 class="sub_heading_48 fw_700 color_white heading_mt faq_heading">Get the Answer for Your Questions here</h2>
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
      <div class="faq_accordion_block margin_top_64">
        <div id="products" class="faq_accordion">
          <div id="faq1" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What products or services do you offer?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We offer strategic product design, advanced UI UX design services, and specialized conversation AI design solutions to enhance/support your business growth and user engagement.
              </p>
            </div>
          </div>
          <div id="faq2" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What are the benefits of using your product/service?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We bring an outside-in perspective to amplify business outcomes and enhance your brand's reputation through innovative designs. Additionally, we drive systemic innovation by integrating new-age design practices, deep tech and AI. This enables you to harness the full potential of emerging and future technologies.
              </p>
            </div>
          </div>
          <div id="faq3" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Who is your target audience?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We specialize in a wide range of industries including Life Sciences, Energy, Conversation AI, Artificial Intelligence, SaaS, Enterprise UX, Consumer UX, Fashion & Retail, Fintech, Ecommerce, Healthcare, and Edutech.
              </p>
            </div>
          </div>
          <div id="faq4" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Do you offer a free trial or demo?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We do not offer a free trial or demo, but we provide free consultations to discuss your project needs. You can also schedule a 30-minute session on Calendly to explore how we can assist you.
              </p>
            </div>
          </div>
          <div id="faq5" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What marketing services do you offer specifically related to UX design?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                While our primary focus is on the UI/UX design process itself, we understand how UX principles can influence marketing success. We provide insights and strategies on how to leverage effective UI/UX design to enhance your marketing efforts and improve user engagement. Feel free to reach out if you have any more questions or need further information!
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
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                UX design enhances user satisfaction by improving usability, accessibility, and efficiency in interactions with your product. UniKwan's strategic UX design leads to increased customer loyalty, higher conversion rates, and a competitive edge in the market.
              </p>
            </div>
          </div>
          <div id="faq2" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What is your UX design process?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                Our process at UniKwan includes extensive user research, iterative design, prototyping, and user testing to ensure innovative and practical solutions. We focus on delivering designs that meet your users' real needs, ensuring every interaction is optimized for engagement and usability.
              </p>
            </div>
          </div>
          <div id="faq3" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Do you offer usability testing?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                Yes, UniKwan provides comprehensive usability testing to validate designs and ensure they meet user expectations. This critical step helps refine user interfaces for optimal performance and satisfaction.
              </p>
            </div>
          </div>
          <div id="faq4" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                How do you ensure an accessible user experience?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We prioritize accessibility throughout our design process, ensuring that our designs meet WCAG guidelines. This approach ensures all users can access and benefit from your product, regardless of their abilities.
              </p>
            </div>
          </div>
          <div id="faq5" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Can you integrate UX design with my existing development process?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                Absolutely. We specialize in seamlessly integrating UI UX design with existing development processes to enhance product coherence and increase efficiency throughout the project lifecycle.
              </p>
            </div>
          </div>
          <div id="faq6" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Can your UI UX design services help improve product marketing?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                Yes, our UI UX design services can significantly enhance product marketing. By focusing on the user experience, we help create more engaging and user-friendly products, which can lead to increased user satisfaction and better marketing outcomes.
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
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We utilize a robust blend of technologies, including HTML, CSS, JavaScript, jQuery, Bootstrap, MUI, and Tailwind, alongside frameworks like Next.js, React.js, React Native, Angular, and WordPress. We also incorporate GSAP for animations, ensuring our solutions are cutting-edge and versatile as a leading UI UX design agency in Bangalore.
              </p>
            </div>
          </div>
          <div id="faq2" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What is your development process like?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                At UniKwan, our development process begins with a design hand-off to developers, followed by a thorough review of the design and selection of a suitable tech stack. We set up the project infrastructure, proceeded through iterative development sprints, provided regular updates via demo links, and conducted extensive cross-device and browser testing, ensuring the highest quality outcomes as a premier UI UX design agency.
              </p>
            </div>
          </div>
          <div id="faq3" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                How do you ensure the security of my project?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We prioritize project security by implementing the latest security protocols and compliance standards. Our meticulous approach ensures that all projects handled by our UI/UX design agency in Bangalore are secure from inception to deployment.
              </p>
            </div>
          </div>
          <div id="faq4" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Do you offer custom development solutions?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                We specialize in front-end development, focusing on creating intuitive and engaging user interfaces. Our team excels in bringing designs to life, ensuring a seamless and attractive user experience for your customers.
              </p>
            </div>
          </div>
          <div id="faq5" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What is your typical timeline for development projects?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                For a Minimum Viable Product (MVP), we follow a streamlined 100-day plan to ensure a timely and efficient launch. The timeline for other projects depends on the project's scale and specific requirements, allowing us to tailor our approach to meet your unique needs.
              </p>
            </div>
          </div>
          <div id="faq6" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                What is a design system and how can it benefit my product development process?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                A design system is a collection of reusable components, guided by clear standards, that can be assembled to build any number of applications. It ensures consistency, efficiency, and scalability in your product development process, enabling your team to deliver high-quality products faster.
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
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                The UI/UX design cost varies based on project complexity, feature intricacy, and design team experience. At UniKwan, we tailor our pricing to your needs, ensuring you receive the most value from our award-winning design services.
              </p>
            </div>
          </div>
          <div id="faq2" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Do you offer project-based or hourly UX/UI design billing?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                UniKwan offers project- and resource-based billing options, providing flexibility to align with your project’s scope and budget requirements.
              </p>
            </div>
          </div>
          <div id="faq3" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                Can I get a free quote for my UX/UI design project?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                Yes. We offer free consultations to discuss your project needs and provide a tailored quote. This ensures that you understand the potential costs and scope before committing.
              </p>
            </div>
          </div>
          <div id="faq4" class="faq_accordion_container hr_grey">
            <div class="faq_accordion_header">
              <h3 class="sub_heading_wls_20 fw_500 color_white faq_question">
                How long do UX/UI design projects typically take?
              </h3>
              <div class="faq_icon">
                <img src="<?php echo $baseUrl; ?>assets/images/plus.svg" alt="expand collapse" width="24px" height="25px" />
              </div>
            </div>
            <div class="faq_accordion_content">
              <p class="sub_heading_wls_20 fw_400 color_white">
                The duration varies depending on the project's scope: from 4-6 weeks for rapid designs to over six months for extensive product and service innovation strategies, ensuring thorough development and implementation.
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
    <?php include '../footer.php';?>
    <!-- End Footer Section -->
  </body>
    
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    var clicked_id = "eq1";
    var flag_slider = "";
    var flag_accord = "";
    function hoverOnExpert(elementId, event) {
      $(".services_icon_2").stop().removeClass('active');
      $(".services_icon_2").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_two_active');
      $(".services_icon_2 img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-2.svg');
      $(".services_icon_3").stop().removeClass('active');
      $(".services_icon_3").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_three_active');
      $(".services_icon_3 img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-3.svg');


      $(".services_icon_4").stop().removeClass('active');
      $(".services_icon_4").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_four_active');
      $(".services_icon_4 img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-4.svg');



      $(".services_icon_1").stop().removeClass('active');
      $(".services_icon_1").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_one_active');
      $(".services_icon_1 img").attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-1.svg');
      if($("#" + elementId).attr('class').split(' ')[1] === 'services_icon_2') {
        $("#" + elementId).stop().addClass('active');
        $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('service_two_active');
        $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-hover-2.svg');
      }
      else if($("#" + elementId).attr('class').split(' ')[1] === 'services_icon_3') {
        $("#" + elementId).stop().addClass('active');
        $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('service_three_active');
        $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-hover-3.svg');
      }


      else if($("#" + elementId).attr('class').split(' ')[1] === 'services_icon_4') {
        $("#" + elementId).stop().addClass('active');
        $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('service_four_active');
        $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-hover-4.svg');
      }


      else {
        $("#" + elementId).stop().addClass('active');
        $("#" + elementId).parent().parent().parent().find('.expert_image_container').stop().addClass('service_one_active');
        $("#" + elementId).children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-hover-1.svg');
      }
      flag_accord = "flagAccord";
      if(flag_accord === "flagAccord" && flag_slider !== "flagSlider") {
        if($("#" + elementId).hasClass("hovered")) {
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
      if($("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").hasClass("collapsed")) {
        // if($(event.target).is("a.expert_link_container") || $(event.target).is("div.expert_icon") || $(event.target).is("img.collapsed") || clickedId === "eq1") {
          
        // }
        if(clickedId === "eq1" || clickedId === "eqm1") {
          
        }
        else {
          $("#" + clickedId + ".expert_accordion_container").find(".expert_accordion_content").stop().slideUp();
          $("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").stop().removeClass("collapsed");
          $("#" + clickedId + ".expert_accordion_container").find(".expert_icon img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/down.svg');
          $("#" + clickedId + ".expert_accordion_container").find(".expert_accordion_right_container").stop().removeClass("expert_link");
          if(windowWidth > 767) {
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
          if(flag_slider === "flagSlider" && flag_accord !== "flagAccord") {
            //hoverOutExpert(clickedId, event, "flag");
            if(windowWidth > 767) {
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
        if(flag_slider === "flagSlider" && flag_accord !== "flagAccord") {
          hoverOnExpert(clickedId, event);
        }
        flag_slider = "";
        $("#" + clickedId + ".expert_icon_container").stop().addClass("hovered");
      }
    }

    $(window).on('resize orientationchange', function() {
      windowWidth = $(window).width();
      $(".services_icon_2").stop().removeClass('active');
      $(".services_icon_2").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_two_active');
      $(".services_icon_2 img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-2.svg');
      $(".services_icon_3").stop().removeClass('active');
      $(".services_icon_3").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_three_active');
      $(".services_icon_3 img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-3.svg');


      $(".services_icon_4").stop().removeClass('active');
      $(".services_icon_4").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_four_active');
      $(".services_icon_4 img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-4.svg');


      $(".services_icon_1").stop().removeClass('active');
      $(".services_icon_1").parent().parent().parent().find('.expert_image_container').stop().removeClass('service_one_active');
      $(".services_icon_1 img").attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-hover-1.svg');
      $(".services_icon_1").stop().addClass('active');
      $(".services_icon_1").parent().parent().parent().find('.expert_image_container').stop().addClass('service_one_active');
      $(".services_icon_1").children().stop().attr('src', '<?php echo $baseUrl; ?>assets/images/service-icon-hover-2.svg');
      if(windowWidth > 767) {
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




  /*Begin our capabilities logic*/ 
  const awardContainer = document.querySelector('.recognition_right_container');
  const awardContentContainer = document.querySelector('.recognition_award_container');
  const awardContentHeight = awardContentContainer.scrollHeight;
  awardContainer.style.height = `600px`;
  
  const awardScrollAnimation = gsap.timeline({ repeat: -1 });
  const awardCloneContent = awardContentContainer.cloneNode(true);
  awardContentContainer.appendChild(awardCloneContent);

  awardScrollAnimation.to(awardContentContainer, {
    duration: 10,
    y: -awardContentHeight,
    ease: "linear"
  });

  awardScrollAnimation.to(awardCloneContent, {
    duration: 0,
    y: 0,
    ease: "none"
  }, "+=3");

  $(window).on('load resize orientationchange', function() {
    awardScrollAnimation.play();
  });

  $('.recognition_award_container').hover(function() {
    awardScrollAnimation.pause();
  }, function() {
    awardScrollAnimation.play();
  });
  /*End our capabilities logic */ 

  /*Begin Counter animation logic */
    document.addEventListener("DOMContentLoaded", (event) => {
    gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

    const counterProjectValue = document.querySelector(".projects");
    const counterProjectTimeline = gsap.timeline({
      paused: true
    });
    counterProjectTimeline.fromTo(counterProjectValue, {
      textContent: 0,
      duration: 2,
      ease: "power3.inOut"
    }, {
      textContent: 200,
      duration: 2,
      ease: "power3.inOut",
      onUpdate: () => {
        counterProjectValue.textContent = Math.round(counterProjectTimeline.progress() * 200);
      }
    });

    const counterClientsValue = document.querySelector(".client");
    const counterClientsTimeline = gsap.timeline({
      paused: true
    });
    counterClientsTimeline.fromTo(counterClientsValue, {
      textContent: 0,
      duration: 2,
      ease: "power3.inOut"
    }, {
      textContent: 4.6,
      duration: 2,
      ease: "power3.inOut",
      onUpdate: () => {
        counterClientsValue.textContent = (counterClientsTimeline.progress() * 4.6).toFixed(1);
      }
    });

    const counterCountriesValue = document.querySelector(".countries");
    const counterCountriesTimeline = gsap.timeline({
      paused: true
    });
    counterCountriesTimeline.fromTo(counterCountriesValue, {
      textContent: 0,
      duration: 2,
      ease: "power3.inOut"
    }, {
      textContent: 10,
      duration: 2,
      ease: "power3.inOut",
      onUpdate: () => {
        counterCountriesValue.textContent = Math.round(counterCountriesTimeline.progress() * 10);
      }
    });

    const counterMarketValue = document.querySelector(".market");
    const counterMarketTimeline = gsap.timeline({
      paused: true
    });
    counterMarketTimeline.fromTo(counterMarketValue, {
      textContent: 0,
      duration: 2,
      ease: "power3.inOut"
    }, {
      textContent: 100,
      duration: 2,
      ease: "power3.inOut",
      onUpdate: () => {
        counterMarketValue.textContent = Math.round(counterMarketTimeline.progress() * 100);
      }
    });

    const counterBrandValue = document.querySelector(".brand");
    const counterBrandTimeline = gsap.timeline({
      paused: true
    });
    counterBrandTimeline.fromTo(counterBrandValue, {
      textContent: 0,
      duration: 2,
      ease: "power3.inOut"
    }, {
      textContent: 20,
      duration: 2,
      ease: "power3.inOut",
      onUpdate: () => {
        counterBrandValue.textContent = Math.round(counterBrandTimeline.progress() * 20);
      }
    });

    const counterUserValue = document.querySelector(".user");
    const counterUserTimeline = gsap.timeline({
      paused: true
    });
    counterUserTimeline.fromTo(counterUserValue, {
      textContent: 0,
      duration: 2,
      ease: "power3.inOut"
    }, {
      textContent: 300,
      duration: 2,
      ease: "power3.inOut",
      onUpdate: () => {
        counterUserValue.textContent = Math.round(counterUserTimeline.progress() * 300);
      }
    });

    const scrollTrigger = ScrollTrigger.create({
      trigger: ".results_section",
      start: "top center",
      end: "bottom center",
      onEnter: function() {
        counterProjectTimeline.play();
        counterProjectTimeline.seek(0);
        counterClientsTimeline.play();
        counterClientsTimeline.seek(0);
        counterCountriesTimeline.play();
        counterCountriesTimeline.seek(0);
        counterMarketTimeline.play();
        counterMarketTimeline.seek(0);
        counterBrandTimeline.play();
        counterBrandTimeline.seek(0);
        counterUserTimeline.play();
        counterUserTimeline.seek(0);
      },
      onEnterBack: function() {
        counterProjectTimeline.seek(0);
        counterClientsTimeline.seek(0);
        counterCountriesTimeline.seek(0);
        counterMarketTimeline.seek(0);
        counterBrandTimeline.seek(0);
        counterUserTimeline.seek(0);
      },
    });
  /*End Counter animation logic */

  /*Begin Business impact logic */
  gsap.to(".business_content_container", {
      scrollTrigger: {
        trigger: '.business_impact_container',
        start: "+=150px bottom"
      },
      opacity: 1,
      duration: 1,
      stagger: 0.2,
      ease: "power1.in"
    });
  });

  const businessImpactHorizontalScrollContainer = document.querySelector(".business_impact_container");
  let businessImpactContainerWidth = businessImpactHorizontalScrollContainer.scrollWidth;
  var businessImpactWindowWidth;
  let businessImpactMediaQuery = gsap.matchMedia();

  businessImpactMediaQuery.add("(max-width: 767.95px)", () => {
    gsap.to(".business_impact_container", {
      x: () => -(businessImpactContainerWidth - (businessImpactWindowWidth ? businessImpactWindowWidth : window.innerWidth)),
      ease: "none",
      scrollTrigger: {
        invalidateOnRefresh: true,
        trigger: ".business_impact_section",
        pin: true,
        scrub: 1,
        start: "top top",
        end: () => `+=${businessImpactContainerWidth}`
      }
    });
  });

  $(window).on('load resize orientationchange', function() {
    businessImpactContainerWidth = businessImpactHorizontalScrollContainer.scrollWidth;
    businessImpactWindowWidth = $(window).innerWidth();
  });
  /*End Business impact logic */

  /*Begin How we work logic */
    gsap.to(".goal_content_container", {
      scrollTrigger: {
        trigger: '.goal_container',
        start: "+=150px bottom"
      },
      opacity: 1,
      duration: 1,
      stagger: 0.2,
      ease: "power1.in"
    });
  // });

  const goalHorizontalScrollContainer = document.querySelector(".goal_container");
  let goalContainerWidth = goalHorizontalScrollContainer.scrollWidth;
  var goalWindowWidth;
  let goalMediaQuery = gsap.matchMedia();

  goalMediaQuery.add("(max-width: 767.95px)", () => {
    gsap.to(".goal_container", {
      x: () => -(goalContainerWidth - (goalWindowWidth ? goalWindowWidth : window.innerWidth)),
      ease: "none",
      scrollTrigger: {
        invalidateOnRefresh: true,
        trigger: ".work_section",
        pin: true,
        scrub: 1,
        start: "top top",
        end: () => `+=${goalContainerWidth}`
      }
    });
  });

  $(window).on('load resize orientationchange', function() {
    goalContainerWidth = goalHorizontalScrollContainer.scrollWidth;
    goalWindowWidth = $(window).innerWidth();
  });
  /*End How we work logic */

/*Begin Resources logic */
  function resourceMouselog(event) {
      if($(window).width() < 768) {
				event.preventDefault();
			}
      else {
        var hovered_element = event.target.id;
        if(event.type == "mouseenter") {
          $('#'+hovered_element).find('.resource_top_container').find('.gif_image').stop().removeClass('resource_fadeout');
          $('#'+hovered_element).find('.resource_content_container').stop().removeClass('resource_fadeout');
          $('#'+hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadeout');
          $('#'+hovered_element).stop().addClass("resource_active");
          $(".resource_card_container").not($('#'+hovered_element)).stop().addClass("decrease_width");
          $('#'+hovered_element).stop().addClass("increase_width");
          $('#'+hovered_element).find('.resource_top_container').find('.gif_image').stop().addClass('resource_fadein');
          $('#'+hovered_element).find('.resource_content_container').stop().addClass('resource_fadein');
          setTimeout(() => {
            $('#'+hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadeout');
            $('#'+hovered_element).find('.resource_button').stop().removeClass('resource_button_rounded');
            $('#'+hovered_element).find('.resource_button_text').stop().show().addClass('resource_button_text_fadein');
            $('#'+hovered_element).find('.resource_button_icon').stop().addClass('button_icon_slide');
          }, 100);
        }
        else {
          $('#'+hovered_element).stop().removeClass("resource_active");
          $('#'+hovered_element).find('.resource_top_container').find('.gif_image').stop().removeClass('resource_fadein');
          $('#'+hovered_element).find('.resource_content_container').stop().removeClass('resource_fadein');
          $('#'+hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadein');
          $(".resource_card_container").stop().removeClass("increase_width decrease_width");
          $('#'+hovered_element).find('.resource_top_container').find('.gif_image').stop().addClass('resource_fadeout');
          $('#'+hovered_element).find('.resource_content_container').stop().addClass('resource_fadeout');
          setTimeout(() => {
            $('#'+hovered_element).find('.resource_button_text').stop().removeClass('resource_button_text_fadein');
            $('#'+hovered_element).find('.resource_button_text').stop().addClass('resource_button_text_fadeout').hide();
            $('#'+hovered_element).find('.resource_button_icon').stop().removeClass('button_icon_slide');
            $('#'+hovered_element).find('.resource_button').stop().addClass('resource_button_rounded');
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
      $.each($resource_animation_elements, function() {
        var $resource_element = $(this);
        var resource_element_height = $resource_element.height();
        var scrolldown_element_top_position = $resource_element.offset().top + 350;
        var scrolldown_element_bottom_position = (scrolldown_element_top_position + resource_element_height) - 550;
        var scrollup_element_top_position = $resource_element.offset().top + 300;
        var scrollup_element_bottom_position = (scrollup_element_top_position + resource_element_height) - 550;

        if(window_top_position > lastResourceScrollTop) {
          if((window_bottom_position >= scrolldown_element_top_position) && (window_top_position <= scrolldown_element_bottom_position)) {
            resourceActivateHover($resource_element);
          }
          else {
            resourceDeactivateHover($resource_element);
          }
        }
        else if(window_top_position < lastResourceScrollTop) {
          if((window_bottom_position >= scrollup_element_top_position) && (window_top_position <= scrollup_element_bottom_position)) {
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
      if(event.type === "resize" || event.type === "change") {
        if(windowWidth < 768) {
          $(window).on('scroll', resourceScroll);
        }
        else {
          resourceOnResizeDeactivateHover();
          $(window).off('scroll', resourceScroll);
        }
      }
      else {
        if(windowWidth < 768) {
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
/*End Resources logic */

/*Begin FAQ logic */
$(".faq_categeory_container").click(function() {
      var clicked_id = $(this).attr('id');
      $(".faq_categeory_container").removeClass('border_op1_white');
      $(".faq_categeory_container").find('.faq_categeory_name').removeClass('color_half_white');
      $(".faq_categeory_container").find('.faq_categeory_name').addClass('color_white_op50');
      $("#" + clicked_id).find('.faq_categeory_name').removeClass('color_white_op50');
      $(".faq_accordion").each(function() {
        $(".faq_accordion").not("#" + clicked_id).stop().removeClass('resource_fadein').addClass('resource_fadeout').hide();
      });
      $(".faq_accordion").parent().find("#" + clicked_id).stop().removeClass('resource_fadeout').show().addClass('resource_fadein');
      $("#" + clicked_id).addClass('border_op1_white');
      $("#" + clicked_id).find('.faq_categeory_name').addClass('color_half_white');
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
      if($(this).find(".faq_accordion_header").find(".faq_icon img").hasClass("collapsed")) {
        $(this).find(".faq_accordion_header").find(".faq_icon img").removeClass("collapsed");
        $(this).find(".faq_accordion_header").find(".faq_question").removeClass('color_white_op50').addClass('color_white');
        $(this).find(".faq_accordion_header").find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/plus.svg');
      } else {
        $(this).find(".faq_accordion_header").find(".faq_icon img").addClass("collapsed");
        $(this).find(".faq_accordion_header").find(".faq_question").removeClass('color_white').addClass('color_white_op50');
        $(this).find(".faq_accordion_header").find(".faq_icon img").attr('src', '<?php echo $baseUrl; ?>assets/images/minus.svg');
      }
    });
    /*End FAQ logic */
  </script>
<script>
</html>