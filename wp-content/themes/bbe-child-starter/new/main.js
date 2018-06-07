console.log("WOOHOO! The 'main.js' file was executed from the child theme folder.");

//Program here the next web application of the year 2017
jQuery.noConflict();
jQuery(document).ready(function($){
  var messageItem = $("article.instant-message section > p");
    for(var i = 0; i < messageItem.length; i+=2) {
      messageItem.slice(i, i+2).wrapAll("<div class='x-message'></div>");
    }
    $(".x-message p b:contains('Kerra')").html(function(_, html) {
	   return html.replace(/(Kerra)/g, '<span class="kerra">$1</span>');
	});
	 
	$(".x-message p b:contains('A.J.')").html(function(_, html) {
	   return html.replace(/(A.J.)/g, '<span class="aj">$1</span>');
	});
	$(".expanded-content .kerra b").html(function(_, html) {
	   return html.replace(/(Kerra)/g, '<span class="kerra">$1</span>');
	});
	$(".expanded-content .aj b").html(function(_, html) {
	   return html.replace(/(A.J.)/g, '<span class="aj">$1</span>');
	}); 
	$('.x-message span:contains("1")').html(function(_, html) {
		return html.replace(/1/g, '<div class="star"><svg width="200" height="200" viewBox="0 0 100 100"><g class="group" opacity="0.8"><g class="large"><path id="large" d="M41.25,40 L42.5,10 L43.75,40 L45, 41.25 L75,42.5 L45,43.75, L43.75,45 L42.5,75 L41.25,45 L40,43.75 L10,42.5 L40,41.25z " fill="yellow" /></g><g class="large-2" transform="rotate(45)"><use xlink:href="#large" /></g><g class="small"><path id="small" d="M41.25,40 L42.5,25 L43.75,40 L45,41.25 L60,42.5 L45,43.75, L43.75,45 L42.5,60 L41.25,45 L40,43.75 L25,42.5 L40,41.25z" fill="white" /></g></g></svg></div>');
    });
    $('.star-wrapper').one('mouseenter', function() {
    $('.popupbox').fadeIn(1000); 
	})
	.one('mouseleave', function() {
	    $('.popupbox').fadeOut(2000);  
	});
    $('.star-wrapper').on('click',function() {
    	$('.star-content-expand').toggleClass('expanded');
    });
    $('.star-content-expand button.close').on('click',function() {
     	$(this).parent().parent().toggleClass('expanded');
    });
    $('button.close').on('click',function() {
     	$(this).parent().toggleClass('expanded');
    });
    
	if (window.location.href.indexOf("amillionwordsaboutrace/instant-messages") != -1) {    
             Grid.init();         
	}
	$('.carousel').carousel({
	  interval: 18000
	});
});
jQuery(".expanded-content .kerra b").html(function(_, html) {
	   return html.replace(/(Kerra)/g, '<span class="kerra">$1</span>');
});
jQuery(".expanded-content .aj b").html(function(_, html) {
   return html.replace(/(A.J.)/g, '<span class="aj">$1</span>');
}); 
jQuery('.collapse').collapse('hide');

