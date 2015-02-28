(function(){
	var body = $('body');

	$(window).resize(function(){
		if($(window).width() > 1112){
			body.removeClass('menu-open');
			return false;
		}
	});

	$('#menuIcon').bind('click', function() {
		body.toggleClass('menu-open');
		return false;
	})
})();
