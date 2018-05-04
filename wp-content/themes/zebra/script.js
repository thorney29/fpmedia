(function($){
	$(document).ready(function(){
		$(".instagram-pics a").each(function(){
			$(this).attr('title',$(this).find("img").attr('title'));
			$(this).find("img").attr('title').remove();
			alert('hi');
		});

		$('footer #menu-social-media li').each(function(){
			var classes = $(this).attr('class').split(' ');
			

			for(var i=0; i<classes.length; i++){
			  console.log(classes[i]);
			}
		});

		var classList = $('footer li').attr('class').split(/\s+/);
		console.log(classList);

		// end footer social media text hide

		$('.product').click(function() {
			alert('hello');
		
		});

	});
})(jQuery);