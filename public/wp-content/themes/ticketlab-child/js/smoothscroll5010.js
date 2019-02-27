(function ($){
    // Smooth Scroll to Anchors
    $('.navbar-nav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var speed = 1,
            boost = 1,
            offset = 0,
            target = $(this).attr('href'),
            currPos = parseInt($(window).scrollTop(), 10),
            targetPos = target!="#" && $(target).length==1 ? parseInt($(target).offset().top, 10)-offset : currPos,
            distance = targetPos-currPos;

        boost = Math.abs(distance*boost/1000);

        $("html, body").animate({ scrollTop: targetPos }, parseInt(Math.abs(distance/(speed+boost)), 10));
    });

})(jQuery);