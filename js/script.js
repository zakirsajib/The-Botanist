$ = jQuery.noConflict();

$(function ($) {
    "use strict";
    
    AOS.init({duration: 1200,});
    
    
    //LOADER
    $(window).on("load", function () {
        $(".loader").fadeOut(800);
    });
	
    /* ------- Smooth scroll ------- */
    $(".scroll").on("click", function (event) {
        var menu = $("nav.navbar").innerHeight();
        event.preventDefault();
        $("html,body").animate({
            scrollTop: ($(this.hash).offset().top - 10)
        }, 1000);
    });
	
	var viewportHeight = $('section#home').outerHeight();
		$('section#home').css({ height: viewportHeight });
	
    /* ------- Sidebar Toggle ------ */
    $(".menu-icon").on("click",function () {
        $(".full-menu").toggleClass("open");
    });
    if($(".full-nav li a").hasClass("scroll")){
        $(".full-nav li a").on("click",function () {
            $(".full-menu").removeClass("open");
        });
    }

    
    /*------ MENU Fixed ------*/

    $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".navbar");
        if ($scroll > 100) {
            $navbar.addClass("scroll-nav");
        } else {
            $navbar.removeClass("scroll-nav");
        }
    });

    // Push Menus
    var $menuLeft = $(".pushmenu-left");
    var $menuRight = $(".pushmenu-right");
    var $toggleleft = $("open");
    var $toggleright = $(".home-main-index5  .menu-icon");

    if ($(".home-main-index5  .menu-icon").length) {
        $("body").addClass("pushmenu-push");
        $toggleleft.on("click", function () {
            $(this).toggleClass("active");
            $(".pushmenu-push").toggleClass("pushmenu-push-toright");
            $menuLeft.toggleClass("pushmenu-open");
            return false;
        });
        $toggleright.on("click", function () {
            $(this).toggleClass("active");
            $(".pushmenu-push").toggleClass("pushmenu-push-toleft");
            $menuRight.toggleClass("pushmenu-open");
            return false;

        });
    } 
    
    $(document).ready(function(){
	    //Check to see if the window is top if not then display button
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('#scrollToTop').fadeIn();
			} else {
				$('#scrollToTop').fadeOut();
			}
		});
		
		//Click event to scroll to top
		$('#scrollToTop').click(function(){
			$('html, body').animate({scrollTop : 0},800);
			return false;
		});
		
		
		
		/*-------------------------------------------------------------------*/
		/*  Requires jQuery niceScroll plugin.
		/*-------------------------------------------------------------------*/
    
		$("body").niceScroll({
			cursorcolor:"#a68d34",
			cursorwidth: 		"6px",
			cursorborder: 		"0px solid #a68d34",
			scrollspeed: 		60,
			autohidemode: 		true,
			hidecursordelay: 	400,
			cursorborderradius: "0px",
			cursorfixedheight: 	false,
			cursorminheight: 	20,
			enablemousewheel: true,
			enablekeyboard: 	true,
			horizrailenabled: 	true,
			bouncescroll: 		true,
			smoothscroll: 		true,
			zindex: 999
		});		
    });
    
});