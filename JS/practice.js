jQuery(document).ready(function(){
	var navoffset=jQuery("nav").offset().top;
	jQuery("nav").wrap('<div class="nav-placeholder"></div>');
	jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());
	jQuery("nav").wrapInner('<div class="nav-inner"></div>');
	jQuery(".nav-inner").wrapInner('<div class="nav-inner-most"></div>');
	jQuery(window).scroll(function() {
		
		var scrollPos =jQuery(window).scrollTop();
		
		if (scrollPos >= navOffset) {
			jQuery("nav").addClass("fixed");
		} else {
			jQuery("nav").removeClass("fixed");
		}
		
	});
}