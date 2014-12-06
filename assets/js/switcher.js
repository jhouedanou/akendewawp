/*-----------------------------------------------------------------------------------
/* Styles Switcher
-----------------------------------------------------------------------------------*/

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function(jQuery) {
	
        // Style Switcher	
		jQuery('#style-switcher').animate({
			right: '-300px'
		});
		
		jQuery('#style-switcher h2 a').click(function(e){
			e.preventDefault();
			var div = jQuery('#style-switcher');
			console.log(div.css('right'));
			if (div.css('right') === '-300px') {
				jQuery('#style-switcher').animate({
					right: '0px'
				}); 
			} else {
				jQuery('#style-switcher').animate({
					right: '-300px'
				});
			}
		})
                
		// Color Changer
		

		
		jQuery(".green" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/stylegreen.css" );
			return false;
		});
		
		jQuery(".red" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/stylered.css" );
			return false;
		});
		
		jQuery(".blue" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/styleblue.css" );
			return false;
		});
		jQuery(".purple" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/stylepurple.css" );
			return false;
		});
		
		jQuery(".grass" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/stylegrass.css" );
			return false;
		});
		jQuery(".orange" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/styleorange.css" );
			return false;
		});
		
		jQuery(".darkblue" ).click(function(){
			jQuery("#colors" ).attr("href", "assets/css/styledarkblue.css" );
			return false;
		});
		
		
		
		
		

		jQuery("#layout-switcher").on('change', function() {
			jQuery('#layout').attr('href', jQuery(this).val() + '.css');
		});;

		
		
		
		jQuery('.colors li a').click(function(e){
			e.preventDefault();
			jQuery(this).parent().parent().find('a').removeClass('active');
			jQuery(this).addClass('active');
		})
		
	
		
		
		jQuery('#reset a').click(function(e){
		  jQuery("#colors" ).attr("href", "assets/css/style.css" );
					
		})
			

	});