
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Pingbacks -->
    <link rel="pingback" href="https://bigbangthemes.net/TicketLab_WP/xmlrpc.php">
    				<link rel="shortcut icon" href="http://themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/uploads/2017/02/logo_white-1.png">
		
			<meta name="robots" content="noindex,follow"/>
	
	<title>Client Dashboard - The Next Generation Complete Support System.</title>

<!-- This site is optimized with the Yoast SEO plugin v9.4 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="https://bigbangthemes.net/TicketLab_WP/client-dashboard/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Client Dashboard - The Next Generation Complete Support System." />
<meta property="og:url" content="https://bigbangthemes.net/TicketLab_WP/client-dashboard/" />
<meta property="og:site_name" content="The Next Generation Complete Support System." />
<meta property="article:publisher" content="https://www.facebook.com/BigBangThemes/" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Client Dashboard - The Next Generation Complete Support System." />
<meta name="twitter:site" content="@Big_Bang_Themes" />
<meta name="twitter:creator" content="@Big_Bang_Themes" />
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="The Next Generation Complete Support System. &raquo; Feed" href="https://bigbangthemes.net/TicketLab_WP/feed/" />
<link rel="alternate" type="application/rss+xml" title="The Next Generation Complete Support System. &raquo; Comments Feed" href="https://bigbangthemes.net/TicketLab_WP/comments/feed/" />
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
<link rel='stylesheet' id='ticketlab-style-css-css'  href='../wp-content/themes/ticketlab/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='child-style-css'  href='../wp-content/themes/ticketlab-child/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='studio-fonts-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C600%2C700%7CLato%3A400%2C700%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='ticketlab-style-css'  href='../wp-content/themes/ticketlab-child/style5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='ticketlab-select2.min-css-css'  href='../wp-content/themes/ticketlab/css/select2.min5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='ticketlab-helpers-css-css'  href='../wp-content/themes/ticketlab/css/helpers5010.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='main-bbt-css-css'  href='../wp-content/themes/ticketlab/css/bbt5010.css?ver=4.9.8' type='text/css' media='all' />
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
var bbt_ajax = {"url":"https:\/\/bigbangthemes.net\/TicketLab_WP\/wp-admin\/admin-ajax.php","nonce":"661516e93f"};
bbt_ajax.actions = {knowledgebase:{},
answer:{},
forum:{},
};
/* ]]> */
</script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4' defer='defer'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1' defer='defer'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='https://bigbangthemes.net/TicketLab_WP/wp-content/themes/ticketlab/js/libs/respond.min.js?ver=4.9.8' defer='defer'></script>
<![endif]-->
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
<link rel='shortlink' href='../index8f31.html?p=1099' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embedb00d.json?url=https%3A%2F%2Fbigbangthemes.net%2FTicketLab_WP%2Fblog-style-3%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed1763?url=https%3A%2F%2Fbigbangthemes.net%2FTicketLab_WP%2Fblog-style-3%2F&amp;format=xml" />
<script type="text/javascript">var ajaxurl = '../wp-admin/admin-ajax.html';</script><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://bigbangthemes.net/TicketLab_WP/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	<!-- Facebook Pixel Code -->
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '152323408750380');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=152323408750380&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body data-rsssl=1 class="page-template page-template-template-client-dash page-template-template-client-dash-php page page-id-1766 logged-in admin-bar no-customize-support page-client-dashboard wpb-js-composer js-comp-ver-5.4.5 vc_responsive">

<!-- Top Bar -->
<div class="tl-top-bar">
	<div class="container">
		<div class="column-left">
							<a href="tel:+1800772672" class="header-phone"><i class="fa fa-phone-square"></i>Call our support team: +1800 772 672</a>
					</div>

		<div class="column-right">
			<ul class="top-social clearfix">
									<li>
						<a href="http://facebook.com/bigbangthemes" class="fa fa-facebook">
						</a>
					</li>
									<li>
						<a href="http://twitter.com/big_bang_themes" class="fa fa-twitter">
						</a>
					</li>
									<li>
						<a href="#" class="fa fa-google-plus">
						</a>
					</li>
									<li>
						<a href="http://pinterest.com/bigbangthemes" class="fa fa-pinterest">
						</a>
					</li>
									<li>
						<a href="http://instagram.com/bigbangthemes" class="fa fa-instagram">
						</a>
					</li>
							</ul>

			<div class="dropdown language-selector">
							</div>
		</div>
	</div>
</div>
<!--/ Top Bar -->

@include('layouts.header')
<section>
    <div class="search2 knowledge">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="breadcrumbalign">
                                <ul class="breadcrumb"><li><a href="https://bigbangthemes.net/TicketLab_WP" title="Home">Acceuil</a></li><i class="fa fa-angle-right"></i><li>Client/Agent</li></ul>                            </div>
                        </div>

                                                    <div class="col-sm-5">
                                <form id="agent-dashboard-search" class="header-search-form" role="search" action="https://bigbangthemes.net/TicketLab_WP/">
                                    <input class="form-control" name="s" placeholder="Search Knowledgebase..." type="text">
                                    <input type="hidden" name="post_type" value="knowledgebase" /> <!-- // hidden 'products' value -->
                                    <button type="submit" class="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                                            </div>
                </div>
            </div>
        </div>
    </div>
</section>	<!-- Main Content -->
	@yield('content')
	<!--Main Content End-->
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

})();</script><link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min5243.css?ver=5.4.5' type='text/css' media='all' />
<script type='text/javascript' src='../wp-content/plugins/bbpress/templates/default/js/editor01c4.js?ver=2.5.14-6684' defer='defer'></script>
<script type='text/javascript' src='../wp-content/plugins/bbt_fw_plugin/src/js/bbt-plugin-framework5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/bigbangthemes.net\/TicketLab_WP\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts3c21.js?ver=5.1.1' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab-child/js/smoothscroll5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab-child/js/bbt-child5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/bootstrap.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/snap.svg-min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/owl.carousel5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/hovers5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/jquery.carouFredSel-6.0.4-packed5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/general5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/isotope.pkgd.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/packery-mode.pkgd.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/imagesloaded.pkgd.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/jquery.swipebox5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/jquery.knob.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/ZeroClipboard5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/prism5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/moment.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/bootstrap-datetimepicker.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/select2.full.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/select2.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/bbt_wp5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/bbt_shortcodes5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/js/bbt5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/themes/ticketlab/bbt_framework/static/js/bbt-framework5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min5010.js?ver=4.9.8' defer='defer'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min5243.js?ver=5.4.5' defer='defer'></script>
<script type="text/javascript">
	TableManageButtons.init();
	$(document).on('click','#imgpreview',function(){
		$('#inputimage').trigger('click');
	});
	
	function readURL(input, ids) {
	  if (input.files && input.files[0]) {
		  var reader = new FileReader();
		  
		  reader.onload = function (e) {
			  $('#'+ids).attr('src', e.target.result);
			  var src = $('#'+ids).attr('src');
			  
		  }
		  
		  reader.readAsDataURL(input.files[0]);
	  }
  }

  $(document).on('change','#inputimage',function(){
	  readURL(this,'imgpreview');
  });
  $(document).on('click','.imgpreviewupdate',function(){
	var id = $(this).attr('data-id');
		$('#inputimage'+id).trigger('click');
	});
  $(document).on('change','.inputimage',function(){
	var id = $(this).attr('data-id');
	  readURL(this,'imgpreview'+id);
  });
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var mc4wp_forms_config = [];
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.minb523.js?ver=4.3.3' defer='defer'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='https://bigbangthemes.net/TicketLab_WP/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.3.3' defer='defer'></script>
<![endif]-->

<!-- Start of bigbangthemes Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body data-rsssl=1 onload="document._l();">'),o.close()}("../../../static.zdassets.com/ekr/asset_composer.js","bigbangthemes.zendesk.com");
/*]]>*/</script>
<!-- End of bigbangthemes Zendesk Widget script -->    <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"2377aedf77","applicationID":"64869489","transactionName":"NFEEMBdTX0FZVUBRCw0bJwcRW15cF0JRVRQPVRIBSEFZXUpCV1cABkdLBwRcR1NL","queueTime":0,"applicationTime":341,"atts":"GBYHRl9JTE8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from bigbangthemes.net/TicketLab_WP/blog-style-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Feb 2019 05:39:51 GMT -->
</html>