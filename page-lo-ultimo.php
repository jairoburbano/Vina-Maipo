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
<div class="banner inside banner--search" style="background-image: url(assets/nuestra-viña.jpg)">
    <div class="banner--text">
        <h2>Lo Último</h2>
        <p>
            Entérate de las actividades y eventos deonde ha participado la viña, y de los más destacados premios a nuestros vinos.
        </p>
        <div class="banner--text__search">
            <button class="buscador btn btn__border js-search">Buscas algo en especial <svg><use xlink:href="#shape-search" /></svg></button>
        </div>
    </div>
</div>
<div class="container">
    <div class="masonry-main">
        <div class="masonry-content" id="masonry-grid">
            <a href="single-lo-ultimo.php" title="titulo" class="masonry-item masonry-content--item">
                <img src="assets/a-la-carta.jpg" alt="titulo">
                <span class="masonry-item masonry-content--item--text">
                    <span class="content">
                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                    </span>
                </span>
            </a>
            <a href="single-lo-ultimo.php" title="titulo" class="masonry-item masonry-content--item cat--video">
                <img src="assets/historia/experiencia-2.jpg" alt="titulo">
                <span class="masonry-item masonry-content--item--text">
                    <span class="content">
                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                    </span>
                </span>
            </a>
            <a href="single-lo-ultimo.php" title="titulo" class="masonry-item masonry-content--item cat--gallery">
                <img src="assets/nuestra-vi%C3%B1a.jpg" alt="titulo">
                <span class="masonry-item masonry-content--item--text">
                    <span class="content">
                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                    </span>
                </span>
            </a>
            <a href="single-lo-ultimo.php" title="titulo" class="masonry-item masonry-content--item">
                <img src="assets/home-destacado-03.jpg" alt="titulo">
                <span class="masonry-item masonry-content--item--text">
                    <span class="content">
                        <span>Lorem ipsum dolor sit amet, consectetur.</span>
                    </span>
                </span>
            </a>
            <a href="single-lo-ultimo.php" title="titulo" class="masonry-item masonry-content--item">
                <img src="assets/wines/vitral/vitral-carm.png" alt="titulo">
                <span class="masonry-item masonry-content--item--text">
                    <span class="content">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, nam?</span>
                    </span>
                </span>
            </a>
            <a href="single-lo-ultimo.php" title="titulo" class="masonry-item masonry-content--item">
                <img src="assets/historia/historia.jpg" alt="titulo">
                <span class="masonry-item masonry-content--item--text">
                    <span class="content">
                        <span>Lorem ipsum dolor sit amet, consectetur elit. Dolorum, nam?</span>
                    </span>
                </span>
            </a>
        </div>
    </div>
    <a href="#" title="Cargar mas" class="btn btn__border btn__contrast">Cargar mas</a>
</div>
<?php include 'footer.php'; ?>