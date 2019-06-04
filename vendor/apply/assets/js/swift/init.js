 jQuery(document).ready(function($) {

 	jQuery("#crst_swift").validationEngine('attach');
 	
 	$('input').placeholder();
 	$(window).resize(function(){
 		var _El = $('#important-number');
 		if($(window).width()<768){
 			/*console.log(_El.parent());
 			$('.listitem').prepend(_El.parent());*/
 		}else {
                //alert('hi')
                $('.interchange').append(_El.parent());

            }

        }).trigger('resize');

 });