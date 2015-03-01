$(function(){
	var body = $('body');

	$(window).resize(function(){
			body.removeClass('menu-open');
	});

	$('#menuIcon').bind('click', function() {
		body.toggleClass('menu-open');
	})

	$(window).bind('scroll', function(){
		
		if($(window).width() < 1201){
			if($(window).scrollTop() >= 220){
					$('header').css({'background-color': 'rgba(90,11,124,1)'});
					$('#mobileTitleWrap > a').css({'display':'block'});
			}
			else{
					$('header').removeAttr('style');
					$('nav').removeAttr('style');
					$('#mobileTitleWrap > a').removeAttr('style');	
			}
		}
		else{
			$('header').removeAttr('style');
			$('nav').removeAttr('style');
			$('#mobileTitleWrap > a').removeAttr('style');
			if($(window).scrollTop() >= 220){
				$('#menuIcoWrap').css({'background-color':'rgba(90,11,124,1)'});
			}
			else{
				$('#menuIcoWrap').removeAttr('style');
			}	
		}
	})
});
