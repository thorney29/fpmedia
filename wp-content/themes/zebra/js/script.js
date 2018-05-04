(function($){
	$(document).ready(function(){
		$(".instagram-pics a").each(function(){
			$(this).attr('title',$(this).find("img").attr('title'));
		});

		$('[data-toggle="tooltip"]').tooltip('hide');

		$('footer #menu-social-media li').each(function(){
			var element = $(this).children();
			var anchorContent = $(this).html();
			var elementLink = $(element).attr('href');
			if(elementLink === "#" ) {
				$(this).css('display', 'none')			
			} else {
				var classes = $(this).attr('class').split(' ');
				$(this).children().html('');

				for(var i=0; i<3; i++){
				 	element.addClass(classes[i]);
				 	$(this).removeClass(classes[i]);
				}
			}
		});		 
	});
})(jQuery);