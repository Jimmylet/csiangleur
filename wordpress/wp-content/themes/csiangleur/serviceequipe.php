<?php
/*
Template Name: Services et équipe
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
<body class="no-js servicesequipe">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>

<main>
	<div class="content-top">
		<div class="titlehead">
			<span class="titlehead__subtitle">Centre de santé intégré</span>
			<span class="titlehead__title">Une multitude de disciplines</span></div>
		<section class="content">
			<div class="content__wrap">
				<div class="content__info">
					<div class="content__info-title">
						<img src="<?php echo $images . 'svg/services_medecine.svg'; ?>" alt="" width="57" height="51">
						<h2>Médecine générale</h2>
					</div>
					<?php if (!empty(get_field('service_horaire-medecineg'))): ?>
					<div class="content__info-horaire">
						<span class="content__info-horaire__title">Horaire du service&nbsp;:</span>
						<table class="content__info-horaire__wrap">
							<tbody>
							<?php
							if( have_rows('service_horaire-medecineg') ):
							while ( have_rows('service_horaire-medecineg') ) : the_row(); ?>
							<tr>
								<td><?php echo the_sub_field('jours');?></td>
								<td><?php echo the_sub_field('heure');?></td>
							</tr>
							<?php endwhile; endif; ?>
							</tbody>
						</table>
					</div>
					<?php endif; ?>
				</div>
				<div class="content__description">
					<?php the_field('service_text-medecineg'); ?>
				</div>
				<div class="equipe">
					<?php
					if( have_rows('service_equipe-medecineg') ):
					while ( have_rows('service_equipe-medecineg') ) : the_row(); ?>
					<figure>
						<?php $image = wp_get_attachment_image_src(get_sub_field('photo-membre')['id'], 'thumb-membre-equipe');
						$imageinfos = get_sub_field('photo-membre'); ?>
						<img src="<?php echo $image['0']; ?>" alt="<?php echo $imageinfos['alt']; ?>" width="<?php echo $image['1']; ?>" height="<?php echo $image['2']; ?>"/>
						<figcaption>
							<span class="equipe__name"><?php echo the_sub_field('nom-membre');?></span>
							<span class="equipe__role"><?php echo the_sub_field('profession-membre');?></span>
							<div class="equipe__dispo">
								<span class="equipe__dispo__clic">Voir les disponibilités</span>
								<div class="equipe__dispo__horaire" id="dispoHoraire">
									<table>
										<tbody>
										<?php
										if( have_rows('horaire-membre') ):
										while ( have_rows('horaire-membre') ) : the_row(); ?>
										<tr>
											<td><?php echo the_sub_field('jours');?></td>
											<td><?php echo the_sub_field('heure');?></td>
										</tr>
										<?php endwhile; endif; ?>
										</tbody>
									</table>
								</div>
							</div>
						</figcaption>
					</figure>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>
	</div>
	<section class="content content-2nd">
		<div class="content__wrap">
			<div class="content__info">
				<div class="content__info-title"><img src="./images/svg/services_infirmiers.svg" alt="" width="57" height="51">
					<h2>Soins infirmiers</h2>
				</div>
				<div class="content__info-horaire"><span class="content__info-horaire__title">Horaire du service&nbsp;:</span>
					<table class="content__info-horaire__wrap">
						<tbody>
						<tr>
							<td>Lundi - Vendredi</td>
							<td>10:00 - 17:00</td>
						</tr>
						<tr>
							<td>Samedi</td>
							<td>9:00 - 12:00</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="content__description">
				<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla.</p>
				<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en.</p>
			</div>
			<div class="equipe">
				<figure><img src="http://lorempixel.com/192/124/people/1" alt="Photo de" width="240" height="124">
					<figcaption><span class="equipe__name">Docteur Lorem</span><span class="equipe__role">Médecin généraliste</span>
						<div class="equipe__dispo"><span class="equipe__dispo__clic">Voir les disponibilités</span>
							<div class="equipe__dispo__horaire" id="dispoHoraire">
								<table>
									<tbody>
									<tr>
										<td>Lundi</td>
										<td>9:00 - 19:00</td>
									</tr>
									<tr>
										<td>Mardi</td>
										<td>Non disponible</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>9:00 - 14:00</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>12:00 - 17:00</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>10:00 - 19:00</td>
									</tr>
									<tr>
										<td>Samedi</td>
										<td>Non disponible</td>
									</tr>
									<tr>
										<td>Dimanche</td>
										<td>Non disponible</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure><img src="http://lorempixel.com/192/124/people/2" alt="Photo de" width="240" height="124">
					<figcaption><span class="equipe__name">Docteur Lorem</span><span class="equipe__role">Médecin généraliste</span>
						<div class="equipe__dispo"><span class="equipe__dispo__clic">Voir les disponibilités</span>
							<div class="equipe__dispo__horaire" id="dispoHoraire">
								<table>
									<tbody>
									<tr>
										<td>Lundi</td>
										<td>9:00 - 19:00</td>
									</tr>
									<tr>
										<td>Mardi</td>
										<td>Non disponible</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>9:00 - 14:00</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>12:00 - 17:00</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>10:00 - 19:00</td>
									</tr>
									<tr>
										<td>Samedi</td>
										<td>Non disponible</td>
									</tr>
									<tr>
										<td>Dimanche</td>
										<td>Non disponible</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</figcaption>
				</figure>
				<figure><img src="http://lorempixel.com/192/124/people/1" alt="Photo de" width="240" height="124">
					<figcaption><span class="equipe__name">Docteur Lorem</span><span class="equipe__role">Médecin généraliste</span>
						<div class="equipe__dispo"><span class="equipe__dispo__clic">Voir les disponibilités</span>
							<div class="equipe__dispo__horaire" id="dispoHoraire">
								<table>
									<tbody>
									<tr>
										<td>Lundi</td>
										<td>9:00 - 19:00</td>
									</tr>
									<tr>
										<td>Mardi</td>
										<td>Non disponible</td>
									</tr>
									<tr>
										<td>Mercredi</td>
										<td>9:00 - 14:00</td>
									</tr>
									<tr>
										<td>Jeudi</td>
										<td>12:00 - 17:00</td>
									</tr>
									<tr>
										<td>Vendredi</td>
										<td>10:00 - 19:00</td>
									</tr>
									<tr>
										<td>Samedi</td>
										<td>Non disponible</td>
									</tr>
									<tr>
										<td>Dimanche</td>
										<td>Non disponible</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
		</div>
	</section>
</main>

<?php include 'footer.php'; ?>
