/**
 * 
 */

/*js to use by share fb button*/

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


jQuery( document ).ready( function( $ ) {
	$('.why-box').hover(
		function() {
			$('.why-box').addClass('active');
		}, 
		function (){
			$('.why-box').removeClass('active');
		}
	);

	var date=new Date();
	var year=date.getFullYear();
	var month=date.getMonth();
	var day=date.getDate(); // fixed

    /*if (year==2016 && month==07) { 
        $("#myCarousel2").css("display","block");
    }
    else if (year==2016 && month>=08) { 
        $("#myCarousel").css("display","block");
    }*/

    /*SCHEDULE TIME FOR CHECK UP PROMO*/
    /*remember for mounth ... 00 is january 01 is february ecc ecc 11 is december*/

	if (year==2017 && month==03) { 
    	if (day<=22) { 
        	$("#myCarousel").css("display","block");
    	}
    	else if (day>=23) { 
        	$("#myCarousel2").css("display","block");
    	}
	}
    else if (year==2017 && month>=04) { 
        $("#myCarousel2").css("display","block");
    }
    else if (year>=2018) { 
        $("#myCarousel2").css("display","block");
    }

	var promoList = $('.promo');
    if(promoList.length > 0)
		$(window).scroll(function() {
			promoList.each(function(index){
				if($(this).parent() && $(this).parent().is(':visible')){
					var tab = $(this).parent();
					var tabTop = tab.offset().top
					var windowTop = $(window).scrollTop();

					if(tabTop - windowTop < 150){
						$(this).addClass('promo--fixed');
					}
					else{
						$(this).removeClass('promo--fixed');
					}
				}
			});
		});

	var navPrimaryList = $('.collapse.navbar-collapse.navbar-responsive-collapse');
    if(navPrimaryList.length > 0)
		$(window).scroll(function() {
			navPrimaryList.each(function(index){
				if($(this).parent() && $(this).parent().is(':visible')){
					var tab = $(this).parent();
					var tabTop = tab.offset().top
					var windowTop = $(window).scrollTop();

					if(windowTop >= 213){
						$(this).addClass('box');
					}
					else{
						$(this).removeClass('box');
					}
				}
			});
		});

	$(window).click(function(e){
		if($('#cn-accept-cookie').length)
			$('#cn-accept-cookie').trigger("click");
	});
	$(window).scroll(function(e){
		if($('#cn-accept-cookie').length)
			$('#cn-accept-cookie').trigger("click");
	})
	$('.button_close').on('click', function(){
		$(this).closest('div').remove();
	})



	//why doctor glass carousel
	$("#whydg").owlCarousel({
	    pagination : false,

	    items: 3,
	    itemsDesktop : [960,3],
	    itemsDesktopSmall : [960,3],
	    itemsTablet: [768,3],
	    itemsTabletSmall: [680,2],
	    itemsMobile : [479,1],

	    navigation : true,
	    rewindNav : false,
	    navigationText : ["<img src='/wp-content/themes/point/images/arrow_left.png' />","<img src='/wp-content/themes/point/images/arrow_right.png' />"],
	  });

	if (navigator.msMaxTouchPoints) {
	  $('#slider').addClass('ms-touch');
	  $('#slider').on('scroll', function() {
	    $('.slide-image').css('transform','translate3d(-' + (100-$(this).scrollLeft()/6) + 'px,0,0)');
	  });
	} else {
	  var slider = {
	    el: {
	      slider: $("#slider"),
	      holder: $(".holder"),
	      imgSlide: $(".slide-image")
	    },
	    slideWidth: $('#slider').width(),
	    touchstartx: undefined,
	    touchmovex: undefined,
	    movex: undefined,
	    index: 0,
	    longTouch: undefined,
	    init: function() {
	      this.bindUIEvents();
	    },
	    bindUIEvents: function() {
	      this.el.holder.on("touchstart", function(event) {
	        slider.start(event);
	      });
	      this.el.holder.on("touchmove", function(event) {
	        slider.move(event);
	      });
	      this.el.holder.on("touchend", function(event) {
	        slider.end(event);
	      });
	    },
	    start: function(event) {
	      // Test for flick.
	      this.longTouch = false;
	      setTimeout(function() {
	        window.slider.longTouch = true;
	      }, 250);
	      // Get the original touch position.
	      this.touchstartx =  event.originalEvent.touches[0].pageX;
	      // The movement gets all janky if there's a transition on the elements.
	      $('.animate').removeClass('animate');
	    },
	    move: function(event) {
	      // Continuously return touch position.
	      this.touchmovex =  event.originalEvent.touches[0].pageX;
	      // Calculate distance to translate holder.
	      this.movex = this.index*this.slideWidth + (this.touchstartx - this.touchmovex);
	      // Defines the speed the images should move at.
	      var panx = 100-this.movex/6;
	      if (this.movex < 600) { // Makes the holder stop moving when there is no more content.
	        this.el.holder.css('transform','translate3d(-' + this.movex + 'px,0,0)');
	      }
	      if (panx < 100) { // Corrects an edge-case problem where the background image moves without the container moving.
	        this.el.imgSlide.css('transform','translate3d(-' + panx + 'px,0,0)');
	      }
	    },
	    end: function(event) {
	      // Calculate the distance swiped.
	      var absMove = Math.abs(this.index*this.slideWidth - this.movex);
	      // Calculate the index. All other calculations are based on the index.
	      if (absMove > this.slideWidth/2 || this.longTouch === false) {
	        if (this.movex > this.index*this.slideWidth && this.index < 2) {
	          this.index++;
	        } else if (this.movex < this.index*this.slideWidth && this.index > 0) {
	          this.index--;
	        }
	      }      
	      // Move and animate the elements.
	      this.el.holder.addClass('animate').css('transform', 'translate3d(-' + this.index*this.slideWidth + 'px,0,0)');
	      this.el.imgSlide.addClass('animate').css('transform', 'translate3d(-' + 100-this.index*50 + 'px,0,0)');
	    }
	  };
	  slider.init();
	}

	$(".button_video_2").hover(function() {
		$(this).find("img").attr("src", "/wp-content/themes/drglass/images/b.png")
	}, function() {
		$(this).find("img").attr("src", "/wp-content/themes/drglass/images/a.png")
	})
});
