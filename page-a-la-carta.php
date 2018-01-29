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
<div class="banner inside dotless" style="background-image: url(assets/nuestra-viña.jpg)">
    <div class="banner--text">
        <h2>¡A la carta!</h2>
        <p>
            Descubre las más deliciosas combinaciones entre vino y comida, y atrévete en la cocina con estas recetas.
        </p>
        <div class="box--btn">
            <a href="#" title="No tengo mi viña maipo" id="no-tengo-maipo" class="btn btn__border bigger">No tengo mi Viña Maipo</a>
            <span class="btn btn__border bigger js-mimaipo js-openlight">Ya tengo mi Viña Maipo</span>
        </div>
    </div>
</div>
<div class="main__container">
    <div class="filter__container">
        <div class="dropdown-filters">
            <span>Todos</span>
            <svg><use xlink:href="#shape-dropdown" /></svg>
        </div><!--.dropdown-filters-->
        <ul class="filters">
            <li data-group="aperitivos">Aperitivos</li>
            <li data-group="blancas">Carnes Blancas</li>
            <li data-group="rojas">Carnes Rojas</li>
            <li data-group="mariscos">Mariscos</li>
            <li data-group="pastas">Pastas</li>
        </ul><!--.filters-->
    </div><!--.filter__container-->
    <div class="isotope-main">
        <div class="isotope-content recetas" id="isotope-grid">
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/1.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/2.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/3.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/4.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/5.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/6.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/8.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
            <a href="single-a-la-carta.php" title="Titulo" class="isotope-content--item">
                <span class="content-item">
                    <img src="assets/recetas/9.jpg" alt="titulo">
                    <span class="isotope-content--item--text">
                        <span class="content">
                            <span>Lorem ipsum dolor sit amet, consectetur.</span>
                        </span>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div><!--..main__container-->
<?php include 'footer.php'; ?>