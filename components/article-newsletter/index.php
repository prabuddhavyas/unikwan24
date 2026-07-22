<div class="article_newsletter_container">
  <div class="article_newsletter_flex">
    <img src="<?php echo $baseUrl; ?>assets/images/article-newsletter.png" alt="article newsletter" width="353px"
      height="339px" class="article_newsletter_image" />
    <div class="article_newsletter_content">
      <h3 class="sub_heading_24 fw_700 color_grey article_newsletter_title">
        Get Our Latest Articles
      </h3>
      <p class="ff_satoshi content_20 fw_400 color_dark_black article_newsletter_description">
        Subscribe to our newsletter below to get amazing new articles,
        design resources, and exclusive insights straight to your inbox!
      </p>
      <form method="post" action="" name="articleNewsletterForm" autocomplete="off" id="article_newsletter_form">
        <div class="">
          <input class="input-field" type="text" name="articleNewsletterEmail" id="article-newsletter-email"
            placeholder="Enter your email*">
          <span class="form_error" id="newsletterEmailErr"></span>
        </div>
        <button type="button" class="contact_button_container content_20 ff_satoshi color_half_white"
          onclick="submitArticleNewsletter()" id="article_newsletter_btn">
          <strong class="content_20 fw_500 color_white btn_txt">Get Updates</strong>
          <img class="btn_arrow" src="<?php echo $baseUrl; ?>assets/images/right_sided_arrow.svg" alt="right arrow"
            width="17px" height="17px" />
          <span class="contact_loader"></span>
        </button>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo $baseUrl; ?>assets/js/ajaxArticleNewsletterForm.js"></script>

<script>
  function submitArticleNewsletter() {
    var isValidated = validateArticleNewsletterForm();
    if(!isValidated) {
      return false;
    }
    document.getElementById("article_newsletter_btn").disabled = true;
    $('.btn_txt, .btn_arrow').hide();
    $('.contact_loader').css("display", "block");
    var base_url = '<?php echo $baseUrl; ?>components/article-newsletter/';
    var tmpRequest = new Object();
    tmpRequest.formType = "Article Newsletter Form";
    tmpRequest.articleNewsletterEmail = $("#article-newsletter-email").val();
    var tmpUrl = base_url + 'article_newsletter_email_template.php';
    var tmpResponse = httpRequest("POST", tmpUrl, tmpRequest, true);
  }

  function validateArticleNewsletterForm() {
    var flag = true;
    var emailVal = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(document.articleNewsletterForm.articleNewsletterEmail.value == "") {
      document.getElementById("article-newsletter-email").style.borderBottom = "1px solid #FFD3D3";
      document.getElementById('newsletterEmailErr').innerHTML = "Please Enter Your Email Id";
      document.articleNewsletterForm.articleNewsletterEmail.focus();
      flag = false;
    } else if(!emailVal.test(document.articleNewsletterForm.articleNewsletterEmail.value)) {
      document.getElementById("article-newsletter-email").style.borderBottom = "1px solid #FFD3D3";
      document.getElementById('newsletterEmailErr').innerHTML = "Not a Valid Email Id";
      document.articleNewsletterForm.articleNewsletterEmail.focus();
      flag = false;
    } else {
      document.getElementById("article-newsletter-email").style.borderBottom = "";
      document.getElementById('newsletterEmailErr').innerHTML = "";
    }
    return flag;
  }
</script>