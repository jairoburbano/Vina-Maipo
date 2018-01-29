<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		vina-maipo
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="lightbox__video">
    <div class="lightbox__container" id="video-container" data-src="https://www.youtube.com/embed/CW4RJ3IRarM">
        <div class="content">
            <iframe width="560" height="315" frameborder="0" allowfullscreen></iframe>
        </div><!-- /.content -->
        <div class="lightbox__close"><svg><use xlink:href="#shape-icon-close" /></svg></div><!-- /.lightbox__close -->
    </div><!-- /.lightbox__container -->
</div><!-- /.lightbox__video -->
<div class="banner banner--home" style="background-image: url(img/poster_video.jpg)">
    <div class="banner--text">
        <h2>Vendimia 2016 en el Viñedo Quinta de Maipo</h2>
        <div class="btn--flex">
            <button class="btn btn__border" id="ver-video" title="Ver video">Ver video</button>
            <a href="#" class="btn btn__border" title="Ver nota" target="_blank">Ver nota</a>
        </div><!-- /.btn--flex -->
    </div>
</div><!--/.banner-->
<div class="box">
    <div class="box--half" style="background-image: url(assets/home-destacado-01.jpg)">
        <div class="box--text">
            <h3>Puntajes excepcionales para Viña Maipo en jamessuckling.com</h3>
            <a href="#" class="btn btn__border" title="Ver más">Ver más</a>
        </div>
    </div>
    <div class="box--half" style="background-image: url(assets/home-destacado-02.jpg)">
        <div class="box--text second--box">
            <h3>Vitral, una composición única</h3>
            <a href="#" class="btn btn__border" title="Ver más">Ver más</a>
        </div>
    </div>
</div>
<div class="box box__special" style="background-image: url(assets/home-destacado-03.jpg)">
    <div class="box--text">
        <h3>Eligiendo un Viña Maipo</h3>
        <a href="#" class="btn btn__border" title="Ver más">Ver más</a>
    </div>
</div>
<div class="box box--rss">
    <h2>Nuestras Redes</h2>
    <!--Redes se muestran en tablet y desktop-->
    <div class="wrapper" data-columns="3" data-gutter="30">
        <!--Item redes sociales, aqui se debe traer los tamaños de las imagenes en data with y height, aqui se define si es facebook twitter o youtube-->
        <div class="box--redes box--redes__twitt" data-width="1280" data-height="400">
            <img src="assets/historia/el-pueblo.jpg" alt="Redes"><!--Imagen con tamaños definidos arriba-->
            <!--Contenido redes-->
            <div class="box--redes--cont">
                <!--Aqui se imprime el icono segun la clase que se define arriba-->
                <div class="rss"></div>
                <p>
                    Una vez más Vitral carmenere de <a href="#" title="Maipowines">@maipowines</a> merecesor de oro en el <a href="#" title="consurso mundial">@concursomundial</a> de Bruselas 20115. <a href="#" title="marpicovinos">@marpicovinos</a>
                </p>
            </div>
        </div><!--Termina Item-->
        <div class="box--redes box--redes__youtube" data-width="640" data-height="250">
            <img src="assets/wines/bg-origen.jpg" alt="Redes">
            <div class="box--redes--cont">
                <div class="rss"></div>
                <p>
                    Mi Pueblo launching
                </p>
            </div>
        </div>
        <div class="box--redes box--redes__face" data-width="768" data-height="510">
            <img src="assets/valles/uno.jpg" alt="Redes">
            <div class="box--redes--cont">
                <div class="rss">
                    <svg><use xlink:href="#shape-icon-face" /></svg>
                </div>
                <p>
                    <a href="#" title="trivia maipo">#TriviaMaipo</a> ¿Eres un verdadero amante del vino? Comenta la respuesta correcta y lo sábras.
                </p>
            </div>
        </div>
        <div class="box--redes box--redes__youtube" data-width="640" data-height="250">
            <img src="assets/wines/bg-origen.jpg" alt="Redes">
            <div class="box--redes--cont">
                <div class="rss"></div>
                <p>
                    Mi Pueblo launching
                </p>
            </div>
        </div>
        <div class="box--redes box--redes__twitt" data-width="176" data-height="600">
            <img src="assets/wines/Alto-Tajamar.png" alt="Redes">
            <div class="box--redes--cont">
                <div class="rss"></div>
                <p>
                    Una vez más Vitral carmenere de <a href="#" title="Maipowines">@maipowines</a> merecesor de oro en el <a href="#" title="consurso mundial">@concursomundial</a> de Bruselas 20115. <a href="#" title="marpicovinos">@marpicovinos</a>
                </p>
            </div>
        </div>
        <div class="box--redes box--redes__face" data-width="184" data-height="600">
            <img src="assets/wines/Limited-Edition.png" alt="Redes">
            <div class="box--redes--cont">
                <div class="rss"></div>
                <p>
                    <a href="#" title="trivia maipo">#TriviaMaipo</a> ¿Eres un verdadero amante del vino? Comenta la respuesta correcta y lo sábras.
                </p>
            </div>
        </div>
    </div>
    <!--este bloque solo aparece en mobile-->
    <div class="box--rss--mobile">
        <a href="http://facebook.com/MaipoWines" target="_blank" title="Siguenos en Facebook" class="box--redes box--redes__face">
            <span class="box--redes--cont">
                <span class="rss"></span>
                <span>/MaipoWines</span>
            </span>
        </a>
        <a href="http://twitter.com/MaipoWines" target="_blank" title="Siguenos en Twitter" class="box--redes box--redes__youtube">
            <span class="box--redes--cont">
                <span class="rss"></span>
                <span>/MaipoWines</span>
            </span>
        </a>
        <a href="#" target="_blank" title="Miranos en Youtube" class="box--redes box--redes__twitt">
            <span class="box--redes--cont">
                <span class="rss"></span>
                <span>@MaipoWines</span>
            </span>
        </a>
    </div>
</div>
<!--banner alto pantalla / en mobile alto fijo-->
<div class="banner inside dotless mobile-height" style="background-image: url(assets/a-la-carta.jpg)">
    <div class="banner--text">
        <!--Titulo Banner-->
        <h2>¡A la Carta!</h2>
        <!--Descripcion banner-->
        <p>
            Descubre las más deliciosas combinaciones entre vino y comida, y atrévete en la cocina con estas recetas
        </p>
        <a href="#" class="btn btn__border" title="Ver más">Ver más</a>
    </div>
</div>
<?php include 'footer.php'; ?>