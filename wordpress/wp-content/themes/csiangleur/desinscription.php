<?php
/*
Template Name: Désinscription
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
<body class="no-js fonctionnement-inscription fonctionnement-desinscription">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>
<main>
	
	<section class="desinscription">
		<div class="desinscription__wrap">
			<h2 class="inscription__title">
				<?php the_field('desinscription_title'); ?>
			</h2>
			<span class="inscription__subtitle">
				<?php the_field('desinscription_subtitle'); ?>
			</span>
			<div class="desinscription__intro">
				<?php the_field('desinscription_intro'); ?>
			</div>
			<div class="desinscription__faq">
				<?php
				if( have_rows('inscription_faq') ):
				while ( have_rows('inscription_faq') ) : the_row(); ?>
				<div class="description__faq-wrap">
					<span class="desinscription__faq__title">
						<?php the_sub_field('desinscription_faq_title'); ?>
					</span>
					<?php the_sub_field('desinscription_faq_content'); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>

</main>

<?php include 'footer.php'; ?>
