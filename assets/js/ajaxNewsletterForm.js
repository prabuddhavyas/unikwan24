function httpRequest(requestType, requestUrl, requestData, asyncRequest = false) {
	var tmpResponse = new Object();
	$.ajax({
	  async: asyncRequest,
		url: requestUrl,
		method: requestType,
		headers: {
			"Content-Type": "application/json",
		},
		data: JSON.stringify(requestData),
		success: function (response) {
    	tmpResponse = JSON.parse(response).success;
			if(tmpResponse == true) {
        $(".newsletter_form_container").css({"opacity": "0", "pointer-events": "none"});
        $(".newsletter_content").css({"opacity": "0", "pointer-events": "none"});
        $(".newsletter_message").fadeIn();
			  document.getElementById("newsletter_cta_container").disabled = false;
				$(".newsletter_loader").hide();
        $(".newsletter_cta_text").show();
        $("#newsletter_form")[0].reset();
        setTimeout(() => {
          $(".newsletter_message").hide();
          $(".newsletter_form_container").css({"opacity": "1", "pointer-events": "unset"});
          $(".newsletter_content").css({"opacity": "1", "pointer-events": "unset"});
          window.location.href = "http://localhost/unikwan24/";
        }, 3000);
			}
		}
	});
	return tmpResponse;
}