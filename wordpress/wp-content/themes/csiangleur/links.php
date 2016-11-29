<?php
/*
Template Name: Liens
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
<body class="no-js liens">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>

<main>
	
	<section class="content">
		<div class="content__wrap">
			<h2 class="content__title">Consultez cette liste de liens utile pour obtenir plus d’informations.</h2>
			<ul class="content__links">
				
				<?php if( have_rows('liens') ):
				while ( have_rows('liens') ) : the_row(); ?>
				<li class="content__link">
					<a href="<?php the_sub_field('lien_link'); ?>">
						<?php the_sub_field('lien_name'); ?>
					</a>
					<?php if(!empty(get_sub_field('lien_content'))): ?>
					<?php echo the_sub_field('lien_content'); ?>
					<?php endif; ?>
				</li>
				<?php endwhile; endif; ?>
				
			</ul>
		</div>
	</section>
	
</main>

<?php include 'footer.php'; ?>
