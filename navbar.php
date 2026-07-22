<nav class="navbar">
  <div class="header_section pl_pr">
    <a href="<?php echo $baseUrl; ?>">
      <img src="<?php echo $baseUrl; ?>assets/images/logo.png" 
        alt="logo" class="logo" width="100%" height="100%" 
      />
    </a>
    <div class="header_content_container">
      <h3 class="ff_satoshi header_text content_16 fw_400 color_white">
        AI & Digital User Experience <br />Design Agency
      </h3>
      <div class="header_vertical_border"></div>
    </div>
  </div>
  <div class="navbar_container">
    <a href="<?php echo $baseUrl; ?>" class="home_icon_container">
      <img src="<?php echo $baseUrl; ?>assets/images/home_icon.svg" 
        alt="home" class="home_icon" width="18px" height="18px"
      />
    </a>
    <a href="<?php echo $baseUrl; ?>projects/" class="ff_satoshi content_wls_16 fw_700 color_white nav_name">Projects</a>
    <a href="<?php echo $baseUrl; ?>ai-ux/" class="ff_satoshi content_wls_16 fw_700 color_white nav_name">AI UX</a>
    <div class="nav_dropdown_container">
      <div class="nav_dropdown_button nav_name">
        <p class="ff_satoshi content_wls_16 fw_700 color_white">Expertise</p>
        <img src="<?php echo $baseUrl; ?>assets/images/up.svg"
          alt="dropdown icon" class="dropdown_icon" width="12px" height="23px"
        />
      </div>
      <div class="dropdown_content_container">
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>expertise/">
          Product Strategy & Growth Design
        </a>
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>expertise/">
          User Exeprience Design
        </a>
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>expertise/">
          Reserach & Innovation
        </a>
      </div>
    </div>
    <div class="nav_dropdown_container">
      <div class="nav_dropdown_button nav_name" data-link="<?php echo $currentUrl; ?>">
        <p class="ff_satoshi content_wls_16 fw_700 color_white">Resources</p>
        <img src="<?php echo $baseUrl; ?>assets/images/up.svg"
          alt="dropdown icon" class="dropdown_icon" width="12px" height="23px"
        />
      </div>
      <div class="dropdown_content_container">
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>articles/">
          Articles
        </a>
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>pillar-page/">
          Pillar Page
        </a>
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>success-stories/">
          Success Stories
        </a>
        <a class="ff_satoshi content_wls_16 fw_400 color_white dropdown_nav_name" href="<?php echo $baseUrl; ?>free-templates-and-ebooks/">
          Free Templates & Ebooks
        </a>
      </div>
    </div>
    <a href="<?php echo $baseUrl; ?>about-us/" class="ff_satoshi content_wls_16 fw_700 color_white nav_name">About us</a>
    <!-- <a href="<?php //echo $baseUrl; ?>career/" class="ff_satoshi content_wls_16 fw_700 color_white nav_name">Career</a> -->
    <div class="nav_button_container">
      <a href="<?php echo $baseUrl; ?>contact/" class="ff_satoshi content_wls_16 color_white button button_blue">Contact</a>
    </div>
  </div>
  <!-- Begin Mobile Navbar -->
  <div class="mobile_navbar">
    <div class="mobile_navbar_container">
      <div class="navbar_flex">
        <a href="<?php echo $baseUrl; ?>" class="home_icon_container">
          <img src="<?php echo $baseUrl; ?>assets/images/home_icon.svg" 
            alt="home" class="home_icon" width="16px" height="16px"
          />
        </a>
        <div class="nav_button_container">
          <a href="<?php echo $baseUrl; ?>contact/" class="ff_satoshi content_wls_16 color_white button button_blue">Contact</a>
        </div>
        <div class="hamburger_menu_container">
          <img src="<?php echo $baseUrl; ?>assets/images/menu_burger.svg" 
            alt="menu burger" width="20px" height="20px"
          />
        </div>
      </div>
    </div>
  </div>
  <div class="opened_menu">
    <div class="header_section pl_pr mobile">
      <a href="<?php echo $baseUrl; ?>">
        <img src="<?php echo $baseUrl; ?>assets/images/logo.png" 
          alt="logo" class="hover_logo" width="100%" height="100%" 
        />
      </a>
      <div class="hover_header_content_container">
        <h3 class="ff_satoshi header_text content_16 fw_400 color_white">
          AI & Digital User Experience <br />Design Agency
        </h3>
        <div class="header_vertical_border"></div>
      </div>
    </div>
    <ul class="menu">
      <li class="hover_home_icon_container">
        <img src="<?php echo $baseUrl; ?>assets/images/home_icon.svg" alt="home icon" class="home_icon" width="14px" height="14px" />
        <a href="<?php echo $baseUrl; ?>" class="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name">
          Home
        </a>
      </li>
      <li>
        <span class="mobile_active_dot"></span>
        <a href="<?php echo $baseUrl; ?>projects/" class="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name">
          Projects
        </a>
      </li>
      <li>
        <span class="mobile_active_dot"></span>
        <a href="<?php echo $baseUrl; ?>ai-ux/" class="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name">
          AI UX
        </a>
      </li>
      <li>
        <span class="mobile_active_dot"></span>
        <a href="<?php echo $baseUrl; ?>expertise/" class="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name">
          Expertise
        </a>
      </li>
      <li class="resources_menu_container">
        <div class="resources_menu_header">
          <span class="mobile_active_dot"></span>
          <div class="resources_menu_inner_header">
            <p class="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name" data-link="<?php echo $currentUrl; ?>">Resources</p>
            <img src="<?php echo $baseUrl; ?>assets/images/down.svg" alt="navbar dropdown icon" class="resources_dropdown_icon" width="16px" height="13px">
          </div>
        </div>
        <div class="resources_submenu_container">
          <div class="resources_submenu">
            <div class="resources_submenu_inner_flex">
              <span class="mobile_active_dot"></span>
              <a href="<?php echo $baseUrl; ?>articles/" class="ff_satoshi content_wls_16 fw_400 mobile_submenu mobile_submenu_name">
                Articles
              </a>
            </div>
            <div class="resources_submenu_inner_flex">
              <span class="mobile_active_dot"></span>
              <a href="<?php echo $baseUrl; ?>pillar-page/" class="ff_satoshi content_wls_16 fw_400 mobile_submenu mobile_submenu_name">
                Pillar Page
              </a>
            </div>
            <div class="resources_submenu_inner_flex">
              <span class="mobile_active_dot"></span>
              <a href="<?php echo $baseUrl; ?>success-stories/" class="ff_satoshi content_wls_16 fw_400 mobile_submenu mobile_submenu_name">
                Success Stories
              </a>
            </div>
            <div class="resources_submenu_inner_flex">
              <span class="mobile_active_dot"></span>
              <a href="<?php echo $baseUrl; ?>free-templates-and-ebooks/" class="ff_satoshi content_wls_16 fw_400 mobile_submenu mobile_submenu_name">
                Free Templates & Ebooks
              </a>
            </div>
          </div>
        </div>
      </li>
      <li>
        <span class="mobile_active_dot"></span>
        <a href="<?php echo $baseUrl; ?>about-us/" class="ff_satoshi content_wls_16 fw_400 mobile_menu mobile_nav_name">
          About us
        </a>
      </li>
    </ul>
  </div>
  <!-- End Mobile Navbar -->
</nav>