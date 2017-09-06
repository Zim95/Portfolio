$(document).ready(function(){
	function field_reset(){
		$("#email-code-input").val("");
		$("#workdef-code-input").val("");
		$("#skillsreq-code-input").val("");
	}
	function modal_reset(){
		$('#hire-modal-header-h1').html('Hire Me');
		$('#hire-modal-header-h2').html('Please fill in your credentials');
		$('#hire-modal-body-one').css("display",'block');
		$('#hire-modal-body-two').css("display",'none');
		$('#hire-modal-body-three').css("display",'none');
	}
	$("#hire-modal-close").click(function(){
		modal_reset();
		field_reset();
	});
});