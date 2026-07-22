<div class="newsletter_container">
  <form method="post" action="" name="newsletterForm" onSubmit="return false;" autocomplete="off" id="newsletter_form" class="newsletter_form_container">
    <input type="text" placeholder="Enter your email here" name="email" id="email" class="ff_satoshi content_20 fw_500 color_white newsletter_input" />
    <span class="newsletter_error" id="emailErr"></span>
    <button type="button" class="newsletter_cta_container" id="newsletter_cta_container" onclick="submitNewsletterForm()">
      <p class="ff_satoshi content_wls_16 fw_700 color_white newsletter_cta_text">Notify me!</p>
      <span class="newsletter_loader"></span>
    </button>
  </form>
  <p class="ff_satoshi content_wls_16 fw_400 newsletter_content">
    Be the first to know! Get notified about our<br /> upcoming UX templates launch.
  </p>
  <p class="sub_heading_34 fw_700 newsletter_message">
    Thank You For Subscribing!
  </p>
</div>

<script src="<?php echo $baseUrl; ?>assets/js/ajaxNewsletterForm.js"></script>

<script>
  var tmpCurrentUrl;
  var newsletterEmailTemplate;
   window.addEventListener("load", function() {
    tmpCurrentUrl = window.location.href;
    if(tmpCurrentUrl === "<?php echo $baseUrl; ?>success-stories/") {
      newsletterEmailTemplate = 'success_stories_email_template.php';
    }
    else {
      newsletterEmailTemplate = 'templates_eboks_email_template.php';
    }
  });

  function submitNewsletterForm() {
    var isValidated = validateNewsletterForm();
    if(!isValidated) {
      return false;
    }

    document.getElementById("newsletter_cta_container").disabled = true;
    $(".newsletter_cta_text").hide();
    $('.newsletter_loader').css("display", "block");
    var base_url = '<?php echo $baseUrl; ?>newsletter/';
    var tmpRequest = new Object();
    tmpRequest.formType = "Newsletter Form";
    tmpRequest.newsletterEmail = $("#email").val();
    var tmpUrl = base_url + newsletterEmailTemplate;
    var tmpResponse = httpRequest("POST", tmpUrl, tmpRequest, true);
  }

  function validateNewsletterForm() {
    var flag = true;
    var emailVal = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(document.newsletterForm.email.value == "") {
      document.getElementById("email").style.border = "1px solid #FF5F5F";
      document.getElementById('emailErr').innerHTML = "Please Enter Your Email Id";
      document.newsletterForm.email.focus();
      flag = false;
    }
    else if(!emailVal.test(document.newsletterForm.email.value)) {
      document.getElementById("email").style.border = "1px solid #FF5F5F";
      document.getElementById('emailErr').innerHTML = "Not a Valid Email Id";
      document.newsletterForm.email.focus();
      flag = false;
    }
    else {
      document.getElementById("email").style.border = "";
      document.getElementById('emailErr').innerHTML = "";
    }
    return flag;
  }
</script>