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
<body class="no-js page-error">
<h1 class="home__title"><?php echo the_title(); ?></h1>
<?php include 'header.php'; ?>

<div class="bandeau">
	<span class="bandeau__title">Erreur 404</span>
	<ol class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
		<li class="breadcrumb__link" itemprop="title">
			<a class="breadcrumb__link__text" itemprop="link" href="<?php echo home_url(); ?>" title="Aller vers l’accueil">Retourner à l’Accueil</a>
		</li>
	</ol>
</div>


<main>
	<section class="content">
		<span class="content__oops">
			Oop's&nbsp;!
		</span>
		<h2 aria-level="2" class="content__title">
			Il y a eu une erreur, mais on ne sait pas laquelle.
		</h2>
		<p>
			La page demandée est introuvable, elle a peut-être été supprimée ou elle n’a jamais existée….
		</p>
		<a class="content__link" href="<?php echo home_url(); ?>">Retourner à l’accueil</a>
	</section>
</main>

<?php include 'footer.php'; ?>
