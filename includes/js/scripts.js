/* Project Name: RohanChambers.net version 3.0 | Author: Rohan Chambers | Date: 12 June 2012 */

SITE = {

};

$(document).ready(function() {
	SITE.CAROUSEL.initialise();
	SITE.SCROLL.initialise();
	SITE.QUICKSAND.initialise();	
	SITE.TABS.initialise();	
	SITE.LIGHTBOX.initialise();	
	SITE.OPACITY.initialise();
	SITE.TARGETBLANK.initialise();
	SITE.NAVOPACITY.initialise();
	SITE.BORDEROPACITY.initialise();
	//SITE.JUSTIFYNAV.initialise();		
});

// *******************************************************************************************

SITE.CAROUSEL = {
	initialise: function() {
		
		var carousel = $('#carousel');
		var slides = $('#carousel li');
		var slideWidth = $('#carousel li').width();
		var totalSlides = $('#carousel li').length;
		var totalSlidesWidth = (totalSlides * slideWidth);
		var speed = 1000;

		//Auto Play
		var intervalId = 0;
		var timer = 7000;
		
		function autoPlay(){
	
			$('.btn-nxt').trigger('click');
					
		};
		
		intervalId = setInterval (autoPlay, timer);	
	
		$('#carousel, .btn-nxt, .btn-prev, #blobs').hover( function(){
		
			 clearTimeout(intervalId);
		
		}, function(){
		
			intervalId = setInterval (autoPlay, timer);	
			
		});	
				
		//On Load
		$('ul#carousel').css('width', totalSlidesWidth + 'px');
	
		$('#carousel li:first').before($('#carousel li:last')); 		
		
		//Buttons NXT
		$('.btn-nxt').bind('click', function(){
	
			$('ul#carousel:not(:animated)').animate({'left' : '-=' + slideWidth + 'px'}, speed, 'easeInOutExpo', function(){
			
				$('#carousel li:last').after($('#carousel li:first'));
				$('#carousel').css({'left' : '-960px'});  		
				
			});
			
		});
		
		//Buttons PREV
		$('.btn-prev').bind('click', function(){		
					
			$('ul#carousel:not(:animated)').animate({'left' : '+=' + slideWidth + 'px'}, speed, 'easeInOutExpo', function(){
	
				$('#carousel li:first').before($('#carousel li:last'));
				$('#carousel').css({'left' : '-960px'});  		
			
			});
			
		});	
	
	}
};

// *******************************************************************************************

SITE.SCROLL = {
	initialise: function() {

		function goToByScroll(id){
			$('html, body').animate({scrollTop: $("#"+id).offset().top}, 1500, 'easeInOutExpo');
		};
		
		var button_down = $('a.arrow-down');
		var button_up = $('a.arrow-up');
	
	 	$('#scroll a').toggle( function(){
			$(button_down).attr('href', 'skip-content');
			goToByScroll("skip-content");		
			$(this).addClass('arrow-up');
		}, function(){
			$(button_up).attr('href', '#top');
			$(this).removeClass('arrow-up');
			goToByScroll("top");				
		});		
				
	}
};

// *******************************************************************************************

SITE.QUICKSAND = {
	initialise: function() {
		var speed = 800;
				
		$('#filter-nav a').bind('click', function(e){
	
			var list = $(this).attr('class');
			
			$('#filter-nav li').removeClass('active');
			$(this).parent().addClass('active');
			
			if( $(this).hasClass(list) ) {
			
				$('#case-study li').hide().parent().find('.' + list).fadeIn(speed);
				
			} else if( $(this).parent().hasClass('all') ){
	
				$('#case-study li').hide().fadeIn(speed);
	
			} else{
				return false;
			};		
			e.preventDefault();
		});
	}
};

// *******************************************************************************************

SITE.TABS = {
	initialise: function() {
        var tabContainers = $('div.tabs > div');
        tabContainers.hide().filter(':first').show();
        
        $('div.tabs ul.tabNavigation a').click(function () {
                tabContainers.hide();
                tabContainers.filter(this.hash).fadeIn(800);
                $('div.tabs ul.tabNavigation a').removeClass('selected');
                $(this).addClass('selected');
                return false;
        }).filter(':first').click();
                
	}
};

// *******************************************************************************************

SITE.LIGHTBOX = {
	initialise: function() {

		var lightboxbg = $('#lightbox-bg');
		var speed = 500;
				
		$('.lightbox-home').bind('click', function(){		
								
			$(lightboxbg).fadeIn(speed, function(){
				$('#lightbox-home').fadeIn('slow');		
			});	
			
			return false;	
							
		});

		$('.lightbox-services').bind('click', function(){		
								
			$(lightboxbg).fadeIn(speed, function(){
				$('#lightbox-services').fadeIn('slow');		
			});	
			
			return false;	
							
		});
	
		$('html, body, #close a').bind('click', function(){			
			$('#lightbox-bg, #lightbox-home, #lightbox-services').fadeOut(speed);		
		});
	
		$('#lightbox-panel, .btn-nxt').bind('click', function(){			
			return false;		
		});	

	}
};

// *******************************************************************************************

SITE.OPACITY = {
	initialise: function() {
		
		$("#follow-me img, #contact img").hover(function() {
			$(this).stop().animate({opacity: "0.5"}, 'slow');
			},
		function() {
			$(this).stop().animate({opacity: "1"}, 'slow');
		});		
		
		$("#clients img, #copyright img").animate({opacity: "0.5"})
		$("#clients img, #copyright img").hover(function() {
			$(this).stop().animate({opacity: "1"}, 300);
			},
		function() {
			$(this).stop().animate({opacity: "0.5"}, 700);
		});					
			
	}
};

// *******************************************************************************************

SITE.NAVOPACITY = {
	initialise: function() {

		$('nav ul li').hover( function(){
			
			$(this).stop().animate({backgroundColor: '#0074C0'}, 500);
					
		}, function(){
		
			if( $(this).hasClass('currentpage') ){
					
				return false;
							
			} else {
			
				$(this).stop().animate({backgroundColor: '#171922'}, 500);	
				
			}
				
		});
			
	}
};

// *******************************************************************************************

SITE.BORDEROPACITY = {

	initialise: function() {

		$('section#portfolio ul#case-study li').hover( function(){
		
			$(this).stop().animate({borderColor: '#0074c0'}, 500);
					
		}, function(){
			
			$(this).stop().animate({borderColor: '#FFFFFF'}, 500);	
								
		});

		$('section#portfolio ul#case-study li img').hover( function(){
		
			$(this).stop().animate({opacity: '0.7'}, 600);
					
		}, function(){
			
			$(this).stop().animate({opacity: '1'}, 600);	
								
		});
			
	}
};

// *******************************************************************************************

SITE.TARGETBLANK = {
	initialise: function() {
		$("a.targetBlank[href^='http://']").attr("target","_blank");
	}
};

// *******************************************************************************************

SITE.EQUIDISTANT = {
	initialise: function() {
		distributeCategoryLinks(".client-row", ".client-row li a");
		function distributeCategoryLinks(container, links) {
			var containerWidth = $(container).width();
			var listWidth = 0;
			$(links).each( function () {
				listWidth = listWidth + $(this).width();
			});
			var distance = containerWidth - listWidth;
			i = 1;
			$(links).each( function () {
				var oneDistance = Math.floor( distance/($(links).length - i) );
				$(this).css("margin-right", oneDistance);
				distance = distance - oneDistance;
				i++;
			});
		}
	}
};
	
SITE.EQUIDISTANT2 = {
	initialise: function() {
		distributeCategoryLinks2(".client-row2", ".client-row2 li a");
		function distributeCategoryLinks2(container2, links2) {
			var containerWidth2 = $(container2).width();
			var listWidth2 = 0;
			$(links2).each( function () {
				listWidth2 = listWidth2 + $(this).width();
			});
			var distance2 = containerWidth2 - listWidth2;
			i = 1;
			$(links2).each( function () {
				var oneDistance2 = Math.floor( distance2/($(links2).length - i) );
				$(this).css("margin-right", oneDistance2);
				distance2 = distance2 - oneDistance2;
				i++;
			});
		}
	}
	
};

// *******************************************************************************************
SITE.JUSTIFYNAV = {
	initialise: function() {
	
		$.fn.justifyNav = function() {
			return this.each(function() {
			var $this = $(this),
			$children = $this.children(),
			containerWidth = $this.width(),
			linksWidth = 0,
			count = $children.length;
			
			$children.each(function() {
			linksWidth += $(this).width();
		});
		// Don't give the last item or the 2nd to last item any right margin, then float the last item right.
		// This will account for small errors in JQuery's calculation of the item widths.
		// Otherwise the list can overflow the container!
		var linkSpacing = Math.floor((containerWidth - linksWidth) / (count - 1));
			$children
				.css('margin-right', linkSpacing + "px")
				.filter(":last")
				.css({"margin-right":0,"float":"right"})
				.prev()
				.css({"margin-right":0});
			});
		};			
		$('#clients ul').justifyNav();		
	}
};