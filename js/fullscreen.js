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

	// window height
	var wHeight=$(window).height();
	//console.log(wHeight);
	
	// window width
	var wWidth=$(window).width();
	//console.log(wWidth);
	
	var section_main_height=$('.main').height();
	//console.log(section_main_height);
	
	if (section_main_height<600){
		$('.main').height(600);
	} else {
		//
	};
	
	//section_main_height=wHeight-400;
	//console.log(section_main_height);
	
	// scroll to section
	// user clicks on button and page scrolls to hash
	$('.button').bind('click', function(e) {
		e.preventDefault();
		target = this.hash;
		/*
		* uncomment log below to check if there is a hit on target
		*/
		//console.log(target);
		$.scrollTo(target, 1000, {
			offset : 0
		});
	});

	$(window).resize(function() {
		// This will execute whenever the window is resized

		$(window).height();
		// New height
		$(window).width();
		// New width
	});
});
