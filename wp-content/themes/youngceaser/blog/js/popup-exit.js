(function($){
	
	// mobile:
	
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	
		var isMobile = true;
		
	} else {
	
		var isMobile = false;
	
	};
	
	
	// cookies:
	
	function createCookie(name, value, days) {
		
		var expires;

		if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		expires = "; expires=" + date.toGMTString();
		} else {
		expires = "";
		}
		document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
	
	}

	function readCookie(name) {
		
		var nameEQ = encodeURIComponent(name) + "=";
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) === ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
		}
		return null;
	
	}

	function eraseCookie(name) {
		
		createCookie(name, "", -1);
		
	}
	
	
	// popup:

	var popup_exit_cookie = 'popup_exit_closed';
	
	if( !isMobile && !( readCookie( popup_exit_cookie ) ) ) {
	
		var popup_exit_show	= 0;
		
		var popup_exit_url				= 'https://im242.infusionsoft.com/app/form/process/534508ecff078c5d73e8ac82f0a0f56b';
		var popup_exit_field_name		= 'inf_field_FirstName';
		var popup_exit_field_email		= 'inf_field_Email';
			
		var popup_exit_html = ''+
				
		'<div id="popup-exit">'+
		
			'<div class="tb-form tb-form-popup">'+
		
				'<p class="title">' + np_vars_pe.popup_exit_title + '</p>'+
				'<p class="description">' + np_vars_pe.popup_exit_description + '</p>';
				
		if ( !( typeof visitors_title === 'undefined' ) && !( typeof visitors_counter === 'undefined') ) popup_exit_html = popup_exit_html + '<p class="visitors"> '+ visitors_title + ': <span>' + visitors_counter + '</span></p>';
		
		popup_exit_html = popup_exit_html +
					
				'<form class="form" accept-charset="UTF-8" action="' + popup_exit_url + '" method="post">'+
				
					'<input name="inf_form_xid" type="hidden" value="534508ecff078c5d73e8ac82f0a0f56b">'+
					'<input name="inf_form_name" type="hidden" value="Quick Sprout &#a;Pop Up">'+

					'<input name="infusionsoft_version" type="hidden" value="1.54.0.55">'+
						
					'<input class="name" type="text" name="' + popup_exit_field_name + '" placeholder="' + np_vars_pe.popup_exit_first_name + '">'+
					'<input class="email" type="email" name="' + popup_exit_field_email + '" placeholder="' + np_vars_pe.popup_exit_email_address + '" required>'+
					
					'<input class="submit" type="submit" value="' + np_vars_pe.popup_exit_submit + '">'+
					
				'</form>'+
				
			'</div>'+
			
		'</div>';
	
		$(document).mouseleave(function() {
				
			if ( popup_exit_show == 0 ) {

				createCookie(popup_exit_cookie, '1', '365');
				popup_exit_show = 1;

				$.magnificPopup.open({

					enableEscapeKey : false,
					closeOnBgClick	: false,
					closeBtnInside	: false,
					tClose			: 'Close',

					items: {

						src: popup_exit_html,
						type: 'inline',
						midClick: true 
						
					},
					  
					callbacks: {
						
						open: function() {
						
							$('body').addClass('mfp-popup-exit');
							
						},
						
						close: function() {
						
							$('body').removeClass('mfp-popup-exit');
							
						}

					}
				
				});
			
			}

		});
	
	};
	
})(jQuery);