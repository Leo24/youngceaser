(function($){

	$(window).load(function() {

		// ie 8 bug fix:

		if (!Date.now) Date.now = function() {

			return +new Date();

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


		// preload images:

		function preload(arrayOfImages) {

			$(arrayOfImages).each(function(){

				$('<img/>')[0].src = this;

			});

		};


		$.extend({
		playSound: function(){
		return $(
		'<audio autoplay="autoplay" style="display:none;">'
		+ '<source src="' + arguments[0] + '.mp3" />'
		+ '<embed src="' + arguments[0] + '.mp3" hidden="true" autostart="true" loop="false" class="playSound" />'
		+ '</audio>'
		).appendTo('body');
		}
		});


		// variables:

		var isShow						= false;
		var isStep2						= true;
		var isStep3						= false;
		var isRing						= false;

		var popup_webinarjam_alert_mr	= false;

		if( $( 'button[title^=regpopbox]' ).length ) {

			wj_set_id( $( 'button[title^=regpopbox]' ) );

		};


		// function - check wj id:

		function wj_set_id( e ) {

			var title	= $( e ).attr( 'title' ).split( '_' );
			wj_id		= title[2];

		}


		// prepare popup:

		wj_popup_prepare();


		// check schedules:

		wj_check_schedules();


		// display popup on exit:

		if( $( '.btn-wj-exit[title^=regpopbox]' ).length ) {

			$( document ).mouseleave( function(){

				if ( !isShow ) {

					if ( !$.magnificPopup.instance.isOpen ) {

						isShow = true;
						wj_popup();

					}

				}

			});

		};


		// display popup on click:

		$( 'body' ).on( 'click', 'button[title^=regpopbox]', function() {

			isShow = true;
			wj_popup();

		});


		// display popup on click on .p-webinar-popup:

		$( 'body' ).on( 'click', '.p-webinar-popup a', function(e) {

			wj_id = '96ca13d3f6';

			isShow = true;
			wj_popup();

			e.preventDefault();

		});


		// display popup on click on submit seo-analyzer:

		$( '.page-template-page_seo-analyzer .form' ).submit(function( e ) {

			wj_id = '96ca13d3f6';

			isShow = true;
			wj_popup( 'mfp-popup-webinarjam-analyzer' );

			e.preventDefault();

		});


		// function - prepare popup:

		function wj_popup_prepare() {

			// add popup code:

			var wj_popup_html = ''+

			'<div class="popup-webinarjam">'+

				'<div class="wrap">'+

					'<div class="starts-in">'+

						'<p class="img"><img src="' + template_path + '/js/popup-webinarjam/images/neil-patel.png" width="87" height="87" alt=""></p>'+

						'<div class="light timer">'+

							'<p>Webinar Starts In</p>'+

							'<div class="counter">'+

								'<p class="value value-min"><span class="size-22 bold red number">14</span> <span class="text">min</span></p>'+
								'<p class="value value-sep">:</p>'+
								'<p class="value value-sec"><span class="size-22 bold red number">59</span> <span class="text">sec</span></span>'+

							'</div>'+

						'</div>'+

						'<p class="border medium title">How to market a "tiny" website that doesn\'t have any visitors or money</p>'+

						'<p class="btn-wrap">'+

							'<span class="btn btn-wrg">Yes! Reserve My Seat Now!</span>'+

						'</p>'+

					'</div>'+

					'<div class="progress">'+

						'<div class="progress-bar">'+

							'<p class="progress-title"><span class="progress-percent">75</span>% complete</p>'+

						'</div>'+

					'</div>'+

					'<div class="progress-analyzer analyzer">'+

						'<p class="title">Your SEO report is loading...</p>'+

						'<p class="percent"><span></span></p>'+

					'</div>'+

					'<div class="content">'+

						'<form class="np-form" action="" method="post">'+

							'<input type="hidden" name="timezone" value="">'+
							'<input type="hidden" name="timezone_gmt" value="">'+

							'<div class="step-1">'+

								'<p class="size-36 light title clock">The webinar starts in <span class="counter nl"><span class="medium">14 minutes</span> and <span class="medium">59 seconds</span></span></p>'+

								'<div class="analyzer">'+

									'<p class="size-36 light title border">Do You Want More <span class="red medium">Search Traffic?</span></p>'+
									'<p class="size-18 light center description">I\'m hosting a webinar at 10am that will break down the exact steps I used to rank number 1 for "online marketing".</p>'+

								'</div>'+

							'</div>'+

							'<div class="step-2">'+

								'<p class="p-field">'+

									'<input class="field" type="text" name="name" value="" placeholder="First Name" required>'+

								'</p>'+

								'<p class="p-field">'+

									'<input class="field" type="email" name="email" value="" placeholder="Email Address" required>'+

								'</p>'+

								'<p class="p-field">'+

								'<input class="field" type="email" name="email" value="" placeholder="Monthly Marketing Budget" required>'+

								'</p>'+

								'<p class="btn-wrap">'+

									'<span class="btn btn-wrg btn-continue">Yes! Reserve My Seat Now!</span>'+
									'<span class="btn btn-wrg btn-continue analyzer">Yes! Reserve My Seat!</span>'+

								'</p>'+

								'<p class="light red p-close">No thanks, I don’t want more traffic.</p>'+
								'<p class="light red p-close analyzer">No thanks, take me to my report.</p>'+

							'</div>'+

							'<div class="step-3">'+

								'<p class="size-36 light medium title">Thank You For Registering!</p>'+

								'<p class="size-26 red reminder">Do you want a text reminder?</p>'+

								'<p class="p-field field-select-wrap">'+

									'<select name="country" class="field field-select" required>'+

										'<option selected disabled>Country</option>'+

									'</select>'+

								'</p>'+

								'<p class="p-field">'+

									'<input class="field" type="text" name="phone" value="" placeholder="Phone Number" required>'+

								'</p>'+

								'<p class="btn-wrap">'+

									'<span class="btn btn-wrg">Yes! Text Me a Reminder!</span>'+

								'</p>'+

								'<p class="info">Your details will be forwarded to the webinar organizer, who might communicate with you regarding this event or their services</p>'+

							'</div>'+

						'</form>'+

						'<p class="size-18 medium red checking">Checking...</p>'+

					'</div>'+

				'</div>'+

				'<div class="popup-alert-close"><img src="' + template_path + '/js/popup-webinarjam/images/2.png" width="60" height="60" alt=""></div>'+

			'</div>';


			$( 'body' ).append( wj_popup_html );

			// add additional class:

			if ( ( document.domain ).indexOf( 'quicksprout.com' ) >= 0 ) {

				$( '.popup-webinarjam' ).addClass( 'popup-webinarjam-qs' );

			}

			// add countries:

			var country		= JSON.parse('[{"name": "Afghanistan","dial_code": "93","code": "AF"},{"name": "Aland Islands","dial_code": "358","code": "AX"},{"name": "Albania","dial_code": "355","code": "AL"},{"name": "Algeria","dial_code": "213","code": "DZ"},{"name": "AmericanSamoa","dial_code": "1","code": "AS"},{"name": "Andorra","dial_code": "376","code": "AD"},{"name": "Angola","dial_code": "244","code": "AO"},{"name": "Anguilla","dial_code": "1","code": "AI"},{"name": "Antarctica","dial_code": "672","code": "AQ"},{"name": "Antigua and Barbuda","dial_code": "1","code": "AG"},{"name": "Argentina","dial_code": "54","code": "AR"},{"name": "Armenia","dial_code": "374","code": "AM"},{"name": "Aruba","dial_code": "297","code": "AW"},{"name": "Australia","dial_code": "61","code": "AU"},{"name": "Austria","dial_code": "43","code": "AT"},{"name": "Azerbaijan","dial_code": "994","code": "AZ"},{"name": "Bahamas","dial_code": "1","code": "BS"},{"name": "Bahrain","dial_code": "973","code": "BH"},{"name": "Bangladesh","dial_code": "880","code": "BD"},{"name": "Barbados","dial_code": "1","code": "BB"},{"name": "Belarus","dial_code": "375","code": "BY"},{"name": "Belgium","dial_code": "32","code": "BE"},{"name": "Belize","dial_code": "501","code": "BZ"},{"name": "Benin","dial_code": "229","code": "BJ"},{"name": "Bermuda","dial_code": "1","code": "BM"},{"name": "Bhutan","dial_code": "975","code": "BT"},{"name": "Bolivia, Plurinational State of","dial_code": "591","code": "BO"},{"name": "Bosnia and Herzegovina","dial_code": "387","code": "BA"},{"name": "Botswana","dial_code": "267","code": "BW"},{"name": "Brazil","dial_code": "55","code": "BR"},{"name": "British Indian Ocean Territory","dial_code": "246","code": "IO"},{"name": "Brunei Darussalam","dial_code": "673","code": "BN"},{"name": "Bulgaria","dial_code": "359","code": "BG"},{"name": "Burkina Faso","dial_code": "226","code": "BF"},{"name": "Burundi","dial_code": "257","code": "BI"},{"name": "Cambodia","dial_code": "855","code": "KH"},{"name": "Cameroon","dial_code": "237","code": "CM"},{"name": "Canada","dial_code": "1","code": "CA"},{"name": "Cape Verde","dial_code": "238","code": "CV"},{"name": "Cayman Islands","dial_code": "1","code": "KY"},{"name": "Central African Republic","dial_code": "236","code": "CF"},{"name": "Chad","dial_code": "235","code": "TD"},{"name": "Chile","dial_code": "56","code": "CL"},{"name": "China","dial_code": "86","code": "CN"},{"name": "Christmas Island","dial_code": "61","code": "CX"},{"name": "Cocos (Keeling) Islands","dial_code": "61","code": "CC"},{"name": "Colombia","dial_code": "57","code": "CO"},{"name": "Comoros","dial_code": "269","code": "KM"},{"name": "Congo","dial_code": "242","code": "CG"},{"name": "Congo, The Democratic Republic of the Congo","dial_code": "243","code": "CD"},{"name": "Cook Islands","dial_code": "682","code": "CK"},{"name": "Costa Rica","dial_code": "506","code": "CR"},{"name": "Cote d\'Ivoire","dial_code": "225","code": "CI"},{"name": "Croatia","dial_code": "385","code": "HR"},{"name": "Cuba","dial_code": "53","code": "CU"},{"name": "Cyprus","dial_code": "357","code": "CY"},{"name": "Czech Republic","dial_code": "420","code": "CZ"},{"name": "Denmark","dial_code": "45","code": "DK"},{"name": "Djibouti","dial_code": "253","code": "DJ"},{"name": "Dominica","dial_code": "1","code": "DM"},{"name": "Dominican Republic","dial_code": "1","code": "DO"},{"name": "Ecuador","dial_code": "593","code": "EC"},{"name": "Egypt","dial_code": "20","code": "EG"},{"name": "El Salvador","dial_code": "503","code": "SV"},{"name": "Equatorial Guinea","dial_code": "240","code": "GQ"},{"name": "Eritrea","dial_code": "291","code": "ER"},{"name": "Estonia","dial_code": "372","code": "EE"},{"name": "Ethiopia","dial_code": "251","code": "ET"},{"name": "Falkland Islands (Malvinas)","dial_code": "500","code": "FK"},{"name": "Faroe Islands","dial_code": "298","code": "FO"},{"name": "Fiji","dial_code": "679","code": "FJ"},{"name": "Finland","dial_code": "358","code": "FI"},{"name": "France","dial_code": "33","code": "FR"},{"name": "French Guiana","dial_code": "594","code": "GF"},{"name": "French Polynesia","dial_code": "689","code": "PF"},{"name": "Gabon","dial_code": "241","code": "GA"},{"name": "Gambia","dial_code": "220","code": "GM"},{"name": "Georgia","dial_code": "995","code": "GE"},{"name": "Germany","dial_code": "49","code": "DE"},{"name": "Ghana","dial_code": "233","code": "GH"},{"name": "Gibraltar","dial_code": "350","code": "GI"},{"name": "Greece","dial_code": "30","code": "GR"},{"name": "Greenland","dial_code": "299","code": "GL"},{"name": "Grenada","dial_code": "1","code": "GD"},{"name": "Guadeloupe","dial_code": "590","code": "GP"},{"name": "Guam","dial_code": "1","code": "GU"},{"name": "Guatemala","dial_code": "502","code": "GT"},{"name": "Guernsey","dial_code": "44","code": "GG"},{"name": "Guinea","dial_code": "224","code": "GN"},{"name": "Guinea-Bissau","dial_code": "245","code": "GW"},{"name": "Guyana","dial_code": "595","code": "GY"},{"name": "Haiti","dial_code": "509","code": "HT"},{"name": "Holy See (Vatican City State)","dial_code": "379","code": "VA"},{"name": "Honduras","dial_code": "504","code": "HN"},{"name": "Hong Kong","dial_code": "852","code": "HK"},{"name": "Hungary","dial_code": "36","code": "HU"},{"name": "Iceland","dial_code": "354","code": "IS"},{"name": "India","dial_code": "91","code": "IN"},{"name": "Indonesia","dial_code": "62","code": "ID"},{"name": "Iran, Islamic Republic of Persian Gulf","dial_code": "98","code": "IR"},{"name": "Iraq","dial_code": "964","code": "IQ"},{"name": "Ireland","dial_code": "353","code": "IE"},{"name": "Isle of Man","dial_code": "44","code": "IM"},{"name": "Israel","dial_code": "972","code": "IL"},{"name": "Italy","dial_code": "39","code": "IT"},{"name": "Jamaica","dial_code": "1","code": "JM"},{"name": "Japan","dial_code": "81","code": "JP"},{"name": "Jersey","dial_code": "44","code": "JE"},{"name": "Jordan","dial_code": "962","code": "JO"},{"name": "Kazakhstan","dial_code": "7","code": "KZ"},{"name": "Kenya","dial_code": "254","code": "KE"},{"name": "Kiribati","dial_code": "686","code": "KI"},{"name": "Korea, Democratic People\'s Republic of Korea","dial_code": "850","code": "KP"},{"name": "Korea, Republic of South Korea","dial_code": "82","code": "KR"},{"name": "Kuwait","dial_code": "965","code": "KW"},{"name": "Kyrgyzstan","dial_code": "996","code": "KG"},{"name": "Laos","dial_code": "856","code": "LA"},{"name": "Latvia","dial_code": "371","code": "LV"},{"name": "Lebanon","dial_code": "961","code": "LB"},{"name": "Lesotho","dial_code": "266","code": "LS"},{"name": "Liberia","dial_code": "231","code": "LR"},{"name": "Libyan Arab Jamahiriya","dial_code": "218","code": "LY"},{"name": "Liechtenstein","dial_code": "423","code": "LI"},{"name": "Lithuania","dial_code": "370","code": "LT"},{"name": "Luxembourg","dial_code": "352","code": "LU"},{"name": "Macao","dial_code": "853","code": "MO"},{"name": "Macedonia","dial_code": "389","code": "MK"},{"name": "Madagascar","dial_code": "261","code": "MG"},{"name": "Malawi","dial_code": "265","code": "MW"},{"name": "Malaysia","dial_code": "60","code": "MY"},{"name": "Maldives","dial_code": "960","code": "MV"},{"name": "Mali","dial_code": "223","code": "ML"},{"name": "Malta","dial_code": "356","code": "MT"},{"name": "Marshall Islands","dial_code": "692","code": "MH"},{"name": "Martinique","dial_code": "596","code": "MQ"},{"name": "Mauritania","dial_code": "222","code": "MR"},{"name": "Mauritius","dial_code": "230","code": "MU"},{"name": "Mayotte","dial_code": "262","code": "YT"},{"name": "Mexico","dial_code": "52","code": "MX"},{"name": "Micronesia, Federated States of Micronesia","dial_code": "691","code": "FM"},{"name": "Moldova","dial_code": "373","code": "MD"},{"name": "Monaco","dial_code": "377","code": "MC"},{"name": "Mongolia","dial_code": "976","code": "MN"},{"name": "Montenegro","dial_code": "382","code": "ME"},{"name": "Montserrat","dial_code": "1","code": "MS"},{"name": "Morocco","dial_code": "212","code": "MA"},{"name": "Mozambique","dial_code": "258","code": "MZ"},{"name": "Myanmar","dial_code": "95","code": "MM"},{"name": "Namibia","dial_code": "264","code": "NA"},{"name": "Nauru","dial_code": "674","code": "NR"},{"name": "Nepal","dial_code": "977","code": "NP"},{"name": "Netherlands","dial_code": "31","code": "NL"},{"name": "Netherlands Antilles","dial_code": "599","code": "AN"},{"name": "New Caledonia","dial_code": "687","code": "NC"},{"name": "New Zealand","dial_code": "64","code": "NZ"},{"name": "Nicaragua","dial_code": "505","code": "NI"},{"name": "Niger","dial_code": "227","code": "NE"},{"name": "Nigeria","dial_code": "234","code": "NG"},{"name": "Niue","dial_code": "683","code": "NU"},{"name": "Norfolk Island","dial_code": "672","code": "NF"},{"name": "Northern Mariana Islands","dial_code": "1","code": "MP"},{"name": "Norway","dial_code": "47","code": "NO"},{"name": "Oman","dial_code": "968","code": "OM"},{"name": "Pakistan","dial_code": "92","code": "PK"},{"name": "Palau","dial_code": "680","code": "PW"},{"name": "Palestinian Territory, Occupied","dial_code": "970","code": "PS"},{"name": "Panama","dial_code": "507","code": "PA"},{"name": "Papua New Guinea","dial_code": "675","code": "PG"},{"name": "Paraguay","dial_code": "595","code": "PY"},{"name": "Peru","dial_code": "51","code": "PE"},{"name": "Philippines","dial_code": "63","code": "PH"},{"name": "Pitcairn","dial_code": "872","code": "PN"},{"name": "Poland","dial_code": "48","code": "PL"},{"name": "Portugal","dial_code": "351","code": "PT"},{"name": "Puerto Rico","dial_code": "1","code": "PR"},{"name": "Qatar","dial_code": "974","code": "QA"},{"name": "Romania","dial_code": "40","code": "RO"},{"name": "Russia","dial_code": "7","code": "RU"},{"name": "Rwanda","dial_code": "250","code": "RW"},{"name": "Reunion","dial_code": "262","code": "RE"},{"name": "Saint Barthelemy","dial_code": "590","code": "BL"},{"name": "Saint Helena, Ascension and Tristan Da Cunha","dial_code": "290","code": "SH"},{"name": "Saint Kitts and Nevis","dial_code": "1","code": "KN"},{"name": "Saint Lucia","dial_code": "1","code": "LC"},{"name": "Saint Martin","dial_code": "590","code": "MF"},{"name": "Saint Pierre and Miquelon","dial_code": "508","code": "PM"},{"name": "Saint Vincent and the Grenadines","dial_code": "1","code": "VC"},{"name": "Samoa","dial_code": "685","code": "WS"},{"name": "San Marino","dial_code": "378","code": "SM"},{"name": "Sao Tome and Principe","dial_code": "239","code": "ST"},{"name": "Saudi Arabia","dial_code": "966","code": "SA"},{"name": "Senegal","dial_code": "221","code": "SN"},{"name": "Serbia","dial_code": "381","code": "RS"},{"name": "Seychelles","dial_code": "248","code": "SC"},{"name": "Sierra Leone","dial_code": "232","code": "SL"},{"name": "Singapore","dial_code": "65","code": "SG"},{"name": "Slovakia","dial_code": "421","code": "SK"},{"name": "Slovenia","dial_code": "386","code": "SI"},{"name": "Solomon Islands","dial_code": "677","code": "SB"},{"name": "Somalia","dial_code": "252","code": "SO"},{"name": "South Africa","dial_code": "27","code": "ZA"},{"name": "South Georgia and the South Sandwich Islands","dial_code": "500","code": "GS"},{"name": "Spain","dial_code": "34","code": "ES"},{"name": "Sri Lanka","dial_code": "94","code": "LK"},{"name": "Sudan","dial_code": "249","code": "SD"},{"name": "Suriname","dial_code": "597","code": "SR"},{"name": "Svalbard and Jan Mayen","dial_code": "47","code": "SJ"},{"name": "Swaziland","dial_code": "268","code": "SZ"},{"name": "Sweden","dial_code": "46","code": "SE"},{"name": "Switzerland","dial_code": "41","code": "CH"},{"name": "Syrian Arab Republic","dial_code": "963","code": "SY"},{"name": "Taiwan","dial_code": "886","code": "TW"},{"name": "Tajikistan","dial_code": "992","code": "TJ"},{"name": "Tanzania, United Republic of Tanzania","dial_code": "255","code": "TZ"},{"name": "Thailand","dial_code": "66","code": "TH"},{"name": "Timor-Leste","dial_code": "670","code": "TL"},{"name": "Togo","dial_code": "228","code": "TG"},{"name": "Tokelau","dial_code": "690","code": "TK"},{"name": "Tonga","dial_code": "676","code": "TO"},{"name": "Trinidad and Tobago","dial_code": "1","code": "TT"},{"name": "Tunisia","dial_code": "216","code": "TN"},{"name": "Turkey","dial_code": "90","code": "TR"},{"name": "Turkmenistan","dial_code": "993","code": "TM"},{"name": "Turks and Caicos Islands","dial_code": "1","code": "TC"},{"name": "Tuvalu","dial_code": "688","code": "TV"},{"name": "Uganda","dial_code": "256","code": "UG"},{"name": "Ukraine","dial_code": "380","code": "UA"},{"name": "United Arab Emirates","dial_code": "971","code": "AE"},{"name": "United Kingdom","dial_code": "44","code": "GB"},{"name": "United States","dial_code": "1","code": "US"},{"name": "Uruguay","dial_code": "598","code": "UY"},{"name": "Uzbekistan","dial_code": "998","code": "UZ"},{"name": "Vanuatu","dial_code": "678","code": "VU"},{"name": "Venezuela, Bolivarian Republic of Venezuela","dial_code": "58","code": "VE"},{"name": "Vietnam","dial_code": "84","code": "VN"},{"name": "Virgin Islands, British","dial_code": "1","code": "VG"},{"name": "Virgin Islands, U.S.","dial_code": "1","code": "VI"},{"name": "Wallis and Futuna","dial_code": "681","code": "WF"},{"name": "Yemen","dial_code": "967","code": "YE"},{"name": "Zambia","dial_code": "260","code": "ZM"},{"name": "Zimbabwe","dial_code": "263","code": "ZW"}]');
			var country_len	= country.length;

			var country_txt = '';

			if ( country_len > 0 ) {

				for ( var i=0; i<country_len; i++ ) {

					if(country[i].name && country[i].dial_code){

						country_txt += '<option class="option" value="'+country[i].dial_code+'">'+country[i].name+'</option>';

					};

				};

			};

			$( '.popup-webinarjam select[name="country"]' ).append( country_txt );

		}


		// function - check schedules:

		function wj_check_schedules() {

			// check timezone:

			timezone		= $( '.popup-webinarjam input[name="timezone"]' ).val();
			timezone_gmt	= $( '.popup-webinarjam input[name="timezone_gmt"]' ).val();

			if ( timezone == '' || timezone_gmt == '' ) {

				var d = new Date();

				timezone						= moment.tz.guess();
				var timezone_off				= 0 - ( moment.tz.zone( timezone ).offset( d.getTime() ) );

				var timezone_off_hours			= Math.abs( Math.floor( timezone_off / 60 ) );
				var timezone_off_minutes		= Math.abs( Math.floor( timezone_off % 60 ) );
				var timezone_off_sign			= '+'
				if ( timezone_off < 0 )			timezone_off_sign = '-';
				timezone_gmt					= 'GMT' + timezone_off_sign + timezone_off_hours;
				if ( timezone_off_minutes )		timezone_gmt = timezone_gmt + ':' + timezone_off_minutes;

				// add variables:

				$( '.popup-webinarjam input[name="timezone"]' ).val( timezone );
				$( '.popup-webinarjam input[name="timezone_gmt"]' ).val( timezone_gmt );

				// check schedules:

				wj_ajax_schedules( wj_id, timezone, timezone_gmt );

			};

		}


		// function - show popup:

		function wj_popup( body_class ) {

			isRing = true;

			var popup_html = $( '.popup-webinarjam' ).prop( 'outerHTML' );
			$( '.popup-webinarjam' ).remove();

			$.magnificPopup.close();

			if ( body_class == 'mfp-popup-webinarjam-alert' ) {

				v_fixedContentPos = false;
				v_fixedBgPos = true;
				v_overflowY = 'scroll';
				v_enableEscapeKey = false;
				v_closeOnBgClick = false;

			} else {

				v_fixedContentPos = true;
				v_fixedBgPos = true;
				v_overflowY = 'hidden';
				v_enableEscapeKey = true;
				v_closeOnBgClick = true;

			}

			if ( $(window).height() < 767 ) {

				v_fixedContentPos = true;
				v_fixedBgPos = 'auto';
				v_overflowY = 'scroll';

			}

			$.magnificPopup.open({

				tClose	: 'Close',
				fixedContentPos: v_fixedContentPos,
				fixedBgPos: v_fixedBgPos,
				overflowY: v_overflowY,
				enableEscapeKey: v_enableEscapeKey,
				closeOnBgClick: v_closeOnBgClick,

				items: {

					src: popup_html,
					type: 'inline',
					midClick: true

				},

				callbacks: {

					beforeOpen: function() {

						if ( $(window).height() < 767 ) {

							startWindowScroll = $(window).scrollTop();
							$('html').addClass('mfp-helper');

						}

					},

					open: function() {

						$( 'body' ).addClass( body_class );

						// seo-analyzer prepare:

						if ( body_class == 'mfp-popup-webinarjam-analyzer' ) {

							$( '.popup-webinarjam select[name="webinar"] option' ).attr( 'selected', false );
							$( '.popup-webinarjam select[name="webinar"] option:nth-child(1)' ).hide();
							$( '.popup-webinarjam select[name="webinar"] option:nth-child(2)' ).attr( 'selected', true );

						}

						// change open/close button:

						$( '.popup-alert' ).css( 'display','none' );

						if ( body_class == 'mfp-popup-webinarjam-alert' ) {

							// close on click:

							$( '.popup-alert-close' ).click( function() {

								$.magnificPopup.close();

							});

							// add timer:

							var d = new Date();
							var min = d.getMinutes();
							var sec = d.getSeconds();

							sec = min*60+sec;

							if ( sec >= 0 && sec < 15*60 ) p = 15*60;
							else if ( sec >= 15*60 && sec < 30*60 ) p = 30*60;
							else if ( sec >= 30*60 && sec < 45*60 ) p = 45*60;
							else p = 60*60;

							var webinar_date = moment().add(p-sec, 'seconds' ).format( 'YYYY/MM/DD HH:mm:ss' );

							$( '.popup-webinarjam-alert .starts-in .counter' ).countdown( webinar_date ).on('update.countdown', function(event) {
							  var $this = $(this).html(event.strftime(''
								+ '<p class="value value-min"><span class="size-22 bold red number">%M</span> <span class="text">min</span></p>'
								+ '<p class="value value-sep">:</p>'
								+ '<p class="value value-sec"><span class="size-22 bold red number">%S</span> <span class="text">sec</span></span>'));
							});

							$( '.popup-webinarjam-alert .title.size-36' ).addClass( 'size-22' ).removeClass( 'size-36' );
							$( '.popup-webinarjam-alert .reminder.size-26' ).addClass( 'size-22' ).removeClass( 'size-26' );

						};

						// close on click:

						$( '.popup-webinarjam .p-close' ).click( function() {

							$.magnificPopup.close();

						});

						// add timer:

						var d = new Date();
						var min = d.getMinutes();
						var sec = d.getSeconds();

						sec = min*60+sec;

						if ( sec >= 0 && sec < 15*60 ) p = 15*60;
						else if ( sec >= 15*60 && sec < 30*60 ) p = 30*60;
						else if ( sec >= 30*60 && sec < 45*60 ) p = 45*60;
						else p = 60*60;

						var webinar_date = moment().add(p-sec, 'seconds' ).format( 'YYYY/MM/DD HH:mm:ss' );

						$( '.popup-webinarjam .step-1 .counter' ).countdown( webinar_date ).on('update.countdown', function(event) {
							var $this = $(this).html(event.strftime(''
							+ '<span class="min-%-M"><span class="medium">%-M minute%!M</span> and </span>'
							+ '<span class="medium">%-S second%!S</span>'));
						});

					},

					close: function() {

						// remove helper:

						if ( $(window).height() < 767 ) {

							$('html').removeClass('mfp-helper');
							$(window).scrollTop(startWindowScroll);

						}

						$( '.popup-webinarjam input' ).each(function() {

							$( this ).attr('value', $( this).val());

						});

						var popup_html = $( '.mfp-content .popup-webinarjam' ).prop( 'outerHTML' );
						$( 'body' ).append( popup_html );

						// change open/close button:

						$( '.popup-alert' ).css( 'display','block' );

						if ( body_class == 'mfp-popup-webinarjam-alert' ) {

							$( '.popup-webinarjam' ).removeClass( 'popup-webinarjam-alert' );

							$( 'body' ).removeClass( body_class );

							$( '.popup-webinarjam .title.size-22' ).addClass( 'size-36' ).removeClass( 'size-22' );
							$( '.popup-webinarjam .reminder.size-22' ).addClass( 'size-26' ).removeClass( 'size-22' );

						}

						// seo-analyzer

						if ( body_class == 'mfp-popup-webinarjam-analyzer' ) {

							$( '.page-template-page_seo-analyzer .form' )[0].submit();

						};


						$( 'body' ).removeClass( body_class );

					}

				}

			});

			// check schedules:

			$( '.popup-webinarjam select[name="webinar"]' ).on( 'change', function() {

				// change what was selected:

				var selected_value = $( '.popup-webinarjam select[name="webinar"] option:selected' ).val();

				$( '.popup-webinarjam select[name="webinar"] option' ).attr( 'selected', false );
				$( '.popup-webinarjam select[name="webinar"] option[value="'+selected_value+'"]' ).attr( 'selected', true );

				// go to step-2

				if ( !isStep2 ) {

					isStep2 = true;

					$( '.popup-webinarjam .checking' ).text('Checking for availability...').fadeIn().delay( 2000 ).delay( 1000, function() {

						$( '.popup-webinarjam .checking' ).remove();
						$( '.popup-webinarjam .step-2' ).fadeIn();

						wj_progress(75);

					});

				};

			});

			// alert version:

			$( '.popup-webinarjam .starts-in .btn' ).click(function() {

				$( '.popup-webinarjam .starts-in' ).css( {'opacity':0, 'display':'none'});

				$( '.popup-webinarjam .content' ).fadeIn();
				$( '.popup-webinarjam .progress' ).fadeIn();

				if ( !isStep3 ) {

					$( '.popup-webinarjam .step-1' ).fadeIn();

				};

			})

			// validate step-2:

			$( '.popup-webinarjam .step-2 .btn' ).click(function() {

				var validator = $( '.popup-webinarjam .np-form' ).validate();

				var validate_name	= validator.element( '.popup-webinarjam input[name="name"]' );
				var validate_email	= validator.element( '.popup-webinarjam input[name="email"]' );

				if ( validate_name == true && validate_email == true ) {

					// seo-analyzer

					if ( $( 'body' ).hasClass( 'mfp-popup-webinarjam-analyzer' ) ) {

						wj_ajax_register( body_class );

					} else {

						// goto step-3:

						if ( $( '.popup-webinarjam select[name="webinar"] option:selected' ).val() == 'jot' ) {

							wj_ajax_register();

						} else {

							// ab-v4:

							$( '.popup-webinarjam .field-select-wrap' ).addClass('no-cant');

							isStep3 = true;

							wj_ajax_set_transient();

							$( '.popup-webinarjam .progress' ).remove();

							$( '.popup-webinarjam .step-1' ).css( {'opacity':0, 'display':'none'});
							$( '.popup-webinarjam .step-2' ).css( {'opacity':0, 'display':'none'});

							$( '.popup-webinarjam .step-3' ).fadeIn();

						};

					};

				}

			})

			$( '.popup-webinarjam select[name="country"]' ).on( 'change', function() {

				// change what was selected:

				var selected_text = $( '.popup-webinarjam select[name="country"] option:selected' ).text();

				$( '.popup-webinarjam select[name="country"] option' ).attr( 'selected', false );

				$( '.popup-webinarjam select[name="country"] option ').filter(function() {

					return $(this).text() == selected_text;

				}).attr( 'selected', true );

			});

			// validate step-3:

			$( '.popup-webinarjam .step-3 .btn' ).click(function() {

				var validator = $( '.popup-webinarjam .np-form' ).validate();

				var validate_country	= validator.element( '.popup-webinarjam select[name="country"]' );
				var validate_phone		= validator.element( '.popup-webinarjam input[name="phone"]' );

				if ( validate_country == true && validate_phone == true ) {

					wj_ajax_register();

				}

			});

		}


		// function - change progress:

		function wj_progress( e_number ) {

			var p_title = $( '.popup-webinarjam .progress-title' );
			var p_percent = $( '.popup-webinarjam .progress-percent' );

			var p_text = e_number + '%';

			$( p_title ).css( 'width', p_text );
			$( p_percent ).text( e_number );

		}


		// function - get schedules:

		function wj_ajax_schedules( e_id, e_timezone, e_timezone_gmt ) {

			console.log( 'schedules id = ' + e_id );

			 $.ajax({

				type: 'POST',
				url: admin_path+'admin-ajax.php',
				data: {

					action: 'np_webinarjam_schedules_ajax',
					id: e_id,
					timezone: e_timezone_gmt

				},

				success: function( data ){

					if ( data ) {

						var data = JSON.parse(data);
						var len = data.length;

						var txt = '';

						if ( len > 0 ) {

							for ( var i=0; i<len; i++ ) {

								if(data[i].date && data[i].schedule){

									txt += '<option class="option" value="'+data[i].schedule+'">'+data[i].date+' ('+e_timezone+')</option>';

								};

							};

						};

						$( '.popup-webinarjam select[name="webinar"]' ).append( txt );

						$( '.popup-webinarjam select[name="webinar"] option:first' ).attr( 'selected', true );

					};

				},

				error: function( MLHttpRequest, textStatus, errorThrown ){}

			});

		};


		// function - register:

		function wj_ajax_register( body_class ) {

			var e_id			= wj_id;
			var e_name			= $( '.popup-webinarjam input[name="name"]' ).val();
			var e_email			= $( '.popup-webinarjam input[name="email"]' ).val();
			var e_schedule		= $( '.popup-webinarjam select[name="webinar"] option:selected' ).val();
			var e_country		= $( '.popup-webinarjam select[name="country"] option:selected' ).val();
			var e_phone			= $( '.popup-webinarjam input[name="phone"]' ).val();
			var e_timezone_gmt	= timezone_gmt;

			console.log( 'register id = ' + e_id );

			$.ajax({

				type: 'POST',
				url: admin_path+'admin-ajax.php',
				data: {

					action: 'np_webinarjam_register_ajax',
					id: e_id,
					name: e_name,
					email: e_email,
					schedule: e_schedule,
					country: e_country,
					phone: e_phone,
					timezone: e_timezone_gmt

				},

				success: function( data ){

					console.log( data );

					if ( body_class == 'mfp-popup-webinarjam-analyzer' ) {

						$.magnificPopup.close();

					} else {

						window.location.href = data;

					}

				},

				error: function( MLHttpRequest, textStatus, errorThrown ){}

			});

		};


		// function - set transient:

		function wj_ajax_set_transient() {

			var e_id			= wj_id;
			var e_name			= $( '.popup-webinarjam input[name="name"]' ).val();
			var e_email			= $( '.popup-webinarjam input[name="email"]' ).val();
			var e_schedule		= $( '.popup-webinarjam select[name="webinar"] option:selected' ).val();
			var e_timezone_gmt	= timezone_gmt;

			console.log( 'set transient id = ' + e_id );

			$.ajax({

				type: 'POST',
				url: admin_path+'admin-ajax.php',
				data: {

					action: 'np_webinarjam_set_transient_ajax',
					id: e_id,
					name: e_name,
					email: e_email,
					schedule: e_schedule,
					timezone: e_timezone_gmt

				},

				success: function( data ){

					console.log( data );

				},

				error: function( MLHttpRequest, textStatus, errorThrown ){}

			});

		};


		// alert popup:

		var popup_wj_alert_cookie = 'popup_wj_alert_closed';

		if ( !( typeof popup_exit_enable === 'undefined' ) && !( readCookie( popup_wj_alert_cookie ) ) ) {

			// after 10 seconds:

			setTimeout( function() {

				// set cookie:

				createCookie(popup_wj_alert_cookie, '1', '365');

				// add button:

				$( 'body' ).append( '<div class="popup-alert"><img src="' + template_path + '/js/popup-webinarjam/images/1.png" width="60" height="60" alt=""></div>' );

				// popup:

				$( 'body' ).on( 'click', '.popup-alert', function() {

					$( '.popup-webinarjam' ).addClass( 'popup-webinarjam-alert' );

					isShow = true;
					wj_popup( 'mfp-popup-webinarjam-alert' );

				});

				// ring:

				var alert_img =  template_path + '/js/popup-webinarjam/images/bg-alert-ring.gif';

				preload([

					alert_img

				]);

				// after next 20 seconds:

				setTimeout( function() {

					var popup_alert_right = parseInt( $( '.popup-alert' ).css( 'right' ) );
					var popup_alert_bottom = parseInt( $( '.popup-alert' ).css( 'bottom' ) );

					if ( !isRing ) {

						$( '.popup-alert' ).css( {

							'width' : '80px',
							'height' : '80px',
							'right' : popup_alert_right - 15 + 'px',
							'bottom' : popup_alert_bottom - 5 + 'px',

						});

						$( '.popup-alert img' ).css( {

							'width' : '80px',
							'height' : '80px'

						}).attr( 'src', alert_img );

						setTimeout( function() {

							$.playSound(template_path + '/js/popup-webinarjam/images/ring2');

						}, 1000 );

					}

				}, 20000 )

			}, 10000 )

		}

		// for homepage:

		if ( $( 'body' ).hasClass( 'page-template-page_webinar-intro' ) ) {

			var d = new Date();
			var min = d.getMinutes();
			var sec = d.getSeconds();

			sec = min*60+sec;

			if ( sec >= 0 && sec < 15*60 ) p = 15*60;
			else if ( sec >= 15*60 && sec < 30*60 ) p = 30*60;
			else if ( sec >= 30*60 && sec < 45*60 ) p = 45*60;
			else p = 60*60;

			var webinar_date = moment().add(p-sec, 'seconds' ).format( 'YYYY/MM/DD HH:mm:ss' );

			$( '#article .clock .counter' ).countdown( webinar_date ).on('update.countdown', function(event) {

				var $this = $(this).html(event.strftime(''
				+ '<span class="min-%-M">%-M Minute%!M and </span>'
				+ '<span>%-S Second%!S</span>'));

			});

		};

	});

})(jQuery);