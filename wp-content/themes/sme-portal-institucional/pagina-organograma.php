<?php
/*
 * Template Name: Página Organograma
 * Description: Página Organograma, página que exibe o CPT organograma
 */

use Classes\ModelosDePaginas\PaginaOrganograma\PaginaOrganograma;

get_header();
$pagina_cards = new PaginaOrganograma();
get_footer();



