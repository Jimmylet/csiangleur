<footer class="footer">
	<div class="footer__wrap">
		<div class="col col1"><span class="col__title"><abbr title="Centre de Santé Intégré">C.S.I.</abbr> d’Angleur</span><span class="col__text">48, Rue Vaudrée</span><span class="col__text">4031 Angleur</span><span class="col__text">TEL&nbsp;: 085/21.11.13</span><a class="col1__button" href="#" title="Vers…">Nous contacter</a></div>
		<div class="col col2"><span class="col__title">Nos horaires</span>
			<div class="col2__horaires"><span class="col__text col__text--week">Lundi - Vendredi</span><span class="col__text col__text--hour">9:00 - 19:00</span></div>
			<div class="col2__horaires col2__horaires--2"><span class="col__text">Samedi</span><span class="col__text col__text--hour">9:00 - 12:00</span></div><span class="col__text col__text--nohour">En dehors de ces heures ?</span><span class="col__text">Voir le<a class="col__text--nohourlink" href="garde.html" title="Vers…"> service de garde</a>.</span>
		</div>
		<div class="col col3"><span class="col__title">Restez informé sur nos activités</span>
			<form class="newsletter-form">
				<label for="newsletterfooter">Ecrivez votre adresse email :</label>
				<input class="newsletter-form__input" type="email" name="newsletter" id="newsletterfooter" placeholder="Votre adresse email ici" required>
				<button type="submit">S’inscrire</button>
			</form>
			<div class="col3__wrap-links"><a class="col3__fb" href="#" title="Vers"><span>Notre facebook</span></a>
				<div class="col3__sublinks"><a href="#" title="Vers">Consultez nos liens utile</a><a href="#" title="Vers">Lisez nos fiches pratique</a></div>
			</div>
		</div>
	</div><span class="copyright">©<abbr title="Centre de Santé intégré"> C.S.I.</abbr> Angleur - Tous droits réservés. Design by<a href="http://letecheur.me"> Jimmy Letecheur</a></span>
</footer>

<?php wp_footer(); ?>
<script src="<?php echo $scripts . '/jquery.viewportchecker.js'; ?>"></script>
<script src="<?php echo $scripts . '/compressed.js'; ?>"></script>

<?php if (is_page(5)): ?>
	<script>
		!function(a){a(".intro").viewportChecker({classToAdd:"anim-intro",offset:0,repeat:!1}),a(".newsletter").viewportChecker({classToAdd:"anim-titles",offset:120,repeat:!1}),a(".newsletter__animate-content").viewportChecker({classToAdd:"animate-content-newsletter",offset:50,repeat:!1})}(jQuery);
	</script>
<?php endif; ?>
</body>
</html>

