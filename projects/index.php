<!DOCTYPE html>
<html lang="en">

<head>
  <title>UI UX Design Case Studies & Portfolio | UniKwan</title>
  <meta name="description"
    content="Explore UniKwan's UI UX design case studies across ecommerce, OTT, healthtech, SaaS, and fintech — featuring work for Lionsgate, Fastrack, and Philips.">
  <?php
      include '../header.php';
  ?>
  <meta name="author" content="UniKwan Innovations" />
  <meta property='og:title' content='UI UX Design Case Studies & Portfolio | UniKwan' />
  <meta property='og:description'
    content="Explore UniKwan's UI UX design case studies across ecommerce, OTT, healthtech, SaaS, and fintech — featuring work for Lionsgate, Fastrack, and Philips." />
  <meta property='og:url' content='<?php echo $baseUrl; ?>projects/' />
  <!-- <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png' /> -->
  <!-- <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png" /> -->
  <meta property="og:site_name" content="UniKwan Innovations">
  <meta property="og:type" content="Website">
</head>

<body>
  <!-- Begin Hero Section -->
  <section class="project_listing_hero_section">
    <!-- Begin Navbar Section -->
    <?php include '../navbar.php'; ?>
    <!-- End Navbar Section -->

    <!-- Begin Hero Content Section -->
    <section class="project_listing_hero_content_section">
      <div class="label_blue ml_mr">
        <p class="ff_satoshi content_20 fw_700 color_blue">Projects</p>
      </div>
      <div class="projects_hero_content_flex heading_mt pl_pr">
        <h1 class="heading_wls_60 fw_700 color_black project_listing_hero_heading">
          Trusted Design Partner to Global Industry Leaders
        </h1>
        <div class="projects_content_container">
          <p class="ff_satoshi content_20 fw_400 color_lighter_grey projects_hero_content">
            Explore our top UI/UX design project portfolio, where innovative design thinking frameworks meet
            industry-specific expertise. From fintech application design to corporate website crafting, we've
            revolutionized enterprises and startups, turning bold ideas into standout digital realities.
          </p>
          <p class="ff_satoshi content_20 fw_400 color_lighter_grey projects_hero_content mt">
            Our case studies highlight our journey across eCommerce, fintech, SaaS, edtech, HealthTech, and other
            sectors, showcasing our commitment to excellence and transformative design.
          </p>
        </div>
      </div>
      <div class="project_listing_bg_container">
        <img src="<?php echo $baseUrl; ?>assets/images/left-arrow-bg.png" alt="projects bg" width="711px"
          height="667px" />
      </div>
    </section>
    <!-- End Hero Content Section -->
  </section>
  <!-- End Hero Section -->

  <!-- Begin Project Lisitng Section -->
  <section class="project_listing_section pl_pr">
    <div class="project_listing_filter_flex">
      <div class="allproject_button_container cursor_pointer">
        <p class="ff_satoshi content_wls_16 fw_400 button button_blue">All Projects</p>
      </div>
      <div class="project_dropdown_container industry_dropdown_container">
        <div class="project_dropdown_button cursor_pointer">
          <p class="ff_satoshi content_wls_16 fw_400 color_black">Industry</p>
          <img src="<?php echo $baseUrl; ?>assets/images/projects-down.svg" class="projects_dropdown_icon"
            alt="down arrow" width="12px" height="23px" />
        </div>
        <div class="project_dropdown_content_container">
          <label for="Ecommerce" class="project_dropdown_content_flex">
            <input type="checkbox" id="Ecommerce" name="Ecommerce" value="Ecommerce" />
            <label for="Ecommerce" class="ff_satoshi content_wls_16 fw_400 color_light_black">Ecommerce</label>
          </label>
          <label for="Fintech" class="project_dropdown_content_flex">
            <input type="checkbox" id="Fintech" name="Fintech" value="Fintech" />
            <label for="Fintech" class="ff_satoshi content_wls_16 fw_400 color_light_black">Fintech</label>
          </label>
          <label for="OTT & DTH" class="project_dropdown_content_flex">
            <input type="checkbox" id="OTT & DTH" name="OTT & DTH" value="OTT_And_DTH" />
            <label for="OTT & DTH" class="ff_satoshi content_wls_16 fw_400 color_light_black">OTT & DTH</label>
          </label>
          <label for="Social Media" class="project_dropdown_content_flex">
            <input type="checkbox" id="Social Media" name="Social Media" value="Social_Media" />
            <label for="Social Media" class="ff_satoshi content_wls_16 fw_400 color_light_black">Social Media</label>
          </label>
          <label for="Saas" class="project_dropdown_content_flex">
            <input type="checkbox" id="Saas" name="Saas" value="Saas" />
            <label for="Saas" class="ff_satoshi content_wls_16 fw_400 color_light_black">Saas</label>
          </label>
          <label for="Government" class="project_dropdown_content_flex">
            <input type="checkbox" id="Government" name="Government" value="Government" />
            <label for="Government" class="ff_satoshi content_wls_16 fw_400 color_light_black">Government</label>
          </label>
          <label for="Health tech" class="project_dropdown_content_flex">
            <input type="checkbox" id="Health tech" name="Health tech" value="Health_tech" />
            <label for="Health tech" class="ff_satoshi content_wls_16 fw_400 color_light_black">Health tech</label>
          </label>
          <label for="Enterprise Software" class="project_dropdown_content_flex">
            <input type="checkbox" id="Enterprise Software" name="Enterprise Software" value="Enterprise_Software" />
            <label for="Enterprise Software" class="ff_satoshi content_wls_16 fw_400 color_light_black">Enterprise Software</label>
          </label>
          <label for="Sports Analytics" class="project_dropdown_content_flex">
            <input type="checkbox" id="Sports Analytics" name="Sports Analytics" value="Sports_Analytics" />
            <label for="Sports Analytics" class="ff_satoshi content_wls_16 fw_400 color_light_black">Sports Analytics</label>
          </label>
          <label for="Edtech" class="project_dropdown_content_flex">
            <input type="checkbox" id="Edtech" name="Edtech" value="Edtech" />
            <label for="Edtech" class="ff_satoshi content_wls_16 fw_400 color_light_black">Edtech</label>
          </label>
        </div>
      </div>
      <div class="project_dropdown_container service_dropdown_container">
        <div class="project_dropdown_button cursor_pointer">
          <p class="ff_satoshi content_wls_16 fw_400 color_black">Services</p>
          <img src="<?php echo $baseUrl; ?>assets/images/projects-down.svg" class="projects_dropdown_icon"
            alt="down arrow" width="12px" height="23px" />
        </div>
        <div class="project_dropdown_content_container">
          <label for="Product Strategy & Growth Design" class="project_dropdown_content_flex">
            <input type="checkbox" id="Product Strategy & Growth Design" name="Product Strategy & Growth Design"
              value="Product_Strategy_And_Growth_Design" />
            <label for="Product Strategy & Growth Design"
              class="ff_satoshi content_wls_16 fw_400 color_light_black">Product Strategy & Growth Design</label>
          </label>
          <label for="UI/UX" class="project_dropdown_content_flex">
            <input type="checkbox" id="UI/UX" name="UI/UX" value="UI_UX" />
            <label for="UI/UX" class="ff_satoshi content_wls_16 fw_400 color_light_black">UI/UX</label>
          </label>
          <label for="Conversational AI Design" class="project_dropdown_content_flex">
            <input type="checkbox" id="Conversational AI Design" name="Conversational AI Design"
              value="Conversational_AI_Design" />
            <label for="Conversational AI Design"
              class="ff_satoshi content_wls_16 fw_400 color_light_black">Conversational AI Design</label>
          </label>
          <label for="AI UX" class="project_dropdown_content_flex">
            <input type="checkbox" id="AI UX" name="AI UX"
              value="AI_UX" />
            <label for="AI UX"
              class="ff_satoshi content_wls_16 fw_400 color_light_black">AI UX</label>
          </label>
          <label for="UX Design" class="project_dropdown_content_flex">
            <input type="checkbox" id="UX Design" name="UX Design"
              value="UX_Design" />
            <label for="UX Design"
              class="ff_satoshi content_wls_16 fw_400 color_light_black">UX Design</label>
          </label>
          <label for="Spatial UI" class="project_dropdown_content_flex">
            <input type="checkbox" id="Spatial UI" name="Spatial UI"
              value="Spatial_UI" />
            <label for="Spatial UI"
              class="ff_satoshi content_wls_16 fw_400 color_light_black">Spatial UI</label>
          </label>
        </div>
      </div>
    </div>
    <div class="project_flex_container pt">
      <div class="project_card_container plim Fintech Product_Strategy_And_Growth_Design UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/plim/">
          <div id="project_plim" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <h2 class="project_name heading_60 fw_800 color_pink">Plim</h2>
                <p class="project_description ff_satoshi content_20 fw_400 color_grey">
                  Plim is reshaping aesthetic healthcare financing in the UK with flexible,
                  interest-free BNPL plans on its streamlined, patient-centered platform.
                </p>
                <!-- <div class="project_button project_comingsoon_button_container">
                    <p class="ff_satoshi fw_500 comingsoon_text">Coming soon</p>
                  </div> -->
                <!-- <div class="project_button">
                  <a href="<?php echo $baseUrl; ?>projects/plim/" class="button_rounded button_bg_pink">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-pink.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </a>
                </div> -->
                <div class="project_button">
                  <div class="button_rounded button_bg_pink">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-pink.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/plim-base.png" alt="project image" width="488px"
                  height="323px" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/plim-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Fintech</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">MVP Design</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Product Strategy</p>
        </div>
      </div>
      <div class="project_card_container jeevn mt Saas UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/jeevn/">
          <div id="project_jeevn" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Jeevn</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Jeevn, a tailored app for optimal health, offers personalized wellness
                    programs and recommendations powered by advanced algorithms and expert insights.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_mild_orange">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/jeevn-base.png" alt="project image" width="427px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/jeevn-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Product design</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Health Monitoring</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
        </div>
      </div>
    </div>
    <div class="project_flex_container pt">
      <div class="project_card_container clinevo Health_tech UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/clinevotech/">
          <div id="project_clinevotech" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Clinevotech</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Clinevotech modernized the OneQMS UI for healthcare quality management,
                    enhancing usability and aesthetics while preserving essential workflows.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_dark_blue">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-green.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/clinevotech-base.png" alt="project image" width="466px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/clinevotech-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">B2B SaaS</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">User Interface</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
        </div>
      </div>
      <div class="project_card_container nworx mt Saas UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/nworx/">
          <div id="project_nworx" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Nworx</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    NWORX optimizes organizational performance with its enhanced B2B SaaS platform,
                    driving team alignment and substantial growth through superior UX.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_dark_orange">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/nworx-base.png" alt="project image" width="534px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/nworx-hover.png" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Saas</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Enterprise UX</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Design System</p>
        </div>
      </div>
    </div>
    <div class="project_flex_container pt">
      <div class="project_card_container lionsgate OTT_And_DTH UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/lionsgate-play/">
          <div id="project_lionsgateplay" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div
                  class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Lionsgate Play</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Lionsgate Play transforms the OTT space with personalized, multi-device
                    streaming experiences, leveraging a vast library of premium, curated content.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_black">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/lionsgate-base.png" alt="project image" width="436px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/lionsgate-hover.png" alt="project image" width="100%"
                  height="100%" />
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
      <div class="project_card_container edprime mt Saas UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/edprime/">
          <div id="project_edprime" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Edprime</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
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
                <img src="<?php echo $baseUrl; ?>assets/images/edprime-base.png" alt="project image" width="578px"
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
      </div>
    </div>
    <div class="project_flex_container pt">
      <div class="project_card_container fastrack Ecommerce UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/fastrack/">
          <div id="project_fastrack" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Fastrack</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Fastrack transforms e-commerce for youth with a vibrant, engaging UX,
                    significantly reducing cart abandonment and increasing user interaction.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_orange">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/fastrack-base.png" alt="project image" width="447px"
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
      <div class="project_card_container mt bsk Government UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/bapuji-seva-kendra/">
          <div id="project_bsk" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div
                  class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">BSK</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Enhancing rural Karnataka's government services, the BSK app offers
                    streamlined processes, improved access, and integrated voice search
                    in a comprehensive solution.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_blue">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-blue.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/bsk-base.png" alt="project image" width="472px"
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

    <div class="project_flex_container pt">
      <div class="project_card_container waggle Social_Media UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/waggle/">
          <div id="project_waggle" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Waggle</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Waggle innovates pet parenting via a mobile app, merging real-time safety
                    features with a dynamic social platform for comprehensive community engagement.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_green">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-green.svg" alt="button arrow" width="13px"
                      height="11px" />
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
      </div>

      <div class="project_card_container mt brelyon Enterprise_Software Spatial_UI AI_UX">
        <a href="<?php echo $baseUrl; ?>projects/brelyon/">
          <div id="project_brelyon" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div
                  class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Brelyon</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Founded by an MIT graduate, Brelyon's Visual Engine turns dense AI-powered behavioral data into real-time visual intelligence.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_black">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div style="padding-bottom: 0;" class="project_image project_base_image ph_pv margin_center
  ">
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
    </div>

    <div class="project_flex_container pt">
      <div class="project_card_container visist Sports_Analytics AI_UX UI_UX">
        <a href="<?php echo $baseUrl; ?>projects/visist/">
          <div id="project_visist" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">Visist.AI</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    Visist. ai is an AI-powered sports analytics platform designed for young athletes that generates detailed match assessments and performance reports.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_dark_green">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
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

      <div class="project_card_container mt bluerobins Edtech AI_UX UX_Design">
        <a href="<?php echo $baseUrl; ?>projects/bluerobins/">
          <div id="project_bluerobins" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
            onmouseleave="projectMouselog(event)">
            <div class="project_card_inner_container">
              <div class="project_card_top_container">
                <div class="project_page_navigator project_page_direct">
                  <h2 class="project_name heading_60 fw_800 color_white">BlueRobins</h2>
                  <p class="project_description ff_satoshi content_20 fw_400 color_white">
                    AI-powered mentorship platform designed to help students discover projects, connect with mentors, and track growth through guided learning experiences.
                  </p>
                </div>
                <div class="project_button">
                  <div class="button_rounded button_bg_dark_blue">
                    <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-white.svg" alt="button arrow" width="13px"
                      height="11px" />
                  </div>
                </div>
              </div>
              <div class="project_image project_base_image ph_pv">
                <img src="<?php echo $baseUrl; ?>assets/images/projects/bluerobins/bluerobins-base.webp" alt="project image" width="498px"
                  height="100%" />
              </div>
              <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/projects/bluerobins/bluerobins-hover.webp" alt="project image" width="100%"
                  height="100%" />
              </div>
            </div>
          </div>
        </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">Edtech</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">AI UX</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UX Design</p>
        </div>
      </div>
    </div>

    <!-- <div class="project_flex_container pt">
      <div class="project_card_container clinevo previzion Health_tech UI_UX">
      <a href="<?php echo $baseUrl; ?>projects/previzion/">
        <div id="project_previzion" class="project_card_outer_container" onmouseenter="projectMouselog(event)"
          onmouseleave="projectMouselog(event)">
          <div class="project_card_inner_container">
            <div class="project_card_top_container">
              <div class="project_page_navigator project_page_direct">
                <h2 class="project_name heading_60 fw_800 color_white">PREVIZION</h2>
                <p class="project_description ff_satoshi content_20 fw_400 color_white">
                  Protech is an AI-powered school safety platform that detects threats in real time and instantly alerts staff and first responders before a situation escalates.
                </p>
              </div>
              <div class="project_button">
                <div class="button_rounded button_bg_green">
                  <img src="<?php echo $baseUrl; ?>assets/images/button-arrow-green.svg" alt="button arrow" width="13px"
                    height="11px" />
                </div>
              </div>
            </div>
            <div class="project_image project_base_image ph_pv">
              <img src="<?php echo $baseUrl; ?>assets/images/previzion-base.webp" alt="project image" width="555px"
                height="100%" />
            </div>
            <div class="project_image project_hover_image">
                <img src="<?php echo $baseUrl; ?>assets/images/previzion-hover.webp" alt="project image" width="100%"
                  height="100%" />
            </div>
          </div>
        </div>
      </a>
        <div class="project_categories">
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">EdTech</p>
            <span class="grey_circle"></span>
          </div>
          <div class="project_category_container">
            <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">User Interface</p>
            <span class="grey_circle"></span>
          </div>
          <p class="project_category_name ff_satoshi content_20 fw_400 color_lighter_grey">UI/UX</p>
        </div>
      </div>
    </div> -->

    <div id="no_data" class="no_data_container text_center pl_pr">
      <p class="ff_satoshi content_20 fw_400 color_lighter_grey">No Projects Found!</p>
    </div>
  </section>
  <!-- End Project Lisitng Section -->

  <!-- Begin Footer Section -->
  <?php include '../footer.php'; ?>
  <!-- End Footer Section -->
</body>

<script>
  $(document).ready(function() {
    $('.project_dropdown_container').hover(function() {
      var self = $(this);
      $(this).find('.projects_dropdown_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/projects-up.svg');
      self.find(".project_dropdown_content_container").stop().fadeIn(1000);
    }, function() {
      var self = $(this);
      $(this).find('.projects_dropdown_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/projects-down.svg');
      self.find(".project_dropdown_content_container").stop().fadeOut(300);
    });
  });

  var industryDropdownContainer = $('.industry_dropdown_container');
  var serviceDropdownContainer = $('.service_dropdown_container');
  var checkedClass = 'active';

  $('.industry_dropdown_container input[type="checkbox"]').change(function() {
    updateClass(industryDropdownContainer);
  });

  $('.service_dropdown_container input[type="checkbox"]').change(function() {
    updateClass(serviceDropdownContainer);
  });

  function hasCheckedCheckbox(container) {
    return container.find('input[type="checkbox"]:checked').length > 0;
  }

  function updateClass(container) {
    if (hasCheckedCheckbox(container)) {
      container.find('.project_dropdown_button').addClass(checkedClass);
    } else {
      container.find('.project_dropdown_button').removeClass(checkedClass);
    }
  }

  $('input[type="checkbox"]').change(function() {
    if ($("input[type='checkbox']:checked").length > 0) {
      $('.allproject_button_container').find('.button_blue').addClass('active');
    } else {
      $('.allproject_button_container').find('.button_blue').removeClass("active");
    }
  });

  function filterProjects() {
    const isIndustryCheckboxChecked = $('.industry_dropdown_container input[type="checkbox"]').is(':checked');
    const isServiceCheckboxChecked = $('.service_dropdown_container input[type="checkbox"]').is(':checked');

    if (isIndustryCheckboxChecked && isServiceCheckboxChecked) {
      var $projects = $('.project_card_container').hide();
      var $projectCheckboxs = $("input[type='checkbox']:checked");

      var projectFilter = $projects
        .filter(function() {
          var $project = $(this);
          return $projectCheckboxs.toArray().every(function(projectCheckbox) {
            return $project.hasClass($(projectCheckbox).attr('value'));
          });
        })
        .show();

      if (projectFilter.length === 0) {
        $("#no_data").stop().fadeIn();
      } else {
        $("#no_data").stop().fadeOut();
      }
    } else {
      var selectedProjectCategories = [];
      var flag = false;
      $('input[type="checkbox"]:checked').each(function() {
        if ($(this).is(':checked')) {
          selectedProjectCategories.push($(this).val());
        }
      });
      $('.project_card_container').hide();
      $('.project_card_container').each(function() {
        var projectCategory = $(this).attr('class');
        var showProject = false;
        if (selectedProjectCategories.length === 0) {
          showProject = true;
          flag = true;
        } else {
          var projectCategories = projectCategory.split(' ');
          for (let i = 0; i < selectedProjectCategories.length; i++) {
            if (projectCategories.indexOf(selectedProjectCategories[i]) !== -1) {
              showProject = true;
              flag = true;
              break;
            }
          }
        }
        if (showProject) {
          $(this).show();
        }
      });
      if (flag) {
        $("#no_data").stop().fadeOut();
      } else {
        $("#no_data").stop().fadeIn();
      }
    }
  }
  $('input[type="checkbox"]').click(filterProjects);

  $('input[type="checkbox"]').change(function() {
    $('.project_flex_container').each(function() {
      var firstElement = $(this).find(".project_card_container").first();
      const $parent = $(this);
      const allChildrenHidden = $parent.children().filter(':visible').length === 0;

      if (firstElement.css("display") === "none") {
        firstElement.next().removeClass("mt");
      } else {
        firstElement.next().addClass("mt");
      }

      if (allChildrenHidden) {
        $parent.removeClass('pt');
      } else {
        $parent.addClass('pt');
      }
    });
  });

  $(".allproject_button_container").click(function() {
    $("#no_data").stop().fadeOut();
    $('input:checkbox').prop('checked', false);
    $(".project_dropdown_button").removeClass("active");
    $(this).children().removeClass("active");
    $('.project_flex_container').addClass('pt');
    $('.project_flex_container').each(function() {
      var firstElement = $(this).find(".project_card_container").first();
      firstElement.next().addClass("mt");
    });
    $('.project_card_container').show();
  });

  function projectMouselog(event) {
    if ($(window).width() < 768) {
      event.preventDefault();
    } else {
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
      } else {
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
    $.each($project_animation_elements, function() {
      var $project_element = $(this);
      var project_element_height = $project_element.height();
      var scrolldown_element_top_position = $project_element.offset().top + 340;
      var scrolldown_element_bottom_position = (scrolldown_element_top_position + project_element_height) - 550;
      var scrollup_element_top_position = $project_element.offset().top + 250;
      var scrollup_element_bottom_position = (scrollup_element_top_position + project_element_height) - 550;

      if (window_top_position > lastProjectScrollTop) {
        if ((window_bottom_position >= scrolldown_element_top_position) && (window_top_position <= scrolldown_element_bottom_position)) {
          projectActivateHover($project_element);
        } else {
          projectDeactivateHover($project_element);
        }
      } else if (window_top_position < lastProjectScrollTop) {
        if ((window_bottom_position >= scrollup_element_top_position) && (window_top_position <= scrollup_element_bottom_position)) {
          projectActivateHover($project_element);
        } else {
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
      } else {
        projectOnResizeDeactivateHover();
        $(window).off('scroll', projectScroll);
      }
    } else {
      if (windowWidth < 768) {
        $(window).on('scroll', projectScroll);
      } else {
        $(window).off('scroll', projectScroll);
      }
    }
  }

  window.addEventListener("load", handleProjectLoadAndResize);
  window.addEventListener("resize", handleProjectLoadAndResize);
  screen.orientation.addEventListener("change", handleProjectLoadAndResize);


  $(document).ready(function() {

    const params = new URLSearchParams(window.location.search);
    const service = params.get('service');

    if (service) {

      const checkbox = $(
        `.service_dropdown_container input[value="${service}"]`
      );

      if (checkbox.length) {

        checkbox.prop('checked', true);

        updateClass($('.service_dropdown_container'));

        $('.allproject_button_container')
          .find('.button_blue')
          .addClass('active');

        filterProjects();

        $('.project_flex_container').each(function() {
          var firstElement = $(this).find(".project_card_container").first();
          const $parent = $(this);
          const allChildrenHidden =
            $parent.children().filter(':visible').length === 0;

          if (firstElement.css("display") === "none") {
            firstElement.next().removeClass("mt");
          } else {
            firstElement.next().addClass("mt");
          }

          if (allChildrenHidden) {
            $parent.removeClass('pt');
          } else {
            $parent.addClass('pt');
          }
        });
      }
    }

  });
</script>

</html>