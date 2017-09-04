$(document).ready(function(){
	$.ajax({
		url:'includes/hire_history.php',
		success:function(data){
			$("#hire-history-table-row").html(data);
		}
	});
});