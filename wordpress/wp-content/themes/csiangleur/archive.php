<?php
/*
Template Name: archive
*/; ?>
<?php
if(is_page()){
	query_posts([
		'orderby' => 'date',
		'order' => 'DESC',
		'post_type' => 'post',
		'paged' => get_query_var('paged')
	]);
}
?>
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
<body class="no-js archives">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>
<?php include 'bandeau.php'; ?>
<main>
	
	<section class="archive">
		<div class="archive__wrap">
			<h2 class="archive__title">
				Nos dernières fiches pratique
			</h2>
		<?php
		$posts = new WP_Query( ['posts_per_page' => 1, 'post_type' => 'post'] );
		if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();?>
			<a class="article-highlight__wrap" href="<?php echo the_permalink();?>">
				<article class="article-highlight">
				<?php $image = wp_get_attachment_image_src(get_field('article_image')['id'], 'thumb-article-top'); ?>
					<div class="article-highlight__img" style="background-image: url(<?php echo $image['0']; ?>)"></div>
					<span class="article-highlight__cover-image"></span>
					<h3 class="article-highlight__title"><?php echo the_title(); ?></h3>
					<span class="article-highlight__link">Voir la fiche</span>
				</article>
			</a>
		<?php wp_reset_postdata(); ?>
		<?php endwhile; endif; ?>
			<div class="article__wrap">
		  
		  <?php
		  $posts = new WP_Query( ['posts_per_page' => 4, 'offset' => 1, 'post_type' => 'post'] );
		  if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
			  ?>
				<a class="article__link" href="<?php the_permalink(); ?>" title="Aller vers">
					<article class="article">
			  <?php $image = wp_get_attachment_image_src(get_field('article_image')['id'], 'thumb-article-bottom'); ?>
						<div class="article__img" style="background-image: url(<?php echo $image['0']; ?>)"></div>
						<div class="article__content">
							<h3 class="article__title"><?php echo the_title(); ?></h3>
							<span class="article__button">Voir la fiche</span>
						</div>
					</article>
				</a>
		<?php wp_reset_postdata(); ?>
	  <?php endwhile; endif; ?>
			</div>
			<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="2" order="DESC" offset="5"  pause="true" scroll="false" button_label="Voir plus de fiches"]'); ?>
		</div>
	</section>

</main>

<?php include 'footer.php'; ?>
