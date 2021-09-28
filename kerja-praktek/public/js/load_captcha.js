$(document).ready(function(){
	$("#reloadCaptcha").click(function(){
		var captchaImage = $('#captcha').attr('src');	
		captchaImage = captchaImage.substring(0,captchaImage.lastIndexOf("?"));
		captchaImage = captchaImage+"?rand="+Math.random()*1000;
		$('#captcha').attr('src', captchaImage);
	});
});