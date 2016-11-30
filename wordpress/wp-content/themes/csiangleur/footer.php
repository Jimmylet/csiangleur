<footer class="footer">
	<div class="footer__wrap">
		<div class="col col1">
			<span class="col__title">
				<abbr title="Centre de Santé Intégré">C.S.I.</abbr> d’Angleur
			</span>
			<span class="col__text"><?php the_field('opt_rue', 'options'); ?></span>
			<span class="col__text"><?php the_field('opt_city', 'options'); ?></span>
			<span class="col__text">TEL&nbsp;: <?php the_field('opt_tel', 'options'); ?></span>
			<a class="col1__button" href="<?php the_permalink('267');?>" title="Vers…">Nous contacter</a></div>
		<div class="col col2"><span class="col__title">Nos horaires</span>
			<?php if( have_rows('opt_horaires', 'option') ): ?>
			<?php while( have_rows('opt_horaires', 'option') ): the_row(); ?>
				<div class="col2__horaires">
					<span class="col__text col__text--week"><?php the_sub_field('jours'); ?></span>
					<span class="col__text col__text--hour"><?php the_sub_field('heures'); ?></span>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<span class="col__text col__text--nohour">En dehors de ces heures ?</span><span class="col__text">Voir le<a class="col__text--nohourlink" href="garde.html" title="Vers…"> service de garde</a>.</span>
		</div>
		<div class="col col3"><span class="col__title">Restez informé sur nos activités</span>
			<?php echo do_shortcode('[mc4wp_form id="25"]'); ?>
			<div class="col3__wrap-links"><a class="col3__fb" href="#" title="Vers"><span>Notre facebook</span></a>
				<div class="col3__sublinks"><a href="<?php the_permalink('259'); ?>" title="Vers">Consultez nos liens utile</a><a href="<?php the_permalink('178'); ?>" title="Vers">Lisez nos fiches pratique</a></div>
			</div>
		</div>
	</div><span class="copyright">©<abbr title="Centre de Santé intégré"> C.S.I.</abbr> Angleur - Tous droits réservés. Design by<a href="http://letecheur.me"> Jimmy Letecheur</a></span>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo $scripts . '/jquery.viewportchecker.js'; ?>"></script>
<script src="<?php echo $scripts . '/compressed.js';?>"></script>
<!--<script src="<?php /*echo $scripts . '/floatLabels.js'; */?>"></script>-->

<?php if (is_page(5)): ?>
	<script>
		!function(a){a(".intro").viewportChecker({classToAdd:"anim-intro",offset:0,repeat:!1}),a(".newsletter").viewportChecker({classToAdd:"anim-titles",offset:120,repeat:!1}),a(".newsletter__animate-content").viewportChecker({classToAdd:"animate-content-newsletter",offset:50,repeat:!1})}(jQuery);
	</script>
<?php endif; ?>


</body>
</html>

