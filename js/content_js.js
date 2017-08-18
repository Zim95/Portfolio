$(document).ready(function(){
	
	//width of viewport for left position
	var viewport_width = $(window).width();
	
	//function to set the margin accrodingly to slide the content divs
	function slider(n){
		var margin_offset;
		if(n==1){
			$('.content-home').slideDown();
			$('.content-home').css('display','block');
			$('.content-abt').css('display','none');
			$('.content-skills').css('display','none');
			$('.content-contact').css('display','none');
			$('.content-hire').css('display','none');
		}else if(n==2){
			$('.content-abt').slideDown();
			$('.content-home').css('display','none');
			$('.content-abt').css('display','block');
			$('.content-skills').css('display','none');
			$('.content-contact').css('display','none');
			$('.content-hire').css('display','none');
		}else if(n==3){
			$('.content-skills').slideDown();
			$('.content-home').css('display','none');
			$('.content-abt').css('display','none');
			$('.content-skills').css('display','block');
			$('.content-contact').css('display','none');
			$('.content-hire').css('display','none');
		}else if(n==4){
			$('.content-contact').slideDown();
			$('.content-home').css('display','none');
			$('.content-abt').css('display','none');
			$('.content-skills').css('display','none');
			$('.content-contact').css('display','block');
			$('.content-hire').css('display','none');
		}else if(n==5){
			$('.content-hire').slideDown();
			$('.content-home').css('display','none');
			$('.content-abt').css('display','none');
			$('.content-skills').css('display','none');
			$('.content-contact').css('display','none');
			$('.content-hire').css('display','block');
		}else{
			console.log('Not a valid slider option');
		}
	}
	
	//button click event to call slide function
	$("#homebtn").click(function(){
		slider(1);
	});
	$("#abtbtn").click(function(){
		slider(2);
	});
	$("#skillbtn").click(function(){
		slider(3);
	});
	$("#contactbtn").click(function(){
		slider(4);
	});
	$("#hirebtn").click(function(){
		slider(5);
	});
});