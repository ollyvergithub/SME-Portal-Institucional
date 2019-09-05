<?php

namespace Classes\TemplateHierarchy\Search;


class SearchForm
{
	public static function searchFormLoopSearch(){
		?>
		<form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar-form navbar-left pt-2">
			<fieldset>
                <legend>Campo de Busca de informações</legend>
				<div class="input-group mb-3">
                    <label class="esconde-item-acessibilidade" for="search-front-end">Campo de Busca de informações</label>
                    <input type="text" name="s" placeholder="<?php _e(BUSCAR,"wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
					<div class="input-group-append">
						<button type="submit" class="btn btn-outline-secondary bt-search-topo"><?php _e('<i class="fa fa-search"></i>','wpbootstrap'); ?></button>
					</div>
				</div>
			</fieldset>
		</form>
		<?php
	}

	public static function searchFormHeader(){
		?>
        <section class="container">
        <section class="row">
            <section class="col-12 d-flex flex-row-reverse mt-3">
                <form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar-form navbar-left">
                    <fieldset>
                        <legend>Campo de Busca de informações</legend>
                        <div class="input-group mb-3">
                            <label class="esconde-item-acessibilidade" for="search-front-end">Campo de Busca de informações</label>
                            <input type="text" name="s" id="search-front-end" placeholder="<?php _e(BUSCAR,"wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary bt-search-topo"><?php _e('<i class="fa fa-search"></i>','wpbootstrap'); ?></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </section>
        </section>
        </section>

		<?php
	}

}