<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		vina-maipo
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
        <div class="log"></div>
        <div class="lightbox-container js-lightbox-container"></div>
        <header class="header">
            <div class="box-lang">
                <a href="#" title="English">English</a>
                <a href="#" title="中国" class="language">中国</a>
            </div>
            <div class="content-menu">
                <ul class="menu">
                    <li>
                        <a href="page-historia.php" title="Nuestra Viña">Nuestra Viña</a>
                    </li>
                    <li>
                        <a href="page-vinos.php" title="Vinos">Vinos</a>
                    </li>
                    <li>
                        <a href="page-lo-ultimo.php" title="Lo Último">Lo Último</a>
                    </li>
                    <li>
                        <a href="page-a-la-carta.php" title="A la carta">¡A la carta!</a>
                    </li>
                </ul>
                <div class="logo">
                    <a href="index.php" title="Viña Maipo"><img src="img/logo.svg" alt="Viña maipo"></a>
                </div><!--/.logo-->
            </div><!--/.content-menu-->
            <!--Memu Mobile-->
            <div class="menu--mobile">
                <a class="logo" href="index.php" title="Viña Maipo">
                    <img src="img/logo.svg" alt="Viña maipo">
                </a>
                <button class="menutoggle">Menú</button>
            </div>
        </header>