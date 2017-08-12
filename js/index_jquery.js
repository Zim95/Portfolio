$(document).ready(function(){
	var headerheight = $('.page_header').outerHeight(true);
	$(this).on("scroll",function(){
		if($(this).scrollTop()>headerheight){
			$('.clearfix').addClass('sticky');
		}else{
			$('.clearfix').removeClass('sticky');
		}
	});
});