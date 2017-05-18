wj_id = '96ca13d3f6';
popup_exit_enable = true;

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
		
		/*
		
		// load js:
		
		$.getScript( template_path+'/js/moment/moment.min.js', function() {
			
				$.getScript( template_path+'/js/moment/moment-timezone-with-data-2010-2020.min.js', function() {
					
					$.getScript( template_path+'/js/jquery.validate.min.js', function() {
						
						$.getScript( template_path+'/js/popup-webinarjam/popup-webinarjam.js' );
						
					} );
					
				} );
			
		} );
		
		// load css:
		
		$('<link/>', {
			
			rel: 'stylesheet',
			type: 'text/css',
			href: template_path+'/js/popup-webinarjam/popup-webinarjam.css?ver='+template_version
		
		}).appendTo('head');
		
		*/
	
		var popup_exit_show	= 0;
			
		var popup_exit_html = ''+
				
		'<div id="popup-exit-v2">'+
		
			'<p class="size-56 medium title">LEARN THE SIMPLE TACTIC I USED TO&nbsp;RANK&nbsp;#1 FOR "ONLINE MARKETING"</p>'+
			'<p class="size-32 description">Watch my webinar to learn the exact steps I used to skyrocket my rankings</p>'+
				
			'<p class="btn-wrap"><button title="regpopbox_20948_96ca13d3f6" class="btn btn-wrw">YES NEIL, TEACH ME HOW TO GROW MY TRAFFIC!</button></p>'+
			
			'<p class="size-22 close">No thanks, I don\'t want more traffic</p>'+
			
		'</div>';
		
		$(document).mouseleave(function() {
				
			if ( popup_exit_show == 0 ) {

				createCookie(popup_exit_cookie, '1', '365');
				popup_exit_show = 1;
				
				$.magnificPopup.close();

				$.magnificPopup.open({

					enableEscapeKey : false,
					closeOnBgClick	: false,
					/*
					closeBtnInside	: false,
					tClose			: false,
					showCloseBtn	: false,
					*/

					items: {

						src: popup_exit_html,
						type: 'inline',
						midClick: true 
						
					},
					  
					callbacks: {
						
						open: function() {
						
							$('body').addClass('mfp-popup-exit-v2');
							
							$( '#popup-exit-v2 .close' ).click( function() {
							
								$.magnificPopup.close();
								
							});
							
						},
						
						close: function() {
						
							$('body').removeClass('mfp-popup-exit-v2');
							
						}

					}
				
				});
			
			}

		});
	
	};
	
})(jQuery);