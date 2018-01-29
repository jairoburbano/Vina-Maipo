(function($) {
	"use strict";
	// Creamos una función para generar los múltiples lightbox
	// que podamos necesitar
	$.fn.lightbox = function( options ) {
		// Opciones básicas del lightbox
		var settings = $.extend({
			file:		null, // Archivo que necesitamos
			complete:	null // Creamos un callback en caso de necesitarlo
		}, options);
		// variables del lightbox
		var body		= $('body'),
			container	= $('.js-lightbox-container'), //Contenedor
			overlay		= $('.js-overlay'); // Overlay que le colocamos a la página


		// Aquí generamos el código del lightbox.
		// Le colocamos return para que se puedan concadenar
		// más métodos de jquery después de nuestro plugin
		return this.each(function() {
			// Una vez que le damos click llamamos al archivo
			// donde está nuestro código con ajax para insertarlo
			$.ajax(settings.file, {
				success: function(data) { // Nos traemos la data
					overlay.fadeIn(); // Activamos el overlay
					// Insertamos el código completo dentro del contenedor
					// y le hacemos un fadeIn
					container.append(data).delay(300).fadeIn();
					// Agregamos clase al body para evitar que el usuario
					// pueda hacer scroll
					body.addClass('noscroll');

					// Guardamos en una variable el botón de cerrar
					// Lo hacemos aquí para que pueda ser linkeado a
					// los elementos que acabamos de crear
					var close	= $('.js-lightbox-close');
					// Código que se genera cuando presionamos el botón
					// de cerrar
					close.on('click', function() {
						overlay.fadeOut(200); //Quitamos el overlay
						// Desaparecemos primero el contenedor y de último
						// eliminamos el contenido que insertamos usando la función
						// empty(). Esto es importante dado que hay varios lightbox
						// en la página que usan el mismo contenedor.
						container.fadeOut().delay(500).empty();
						// Quitamos la clase de scroll del body
						body.removeClass('noscroll');
					});
				}
			});
			// Callback una vez la función esté lista
			if ( $.isFunction( settings.complete ) ) {
				settings.complete.call( this );
			}
		});

	}

	var	$contact	= $('.js-lightbox-contact');
	var $search		= $('.js-search');
	var $mimaipo	= $('.js-mimaipo');

	// //Corremos plugin de lightbox
	$contact.on('click', function() {
		$(this).lightbox({
			file: templateUrl + '/views/lightbox/lightbox-contacto.twig'
		});
	});
	$search.on('click', function() {
		$(this).lightbox({
			file: templateUrl + '/views/lightbox/lightbox-search.twig'
		});
	});
	$mimaipo.on('click', function() {
		$(this).lightbox({
			file: templateUrl + '/views/lightbox/lightbox-mimaipo.twig'
		});
	});

})(jQuery);