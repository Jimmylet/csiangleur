<div class="bandeau">
	<span class="bandeau__title"><?php echo the_title(); ?></span>
	<ol class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<li class="breadcrumb__link" itemprop="title">
			<a class="breadcrumb__link__text" itemprop="link" href="<?php echo home_url(); ?>" title="Aller vers l’accueil">Accueil &nbsp;/&nbsp;</a>
		</li>
		<li class="breadcrumb__link" itemprop="title">
			<a class="breadcrumb__link__text" itemprop="link" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
		</li>
	</ol>
</div>
