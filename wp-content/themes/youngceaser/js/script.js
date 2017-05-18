(function($){
	
	// ie 8 bug fix:
	
	if (!Date.now) Date.now = function () {
		
		return +new Date();
		
	};
	
	
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
	

	// popup-delay:
	
	var popup_delay_cookie = 'popup_delay_closed';
	
	if( !isMobile && !( readCookie( popup_delay_cookie ) ) && !( typeof popup_delay_img === 'undefined' ) && (!$('body').hasClass('page-template-page_short')) ) {
		
		var popup_delay_html = $(
	
		'<div id="popup-delay">'+

			'<a class="popup-delay-img" href="'+popup_delay_url+'"><img src="'+popup_delay_img+'" width="'+popup_delay_img_w+'" height="'+popup_delay_img_h+'" alt="">'+
			'<a class="mfp-np-close popup-delay-close" href="#">Close</a>'+
			
		'</div>'

		);
		
		$('body').append(popup_delay_html);
		np_popup_delay_hide(popup_delay_html,'first');
		
		function np_popup_delay() {
	
			if(!($('#popup-top').length)){
							
				clearInterval(myVar);
				
				setTimeout( function() {
							
					popup_delay_html.animate({
						'left': "0"
					}, 500, function(){
						createCookie(popup_delay_cookie, '1', '365');	
					});
				
				}, 10000 )			
									
			}
			
		};
		
		var myVar = setInterval(np_popup_delay, 5000);
		
		function np_popup_delay_hide(object,time) {
			if(time=="first")
				object.css('left',(0-object.width()));
			else
				object.animate({'left': 0-object.width()}, 500);
		}
		
		$( '#popup-delay .popup-delay-close' ).on('click', function(e) {
		
			e.preventDefault();
			np_popup_delay_hide(popup_delay_html);
		
		});	
	
	};
	
	
	// popup-comments:
	
	/*

	if( $('#comments').length ) {
	
		var popup_comments_cookie = 'popup_comments_closed';
		
		if(!isMobile && !(readCookie(popup_comments_cookie))) {
			
			var popup_comments_show	= 0;
			var popup_comments_html	= ''+
			
			'<div id="popup-comments" class="hidden">'+
			
				'<div class="tb-form tb-form-popup">'+
			
					'<p class="title">I\'m sharing everything on&nbsp;my&nbsp;journey&nbsp;to <span>100,000</span>&nbsp;monthly visitors.</p>'+
					'<p class="description">I’m learning a lot and so will you.</p>'+
						
					'<form class="form" accept-charset="UTF-8" action="https://im242.infusionsoft.com/app/form/process/5c5572c518f3cf8ef242fd98e3cb9ba5" method="post">'+
					
						'<input name="inf_form_xid" type="hidden" value="5c5572c518f3cf8ef242fd98e3cb9ba5">'+
						'<input name="inf_form_name" type="hidden" value="NP - Pop Up Code">'+
						'<input name="infusionsoft_version" type="hidden" value="1.47.0.43">'+
							
						'<input class="name" type="text" name="inf_field_FirstName" placeholder="First name">'+
						'<input class="email" type="email" name="inf_field_Email" placeholder="Email address" required>'+
						
						'<input class="submit" type="submit" value="Send me free lessons">'+
					
						'<p class="privacy">100 % privacy. I will never spam you!</p>'+
						
					'</form>'+
					
					'<p class="close">Close</p>'+
					
				'</div>'+
				
			'</div>';
			
			$('#footer').after(popup_comments_html);
			
			var popup_comments = $('#popup-comments');
			
			function checkScrolling_popup_comments(event) {
				
				if ( popup_comments_show == 0 ) {
			
					$('#comments:in-viewport').each(function() {
						
						if ($(popup_comments).hasClass('hidden')) {
							
							$(popup_comments).removeClass('hidden');
							
						};
					
					});
				
				};
				
			}
			
			$(window).bind('scroll', checkScrolling_popup_comments);
			
			$('#popup-comments .close').click(function(){
			
				createCookie(popup_comments_cookie, '1', '365');
				popup_comments_show = 1;
				
				$(popup_comments).addClass('hidden');
			
			});
			
		};
		
	};

	*/
	
	
	// twitter:
	
	if( $('.tweet-js').length ) {
	
		function loadTwitter() {
		
			if (typeof (twttr) != 'undefined') {
			
				twttr.widgets.load();
			
			} else {
			
				$.getScript('http://platform.twitter.com/widgets.js');
			
			}
		
		};
	
		function checkScrollingTwitter(event) {
		
			$('.tweet-js:in-viewport').each(function() {
			
				$(this).find('a').addClass('twitter-share-button');
				$(this).removeClass('tweet-js');
				
				loadTwitter();
			
			});
			
		}
		
		$(window).bind('load', checkScrollingTwitter);
		$(window).bind('scroll', checkScrollingTwitter);
		
	};
	
	
	// widget-tabs:
	
	$( '.main-aside .widget-tabs' ).each(function() {
		
		$( this ).addClass( 'widget-tabs-js' );
		
		var code = '<ul class="urls">';
		
		$(this).find('.title').each(function() {
			
			code = code + '<li class="urls-item" data-url="' + $(this).next('ul').attr('class') + '">' + $(this).text() + '</li>';
			
		});
		
		code = code + '</ul>';
		
		$( this ).prepend( code );
		
		$( this ).find( '.urls li:first-child' ).addClass( 'active' );
		$( this ).find( '.list .tab' ).hide();
		$( this ).find( '.list .tab:first-child' ).show();
		
	});
	
	$( '.main-aside .widget-tabs .urls li' ).click(function() {
	
		var list	= $(this).parent('.urls').next('.list');
		var url		= '.' + $(this).attr('data-url');
		
		list.find( '.tab' ).hide();
		list.find( url ).parent('.tab').show();
		
		$(this).parent('.urls').find('li').removeClass('active');
		$(this).addClass( 'active' );
	
	});
	

	
	// zzz:

	if( $( '.main-aside .widget-zzz' ).length > 0 ){
		
		var widgetZZZ			= $('.main-aside .widget-zzz');
		var headerHeight		= $('#header').outerHeight();
		var footerHeight		= $('#footer').outerHeight();
		
		if ( $(window).width() > 1200 ) {
			
			$(widgetZZZ).sticky({
				topSpacing:headerHeight+60,
				bottomSpacing:footerHeight+60
			});
		
		} else {
		
			$(widgetZZZ).unstick();
		
		}
		
		function widgetZZZResize() {
		
			if ( $(window).width() < 1201 ) {
			
				$(widgetZZZ).unstick();
				
			} else {
				
				$(widgetZZZ).sticky({
					topSpacing:headerHeight+60,
					bottomSpacing:footerHeight+60
				});
				
			}
			
		}
		
		$(window).on('resize', function(){

			widgetZZZResize();
		
		});
	
	}
	
	
	// fitvid:
	
	$( '.fitvid' ).each(function() {
	
		$(this).fitVids();
	
	});
		
	
	// consulting:
	
	if( $( '.np-form-reserve' ).length > 0 ){
		
		var text_revenue	= '';
		var text_budget		= '';
		
		if ( lang == 'br' ) {
			
			text_revenue	= 'Receita anual';
			text_budget		= 'Orçamento de marketing atual';
			
		} else if ( lang == 'de' ) {
		
			text_revenue	= 'Dein jährlicher Umsatz';
			text_budget		= 'Dein aktuelles Marketing-Budget';
		
		} else if ( lang == 'it' ) {
			
			text_revenue	= 'Entrate annue';
			text_budget		= 'Budget dedicato al marketing';
			
		} else if ( lang == 'es' ) {
			
			text_revenue	= 'Ingreso Anual';
			text_budget		= 'Presupuesto de marketing actual';
		
		} else {
			
			text_revenue	= 'Yearly revenue';
			text_budget		= 'Current marketing budget';
		
		}

	
		$( '.np-form-reserve .select-revenue' ).find('option:first-child').text(text_revenue).attr('disabled','disabled');
		$( '.np-form-reserve .select-budget' ).find('option:first-child').text(text_budget).attr('disabled','disabled');
		
		$( '.np-form-reserve .select' ).change(function() {

			$(this).removeClass( 'select-placeholder' );
		
		});
	
	};
	
	// button-mdr
	
	if( $( '#button-mdr' ).length > 0 ){
		
		setTimeout( function() {
		
			$('#button-mdr')
				.css('opacity', 0)
				.slideDown(500)
				.animate(
					{ opacity: 1 },
					{ queue: false, duration: 1000 }
				);
		
		}, 15.5*60*1000);
	
	};
	
	
	// shares:
	
	if( $('.share-list').length ) {
		
		// float:
		
		var body_width = $(window).width();
		
		if ( body_width > 960 ) {
								
			var share_list				= $('.share-list').html();
			var entry_content_offset	= $('.entry-content').offset();
			
			$('body').append('<div id="shares" style="top:' + entry_content_offset.top + 'px"><ul class="share-list">' + share_list + '</ul></div>');
			
			var main_width			= $('#main').width();
			var main_article_width	= $('.main-article').width();
			var main_aside_width	= $('.main-aside').width();
			var share_list_width	= $('#shares').width();
			var header_height		= $('#header').outerHeight();
			var offset				= 12;						
			
			var share_list_left_margin = share_list_width+(main_width-(main_article_width+main_aside_width+share_list_width));
					
			if ( body_width > 1400 ) {
				
				share_list_left_margin = 0 - main_width/2 - share_list_width - offset;	
				
			};
			
			if ( $('body').hasClass('rtl') ) {
			
				$('#shares').css('margin-right', share_list_left_margin );	
				
			} else {
				
				$('#shares').css('margin-left', share_list_left_margin );
				
			}
			
			var shares_offset = $( '#shares' ).offset();
				
			function checkScrolling_sharelist(event) {
				
				var h = $('#header').offset();
				
				if ( ( h.top + header_height + 60 ) > shares_offset.top ) {
				
					$( '#shares' ).css( 'position', 'fixed' );
					$( '#shares' ).css( 'top', header_height + 60 );
					$( '#shares' ).css( 'opacity', '1' );
				
				} else {
				
					$( '#shares' ).css( 'position', 'absolute' );
					$( '#shares' ).css( 'top', entry_content_offset.top );
					$( '#shares' ).css( 'opacity', '0' );
				
				}
				
			}
			
			$(window).bind('scroll', checkScrolling_sharelist);
					
		}

		
		// click;
		
		$( '.share-list a' ).on('click', function(e) {
			
			var body_width = $(window).width();
			var body_height = $(window).height();
			
			if ( body_width > 700 && body_height > 500 ) {
		
				var popup_width = 700;
				var popup_height = 500;
				
				var url = $(this).attr('href');

				window.open(url,'','width=' + popup_width + ',height=' + popup_height + ',left=' + (body_width/2 - popup_width/2) + ',top=' + (body_height/2 - popup_height/2) + ',scrollbars=yes');
			
				e.preventDefault();
				
			}
		
		});
		
	};
	
	// lazyload:
	
	if( $('.blog-list').length || $('.single-post').length || $('.page-template-page_guide').length ) {
	
		if ( isMobile ) {
			
			function imgLazyResize() {
				
				var body_width = $(window).width();
				
				if ( body_width < 1050 ) {
				
					$('img.lazy').each(function() {
						
						img_org_width	= $(this).attr('width');
						img_org_height	= $(this).attr('height');
						
						img_width		= $(this).width();
						img_height		= $(this).css('height', img_width * img_org_height / img_org_width);
						
					});
				
				} else {
				
					$('img.lazy').each(function() {
					
						$(this).css('height','');
					
					});
				
				}
				
			};
			
			imgLazyResize();
			
			$(window).on('resize', function(){

				imgLazyResize();
			
			});
		
		};
		
		$( 'img.lazy' ).lazyload({
			
			threshold : 1000,
			effect : 'fadeIn',
			
		});
	
	}
	
	
	// check domain:
	
	$('#domain-check').submit(function(e){
	
		var domain_check_name	= $('#domain-check .name').val();
		var domain_check_tld	= $('#domain-check .tld').val();
		
		if ( domain_check_name != '' && domain_check_tld != '' ) {
		
			$( '#domain-check .info' ).slideUp( 'fast' );
			$( '#domain-check .loading' ).fadeIn( 'fast' );
			$( '#domain-check .submit' ).val( 'Checking...' );
			
			ajax_check_domain( domain_check_name, domain_check_tld );
			
		};
		
		return false;
	
	});
	
	function ajax_check_domain( e_name, e_tld ) {

		 $.ajax({
		
			type: 'POST', 
			url: base_path+'/wp-admin/admin-ajax.php',
			data: { 
			
				action: 'np_domain_check',
				name: e_name,
				tld: e_tld
				
			}, 
			beforeSend: function(){}, 
			complete: function(){},
			success: function( data ){ 				
				
				$( '#domain-check .submit' ).val( 'Check Availability' );
				$( '#domain-check .loading' ).fadeOut( 'fast' );
				$( '#domain-check .info' ).html(data).slideDown( 'fast' );
				
			},  				
			error: function( MLHttpRequest, textStatus, errorThrown ){}  
		});
		
	};

	// check keyword:
	
	$('#keyword-check').submit(function(e){
	
		var keyword_check_name	= $('#keyword-check .keyword').val();
		
		if ( keyword_check_name != '' ) {
		
			$( '#keyword-check .info' ).slideUp( 'fast' );
			$( '#keyword-check .loading' ).fadeIn( 'fast' );
			$( '#keyword-check .submit' ).val( 'Checking...' );
			
			ajax_check_keyword( keyword_check_name );
			
		};
		
		return false;
	
	});
	
	function ajax_check_keyword( e_name ) {

		 $.ajax({
		
			type: 'POST', 
			url: base_path+'/wp-admin/admin-ajax.php',
			data: { 
			
				action: 'np_keyword_check',
				keyword: e_name
				
			}, 
			beforeSend: function(){}, 
			complete: function(){},
			success: function( data ){ 				
				
				$( '#keyword-check .submit' ).val( 'Check' );
				$( '#keyword-check .loading' ).fadeOut( 'fast' );
				$( '#keyword-check .info' ).html(data).slideDown( 'fast' );
				
			},  				
			error: function( MLHttpRequest, textStatus, errorThrown ){}  
		});
		
	};
	
	
	// sidebar optin 2
	
	if( !isMobile && ( $( window ).width() > 940 ) && ( $( '.widget-optin-2' ).length > 0 ) ){
		
		$( '.widget-optin-2 .url' ).click(function() {
			
			var target = $(this.hash);
			if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
			if (target.length == 0) target = $('html');
			$('html, body').scrollTop(target.offset().top-110);
			return false;
		
		});
	
	};
	
	
	// menu-footer:
	
	var lang_list = $('.menu-footer .lang-list');
	
	$('.menu-footer .menu-item-lang').tooltipster({
		
		content: lang_list,
		interactive: true,
		theme: 'tooltipster-mf',
		offsetY: 4
	
	});

})(jQuery);