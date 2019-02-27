(function($){
    'use strict';

    // Shadow DOM Styles
    if($('.shadow-template').length !== 0)
    {
        var templates = $('.shadow-template');

        templates.each(function() {
            var content = $(this.content);

            $('head').append(content);
            //document.head.appendChild(this.content.cloneNode(true));
        });
    }

})(jQuery);
