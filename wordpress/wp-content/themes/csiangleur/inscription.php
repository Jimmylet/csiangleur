<?php
/*
Template Name: Inscription
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
<body class="no-js fonctionnement-inscription">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>
<main>
	
	<section class="inscription">
		<div class="inscription__wrap">
			<h2 class="inscription__title">
				<?php the_field('inscription_title'); ?>
			</h2>
			<span class="inscription__subtitle">
				<?php the_field('inscription_subtitle'); ?>
			</span>
			<ol class="inscription__list">
				
				<?php
				if( have_rows('inscription_list') ):
				while ( have_rows('inscription_list') ) : the_row(); ?>
				<li class="inscription__item">
					<span class="inscription__item__title">
						<?php the_sub_field('inscription_list_titre'); ?>
					</span>
					<?php the_sub_field('inscription_list_content'); ?>
				</li>
				<?php endwhile; endif; ?>
				
			</ol>
		</div>
	</section>
	
	<section class="questions">
		<div class="questions__wrap">
			<h2 class="questions__title">
				<?php the_field('inscription_faq_title'); ?>
			</h2>
			<?php
			if( have_rows('inscription_faq') ):
			while ( have_rows('inscription_faq') ) : the_row(); ?>
			<span class="questions__subtitle">
				<?php the_sub_field('inscription_faq_title'); ?>
			</span>
				<?php the_sub_field('inscription_faq_content'); ?>
			<?php endwhile; endif; ?>
		</div>
	</section>
	
	
</main>

<?php include 'footer.php'; ?>
