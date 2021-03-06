(function($) {
	$(document).ready(function(){
		
		/* ==================== menu ===================== */		
		$("#block-system-main-menu .content > ul > li > a").click(function(event){
			var url = document.URL;
			var where = $(this).attr("href");
			if (where.indexOf("home#") >= 0 && url.indexOf("home") >= 0){
				event.preventDefault();
				var res = where.replace("/home", "");
				$('body').scrollTo(res,{duration:'slow'});
			}			
		});
		
		var isMobile = {
		    Android: function() {
		        return navigator.userAgent.match(/Android/i);
		    },
		    BlackBerry: function() {
		        return navigator.userAgent.match(/BlackBerry/i);
		    },
		    iOS: function() {
		        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		    },
		    Opera: function() {
		        return navigator.userAgent.match(/Opera Mini/i);
		    },
		    Windows: function() {
		        return navigator.userAgent.match(/IEMobile/i);
		    },
		    any: function() {
		        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		    }
		};
			
//		if(isMobile.any()) {
//			  //no sticky header for mobile
//		}else{
//			$('#sticky-header').scrollFix();
//		}
		
		$('#block-system-main-menu .content').prepend('<div id="menu-button"></div>');		
		$('#block-system-main-menu .content #menu-button').on('click', function(){
			var menu = $(this).next('ul.menu');
			if (menu.hasClass('open')) {
				menu.removeClass('open');
			}
			else {
				menu.addClass('open');
			}
		});
		$('#block-system-main-menu .content ul.menu').on('click', function(){
			var menu = $('#block-system-main-menu .content > ul.menu');		
			if (menu.hasClass('open')) {
				menu.removeClass('open');
			}
			else {
				menu.addClass('open');
			}
			
		});
		
		
	  $(".view-gallery .view-content div a").unwrap();  
	
	  $("ul#about-page-images li").hover(
		  function() {
			  $(this).stop().animate({"opacity": "0.5"}, "slow");
		  },
		  function() {
			  $(this).stop().animate({"opacity": "1"}, "slow");
	  });

		/*==================== front Page Slider =====================*/
	
	  $(".view-id-front_slider > .view-content").attr("id", "front-page-slide-owl");
	  $("#front-page-slide-owl").owlCarousel({			  
	      slideSpeed : 20,
	      paginationSpeed : 400,
	      singleItem:true,
	      autoPlay: true,
	      stopOnHover: true,
	      lazyLoad: true,
	      afterInit : function callBack() {	        	  
            var area =  $(".item .info-area"), content =  $(".item .info-content");
            area.delay(100).animate({left: 0, opacity: 0.6}, "slow");	
            content.delay(200).animate({"top": "25%", opacity: 1}, "slow");	
	      },
	      afterMove  : function callBack() {	        	  
            var area =  $(".item .info-area"),
                content =  $(".item .info-content");
            area.delay(100).animate({left: 0, opacity: 0.6}, "slow");
            content.delay(300).animate({"top": "25%", opacity: 1}, "slow");		
	      },
	      afterAction  : function callBack() {	        	  
            var area =  $(".item .info-area"), content =  $(".item .info-content");
            area.animate({"left": "-1000px", "opacity": 0 },400);
            content.delay(200).animate({"bottom": "-1000px", opacity: 0});		
	      }
	  });

	  
	  $(".view-id-levels_front_page .view-content").owlCarousel({		  
	      autoPlay: 3000, //Set AutoPlay to 3 seconds	 
	      items : 5,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3]
	 
	  });
	    /*==================== HOME PAGE SLIDER =====================*/
//			$('.home_slider ul li > img').removeAttr("width");
//			$('.home_slider ul li > img').removeAttr("height");
//		
//			$('.home_slider').flexslider({
//	        animation: "slide",
//	        //directionNav: true,
//	        slideshow: true,
//	        //controlNav: true,  
//	        controlsContainer: ".home_slider"
//	        //manualControls: "#slider_control ul li", 
//	    });

    
    $('.features div:last, .newsletters div:last, .about-work > div:last, .team > div:last, .related-post > div:last').addClass('last');
    
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });


 
    
    //prettyPhoto
    $("a[rel^='prettyPhoto']").prettyPhoto();
    
    
    //Portfolio Image Hover
    $('div.border-img a, .gallery li a').css({ opacity: 0 });
    $(".portfolio li, div.border-img:not(.not-hover)").hover(function () {						 
    	$(this).find("img").stop(true, true).animate({ opacity: 0.7 }, 300);
        $(this).find("a.img-view").animate({left: 50+'%', marginLeft: -41+'px', opacity: 1}, 300, 'easeOutQuart');
        $(this).find("a.img-link").animate({right: 50+'%', marginRight: -41+'px', opacity: 1}, 300, 'easeOutQuart');
    }, function() {
    	$(this).find("img").stop(true, true).animate({ opacity: 1 }, 300);
        $(this).find("a.img-view").animate({left: -36+'px', marginLeft: 0, opacity: 0 });
        $(this).find("a.img-link").animate({right:  -36+'px', marginRight: 0, opacity: 0 });
    });
    
    
    //Portfolio Image Hover
    $("img.border-img:not(.not-hover)").hover(function () {						 
    	$(this).stop(true, true).animate({ opacity: 0.7 }, 800);
    }, function() {
    	$(this).stop(true, true).animate({ opacity: 1 }, 800);
    });

    
     //Blog Image Hover
    $(".latest-blog img").hover(function () {						 
    	$(this).stop(true, true).animate({ opacity: 0.7 }, 800);
    }, function() {
    	$(this).stop(true, true).animate({ opacity: 1 }, 800);
    });
    //Portfolio Image Hover
    $("img.border-img:not(.not-hover)").hover(function () {						 
    	$(this).stop(true, true).animate({ opacity: 0.7 }, 800);
    }, function() {
    	$(this).stop(true, true).animate({ opacity: 1 }, 800);
    });

    //Gallery Image Hover
    $(".gallery li").hover(function () {	
        $(this).find("img").stop(true, true).animate({ opacity: 0.7 }, 300);
    	$(this).find("a.img-view").animate({left: 50+'%', marginLeft: -18+'px', opacity: 1}, 300, 'easeOutQuart');
    }, function() {
    	$(this).find("a.img-view").animate({left: -36+'px', marginLeft: 0, opacity: 0 });
        $(this).find("img").stop(true, true).animate({ opacity: 1 }, 300);
    });
	
	//Portf Image Hover
    $("#isotope-container div.border-img").hover(function () {	
        $(this).find("img").stop(true, true).animate({ opacity: 0.7 }, 300);
    	$(this).find("a.img-view").animate({left: 50+'%', marginLeft: -18+'px', opacity: 1}, 300, 'easeOutQuart');
    }, function() {
    	$(this).find("a.img-view").animate({left: -36+'px', marginLeft: 0, opacity: 0 });
        $(this).find("img").stop(true, true).animate({ opacity: 1 }, 300);
    });
    
    //Features Hover
    $("div.features div").hover(function () {						 
    	$(this).find("img").stop(true, true).animate({ opacity: 0.8 }, 100);
    }, function() {
    	$(this).find("img").stop(true, true).animate({ opacity: 1.0 }, 100);
    });
    
    //Group Page Image Hover
    $("div.views-field-field-ablum-images img").hover(function () {	
        $(this).stop(true, true).animate({ opacity: 0.7 }, 300);
    }, function() {
        $(this).stop(true, true).animate({ opacity: 1 }, 300);
    });
    
    //Testimonial Image Hover
    $('.view-testimonial ul li div.views-field-field-student-image img').css({ opacity:1 });
    $(".view-testimonial ul li div.views-field-field-student-image img").hover(function () {						 
    	$(this).stop(true, true).animate({ opacity: 0.5 }, 800);
    }, function() {
    	$(this).stop(true, true).animate({ opacity: 1.0 }, 800);
    });
	
	 //Clients Image Hover
    $('#client-logo img').css({ opacity: 0.5 });
    $("#client-logo img").hover(function () {						 
    	$(this).stop(true, true).animate({ opacity: 1.0 }, 800);
    }, function() {
    	$(this).stop(true, true).animate({ opacity: 0.5 }, 800);
    });
	 //Tab
    $("div.tab-raz div").hover(function () {						 
    	$(this).find("img").stop(true, true).animate({ opacity: 0.6 }, 800);
    }, function() {
    	$(this).find("img").stop(true, true).animate({ opacity: 1.0 }, 800);
    });
    



    //SIDEBAR TABS
    $('.s-tab ul.tab-sidebar').each(function() {
        $(this).find('li').each(function(i) {
          $(this).click(function(){
            $(this).addClass('active').siblings().removeClass('active')
              .parents('div.s-tab').find('div.tab').slideUp(500).delay(500).end().find('div.tab:eq('+i+')').slideDown(1000);
          });
        });
    });
    
    
    //TOGGLE
    $(".close").click(function(){$("#seting").toggle("fast");
    $(this).toggleClass("openpanel");return false});
    $(".toggle-block").hide(); 
    $("p.toggle").click(function(){
    		$(this).toggleClass("active").next().slideToggle(500);
    		return false; 
    });
    

    //ACCORDION
    $('.acc-block').hide();
    $('.acc-header:first').addClass('active').next().show();
    $('.acc-header').click(function(){
    	if( $(this).next().is(':hidden') ) {
    		$('.acc-header').removeClass('active').next().slideUp(500);
    		$(this).toggleClass('active').next().slideDown(500);
    	}
    	return false;
    });
    
    
});


$(window).load(function() {
    
    $('#slider').flexslider({
        animation: "slide",
        slideshow: true, 
        slideshowSpeed: 7000,
        animationDuration: 600,   
        directionNav: true,
        controlNav: false,
        controlsContainer: "#home_slider",
        manualControls: "#home_slider_control li", 
        start: function(){$('#slider').removeClass('loader');},
        after: function(){$('ul.slides li').find("div").fadeIn(500);},
        before: function(){$('ul.slides li').find("div").fadeOut(0);}
        
    });
    
    $('#slider-wrapper .flex-direction-nav a').css({ opacity: 0 });
    $("#slider-wrapper").hover(function () {						 
        $(this).find("a.flex-prev").animate({left: 0+'px', opacity: 1}, 300, 'easeOutQuart');
        $(this).find("a.flex-next").animate({right: 0+'px', opacity: 1}, 300, 'easeOutQuart');
    }, function() {
        $(this).find("a.flex-prev").animate({left: -50+'px', opacity: 0 });
        $(this).find("a.flex-next").animate({right:  -50+'px', opacity: 0 });
    });
    
});


  $(document).ready(function(){
                $('#latest-work').elastislide({
                    imageW 	: 260,
                    margin  : 30                    
                });
            });
			
			
			 $(document).ready(function(){
                $('#testimonial').elastislide({
                    imageW 	: 555,
                    margin  : 30                    
                });
            });
			
			
			$(document).ready(function(){
                $('#newsletters').elastislide({
                    imageW 	: 555,
                    margin      : 30            
                });
            });

})(jQuery);


(function($){
  $.fn.autofill = function(options){
    var defaults = {
      value:'',
      defaultTextColor:"#777777",
      activeTextColor:"#ffffff",
      password: false
    };
    var options = $.extend(defaults,options);
    return this.each(function(){
      var obj=$(this);
      obj.css({color:options.defaultTextColor})
        .val(options.value)
        .focus(function(){
          if(obj.val()==options.value){
            obj.val("").css({color:options.activeTextColor});
            if (options.password && obj.attr('type') == 'text') {
              obj.attr('type', 'password');
            }
          }
        })
        .blur(function(){
          if(obj.val()==""){
            obj.css({color:options.defaultTextColor}).val(options.value);
            if (options.password && obj.attr('type') == 'password') {
              obj.attr('type', 'text');
            }
          }
        });
    });
  };
})(jQuery);

(function ($) {
Drupal.behaviors.designmd = {
  attach: function (context) {
    $('#search-block-form .form-text', context).autofill({
      value: "Search..."
    });
  } 
};
})(jQuery);

(function ($) {
		 $(document).ready(function(){

$('#breadcrumbs-nav nav.breadcrumb a[title]').remove();
});
})(jQuery);

(function ($) {
            	$(document).ready(function(){
        	       //TWITTER
                    $(".s-tweet").tweet({
                    	  join_text: "auto",
                    	  username: "envato",
                    	  avatar_size: 40,
                    	  count: 3,
                    	  auto_join_text_default: "we said,",
                    	  auto_join_text_ed: "we",
                    	  auto_join_text_ing: "we were",
                    	  auto_join_text_reply: "we replied",
                    	  auto_join_text_url: "we were checking out",
                    	  loading_text: "loading tweets..."
                    });
            	});
          
})(jQuery);

(function ($) {
                $(window).load(function() {
                    $('#slider-blog-3').flexslider({
                        controlNav: false,  
                    });
                });
})(jQuery);
