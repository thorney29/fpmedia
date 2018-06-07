console.log("WOOHOO! The 'main.js' file was executed from the child theme folder.");
//Rotating heading in the slider
// Rotate slider headings 
	var phrases     = document.getElementsByClassName('rotating-service');
	var phraseIndex = 0;

	function changePhrase() {
	  var currentPhrase = phrases[phraseIndex];
	  var nextPhrase    = phraseIndex == phrases.length-1 ? phrases[0] : phrases[phraseIndex + 1];
	  
	  animatePhraseOut(currentPhrase);
	  
	  nextPhrase.className = 'rotating-service behind';
	  
	  animatePhraseIn(nextPhrase);
	  
	  phraseIndex = (phraseIndex == phrases.length - 1) ? 0 : phraseIndex + 1;
	}

	function animatePhraseOut(phrase) {
	  setTimeout(function() {
	    phrase.className = 'rotating-service out';
	    phrase.setAttribute('aria-hidden', 'true');
	  }, 100);
	}

	function animatePhraseIn(phrase) {
	  setTimeout(function() {
	    phrase.className = 'rotating-service in';
	    phrase.setAttribute('aria-hidden', 'false');
	  }, 300);
	}

	if (phrases.length > 0) {
	  setInterval(changePhrase, 3500);
	}


//Program here the next web application of the year 2017
jQuery.noConflict();
 

jQuery(document).ready(function($){
	//when page loads show content
	$('body').css('visibility','visible');
    $(".homeslider-overlay .rotating-service:first-of-type" ).addClass("in" ).siblings().removeClass('in');
	
	
	// this will adjust font size in the testimonials section 
	 // 	$("h2 .rotating-service" ).each(function() {
	 // 		var $quoteContent = $(this);	
		// 	var $characterLength = $(this).text().length;
		//     console.log($(this).text() +" :"+ $characterLength);
		//     if ( 10 ==  $characterLength && $characterLength ) {
		//         $quoteContent.css("font-size","100%");
		//     }
		//     else if ( 19 == $characterLength ) {
		//         $quoteContent.css("font-size","55%");
		//     }
		//      else if (13 ==  $characterLength ) {
		//         $quoteContent.css("font-size","78%");
		// 	}
		//     else if (17 ==  $characterLength ){
		//         $quoteContent.css("font-size","64%");
		// 	} 
		// 	else if (12 ==  $characterLength ){
		//         $quoteContent.css("font-size","88%");
		// 	}
		// 	else if (8 ==  $characterLength ){
		//         $quoteContent.css("font-size","100%");
		// 	} 
		// 	else if (21 ==  $characterLength ){
		//         $quoteContent.css("font-size","55%");
		// 	} 
		// 	else {
		// 		// do nothing
		// 	}     
		// })
	
	var $animation_elements_first = $('.talk-bubbles .thumbnail');
	var $animation_elements_second = $('.team-photo .caption');
	var $window = $(window);

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

	  $.each($animation_elements_first, function() {
	    var $element = $(this);
	    var element_height = $element.outerHeight();
	    var element_top_position = $element.offset().top;
	    var element_bottom_position = (element_top_position + element_height);

	    //check to see if this current container is within viewport
	    if ((element_bottom_position >= window_top_position) &&
	      (element_top_position <= window_bottom_position)) {
	      $element.addClass('in-view');
	    } else {
	      $element.removeClass('in-view');
	    }
	  });
	  $.each($animation_elements_second, function() {
	    var $element = $(this);
	    var element_height = $element.outerHeight();
	    var element_top_position = $element.offset().top;
	    var element_bottom_position = (element_top_position + element_height);

	    //check to see if this current container is within viewport
	    if ((element_bottom_position >= window_top_position) &&
	      (element_top_position <= window_bottom_position)) {
	      $element.addClass('in-view');
	    } else {
	      $element.removeClass('in-view');
	    }
	  });
	}

	$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');

	 /*
     * Replace all SVG images with inline SVG
     */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');
    });
    $('#carousel-oxOwO').carousel({
	  interval: 10000
	})
	$(function() {
        $(".video").click(function () {
        var theModal = $(this).data("target"),
        videoSRC = $(this).attr("data-video"),
        videoSRCauto = videoSRC;
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', '');
        });
        });
    });

	$('#videoModal').on('hidden.bs.modal', function (e) {
	$('#videoModal').find('iframe').attr('src', '');
	});

 });