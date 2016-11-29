<?php
/*
Template Name: Service de garde
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
<body class="no-js garde">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>
<main>
	
	<section class="content">
		<div class="content__wrap">
			<h2 class="content__title">
				<?php the_field('garde_title'); ?>
			</h2>
			<span class="content__subtitle">
				<?php the_field('garde_subtitle'); ?>
			</span>
			<div class="content__tel-wrap">
				<a class="content__tel" href="tel:<?php the_field('garde_tel'); ?>"><?php the_field('garde_tel'); ?></a>
			</div>
			<div class="intro">
				<div class="intro-wrap-text">
					<?php the_field('garde_intro'); ?>
				</div>
				<div class="intro__horaires">
					<div class="intro__horaires__wrap">
						<span class="intro__horaires__title">
							Ne contacter le service de garde qu’en dehors de ces heures de service&nbsp;:
						</span>
						<table class="intro__horaires__table">
							<tbody>
							<?php if( have_rows('opt_horaires', 'option') ): ?>
							<?php while( have_rows('opt_horaires', 'option') ): the_row(); ?>
							<tr>
								<td><?php the_sub_field('jours'); ?></td>
								<td><?php the_sub_field('heures'); ?></td>
							</tr>
							<?php endwhile; endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="content__faq"><span class="content__faq__question">Puis-je contacter le service de garde pour n’importe quoi&nbsp;?</span>
				<p class="content__faq__paragraph">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.</p>
			</div>
			<div class="content__faq"><span class="content__faq__question">Combien ça coûte&nbsp;?</span>
				<p class="content__faq__paragraph">Si le médecin de garde est éxterieur à la maison médicale, vous devrez le payer. Le Centre de Santé intégré d’Angleur vous remboursera ensuite le montant que vous avez avancé au tarif de la mutualité.</p>
				<p class="content__faq__paragraph">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie.</p>
			</div>
			<div class="content__faq"><span class="content__faq__question">Comment contacter le service de garde&nbsp;?</span>
				<p class="content__faq__paragraph">Pour contacter le service de garde, il faut composer le numéro unique<strong> 1733</strong>.</p>
				<p class="content__faq__paragraph">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie.</p>
			</div>
		</div>
	</section>

</main>

<?php include 'footer.php'; ?>
