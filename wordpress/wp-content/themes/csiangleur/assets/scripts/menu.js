(function($){
    $('.flexnav__dropbtn').click(function (e) {
        e.preventDefault();
        $(this).next().toggleClass('open');
        $(this).toggleClass('unfolded');
    })

    $('.menu-button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    })
})(jQuery);

