jQuery(document).ready(function(){
	var navOffset=jQuery('#header').offset().top;
	jQuery(window).scroll(function()
	{
		var scrollPos=jQuery(window).scrollTop();
		if(scrollPos>=navOffset){
			$('#header').css({position='fixed';top='0px'});

		}
	});
});