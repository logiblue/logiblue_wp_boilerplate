// SHRINK HEADER WHEN SCROLL
jQuery(function(){
 var shrinkHeader = 300;
  jQuery(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
            jQuery('.header-bot').addClass('header-bot-scrolled');
			jQuery('.header-top').addClass('header-top-scrolled');
        }
        else {
            jQuery('.header-bot').removeClass('header-bot-scrolled');
			jQuery('.header-top').removeClass('header-top-scrolled');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});



// SCROLL TO TOP
jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scrollToTop').fadeIn();
		} else {
			jQuery('.scrollToTop').fadeOut();
		}
	});

	jQuery('.scrollToTop').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});
});



// SCROLL TO BOTTOM
jQuery(document).ready(function(){
	jQuery('.scrollToBot').click(function(){
		jQuery('html, body').animate({scrollTop : jQuery(document).height()},1300);
		return false;
	});
});



// ADDS PLACEHOLDER TO SEARCH BUTTON
jQuery(function(){
	jQuery('#s').attr('placeholder', 'ΑΝΑΖΗΤΗΣΗ');

	jQuery('#s').focus(function() {
		jQuery(this).attr('placeholder', '');
	});

	jQuery('#s').focusout(function() {
		jQuery(this).attr('placeholder', 'ΑΝΑΖΗΤΗΣΗ');
	});
});



// ACTIVATE ANIMATION LIBRARY
document.addEventListener('DOMContentLoaded', function(){
  var trigger = new ScrollTrigger({
    toggle:{visible: 'vsb', hidden: 'hdn'},
    addWidth: false,
    addHeight: false,
    centerHorizontal: false,
    centerVertical: true
  });
});

// Kostas


// Home Service Change Image on Hover
jQuery(".homeserv-list a").hover(function() {
	var s = jQuery(this).data("img");
	jQuery(".homeserv-thumb img").attr("src", s);
	console.log('Hover works')
  });
  // Home Service Change TEXT on Hover
  function serviceText(description) {
	console.log(description);
	document.getElementById('serviceText').innerHTML = description;
}

//Change background-color on Hover
jQuery('.homeserv').on('mouseover', 'a', function () {

    var background = "url('" + jQuery(this).attr('data-bg') + "')";

    jQuery('.homeserv').css('background-color', background)
});


jQuery("a").on("mouseover",function(){

	jQuery('.homeserv').css("background-color",jQuery(this).attr("data-bg"));
  
  });