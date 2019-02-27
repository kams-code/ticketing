<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<!-- Mirrored from bigbangthemes.net/TicketLab_WP/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 05:30:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Pingbacks -->
    <link rel="pingback" href="xmlrpc.html">
    				<link rel="shortcut icon" href="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2017/02/logo_white-1.png">
		
			<meta name="robots" content="noindex,follow"/>
	
	<title>TicketLab - WordPress support Ticket system and Knowledge Base Theme</title>

<!-- This site is optimized with the Yoast SEO plugin v9.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="The next generation complete support system. Create &amp; manage support tickets with our ultimate knowledge base solution and ticketing system."/>
<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="TicketLab - WordPress support Ticket system and Knowledge Base Theme" />
<meta property="og:description" content="The next generation complete support system. Create &amp; manage support tickets with our ultimate knowledge base solution and ticketing system." />
<meta property="og:url" content="https://bigbangthemes.net/TicketLab_WP/" />
<meta property="og:site_name" content="The Next Generation Complete Support System." />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="The next generation complete support system. Create &amp; manage support tickets with our ultimate knowledge base solution and ticketing system." />
<meta name="twitter:title" content="TicketLab - WordPress support Ticket system and Knowledge Base Theme" />
<meta name="twitter:site" content="@Big_Bang_Themes" />
<meta name="twitter:creator" content="@Big_Bang_Themes" />
<script type='application/ld+json'>{"@context":"https://schema.org","@type":"WebSite","@id":"https://bigbangthemes.net/TicketLab_WP/#website","url":"https://bigbangthemes.net/TicketLab_WP/","name":"The Next Generation Complete Support System.","potentialAction":{"@type":"SearchAction","target":"https://bigbangthemes.net/TicketLab_WP/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="The Next Generation Complete Support System. &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="The Next Generation Complete Support System. &raquo; Comments Feed" href="comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/bigbangthemes.net\/TicketLab_WP\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='ticketlab-style-css-css'  href='wp-content/themes/ticketlab/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='child-style-css'  href='wp-content/themes/ticketlab-child/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='studio-fonts-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C600%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='ticketlab-style-css'  href='wp-content/themes/ticketlab-child/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='ticketlab-select2.min-css-css'  href='wp-content/themes/ticketlab/css/select2.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='ticketlab-helpers-css-css'  href='wp-content/themes/ticketlab/css/helpers5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='main-bbt-css-css'  href='wp-content/themes/ticketlab/css/bbt5010.css?ver=4.9.8' type='text/css' media='all' />
<style id='main-bbt-css-inline-css' type='text/css'>
.page-id-1085 .vc_row .sample-page, .page-id-1094 .vc_row .sample-page { margin-top:0;}
.page-id-1085 .bbp_separator, .page-id-1085 .bbp-love, 
.page-id-1094 .bbp_separator, .page-id-1094 .bbp-love { display: none;}
.sample-page.vc_col-sm-3 { margin-top: 0;}

.header .navbar-brand {
margin-top: -25px;
}
.navbar-brand > img {
width: 68%;
}
.header_secondary .navbar-brand > img { 
  width: 100%;
}
</style>
<script type='text/javascript'>
/* <![CDATA[ */
var bbt_ajax = {"url":"https:\/\/bigbangthemes.net\/TicketLab_WP\/wp-admin\/admin-ajax.php","nonce":"83b2b48ae9"};
bbt_ajax.actions = {knowledgebase:{},
answer:{},
forum:{},
};
/* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4' defer='defer'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1' defer='defer'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://bigbangthemes.net/TicketLab_WP/wp-content/themes/ticketlab/js/libs/respond.min.js?ver=4.9.8' defer='defer'></script>
<![endif]-->
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed26cc.json?url=https%3A%2F%2Fbigbangthemes.net%2FTicketLab_WP%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedcd12?url=https%3A%2F%2Fbigbangthemes.net%2FTicketLab_WP%2F&amp;format=xml" />
<script type="text/javascript">var ajaxurl = 'wp-admin/admin-ajax.html';</script><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://bigbangthemes.net/TicketLab_WP/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1494269899456{margin-bottom: 60px !important;}.vc_custom_1488822939894{margin-top: 40px !important;margin-bottom: 20px !important;}.vc_custom_1496735609796{padding-bottom: 90px !important;background-image: url(themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2017/05/testbgb4c7.jpg?id=1846) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1488823217485{margin-top: 40px !important;margin-bottom: 45px !important;}.vc_custom_1488808062632{margin-top: 0px !important;margin-bottom: 60px !important;}.vc_custom_1488805483732{padding-top: 40px !important;padding-right: 10px !important;padding-bottom: 50px !important;padding-left: 10px !important;}.vc_custom_1488822945766{margin-top: 20px !important;}.vc_custom_1496737569211{margin-top: 0px !important;padding-top: 60px !important;}.vc_custom_1490004238851{margin-top: 0px !important;}.vc_custom_1488807743299{margin-top: 0px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  '../../connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '152323408750380');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=152323408750380&amp;ev=PageView&amp;noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body data-rsssl=1 class="home page-template page-template-template-shortcodes-canvas page-template-template-shortcodes-canvas-php page page-id-83 page-home wpb-js-composer js-comp-ver-5.4.5 vc_responsive">

<!-- Top Bar -->
<div class="tl-top-bar">
	<div class="container">
		<div class="column-left">
							<a href="tel:+1800772672" class="header-phone"><i class="fa fa-phone-square"></i>Call our support team: +1800 772 672</a>
					</div>

	
	</div>
</div>
<!--/ Top Bar -->

<header>
	<div class="header">
		<div class="header-align">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                            <!-- Logo Image -->
<a href="https://bigbangthemes.net/TicketLab_WP" title="The Next Generation Complete Support System. | Home" class="navbar-brand">
            <img class="img-responsive"
                        src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2017/04/LogoAnim7.gif"
            alt="logo">
    </a>
<!-- End of Logo Image -->						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right secondary-nav">
                                    <li id="menu-item-1458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1458"><a href="changelog/index.html">Changelog</a></li>

                                <li id="menu-item-1407" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1407"><a href="#">Home</a>

</li>
<li id="menu-item-1757" class="tooltip2 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1757"><a href="#">Ticket Dash</a>
<ul class="dropdown-menu" role="menu" >
	<li id="menu-item-1758" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1758"><a href="agent-dashboard/index9d99.html?topics=recent_topics">Agent Dashboard</a></li>
	<li id="menu-item-1773" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1773"><a href="client-dashboard/index.html">Client Dashboard</a></li>
</ul>
</li>
<li id="menu-item-1271" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1271"><a href="#">Knowledge Base</a>

</li>
<li id="menu-item-1467" class="tooltip5 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1467"><a href="#">Forum</a>
<ul class="dropdown-menu" role="menu" >
	<li id="menu-item-1471" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1471"><a href="forums/forum/copyright-legal/index.html">Forum</a></li>
	<li id="menu-item-1468" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1468"><a href="forums/topic/how-to-use-your-account-safely-copy/index.html">Solved Ticket</a></li>
	<li id="menu-item-1469" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1469"><a href="forums/topic/how-to-use-your-account-safely/index.html">Pending Ticket</a></li>
</ul>
</li>
<li id="menu-item-1460" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1460"><a href="#">Elements</a>
<ul class="dropdown-menu" role="menu" >
	<li id="menu-item-1457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1457"><a href="shortcodes/index.html">Shortcodes</a></li>
	<li id="menu-item-1297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1297"><a href="contact/index.html">Contact</a></li>
	<li id="menu-item-1289" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-1289"><a href="#">Blog</a>

</li>
</ul>
</li>

                                <li>
                                    <form method="get" role="search" action="https://bigbangthemes.net/TicketLab_WP/">
	                                    <input type="text" name="s" id="search-bar" class="extend-search" placeholder="Search">
                                    </form>
                                </li>
                                <li class="extra_nav_links">
	                                <a href="#" id="search-change" class="inline-block second_menu search-icon">
		                                <i class="fa fa-search"></i>
	                                </a>

	                                		                                <a href="#" class="inline-block second_menu login_changetext" data-toggle="modal" data-target=".bs-example-modal-md">
			                                <i class="fa fa-lock"></i>
		                                </a>
									                                </li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div><!-- /.container nav -->
		</div><!-- /.header-align -->
	</div><!-- /.header -->
</header>

<!-- Page -->


    <section  class=" vc_row  full-height    section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    <template class="shadow-template">
        <style>
            #bg-welcome-379486297 {
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/HomePage-1-1.jpg");
                background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/HomePage-1-1.jpg");
                background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/HomePage-1-1.jpg");
                background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/HomePage-1-1.jpg");
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0.6))), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/HomePage-1-1.jpg");
                background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/HomePage-1-1.jpg");
            }
        </style>
    </template>

<div class=" " >
            <div id="bg-welcome-379486297" class="bg-welcome">
            <div class="welcome">
                <div class="container">
                    <h1>Looking for help?</h1>
                    <h2>Skim through our vast knowledge base for answers to your questions or look through the forums.<br />
Still need help? Open a support ticket now!</h2>

                    

                                                                                                <a href="#" class="btn btn-default btn-submit submit_ticket_changetext tooltip1" data-toggle="modal" data-target=".bs-example-modal-md">
                                Submit Ticket                            </a>
                                                                    
                </div><!-- /.welcome -->
            </div>
        </div>
    </div> </div></div></div></section><section  class=" vc_row  full-height    section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class=" " >
    <div class="content content_box" style="margin-top:-110px;">
        <div class="container">
            <div class="row margin0">
                                                        <div class="col-md-3 padding0">
                        <div class="boxx" style="background-color:#f25022;">
                            <a href="knowledge-base-articles/index.html" style="color:#ffffff;">
                                <div class="wrap">
                                    <div class="wrap-box-elements">
                                        <span class="inline-block">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/box-1-2-1.png" class="img-responsive" alt="" />
                                        </span>
                                        <div>KNOWLEDGE BASE</div>
                                                                                    <div class="hover-box textAlignCenter" style="display: none">
                                                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/hover_line.png" class="img-responsive" alt="" />
                                                <p>Visit our Knowledge base section</p>
                                            </div>
                                                                            </div>
                                </div>
                            </a>
                        </div><!-- /.box-1 -->
                    </div>
                                                        <div class="col-md-3 padding0">
                        <div class="boxx" style="background-color:#7fba00;">
                            <a href="knowledgebase_tax/frequently-asked-questions/index.html" >
                                <div class="wrap">
                                    <div class="wrap-box-elements">
                                        <span class="inline-block">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/box-2-2-1.png" class="img-responsive" alt="" />
                                        </span>
                                        <div>FAQ</div>
                                                                                    <div class="hover-box textAlignCenter" style="display: none">
                                                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/hover_line.png" class="img-responsive" alt="" />
                                                <p>Visit our FAQ section</p>
                                            </div>
                                                                            </div>
                                </div>
                            </a>
                        </div><!-- /.box-1 -->
                    </div>
                                                        <div class="col-md-3 padding0">
                        <div class="boxx" style="background-color:#00a4ef;">
                            <a href="knowledgebase_tax/video-tutorials/index.html" >
                                <div class="wrap">
                                    <div class="wrap-box-elements">
                                        <span class="inline-block">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/box-3-2-1.png" class="img-responsive" alt="" />
                                        </span>
                                        <div>VIDEO TUTORIALS</div>
                                                                                    <div class="hover-box textAlignCenter" style="display: none">
                                                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/hover_line.png" class="img-responsive" alt="" />
                                                <p>Visit our Video Tutorials section</p>
                                            </div>
                                                                            </div>
                                </div>
                            </a>
                        </div><!-- /.box-1 -->
                    </div>
                                                        <div class="col-md-3 padding0">
                        <div class="boxx" style="background-color:#ffb900;">
                            <a href="forum-archive-shortcode/index.html" >
                                <div class="wrap">
                                    <div class="wrap-box-elements">
                                        <span class="inline-block">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/box-4-2-1.png" class="img-responsive" alt="" />
                                        </span>
                                        <div>COMMUNITY FORUM</div>
                                                                                    <div class="hover-box textAlignCenter" style="display: none">
                                                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/hover_line.png" class="img-responsive" alt="" />
                                                <p>Visit our Support section</p>
                                            </div>
                                                                            </div>
                                </div>
                            </a>
                        </div><!-- /.box-1 -->
                    </div>
                            </div>
        </div>
    </div><!-- /.content -->
</div>
</div></div></div></section><section  class="vc_custom_1494269899456      section"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    
    <div class=" help-desk textAlignCenter  helpdesk_type3" >
                    <div class="container">
                                    <h3>Search our Forums</h3>
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                                                    <span class="title">Find support for your most important questions in our community.</span>
                
                <div class="owl-slider">
                                            <div id="owl-demo-helpdesk-3">
                                                                <div class="graphics">
                                        <a href="forums/forum/security-settings/index.html">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab-child/images/child_helpdesk_slider/helpdeskv1_1.png" />
                                        </a>
                                        <h2><a href="forums/forum/security-settings/index.html">Security Settings</a></h2>
                                        <p><p>Looking for help making sure that your website is as secure as possible? Skim through our forums for the best security tips</p>
</p>
                                    </div>
                                                                    <div class="graphics">
                                        <a href="forums/forum/privacy/index.html">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab-child/images/child_helpdesk_slider/helpdeskv1_2.png" />
                                        </a>
                                        <h2><a href="forums/forum/privacy/index.html">Privacy</a></h2>
                                        <p><p>Questions regarding account or website privacy settings should be addressed on this forum. Let us know if you need help.</p>
</p>
                                    </div>
                                                                    <div class="graphics">
                                        <a href="forums/forum/account-settings/index.html">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab-child/images/child_helpdesk_slider/helpdeskv1_3.png" />
                                        </a>
                                        <h2><a href="forums/forum/account-settings/index.html">Account Settings</a></h2>
                                        <p><p>Not sure how to set your account up? Need some more info on what goes where? Feel free to ask away in this forum.</p>
</p>
                                    </div>
                                                                    <div class="graphics">
                                        <a href="forums/forum/billing-info/index.html">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab-child/images/child_helpdesk_slider/helpdeskv1_4.png" />
                                        </a>
                                        <h2><a href="forums/forum/billing-info/index.html">Billing Info</a></h2>
                                        <p><p>All billing-related questions should be addressed in this forum. This way a professional will be able help you out.</p>
</p>
                                    </div>
                                                                    <div class="graphics">
                                        <a href="forums/forum/api-documentation/index.html">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab-child/images/child_helpdesk_slider/helpdeskv1_5.png" />
                                        </a>
                                        <h2><a href="forums/forum/api-documentation/index.html">API Troubleshooting</a></h2>
                                        <p><p>Looking to extend your website&#8217;s functionality using our API? Get answers for your questions from our top notch support</p>
</p>
                                    </div>
                                                                    <div class="graphics">
                                        <a href="forums/forum/copyright-legal/index.html">
                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab-child/images/child_helpdesk_slider/helpdeskv1_6.png" />
                                        </a>
                                        <h2><a href="forums/forum/copyright-legal/index.html">Copyright &#038; Legal</a></h2>
                                        <p><p>Our company&#8217;s lawyers are just a few clicks away. Ask anything about copyrights or licenses and get started right away.</p>
</p>
                                    </div>
                                                        </div>
                                    </div>

                                                        <a style="font-size:px;width:px;" href="forums/index.html" title="All Forums" class="btn btn-default btn-submit">
                        All Forums                    </a>
                
            </div>
            </div><!-- /.help-desk --> 
    </div></div></div></div></div></section><section  class=" vc_row      section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_custom_1488805483732 overview textAlignCenter" >
    <div class="container">
                                    <h3 style="color: #ffffff;">OVERVIEW</h3>
                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_white.png" class="img-responsive" alt="" />
                                        <span class="title">Statistics about our knowledgebase</span>
                            
        <div class="row">
            <div class="col-md-3">
                                    <div class="tl-counter">
                                                <span style="color: #00a4ef;"><em style="color: #ffffff;">166</em></span>
                        <strong style="color: #ffffff;">SUBMITTED TOPICS</strong>
                    </div>
                            </div>
            <div class="col-md-3">
                                    <div class="tl-counter">
                                                <span style="color: #00a4ef;"><em style="color: #ffffff;">1797</em></span>
                        <strong style="color: #ffffff;">REGISTERED USERS</strong>
                    </div>
                            </div>
            <div class="col-md-3">
                                    <div class="tl-counter">
                                                <span style="color: #00a4ef;"><em style="color: #ffffff;">6</em></span>
                        <strong style="color: #ffffff;">ANSWERED TICKETS</strong>
                    </div>
                            </div>
            <div class="col-md-3">
                                                        <div class="tl-counter">
                        <span style="color: #00a4ef;"><em style="color: #ffffff;">274</em></span>
                        <strong style="color: #ffffff;">Replies</strong>
                    </div>
                            </div>
        </div>
    </div>
</div>
        <template class="shadow-template">
            <style>
                #overview_<br />
<b>Notice</b>:  Undefined variable: uniq_id in <b>/var/www/html/bigbangthemes.net/public/TicketLab_WP/wp-content/themes/ticketlab/theme_config/views/vc_shortcodes/bbt_statistics.php</b> on line <b>105</b><br />
 {
                    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/paralax_overview-2-1.png");
                    background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/paralax_overview-2-1.png");
                    background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/paralax_overview-2-1.png");
                    background-image: -ms-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/paralax_overview-2-1.png");
                    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.6)), to(rgba(0, 0, 0, 0.6))), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/paralax_overview-2-1.png");
                    background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/paralax_overview-2-1.png");
                }
            </style>
        </template>
    </div></div></div></section><section  class="vc_custom_1488822939894      section"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        <div class="faqs textAlignCenter vc_custom_1488822945766 " >
                                    <h3>FREQUENTLY ASKED QUESTIONS</h3>
                        <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            <span class="title">Get all your answers on one place</span>
                    
        <div class="tabbable tabs-left row margin0 hidden-sm hidden-xs">
            <ul class="nav nav-tabs col-md-5">
                                                        <li class="active">
                        <a href="#a_1" data-toggle="tab">
                                                            <i class="fa fa-code-fork"></i>
                                                        API                        </a>
                    </li>
                                                        <li >
                        <a href="#a_2" data-toggle="tab">
                                                            <i class="fa fa-ticket"></i>
                                                        Billing                        </a>
                    </li>
                                                        <li >
                        <a href="#a_3" data-toggle="tab">
                                                            <i class="fa fa-institution"></i>
                                                        Copyright &amp; Legal                        </a>
                    </li>
                                                        <li >
                        <a href="#a_4" data-toggle="tab">
                                                            <i class="fa fa-question-circle"></i>
                                                        F.A.Q                        </a>
                    </li>
                            </ul>
            <div class="tab-content col-md-7">
                                                        <div class="tab-pane active" id="a_1">
                                                        <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/api-key-missing-wrong-parameter/index.html">Api Key missing &#8211; wrong parameter</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>40 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/can-i-get-a-refund/index.html">Can I Get A Refund?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>9 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/where-can-i-find-the-api-documentation/index.html">Where can i find the API documentation?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/why-was-my-developer-application-rejected/index.html">Why was my developer application rejected?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/what-technologies-do-you-use/index.html">What technologies do you use?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-many-api-keys-am-i-entitled-to-use/index.html">How many Api keys am i entitled to use?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a last">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-do-i-get-my-api-key/index.html">How do i get my api key?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: API                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                </div>
                                                        <div class="tab-pane " id="a_2">
                                                        <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/upgrade-subscription-plan/index.html">Upgrade subscription plan?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>23 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/developer-license/index.html">Developer license</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/change-subscription-plans/index.html">Change subscription plans</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-can-i-contact-a-sales-rep/index.html">How can i contact a sales rep?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/do-i-need-to-pay-vat/index.html">Do I Need To Pay VAT?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/whats-the-difference-between-annual-monthly-billing/index.html">What’s The Difference Between Billing Types?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a last">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/aliquam-tincidunt-mauris-eu-risus-6/index.html">What’s The Difference Between Annual &#038; Monthly Billing</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Billing                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>7 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                </div>
                                                        <div class="tab-pane " id="a_3">
                                                        <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/transfer-ownership/index.html">Transfer ownership</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>13 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-to-use-your-account-safely/index.html">How to use your account safely</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-do-i-contact-the-legal-dept/index.html">How Do I Contact the Legal Dept?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>3 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/our-content-policy/index.html">Our Content Policy</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/who-owns-the-copyright-on-uploaded-text-images/index.html">Who Owns The Copyright On Images?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>0 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-do-i-file-a-dmca/index.html">How Do I File A DMCA?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a last">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/getting-started-instalation/index.html">Getting started &#8211; Instalation</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: Copyright &amp; Legal                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                </div>
                                                        <div class="tab-pane " id="a_4">
                                                        <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/how-to-edit-the-parameters/index.html">How to edit the parameters</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>13 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/what-is-the-difference-between-developer-license-and-single-license/index.html">What is the difference between license types</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/aliquam-tincidunt-mauris-eu-risus-2/index.html">Do you support multiple theme use?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>6 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/vestibulum-auctor-dapibus-neque/index.html">License agreement</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/ut-aliquam-sollicitudin-leo/index.html">Extended support?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a ">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/integer-vitae-libero-ac-risus-egestas-placerat/index.html">Step by step tutorial for tickets</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                            <div class="text-a last">
                                    <div class="link">
                                                                                    <i class="fa fa-file-text-o"></i>
                                                                                <a href="knowledgebase/aliquam-tincidunt-mauris-eu-risus/index.html">Do i need to purchase Visual Composer ?</a>
                                    </div>
                                    <div class="breadcrumbs">
                                        Category: F.A.Q                                    </div>
                                    <div class="helpful">
                                        <span>Helpful</span>
                                        <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                    </div>
                                </div>
                                                </div>
                
            </div>
        </div><!-- /.tabbable -->

        <!-- Show sm xs -->

        <div class="panel-group hidden-lg hidden-md" id="accordion1944575463" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne19445754631">
                        <div class="panel-title">
                            <a href="#collapseOne19445754631" class="" data-toggle="collapse" data-parent="#accordion1944575463" href="#collapseOne1944575463">
                                                                    <i class="fa fa-code-fork"></i>
                                 API                            </a>
                        </div>
                    </div>
                    <div id="collapseOne19445754631" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                                                                <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/api-key-missing-wrong-parameter/index.html">Api Key missing &#8211; wrong parameter</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>40 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/can-i-get-a-refund/index.html">Can I Get A Refund?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>9 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/where-can-i-find-the-api-documentation/index.html">Where can i find the API documentation?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/why-was-my-developer-application-rejected/index.html">Why was my developer application rejected?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/what-technologies-do-you-use/index.html">What technologies do you use?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-many-api-keys-am-i-entitled-to-use/index.html">How many Api keys am i entitled to use?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a last">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-do-i-get-my-api-key/index.html">How do i get my api key?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            API                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                            </div>
                    </div>
                </div>
                                            <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne19445754632">
                        <div class="panel-title">
                            <a href="#collapseOne19445754632" class="" data-toggle="collapse" data-parent="#accordion1944575463" href="#collapseOne1944575463">
                                                                    <i class="fa fa-ticket"></i>
                                 Billing                            </a>
                        </div>
                    </div>
                    <div id="collapseOne19445754632" class="panel-collapse collapse " role="tabpanel">
                        <div class="panel-body">
                                                                <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/upgrade-subscription-plan/index.html">Upgrade subscription plan?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>23 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/developer-license/index.html">Developer license</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/change-subscription-plans/index.html">Change subscription plans</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-can-i-contact-a-sales-rep/index.html">How can i contact a sales rep?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/do-i-need-to-pay-vat/index.html">Do I Need To Pay VAT?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/whats-the-difference-between-annual-monthly-billing/index.html">What’s The Difference Between Billing Types?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a last">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/aliquam-tincidunt-mauris-eu-risus-6/index.html">What’s The Difference Between Annual &#038; Monthly Billing</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Billing                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>7 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                            </div>
                    </div>
                </div>
                                            <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne19445754633">
                        <div class="panel-title">
                            <a href="#collapseOne19445754633" class="" data-toggle="collapse" data-parent="#accordion1944575463" href="#collapseOne1944575463">
                                                                    <i class="fa fa-institution"></i>
                                 Copyright &amp; Legal                            </a>
                        </div>
                    </div>
                    <div id="collapseOne19445754633" class="panel-collapse collapse " role="tabpanel">
                        <div class="panel-body">
                                                                <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/transfer-ownership/index.html">Transfer ownership</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>13 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-to-use-your-account-safely/index.html">How to use your account safely</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-do-i-contact-the-legal-dept/index.html">How Do I Contact the Legal Dept?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>3 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/our-content-policy/index.html">Our Content Policy</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/who-owns-the-copyright-on-uploaded-text-images/index.html">Who Owns The Copyright On Images?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>0 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-do-i-file-a-dmca/index.html">How Do I File A DMCA?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a last">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/getting-started-instalation/index.html">Getting started &#8211; Instalation</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            Copyright &amp; Legal                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                            </div>
                    </div>
                </div>
                                            <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne19445754634">
                        <div class="panel-title">
                            <a href="#collapseOne19445754634" class="" data-toggle="collapse" data-parent="#accordion1944575463" href="#collapseOne1944575463">
                                                                    <i class="fa fa-question-circle"></i>
                                 F.A.Q                            </a>
                        </div>
                    </div>
                    <div id="collapseOne19445754634" class="panel-collapse collapse " role="tabpanel">
                        <div class="panel-body">
                                                                <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/how-to-edit-the-parameters/index.html">How to edit the parameters</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>13 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/what-is-the-difference-between-developer-license-and-single-license/index.html">What is the difference between license types</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/aliquam-tincidunt-mauris-eu-risus-2/index.html">Do you support multiple theme use?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>6 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/vestibulum-auctor-dapibus-neque/index.html">License agreement</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>5 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/ut-aliquam-sollicitudin-leo/index.html">Extended support?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>1 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a ">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/integer-vitae-libero-ac-risus-egestas-placerat/index.html">Step by step tutorial for tickets</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>4 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                                        <div class="text-a last">
                                        <div class="link">
                                                                                            <i class="fa fa-file-text-o"></i>
                                                                                        <a href="knowledgebase/aliquam-tincidunt-mauris-eu-risus/index.html">Do i need to purchase Visual Composer ?</a>
                                        </div>
                                        <div class="breadcrumbs">
                                            F.A.Q                                        </div>
                                        <div class="helpful">
                                            <span>Helpful</span>
                                            <p>2 <i class="fa fa-thumbs-o-up"></i></p>
                                        </div>
                                    </div>
                                                            </div>
                    </div>
                </div>
                        </div> <!-- /.panel-group -->
    </div>
</div></div></div></div></div></section><section  class="vc_custom_1496735609796 vc_row      section"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    <div class="carousel-testimonials vc_custom_1496737569211 " >
        <div class="aligncenter white-text">
                                                <h3>Testimonials</h3>
                                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_white.png" class="img-responsive" alt="" />
                                    <span class="title">What our clients say about us?</span>
                                    </div>
        <br/>
        <ul id="carousel">
                            <li class="slider-item">
                    <div class="item-inner">
                        <div class="slider-image">
                                                                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/testimonials-image4.png"  alt=""/>
                                                    </div>
                        <div class="slider-content">
                            <span class="slider-user-name">Walter White</span>
                            <span class="slider-user-function">Ceo / Marshall Mathers</span>
                            <p class="slider-user-text">
                                                                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim ad minim veniam, quis nostrud exerci ullamco laboris nisi ut aliquip.                             </p>
                        </div>
                    </div>
                </li>
                            <li class="slider-item">
                    <div class="item-inner">
                        <div class="slider-image">
                                                                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/testimonials-image1.jpg"  alt=""/>
                                                    </div>
                        <div class="slider-content">
                            <span class="slider-user-name">Jesse Pinkman</span>
                            <span class="slider-user-function">CFO / E-design INK</span>
                            <p class="slider-user-text">
                                                                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim ad minim veniam, quis nostrud exerci ullamco laboris nisi ut aliquip.                             </p>
                        </div>
                    </div>
                </li>
                            <li class="slider-item">
                    <div class="item-inner">
                        <div class="slider-image">
                                                                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/testimonials-image2.jpg"  alt=""/>
                                                    </div>
                        <div class="slider-content">
                            <span class="slider-user-name">Saul Goodman</span>
                            <span class="slider-user-function">Marketing Director / Darling LLC</span>
                            <p class="slider-user-text">
                                                                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim ad minim veniam, quis nostrud exerci ullamco laboris nisi ut aliquip.                             </p>
                        </div>
                    </div>
                </li>
                            <li class="slider-item">
                    <div class="item-inner">
                        <div class="slider-image">
                                                                                            <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/testimonials-image3.jpg"  alt=""/>
                                                    </div>
                        <div class="slider-content">
                            <span class="slider-user-name">Mr.Reese</span>
                            <span class="slider-user-function">CEO / Digi FM</span>
                            <p class="slider-user-text">
                                                                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis enim ad minim veniam, quis nostrud exerci ullamco laboris nisi ut aliquip.                             </p>
                        </div>
                    </div>
                </li>
                     
        </ul>
        <div class="carousel-testimonials-navigation">
            <a href="#" class="prev" id="testimonials-navigation-prev"></a>
            <a href="#" class="next" id="testimonials-navigation-next"></a>
        </div>
        <div class="carousel-testimonials-pagination">
            <a href="#" class="selected"><span>1</span></a>
            <a href="#"><span>2</span></a>
            <a href="#"><span>3</span></a>
            <a href="#"><span>4</span></a>
        </div>
    </div>
</div></div></div></section><section  class="vc_custom_1488823217485      section"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="video-tutorials textAlignCenter vc_custom_1490004238851 " >
    <div class="container">
                                    <h3>VIDEO TUTORIALS</h3>
                        <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                            <span class="title">Lorem ipsum dolor sit amet consectetur.</span>
                    
        <div class="tabbable tabs-left row margin0 hidden-sm hidden-xs">
            <div class="tab-content col-md-7 padding0">
                                        <div class="tab-pane active embed-responsive embed-responsive-16by9" id="video_tab_0">
                            <!--<video width="100%" height="240" controls class="embed-responsive-item">
                                <source src="https://localhost/html/ticketlab/include/video.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>-->
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/nHWMlgzKuuc?list=PLXWu0OP8--WQJb01DUSFvGqINdezZra0u&amp;controls=0&amp;showinfo=0"></iframe>                                                    </div>
                                            <div class="tab-pane  embed-responsive embed-responsive-16by9" id="video_tab_1">
                            <!--<video width="100%" height="240" controls class="embed-responsive-item">
                                <source src="https://localhost/html/ticketlab/include/video.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>-->
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/QSNDqlAZq-0?list=PLXWu0OP8--WQJb01DUSFvGqINdezZra0u&amp;controls=0&amp;showinfo=0"></iframe>                                                    </div>
                                            <div class="tab-pane  embed-responsive embed-responsive-16by9" id="video_tab_2">
                            <!--<video width="100%" height="240" controls class="embed-responsive-item">
                                <source src="https://localhost/html/ticketlab/include/video.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>-->
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rHeFM4brIqQ?list=PLXWu0OP8--WQJb01DUSFvGqINdezZra0u&amp;controls=0&amp;showinfo=0"></iframe>                                                    </div>
                                            <div class="tab-pane  embed-responsive embed-responsive-16by9" id="video_tab_3">
                            <!--<video width="100%" height="240" controls class="embed-responsive-item">
                                <source src="https://localhost/html/ticketlab/include/video.mp4" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>-->
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ao9od9YavEA?rel=0&amp;controls=0&amp;showinfo=0"></iframe>                                                    </div>
                                                </div>
            <ul class="nav nav-tabs col-md-5">
                                        <li class="active">
                            <a href="#video_tab_0" data-id="1045" data-toggle="tab" class="hover_video active">
                                <div class="text-a" style="color: #fff">
                                    <div class="link" >
                                        How to rate an item                                    </div>
                                    <div class="breadcrumbs" style="color: #fff">
                                        Video Tutorials                                    </div>
                                    <div class="helpful">
                                        <i class="fa fa-play-circle" style="color: #fff"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                                            <li class="">
                            <a href="#video_tab_1" data-id="1043" data-toggle="tab" class="hover_video ">
                                <div class="text-a" >
                                    <div class="link" >
                                        How to get my purchase code?                                    </div>
                                    <div class="breadcrumbs" >
                                        Video Tutorials                                    </div>
                                    <div class="helpful">
                                        <i class="fa fa-play-circle" ></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                                            <li class="">
                            <a href="#video_tab_2" data-id="1042" data-toggle="tab" class="hover_video ">
                                <div class="text-a" >
                                    <div class="link" >
                                        How to install a wordpress theme                                    </div>
                                    <div class="breadcrumbs" >
                                        Video Tutorials                                    </div>
                                    <div class="helpful">
                                        <i class="fa fa-play-circle" ></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                                            <li class="">
                            <a href="#video_tab_3" data-id="149" data-toggle="tab" class="hover_video ">
                                <div class="text-a" >
                                    <div class="link" >
                                        How to retrieve your password?                                    </div>
                                    <div class="breadcrumbs" >
                                        Security                                    </div>
                                    <div class="helpful">
                                        <i class="fa fa-play-circle" ></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                                                </ul>
        </div><!-- /.tabbable -->

        <!-- Show sm xs -->

        <div class="panel-group hidden-lg hidden-md" id="accordion1517544517" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                        <div class="panel-heading heading_video" role="tab" id="heading0">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1517544517" href="#collapse0">
                                    <div class="text-a">
                                        <div class="link">
                                            How to rate an item                                        </div>
                                        <div class="breadcrumbs">
                                            Video Tutorials                                        </div>
                                        <div class="helpful">
                                            <i class="fa fa-play-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="collapse0" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <div class="embed-responsive embed-responsive-16by9" id="col-f-0">
                                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ao9od9YavEA?rel=0&amp;controls=0&amp;showinfo=0"></iframe>                                                                    </div>
                            </div>
                        </div>
                    </div>
                                    <div class="panel panel-default">
                        <div class="panel-heading heading_video" role="tab" id="heading1">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1517544517" href="#collapse1">
                                    <div class="text-a">
                                        <div class="link">
                                            How to get my purchase code?                                        </div>
                                        <div class="breadcrumbs">
                                            Video Tutorials                                        </div>
                                        <div class="helpful">
                                            <i class="fa fa-play-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <div class="embed-responsive embed-responsive-16by9" id="col-f-1">
                                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ao9od9YavEA?rel=0&amp;controls=0&amp;showinfo=0"></iframe>                                                                    </div>
                            </div>
                        </div>
                    </div>
                                    <div class="panel panel-default">
                        <div class="panel-heading heading_video" role="tab" id="heading2">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1517544517" href="#collapse2">
                                    <div class="text-a">
                                        <div class="link">
                                            How to install a wordpress theme                                        </div>
                                        <div class="breadcrumbs">
                                            Video Tutorials                                        </div>
                                        <div class="helpful">
                                            <i class="fa fa-play-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <div class="embed-responsive embed-responsive-16by9" id="col-f-2">
                                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ao9od9YavEA?rel=0&amp;controls=0&amp;showinfo=0"></iframe>                                                                    </div>
                            </div>
                        </div>
                    </div>
                                    <div class="panel panel-default">
                        <div class="panel-heading heading_video" role="tab" id="heading3">
                            <div class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1517544517" href="#collapse3">
                                    <div class="text-a">
                                        <div class="link">
                                            How to retrieve your password?                                        </div>
                                        <div class="breadcrumbs">
                                            Security                                        </div>
                                        <div class="helpful">
                                            <i class="fa fa-play-circle"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <div class="embed-responsive embed-responsive-16by9" id="col-f-3">
                                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ao9od9YavEA?rel=0&amp;controls=0&amp;showinfo=0"></iframe>                                                                    </div>
                            </div>
                        </div>
                    </div>
                                    </div> <!-- /.panel-group -->
    
        <a href="knowledgebase_tax/video-tutorials/index.html" title="All videos">
            <div class="btn btn-default btn-submit">All videos</div>
        </a>
    </div>
</div>

</div></div></div></div></div></section><section  class="vc_custom_1488808062632      section"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="our-clients textAlignCenter vc_custom_1488807743299 " >
                        <h3>OUR CLIENTS</h3>
                <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line.png" class="img-responsive" alt="" />
                    <span class="title">Who uses TicketLab?</span>
            
            <div id="owl-clients">
                                            <div class="item">
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/client1-2-1.png" style="max-width:100px" alt="" />
                </div>
                                            <div class="item">
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/client2-2-1.png" style="max-width:100px" alt="" />
                </div>
                                            <div class="item">
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/client3-2-1.png" style="max-width:100px" alt="" />
                </div>
                                            <div class="item">
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/client4-2-1.png" style="max-width:100px" alt="" />
                </div>
                                            <div class="item">
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/client5-2-1.png" style="max-width:100px" alt="" />
                </div>
                                            <div class="item">
                    <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2016/08/client6-2-1.png" style="max-width:100px" alt="" />
                </div>
                    </div>
    </div></div></div></div></div></div></section>


        	<!-- Auth -->
	<div id="bbt_login_modal" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
	    <div class="modal-dialog modal-md">
	        <div class="modal-content">
                	            <div class="modal-header" style="">
		            	                    <h4 class="modal-title" id="mySmallModalLabel">Log In Now		                    <a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a>
	                    </h4>
	                
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            <span aria-hidden="true">×</span>
		            </button>
	            </div>
	            <div class="modal-body">
	                <div class="row">
	                    <div class="col-md-12 textAlignCenter">
	                        <p class="title">Login</p>
	                        <img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_blue_xs.png" class="img-responsive" alt="" />

		                    <form action="https://bigbangthemes.net/TicketLab_WP//wp-login.php" method="post" name="loginform">
		                        <div class="login-details">
		                            <div class="login-placeholder">
		                                <input  name="log" id="user" placeholder="Username" type="text">
		                                <i class="fa fa-user"></i>
		                            </div>
		                            <div class="login-placeholder">
		                                <input name="pwd" id="pass" placeholder="Password" type="password">
		                                <i class="fa fa-lock"></i>
		                            </div>
		                            <a href="wp-loginc2b6.html?action=lostpassword">Forgot your login details?</a>
		                            <br/><br/>
		                            <div class="login-button">
			                            <input type="submit" name="wp-submit" id="wp-submit" class="bbt-btn-login" value="LOGIN" />
			                            <input type="hidden" name="testcookie" value="1" />
			                            <input id="modal-redirect-link" type="hidden" name="redirect_to" value="index.html" />
		                            </div>
		                        </div>
		                    </form>
	                    </div>
	                  
	                </div>

		            <div id="bbt_success_message"></div>
	            </div>
	        </div>
	    </div>
	</div>
        <footer>

            
    <div class="social-footer">
        <div class="row margin0">
                            <div class="col-md-5th-1">
                    <a href="http://facebook.com/bigbangthemes">
                        <div class="box">
                            <i class="fa fa-facebook"></i>
                        </div><!-- /.box -->
                    </a>
                </div>
                            <div class="col-md-5th-1">
                    <a href="http://twitter.com/big_bang_themes">
                        <div class="box">
                            <i class="fa fa-twitter"></i>
                        </div><!-- /.box -->
                    </a>
                </div>
                            <div class="col-md-5th-1">
                    <a href="#">
                        <div class="box">
                            <i class="fa fa-google-plus"></i>
                        </div><!-- /.box -->
                    </a>
                </div>
                            <div class="col-md-5th-1">
                    <a href="http://pinterest.com/bigbangthemes">
                        <div class="box">
                            <i class="fa fa-pinterest-p"></i>
                        </div><!-- /.box -->
                    </a>
                </div>
                            <div class="col-md-5th-1">
                    <a href="http://instagram.com/bigbangthemes">
                        <div class="box">
                            <i class="fa fa-instagram"></i>
                        </div><!-- /.box -->
                    </a>
                </div>
                     </div>
    </div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3"><div class="widget-container widget_text"><span class="widget_title">About TicketLab</span><img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_white.png" class="img-responsive" alt="" />			<div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In erat nulla, suscipit nec nunc sed, cotngue feugiat diam. Suspendisse ultricies, ante eu hendrerit per, ipsum risus egestas leo, et auctor augue justo ut arcu.</div>
		</div></div><div class="col-md-3"><div class="widget-container widget_categories"><span class="widget_title">Categories</span><img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_white.png" class="img-responsive" alt="" />		<ul>
	<li class="cat-item cat-item-2"><a href="category/blog/index.html" >Blog</a>
</li>
	<li class="cat-item cat-item-3"><a href="category/lorem-ipsum/index.html" >Lorem Ipsum</a>
</li>
	<li class="cat-item cat-item-4"><a href="category/nunc-anc-erat-gravida/index.html" >Nunc anc erat gravida</a>
</li>
	<li class="cat-item cat-item-5"><a href="category/posts/index.html" >Posts</a>
</li>
	<li class="cat-item cat-item-1"><a href="category/uncategorized/index.html" >Uncategorized</a>
</li>
	<li class="cat-item cat-item-6"><a href="category/vivamus-pretium/index.html" >Vivamus pretium</a>
</li>
		</ul>
</div></div>		<div class="col-md-3"><div class="widget-container widget_recent_entries">		<span class="widget_title">Latest articles</span><img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_white.png" class="img-responsive" alt="" />		<ul>
											<li>
					<a href="knowledgebase-options/index.html">What options come with your knowledge base</a>
									</li>
											<li>
					<a href="manage-your-forums-in-three-simple-ways/index.html">Manage your forums in these three simple ways</a>
									</li>
											<li>
					<a href="how-we-used-bbpress-to-develop-our-ticketing-system/index.html">How we used BBpress to develop our ticketing system</a>
									</li>
											<li>
					<a href="best-use-of-visual-composer-shortcodes/index.html">How to best use the Visual Composer shortcodes</a>
									</li>
											<li>
					<a href="5-best-ways-to-use-video-knowledgebases/index.html">5 best ways to use  video knowledgebases</a>
									</li>
					</ul>
		</div></div><div class="col-md-3"><div class="widget-container widget_mc4wp_form_widget"><span class="widget_title">Newsletter</span><img src="themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/line_white.png" class="img-responsive" alt="" /><script>(function() {
	if (!window.mc4wp) {
		window.mc4wp = {
			listeners: [],
			forms    : {
				on: function (event, callback) {
					window.mc4wp.listeners.push({
						event   : event,
						callback: callback
					});
				}
			}
		}
	}
})();
</script><!-- MailChimp for WordPress v4.3.3 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1062" method="post" data-id="1062" data-name="Newsletter" ><div class="mc4wp-form-fields"><div class="form-group group-search">
		<input class="form-control search-btn" name="EMAIL" placeholder="Your E-mail:" type="email">
	</div><button type="submit" class="btn btn-default btn-search"><i class="fa fa-paper-plane-o"></i></button></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1551232049" /><input type="hidden" name="_mc4wp_form_id" value="1062" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / MailChimp for WordPress Plugin --></div></div>        </div>
    </div>
</div>
            <!-- Copyright -->
                            <div class="copyright-footer">
                    Copyright BigBangThemes © 2017. All Rights Reserved                </div>
            
        </footer>
    <script>(function() {function addEventListener(element,event,handler) {
	if(element.addEventListener) {
		element.addEventListener(event,handler, false);
	} else if(element.attachEvent){
		element.attachEvent('on'+event,handler);
	}
}function maybePrefixUrlField() {
	if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if( urlFields && urlFields.length > 0 ) {
	for( var j=0; j < urlFields.length; j++ ) {
		addEventListener(urlFields[j],'blur',maybePrefixUrlField);
	}
}/* test if browser supports date fields */
var testInput = document.createElement('input');
testInput.setAttribute('type', 'date');
if( testInput.type !== 'date') {

	/* add placeholder & pattern to all date fields */
	var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
	for(var i=0; i<dateFields.length; i++) {
		if(!dateFields[i].placeholder) {
			dateFields[i].placeholder = 'YYYY-MM-DD';
		}
		if(!dateFields[i].pattern) {
			dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
		}
	}
}

})();</script><link rel='stylesheet' id='js_composer_front-css'  href='wp-content/plugins/js_composer/assets/css/js_composer.min5243.css?ver=5.4.5' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/plugins/bbpress/templates/default/js/editor01c4.js?ver=2.5.14-6684' defer='defer'></script>
<script type='text/javascript' src='wp-content/plugins/bbt_fw_plugin/src/js/bbt-plugin-framework5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/bigbangthemes.net\/TicketLab_WP\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab-child/js/smoothscroll5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab-child/js/bbt-child5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab-child/js/adwords-gclid5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/bootstrap.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/snap.svg-min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/owl.carousel5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/hovers5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/jquery.carouFredSel-6.0.4-packed5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/general5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/isotope.pkgd.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/packery-mode.pkgd.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/imagesloaded.pkgd.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/jquery.swipebox5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/jquery.knob.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/ZeroClipboard5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/prism5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/moment.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/bootstrap-datetimepicker.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/select2.full.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/select2.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/bbt_wp5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/bbt_shortcodes5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/js/bbt5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/themes/ticketlab/bbt_framework/static/js/bbt-framework5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min5243.js?ver=5.4.5' defer='defer'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.minb523.js?ver=4.3.3' defer='defer'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='https://bigbangthemes.net/TicketLab_WP/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.3.3' defer='defer'></script>
<![endif]-->

<!-- Start of bigbangthemes Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body data-rsssl=1 onload="document._l();">'),o.close()}("../../static.zdassets.com/ekr/asset_composer.js","bigbangthemes.zendesk.com");
/*]]>*/</script>
<!-- End of bigbangthemes Zendesk Widget script -->    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"2377aedf77","applicationID":"64869489","transactionName":"NFEEMBdTX0FZVUBRCw0bJwcRW15cF0JRVRQPVRIBSEFZXUpCV1cABkdLBwRcR1NL","queueTime":0,"applicationTime":692,"atts":"GBYHRl9JTE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from bigbangthemes.net/TicketLab_WP/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 05:35:39 GMT -->
</html>