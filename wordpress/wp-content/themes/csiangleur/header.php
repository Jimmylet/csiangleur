<header class="header">
	<nav class="menu">
		<h2 class="menu__title">Menu de navigation</h2>
		<a href="#" class="menu-button">
			<div class="menu-button__wrap"><span class="menu-button__label">Menu</span>
				<div class="nav-icon"><span></span><span></span><span></span><span></span></div>
			</div>
		</a>
		<div class="flexnav">
		<?php global $post; $thePostID = $post->ID; ?>
			<div class="flexnav__wrap"><a class="flexnav__link <?php echo $thePostID == 5 ? "active" : "" ;?>" href="<?php echo home_url(); ?>">
					Accueil
				</a>
				<div class="flexnav__dropwrap flexnav__dropwrap1">
					<a  href="#" class="flexnav__dropbtn flexnav__dropbtn1 <?php echo $thePostID == 33 || $thePostID == 59 ? "active" : "" ;?>" id="test">
						Maison médicale
					</a>
					<div class="flexnav__dropcnt flexnav__dropcnt1">
						<a class="flexnav__dropcnt__link <?php echo $thePostID == 33 ? "active" : "" ;?>" href="<?php echo the_permalink('33'); ?>">
							Maison médicale au forfait
						</a>
						<a class="flexnav__dropcnt__link <?php echo $thePostID == 59 ? "active" : "" ;?>" href="<?php echo the_permalink('59'); ?>">
							Services et équipe
						</a>
					</div>
				</div>
				<div class="flexnav__dropwrap flexnav__dropwrap2">
					<a href="#" class="flexnav__dropbtn flexnav__dropbtn2 <?php echo $thePostID == 106 || $thePostID == 127 ? "active" : "" ;?>">
						Fonctionnement
					</a>
					<div class="flexnav__dropcnt flexnav__dropcnt2">
						<a class="flexnav__dropcnt__link <?php echo $thePostID == 106 ? "active" : "" ;?>" href="<?php the_permalink('106'); ?>">
							Inscription
						</a>
						<a class="flexnav__dropcnt__link <?php echo $thePostID == 127 ? "active" : "" ;?>" href="<?php echo the_permalink('127'); ?>">
							Désinscription
						</a>
					</div>
				</div>
				<a class="flexnav__link <?php echo $thePostID == 155 ? "active" : "" ;?>" href="<?php the_permalink('155'); ?>">
					Service de garde
				</a>
				<a class="flexnav__link <?php echo $thePostID == 178 ? "active" : "" ;?>" href="<?php the_permalink('178'); ?>">
					Fiches pratiques
				</a>
				<a class="flexnav__link  <?php echo $thePostID == 259 ? "active" : "" ;?>" href="<?php the_permalink('259'); ?>">
					Liens
				</a>
				<a class="flexnav__link <?php echo $thePostID == 267 ? "active" : "" ;?>" href="<?php the_permalink('267'); ?>">
					Contact
				</a>
			</div>
		</div>
	</nav>
	<a class="menu__logo" href="<?php echo home_url(); ?>"><img src="<?php echo $images . 'svg/logomenu.svg';?>" width="62" height="62" alt=""></a>
</header>
