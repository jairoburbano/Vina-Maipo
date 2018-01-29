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
<div class="banner-vino">
    <div class="banner-vino--logo">
        <h2>
            <svg><use xlink:href="#shape-tajamar" /></svg>
            <span>Syrah</span>
        </h2>
    </div>
    <div class="banner-vino--text">
        <div class="banner-vino--image__center">
            <img src="assets/wines/Alto-Tajamar.png" alt="Alto Tajamar">
        </div>
        <div class="banner-vino--text--content">
            <div class="clearfix">
                <div class="banner-vino--text__left">
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-variedad" /></svg>
                            <span>Variedad</span>
                        </p>
                        <p>Syrah 88%, Cabernet Sauvignon 12%</p>
                    </div>
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-origen" /></svg>
                            <span>Origen</span>
                        </p>
                        <p>Viñedo Quinta Maipo, DO Maipo, Valle del Maipo</p>
                    </div>
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-Guarda" /></svg>
                            <span>Guarda</span>
                        </p>
                        <p>26 meses en barrica</p>
                    </div>
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-alcohol" /></svg>
                            <span>Alcohol</span>
                        </p>
                        <p>14,5%</p>
                    </div>
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-temperatura" /></svg>
                            <span>Temperatura</span>
                        </p>
                        <p>Servir entre 15 y 18º C</p>
                    </div>
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-potencial" /></svg>
                            <span>Potencial de guarda</span>
                        </p>
                        <p>10 a 12 años</p>
                    </div>
                </div>
                <div class="banner-vino--text__right">
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-cata" /></svg>
                            <span>Nota de cata</span>
                        </p>
                        <p>
                            De color rojo profundo con tonos púrpura, Es de aroma complejo, con notas frutales a moras frescas, guindas y especuas dulces, además de sutiles toques a tabaco y cacao.
                        </p>
                        <p>
                            En boca es equilibrado, sabroso y e una viva acidez que le otorga profundidad y frescura. De taninos firmes y suaves.
                        </p>
                    </div>
                    <div class="specs">
                        <p class="title">
                            <svg><use xlink:href="#shape-maridaje" /></svg>
                            <span>Maridaje</span>
                        </p>
                        <p>
                            Carnes rojas de mayor contenido graso, de preparación más elaborada. Quesos maduros.
                        </p>
                    </div>
                </div>
                <div class="lugar">
                    <p>*Disponible en Chile</p>
                    <a href="#" class="btn btn--tienda" title="Comprar online">Comprar online</a>
                </div><!-- /.lugar -->
            </div>
        </div>
    </div>
    <div class="banner-vino--button">
        <div class="content-button">
            <button class="btn btn__border js-video-lightbox" data-platform="youtube" data-id="JozAmXo2bDE">Ver video</button>
            <button href="#" title="Descargar ficha" class="btn btn__border">Descargar ficha</button>
        </div>
    </div>
    <div class="banner-vino--redes">
        <div class="content-redes">
            <p>Compartir</p>
            <a href="#" title="facebook">
                <svg><use xlink:href="#shape-facebook" /></svg>
            </a>
            <a href="#" title="twitter">
                <svg><use xlink:href="#shape-twitter" /></svg>
            </a>
            <a href="#" title="mail">
                <svg><use xlink:href="#shape-mail" /></svg>
            </a>
            <a href="#" title="google plus">
                <svg><use xlink:href="#shape-google-plus" /></svg>
            </a>
            <a href="#" title="whatsapp">
                <svg><use xlink:href="#shape-whatsapp" /></svg>
            </a>
        </div>
    </div>
</div>
<div class="content">
    <div class="full--box suggest" style="background-image: url(assets/recetas/5.jpg);">
        <div class="suggest--content">
            <h3>Receta sugerida</h3>
            <p>
                Filetes de Vacuno en Salsa a la Pimienta <span class="cutthis">con Papas Doradas con Tocino y Ciboulette y Verduras salteadas</span>
            </p>
            <a href="single-maridaje.php" title="ver receta" class="btn btn__border big">Ver receta</a>
        </div>
    </div>
    <div class="full-box more-wines">
        <h4 class="full-box title">También te podrian gustar</h4>
        <!--Vinos recomendados-->
        <div class="flexslider slider js-slider">
            <ul class="slides wine--list wine--list__small">
                <li class="wine__list__item wine-1-3">
                    <a href="single-vino.php" title="Limited Edition">
                        <span class="wine__list__item__media">
                            <img src="assets/wines/Limited-Edition.png" alt="Limited Edition">
                        </span>
                        <span class="wine__list__item__text">
                            <strong>Gran Devoción</strong>
                            <span>Syrah / Petite Sirah</span>
                        </span>
                    </a>
                </li>
                <li class="wine__list__item wine-1-3">
                    <a href="single-vino.php" title="Protegido">
                        <span class="wine__list__item__media">
                            <img src="assets/wines/Protegido.png" alt="Protegido">
                        </span>
                        <span class="wine__list__item__text">
                            <strong>Limited Edition</strong>
                            <span>Sirah</span>
                        </span>
                    </a>
                </li>
                <li class="wine__list__item wine-1-3">
                    <a href="single-vino.php" title="Alto Tajamar">
                        <span class="wine__list__item__media">
                            <img src="assets/wines/Alto-Tajamar.png" alt="Alto Tajamar">
                        </span>
                        <span class="wine__list__item__text">
                            <strong>Protegido</strong>
                            <span>Cabernet Sauvignon</span>
                        </span>
                    </a>
                </li>
            </ul>
            <div class="navigation nav-first">
                <span class="flex-prev"><svg><use xlink:href="#shape-flex-prev" /></svg></span>
                <span class="flex-next"><svg><use xlink:href="#shape-flex-next" /></svg></span>
            </div>
        </div>
        <!--Termina seccion 3 vinos-->
    </div>
    <div class="box vitral box__vino" style="background-image: url(assets/home-destacado-03.jpg)">
        <div class="box--text">
            <h3>¿Necesitas ayuda?</h3>
            <a href="#" class="btn btn__border" title="Ver más">Elige tu Viña Maipo</a>
        </div>
    </div>
</div>
<!-- Menu vinos izquierda -->
<div class="sidebar">
    <div class="sidebar--button">
        <div class="sidebar--button--icon"></div>
        <div class="sidebar--button--text"><p>Nuestros Vinos</p></div>
    </div>
    <div class="sidebar--content">
        <div class="sidebar--tab here">
            <div class="title">Vinos de Origen</div><!--Accordeon Title-->
            <div class="sidebar--tab--items active"><!--Accordeon Menu-->
                <a href="#" title="Alto Tajamar - Syrah" class="active">Alto Tajamar <span>Syrah</span></a><!--Accordeon Item-->
                <a href="#" title="protegido">Protegido <span>Cabernet Sauvignon</span></a>
                <a href="#" title="Limited Edition">Limited Edition <span>Syrah</span></a>
            </div>
        </div>
        <div class="sidebar--tab">
            <div class="title">Gran Devoción</div>
            <div class="sidebar--tab--items">
                <a href="#" title="Alto Tajamar - Syrah">Alto Tajamar <span>Syrah</span></a>
                <a href="#" title="protegido">Protegido <span>Cabernet Sauvignon</span></a>
                <a href="#" title="Limited Edition">Limited Edition <span>Syrah</span></a>
            </div>
        </div>
        <div class="sidebar--tab">
            <div class="title">Vitral</div>
            <div class="sidebar--tab--items">
                <a href="#" title="Alto Tajamar - Syrah">Alto Tajamar <span>Syrah</span></a>
                <a href="#" title="protegido">Protegido <span>Cabernet Sauvignon</span></a>
                <a href="#" title="Limited Edition">Limited Edition <span>Syrah</span></a>
            </div>
        </div>
        <div class="sidebar--tab">
            <div class="title">Varietal</div>
            <div class="sidebar--tab--items">
                <a href="#" title="Alto Tajamar - Syrah">Alto Tajamar <span>Syrah</span></a>
                <a href="#" title="protegido">Protegido <span>Cabernet Sauvignon</span></a>
                <a href="#" title="Limited Edition">Limited Edition <span>Syrah</span></a>
                <a href="#" title="Alto Tajamar - Syrah">Alto Tajamar <span>Syrah</span></a>
                <a href="#" title="protegido">Protegido <span>Cabernet Sauvignon</span></a>
                <a href="#" title="Limited Edition">Limited Edition <span>Syrah</span></a>
                <a href="#" title="Limited Edition">Limited Edition <span>Syrah</span></a>
            </div>
        </div>
    </div>
</div><!--Termina sidebar-->
<?php include 'footer.php'; ?>