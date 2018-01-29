(function($) {
	// // Guardamos la dirección en una variable por comodidad

	var $videos		= $('.js-lightbox');

	$videos.on('click', function() {
		var body		= $('body'),
			container	= $('.js-lightbox-container'), //Contenedor
			overlay		= $('.js-overlay'); // Overlay que le colocamos a la página
		var	videoID		= $(this).data('id'),
			platform	= $(this).data('platform');
		$.ajax(templateUrl + '/views/lightbox/lightbox-eligiendo.twig', {
			success: function(data) { // Nos traemos la data
				overlay.fadeIn(); // Activamos el overlay
				// Insertamos el código completo dentro del contenedor
				// y le hacemos un fadeIn
				container.append(data).delay(300).show();
				// Agregamos clase al body para evitar que el usuario
				// pueda hacer scroll
				body.addClass('noscroll');

				var current_fs, next_fs, previous_fs; //fieldsets

				$('.js-wine-select').on('click', function() {
					console.log('saúl');
					var	$this	= $(this);
						type	= $this.data('step');

					current_fs = $this.parents('.wine-selector');
					next_fs = $('[data-step-block="'+type+'"]');
					//show the next fieldset
					next_fs.show();
					//hide the current fieldset with style
					current_fs.hide();
				});

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
	});

})(jQuery);