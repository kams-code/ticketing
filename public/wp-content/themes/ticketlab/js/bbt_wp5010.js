(function ($){
    "use strict";
    
    var $window = $(window),
        $body = $('body'),
        screenWidth = $window.width(),
        screenHeight = $window.height(),
        scrollBarWidth = 0;

    $window.on('resize orientationchange', function() {
        screenWidth = $window.width();
        screenHeight = $window.height();
    });


    $(document).ready(function() {
        if($('.js-example-basic-single').length !== 0) {
            $('.js-example-basic-single').select2();

            //insert answer in editor
            $('#ticketlab_macro_replies').on("change", function (e) {
                var optionSelected = $(this).find("option:selected");
                var post_id  = optionSelected.attr('value');

                if(post_id != 0) {
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {action: 'ticketlab_insert_answer', post_id: post_id},
                        beforeSend: function( xhr ) {
                            jQuery('#ticketlab_macro_replies').siblings('.loader_select').addClass('load_select_show');
                        }
                    })
                        .done(function (result) {
                            var obj = JSON.parse(result);

                            //console.log(obj);
                            function setFocus(editor){
                                editor.focus();
                                editor.selection.select(editor.getBody(), true);
                                editor.selection.collapse(false);
                            }

                            if(!obj.error){
                                if (tinymce.activeEditor) {
                                    var editor = tinyMCE.activeEditor;
                                    editor.setContent(editor.getContent() + obj.content);
                                    jQuery('#ticketlab_macro_replies').siblings('.loader_select').removeClass('load_select_show');

                                    setFocus(editor);
                                }
                                else {
                                    tinymce.init({
                                        selector:'textarea.wp-editor-area',
                                        init_instance_callback : function(editor) {
                                            editor.setContent(editor.getContent() + obj.content);
                                            jQuery('#ticketlab_macro_replies').siblings('.loader_select').removeClass('load_select_show');

                                            setFocus(editor);
                                        }
                                    });
                                }
                            }
                            else {
                                console.error(obj.content);
                            }
                        })
                        .fail(function () {
                            console.log("error-ajax");
                        });
                }
            });
        }
    });

    // Sticky Menu
    var navWrapper = $('.landing-page .header'),
        currentScrollPosition = 0;

    $window.on('scroll', function() {
        currentScrollPosition = $window.scrollTop();

        if(currentScrollPosition > 0) {
            navWrapper.addClass('moved');
        } else {
            navWrapper.removeClass('moved');
        }
    });

    window.BBT_TwLoginCallback = function(result){	//callback called from twitter Auth popup from twitterOauth
        console.log(result);
        if(typeof result.user_id !== 'undefined'){
            bbt_afterLoginAction();
        }
    };

    $('#bbp_topic_submit').on('click', function(){
        var form = jQuery(this).parents('#new-post'); var error = false;
        var title = form.find('#bbp_topic_title');
        var text = form.find('#bbp_topic_content');
        var forum = form.find('#bbp_forum_id');

        //if empty title
        if(title.val().length === 0)
        {
            error = true;
            title.addClass('bbt-required');
        }
        else
        {
            title.removeClass('bbt-required');
        }

        //if empty text
        if(text.val().length === 0)
        {
            error = true;
            text.addClass('bbt-required');
        }
        else
        {
            text.removeClass('bbt-required');
        }

        //if no forum selected
        if(forum.find('option:selected').attr('value').length === 0)
        {
            error = true;
            forum.siblings('.select2').addClass('bbt-required');
        }
        else
        {
            forum.siblings('.select2').removeClass('bbt-required');
        }

        if(error) return false;
    });

    $('#agent-login-button').on('click', function(){
        var data_link = $(this).attr('data-link');

        $('#bbt_login_modal #modal-redirect-link').attr('value', data_link);
    });

    //ajax pagination for agent dashboard
    $('body').on('click', '#agent-main-pagination ul li', function(e){
        e.stopImmediatePropagation();
        e.preventDefault();

        var $this = $(this);
        var $page = $this.children('a');
        var template = jQuery(this).parents('#agent-main-pagination').attr('data-template');

        //prevent multiple ajax requests
        $('#agent-main-pagination ul li a').addClass('disabled');

        //if page current clicked do nothing
        if($page.hasClass('current')) return false;

        $('#agent-main-pagination ul li a').removeClass('current');
        $page.addClass('current');

        var page_number = $page.attr('data-page');
        var topic_type = $page.parents('#agent_container').attr('data-display');

        if(page_number.length !== 0 && topic_type.length !== 0){
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {action: 'ticketlab_agent_pagination', page_number:page_number, topic_type:topic_type, template : template},
                beforeSend: function( xhr ) {
                    $('#agent-table-topics').empty();
                    $('#agent-assigned-tpics .agent-loading').show();
                }
            })
                .done(function(result) {
                    var obj = JSON.parse(result);
                    console.log(obj);

                    //hide loading message
                    $('#agent-assigned-tpics .agent-loading').hide();
                    if(obj['content'])
                    {
                        $('#agent-table-topics').empty().prepend(obj['content']);
                    }

                    $('#agent-main-pagination ul li a').removeClass('disabled');
                })
                .fail(function() {
                    console.log("error-ajax");
                });
        }

        return false;
    });


    function bbt_afterLoginAction(){
        location.reload();
    }

    $('.bbt-js-template').each(function() {
        $($(this).html()).insertAfter(this);
    });

    if($('#wpadminbar').length !== 0){
        $('.header_secondary').css('top', '32px')
    }

    if($('ul.navbar-nav').length !== 0){
        $('ul.navbar-nav li.menu-item').each(function(){
            if($(this).hasClass('menu-item-has-children')){
                $(this).addClass('dropdown');
                $(this).children('a:first-child').addClass('dropdown-toggle')
                    .attr('data-toggle', 'dropdown').attr('role', 'button').attr('aria-expanded', 'false')
                    .append('<span class="caret"></span>');
            }
        });
    }

    // LightBox
    $('.swipebox-video').swipebox({
        removeBarsOnMobile: false,
        autoplayVideos: true
    });

    $(".submit_ticket_changetext").click(function () {
        $("#bbt_login_modal h4.modal-title").text("Please Log In to register a support ticket");
    });

    $(".login_changetext").click(function () {
        $("#bbt_login_modal h4.modal-title").text("Please log in now");
    });

    $('.likes').on('click',function(event){
        event.preventDefault();
        var like_box = $(this);

        if(like_box.hasClass('bbt_already_liked_unliked')) return false;
        if(like_box.parents('.kb-feedback').find('.unlikes').hasClass('bbt_already_liked_unliked')) return false;

        var post_id = like_box.data('post');
        var likes = 0;
        if(like_box.hasClass('in-span')){
            likes = parseInt(like_box.find('span').text(),10);
        }else{
            likes = parseInt(like_box.find('counter').text(),10);
        }
        likes++;

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {action: 'bbt_like_post', id:post_id}
        })
            .done(function(result) {
                var obj = JSON.parse(result);

                if(obj['message'] === 'alreadyliked'){
                    return;
                }

                if(obj['message'] === 'liked'){
                    like_box.addClass('bbt_already_liked_unliked');

                    if(like_box.hasClass('in-span')){
                        like_box.find('span').text(obj['likes']);
                    }else{
                        like_box.find('.counter').text(obj['likes']);
                    }
                }
            })
            .fail(function() {
                console.log("error-ajax");
            });
        return false;
    });

    $('.unlikes').on('click',function(event){
        event.preventDefault();
        var unlike_box = $(this);

        if(unlike_box.hasClass('bbt_already_liked_unliked')) return false;
        if(unlike_box.parents('.kb-feedback').find('.likes').hasClass('bbt_already_liked_unliked')) return false;

        var post_id = unlike_box.data('post');
        var unlikes = 0;
        if(unlike_box.hasClass('in-span')){
            unlikes = parseInt(unlike_box.find('span').text(),10);
        }else{
            unlikes = parseInt(unlike_box.text(),10);
        }
        unlikes++;

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {action: 'bbt_unlike_post', id:post_id}
        })
            .done(function(result) {
                var obj = JSON.parse(result);

                if(obj['message'] === 'alreadyunliked'){
                    return;
                }

                if(obj['message'] === 'unliked'){
                    unlike_box.addClass('bbt_already_liked_unliked');

                    if(unlike_box.hasClass('in-span')){
                        unlike_box.find('span').text(obj['unlikes']);
                    }else{
                        unlike_box.find('.counter').html(obj['unlikes']);
                    }
                }
            })
            .fail(function() {
                console.log("error-ajax");
            });
        return false;
    });

    $('.btn_header_login').on('click', function(){
        location.hash = '';
    });

    /**
     * ------------- post trello issue from topic -----------------
     */

    $('#trello_popup .close').on('click', function(){
        var $parent = jQuery(this).parents('#trello_popup');
        $parent.find('.popup_content').show();
        $parent.find('.popup_content_ajax').children('.bbt_members_select').html('');
        $parent.find('.popup_content_ajax').hide();
        $parent.find('.popup_content_load_success').hide();
        $parent.find('.popup_content_load_success').children('h3').html('');
        $parent.find('#bbt_post_trello_issue').removeAttr('data-post-id').removeAttr('data-list-id');
    });

    //submit topic to trello
    $('#bbt_post_trello_issue').on('click', function(){
        var $this = jQuery(this);
        var $parent = $this.parents('.popup_content_ajax');
        var $main_parent = $parent.parents('#trello_popup');
        
        var tlPostID = $this.attr('data-post-id');
        var tlListID = $this.attr('data-list-id');
        var due_date = $parent.find('#bbt_datetimepicker input').val();
        //get selected members
        var members = [];
        $main_parent.find('.bbt_members_select option:selected').each(function(){
            members.push($(this).attr('data-member-id'));
        });
        members = members.length !== 0 ? members.join() : '';

        if(tlPostID.length !== 0 && tlListID.length !== 0)
        {
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {action: 'ticketlab_submit_topic_to_trello', tlPostID : tlPostID, tlListID : tlListID, due_date : due_date, members : members},
                beforeSend: function( xhr ) {
                    $parent.hide();
                    $main_parent.find('.popup_content_load').show();
                }
            })
                .success(function(result) {
                    console.log(result);
                    $main_parent.find('.popup_content_load').hide();
                    $main_parent.find('.popup_content_load_success').show();
                    $main_parent.find('.popup_content_load_success').children('h4').show();
                    $main_parent.find('.popup_content_load_success').children('h3').html(result);
                })
                .error(function() {
                    console.log("error-ajax");
                });
        }
    });

    //display topic info
    $('#trello_popup .bbt_list_id').on('click', function(){
        var $this = jQuery(this);
        var $parent = $this.parents('#trello_popup');
        var postID = $(this).data('post-id');
        var listID = $(this).data('list-id');
        var boardID = $(this).data('board-id');

        //add list id and post id to trello submit button
        $('#bbt_post_trello_issue').attr('data-post-id', postID).attr('data-list-id', listID);

        if(boardID.length !== 0)
        {
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {action: 'ticketlab_load_topic_info', boardID : boardID},
                beforeSend: function( xhr ) {
                    $parent.find('.popup_content').hide();
                    $parent.find('.popup_content_load').show();
                }
            })
                .success(function(result) {
                    //console.log(result);
                    $parent.find('.popup_content_load').hide();
                    $parent.find('.popup_content_ajax').show();
                    $parent.find('.popup_content_ajax').children('.bbt_members_select').html(result);

                    //must call the datepicker js here
                    $('#bbt_datetimepicker').find('.form-control').datetimepicker({
                        //debug: true
                    });
                })
                .error(function() {
                    console.log("error-ajax");
                });
        }

    });

    /**
     * ---------------- end issue -----------------
     */

    /**
     * ------------- post github issue from topic -----------------
     */
    $('#github_popup .close').on('click', function(){
        var $parent = jQuery(this).parents('#github_popup');
        $parent.find('.popup_content').show();
        $parent.find('.popup_content_ajax').children('.bbt_members_select').html('');
        $parent.find('.popup_content_ajax').hide();
        $parent.find('.popup_content_load_success').hide();
        $parent.find('.popup_content_load_success').children('h3').html('');
        $parent.find('#bbt_post_github_issue').removeAttr('data-post-id').removeAttr('data-repo-owner').removeAttr('data-repo-name');
    });

    //submit topic to github
    $('#bbt_post_github_issue').on('click', function(){
        var $this = jQuery(this);
        var $parent = $this.parents('.popup_content_ajax');
        var $main_parent = $parent.parents('#github_popup');

        var post_id = $this.attr('data-post-id');
        var repo_owner = $this.attr('data-repo-owner');
        var repo_name = $this.attr('data-repo-name');
        //get selected members
        var members = [];
        $main_parent.find('.bbt_members_select option:selected').each(function(){
            members.push($(this).attr('data-member-id'));
        });
        members = members.length !== 0 ? members.join() : '';

        //get selected labels
        var labels = [];
        $main_parent.find('.bbt_labels_select option:selected').each(function(){
            labels.push($(this).attr('data-label'));
        });
        labels = labels.length !== 0 ? labels.join() : '';

        if(post_id.length !== 0 && repo_owner.length !== 0 && repo_name.length !== 0)
        {
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {action: 'ticketlab_submit_topic_to_github', post_id : post_id, repo_owner : repo_owner, repo_name : repo_name, members : members, labels : labels},
                beforeSend: function( xhr ) {
                    $parent.hide();
                    $main_parent.find('.popup_content_load').show();
                }
            })
                .success(function(result) {
                    //console.log(result);
                    $main_parent.find('.popup_content_load').hide();
                    $main_parent.find('.popup_content_load_success').show();
                    $main_parent.find('.popup_content_load_success').children('h4').show();
                    $main_parent.find('.popup_content_load_success').children('h3').html(result);
                })
                .error(function() {
                    console.log("error-ajax");
                });
        }
    });

    //display github info
    $('#github_popup .bbt_list_id').on('click', function(){
        var $this = jQuery(this);
        var $parent = $this.parents('#github_popup');
        var postID = $(this).data('post-id');
        var repo_owner = $(this).data('repo-owner');
        var repo_name = $(this).data('repo-name');

        //add list id and post id to trello submit button
        $('#bbt_post_github_issue').attr('data-post-id', postID).attr('data-repo-owner', repo_owner).attr('data-repo-name', repo_name);

        if(repo_owner.length !== 0 && repo_name.length !== 0)
        {
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {action: 'ticketlab_load_github_info', repo_owner : repo_owner , repo_name : repo_name},
                beforeSend: function( xhr ) {
                    $parent.find('.popup_content').hide();
                    $parent.find('.popup_content_load').show();
                }
            })
                .success(function(result) {
                    //console.log(result);
                    $parent.find('.popup_content_load').hide();
                    $parent.find('.popup_content_ajax').show();
                    $parent.find('.popup_content_ajax').find('.bbt_members_select').html(result);
                })
                .error(function() {
                    console.log("error-ajax");
                });
        }

    });

    $('#github_popup .pagination-list li').on('click', function(){
        var page = $(this).data('page');
        $('#github_popup .pagination-list li').removeClass('active');
        $(this).addClass('active');

        $('#github_popup .repos-list').each(function(){
            $('#github_popup .repos-list').addClass('repos-list-hidden');
            $('#github_popup .repos-list-' + page).removeClass('repos-list-hidden');
        });

        return false;
    });
    /**
     * ---------------- end issue -----------------
     */
    
    // Language Selector
	$('.language-selector').each(function() {
		var self = $(this),
			toggle = self.find('.dropdown-toggle'),
			links = self.find('.dropdown-menu').find('a');

		links.on('click', function() {
			var link = $(this);

			toggle.html(link.html());
			links.removeClass('active');
			link.addClass('active');
		});
	});

    // Parallax
    $.fn.parallax = function() {
        var parallax = $(this),
            xPos = parallax.data('parallax-position') ? parallax.data('parallax-position') : 'center',
            speed = parallax.data('parallax-speed') || parallax.data('parallax-speed') == 0 ? parallax.data('parallax-speed') : .1;

        function runParallax() {
            var scrollTop = $window.scrollTop(),
                offsetTop = parallax.offset().top,
                parallaxHeight = parallax.outerHeight();

            if (scrollTop + screenHeight > offsetTop && offsetTop + parallaxHeight > scrollTop) {
                var yPos = parseInt((offsetTop - scrollTop) * speed, 10);

                parallax.css({
                    backgroundPosition: xPos + ' ' + yPos + 'px'
                });
            }
        }

        if (screenWidth > 1000 && !parallax.hasClass('parallax-disabled')) {
            parallax.css({
                backgroundAttachment: 'fixed'
            });
            runParallax();
        }
        $window.on('scroll', function () {
            if (screenWidth > 1000 && !parallax.hasClass('parallax-disabled')) {
                parallax.css({
                    backgroundAttachment: 'fixed'
                });
                runParallax();
            }
        });
        $window.on('resized', function () {
            if (screenWidth > 1000 && !parallax.hasClass('parallax-disabled')) {
                parallax.css({
                    backgroundAttachment: 'fixed'
                });
                runParallax();
            } else {
                parallax.css({
                    backgroundPosition: '50% 0',
                    backgroundAttachment: 'scroll'
                });
            }
        });
    };

    $('.parallax').each(function () {
        $(this).parallax();
    });

    //Fixed Search Bar
    var searchBar = $('.navbar-form');

    if (searchBar.length) {
        var searchBarOffset = searchBar.offset().top;

        $window.on('scroll', function() {
            if ($window.scrollTop() > searchBarOffset) {
                searchBar.addClass('fixed');
            } else {
                searchBar.removeClass('fixed');
            }
        });
    }

    //Trello Popup Tabs
    $('.board-name').on('click', function() {
    	$(this).closest('.board-title').addClass('active').siblings().removeClass('active');
    });

    //Select2
    $('.select2, #new-post select').select2({
        minimumResultsForSearch: Infinity
    });

    //Main Menu
    $('.dropdown-toggle').on('click', function(event) {
    	event.preventDefault();

        var dropdowns = $(this).parents('.dropdown');

        dropdowns.addClass('open');

        setTimeout(function() {
            dropdowns.addClass('open');
        }, 0);
    });

    $('.dropdown-menu').find('a').on('click', function() {
        var dropdowns = $(this).parents('.dropdown');

        dropdowns.addClass('open');

        setTimeout(function() {
            dropdowns.addClass('open');
        }, 0);
    });

	//Dashboard Widget
	(function() {
		var dash = $('.widget_dashboard').clone(),
			title = dash.find('.title'),
			list = dash.find('ul');

		title.html(dash.find('li.active a').html());

		title.on('click', function() {
			list.toggleClass('active');
		});

		dash.insertBefore('#agent-dashboard-search');
	})();

	/*console.log($('#agent-topics-form'));
    $('#agent-topics-form').on('submit', function() {
        console.log('sssss');
        var location = window.location.href;

        window.location.href = location.split('#')[0];
    });*/

	if($('.agent-topics-form').length !== 0)
        $('.agent-topics-form').attr('action', window.location.href.split('#')[0]);

})(jQuery);