<?php
/*
Template Name: Maison médicale au forfait
*/; ?>
	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<title><?php echo the_title(); ?> - <?php echo bloginfo(); ?></title>
		<meta name="description" content="<?php echo the_field("meta-description"); ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css">
		<?php wp_head(); ?>
	</head>
<body class="no-js maisonmedicaleauforfait">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
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
<main>
	<section class="forfait">
		<div class="forfait__wrap">
			<h2 class="forfait__title">Le <?php echo bloginfo(); ?></h2>
			
			<?php the_field('mmaf_description'); ?>
			
			<?php $image = wp_get_attachment_image_src(get_field('mmaf_photo')['id'], 'thumb-photo-maison');
			$imageinfos = get_field('mmaf_photo'); ?>
			
			<?php if( !empty($image) ): ?>
				<img src="<?php echo $image['0']; ?>" alt="<?php echo $imageinfos['alt']; ?>" width="<?php echo $image['1']; ?>" height="<?php echo $image['2']; ?>"/>
			<?php endif; ?>
			
			<span class="forfait__subtitle">Une maison médicale, c’est quoi ?</span>
			<?php the_field('mmaf_cquoi'); ?>
			
			
			<div class="forfait__cards">
				<div class="forfait__card"><span>C’est<strong> gratuit</strong> ?</span>
					<p>Pas vraiment, mais vous ne devez pas payer à chaque fois que vous avez besoins de soins.</p>
				</div>
				<div class="forfait__card"><span>Le<strong> forfait</strong> ?</span>
					<p>C’est un contrat entre vous, votre mutualité et la maison médicale avec des droits et devoirs pour chacun.</p>
				</div>
				<div class="forfait__card"><span>Une<strong> inscription</strong> ?</span>
					<p>Pour profiter des services de la maison médicale, il est nécessaire de<a href="inscription.html"> s’inscrire</a> au préalable.</p>
				</div>
			</div>
			
			<?php
			if( have_rows('mmaf_other') ):
				while ( have_rows('mmaf_other') ) : the_row(); ?>
			<span class="forfait__subtitle"><?php the_sub_field('mmaf_title');?></span>
			<?php the_sub_field('mmaf_content'); ?>
			<?php endwhile; endif; ?>
		</div>
	</section>
	<section class="philo">
		<div class="philo__wrap">
			<h2 class="philo__title">Notre philosophie de travail</h2>
			
			<?php
			if( have_rows('phylo_text') ):
			while ( have_rows('phylo_text') ) : the_row(); ?>
			<?php if (!empty(get_sub_field('phylo_title'))): ?>
				<span class="philo__subtitle"><?php echo the_sub_field('phylo_title');?></span>
			<?php endif; ?>
				<?php the_sub_field('phylo_content'); ?>
			<?php endwhile; endif; ?>
			
			
		</div>
	</section>
</main>
