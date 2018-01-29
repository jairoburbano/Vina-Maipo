(function($) {
    function lightbox() {
        //Variables
        var opacidad = $('.js-overlay'),
            eligiendo = $('.eligiendo'),
            contacto = $('.js-lightbox-contact'),
            search = $('.js-search'),
            miMaipo = $('.js-mimaipo'),
            lightEligiendo = $('.lightbox--wine-select'),
            lightContact = $('.light-contact'),
            lightSeach = $('.js-light-search'),
            lightMaipo = $('.js-light-maipo'),
            closeLight = $('.js-lightbox-close'),
            lightboxOpen = $('.js-openlight'),
            lightboxDiv = $('.lightbox'),
            body = $('body');
        //Contacto
        contacto.click(function () {
            lightContact.fadeIn();
        });
        //Buscador
        search.click(function () {
            lightSeach.fadeIn();
            $('.search-bar').focus();
        });
        //A la carta
        miMaipo.click(function () {
            lightMaipo.fadeIn();
        });
        //Eligiendo Viña Maipo
        eligiendo.click(function () {
            lightEligiendo.fadeIn();
        });
        //Cerrar Lightbox
        closeLight.click(function () {
            opacidad.fadeOut();
            lightboxDiv.fadeOut();
            body.removeClass('noscroll');
        });
        $(document).keyup(function(e){
            if(e.keyCode === 27) {
                opacidad.fadeOut();
                lightboxDiv.fadeOut();
                body.removeClass('noscroll');
            }
        });
        //Opacidad
        lightboxOpen.click(function () {
            opacidad.fadeIn();
        });
    }
    // //Animacion Eligiendo
    // var current_fs, next_fs, previous_fs; //fieldsets
    // var left, opacity, scale; //fieldset properties which we will animate
    // var animating; //flag to prevent quick multi-click glitches
    // $('.js-wine-select').on('click', function() {
    //     var	$this      = $(this),
    //         type       = $this.data('step'),
    //         typeBack   = $this.parents('.wine-selector').data('step-block'),
    //         current_fs = $this.parents('.wine-selector');

    //     $('.js-back').attr('data-step', typeBack);
    //     type	= $this.data('step');
    //     next_fs = $('[data-step-block="'+type+'"]');
    //     previous_fs = current_fs.prev('.wine-selector');
    //     //show the next fieldset
    //     next_fs.show();
    //     //hide the current fieldset with style
    //     current_fs.hide();

    //     if($('.js-back').attr('data-step') == 'final') {
    //         $('.lightbox--wine-select').addClass('change-css');
    //     }
    // });
    // $('.js-back').on('click', function() {
    //     if(animating) return false;
    //     animating   = true;

    //     var $this   = $(this);
    //     type    = $this.data('step');

    //     current_fs = $this.parents('.wine-selector');
    //     back_fs = $('[data-step-block="'+type+'"]');
    //     //show the next fieldset
    //     back_fs.show();
    //     current_fs.hide();

    // });
    // var close	= $('.js-lightbox-close');
    function resetLight() {
        var selector = $('.wine-selector'),
            selectorOrigin = $('.wine-selector__origin');
        $('.close-contact').click(function() {
            selector.hide();
            selectorOrigin.addClass('selector-show');
            $('.lightbox--wine-select').removeClass('change-css');
        });
        $('.wine-selector__start__icon').click(function() {
            selectorOrigin.removeClass('selector-show');
        });
    }

    var current_fs, next_fs, previous_fs, left, opacity, scale, animating;

    function ssWineSelect() {
        var trigger = $('.js-wine-select'),
            goBack  = $('.js-back'),
            history = [];
        trigger.on('click', function() {
            var  $this      = $(this),
                type       = $this.data('step'),
                current_fs = $this.parents('.wine-selector');

            history.push(type);

            next_fs = $('[data-step-block="'+type+'"]');
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.hide();
            if($('.js-back').attr('data-step') == 'final') {
                $('.lightbox--wine-select').addClass('change-css');
            }
            if ( $('[data-step-block="final"]').is(':visible') ) {
                $('.lightbox--wine-select').addClass('change-css');
                $('[data-step-block="final"]').find('.js-back').attr('data-step-back', history[1]);
            }
        });

        goBack.on('click', function() {
            var $this      = $(this),
                target     = $this.data('step-back'),
                current_fs = $this.parents('.wine-selector');

            previous_fs = $('[data-step-block="'+target+'"]');
            previous_fs.show();
            current_fs.hide();
        });
    }

    ssWineSelect();
    lightbox();
    resetLight();
})(jQuery);