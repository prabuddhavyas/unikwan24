<footer class="footer_section contact_footer_section">
  <div class="pl_pr">
    <div class="menu_last_col_flex">
      <div class="menu_last_leftcol_flex">
        <div class="bq">
          <h2 class="ff_satoshi content_wls_16 fw_400 color_ash">Become a client</h2>
          <a href="mailto:info@unikwan.com" class="ff_satoshi content_20 fw_500 color_half_white">
            info@unikwan.com
          </a>
          <hr class="contact_hr" />
        </div>
        <div class="bq">
          <h2 class="ff_satoshi content_wls_16 fw_400 color_ash">Work at UniKwan</h2>
          <a href="mailto:hr@unikwan.com" class="ff_satoshi content_20 fw_500 color_half_white">
            hr@unikwan.com
          </a>
          <hr class="contact_hr" />
        </div>
      </div>
      <div class="bq">
        <h2 class="ff_satoshi content_wls_16 fw_400 color_ash">Talk to our team</h2>
        <p class="ff_satoshi content_20 fw_500 color_half_white">
          +91 9686 568 578 
        </p>
        <p class="ff_satoshi content_20 fw_500 color_half_white">
          +91 9891 303 913 
        </p>
      </div>
    </div>
  </div>
  <div class="footer_bg_container">
    <div class="footer_bg">
      <img src="<?php echo $baseUrl; ?>assets/images/footer-image.png" alt="footer image" width="100%" height="189px" />
    </div>
    
    <div class="pl_pr footer_row_flex copyright_block">
      <p class="ff_satoshi content_wls_16 fw_400 color_white_op46 copyright_text">
        Copyrights &copy; <span id="current_year"></span>. UniKwan Innovations Pvt Ltd - A Leading UI/UX Design Company. All Rights Reserved.
      </p>
      <div class="footer_inner_row_flex secondary_menus_container">
        <a href="<?php echo $baseUrl; ?>terms-and-conditions/">
          <p class="ff_satoshi content_wls_16 fw_400 color_white_op46">
            Terms & Conditions
          </p>
        </a>
        <a href="<?php echo $baseUrl; ?>privacy-policy/">
          <p class="ff_satoshi content_wls_16 fw_400 color_white_op46">
            Privacy Policy
          </p>
        </a>
      </div>
    </div>
  </div>
</footer>

<!-- Begin Cookie Policy Section -->
  <?php include 'cookie-policy/index.php';?>
<!-- End Cookie Policy Section -->

<script src="<?php echo $baseUrl; ?>assets/js/jquery.js"></script>
<script async src="https://www.google.com/recaptcha/api.js"></script>

<script>
  var currentURL;
  $(document).ready(function() {
    currentURL = window.location.href;
    
    $('.logo').attr('src', "<?php echo $baseUrl; ?>assets/images/logo.png");
    $('.header_content_container').hide();
  });

  $(".home_icon_container").hover(function () {
    var self = $(this);
    $(this).find('.home_icon').stop().removeClass('navbar_slidein');
    $(this).find('.home_icon').stop().addClass('navbar_slideout');
    $(this).find('.home_icon').stop().removeClass('navbar_slideout');
    setTimeout(function() {
      self.find('.home_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/home-active.svg');
      self.find('.home_icon').stop().addClass('navbar_slidein');
    }, 100);
  }, function() {
    var self = $(this);
    $(this).find('.home_icon').stop().removeClass('navbar_slidein');
    $(this).find('.home_icon').stop().addClass('navbar_slideout');
    $(this).find('.home_icon').stop().removeClass('navbar_slideout');
    setTimeout(function() {
      if(currentURL === "<?php echo $baseUrl; ?>") {
        self.find('.home_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/home-active.svg');
        self.find('.home_icon').stop().addClass('navbar_slidein');
      }
      else {
        self.find('.home_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/home_icon.svg');
        self.find('.home_icon').stop().addClass('navbar_slidein');
      }
    }, 100);
  });

  $('.nav_dropdown_container').hover(function() {
    var self = $(this);
    $(this).find('.dropdown_icon').stop().removeClass('navbar_slidein');
    $(this).find('.dropdown_icon').stop().addClass('navbar_slideout');
    $(this).find('.dropdown_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/double-up.svg');
    $(this).find('.dropdown_icon').stop().removeClass('navbar_slideout');
    setTimeout(function() {
      self.find('.dropdown_icon').stop().addClass('navbar_slidein');
      self.find(".dropdown_content_container").stop().fadeIn(1000);
    }, 100);
  }, function() {
    var self = $(this);
    $(this).find('.dropdown_icon').stop().removeClass('navbar_slidein');
    $(this).find('.dropdown_icon').stop().addClass('navbar_slideout');
    $(this).find('.dropdown_icon').attr('src', '<?php echo $baseUrl; ?>assets/images/up.svg');
    $(this).find('.dropdown_icon').stop().removeClass('navbar_slideout');
    setTimeout(function() {
      self.find('.dropdown_icon').stop().addClass('navbar_slidein');
      self.find(".dropdown_content_container").stop().fadeOut(300);
    }, 100);
  });

  $('.dropdown_content_container').hover(function() {
    $(this).parent().stop().addClass('hover_active');
  }, function() {
    $(this).parent().stop().removeClass('hover_active');
  });

  $(".hamburger_menu_container").click(function () {
    if($(".mobile_navbar_container").hasClass('mobile_navbar_hover')) {
      $('html').css("overflow-y", "unset");
      $('.resources_submenu_container').slideUp();
      $('.resources_menu_inner_header').removeClass("expand");
      $(".mobile_navbar_container").stop().removeClass("mobile_navbar_hover");
      $(".home_icon_container").stop().fadeIn(1000);
      $(".opened_menu").stop().removeClass("opened_menu_hover");
      $(".opened_menu").stop().css("opacity", "0");
      $(".menu").stop().css("opacity", "0");
      $(".hamburger_menu_container img").stop().fadeOut(1000);
      setTimeout(() => {
        $(".hamburger_menu_container img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/menu_burger.svg');
        $(".hamburger_menu_container img").stop().fadeIn();
      }, 500);
    }
    else {
      $('html').css("overflow-y", "hidden");
      $(".mobile_navbar_container").stop().addClass("mobile_navbar_hover");
      $(".home_icon_container").stop().fadeOut(1000);
      $(".opened_menu").stop().addClass("opened_menu_hover");
      $(".opened_menu").stop().show();
      setTimeout(() => {
        $(".opened_menu").stop().css("opacity", "1");
      }, 0);
      $(".menu").stop().show();
      setTimeout(() => {
        $(".menu").stop().css("opacity", "1");
      }, 0);
      $(".hamburger_menu_container img").stop().fadeOut(1000);
      setTimeout(() => {
        $(".hamburger_menu_container img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/close.svg');
        $(".hamburger_menu_container img").stop().fadeIn();
      }, 500);
    }
  });

  $('.resources_menu_inner_header').click(function () {
    $('.resources_submenu_container').slideToggle();
    if($(this).hasClass('expand')) {
      $(this).removeClass("expand");
    }
    else {
      $(this).addClass("expand");
    }
  });

  function handleFooterLoadAndResize() {
    var windowWidth = $(window).width();
    var pages = document.querySelectorAll(".mobile_nav_name, .mobile_submenu_name, .nav_name, .dropdown_nav_name");
    var currentPageUrl = window.location.href;
    for(var i=0; i<pages.length; i++) {
      if(currentPageUrl === pages[i].href) {
        pages[i].classList.add("active");
        if(windowWidth < 768) {
          pages[i].previousElementSibling?.classList.add("active");
        }
        else {
          pages[i].previousElementSibling?.classList.remove("active");
        }
      }
      else if(currentPageUrl === pages[i].dataset.link) {
        pages[i].classList.add("active");
        if(windowWidth < 768) {
          $(".resources_submenu").css("padding-left", "24px");
          pages[i].parentElement?.previousElementSibling?.classList.add("active");
        }
        else {
          pages[i].parentElement?.previousElementSibling?.classList.remove("active");
        }
      }
    }

    if(windowWidth < 768) {

    }
    else {
      if(event.type === "resize" || event.type === "change") {
        $('.resources_submenu_container').slideUp();
        $('.resources_menu_inner_header').removeClass("expand");
        $(".mobile_navbar_container").stop().removeClass("mobile_navbar_hover");
        $(".home_icon_container").stop().show();
        $(".opened_menu").stop().removeClass("opened_menu_hover");
        $(".opened_menu").stop().css("opacity", "0").stop().hide();
        $(".menu").stop().css("opacity", "0").stop().hide();
        $(".hamburger_menu_container img").stop().attr('src', '<?php echo $baseUrl; ?>assets/images/menu_burger.svg');
        $('html').css("overflow-y", "unset");
      }
    }
  }

  window.addEventListener("load", handleFooterLoadAndResize);
  window.addEventListener("resize", handleFooterLoadAndResize);
  screen.orientation.addEventListener("change", handleFooterLoadAndResize);

  let currentYear = new Date().getFullYear();
  document.getElementById("current_year").innerHTML = currentYear;
</script>