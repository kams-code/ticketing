/*
Copied from BBT_BUilder on 26.05.2017.
Last edit: 26.05.2017
*/

(function ($, window, document, undefined) {
    var QueryString = function() {
        // This function is anonymous, is executed immediately and
        // the return value is assigned to QueryString!
        var query_string = {};
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            // If first entry with this name
            if (typeof query_string[pair[0]] === "undefined") {
                query_string[pair[0]] = decodeURIComponent(pair[1]);
                // If second entry with this name
            } else if (typeof query_string[pair[0]] === "string") {
                var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
                query_string[pair[0]] = arr;
                // If third or later entry with this name
            } else {
                query_string[pair[0]].push(decodeURIComponent(pair[1]));
            }
        }
        return query_string;
    }();

    function getCookie(c_name) {
        var i,x,y,ARRcookies=document.cookie.split(";");

        for (i=0;i<ARRcookies.length;i++)
        {
            x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
            y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
            x=x.replace(/^\s+|\s+$/g,"");
            if (x==c_name)
            {
                return unescape(y);
            }
        }
    }

    function isSubstring(obj, match){
        for(var key in obj){
            if(key.indexOf(match)!= -1) return true;
        }
        return false
    }

    function updateURLs() {
        var marketplace = 'themeforest';
        var livedemo = 'TicketLab_WP';

        var match = 'utm_';

        var cookieName = 'webcraft_adwords';
        var cookieName2 = 'bbt_cookie';

        var username = 'bigbangthemes';
        var ref = '?ref=' + username;
        var ref_2 = '&ref=' + username;

        var urlAttachment = '';

        // If there is a 'gclid' param in the URL, store it in a cookie
        // and remove it from the URL
        if (QueryString.gclid) {
            // Create cookie
            var today = new Date();
            var expires = new Date(today.getTime() + 30 * 24 * 60 * 60 * 1000);
            document.cookie = cookieName + '=' + QueryString.gclid + '; expires=' + expires;
        }
        else if(isSubstring(QueryString, match)){
            // Create cookie
            var today = new Date();
            var expires = new Date(today.getTime() + 30 * 24 * 60 * 60 * 1000);
            document.cookie = cookieName2 + '=bbt_utm; expires=' + expires;
        }

        // If a cookie is set, attach its value to the inner URLs
        var c = getCookie(cookieName);

        if(!c){
            c = getCookie(cookieName2);
        }


        if(typeof c != "undefined"){
            if (c == 'bbt_utm') {
                for(var utm in QueryString){
                    if(utm.indexOf(match)!= -1)
                        urlAttachment += '&' + utm + '=' + QueryString[utm];
                }
            }
            else
            {
                urlAttachment += '&gclid=' + c;
            }
        }

        if(urlAttachment.length == 0) return;

        $('a').each(function() {
            var $href = $(this).attr('href');

            if ($href && $href.search(marketplace) != -1 || $href && $href.search(livedemo) != -1) {

                if($href.indexOf('?ref') === -1){
                    if($href.indexOf('?') === -1)
                    {
                        $(this).attr('href', $href + ref + urlAttachment);
                    }
                    else
                    {
                        $(this).attr('href', $href + ref_2 + urlAttachment);
                    }
                }
                else{
                    if($href.indexOf('utm_source') !== -1 || $href.indexOf('utm_medium') !== -1)
                    {

                    }
                    else if($href.indexOf('gclid') !== -1){

                    }
                    else
                    {
                        $(this).attr('href', $href + urlAttachment);
                    }
                }
            }
        });
    }

    $(document).ready(function() {
        updateURLs();
    });

})(jQuery, window, document);