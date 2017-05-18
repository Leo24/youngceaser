(function($){
	
	// contact form 7 radio with no default fix:
	
	var checkboxes = document.querySelectorAll('.wpcf7-exclusive-checkbox input[type=checkbox]');

	for (var i in checkboxes ) {
		
		var checkbox = checkboxes[i];
		checkbox.type = 'radio';
		
	};
	
	
	// add header:
	
		$( 'div[id^="wpcf7-f27054"] .popup-form' ).prepend('<div class="header"><ul class="list"><li class="item item-active"><p><span class="number">1</span> <span class="text">' + np_vars_pf.step_2_title + '</span></p></li><li class="item"><p><span class="number">2</span> <span class="text">' + np_vars_pf.step_3_title + '</span></p></li></ul></div>');
		
		$( 'div[id^="wpcf7-f24149"] .popup-form' ).prepend('<div class="header"><ul class="list"><li class="item item-active"><p><span class="number">1</span> <span class="text">' + np_vars_pf.step_1_title + '</span></p></li><li class="item"><p><span class="number">2</span> <span class="text">' + np_vars_pf.step_2_title + '</span></p></li><li class="item"><p><span class="number">3</span> <span class="text">' + np_vars_pf.step_3_title + '</span></p></li></ul></div>');
		$( 'div[id^="wpcf7-f25350"] .popup-form' ).prepend('<div class="header"><ul class="list"><li class="item item-active"><p><span class="number">1</span> <span class="text">' + np_vars_pf.step_1_title + '</span></p></li><li class="item"><p><span class="number">2</span> <span class="text">' + np_vars_pf.step_2_title + '</span></p></li><li class="item"><p><span class="number">3</span> <span class="text">' + np_vars_pf.step_3_title + '</span></p></li></ul></div>');
	
	// popup form:
	
	function popup_form_show( form ) {
		
		if ( !( typeof form === 'undefined' ) ) {
			
			var popup_html = $( 'div[id^="' + form + '"] .popup-form' ).prop( 'outerHTML' );
			
		} else {
		
			var popup_html = $( '.popup-form' ).prop( 'outerHTML' );
			
		};
		
		$.magnificPopup.open({

			tClose	: 'Close',

			items: {

				src: popup_html,
				type: 'inline',
				midClick: true
				
			},
			
			callbacks: {
				
				open: function() {
					
					// init contact form 7 ajax:
					
					$( '.popup-form' ).wpcf7InitForm();
					
					// change "go back" button text:
					
					$( '.popup-form .cf7mls_back' ).val( 'Go Back' );
					
					// add ion-slider:
					
					if ( lang == 'br' ) {
						
						$( '.mfp-content .field-budget' ).ionRangeSlider({
							
							grid: true,
							values: [
							'Entre R$0 a R$2.500 por mês',
							'Entre R$2.500 a R$10.000 por mês',
							'Entre R$10.000 a R$25.000 por mês',
							'Entre R$25.000 e R$50.000 por mês',
							'Entre R$50.000 a R$100.000 por mês',
							'Mais de R$100.000 por mês'
							]

						});
						
						$( '.mfp-content .field-revenue' ).ionRangeSlider({
							
							grid: true,
							values: [
							'Entre R$0 a R$100.000',
							'Entre R$100.000 a R$500.000',
							'Entre R$500.000 a $2.500.000',
							'Entre R$2.500.000 a R$10.000.000',
							'Acima de R$10.000.000',
							]

						});
						
					} else {
					
						//$( '.mfp-content .field-budget' ).val( '$10,000 to $50,000' );
						
						$( '.mfp-content .field-budget' ).find('option:first-child').text('Select your budget').attr('disabled','disabled');
						
						/*
						$( '.mfp-content .field-budget' ).ionRangeSlider({
							
							grid: true,
							from: 2,
							values: [
							'Under $5000',
							'$5000 to $10,000',
							'$10,000 to $50,000',
							'$50,000 to $100,000',
							'Above $100,000'
							]

						});
						*/
					
					};


				},
				
				close: function() {
					
					$( '.popup-form .list li' ).removeClass( 'item-active' );
					$( '.popup-form .list li:nth-child(1)' ).addClass( 'item-active' );
					
					
				}
				
			}
					
		});
		
	}
	
	
	$( 'body' ).on( 'click', '.btn-popup-form', function(e) {
		
		e.preventDefault();
		$.magnificPopup.close();
		
		form = $(this).attr('data-popup-form-id');
		
		popup_form_show( form );
		
	});
	
	
	$( '.form-popup-form' ).submit(function(e){
		
		e.preventDefault();
		$.magnificPopup.close();
		
		var url = $( '.form-popup-form .form-url' ).val();
		
		$ ('.popup-form input[name="cf-url"]').val(url);
		
		form = $(this).attr('data-popup-form-id');
		
		popup_form_show( form );
		
	});
	
})(jQuery);