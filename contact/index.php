<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact UniKwan — Start Your UI UX Design Project</title>
    <meta name="description" content="Ready to improve your product's UX? UniKwan offers free consultations to help scope your design project. Book a 30-minute session with our team today.">
    <?php include '../header.php'; ?>
    <meta name="author" content="UniKwan Innovations" />
    <meta property='og:title' content='Contact UniKwan — Start Your UI UX Design Project' />
    <meta property='og:description' content="Ready to improve your product's UX? UniKwan offers free consultations to help scope your design project. Book a 30-minute session with our team today." />
    <meta property='og:url' content='<?php echo $baseUrl; ?>contact/' />
    <!-- <meta property='og:image' content='<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png' /> -->
    <!-- <meta property="og:image:secure_url" content="<?php echo $baseUrl; ?>assets/images/blog-post-hero-bg.png" /> -->
    <meta property="og:site_name" content="UniKwan Innovations">
    <meta property="og:type" content="Website">
  </head>
  <body>
    <!-- Begin Contact Hero Section -->
    <section class="contact_hero_section">
      <!-- Begin Navbar Section -->
      <?php include '../navbar.php'; ?>
      <!-- End Navbar Section -->

      <!-- Begin Contact Hero Content Section -->
      <div class="contact_hero pl_pr">
        <div class="contact_hero_content_container">
          <h1 class="heading_wls_60 fw_700 color_white contact_title">Let's connect</h1>
          <p class="content_20 ff_satoshi fw_400 color_half_white contact_subtext">
            Share with us your challenges and aspirations. Together, we can craft design 
            and development solutions that make a difference.
          </p>
          <div class="locator">
            <img src="<?php echo $baseUrl; ?>assets/images/locator.png" alt="location" width="471px" height="201px" />
            <p class="sub_heading_20 ff_satoshi fw_400 color_white remote_text">
              Working globally, <br />building a connected future.
            </p>
          </div>
        </div>
        <!-- Begin Form Section -->
        <form method="post" action="" name="contactForm" autocomplete="off" id="contact_us_form">
          <div class="form_container">
            <div class="contact_form">
              <p class="sub_heading_20 ff_satoshi fw_400 color_light_black form_text">
                We'd love to hear from you. Get in touch with us today to discuss your needs and goals.
              </p>
              <div class="margin_top_20">
                <input type="text" name="name" id="name" class="input-field" placeholder="Name*" onkeypress="return isTextKey(event)">
                <span class="form_error fw_400 ff_satoshi" id="nameErr"></span>
              </div>
              <div class="margin_top_20">
                <input class="input-field" type="text" name="email" id="email" placeholder="Email*">
                <span class="form_error" id="emailErr"></span>
              </div>
              <div class="margin_top_20">
                <input class="input-field" type="text" name="companyname" id="company_name" placeholder="Company Name">
                <span class="form_error" id="companynameErr"></span>
              </div>
              <div class="margin_top_20 custom_dropdown_position">
                <div class="custom-dropdown">
                  <div id="topic" class="selected caret-rotate input-field ff_satoshi fw_500 content_wls_16">What you like to discuss*</div>
                  <ul class="options">
                    <li class="ff_satoshi fw_500 color_lighter_grey content_wls_16" data-value="Product strategy & growth design">
                      Product strategy & growth design
                    </li>
                    <li class="ff_satoshi fw_500 color_lighter_grey content_wls_16" data-value="User Experience Design">
                      User Experience Design
                    </li>
                    <li class="ff_satoshi fw_500 color_lighter_grey content_wls_16" data-value="AI UX design">
                      AI UX design
                    </li>
                  </ul>
                  <input hidden type="text" id="selected-value" name="topic">
                </div>
                <span class="form_error" id="topicErr"></span>
              </div>
              <div class="margin_top_20">
                <input class="input-field phone" type="text" name="phone" id="mobile" placeholder="Phone number"
                  maxlength="10"
                  onkeypress="return isNumberKey(event)"
                >
              </div>
              <div class="recaptcha_container margin_top_20">
                <label class="ff_satoshi fw_400 color_light_black recaptcha_label" id="recaptcha_label">
                  Please check the box below to proceed.
                </label>
                <div class="g-recaptcha" data-sitekey="6LduDQkqAAAAAFyExHITLI2gCviJo0ICCDkMKHz6"></div>
              </div>
              <button type="button" class="contact_button_container content_20 ff_satoshi color_half_white" onclick="submitContactForm()" id="contact_btn">
                <strong class="content_20 fw_500 color_white btn_txt">Send Message</strong>
                <img class="btn_arrow" src="<?php echo $baseUrl; ?>assets/images/right_sided_arrow.svg" alt="right arrow" width="17px" height="17px" />
                <span class="contact_loader"></span>
              </button>
            </div>
            <div class="thankyou_screen">
              <div class="contact_lottie">  
                <dotlottie-player src="https://lottie.host/f695c6a5-f087-4f5b-b02e-d31f32e0aada/D3v8MuNlGb.lottie" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></dotlottie-player>
              </div>
              <h3 class="sub_heading_34 fw_500 color_black success_title margin_top_32">
                Sent Successfully
              </h3>
              <p class="content_20 color_light_black ff_satoshi fw_400 success_subtext">
                Thank you for connecting with us. Our team will contact you soon
              </p>
            </div>
          </div>
        </form>
        <!-- End Form Section -->
      </div>
      <!-- End Contact Hero Content Section -->
    </section>
    <!-- End Contact Hero Section -->

    <!-- Begin Footer Section -->
    <?php include '../contact-footer.php'; ?>
    <!-- End Footer Section -->
  </body>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet">
  <script src="<?php echo $baseUrl; ?>assets/js/ajaxForm.js"></script>
  <script src="<?php echo $baseUrl; ?>assets/js/intlTelInput.js"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

  <script>
    $(".phone").intlTelInput({
      initialCountry: "in",
      separateDialCode: !0,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    });

    function isTextKey(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if(charCode > 31 && (charCode < 48 || charCode > 57)) {
        return true;
      }
      else {
        return false;
      }
    }

    function isNumberKey(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if(event.keyCode === 43 || event.keyCode === 32) {
        return true;
      }
      else if(charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
      else {
        return true;
      }
    }

    function submitContactForm() {
      var isValidated = validateContactForm();
      if(!isValidated) {
        return false;
      }
      var dialCode = $("#mobile").intlTelInput("getSelectedCountryData").dialCode;
      document.getElementById("contact_btn").disabled = true;
      $('.btn_txt, .btn_arrow').hide();
      $('.contact_loader').css("display", "block");
      var base_url = '<?php echo $baseUrl; ?>contact/';
      var tmpRequest = new Object();
      tmpRequest.formType = "Contact Form";
      tmpRequest.contactName = $("#name").val();
      tmpRequest.contactCompanyName = $("#company_name").val();
      tmpRequest.contactTopic = $("#selected-value").val();
      tmpRequest.contactEmail = $("#email").val();
      tmpRequest.contactMobile = "+" + dialCode + " " + $("#mobile").val();
      var tmpUrl = base_url + 'send_contact_form.php';
      var tmpResponse = httpRequest("POST", tmpUrl, tmpRequest, true);
    }

    function validateContactForm() {
      var flag = true;
      var nameVal = /^[a-zA-Z -]+$/;
      var emailVal = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var recaptchaVal = grecaptcha.getResponse();

      if(document.contactForm.name.value == "") {
        document.getElementById("name").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('nameErr').innerHTML = "Please Enter Your Name";
        document.contactForm.name.focus();
        flag = false;
      }
      else if(!nameVal.test(document.contactForm.name.value)) {
        document.getElementById("name").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('nameErr').innerHTML = "Not a Valid Name";
        document.contactForm.name.focus();
        flag = false;
      }
      else {
        document.getElementById("name").style.borderBottom = "";
        document.getElementById('nameErr').innerHTML = "";
      }

      if(document.contactForm.email.value == "") {
        document.getElementById("email").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('emailErr').innerHTML = "Please Enter Your Email Id";
        document.contactForm.email.focus();
        flag = false;
      }
      else if(!emailVal.test(document.contactForm.email.value)) {
        document.getElementById("email").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('emailErr').innerHTML = "Not a Valid Email Id";
        document.contactForm.email.focus();
        flag = false;
      }
      else {
        document.getElementById("email").style.borderBottom = "";
        document.getElementById('emailErr').innerHTML = "";
      }

      if(document.contactForm.topic.value == "") {
        document.getElementById("topic").style.borderBottom = "1px solid #FFD3D3";
        document.getElementById('topicErr').innerHTML = "Please Choose One Option";
        document.contactForm.topic.focus();
        flag = false;
      }
      else {
        document.getElementById("topic").style.borderBottom = "";
        document.getElementById('topicErr').innerHTML = "";
      }

      if(recaptchaVal.length == 0) {
        document.getElementById('recaptcha_label').style.color = "red";
        flag = false;
      }
      else {
        document.getElementById('recaptcha_label').style.color = "#09162C";
      }
      return flag;
    }

    const selected = document.querySelector('.custom-dropdown .selected');
    const options = document.querySelector('.options');
    const selectedValueInput = document.getElementById('selected-value');

    selected.addEventListener('click', function() {    
      if(options.style.opacity === '1') {
        options.style.opacity = '0';
        setTimeout(() => {
          options.style.zIndex = '0';
        }, 200);
      }
      else {
        options.style.zIndex = '2001';
        setTimeout(() => {
          options.style.opacity = '1';  
        }, 200);
      }
      var dropdown = this.parentElement;
      dropdown.classList.toggle('open');
    });

    options.addEventListener('click', function(e) {
      const target = e.target;
      if(target.tagName === 'LI') {
        selected.textContent = target.textContent;
        selectedValueInput.value = target.getAttribute('data-value');
        options.style.opacity = '0';
        setTimeout(() => {
          options.style.zIndex = '0';
        }, 200);
        $(".custom-dropdown").removeClass("open");
      } 
    });
    
    document.addEventListener('click', function(e) {
      if(!selected.contains(e.target) && !options.contains(e.target)) {
        options.style.opacity = '0';
        setTimeout(() => {
          options.style.zIndex = '0';
        }, 200);
        $(".custom-dropdown").removeClass("open");
      }
    });
  </script>
</html>
