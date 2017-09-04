$(document).ready(function(){
	var confirm_code = 0;
	$("#contact-send").click(function(){
		var name = $("#contact-name").val();
		var email = $("#contact-email").val();
		var message= $("#contact-message").val();
		
		var name_pattern = /^(\S)+((.)+)?$/;
		var email_pattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
		var message_pattern = /^(\S)+((.)+)?$/;
		var confirm_pattern = /^\d{4}$/;
		
		function field_reset(){
			$("#contact-name").val("");
			$("#contact-email").val("");
			$("#contact-message").val("");
		}
		
		function modal_reset(){
			$('#modal-body-one').css("display","none");
			$('#modal-body-two').css("display","none");
			$('#modal-body-three').css("display","none");
		}
		
		if(name!=""){
			if(name_pattern.test(name)){
				if(email!=""){
					if(email_pattern.test(email)){
						if(message!=""){
							if(message_pattern.test(message)){
								//alert('Good job');
								
								//change modal status
								$("#contact-modal-header-h1").html("Your Message has been sent to the server");
								modal_reset();
								$('#modal-body-three').css("display","block");
								$("#contact-modal-dp3-h2").html("Please wait...");
								field_reset();
								$("#contact-name").focus();
								
								//use ajax function here to contact.php
								$.ajax({
									type:'POST',
									url:'includes/contact.form.php',
									data:{name:name,email:email,message:message},
									success:function(feedback_data){
										//alert(data);
										if(confirm_pattern.test(feedback_data)){
											$("#contact-modal-header-h1").html("Please enter confirmation code");
											modal_reset();
											$('#modal-body-one').css("display","block");
											$("#contact-modal-header-h2").html("A confirmation code has been sent to your email. You will not have to repeat this step the next time you send a message with this email");
											field_reset();
											
											confirm_code = feedback_data;
											
											/*Now when the confirmcode form is submitted then it will check confirm code. If it matches then then an ajax call to contact.insert.php will be made. Else if it is zero or just else then return false*/
											$("#confirm-submit").click(function(){
												var code = $("#confirm-code-input").val();
												if(code == confirm_code){
													//alert('success');
													$.ajax({
														type:'POST',
														url:'includes/contact.insert.php',
														data:{name:name,email:email,message:message},
														success:function(feedback){
															if(feedback == 'success'){
																/*change modal status*/
																$("#contact-modal-header-h1").html("Thank you for contacting.");
																$("#contact-modal-header-h2").html("");
																modal_reset();
																$('#modal-body-three').css("display","block");
																$("#contact-modal-dp3-h2").html("Your message has been sent. I will contact you shortly.");
																field_reset();
															}else if(feedback == 'problem'){
																/*change modal status*/
																$("#contact-modal-header-h1").html("Sorry");
																$("#contact-modal-header-h2").html("");
																modal_reset();
																$('#modal-body-three').css("display","block");
																$("#contact-modal-dp3-h2").html("Your message could not be sent to the database.");
																field_reset();
															}
														}
													});
										
												}else{
													//alert('problem');
													$("#contact-modal-header-h1").html("Sorry");
													$("#contact-modal-header-h2").html("");
													modal_reset();
													$('#modal-body-three').css("display","block");
													$("#contact-modal-dp3-h2").html("Your message could not be sent to the database.");
													field_reset();
												}
											});
											
										}
										else if(feedback_data == 'Found')
										{
											//alert("found");
											$.ajax({
												type:'POST',
												url:'includes/contact.insert.php',
												data:{name:name,email:email,message:message},
												success: function(feedback){
													if(feedback == 'success'){
														$("#contact-modal-header-h1").html("Thank you for contacting.");
														$("#contact-modal-header-h2").html("");
														modal_reset();
														$('#modal-body-three').css("display","block");
														$("#contact-modal-dp3-h2").html("Your message has been successfully sent. I will contact you shortly.");
														field_reset();
													}else if(feedback == 'failure'){
														$("#contact-modal-header-h1").html("Something went wrong.");
														$("#contact-modal-header-h2").html("");
														modal_reset();
														$('#modal-body-three').css("display","block");
														$("#contact-modal-dp3-h2").html("Please send your message again.");
														field_reset();
													}
												}
											});
										}else{
											$("#contact-modal-header-h1").html("Could not send message");
											modal_reset();
											$('#modal-body-three').css("display","block");
											$("#contact-modal-dp3-h2").html("Somemthing went wrong please retry sending the message.");
											field_reset();
										}
									}
								});
							}else{
								$("#contact-modal-header-h1").html("Please fill in valid data");
								modal_reset();
								$('#modal-body-three').css("display","block");
								$("#contact-modal-dp3-h2").html("Message should not begin with a blankspace");
								field_reset();
								$("#contact-message").focus();
							}
						}else{
							$("#contact-modal-header-h1").html("Please fill in the complete form");
							modal_reset();
							$('#modal-body-three').css("display","block");
							$("#contact-modal-dp3-h2").html("Please fill in the message field");
							field_reset();
							$("#contact-message").focus();
						}
					}else{
						$("#contact-modal-header-h1").html("Please fill in valid data");
						modal_reset();
						$('#modal-body-three').css("display","block");
						$("#contact-modal-dp3-h2").html("Please fill in a valid email");
						field_reset();
						$("#contact-email").focus();
					}
				}else{
					$("#contact-modal-header-h1").html("Please fill in the complete form");
					modal_reset();
					$('#modal-body-three').css("display","block");
					$("#contact-modal-dp3-h2").html("Please fill in the email field");
					field_reset();
					$("#contact-email").focus();
				}
			}else{
				$("#contact-modal-header-h1").html("Please fill in valid data");
				modal_reset();
				$('#modal-body-three').css("display","block");
				$("#contact-modal-dp3-h2").html("Your name should not begin with a blankspace.");
				field_reset();
				$("#contact-name").focus();
			}
		}else{
			$("#contact-modal-header-h1").html("Please fill in the complete form");
			modal_reset();
			$('#modal-body-three').css("display","block");
			$("#contact-modal-dp3-h2").html("Please fill in the name field");
			field_reset();
			$("#contact-name").focus();
		}
	});
	
	//confirm form submition 
	/*$("#contact-modal-form").submit(function(){
		//take value check pattern and then validate with confirm_code
		var cc = $("#confirm-code-input").val();
		if(cc == confirm_code){
			//message confirmed.call ajax to contact.insert.php
			$.ajax(
				type: 'POST',
				url: 'includes/contact.insert.php',
				data:{name:name,email:email,message:message},
				success:function(feedback){
					if(feedback == 1){
						$("#contact-modal-header-h1").html("Thank you for contacting.");
						modal_reset();
						$('#modal-body-three').css("display","block");
						$("#contact-modal-dp3-h2").html("Your message has been successfully sent. I will contact you shortly.");
						field_reset();
					}else if(feedback == 0){
						$("#contact-modal-header-h1").html("Something went wrong.");
						modal_reset();
						$('#modal-body-three').css("display","block");
						$("#contact-modal-dp3-h2").html("Please send your message again.");
						field_reset();
					}
					
				}
			});
		}else{
			$("#contact-modal-header-h1").html("Wrong confirmation code");
			modal_reset();
			$('#modal-body-three').css("display","block");
			$("#contact-modal-dp3-h2").html("Sorry that is not the code. Please try again");
			field_reset();
			$("#contact-name").focus();
		}
	});*/
});