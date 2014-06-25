$(document).ready(function() {
	var $name = '#name';
	var $email = '#email';
	var $message = '#message';
	

	var submitBtn = function() {
		$($button_submit).click(function(e){			
			var nameInput = $($name).val();
			var emailInput = $($email).val();
			var subjectInput = $($subject).val();
			var messageInput = $($message).val();
			
			var dataString = $($ajax_form).serialize();
			var urlString = 'xhr/contactform.php';
			var successMsg = '<div id="thankyou_message"></div>';
			var errorMsg = '<div id="error_message">'
							+'We have recieved an error and your message has <u>not</u> been sent<br />'
							+'Please try again in <strong><em><span style="color: #47c7f4">7</span></em></strong> second(s).</p>'
							+'</div>';
			var contactForm = '<p>CONTACT FOR VARIABLE</p>';
			
			if(validName == true && validEmail == true && validSubject == true && validMessage == true) {
				//console.log('pass validation');
				$.ajax({
					type: 'POST',
					url: urlString,
					data: dataString,
					success: function(data) {
						//console.log('Inside the ajax success function: '+data);
						$($contact_form).html(successMsg);
					}, 
					error: function() {
						//console.log('error on ajax.');
						$($contact_form).html(errorMsg);
						var sec = $('#error_message span').text()
						var timer = setInterval(function() { 
						   $('#error_message span').text(--sec);
						   if (sec == 0) {
								clearInterval(timer);
								$($contact_form).html(contactForm);
								submitBtn();
						   } 
						}, 1000);
					}
				});
				
			} else {
				//console.log('If/Else statement error');
			}
			e.preventDefault();
		});
	}

	//submitBtn();
	console.log('Hello');
});