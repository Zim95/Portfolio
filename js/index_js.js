$(document).ready(function(){
	
	/*width of viewport*/
	var viewport_width = $(window).width();
	var viewport_height = $(window).height();
	var header_height= viewport_height*0.7;
	
	//carousel height
	var carousel_height = $('.carousel').outerHeight(true);
	//nav-bar height
	var nav_height = $('.navbar-inverse').outerHeight(true);
	
	//setting carousel wrapper
	$('#hero_slider').wrap('<div class="hero_placeholder"></div>');
	//setting height of carousel wrapper
	$('.hero_placeholder').css('height',carousel_height);
	
	//setting navbar wrapper
	$(".navbar-inverse").wrap('<div class="nav_placeholder"></div>');
	//setting height of navbar
	$(".nav_placeholder").css('height',nav_height);
	
	/*on scroll method*/
	$(this).on("scroll",function(){
		
		//getting the scroll value
		var scroll_val = $(this).scrollTop();
		//console.log(scroll_val);
		
		//margin bottom all captions by scroll val
		$('.carousel-caption').css('margin-bottom',scroll_val);
		
		//compare value
		if($(this).scrollTop()>carousel_height){
			$(".navbar-inverse").addClass('sticky');
			$('.nav_extension').slideDown();
			$('.nav_extension').css('display','block');
		}else{
			$(".navbar-inverse").removeClass('sticky');
			$('.nav_extension').slideUp();
			$('.navbar-extension').css('display','none');
		}
	});
	
});