<div class="cookie_container">
  <div id="cookieLottie" class="cookie_lottie_container"></div>
  <h4 class="ff_satoshi sub_heading_wls_20 fw_700 color_light_black cookie_heading">
    Cookie Consent
  </h4>
  <p class="ff_satoshi content_wls_16 fw_400 color_light_black cookie_content">
    This website use cookies to help you have a superior and more relevant
    browsing experience on the website.
  </p>
  <div class="cookie_buttons_container">
    <div class="cookie_cta cookie_accept_button" onclick='acceptCookie()'>
      <p class="ff_satoshi content_wls_16 fw_500 color_white">Accept</p>
    </div>
    <div class="cookie_cta cookie_decline_button" onclick='declineCookie()'>
      <p class="ff_satoshi content_wls_16 fw_500 color_lighter_grey">Decline</p>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.8.1/lottie.min.js"></script>

<script>
  const COOKIE_LOTTIE_PATH = "https://lottie.host/75991860-fe90-4eae-bd86-6dd23f3d5291/6EsDVHtfBc.json";

  let cookieAnimation = lottie.loadAnimation({
    container: document.getElementById("cookieLottie"),
    path: COOKIE_LOTTIE_PATH,
    autoplay: true,
    loop: false,
    renderer: "svg",
  });

  function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while(c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if(c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function acceptCookie() {
    let user = getCookie("unikwan-innovations-cookie-consent");
    if(user != "") {
      $(".cookie_container").fadeOut(500);
    } else {
      setCookie("unikwan-innovations-cookie-consent", "cookie-consent-accepted", 180);
      checkCookie();
    }
  }

  function declineCookie() {
    let user = getCookie("unikwan-innovations-cookie-consent");
    if(user != "") {
      $(".cookie_container").fadeOut(500);
    } else {
      setCookie("unikwan-innovations-cookie-consent", "cookie-consent-rejected", 30);
      checkCookie();
    }
  }

  function checkCookie() {
    let user = getCookie("unikwan-innovations-cookie-consent");
    if(user != "") {
      $(".cookie_container").fadeOut(500);
    } else {
      $(".cookie_container").fadeIn(500);
    }
  }

  cookieAnimation.addEventListener("DOMLoaded", () => {
    checkCookie();
  });
</script>