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
<div class="banner banner-news" style="background-image: url(assets/nuestra-viña.jpg)"></div>
<div class="banner-news--content">
    <div class="banner--text">
        <h2>Puntajes excepcionales para Viña Maipo en jamessuckling.com</h2>
    </div>
</div>
<div class="single-news">
    <div class="single-news--color">
        <div class="single-news--container">
            <div class="single-news--image">
                <img src="assets/recetas/1.jpg" alt="Titulo imagen">
            </div>
            <div class="single-news--text">
                <p class="subtitle">
                    Alto Tajamar, Protegido, Limited Edition y Gran Devoción fueron los vinos que el crítico estadounidense James Suckling elogió en su reciente reporte de los vinos chilenos.
                </p>
                <p>
                    El ícono Alto Tajamar, así como el Cabernet Sauvignon ultra premium Protegido y el Syrah ultra premium Limited Edition, todos en su cosecha 2011, recibieron notables 93 puntos, destacando al Valle del Maipo, y en particular al viñedo Quinta de Maipo, como origen de vinos de excelente color, aroma y sabor.
                </p>
                <p>
                    Gran Devoción Cabernet Sauvignon/Syrah 2013 fue merecedor de 93 puntos, mientras que en su variedad Syrah/Petite Sirah 2012 obtuvo 92 puntos, resaltando las potencialidades del Valle del Maule para la producción de vinos de sabor y carácter únicos.
                </p>
                <p>
                    Estos importantes reconocimientos de la prensa internacional respaldan una vez más el proyecto enológico dirigido por Max Weinlaub y todo su equipo, así como el área Agrícola de la viña.
                </p>
            </div>
        </div>
    </div>
    <!--NOTE: aqui video-->
    <div class="single-news--color single--video">
        <div class="single-news--container">
            <div class="single-news__media">
                <iframe src="https://www.youtube.com/embed/mzj9z8QDTfU" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="single__text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo nam, veritatis qui, saepe accusamus nobis, sapiente commodi reiciendis ex est temporibus! Commodi nihil dignissimos nisi. Dicta consequuntur, ut magnam blanditiis.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero consequatur ratione quos quasi debitis provident enim odit similique, iste ad repudiandae nobis ipsam in voluptatibus natus quibusdam ullam iure totam maxime ipsa. Ab exercitationem libero dignissimos officiis consequatur. Non quod vitae fuga voluptate.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel suscipit repudiandae ratione, alias libero doloribus expedita dicta accusamus quibusdam eligendi.
                </p>
            </div>
        </div>
    </div>
    <!--NOTE: Aqui galeria-->
    <div class="single-news--color single--video">
        <div class="single-news--container">

            <div class="gallery">
                    <div class="slider__gallery">
                        <ul class="slides">
                            <li class="slide">
                                <img src="https://static.pexels.com/photos/51947/tuscany-grape-field-nature-51947.jpeg" alt="campo" />
                            </li>
                            <li class="slide">
                                <img src="https://static.pexels.com/photos/52635/pexels-photo-52635.jpeg" alt="vino" />
                            </li>
                            <li class="slide">
                                <img src="https://static.pexels.com/photos/33400/champagner-toasting-new-year-s-eve-drink.jpg" alt="copas" />
                            </li>
                            <li class="slide">
                                <img src="https://static.pexels.com/photos/87346/pexels-photo-87346-large.jpeg" alt="copas" />
                            </li>
                            <li class="slide">
                                <img src="https://static.pexels.com/photos/179997/pexels-photo-179997-large.jpeg" alt="copas" />
                            </li>
                        </ul>
                    </div>
                    <div class="gallery__content">
                        <div class="custom-controls-container">
                            <div class="gallery__number">
                                <span class="current-slide">1</span>/
                                <span class="total-slides">3</span>
                            </div>
                            <div class="gallery__text">
                                <p></p>
                            </div><!-- /.gallery__text -->
                            <div class="custom__icons">
                                <ul class="flex-direction-nav"><li class="flex-nav-prev">
                                    <p class="flex-prev">
                                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-prev"></use></svg>
                                    </p>
                                    </li>
                                    <li class="flex-nav-next">
                                        <p class="flex-next">
                                            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-next"></use></svg>
                                        </p>
                                    </li>
                                </ul>
                            </div><!-- /.custom__icons -->
                        </div>
                    </div>
                </div>
            <div class="single__text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo nam, veritatis qui, saepe accusamus nobis, sapiente commodi reiciendis ex est temporibus! Commodi nihil dignissimos nisi. Dicta consequuntur, ut magnam blanditiis.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero consequatur ratione quos quasi debitis provident enim odit similique, iste ad repudiandae nobis ipsam in voluptatibus natus quibusdam ullam iure totam maxime ipsa. Ab exercitationem libero dignissimos officiis consequatur. Non quod vitae fuga voluptate.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel suscipit repudiandae ratione, alias libero doloribus expedita dicta accusamus quibusdam eligendi.
                </p>
            </div>
        </div>
    </div>


    <div class="single-news--redes">
        <div class="content-redes">
            <p>Comparte esta noticia:</p>
            <a href="http://www.facebook.com/sharer.php?u=http://vinamaipo.reactorlabs.net/vinos/limited-edition/&t=Vinos de Origen – Limited Edition" title="facebook" class="popup">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                    <defs>
                    </defs>
                    <g>
                        <g>
                            <path d="M30,2v28H2V2H30 M32,0H0v32h32V0L32,0z"/>
                        </g>
                        <path class="icono" d="M14.88,24v-7.51H12.9v-2.7h1.99c0,0,0-1.11,0-2.31c0-1.81,1.17-3.48,3.87-3.48c1.09,0,1.9,0.1,1.9,0.1
                                               l-0.06,2.52c0,0-0.83-0.01-1.73-0.01c-0.97,0-1.13,0.45-1.13,1.19c0,0.59,0-1.26,0,1.97h2.93l-0.13,2.7h-2.81V24H14.88z"/>
                    </g>
                </svg>

            </a>
            <a href="#" title="twitter" class="popup">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                    <defs>
                    </defs>
                    <g>
                        <g>
                            <path d="M30,2v28H2V2H30 M32,0H0v32h32V0L32,0z"/>
                        </g>
                        <path class="icono" d="M23.65,12.58c0.01,0.14,0.01,0.28,0.01,0.42c0,4.34-3.3,9.34-9.34,9.34c-1.85,0-3.58-0.54-5.03-1.47
                                               c0.26,0.03,0.52,0.05,0.78,0.05c1.54,0,2.95-0.52,4.08-1.41c-1.44-0.03-2.65-0.98-3.07-2.28c0.2,0.04,0.41,0.06,0.62,0.06
                                               c0.3,0,0.59-0.04,0.86-0.12c-1.5-0.3-2.63-1.63-2.63-3.22c0-0.01,0-0.03,0-0.04c0.44,0.25,0.95,0.39,1.49,0.41
                                               c-0.88-0.59-1.46-1.59-1.46-2.73c0-0.6,0.16-1.17,0.44-1.65c1.62,1.99,4.04,3.29,6.77,3.43c-0.06-0.24-0.09-0.49-0.09-0.75
                                               c0-1.81,1.47-3.28,3.28-3.28c0.94,0,1.8,0.4,2.4,1.04c0.75-0.15,1.45-0.42,2.08-0.8c-0.25,0.77-0.77,1.41-1.44,1.82
                                               c0.66-0.08,1.3-0.26,1.89-0.52C24.85,11.54,24.29,12.12,23.65,12.58z"/>
                    </g>
                </svg>

            </a>
            <a href="#" title="mail" class="popup">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                    <defs>
                    </defs>
                    <g>
                        <g>
                            <path d="M30,2v28H2V2H30 M32,0H0v32h32V0L32,0z"/>
                        </g>
                        <path class="icono" d="M22.74,8.46H9.83c-0.85,0-1.54,0.69-1.54,1.54v10.24c0,0.85,0.69,1.54,1.54,1.54h12.91
                                               c0.85,0,1.54-0.69,1.54-1.54V10C24.29,9.15,23.6,8.46,22.74,8.46z M21.36,10.46l-5.07,5.15l-5.07-5.15H21.36z M10.29,19.79v-8.37
                                               l5.53,5.61c0.13,0.13,0.3,0.2,0.47,0.2c0.18,0,0.35-0.07,0.47-0.2l5.53-5.6v8.37H10.29z"/>
                    </g>
                </svg>
            </a>
            <a href="#" title="google plus" class="popup">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                    <defs>
                    </defs>
                    <g>
                        <g>
                            <path d="M30,2v28H2V2H30 M32,0H0v32h32V0L32,0z"/>
                        </g>
                        <path class="icono" d="M16.72,9.34c0.12,0.09,0.25,0.21,0.4,0.36c0.15,0.15,0.3,0.33,0.44,0.54c0.14,0.21,0.26,0.46,0.37,0.74
                                               c0.1,0.28,0.15,0.6,0.15,0.96c0,0.36-0.04,0.67-0.14,0.94c-0.09,0.27-0.21,0.51-0.36,0.72c-0.16,0.21-0.33,0.4-0.52,0.58
                                               c-0.19,0.17-0.39,0.34-0.6,0.49c-0.13,0.13-0.25,0.26-0.36,0.4c-0.12,0.14-0.17,0.32-0.17,0.54c0,0.22,0.06,0.39,0.17,0.51
                                               c0.11,0.12,0.22,0.23,0.33,0.32l0.69,0.54c0.21,0.18,0.41,0.36,0.61,0.54c0.2,0.18,0.37,0.37,0.52,0.58
                                               c0.15,0.21,0.27,0.44,0.36,0.69c0.09,0.26,0.14,0.55,0.14,0.89c0,0.45-0.11,0.89-0.33,1.33c-0.22,0.44-0.54,0.83-0.96,1.17
                                               c-0.42,0.34-0.95,0.62-1.59,0.83c-0.63,0.21-1.36,0.32-2.19,0.32c-0.69,0-1.3-0.08-1.82-0.23c-0.52-0.15-0.95-0.36-1.3-0.62
                                               c-0.35-0.26-0.6-0.55-0.77-0.88c-0.17-0.33-0.25-0.67-0.25-1.03c0-0.35,0.11-0.74,0.32-1.18c0.21-0.44,0.6-0.83,1.16-1.16
                                               c0.29-0.18,0.61-0.32,0.95-0.43c0.34-0.11,0.68-0.2,1.01-0.26c0.33-0.07,0.65-0.11,0.94-0.13c0.29-0.03,0.55-0.05,0.77-0.06
                                               c-0.14-0.18-0.27-0.37-0.39-0.57c-0.12-0.2-0.18-0.45-0.18-0.74c0-0.17,0.02-0.3,0.06-0.41c0.04-0.11,0.08-0.22,0.13-0.34
                                               c-0.1,0.01-0.21,0.02-0.31,0.03c-0.1,0.01-0.21,0.01-0.31,0.01c-0.51,0-0.97-0.09-1.37-0.26c-0.4-0.17-0.73-0.4-1-0.68
                                               c-0.27-0.28-0.48-0.61-0.62-0.97c-0.14-0.37-0.21-0.73-0.21-1.11c0-0.45,0.1-0.9,0.31-1.36c0.2-0.45,0.51-0.86,0.92-1.22
                                               c0.55-0.45,1.13-0.74,1.74-0.87c0.61-0.13,1.18-0.19,1.7-0.19h3.96l-1.23,0.67H16.72z M17.45,20.44c0-0.24-0.04-0.47-0.13-0.66
                                               c-0.08-0.2-0.21-0.39-0.37-0.59c-0.17-0.19-0.39-0.39-0.65-0.6c-0.27-0.21-0.58-0.44-0.94-0.69c-0.08-0.01-0.14-0.02-0.2-0.02
                                               c-0.06,0-0.14,0-0.24,0c-0.04,0-0.13,0-0.27,0.01c-0.14,0.01-0.31,0.02-0.5,0.04c-0.19,0.02-0.4,0.05-0.62,0.1
                                               c-0.22,0.05-0.43,0.1-0.64,0.16c-0.1,0.04-0.25,0.1-0.43,0.18c-0.18,0.08-0.37,0.2-0.55,0.36c-0.18,0.15-0.34,0.35-0.47,0.58
                                               c-0.13,0.23-0.2,0.52-0.2,0.87c0,0.69,0.3,1.26,0.91,1.69c0.61,0.44,1.43,0.65,2.47,0.65c0.92,0,1.63-0.2,2.11-0.59
                                               C17.21,21.54,17.45,21.05,17.45,20.44z M14.6,14.79c0.24,0,0.49-0.05,0.72-0.15c0.24-0.1,0.43-0.23,0.59-0.39
                                               c0.22-0.22,0.35-0.46,0.4-0.73c0.05-0.27,0.08-0.49,0.08-0.68c0-0.35-0.05-0.73-0.15-1.14c-0.1-0.41-0.26-0.8-0.46-1.16
                                               c-0.21-0.36-0.46-0.66-0.76-0.9c-0.3-0.24-0.65-0.36-1.05-0.36c-0.26,0-0.51,0.06-0.75,0.17c-0.24,0.12-0.44,0.27-0.6,0.46
                                               c-0.17,0.21-0.28,0.43-0.34,0.68c-0.06,0.24-0.09,0.5-0.09,0.75c0,0.32,0.05,0.68,0.14,1.08c0.1,0.4,0.24,0.77,0.44,1.12
                                               c0.2,0.35,0.45,0.64,0.75,0.88C13.83,14.67,14.19,14.79,14.6,14.79z M24.04,15.08h-1.91v-1.91h-0.81v1.91H19.4v0.81h1.91v1.91h0.81
                                               v-1.91h1.91V15.08z"/>
                    </g>
                </svg>

            </a>
            <a href="#" title="whatsapp" class="popup">
                <svg version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                     x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                    <defs>
                    </defs>
                    <g>
                        <g>
                            <path d="M30,2v28H2V2H30 M32,0H0v32h32V0L32,0z"/>
                        </g>
                        <path class="icono" d="M24.79,15.79c0,4.3-3.52,7.8-7.85,7.8c-1.38,0-2.67-0.35-3.8-0.97L8.79,24l1.42-4.18
                                               c-0.72-1.17-1.13-2.55-1.13-4.02c0-4.3,3.52-7.8,7.86-7.8C21.27,8,24.79,11.49,24.79,15.79z M16.93,9.24
                                               c-3.64,0-6.61,2.94-6.61,6.55c0,1.44,0.47,2.76,1.26,3.84l-0.82,2.43l2.54-0.8c1.04,0.69,2.29,1.08,3.63,1.08
                                               c3.64,0,6.6-2.94,6.6-6.56C23.54,12.18,20.57,9.24,16.93,9.24z M20.9,17.59c-0.05-0.08-0.17-0.13-0.36-0.23
                                               c-0.2-0.1-1.14-0.55-1.32-0.61c-0.17-0.06-0.3-0.1-0.43,0.09c-0.13,0.19-0.5,0.62-0.61,0.75c-0.12,0.13-0.23,0.14-0.42,0.05
                                               c-0.19-0.09-0.81-0.3-1.55-0.95c-0.57-0.5-0.96-1.13-1.07-1.32c-0.11-0.19-0.01-0.3,0.08-0.39c0.09-0.09,0.19-0.23,0.29-0.34
                                               c0.1-0.11,0.13-0.19,0.19-0.32c0.06-0.13,0.03-0.24-0.02-0.34c-0.05-0.1-0.44-1.03-0.59-1.42c-0.16-0.38-0.32-0.32-0.43-0.32
                                               c-0.12,0-0.24-0.02-0.37-0.02c-0.13,0-0.34,0.05-0.51,0.24c-0.17,0.19-0.67,0.65-0.67,1.59c0,0.94,0.69,1.85,0.79,1.98
                                               c0.1,0.13,1.33,2.11,3.29,2.88c1.96,0.77,1.96,0.51,2.31,0.48c0.35-0.03,1.14-0.46,1.3-0.91C20.95,18.05,20.95,17.67,20.9,17.59z"
                              />
                    </g>
                </svg>

            </a>
        </div>
    </div>
</div>
<div class="box--full">
    <a href="#" title="Titulo" class="more-news">
        <svg><use xlink:href="#shape-prev" /></svg>
        <span>Lorem ipsum dolor sit amet, consectetur.</span>
    </a>
    <a href="#" title="Titulo" class="more-news">
        <svg><use xlink:href="#shape-next" /></svg>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
    </a>
</div>
<?php include 'footer.php'; ?>