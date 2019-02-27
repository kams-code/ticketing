(function($) {
    'use strict';
    if (jQuery('.bbt_toggle_option_input').length !== 0) {
        (function($) {
            $.fn.bbtToggleVcOption = function() {
                this.each(function() {
                    var toggle = $(this),
                        input = toggle.find('input'),
                        input_value = 'false';
                    if (input.val() === 'true') {
                        toggle.addClass('toggle_on');
                        input_value = 'true'
                    } else {
                        toggle.addClass('toggle_off');
                        input_value = 'false'
                    }
                    toggle.on('click', function() {
                        if (toggle.hasClass('toggle_on')) {
                            toggle.removeClass('toggle_on').addClass('toggle_off');
                            input.val('false')
                        } else {
                            toggle.removeClass('toggle_off').addClass('toggle_on');
                            input.val('true')
                        }
                    })
                });
                return this
            }
        }(jQuery))
    }
    if ($('.btn-facebook-login').length !== 0) {
        (function() {
            $.ajaxSetup({
                cache: !1
            });
            $.getScript('//connect.facebook.net/en_US/sdk.js', function() {
                $('.btn-facebook-login').on('click', function(e) {
                    FB.init({
                        appId: $('.btn-facebook-login').attr('data-app-id'),
                        version: 'v2.5',
                        status : false, // check login status
                        cookie : false, // enable cookies to allow the server to access the session
                        xfbml  : true  // parse XFBML
                    });
                    FB.getLoginStatus(function(response) {
                        if (response.status === 'connected') {
                            bbt_fbApiCall();
                            return
                        }
                    });
                    FB.login(function(response) {
                        if (response.status === 'connected') {
                            bbt_fbApiCall()
                        } else if (response.status === 'not_authorized') {} else {
                            alert('please login to Facebook')
                        }
                    }, {
                        scope: 'public_profile,email'
                    })
                })
            })
        })();
        var bbt_fbApiCall = function() {
            FB.api('/me?fields=id,name,first_name,last_name,email', function(res) {
                if (res) {
                    console.log(res);
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'bbt_fb_login',
                            fbuser: res
                        }
                    }).done(function(response) {
                        console.log(response);
                        if (typeof response.user_id !== 'undefined') {
                            bbt_afterLoginAction()
                        }
                    }).fail(function(error, message) {
                        console.error(error, message)
                    })
                }
            })
        }
    }
    window.BBT_TwLoginCallback = function(result) {
        console.log(result);
        if (typeof result.user_id !== 'undefined') {
            bbt_afterLoginAction()
        }
    };

    function bbt_afterLoginAction() {
        location.reload()
    }
})(jQuery);