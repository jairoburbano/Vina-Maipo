(function($) {
    // // Guardamos la dirección en una variable por comodidad

    var $videos		= $('.js-video-lightbox');

    $videos.on('click', function() {
        var body		= $('body'),
            container	= $('.js-lightbox-container'), //Contenedor
            overlay		= $('.js-overlay'); // Overlay que le colocamos a la página
        var	videoID		= $(this).data('id'),
            platform	= $(this).data('platform');
        $.ajax(templateUrl + '/views/lightbox/lightbox-videos.twig', {
            success: function(data) { // Nos traemos la data
                overlay.fadeIn(); // Activamos el overlay
                // Insertamos el código completo dentro del contenedor
                // y le hacemos un fadeIn
                container.append(data).delay(300).fadeIn();
                // Agregamos clase al body para evitar que el usuario
                // pueda hacer scroll
                body.addClass('noscroll');
                var containerM	= $('.videoWrapper');
                switch(platform) {
                    case 'youtube':
                        var iframe_url = "https://www.youtube.com/embed/" + videoID + "?autoplay=1&rel=0&showinfo=0&autohide=1";
                        break;
                    case 'vimeo':
                        var iframe_url	= "https://player.vimeo.com/video/"+ videoID +"?color=ffffff&byline=0&portrait=0&autoplay=1";
                        break;
                }
                var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': 560, 'height': 315 });
                containerM.append(iframe);
                var videoTitle = $videos.text(),
                    nameVideo   = $('.video-title');
                console.log(videoTitle);
                nameVideo.empty();
                nameVideo.append(videoTitle);
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