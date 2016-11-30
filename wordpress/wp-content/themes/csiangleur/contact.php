<?php
/*
Template Name: Contact
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
<body class="no-js contact">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>

<main>
	
	<section class="content">
		<div class="content__wrap">
			<section class="content__infos">
				<h2 class="content__infos__title-hide">
					Informations de contact
				</h2>
				<img class="content__infos__logo" src="<?php echo $images . '/svg/logomenu.svg'; ?>" width="107" height="107" alt="Logo du Centre de Santé intégré d’Angleur">
				<span class="content__infos__title">
					Centre de Santé intégré d’Angleur
				</span>
				<span class="content__infos__address">
					<?php the_field('contact_adress'); ?>
				</span>
				<span class="content__infos__tel">
					TEL&nbsp;: <?php the_field('contact_tel'); ?>
				</span>
				<span class="content__infos__fax">
					FAX&nbsp;: <?php the_field('contact_fax'); ?>
				</span>
			</section>
			<a class="content__map" href="https://goo.gl/maps/qsiqPR4aT3S2" title="Vers google map">
				<span>
					Vers Google Maps
				</span>
				<img class="content__map__img" src="<?php echo $images . '/maps.jpg' ;?>" alt="" width="960" height="482">
			</a>
			<div class="content__bottom">
				<section class="content__form">
					<h2 class="content__form__title">Une question&nbsp;? Un rendez-vous&nbsp;? Contactez-nous&nbsp;!</h2>
					
					
				<?php echo do_shortcode('[contact-form-7 id="274" title="Formulaire de contact" html_class="floatingLabels"]'); ?>
					
					
					
				</section>
				
				<section class="content__horaires">
					<h2 class="content__horaires__title">Voici nos horaires généraux&nbsp;:</h2>
					<table>
						<?php if( have_rows('opt_horaires', 'option') ): ?>
						<?php while( have_rows('opt_horaires', 'option') ): the_row(); ?>
						<tr>
							<td><?php the_sub_field('jours'); ?></td>
							<td><?php the_sub_field('heures'); ?></td>
						</tr>
						<?php endwhile; ?>
						<?php endif; ?>
					</table><span class="content__horaires__text">En dehors de ces heures, vous pouvez bénéficier du<a href="garde.html" title="Vers"> service de garde</a>.</span><a class="content__horaires__button" href="servicesetequipe.html" title="Vers">Voir les horaires par services et par thérapeute.</a>
				</section>
			</div>
		</div>
	</section>

</main>

<?php include 'footer.php'; ?>
