<?php
/*
Template Name: single article
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
<body class="no-js single-post">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

<?php $image = wp_get_attachment_image_src(get_field('article_image')['id'], 'thumb-single-post'); ?>
<div class="bandeau bandeau-article">
	<div class="article__image" style="background-image: url(<?php echo $image['0']; ?>)"></div>
	<span class="bandeau__gradient"></span>
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
	
	<div class="single__wrap">
		<article class="single">
			<h2 aria-level="2" class="single__title">
				<?php the_field('article_title1'); ?>
			</h2>
			<div class="single__content">
				<?php the_field('article_content1'); ?>
			</div>
			
				<?php if(!empty(get_field('article_causes'))): ?>
				<span class="single__subtitle subtitle-cause">
						<?php the_field('article_causes'); ?>
				</span>
			<?php endif; ?>
		
		<?php if( have_rows('article_cause_content') ):
		while ( have_rows('article_cause_content') ) : the_row(); ?>
			<div class="single__content single-cause">
					<span class="single__cause-title">
						<?php the_sub_field('article_cause_content_title'); ?>
					</span>
					<?php the_sub_field('article_cause_content_text'); ?>
			</div>
		<?php endwhile; endif; ?>
			
			
		<?php if(!empty(get_field('article_symptomes'))): ?>
			<div class="article-symptomes">
				<span class="article-symptomes__title">
					Symtômes
				</span>
				<div class="article-symptomes__content single__content">
					<?php the_field('article_symptomes'); ?>
				</div>
			</div>
		<?php endif; ?>
		
		
		<?php if(!empty(get_field('article_traitement'))): ?>
					<span class="single__subtitle subtitle-traitement">
			  <?php the_field('article_traitement'); ?>
					</span>
		<?php endif; ?>
		
		<?php if( have_rows('article_traitement_content') ):
			while ( have_rows('article_traitement_content') ) : the_row(); ?>
							<div class="single__content single-traitement">
								<span class="single__traitement-title">
					<?php the_sub_field('article_traitement_content_title'); ?>
								</span>
				  <?php the_sub_field('article_traitement_content_text'); ?>
							</div>
			<?php endwhile; endif; ?>
		
		
		<?php if(!empty(get_field('article_conseils'))): ?>
					<span class="single__subtitle subtitle-conseils">
			  <?php the_field('article_conseils'); ?>
					</span>
		<?php endif; ?>
		
		<?php if(!empty(get_field('article_conseils-content'))): ?>
			<div class="single__content">
		  <?php the_field('article_conseils-content'); ?>
			</div>
		<?php endif; ?>
		
		
		<?php if(!empty(get_field('article_liens'))): ?>
					<span class="single__subtitle subtitle-liens">
			  <?php the_field('article_liens'); ?>
					</span>
		<?php endif; ?>
		
		
		<?php if(!empty(get_field('article_liens'))): ?>
		<div class="single__content">
		
			<?php if( have_rows('article_liens_content') ):
			while ( have_rows('article_liens_content') ) : the_row(); ?>
			<div class="links">
				<a href="<?php the_sub_field('article_liens_lien'); ?>" class="links__link">
					<?php the_sub_field('article_liens_name'); ?>
				</a>
				<?php if(!empty(get_sub_field('article_liens_desc'))): ?>
					<?php echo the_sub_field('article_liens_desc'); ?>
				<?php endif; ?>
			</div>
			<?php endwhile; endif; ?>
					
		</div>
		<?php endif; ?>
			
			
		</article>
	</div>

</main>
		
<?php endwhile; endif; ?>
<?php include 'footer.php'; ?>
