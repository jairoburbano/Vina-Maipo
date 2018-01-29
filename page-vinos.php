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
<div class="banner inside" style="background-image: url(assets/nuestra-viña.jpg)">
    <div class="banner--text">
        <h2>Nuestros Vinos</h2>
        <p>
            La apuesta enológica de Viña Maipo busca desarrollar un portafolio de vinos premium y expresivos de su lugar de origen.
        </p>
    </div>
</div>
<div class="content">
    <ul class="wine-menu menu-fixed">
        <li>
            <a href="#vinos-de-origen" class="vinos-de-origen" title="Vinos de Origen">
                <img src="img/wines/origen.svg" alt="Vinos de Origen">
            </a>
        </li>
        <li>
            <a href="#gran-devocion" class="gran-devocion" title="Gran devoción">
                <img src="img/wines/devocion.svg" alt="Gran devoción">
            </a>
        </li>
        <li>
            <a href="#vitral" class="vitral" title="Vitral">
                <img src="img/wines/vitral.svg" alt="Vitral">
            </a>
        </li>
        <li>
            <a href="#varietal" class="varietal" title="Varietal">
                Varietal
            </a>
        </li>
    </ul>
    <section class="wine">
        <div class="wine__container"><!--Seccion 3 Vinos (Vinos del Origen)-->
            <div class="wine--banner">
                <div class="wine--banner--image">
                    <img src="assets/wines/bg-origen.jpg" alt="Imagen de Fondo"><!--Imagen de fondo-->
                </div>
                <div class="wine--banner--text">
                    <h3><img src="img/wines/origen.svg" alt="Vinos de Origen"></h3>
                    <p>
                        Vinos provenientes de las metjores parras de Syrah y Cabernet Sauvignon del viñedo Quinta de Maipo, en pleno Valle del Maipo. Un terroir con un clima excepcional y tres diferentes tipos de suelo.
                    </p>
                </div>
            </div><!--/.wine-banner-->
            <div class="flexslider slider js-slider">
                <ul class="slides wine__list">
                    <li class="wine__list__item wine-1-3">
                        <a href="single-vino.php" title="Limited Edition">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/Limited-Edition.png" alt="Limited Edition">
                            </span>
                            <span class="wine__list__item__text">
                                <svg><use xlink:href="#shape-limited" /></svg><!--Logo del vino-->
                                <span>Syrah</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-3">
                        <a href="single-vino.php" title="Protegido" class="wine--list--item">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/Protegido.png" alt="Protegido">
                            </span>
                            <span class="wine__list__item__text">
                                <svg><use xlink:href="#shape-protegido" /></svg><!--Logo del vino-->
                                <span>Cabernet Sauvignon</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-3">
                        <a href="single-vino.php" title="Alto Tajamar" class="wine--list--item">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/Alto-Tajamar.png" alt="Alto Tajamar">
                            </span>
                            <span class="wine__list__item__text">
                                <svg><use xlink:href="#shape-tajamar" /></svg><!--Logo del vino-->
                            </span>
                        </a>
                    </li>
                </ul>
            </div><!--/.flexslider.slider-->
        </div><!--/.wine__container--><!--Termina seccion 3 vinos-->
        <div class="wine__container"><!--Seccion 4 vinos (Gran Devocion)-->
            <div class="wine--banner">
                <div class="wine--banner--image">
                    <img src="assets/wines/bg-gran-devocion.jpg" alt="Imagen de Fondo"><!--Imagen de fondo-->
                </div>
                <div class="wine--banner--text">
                    <h3><img src="img/wines/devocion.svg" alt="Vinos de Origen"></h3>
                    <p>
                        Vinos provenientes de las metjores parras de Syrah y Cabernet Sauvignon del viñedo Quinta de Maipo, en pleno Valle del Maipo. Un terroir con un clima excepcional y tres diferentes tipos de suelo.
                    </p>
                </div>
            </div><!--/.wine-banner-->
            <div class="slider js-slider">
                <ul class="slides wine__list">
                    <li class="wine__list__item wine-1-4">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/gran-devocion/Gran-Devocio%CC%81n-SauvB.png" alt="titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Sauvingnon Blanc</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-4">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/gran-devocion/Gran-Devocio%CC%81n-Carm-Sy.png" alt="titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Carmenere / Syrah</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-4">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/gran-devocion/Gran-Devocio%CC%81n-Sy-Petite-Sirah.png" alt="titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Syrah/Petite Sirah</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-4">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/gran-devocion/Gran-Devocio%CC%81n-CabS-Sy.png" alt="titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Cabernet Sauvignon/Syrah</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                </ul>
            </div><!--/.slider-->
        </div><!--/.wine__container--><!--Termina seccion 4 vinos-->
        <div class="wine__container"><!--Seccion 6 vinos (Vitral)-->
            <div class="wine--banner">
                <div class="wine--banner--image">
                    <img src="assets/wines/bg-vitral.jpg" alt="Imagen de Fondo"><!--Imagen de fondo-->
                </div>
                <div class="wine--banner--text">
                    <h3><img src="img/wines/vitral.svg" alt="Vinos de Origen"></h3>
                    <p>
                        Vinos provenientes de las metjores parras de Syrah y Cabernet Sauvignon del viñedo Quinta de Maipo, en pleno Valle del Maipo. Un terroir con un clima excepcional y tres diferentes tipos de suelo.
                    </p>
                </div>
            </div><!--/.wine-banner-->
            <div class="slider js-slider">
                <ul class="slides wine__list">
                    <li class="wine__list__item wine-1-6">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/vitral/vitral-sblanc.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Sauvingnon Blanc</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-6">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/vitral/vitral-chardonnay.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Chardonay</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-6">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/vitral/vitral-merlot.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Merlot</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-6">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/vitral/vitral-carm.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Carmenere</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-6">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/vitral/vitral-cab-sauvignon.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Cabernet Sauvignon</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-6">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/vitral/vitral-syrah.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Syrah</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                </ul>
            </div><!--/.slider.js-slider-->
        </div><!--/.wine__container--><!--Termina seccion 6 vinos-->
        <div class="wine__container"><!--Seccion 6 vinos small (Varietal)-->
            <div class="wine--banner">
                <div class="wine--banner--image">
                    <img src="assets/wines/bg-varietal.jpg" alt="Imagen de Fondo"><!--Imagen de fondo-->
                </div>
                <div class="wine--banner--text">
                    <h3>Varietal</h3>
                    <p>
                        Vinos provenientes de las metjores parras de Syrah y Cabernet Sauvignon del viñedo Quinta de Maipo, en pleno Valle del Maipo. Un terroir con un clima excepcional y tres diferentes tipos de suelo.
                    </p>
                </div>
            </div><!--/.wine-banner-->
            <div class="slider js-slider">
                <ul class="slides wine__list">
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_SBlanc.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Sauvingnon Blanc</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_Chard.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Chardonay</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_Merlot.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Merlot</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_Carmenere.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Carmenere</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_Syrah.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Syrah</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_Cabernet-Sauvignon.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Cabernet Sauvignon</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                    <li class="wine__list__item wine-1-7">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="full-box-hover"></span>
                            <span class="wine__list__item__media">
                                <img src="assets/wines/varietal/Mi-Pueblo_Cabernet-Sauvignon.png" alt="Titulo">
                            </span>
                            <span class="wine__list__item__text">
                                <span>Cabernet Sauvignon</span><!--Cepa del vino-->
                            </span>
                        </a>
                    </li>
                </ul>
            </div><!--/.slider-->
        </div><!--/.wine__container--><!--Termina seccion 6 vinos-->
    </section>
</div>
<?php include 'footer.php'; ?>