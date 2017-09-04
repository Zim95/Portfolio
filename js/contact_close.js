$(document).ready(function(){
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
	$("#contact-modal-close").click(function(){
		$("#contact-modal-header-h1").html("Your Message has been sent to the server");
		modal_reset();
		$('#modal-body-three').css("display","block");
		$("#contact-modal-dp3-h2").html("Please wait...");
		field_reset();
		$("#contact-name").focus();
	});
});