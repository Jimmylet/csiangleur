<header class="header">
	<nav class="menu">
		<h2 class="menu__title">Menu de navigation</h2>
		<div class="menu-button">
			<div class="menu-button__wrap"><span class="menu-button__label">Menu</span>
				<div class="nav-icon"><span></span><span></span><span></span><span></span></div>
			</div>
		</div>
		<div class="flexnav">
			<div class="flexnav__wrap"><a class="flexnav__link" href="<?php echo home_url(); ?>">
					Accueil
				</a>
				<div class="flexnav__dropwrap flexnav__dropwrap1">
					<?php global $post; $thePostID = $post->ID; global $wp_query; $compareID = $wp_query->post->ID ?>
					<span class="flexnav__dropbtn">
						Maison médicale
					</span>
					<div class="flexnav__dropcnt flexnav__dropcnt1">
						<a class="flexnav__dropcnt__link" href="<?php echo the_permalink('33'); ?>">
							Maison médicale au forfait
						</a>
						<a class="flexnav__dropcnt__link" href="<?php echo the_permalink('59'); ?>">
							Services et équipe
						</a>
					</div>
				</div>
				<div class="flexnav__dropwrap flexnav__dropwrap2">
					<span class="flexnav__dropbtn">
						Fonctionnement
					</span>
					<div class="flexnav__dropcnt flexnav__dropcnt2">
						<a class="flexnav__dropcnt__link" href="<?php the_permalink('106'); ?>">
							Inscription
						</a>
						<a class="flexnav__dropcnt__link" href="<?php echo the_permalink('127'); ?>">
							Désinscription
						</a>
					</div>
				</div>
				<a class="flexnav__link" href="<?php the_permalink('155'); ?>">
					Service de garde
				</a>
				<a class="flexnav__link" href="<?php the_permalink('178'); ?>">
					Fiches pratiques
				</a>
				<a class="flexnav__link  <?php echo $thePostID == $compareID ? "active" : "" ;?>" href="<?php the_permalink('259'); ?>">
					Liens
				</a>
				<a class="flexnav__link" href="contact.html">
					Contact
				</a>
			</div>
		</div>
	</nav>
	<a class="menu__logo" href="<?php get_home_url(); ?>"><img src="<?php echo $images . 'svg/logomenu.svg';?>" width="62" height="62" alt=""></a>
</header>
