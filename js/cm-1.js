// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S ALL JUST JUNK FOR OUR DOCS!
// ++++++++++++++++++++++++++++++++++++++++++
/*
 function track() {
 $(".click_fb").click(function() {
 mixpanel.track("index_fb_link");
 });
 }
 */

$(document).ready(function() {

	//set min height of hero
	var hero_min_height = 480;
	var bottom_offset = 80;
	
	// window height
	var wHeight = $(window).height();
	console.log("og window height= "+wHeight);

	// window width
	var wWidth = $(window).width();
	//console.log(wWidth);

	//hero wrapper
	var heroH = $('.nb-wrapper-hero').height;
	//var oldHeroH = $('.nb-wrapper-hero').css('min-height');
	//console.log("og hero height= "+heroH);
	
	//detect height of top-nav element
	var topNavHeight = $('.nb-top-nav').height();
	console.log("top nav height= "+topNavHeight);
	
	//detect window height and size wrapper to full screen with a minimum height of 600px
	$('.nb-wrapper-hero').css('height', (wHeight > hero_min_height) ? wHeight - (topNavHeight+bottom_offset) : hero_min_height);
	//console.log("og hero height= "+heroH);
	
	// segment
	var nb_segment_content_height = $('.nb-segment-content').height();
	$('.nb-segment-content').css('min-height', (wHeight > hero_min_height) ? wHeight - (topNavHeight+bottom_offset) : hero_min_height);
	console.log("og nb-segment-content height= "+nb_segment_content_height);

	$(window).resize(function() {
		// This will execute whenever the window is resized
		var newH = $(window).height();
		//console.log(newH);
		// New height
		$(window).width();
		// New width

		if (wHeight < hero_min_height) {

			$('.nb-wrapper-hero').css('height', (newH < hero_min_height) ? hero_min_height : newH - (topNavHeight+bottom_offset));

		} else if (wHeight > hero_min_height) {
			
			$('.nb-wrapper-hero').css('height', (newH > hero_min_height) ? newH - (topNavHeight+bottom_offset) : hero_min_height);

		};
	});

	
// scroll to section
	// user clicks on button and page scrolls to hash
	$('.nb-links').bind('click', function(e) {
		e.preventDefault();
		target = this.hash;
		/*
		* uncomment log below to check if there is a hit on target
		*/
		//console.log(target);
		$.scrollTo(target, 1000, {
			offset : -64
		});
	});

});
