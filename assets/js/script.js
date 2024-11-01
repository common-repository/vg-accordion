/**
 * VG Accordion
 * 
 * 
 * @package WordPress
 * @subpackage vg-accordion
 * @author Vishal Gupta <vishal.surajpal.gupta@gmail.com>
 */

(function($){
	$(document).ready(function(){
		$('.vg-head').on('click', function(){
			if($(this).next().css('display')=='none'){
				$('.vg-content').slideUp();
				$(this).next().slideDown();
			}
		});
	});

})(jQuery);