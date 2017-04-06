<?php
/*
Template Name: Page d’accueil
*/; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?php echo bloginfo(); ?></title>
	<meta name="description" content="<?php echo the_field("meta-description"); ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css">
	<?php wp_head(); ?>
</head>
<body class="no-js home">
	<h1 class="home__title"><?php echo bloginfo(); ?></h1>
	<?php include 'header.php'; ?>
	
	
	<div class="intro">
		<div class="intro__logo">
			<svg width="139" height="100" xmlns="http://www.w3.org/2000/svg">
				<defs>
					<lineargradient id="gradIntro1" x1="-53.9%" y1="53.8%" x2="64.3%" y2="53.8%">
						<stop stop-color="#2883D2" offset="0%"></stop>
						<stop stop-color="#46B6A6" offset="100%"></stop>
					</lineargradient>
					<lineargradient id="gradIntro2" x1="5.2%" y1="-5.3%" x2="5.2%" y2="112.9%">
						<stop stop-color="#2883D2" offset="0%"></stop>
						<stop stop-color="#46B6A6" offset="100%"></stop>
					</lineargradient>
				</defs>
				<g fill="none" fill-rule="evenodd">
					<circle fill-opacity=".3" fill="url(#gradIntro1)" cx="69" cy="50" r="50"></circle>
					<circle fill-opacity=".6" fill="url(#gradIntro2)" cx="69.5" cy="50.5" r="42.5"></circle>
					<circle fill="url(#gradIntro2)" cx="70" cy="51" r="35"></circle>
					<g transform="translate(0 46)" fill="#FFF">
						<circle cx="2" cy="17" r="2"></circle>
						<circle cx="137" cy="17" r="2"></circle>
						<path d="M103.4 16h-23c-.5 0-1 .3-1 .8l-1 3-2.2-15.5a1 1 0 0 0-1-.8c-.4 0-1 .3-1 .7l-3 12.4L69.7 9a1 1 0 1 0-2 0l-3 11.2L63 1a1 1 0 1 0-2-.3L55.3 16H1c-.5 0-1 .6-1 1.2s.5 1 1 1h55c.6 0 1-.3 1-.7l4.3-11.7L63 26c0 .6.4 1 1 1 .5 0 1-.3 1-.8l3.5-12.7 1.8 7.8c0 .5.5.8 1 .8s1-.2 1-.7L75 10l2 14.8c0 .5.5.8 1 1 .4 0 1-.4 1-1l2-6.7h56c.5 0 1-.4 1-1 0-.5-.5-1-1-1h-33.6z"></path>
					</g>
					<path d="M61 30.4l8.8-7c.4-.5 1-.5 1.4 0l25.4 20.5c.5.4.5 1 0 1.6a1.2 1.2 0 0 1-1.7 0L71.5 29.4a1.5 1.5 0 0 0-2.2 0L46 45.6a1.2 1.2 0 0 1-1.6 0 1.2 1.2 0 0 1 0-1.7L58 32.7v-4c0-1 .7-1.8 1.5-1.8s1.5.8 1.5 1.8v1.6z" fill="#FFF"></path>
				</g>
			</svg>
		</div><span class="intro__title"><?php echo bloginfo(); ?></span>
		<p class="intro__paragraph"><?php echo the_field("home_description"); ?></p><a class="intro__button" href="<?php the_permalink('106'); ?>">Comment s’inscrire&nbsp;?</a>
	</div>
	
	<main>
		<div class="services"><span class="services__title">Des services de qualités</span>
			<div class="services__wrap">
				<!--<section class="services__item">
					<svg width="75" height="75" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<circle fill="#2670B1" cx="37.5" cy="37.5" r="37.5"></circle>
							<path d="M52.0325253,34.7496928 C54.7109091,21.4999624 44.0610101,15.436163 32.2416162,17.3445016 C20.4208081,19.2499812 20.8648485,26.4773668 20.1690909,29.9266708 C18.7846465,38.5706583 27.5876768,48.2309969 27.5876768,48.2309969 L27.0856566,58.2730031 L41.4193939,58.2730031 L42.5167677,53.6558245 C42.5167677,53.6558245 43.1389899,54.7107712 46.8426263,55.0281129 C50.5476768,55.3454545 50.0965657,50.7740188 50.0965657,50.7740188 C50.0965657,50.7740188 52.5628283,49.6733292 52.5628283,48.8499561 C52.5628283,48.0237241 51.1034343,46.9602006 51.1034343,46.9602006 C51.1034343,46.9602006 52.6717172,47.2446646 53.240202,46.5771034 C53.8044444,45.9095423 52.5472727,43.4980313 52.5472727,43.4980313 C52.5472727,43.4980313 54.4818182,43.448 55.6216162,42.1800627 C56.7614141,40.9135549 52.0325253,37.1640627 52.0325253,34.7496928 L52.0325253,34.7496928 Z" fill="#46B6A6"></path>
							<path id="gear1" d="M31.56,36.5608276 C31.56,36.5608276 31.4793939,35.6659812 31.439798,35.218558 C31.0834343,35.1227837 30.739798,34.9955611 30.410303,34.8468966 C30.02,35.1813918 29.2393939,35.848953 29.2393939,35.848953 C29.2393939,35.848953 29.1064646,35.9232853 29.04,35.9604514 C28.9735354,35.9961881 27.7319192,35.848953 27.7319192,35.848953 L25.5965657,33.3002132 L25.5965657,31.7778307 C25.5965657,31.7778307 26.4181818,31.0745329 26.8282828,30.722884 C26.7391919,30.3812414 26.6854545,30.0338809 26.6614141,29.6750846 C26.1226263,29.4249279 25.0478788,28.9289028 25.0478788,28.9289028 L24.6165657,27.6609655 L24.6660606,27.4536928 L26.0448485,24.4175047 L27.5028283,24.0301191 C27.5028283,24.0301191 28.4305051,24.4589592 28.8929293,24.6719498 C29.1757576,24.4403762 29.4812121,24.2302445 29.8036364,24.0458433 C29.7569697,23.4812038 29.6664646,22.3504953 29.6664646,22.3504953 L30.7327273,21.2741066 L34.0248485,21.0053668 L35.0911111,22.083185 C35.0911111,22.083185 35.1589899,22.9422947 35.1943434,23.3711348 C35.6228283,23.4883511 36.0315152,23.644163 36.420404,23.8342821 C36.7767677,23.5240878 37.4909091,22.906558 37.4909091,22.906558 L38.999798,22.906558 L41.1507071,25.4424326 L41.1507071,26.9633856 C41.1507071,26.9633856 40.2781818,27.7181442 39.8412121,28.096953 C39.9062626,28.4042884 39.940202,28.7216301 39.9557576,29.0418307 C40.5072727,29.3634608 41.6074747,30.006721 41.6074747,30.006721 L41.9907071,31.4805016 L40.3375758,34.370884 L38.879596,34.7582696 C38.879596,34.7582696 38.0240404,34.2579561 37.5955556,34.0092288 C37.3537374,34.199348 37.0949495,34.3680251 36.8262626,34.523837 C36.8771717,35.1013417 36.980404,36.2549216 36.980404,36.2549216 L35.9155556,37.3327398 L32.6276768,37.6357868 L31.56,36.5608276 Z M33.1254545,32.6798245 C34.9608251,32.6798245 36.4486869,31.175838 36.4486869,29.3205768 C36.4486869,27.4653156 34.9608251,25.9613292 33.1254545,25.9613292 C31.290084,25.9613292 29.8022222,27.4653156 29.8022222,29.3205768 C29.8022222,31.175838 31.290084,32.6798245 33.1254545,32.6798245 Z" fill="#EAEAEA"></path>
							<path id="gear2" d="M44.9731313,45.0704451 L44.0383838,45.3191724 C44.0383838,45.3191724 43.489697,44.9975423 43.2139394,44.8388715 C43.0583838,44.9603762 42.8915152,45.0675862 42.7189899,45.1676489 C42.7515152,45.5393103 42.8179798,46.2769154 42.8179798,46.2769154 L42.1363636,46.967348 L40.0278788,47.1617555 L39.3448485,46.4713229 C39.3448485,46.4713229 39.2925253,45.8995361 39.2670707,45.6093542 C39.0379798,45.5478871 38.8187879,45.4649781 38.6080808,45.3706332 C38.3577778,45.5850533 37.8571717,46.0124639 37.8571717,46.0124639 C37.8571717,46.0124639 37.7709091,46.0596364 37.729899,46.0853668 C37.6874747,46.1110972 36.889899,46.0124639 36.889899,46.0124639 L35.5210101,44.3757241 L35.5210101,43.3979687 C35.5210101,43.3979687 36.0470707,42.9476865 36.310101,42.7218307 C36.2535354,42.5045517 36.219596,42.2786959 36.2040404,42.0485517 C35.8575758,41.8898809 35.1688889,41.5696803 35.1688889,41.5696803 L34.8917172,40.7591724 L34.9228283,40.6248025 L35.8066667,38.6792978 L36.7428283,38.4305705 C36.7428283,38.4305705 37.3367677,38.7035987 37.6337374,38.8422571 C37.8147475,38.6935925 38.0113131,38.560652 38.2177778,38.4405768 C38.1894949,38.0789216 38.1315152,37.3513229 38.1315152,37.3513229 L38.8145455,36.6608903 L40.9258586,36.4893542 L41.610303,37.1797868 C41.610303,37.1797868 41.6527273,37.7301317 41.6753535,38.0060188 C41.949697,38.0817806 42.2127273,38.1818433 42.4616162,38.303348 C42.6907071,38.104652 43.1488889,37.7072602 43.1488889,37.7072602 L44.1175758,37.7072602 L45.4991919,39.3368527 L45.4991919,40.3146082 C45.4991919,40.3146082 44.9391919,40.7991975 44.6577778,41.0422069 C44.700202,41.2394734 44.7214141,41.4424577 44.7313131,41.6497304 C45.0848485,41.8570031 45.7919192,42.2672602 45.7919192,42.2672602 L46.0365657,43.2135674 L44.9731313,45.0704451 Z M40.3488889,43.9840502 C41.5258691,43.9840502 42.48,43.0195789 42.48,41.8298433 C42.48,40.6401076 41.5258691,39.6756364 40.3488889,39.6756364 C39.1719087,39.6756364 38.2177778,40.6401076 38.2177778,41.8298433 C38.2177778,43.0195789 39.1719087,43.9840502 40.3488889,43.9840502 Z" fill="#EAEAEA"></path>
						</g>
					</svg>
					<h2 class="services__item__title"><?php /*the_field('home_service1_titre'); */?></h2>
					<p class="services__item__paragraph"><?php /*the_field('home_service1_content'); */?></p>
				</section>-->
				<section class="services__item">
					<svg width="75" height="75" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<circle fill="#2670B1" cx="37.5" cy="37.5" r="37.5"></circle>
							<path d="M47.8951172,16 C43.5005859,16 39.665625,18.7386719 37.5298828,22.8302734 C35.3923828,18.7386719 31.5550781,16 27.1605469,16 C20.4445313,16 15,22.3837891 15,30.2628906 C15,38.1390625 27.0609375,46.5121094 37.5298828,58.7863281 C46.7871094,47.9277344 60.0591797,38.1390625 60.0591797,30.2628906 C60.0591797,22.3837891 54.6128906,16 47.8951172,16 L47.8951172,16 Z" fill="#46B6A6"></path>
							<path id="heartline" stroke="#FFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M14 40.9999792L27.2890137 40.9999792 31.5272881 26 36.97057 48.0081797 41.9228905 26.494272 44.964335 40.0372579 60.2930568 40.0372579"></path>
						</g>
					</svg>
					<h2 class="services__item__title"><?php the_field('home_service2_titre'); ?></h2>
					<p class="services__item__paragraph"><?php the_field('home_service2_content'); ?></p>
				</section>
				<section class="services__item">
					<svg width="75" height="75" viewbox="0 0 75 75" version="1.1" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421">
              <circle id="abcd" cx="37.5" cy="37.5" r="37.5" style="fill:#2670b1"></circle>
						<g>
							<circle id="a1" cx="37.5" cy="37.5" r="37.5" style="fill:#2670b1"></circle>
							<path d="M37.466,15.02c-2.98,0 -5.376,2.378 -5.376,5.335l0,23.203c0,1.382 0.421,2.7 1.23,3.825l0.875,1.221c0.81,1.125 1.231,2.443 1.231,3.825l0,6.459c0,1.125 0.906,2.057 2.072,2.057c1.134,0 2.073,-0.9 2.073,-2.057l0,-6.459c0,-1.382 0.421,-2.7 1.231,-3.825l0.875,-1.221c0.809,-1.125 1.23,-2.443 1.23,-3.825l0,-23.203c-0.065,-2.925 -2.461,-5.335 -5.441,-5.335Z" style="fill:#f1f3f7"></path>
							<path d="M33.158,29.771l0,13.787c0,1.157 0.357,2.25 1.037,3.182l0.874,1.221c0.939,1.286 1.425,2.828 1.425,4.435l0,6.46c0,0.546 0.454,0.964 0.972,0.964c0.55,0 0.972,-0.45 0.972,-0.964l0,-6.46c0,-1.607 0.485,-3.117 1.425,-4.435l0.874,-1.221c0.68,-0.932 1.036,-2.057 1.036,-3.182l0,-13.787l-8.615,0Z" style="fill:#46b6a6"></path>
							<rect id="thermo" x="33.161" y="29.773" width="8.61" height="1.033" style="fill:#46b6a6"></rect>
							<g>
								<rect x="33.206" y="20.376" width="4.3" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="23.476" width="2.6" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="26.576" width="4.3" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="29.776" width="2.6" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="32.876" width="4.3" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="36.076" width="2.6" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="39.176" width="4.3" height="1.1" style="fill:#2670b1"></rect>
								<rect x="33.206" y="42.276" width="2.6" height="1.1" style="fill:#2670b1"></rect>
							</g>
						</g>
            </svg>
					<h2 class="services__item__title"><?php the_field('home_service3_titre'); ?></h2>
					<p class="services__item__paragraph"><?php the_field('home_service3_content'); ?></p>
				</section>
			</div><a class="services__button" href="<?php the_permalink('59');?>" title="Voir tous les services proposé par la maison médicale d’Angleur">Voir tous les services</a>
		</div>
		<section class="medecine">
			<div class="medecine__wrap">
				<div class="medecine__wrapright">
					<h2 class="medecine__title"> Une médecine de qualité accessible à tous.</h2>
					<div class="medecine__fiches">
						<span class="medecine__fiches__title">Dernières fiches pratique&nbsp;:</span>
						<ul class="medecine__fiches__list">
							<?php
							$posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'post'] );
							if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
							?>
							<li class="medecine__fiches__item">
								<a class="medecine__fiches__link" href="<?php the_permalink();?>">
									<?php echo the_title(); ?>
								</a>
							</li>
							<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
				<section class="medecine__horaires">
					<h2 class="medecine__horaires__title"> Vous désirez nous rendre visite ?</h2>
					<ul class="medecine__horaires__list">
						<?php if( have_rows('opt_horaires', 'option') ): ?>
						<?php while( have_rows('opt_horaires', 'option') ): the_row(); ?>
						<li class="medecine__horaires__item">
							<span class="medecine__horaires__day"><?php the_sub_field('jours'); ?></span><span class="medecine__horaires__hour"><?php the_sub_field('heures'); ?></span></li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<p class="medecine__horaires__garde">En dehors de ces heures, vous pouvez bénéficier du<a href="<?php the_permalink('155');?>" title="Vers la page Service de garde"> service de garde</a>.</p><a class="medecine__horaires__button" href="<?php the_permalink('59'); ?>" title="Vers la page Service et Equipe">Voir les horaires par services</a>
				</section>
			</div>
		</section>
		<section class="newsletter">
			<div class="newsletter__wrap">
				<h2 class="newsletter__title">Restez informé sur nos activités</h2><span class="newsletter__subtitle">Inscrivez vous à notre lettre d’informations</span>
				<div class="newsletter__animate-content">
					<ul class="newsletter__details">
						<li class="newsletter__details__item">
							<svg id="news-maison" width="56" height="56" xmlns="http://www.w3.org/2000/svg">
								<defs>
									<lineargradient id="ab" x1="5.19858801%" y1="-5.27272727%" x2="149.769284%" y2="84.5814383%">
										<stop stop-color="#2883D2" offset="0%"></stop>
										<stop stop-color="#46B6A6" offset="100%"></stop>
									</lineargradient>
								</defs>
								<g transform="translate(1 1)" stroke-width="2" fill="none" fill-rule="evenodd">
									<g stroke="#46B6A6">
										<path d="M15.17391304 27v13.6363636c0 .7531149.62290825 1.3636364 1.39130435 1.3636364h6.2608696v-9.5454545h8.347826V42h6.2608696c.7683955 0 1.3913044-.6105215 1.3913044-1.3636364V27M11 27v-1.3636364l15.0870561-12.85828633c.5235078-.44617166 1.3023801-.44617166 1.8258879 0L43 25.6363636V27H11z"></path>
									</g>
									<circle stroke="url(#ab)" cx="27" cy="27" r="27"></circle>
								</g>
							</svg>
							<p>Les infos sur votre maison médicale</p>
						</li>
						<li class="newsletter__details__item">
							<svg width="56" height="56" xmlns="http://www.w3.org/2000/svg">
								<defs>
									<lineargradient id="abc" x1="5.19858801%" y1="-5.27272727%" x2="149.769284%" y2="84.5814383%">
										<stop stop-color="#2883D2" offset="0%"></stop>
										<stop stop-color="#46B6A6" offset="100%"></stop>
									</lineargradient>
								</defs>
								<g transform="translate(1 1)" stroke-width="2" fill="none" fill-rule="evenodd">
									<circle stroke="url(#abc)" cx="27" cy="27" r="27"></circle>
									<g transform="translate(15 11)" stroke="#46B6A6">
										<path d="M25 12.6511628C25 22.3255814 12.5 32 12.5 32S0 22.372093 0 12.6511628C0 5.66411855 5.59644066 0 12.5 0 19.4035593 0 25 5.66411855 25 12.6511628z"></path>
										<ellipse cx="12.5" cy="12.6511628" rx="5.14705882" ry="5.20930233"></ellipse>
									</g>
								</g>
							</svg>
							<p>Les évènements dans votre commune</p>
						</li>
						<li class="newsletter__details__item">
							<svg width="56" height="56" xmlns="http://www.w3.org/2000/svg">
								<defs>
									<lineargradient id="a" x1="5.19858801%" y1="-5.27272727%" x2="149.769284%" y2="84.5814383%">
										<stop stop-color="#2883D2" offset="0%"></stop>
										<stop stop-color="#46B6A6" offset="100%"></stop>
									</lineargradient>
								</defs>
								<g transform="translate(1 1)" stroke-width="2" fill="none" fill-rule="evenodd">
									<circle stroke="url(#a)" cx="27" cy="27" r="27"></circle>
									<g transform="translate(11 13)" stroke="#46B6A6">
										<ellipse cx="3.92857143" cy="24.3571429" rx="3.92857143" ry="3.92857143"></ellipse>
										<ellipse cx="16.5" cy="24.3571429" rx="3.92857143" ry="3.92857143"></ellipse>
										<ellipse cx="16.5" cy="3.92857143" rx="3.92857143" ry="3.92857143"></ellipse>
										<ellipse cx="29.0714286" cy="24.3571429" rx="3.92857143" ry="3.92857143"></ellipse>
										<path d="M3.92857143 20.4285714v-4.7142857c0-1.735752 1.40710515-3.1428571 3.14285714-3.1428571H25.9285714c1.7357535 0 3.1428572 1.4071051 3.1428572 3.1428571v4.7142857M16.5 7.85714286V20.4285714"></path>
									</g>
								</g>
							</svg>
							<p>Les ateliers que nous proposons</p>
						</li>
					</ul>
					<?php echo do_shortcode('[mc4wp_form id="25"]'); ?>
					<span class="newsletter-out">Vous pourrez vous désinscrire à tout moment.</span>
				</div>
			</div>
		</section>
	</main>
	
	<?php include 'footer.php'; ?>

