<?php

namespace Classes\TemplateHierarchy\LoopSingle;

use Classes\TemplateHierarchy\Search\SearchFormSingle;

class LoopSingleCabecalho extends LoopSingle
{

	public function __construct()
	{
		$this->cabecalhoDetalheNoticia();
	}

	public function cabecalhoDetalheNoticia(){
		?>
		<div class="col-lg-6 col-sm-6 d-flex justify-content-lg-start justify-content-center">
			<p class="titulos_internas mb-lg-5">Notícias</p>
		</div>
        <?php
        SearchFormSingle::searchFormHeader();
	}
}