<?php

namespace Classes\ModelosDePaginas\PaginaInicial;


use Classes\Lib\Util;

class PaginaInicial extends Util
{
	protected $array_icone_titulo_icone_id_menu_icone = array();

	// Notícias
	protected $categoria_noticias_home;
	protected $id_noticias_home_principal;
	protected $args_noticas_home_principal;
	protected $query_noticias_home_principal;
	protected $args_noticas_home_secundarias;
	protected $query_noticias_home_secundarias;

	public function __construct()
	{
		$this->page_id = get_the_ID();
		$this->page_slug = get_queried_object()->post_name;
		$util = new Util($this->page_id);
		// Classe Util
		$util->montaHtmlLoopPadrao();

		$this->init();
	}

	public function init(){

		new PaginaInicialIcones();

		$this->tituloNoticias();

        $noticias_home_tags = array('section','section');
        $noticias_home_css = array('container mt-5 mb-5 noticias','row');
        $this->abreContainer($noticias_home_tags, $noticias_home_css);

		new PaginaInicialNoticiasDestaquePrimaria();
		new PaginaInicialNoticiasDestaqueSecundarias();

		$twitter_newsletter_nuvem_de_tags_tags = array('section','section','section');
		$twitter_newsletter_nuvem_de_tags_css = array('bg-light pt-5 pb-5 area-social','container', 'row');
		$this->abreContainer($twitter_newsletter_nuvem_de_tags_tags, $twitter_newsletter_nuvem_de_tags_css);

		new PaginaInicialTwitter();

        $newsletter_nuvem_de_tags_tags= array('section', 'section');
        $newsletter_nuvem_de_tags_css= array('col-12 col-md-6', 'row');
		$this->abreContainer($newsletter_nuvem_de_tags_tags, $newsletter_nuvem_de_tags_css);
		new PaginaInicialNewsletter();
		new PaginaInicialNuvemDeTags();
		$this->fechaContainer($newsletter_nuvem_de_tags_tags);

		$this->fechaContainer($twitter_newsletter_nuvem_de_tags_tags);
		$this->fechaContainer($noticias_home_tags);

    }

    public function tituloNoticias(){
	    ?>
        <section class="container mt-5 mb-5 noticias">
            <article class="row mb-4">
                <article class="col-lg-12 col-xs-12">
                    <h2 class="border-bottom">Notícias</h2>
                </article>
            </article>
        </section>
        <?php
    }

    public function abreContainer(array $tags, array $css){

		foreach ($tags as $index => $tag){
			$array_tags[] = $tag.'_'.$index;
		}

		foreach ($css as $classe){
			$array_css[] = $classe;
		}

		$array_tags_e_css = array_combine($array_tags, $array_css);

		foreach ($array_tags_e_css as $index => $valor){
			$posicao = strpos($index, "_");
			$tag = substr($index,0,$posicao);

			echo '<'.$tag.' class="'.$valor.'">';
		}
	}

	public function fechaContainer($tags){
		foreach ($tags as $index => $tag){
			echo '</'.$tag.'>';
		}

	}

}