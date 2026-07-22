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
        //$(".newsletter_message").fadeIn();
			  document.getElementById("article_brochure_btn").disabled = false;
				$(".contact_loader").hide();
        $(".btn_txt, .btn_arrow").show();
        $("#article_brochure_form")[0].reset();
        setTimeout(() => {
          //$(".newsletter_message").hide();
          //window.location.href = "http://localhost/unikwan24/";
        }, 3000);
			}
		}
	});
	return tmpResponse;
}