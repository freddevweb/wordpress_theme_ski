

jQuery( document ).ready( function( $ ) {
	
	// console.log("coucou");
	$($(".slide")[0]).addClass("active");
	// console.log($(".slide"));
	var slideIndex = 0;
	var slides = $(".slide");
	
	carroussel();

	function carroussel(){
		// console.log(slides.length);
		slideIndex ++;
		var slideIndexLast = slideIndex - 1;
		
		if( slideIndex > slides.length-1 ){
			slideIndexLast = slides.length-1;
			slideIndex = 0;
		}
		
		// $(elts[slideIndexLast]).fadeOut("fast");
		// $(elts[slideIndex-1]).slideUp("slow");
		$(slides[slideIndexLast]).removeClass("active");

		// $(elts[slideIndex]).fadeIn("fast");
		// $(elts[slideIndex]).slideDown("slow");
		$(slides[slideIndex]).addClass("active");

		setTimeout(carroussel, 3000,  );
	};

});
	