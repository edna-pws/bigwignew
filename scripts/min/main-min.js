!function($){$(".navbar-head").click(function(){$(".mobile-nav").slideToggle("")}),$(".girlee-head").click(function(){$(".mobile-sidebar").slideToggle("")}),$(document).ready(function(){var l=$("#owl-demo");l.owlCarousel({items:10,itemsDesktop:[1e3,5],itemsDesktopSmall:[900,3],itemsTablet:[600,2],itemsMobile:!1}),$(".next").click(function(){l.trigger("owl.next")}),$(".prev").click(function(){l.trigger("owl.prev")}),$(".play").click(function(){l.trigger("owl.play",1e3)}),$(".stop").click(function(){l.trigger("owl.stop")})}),$(".faq-dropdown").click(function(){$(".faq-list").slideToggle("fast")}),$(".faqlist-head li:first-child() .faq-list").slideToggle("fast"),$(".beach-dropdown").click(function(){$(".signup-list").slideToggle("fast")}),$(".signup-head li:first-child() .signup-list").slideToggle("fast"),$(".wholesale-dropdown").click(function(){$(".wholesale-list").slideToggle("fast"),$(".signup-list").hide("")}),$(".listing-dropdown").click(function(){$(".listing-lists").toggle("slide")}),$(".girlee-dropdown").click(function(){$(".listing-lists").toggle("slide")}),$(".subcat2-dropdown").click(function(){$(".subcat2-lists").toggle("slide")}),$(".wig-long").click(function(){$(".listing-right").show("slide")}),$(".fashion").click(function(){$(".subcat2-right").show("slide")}),$(".category-lists li:first-child() .subcat2-lists").slideToggle("fast"),$(".category-lists li:first-child() .listing-lists").slideToggle("fast"),$(".carousel").carousel(),$("#myCarousel").carousel({interval:4e4}),$("[id^=carousel-selector-]").click(function(){var l=$(this).attr("id"),e=l.substr(l.length-1);e=parseInt(e),$("#myCarousel").carousel(e),$("[id^=carousel-selector-]").removeClass("selected"),$(this).addClass("selected")}),$("#myCarousel").on("slid",function(){var l=$(".item.active").data("slide-number");l=parseInt(l),$("[id^=carousel-selector-]").removeClass("selected"),$("[id=carousel-selector-"+l+"]").addClass("selected")}),$("#menu-toggle").click(function(l){l.preventDefault(),$("#wrapper").toggleClass("toggled")})}(jQuery);