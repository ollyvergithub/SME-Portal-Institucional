<?php


namespace Classes\ModelosDePaginas\PaginaInicial;


class PaginaInicialTwitter extends PaginaInicial
{

	public function __construct()
	{
		$this->montaHtmlTwitter();
	}

	public function montaHtmlTwitter(){
		?>
		<article class="col-12 col-md-6 container-twitter">
			<a class="twitter-timeline" data-lang="pt" data-height="540" data-chrome = "noheader nofooter"  href="https://twitter.com/EducaPrefSP">Tweets by EducaPrefSP</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</article>
		<?php
	}

}