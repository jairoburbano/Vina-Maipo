(function($) {    
    // marcar singles en el menú
    if( $('body.single-post').length > 0 ){
        $('.menu-item-3636').addClass('current-menu-item')
    }
    if( $('body.single-vinos').length > 0 ){
        $('.menu-item-3631').addClass('current-menu-item')
    }
    if( $('body.single-a-la-carta').length > 0 ){
        $('.menu-item-3633').addClass('current-menu-item')
    }

    // Tamaño de la pantalla
    var $window = $(window),
        windowHeight = $window.height(),
        windowSize = $window.width(),
        body = $('body');
    function bannerHeight() {
        $('.banner').css('height', windowHeight);
    }
    function shuffleIn() {
        var $container = $('#isotope-grid');
        var $grid = $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector : '.isotope-content--item', 
                percentPosition: true,
                masonry: {
                    // use element for option
                    columnWidth: '.isotope-content--item'
                }
            });
        });
        $('.filters').on( 'click', 'li', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.filters').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'li', function() {
                var type = $(this).data('save');
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
        $('.filters li.active').click(function () {
            filters = {};
            $('#isotope-grid').isotope({ filter: '*' });
        });
    }
    function masonryLoad() {
        var $container = $('#masonry-grid'),
            more = $('.loading-more');
        var $grid = $container.imagesLoaded(function() {
            $('#masonry-grid').masonry({
                columnWidth: '.masonry-item', 
                percentPosition: true
            });
        });
        $grid.on( 'layoutComplete', function( event, laidOutItems ) {
            //            console.log( 'Masonry layout completed on ' + laidOutItems.length + ' items' );
            more.removeClass('loader');
        });
    }
    function sidebar() {
        var button = $('.sidebar--button'),
            opacidad = $('.special'),
            sidebarBox = $('.sidebar'),
            bodyFull = $('html, body'),
            sidebarTab = $('.sidebar--tab'),
            header = $('.header');
        button.click(function () {
            $(this).toggleClass('active');
            if($(this).hasClass('active')) {
                $(this).parent().find('.here').addClass('active');
                $(this).parent().find('.here .sidebar--tab--items').slideDown();
            } else {
                $(this).parent().find('.sidebar--tab').removeClass('active');
                $(this).parent().find('.sidebar--tab--items').slideUp();
            }
        });
        if($window.outerWidth() > 1024 ) {
            button.click(function () {
                header.stop().toggleClass('backoff');
                body.stop().toggleClass('opensidebar');
                opacidad.stop().fadeToggle();
                sidebarBox.toggleClass('active');
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        }
        if($window.outerWidth() < 1025 ) {
            button.click(function () {
                header.stop().toggleClass('backoff');
                bodyFull.stop().toggleClass('noscroll');
                opacidad.stop().fadeToggle();
                sidebarBox.toggleClass('active');
                bodyFull.animate({ scrollTop: 0 }, 600);
                return false;
            });
        }
        sidebarTab.click(function() {
            $(this).stop().toggleClass('active');
            $(this).find('.sidebar--tab--items').stop().slideToggle();
            $(this).siblings().removeClass('active');
            $(this).siblings().find('.sidebar--tab--items').slideUp();
        });
    }
    function dropdownList () {
        $('.dropdown').click(function () {
            $(this).find('.dropdown--inside').stop().slideToggle();
            $(this).stop().toggleClass('active');
        });
    }
    function gallery(){
        if($window.outerWidth() > 740 ) {
            if ( $('.wrapper') ){
                var grid = $('.wrapper'),
                    items = grid.find('.box--redes'),
                    cols = parseInt(grid.attr('data-columns')),
                    pad = parseInt(grid.attr('data-gutter')),
                    rowWidth = $('.wrapper').outerWidth()-(pad*cols)-52,
                    baseHeight = 100,
                    colItems = [];
                if( $window.outerWidth() < 1025 ){
                    var cols = 2,
                        pad = 16,
                        rowWidth = $('.wrapper').outerWidth()-(pad*cols)-52;
                }

                grid.attr('data-row',rowWidth );

                items.each(function(){
                    var newWidth = parseInt( $(this).attr('data-width') ) * baseHeight / parseInt( $(this).attr('data-height') );
                    Math.floor(baseHeight);
                    $(this).find('img').height(baseHeight).width(newWidth);

                });

                for (var i = 0; i < items.length; i+=cols) {
                    var temp = items.slice(i,i+cols);
                    var j = 0, k = 0, tw = 0, cw = 0;
                    while (j < temp.length){
                        tw += parseInt( $(temp[j]).attr('data-width') );
                        cw += $(temp[j]).find('img').width();
                        j++;
                    }

                    while (k < temp.length){
                        var it = $(temp[k]),
                            nh = rowWidth * it.find('img').height() / cw,
                            nw = parseInt(it.attr('data-width')) * nh / parseInt(it.attr('data-height')),
                            nwM = Math.floor(nw);
                        //                        console.log(nw);
                        //                        console.log(nwM);

                        it.width(nwM).height(nh);
                        it.find('img').width(nwM).height(nh);
                        //                    it.find('.box--redes--cont').width(nw).height(nh);
                        k++;
                    }
                }
            }
            $('.box--redes--cont').each(function () {
                var altura = $(this).find('p').height() +12;
                $(this).css('height', altura);
            });
        }
    }
    //Input con contenido
    function hasContent() {
        $('.types-input').blur(function() {
            if( $(this).val() ) {
                $(this).addClass('hascontent');
            } else {
                $(this).removeClass('hascontent');
            }
        });
    }
    function simHoverIpad() {
        if($window.outerWidth() > 740) {
            $('.wine--list--item').bind('touchstart touchend', function() {
                $(this).toggleClass('hover__effect');
            });
        }
    }
    function sliderVinos() {
        if($window.outerWidth() < 740) {
            var $slider     = $('.js-slider');

            $slider.each(function() {
                var $this   = $(this);

                $this.flexslider({
                    animation: 'slide',
                    controlNav: false,
                    prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                    nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>'
                });
            });
        }
    }
    function sliderWines() {
        var $slidesWine     = $('.wines-slider');
        $slidesWine.each(function() {
            var $this   = $(this);
            $this.flexslider({
                animation: 'slide',
                directionNav: false
            });
        });
    }
    function dropdownCarta() {
        var box = $('.dropdown-filters'),
            item = $('.filters li');
        if($window.outerWidth() < 740) {
            box.click(function() {
                $('.filters').stop().slideToggle();
                $(this).stop().toggleClass('active');
            });
            item.click(function() {
                var text = $(this).text();
                $(this).parent().slideUp();
                box.find('span').html(text);
                box.removeClass('active');
            });
        }
    }
    function fixedCarta() {
        var box = $('.dropdown-filters');
        if (box.length) {
            var filter = $('.filter__container'),
                main = $('.main__container'),
                container = main.offset().top,
                scrollTop = $window.scrollTop();
            if($window.outerWidth() < 740) {
                if(scrollTop > container) {
                    filter.css({
                        'position' : 'fixed'
                    });
                } else {
                    filter.css({
                        'position' : 'absolute'
                    });
                }
            }
        }
    }
    function mobileMenu() {
        if($window.outerWidth() < 740) {
            $('.menutoggle').click(function() {
                $('.content-menu, .box-lang').stop().fadeToggle();
                $(this).stop().toggleClass('active');
                $('html, body').stop().toggleClass('noscroll');
            });
        }
    }
    function reverseList() {
        if($window.outerWidth() < 740) {
            var list = $('.wine--list');
            list.each(function(){
                var $this = $(this),
                    elem = $this.find('li').get().reverse();
                $this.append(elem);
            })
        }
    }
    //    function aLaCarta() {
    //        if($('.js-mimaipo').length) {
    //            $('html, body').addClass('js-noscroll');
    //        }
    //    }
    function scrollCarta() {
        var scrollHere = $('.isotope-main').offset().top - 50;
        $('html, body').animate({
            scrollTop: scrollHere
        }, 1000);
    }
    function squareImage() {
        if($window.outerWidth() > 1024) {
            var itemSize = $('.isotope-content').outerWidth() / 3 - 10,
                selector = $('.isotope-content--item');
            selector.css('height', itemSize);
        }
        if($window.outerWidth() < 1025) {
            var itemSize = $('.isotope-content').outerWidth() / 2 - 10,
                selector = $('.isotope-content--item');
            selector.css('height', itemSize);
        }
        if($window.outerWidth() < 741) {
            var itemSize = $('.isotope-content').outerWidth() / 1 - 10,
                selector = $('.isotope-content--item');
            selector.css('height', itemSize);
        }
    }
    /*Volver ariiba*/
    function volverArribaDiv() {
        var footer = $('.footer');
        footer.prepend('<div class="btn btn--up">Volver arriba</div>');
        var goUp = $('.btn--up');
        goUp.click(function() {
            $('html, body').animate({ scrollTop: 0 }, 500);
        });
    }
    function volverArriba() {
        var goUp = $('.btn--up'),
            scroll = $(window).scrollTop(),
            altura = $(window).scrollTop() + $(window).height(),
            footer = $('.footer').offset().top;
        if(altura > footer) {
            goUp.addClass('stopHere');
        } else {
            goUp.removeClass('stopHere');
        }
        if(scroll > windowHeight){
            goUp.fadeIn(300);
        } else {
            goUp.fadeOut(300);
        }
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function() {
            event.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,
                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;
            window.open(this.href,'compartir', opts);
        });
    }
    function smoothScroll() {
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    }
    function videoHome() {
        var button = $('#ver-video'),
            lightbox = $('.lightbox__video'),
            close = $('.lightbox__close'),
            container = $('.lightbox__container'),
            url = container.attr('data-src');
        button.click(function() {
            lightbox.fadeIn();
            container.find('iframe').attr('src', url);
        });
        close.click(function() {
            lightbox.fadeOut();
            container.find('iframe').attr('src', '');
        });
    }
    function altoGalleryImage() {
        $('.slide img').each(function() {
            var ancho = $(this).width(),
                alto = $(this).height();
            $(this).attr('data-height', alto);
            $(this).attr('data-width', ancho);
        });
        var i = 1;
        $('.slide').each(function() {
            $(this).attr('data-order', i);
            i++;
        });
        var slides = $('.slide'),
            total = slides.length;
        $('.total-slides').text(total);
    }
    function gallerySingle() {
        var slideGroup = $('.slides'),
            slideElement = slideGroup.find('.slide');
        /* Datas img*/
        /* Calcular proporcion para el alto */
        function itemSize() {
            slideElement.each(function() {
                var highestBox = 100,
                    anchoWindow = $('.single-news--container').width();
                $('.slide img').each(function() {
                    var ancho = $(this).width(),
                        alto = $(this).height(),
                        division = alto / ancho;
                    if(division < highestBox){  
                        highestBox = division;  
                    }
                });
                var proporcion = highestBox * anchoWindow;
                $('.slide img').height(proporcion);
                slideGroup.attr('data-height', proporcion);
            });

            //calcula ancho de cada slide
            for (i = 0; i < slideElement.length; i++){
                var imgWidth = parseInt(slideElement.eq(i).find('img').attr('data-width')),
                    imgHeight = parseInt(slideElement.eq(i).find('img').attr('data-height')),
                    slideWidth = imgWidth * slideHeight / imgHeight;
                slideElement.eq(i).width(slideWidth).height(slideHeight);
            }
            moveTo();
            var slideHeight = slideGroup.attr('data-height');
        }

        $window.resize(function() {
            itemSize();
        });
        slidePadding = 4;



        //clona primera y ultima slide
        slideElement.first().clone().appendTo( slideGroup ).addClass('clone');
        slideElement.last().clone().prependTo( slideGroup ).addClass('clone');		

        //activa y posiciona primera slide
        slideElement.eq(0).addClass('slide-active');
        itemSize();

        //funcion slide, sin animacion	
        function moveTo() {

            var slideGroupWidth = $('.gallery').width(),
                slideActive = $('.slide-active'),
                activeDiff = (slideGroupWidth - slideActive.width())/2,
                activeOffset = activeDiff - slideActive.position().left,
                texto = slideActive.find('img').attr('alt');
            slideGroup.css('transform','translate('+activeOffset+'px)');
            $('.gallery__text p').text(texto);
            $('.gallery__number .current-slide').text( $('.slide-active').attr('data-order') );
        }
        $('.flex-nav-prev, .flex-nav-next').on('click',function(){
            $(this).addClass('stop').delay(1000).queue(function(){
                $(this).removeClass("stop").dequeue();
            });
        });
        //navegacion prev
        $('.flex-nav-prev').on('click',function(){
            var oldActive = $('.slide-active'),
                newActive = oldActive.prev();

            oldActive.removeClass('slide-active');
            newActive.addClass('slide-active');

            slideGroup.css('transition','transform 1s');
            moveTo();
            //loop
            if (newActive.hasClass('clone')) {
                slideElement.last().addClass('slide-active');
                setTimeout(function(){
                    slideGroup.find('.clone').eq(0).removeClass('slide-active');
                    slideGroup.css('transition','none');
                    moveTo();
                },1000);
            }
        });
        //navegacion next
        $('.flex-nav-next').on('click',function(){
            var oldActive = $('.slide-active'),
                newActive = oldActive.next();

            oldActive.removeClass('slide-active');
            newActive.addClass('slide-active');

            slideGroup.css('transition','transform 1s');
            moveTo();
            //loop
            if (newActive.hasClass('clone')) {
                slideElement.first().addClass('slide-active');
                setTimeout(function(){
                    slideGroup.find('.clone').eq(0).removeClass('slide-active');
                    slideGroup.css('transition','none');
                    moveTo();
                },1000);
            }

        });
    }
    popupLinks();
    reverseList();
    bannerHeight();
    sidebar();
    dropdownList();
    gallery();
    hasContent();
    simHoverIpad();
    sliderVinos();
    dropdownCarta();
    mobileMenu();
    sliderWines();
    masonryLoad();
    volverArribaDiv();
    //aLaCarta();
    fixedCarta();
    smoothScroll();
    videoHome();
    altoGalleryImage();
    $(window).scroll(function () {
        volverArriba();
        fixedCarta();
    });
    $window.load(function () {
        shuffleIn();
        gallerySingle();
    });
    $window.resize(function() {
        gallery();
        shuffleIn();
        sliderVinos();
        masonryLoad();
        bannerHeight();
    });
})(jQuery);
