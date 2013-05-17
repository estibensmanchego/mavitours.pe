jQuery(document).ready(function($){
	
	selectnav('nav', {
		nested: true,
		indent: '-'
	});
	
	//------------------------
	/* Jquery UI */
	//------------------------
	
	$('.tabs').tabs();
		
	$('.accordion').accordion({
		autoHeight: false,
		navigation: true
	});
	
	$('.input-cal').datepicker();
	
	//------------------------
	/* Portfolio Filter Jquery */
	//------------------------
	
	var $theme_isotope = $('.tag-filter-container');
	
	if( $theme_isotope.length ){
		$(window).load(function(){
			$theme_isotope.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false,
				}
			});
			
			$('.tag-filter a').click(function(){
				var selector = $(this).attr('data-filter');
				$theme_isotope.isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false,
					}
				});
				return false;
			});
	
			var $optionSets = $('.tag-filter'),
			$optionLinks = $optionSets.find('a');
			$optionLinks.click(function(){
				var $this = $(this);
				// don't proceed if already selected
				if ( $this.hasClass('selected') ) {
					return false;
				}
				var $optionSet = $this.parents('.tag-filter');
				$optionSet.find('.selected').removeClass('selected');
				$this.addClass('selected'); 
			});
		}); 
	}
	
	//------------------------
	/* Flexslider */
	//------------------------
	
	var $themes_flexslider = $('.flexslider');
	
	if( $themes_flexslider.length ){
		$themes_flexslider.flexslider({
			animation: "slide",
			animationLoop: true,
			controlNav: false,
			itemWidth: 116,
			minItems: 2,
			maxItems: 4
		});
	}
	
	//------------------------
	/* Camera Slider */
	//------------------------
	
	var $themes_camera_wrap = $('#camera-wrap');
	
	if( $themes_camera_wrap.length ){
		$themes_camera_wrap.camera({
			height: '500px',
			opacityOnGrid: false,
			navigation: true,
			hover: false,
			fx: 'scrollLeft',
		});
	}
	
	//------------------------
	/* Google Maps */
	//------------------------
	
	var $themes_map_contact = $('#map-canvas');
	
	if( $themes_map_contact.length ){
		$themes_map_contact.googleMaps({
			scroll: false,
			latitude: -12.5842,
			longitude:  -7704269,
			depth: 15, 
			markers: {
				latitude: -12.5842,
				longitude:  -7704269,
				icon: { 
					image: 'images/map-pointer.png',  
					iconSize: '45, 52', 
				} 				
			}
		}); 
	}
	
	var $themes_map = $('#gmap');
	
	if( $themes_map.length ){	
		$('#gmap').googleMaps({
			scroll: false,
			latitude: -12.5842,
			longitude:  -7704269,
			depth: 15, 
			markers: {
				latitude: -12.5842,
				longitude:  -7704269,
				icon: { 
					image: 'images/map-pointer.png',  
					iconSize: '55, 61', 
				} 				
			}
		}); 
	}
	
	//------------------------
	/* Contact Form Validation */
	//------------------------
	
	(function() {
		var animateSpeed=300;
		var emailReg = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/;
		
			// Validating
			
			function validateInput(element,regex) {
				if (regex === undefined){				
					if (element.val()=='') {element.addClass('validation-error',animateSpeed); return false;}
					else {element.removeClass('validation-error',animateSpeed); return true;}
				}
				else{
					if (!regex.test(element.val())) {element.addClass('validation-error',animateSpeed); return false;}
					else {element.removeClass('validation-error',animateSpeed); return true;}
				}
			}
						
			$('#contact-submit').click(function() {
				var result=true;
				
				var $nombre = $('input[name=nombre]');
				var $dniruc = $('input[name=dniruc]');
				var $telfax = $('input[name=telfax]');
				var $ciudad = $('input[name=ciudad]');
				var $pais = $('input[name=pais]');
				var $email = $('input[name=email]');
				var $web = $('input[name=web]');
				var $comentario = $('textarea[name=comentario]');
				
				// Validate
				if(!validateInput($nombre)) result=false;				
				if(!validateInput($email,emailReg)) result=false;
				if(!validateInput($comentario)) result=false;
				
				if(result==false) return false;
								
				// Data: dniruc telfax ciudad pais email web comentario
				var data = 'nombre=' + $nombre.val() + '&dniruc=' + $dniruc.val() + '&telfax=' + $telfax.val() + '&ciudad=' + $ciudad.val() + '&pais=' + $pais.val() + '&email=' + $email.val() + '&web=' + $web.val() + '&comentario='  + encodeURIComponent($comentario.val());		
				var error_message = 'Lo sentimos, un error inesperado. Por favor, inténtelo de nuevo más tarde.';
				
				// Disable fields
				$('.input-text').attr('disabled','true');	
				
				// Sent message using ajax
				$.ajax({
				
					url: "contacto/sendMail",	
					type: "POST",	
					data: data,		
					cache: false,
					success: function (html) {									
						if (html==1) {	
							alert('Tu mensaje ha sido enviado con éxito.');	
							$('#contact-submit').attr('disabled',true);
						}						
						else {
							alert(error_message);				
						}
						$('#contact-submit').attr('disabled',true);
					},
					error: function(xhr, status, error){
						alert(error_message);
					}
				});
			
				return false;
				
			});
				
			$('input[name=nombre]').blur(function(){validateInput($(this));});
			$('input[name=email]').blur(function(){validateInput($(this),emailReg); });
			$('textarea[name=comentario]').blur(function(){validateInput($(this)); });

			//Validate Newslatter
			$('#sendnews-submit').click(function() {
				var result=true;
				
				var $email = $('input[name=newsletter-email]');
				
				// Validate			
				if(!validateInput($email,emailReg)) result=false;
				
				if(result==false) return false;
								
				// Data
				var data = 'email=' + $email.val();		
				var error_message = 'Lo sentimos, un error inesperado. Por favor, inténtelo de nuevo más tarde.';
				
				// Disable fields
				//$('.input-text').attr('disabled','true');	
				
				// Sent message using ajax
				$.ajax({
				
					url: "inicio/saveCorreoNewsletter",	
					type: "GET",	
					data: data,		
					cache: false,
					success: function (html) {				
						
						//enable for live site	
						if (html==0) {	
							$('#message').removeClass('subsfalse').addClass('substrue').html('Gracias, pronto nuestras novedades!',animateSpeed);
							//$('#sendnews-submit').attr('disabled',true);
						}						
						else {
							$('#newsletter-email').addClass('validation-error',animateSpeed);
							$('#message').addClass('subsfalse').html('Opps!, Correo ya existe.',animateSpeed);		
						}

					},
					error: function(xhr, status, error){
						alert(error_message);
					}
				});
			
				return false;
				
			});
			
			$('input[name=newsletter-email]').blur(function(){validateInput($(this),emailReg); });		
			   
		})();
			
});