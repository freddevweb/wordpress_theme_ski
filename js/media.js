jQuery(function($){
	
	// console.log("hello");
	$('#form-img-set label').click(function(){
		var $input = $(this).children()[0];
		console.log($input );
		console.log( $($input).is("[checked]") );
		$($input).attr('checked').siblings().removeAttr('checked');
		$(this).addClass('selected').siblings().removeClass('selected');
	});

});
