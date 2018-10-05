(function ($) {
    console.log('WORKING JS');
	
	$(".wdform-element-section").each(function(index){
		if(index === 13){
			$("#wdform_16_element1").remove();
			$( '<textarea class="input_deactive" id="wdform_16_element1" name="wdform_16_element1" value="" title="" style="width: 100%; border: 1px solid #d8d8d8" maxlength="340"></textarea>' ).appendTo( $(this) );
		}	
	});
	
	
}(jQuery));