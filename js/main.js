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


// Quick Service Slider
var sliderint= 1;
var sliderNext = 2;
var loop;

jQuery(document).ready(function(){
    
})

function startSlider (){
  count=jQuery(".quickslider>img").size(); 
	console.log("Start Loop");
  
  window.clearTimeout(loop);
    loop = window.setTimeout(function(){

        if(sliderNext>count){
            sliderNext=1;
            sliderint=1;
        }
				showSlide(sliderNext);
    },6000);
}

function prev(){
    newSlide = sliderint-1;
    showSlide(newSlide);

}

function next(){
    newSlide = sliderint+1;
    showSlide(newSlide);   
}

function stopLoop(){
  console.log("Stop Loop");
    window.clearTimeout(loop);
}


function showSlide(id){
    stopLoop();
  jQuery(".slider-nav a").removeClass("active");
   
  if(id>count){
            id=1;
    }
    else if(id<1){
          id=count;  
        }

        jQuery('.quickslider>img').fadeOut(300);
        jQuery('.quickslider>img#'+id).fadeIn(300);
jQuery(".slider-nav a[href='#"+id+"']").addClass("active");
        sliderint=parseInt(id);
        sliderNext= parseInt(id) + 1;
        startSlider();   
}


jQuery(document).ready(function(){
  jQuery('.quickslider>img#1').fadeIn(300);
    startSlider();
  
  jQuery('body').on('mouseover', ".slider-nav a", function(e){
    e.preventDefault();
    var href = jQuery(e.target).attr("href");
	stopLoop ();
    showSlide(href.substring(1, href.length));
  });
  
  jQuery("#quickslider").hover(function ()
    {
       stopLoop ();
    },
    function () {
        startSlider ();
    });
});



var tl = new TimelineMax({repeat:20});

$(".slide").each(function(index, element){
  tl.to(element, 1, {x:200, opacity:1})
    .to(element, 1, {x:400, opacity:0, ease:Power2.easeIn}, "+=1")
})