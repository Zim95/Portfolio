$(document).ready(function(){
	$.ajax({
		url:'includes/hire_count.php',
		success:function(data){
			$("#hires-tab-image").html(data);
		}
	});
});