jQuery(document).ready(function() {
		var $ = jQuery,
			$window = $(window),
			$body = $('body'),
			screenWidth = $window.width(),
			screenHeight = $window.height();

		$window.on('resize', function() {
			screenWidth = $window.width();
			screenHeight = $window.height();
		});

		$window.on('load', function() {
			$window.resize();
		});
	$('.agent-topics-form-solve').on('submit', function(){
		alert('This button has been disabled for our demo to help keep tickets organised.');
		return false;
	});
	
    function setCookie(c_name,value,exdays)
    {
        var exdate=new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value=value + ((exdays==null) ? "" : "; expires="+exdate.toUTCString()+"; path=/;");
        document.cookie=c_name + "=" + c_value;
    }
    function getCookie(c_name)
    {
        var i,x,y,ARRcookies=document.cookie.split(";");
        var result = false;
        for (i=0;i<ARRcookies.length;i++)
        {
            x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
            y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
            x=x.replace(/^\s+|\s+$/g,"");
            if (x==c_name)
            {
                result = y;
            }
        }
        return result;
    }

    var hashCode = function(str){
        if (Array.prototype.reduce){
            return str.split("").reduce(function(a,b){a=((a<<5)-a)+b.charCodeAt(0);return a&a},0);
        }
        var hash = 0;
        if (this.length === 0) return hash;
        for (var i = 0; i < str.length; i++) {
            var character  = str.charCodeAt(i);
            hash  = ((hash << 5)-hash)+character;
            hash = hash & hash; // Convert to 32bit integer
        }
        return hash;
    };

    //Voting
    $('.voting-form').each(function() {
        var form = $(this),
            buttons = form.find('.button');

        buttons.on('click', function(event) {
            event.preventDefault();

            var voted_cookie = getCookie('ticketlab_feature_vote');

            //if not pc validated show validation form
            if(!voted_cookie) {
                $('.purchase-code-form').fadeIn(300);
            }
            //if validated pc then vote the feature
            else{
                var feature_id = $(this).parents('form.voting-form').attr('data-feature-id');
                var feature_vote = ($(this).hasClass('usefull')) ? 'usefull' : 'unusefull';

                var feature_cookie = getCookie('ticketlab_' + feature_id);

                if(!feature_cookie){
                    ajax_vote_feature(feature_id, feature_vote, $(this));
                }
            }

            return false;
        });
    });

    //validate purchase code
    $('body').on('click', '#input_pc_btn', function(){
        var pc = $('#input_pc').val();

        if(pc.length !== 0)
        {
            ajax_pc_validate(pc)
        }
    });
	
	var delayMargin = 300;
	
	$window.on('scroll', function() {
		delayMargin = ($window.scrollTop() + screenHeight < 2000) ? 300 : 1000;
		
		$('img.delay-load').each(function() {
			if($(window).scrollTop() + screenHeight >= $(this).offset().top - delayMargin) {
				$(this).attr('src', $(this).attr('data-src'));
			}
		});
	});

    //ajax function to vote
    function ajax_vote_feature(feature_id, feature_vote, $this){
        jQuery.ajax({
            type: "POST",
            url: ajaxurl,
            data: {"action": "ticketlab_ajax_vote_feature", feature_id:feature_id, feature_vote:feature_vote},
            success: function (rsp) {
                var obj = jQuery.parseJSON(rsp);
                //console.log(obj);
                if(obj['saved'] === 'yes')
                {
                    var siblings_buttons = ($this.parents('.buttons').siblings('.buttons.after').length !== 0) ? $this.parents('.buttons').siblings('.buttons.after') : $this.parents('.buttons');
                    siblings_buttons.children('.usefull').children('strong').text(obj['values']['usefull']['percentage'] + '%');
                    siblings_buttons.children('.unusefull').children('strong').text(obj['values']['unusefull']['percentage'] + '%');
                    if(!$this.parents('form.voting-form').hasClass('voted')) $this.parents('form.voting-form').addClass('voted');

                    setCookie('ticketlab_' + feature_id, 'true', '2147483647');
                }
            },
            error: function (rsp) {
                console.log('error');
            }
        });
    }

    //ajax function to validate pc
    function ajax_pc_validate(pc){
        jQuery.ajax({
            type: "POST",
            url: ajaxurl,
            data: {"action": "ticketlab_ajax_pc_validate", pc: pc},
            beforeSend: function( xhr ) {
                jQuery('#input_pc_message').text('');
            },
            success: function (rsp) {
                var obj = jQuery.parseJSON(rsp);
                if(obj['valid'] === 'yes'){
                    $('.purchase-code-form').fadeOut(300);
                    $('#input_pc').attr('value', '');
                    setCookie('ticketlab_feature_vote', 'true', '2147483647');
                }

                jQuery('#input_pc_message').text(obj['message']);

                setTimeout(function(){jQuery('#input_pc_message').text('')}, 2000);
            },
            error: function (rsp) {
                console.log('error');
            }
        });
    }

    

    if($('a[class*="tooltip"]').length){
        $('a[class*="tooltip"]').each(function(){
            var $this = $(this);
            var mmouseoverCounter = 0;
            // $this.hover(function(){
            //     mmouseoverCounter++;
            //     if(mmouseoverCounter >3) {
            //         $(this).addClass('submit_ticket_tooltip_disable');
            //     }
            // });       
        });
    };

    //View Demo Popup
    $('.view-demo-popup-open').on('click', function() {
        $('.view-demo-popup').addClass('active');
    });

    $('.view-demo-popup-close').on('click', function() {
        $('.view-demo-popup').removeClass('active');
    });
    
     // Menu Agent Interface
    $('.tooltip2').append('<span class="tooltip_pulse_dot"></span>\
        <div class="submit_ticket_tooltip">\
            <h4 class="tooltip_title">Support Agent Dashboard</h4> \
            <p class="tooltip_content">TicketLab is the only WordPress theme which offers a <strong>complete support ticketing agent interface.</strong> Manage, assign, prioritize and solve tickets with ease.</p>\
        </div>'
    );

    // Home Submit Ticket Button
    $('.tooltip1').append('<span class="tooltip_pulse_dot"></span>\
        <div class="submit_ticket_tooltip">\
            <h4 class="tooltip_title">Try Out our Ticketing System</h4> \
            <p class="tooltip_content">Take our complete ticketing system out for a test-drive. See how easy it is to create a support ticket. <br/><strong>No additional plugins. <br/>No Additional Costs.</strong></p>\
        </div>'
    );

    // Trello sidebar button
    $('.tooltip3').append('<span class="tooltip_pulse_dot"></span>\
        <div class="submit_ticket_tooltip">\
            <h4 class="tooltip_title">1-click Trello Reporting</h4> \
            <p class="tooltip_content">Make bug fixing easier than ever before. Send full support tickets directly to Trello through just a couple of mouse clicks. </p>\
        </div>'
    );

    // Github sidebar button
    $('.tooltip4').append('<span class="tooltip_pulse_dot"></span>\
        <div class="submit_ticket_tooltip">\
            <h4 class="tooltip_title">Github Bug Reporting</h4> \
            <p class="tooltip_content">Send full support tickets directly to Github through just a couple of mouse clicks. Make bug fixing easier than ever for your developer.</p>\
        </div>'
    );


    // Forum menu button
    $('.tooltip5').append('<span class="tooltip_pulse_dot"></span>\
        <div class="submit_ticket_tooltip">\
            <h4 class="tooltip_title">Refined Forum Structure</h4> \
            <p class="tooltip_content">Encourage people to answer each other’s questions about your product and cut down the time spent on support. <strong>A strong community</strong> will also persuade more leads to convert.</p>\
        </div>'
    );

    // Landing Page Agent Dashboard
    $('.tooltip6').append('<span class="tooltip_pulse_dot"></span>\
        <div class="submit_ticket_tooltip">\
            <h4 class="tooltip_title">Support Agent\'s Dashboard</h4> \
            <p class="tooltip_content">Check out our amazing support agent dashboard. Prioritize, assign and solve tickets on the go with our great interface.</p>\
        </div>'
    );

    

});
