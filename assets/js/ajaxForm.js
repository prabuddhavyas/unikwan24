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
				$('.contact_form').hide();
      	$('.thankyou_screen').show();
				$(".custom-dropdown").removeClass("open");
			  document.getElementById("contact_btn").disabled = false;
				$('.contact_loader').hide();
				$('.btn_txt, .btn_arrow').show();
				$('#contact_us_form')[0].reset();
      	document.getElementById('selected-value').value = '';
      	document.getElementById('topic').textContent = 'What you like to discuss*';
        grecaptcha.reset();
				setTimeout(()=>{
          $('.thankyou_screen').hide();
					$('.contact_form').show();
				}, 3000);
			}
		}
	});
	return tmpResponse;
}