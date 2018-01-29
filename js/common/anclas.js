(function($) {
    function menuFixed() {
        //Menu Vinos
        if($('.vinos-de-origen').length > 0) {
            var altura = $(window).scrollTop() + $(window).height(),
                //Secciones para calcular altural
                origen = $('#vinos-de-origen').offset().top + $(window).height() / 2,
                devocion = $('#gran-devocion').offset().top + $(window).height() / 2,
                vitral = $('#vitral').offset().top + $(window).height() / 2,
                varietal = $('#varietal').offset().top + $(window).height() / 2,
                //Menus para active
                morigen = $('.vinos-de-origen'),
                mdevocion = $('.gran-devocion'),
                mvitral = $('.vitral'),
                mvarietal = $('.varietal');

            if(altura > origen && altura < devocion){
                morigen.addClass('active');
            }else {
                morigen.removeClass('active');
            }
            if(altura > devocion && altura < vitral){
                mdevocion.addClass('active');
            }else {
                mdevocion.removeClass('active');
            }
            if(altura > vitral && altura < varietal){
                mvitral.addClass('active');
            }else {
                mvitral.removeClass('active');
            }
            if(altura > varietal){
                mvarietal.addClass('active');
            }else {
                mvarietal.removeClass('active');
            }
        }
        //Menu Historia
        if($('.historia').length > 0) {
            var altura = $(window).scrollTop() + $(window).height(),
                //Secciones para calcular altural
                historia = $('#historia').offset().top + $(window).height() / 2,
                elPueblo = $('#el-pueblo').offset().top + $(window).height() / 2,
                experiencia = $('#experiencia-y-pasion').offset().top + $(window).height() / 2,
                terroir = $('#terroir').offset().top + $(window).height() / 2,
                vallles = $('#nuestros-valles').offset().top + $(window).height() / 2,
                //Menus para active
                mhistoria = $('.historia'),
                melPueblo = $('.el-pueblo'),
                mexperiencia = $('.experiencia-y-pasion'),
                mterroir = $('.terroir'),
                mvallles = $('.nuestros-valles');

            if(altura > historia && altura < elPueblo){
                mhistoria.addClass('active');
            }else {
                mhistoria.removeClass('active');
            }
            if(altura > elPueblo && altura < experiencia){
                melPueblo.addClass('active');
            }else {
                melPueblo.removeClass('active');
            }
            if(altura > experiencia && altura < terroir){
                mexperiencia.addClass('active');
            }else {
                mexperiencia.removeClass('active');
            }
            if(altura > terroir && altura < vallles){
                mterroir.addClass('active');
            }else {
                mterroir.removeClass('active');
            }
            if(altura > vallles){
                mvallles.addClass('active');
            }else {
                mvallles.removeClass('active');
            }
        }
        function smoothScroll() {
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target = this.hash;
                var $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 50
                }, 900, function () {
                    window.location.hash = target;
                });
            });
        }
        //Funcion para que haga fixed el menu
        if ($('.menu-fixed').length) {
            var startFix = $('.content').offset().top -50,
                alto = $(window).scrollTop(),
                menus = $('.menu-fixed'),
                sectionItem = $('.js-item');
            if(alto > startFix){
                menus.css({
                    position : 'fixed',
                    top : 0
                });
                menus.addClass('fixed');
            } else {
                menus.css({
                    position : 'absolute',
                    top : -50
                });
                menus.removeClass('fixed');
            }
            smoothScroll();
        }
    }
    menuFixed();
    $(window).scroll(function () {
        menuFixed();
    });
})(jQuery);