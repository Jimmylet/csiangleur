(function($){
    $('.equipe__dispo__clic').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('horaire-folded');
    })
})(jQuery);
