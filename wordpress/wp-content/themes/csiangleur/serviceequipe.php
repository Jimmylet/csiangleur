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
								<a href="#" class="equipe__dispo__clic">Voir les disponibilités <span class="visuallyhidden">de <?php echo the_sub_field('nom-membre');?></span></a>
								<div class="equipe__dispo__horaire">
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
	
	
	<?php
	if( have_rows('service_add') ):
	while ( have_rows('service_add') ) : the_row(); ?>
	
	<section class="content content-2nd">
		<div class="content__wrap">
			<div class="content__info">
				<div class="content__info-title">
					<img src="<?php echo $images . 'svg/services_';?><?php echo the_sub_field('service_icon') . '.svg'; ?>" alt="" width="57" height="51">
					<h2><?php echo the_sub_field('service_name'); ?></h2>
				</div>
				<?php if (!empty(get_sub_field('service_horaire'))): ?>
				<div class="content__info-horaire">
					<span class="content__info-horaire__title">Horaire du service&nbsp;:</span>
					<table class="content__info-horaire__wrap">
						<tbody>
						<?php
						if( have_rows('service_horaire') ):
						while ( have_rows('service_horaire') ) : the_row(); ?>
								<tr>
									<td><?php echo the_sub_field('horaire_jours');?></td>
									<td><?php echo the_sub_field('horaire_heures');?></td>
								</tr>
						<?php endwhile; endif; ?>
						</tbody>
					</table>
				</div>
				<?php endif; ?>
			</div>
			<div class="content__description">
				<?php echo the_sub_field('service_description'); ?>
			</div>
			<div class="equipe">
				<?php
				if( have_rows('service_membres') ):
					while ( have_rows('service_membres') ) : the_row(); ?>
						<figure>
							<?php $image = wp_get_attachment_image_src(get_sub_field('service_membre_photo')['id'], 'thumb-membre-equipe');
							$imageinfos = get_sub_field('service_membre_photo'); ?>
							<img src="<?php echo $image['0']; ?>" alt="<?php echo $imageinfos['alt']; ?>" width="<?php echo $image['1']; ?>" height="<?php echo $image['2']; ?>"/>
							<figcaption>
								<span class="equipe__name"><?php echo the_sub_field('service_membre_name');?></span>
								<span class="equipe__role"><?php echo the_sub_field('service_membre_profession');?></span>
								<div class="equipe__dispo">
									<a href="#" class="equipe__dispo__clic">Voir les disponibilités</a>
									<div class="equipe__dispo__horaire">
										<table>
											<tbody>
											<?php
											if( have_rows('service_membre_horaire') ):
												while ( have_rows('service_membre_horaire') ) : the_row(); ?>
													<tr>
														<td><?php echo the_sub_field('service_membre_jour');?></td>
														<td><?php echo the_sub_field('service_membre_heures');?></td>
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
	
	<?php endwhile; endif; ?>

</main>

<?php include 'footer.php'; ?>
