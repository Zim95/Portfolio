$(document).ready(function(){
	function field_reset(){
		$("#email-code-input").val("");
		$("#workdef-code-input").val("");
		$("#skillsreq-code-input").val("");
	}
	var confirm_code = 0;
	$("#hire-form-submit").click(function(){
		var email = $("#email-code-input").val(); 
		var workdef = $("#workdef-code-input").val();
		var skillsreq = $("#skillsreq-code-input").val();
		
		var email_pattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var message_pattern = /^(\S)+((.)+)?$/;
		var confirm_pattern = /^\d{4}$/;
		
		$("#hire-modal-header-h2").html("Please enter your credentials.");
		
		if(email!=""){
			if(email_pattern.test(email)){
				if(workdef!=""){
					if(message_pattern.test(workdef)){
						if(skillsreq!=""){
							if(message_pattern.test(skillsreq)){
								//alert('Good job');
								
								//change modal status
								$("#hire-modal-header-h2").html("Your Message has been sent to the server");
								field_reset();
								$("#email-code").focus();
								
								//use ajax function here to contact.php
								$.ajax({
									type:'POST',
									url:'includes/hire.form.php',
									data:{email:email,workdef:workdef,skillsreq:skillsreq},
									success:function(feedback){
										//alert(feedback);
										if(confirm_pattern.test(feedback)){
											$("#hire-modal-header-h1").html("Please enter confirmation code");
											$("#hire-modal-header-h2").html("A confirmation code has been sent to your email. You will not have to repeat this step the next time you send a message with this email");
											field_reset();
											
											$("#hire-modal-body-three").css("display","none");
											$("#hire-modal-body-one").css("display","none");
											$("#hire-modal-body-two").css("display","block");
											
											confirm_code = feedback;
											
											/*Now when the confirmcode form is submitted then it will check confirm code. If it matches then then an ajax call to contact.insert.php will be made. Else if it is zero or just else then return false*/
											
											/*now change modal body to body one which contains confirm code submitter*/
											$("#hire-confirm-submit").click(function(){
												var code = $("#hire-confirm-code-input").val();
												if(code == confirm_code){
													//alert('success');
													$.ajax({
														type:'POST',
														url:'includes/hire.insert.php',
														data:{email:email,workdef:workdef,skillsreq:skillsreq},
														success:function(feedback){
															if(feedback == 'success'){
																/*change modal status*/
																$("#hire-modal-header-h1").html("Thank you for hiring.");
																$("#hire-modal-header-h2").html("");
																$("#hire-modal-body-one").css("display","none");
																$("#hire-modal-body-two").css("display","none");
																$('#hire-modal-body-three').css("display","block");
																$("#hire-modal-dp3-h2").html("Your message has been sent. I will contact you shortly.");
																field_reset();
															}else if(feedback == 'problem'){
																/*change modal status*/
																$("#hire-modal-header-h1").html("Sorry");
																$("#hire-modal-header-h2").html("");
																$("#hire-modal-body-one").css("display","none");
																$("#hire-modal-body-two").css("display","none");
																$('#hire-modal-body-three').css("display","block");
																$("#contact-modal-dp3-h2").html("Your message could not be sent to the database.");
																field_reset();
															}
														}
													});
											});
											
										}
										else if(feedback == 'Found')
										{	
											$.ajax({
												type:'POST',
												url:'includes/hire.insert.php',
												data:{email:email,workdef:workdef,skillsreq:skillsreq},
												success: function(feedback){
													if(feedback == 'success'){
														$("#hire-modal-header-h1").html("Thank you for contacting.");
														$("#hire-modal-body-one").css("display","none");
														$("#hire-modal-body-two").css("display","none");
														$('#hire-modal-body-three').css("display","block");
														$("#hire-modal-dp3-h2").html("Your message has been successfully sent. I will contact you shortly.");
														field_reset();
													}else if(feedback == 'problem'){
														$("#hire-modal-header-h1").html("Something went wrong.");
														$("#hire-modal-body-one").css("display","none");
														$("#hire-modal-body-two").css("display","none");
														$('#hire-modal-body-three').css("display","block");
														$('#hire-modal-body-three').css("display","block");
														$("#hire-modal-dp3-h2").html("Please send your message again.");
														field_reset();
													}
												}
											});
										}else{
											
											/*change modal status*/
											$("#hire-modal-body-three").css("display","block");
											$("#hire-modal-body-one").css("display","none");
											$("#hire-modal-body-two").css("display","none");
											
											$("#hire-modal-header-h1").html("Could not send message");
											$("#hire-modal-header-h2").html("No connection");
											$("#hire-modal-dp3-h2").html("Something went wrong please retry sending the message.");
											
										}
									}
								});
								
							}else{
								$("#hire-modal-header-h2").html("Skills field should not begin with a blank space");
								field_reset();
								$("#skills-code-input").focus();
							}
						}else{
							$("#hire-modal-header-h2").html("Please fill in the skills field");
							field_reset();
							$("#skillsreq-code-input").focus();
						}
					}else{
						$("#hire-modal-header-h2").html("Work field should not begin with a blank space");
						field_reset();
						$("#workdef-code-input").focus();
					}
				}else{
					$("#hire-modal-header-h2").html("Please fill in the work field");
					field_reset();
					$("#workdef-code-input").focus();
				}
			}else{
				$("#hire-modal-header-h2").html("Please fill in valid email");
				field_reset();
				$("#email-code-input").focus();
			}
		}else{
			$("#hire-modal-header-h2").html("Please fill in the email field");
			field_reset();
			$("#email-code-input").focus();
		}
	});
});