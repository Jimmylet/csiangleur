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
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css">
</head>
<body class="no-js contact">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>

<main>
	
	<div class="content">
		<div class="content__wrap">
			<section class="content__infos vcard" itemscope itemtype="http://schema.org/Organization">
				<h2 class="content__infos__title-hide">
					Informations de contact
				</h2>
				<div class="postal-contact">
					<img class="content__infos__logo" src="<?php echo $images . '/svg/logomenu.svg'; ?>" width="107" height="107" alt="Logo du Centre de Santé intégré d’Angleur">
					<span class="content__infos__title org" itemprop="legalName">
						Centre de Santé intégré d’Angleur
					</span>
					<span class="adr">
						<span class="content__infos__address street-address" itemprop="address">
							<?php the_field('contact_adress'); ?>
						</span>
					</span>
					<span class="content__infos__tel tel" itemprop="telephone">
						TEL&nbsp;: <?php the_field('contact_tel'); ?>
					</span>
					<span class="content__infos__fax tel" itemprop="faxNumber">
						FAX&nbsp;: <?php the_field('contact_fax'); ?>
					</span>
				</div>
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
					</table><span class="content__horaires__text">En dehors de ces heures, vous pouvez bénéficier du<a href="<?php the_permalink('155');?>" title="Vers"> service de garde</a>.</span><a class="content__horaires__button" href="<?php the_permalink('59'); ?>" title="Vers">Voir les horaires par services et par thérapeute.</a>
				</section>
			</div>
		</div>
	</div>

</main>

<?php include 'footer.php'; ?>
