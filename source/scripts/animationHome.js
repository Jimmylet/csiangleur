(function($){
    $('.intro').viewportChecker({
        classToAdd: 'anim-intro',
        offset: 0,
        repeat: false
    });

    $('.newsletter').viewportChecker({
        classToAdd: 'anim-titles',
        offset: 120,
        repeat: false
    });

    $('.newsletter__animate-content').viewportChecker({
        classToAdd: 'animate-content-newsletter',
        offset: 50,
        repeat: false
    });
})(jQuery);
