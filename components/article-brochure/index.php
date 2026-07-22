<div id="article_brochure_modal" class="article_brochure_modal">
  <div class="article_brochure_container">
    <div class="brochure_close_icon_container">
      <img class="brochure_close_icon" src="<?php echo $baseUrl; ?>assets/images/close-icon.png" alt="close icon"
        width="27px" height="27px" />
    </div>
    <div class="article_brochure_flex">
      <div class="article_brochure_content">
        <h3 class="sub_heading_24 fw_700 color_grey article_brochure_title">
          Prospective Financial Product Design: Essential Strategies for 2025 and Beyond
        </h3>
        <p class="ff_satoshi content_wls_16 fw_400 color_grey article_brochure_description">
          Get Our Free Whitepaper on Essential strategies for building next-generation financial products
        </p>
        <form method="post" action="" name="articlebrochureForm" autocomplete="off" id="article_brochure_form">
          <div class="brochure_input_container">
            <input class="input-field" type="text" name="articlebrochureEmail" id="article-brochure-email"
              placeholder="Enter your email*">
            <span class="form_error" id="brochureEmailErr"></span>
          </div>
          <button type="button" class="contact_button_container content_20 ff_satoshi color_half_white"
            onclick="submitArticlebrochure()" id="article_brochure_btn">
            <strong class="content_20 fw_500 color_white btn_txt">Start Reading</strong>
            <img class="btn_arrow" src="<?php echo $baseUrl; ?>assets/images/right_sided_arrow.svg" alt="right arrow"
              width="17px" height="17px" />
            <span class="contact_loader"></span>
          </button>
          <p class="ff_satoshi content_14 fw_400 color_grey brochure_disclamier">
            This info will be used to deliver this content, plus other similar content.
            <a href="<?php echo $baseUrl; ?>privacy-policy">Privacy Policy</a>
          </p>
        </form>
      </div>
      <img src="<?php echo $baseUrl; ?>assets/images/article-brochure.png" alt="article brochure" width="416px"
        height="403px" class="article_brochure_image" />
    </div>
  </div>
</div>

<script src="<?php echo $baseUrl; ?>assets/js/ajaxArticleBrochureForm.js"></script>

<script>
  var modal = document.getElementById("article_brochure_modal");
  var modalClose = document.getElementsByClassName("brochure_close_icon")[0];

  setTimeout(() => {
    $("html").addClass("modal-open");
    $("body").addClass("modal-open");
    modal.style.display = "block";
  }, 15000);

  modalClose.onclick = function() {
    modal.style.display = "none";
    $("html").removeClass("modal-open");
    $("body").removeClass("modal-open");
    document.getElementById("article-brochure-email").style.borderBottom = "";
    document.getElementById('brochureEmailErr').innerHTML = "";
  }

  window.onclick = function(event) {
    if(event.target == modal) {
      modal.style.display = "none";
      $("html").removeClass("modal-open");
      $("body").removeClass("modal-open");
      document.getElementById("article-brochure-email").style.borderBottom = "";
      document.getElementById('brochureEmailErr').innerHTML = "";
    }
  }

  function submitArticlebrochure() {
    var isValidated = validateArticlebrochureForm();
    if (!isValidated) {
      return false;
    }
    document.getElementById("article_brochure_btn").disabled = true;
    $('.btn_txt, .btn_arrow').hide();
    $('.contact_loader').css("display", "block");
    var base_url = '<?php echo $baseUrl; ?>components/article-brochure/';
    var tmpRequest = new Object();
    tmpRequest.formType = "Article Brochure Form";
    tmpRequest.articlebrochureEmail = $("#article-brochure-email").val();
    var tmpUrl = base_url + 'article_brochure_email_template.php';
    var tmpResponse = httpRequest("POST", tmpUrl, tmpRequest, true);
  }

  function validateArticlebrochureForm() {
    var flag = true;
    var emailVal = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (document.articlebrochureForm.articlebrochureEmail.value == "") {
      document.getElementById("article-brochure-email").style.borderBottom = "1px solid #FFD3D3";
      document.getElementById('brochureEmailErr').innerHTML = "Please Enter Your Email Id";
      document.articlebrochureForm.articlebrochureEmail.focus();
      flag = false;
    } else if (!emailVal.test(document.articlebrochureForm.articlebrochureEmail.value)) {
      document.getElementById("article-brochure-email").style.borderBottom = "1px solid #FFD3D3";
      document.getElementById('brochureEmailErr').innerHTML = "Not a Valid Email Id";
      document.articlebrochureForm.articlebrochureEmail.focus();
      flag = false;
    } else {
      document.getElementById("article-brochure-email").style.borderBottom = "";
      document.getElementById('brochureEmailErr').innerHTML = "";
    }
    return flag;
  }
</script>