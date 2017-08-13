$(document).ready(function(){
	var headerheight = $('.img-container').outerHeight(true);
	var navmenuheight = $('.nav_menu').outerHeight(true);
	$('.clearfix').wrap('<div class="nav_placeholder"></div>');
	$(this).on("scroll",function(){
		if($(this).scrollTop()>headerheight){
			$('.clearfix').addClass('sticky');
			$('.nav_placeholder').css('margin-bottom',navmenuheight);
		}else{
			$('.clearfix').removeClass('sticky');
			$('.nav_placeholder').css('margin-bottom',0);
		}
	});
});