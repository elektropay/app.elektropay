<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">    
	
	<script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:22,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&t(4),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:9,2:8,3:6,4:10,5:3,6:23,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:9,2:8,3:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],6:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=t("ee").create(),i=t(1)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:24,ee:"QJf3ax",gos:"7eSDFh"}],7:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:24,ee:"QJf3ax"}],8:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:24,ee:"QJf3ax"}],9:[function(t,e){function n(t,e,n){t[0]=o(t[0],"fn-",null,n)}var r=t("ee").create(),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:24,ee:"QJf3ax"}],10:[function(t,e){function n(){f.inPlace(this,p,"fn-")}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(i){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:6,2:24,ee:"QJf3ax"}],11:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=n(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(e.cat=d.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,o("xhr",[e,r,this.startTime])}}}function n(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=e,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,e){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=n(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{a.emit("internal-error",[n])}catch(r){}}};for(var u=0;c>u;u++)e.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:12,3:10,4:6,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],12:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],13:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:22,2:23,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):void(r.q&&(r.q[t]||(r.q[t]=[]),r.q[t].push(e)))}var r=t("ee").create();e.exports=n,n.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){s(d,function(e,n){e in t||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=window,f=c.document;t(2);var u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},p=e.exports={offset:i(),origin:u,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()])},{1:22,2:13,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],22:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],23:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],24:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:23,ee:"QJf3ax"}]},{},["G9z0Bl",4,11,5]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"7a76808d55",applicationID:"11267302",sa:1,agent:"js-agent.newrelic.com/nr-686.min.js"}
</script>
	
    <meta charset="utf-8">
    <title> <?= $this->navigation->PageTitle(); ?></title>
	    <meta property="fb:app_id" content="">
		<meta name="description" content="Welcome to Everpay&#39;s control panel for real-time payments data on customer transactions.">

    <!-- Mobile viewport optimization h5bp.com/ad -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= branded_include('img/ico/apple-touch-icon-144x144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= branded_include('img/touch/apple-touch-icon-114x114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= branded_include('img/touch/apple-touch-icon-72x72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= branded_include('img/touch/apple-touch-icon-57x57-precomposed.png'); ?>">

	<link href="<?= branded_include('img/logo/favicon.ico'); ?>" rel="shortcut icon" />


	<!-- stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" >
<link href="<?= branded_include('css/ace.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/animate.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/form-design.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/ladda-themeless.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/prism.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/universal.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/brankic.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

  <!-- Additional Styling UI --> 
<link href="<?= branded_include('css/geostyles.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?= branded_include('css/style-shop.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/skeuocard.reset.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/skeuocard.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/demo.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<!-- JQueryUI v1.9.2 -->
<link href="<?=branded_include('js/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css');?>"type="text/css" />
 
 <!-- Chosen UI -->
 <link href="<?=branded_include('js/chosen/chosen.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
  
 <link href="<?= branded_include('css/datepicker.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/morris.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

 <link href="<?= branded_include('css/theme.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/xenon-components.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/components-rounded.css'); ?>" id="style_components" rel="stylesheet" type="text/css">

 <!-- font awesome for icons -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800"rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
<link href="https://everpayinc.com/assets/app/css/budicon/budicon.css" rel="stylesheet" type="text/css" media="screen" />
  
<!-- Datatables -->
<link href="https://everpayinc.com/assets/css/datatable_export_css.css" rel="stylesheet" type="text/css" media="screen" />     
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/pdfmake-0.1.18,dt-1.10.8,af-2.0.0,b-1.0.0,b-colvis-1.0.0,b-html5-1.0.0,b-print-1.0.0,r-1.0.7,se-1.0.0/datatables.min.css"/>-->

 
 <style rel="stylesheet" type="text/css">

        
/**
 * Mixin for retina backgrounds where you can't use a sprite.
 * 
 * - Make sure you have a file@2x.png file additional to your file.png.
 * - The mixin prepends $imgPath, which should be set globally at some point. Default is: "img/"
 *
 * Examples:
 *     li {
 *       @include retina-background(arrow, no-repeat 10px 15px)
 *     }
 *     
 *     a.external {
 *       @include retina-background(external, no-repeat right)
 *     }
 * 
 * @param {String} $file Path to file relative to images folder defined in config.rb and without a file extension
 * @param {Object} [$attr] Additional attributes like position or repetition. E.g. `no-repeat top right`
 * @param {String} [$type] The file type.
 */
/**
 * A mixin to create retina sprites with hover & active states
 *
 * You have to register a pair of sprites using `{@link #retina-sprite-add}` and then you can use this mixin:
 * 
 *     @include retina-sprite-add(icons, "icons/*.png", "icons-retina/*.png");
 *
 *     .my-icon {
 *       @include retina-sprite(icon-name, icons);
 *     }
 * 
 * @param {String} $name
 * @param {String} [$sprite-name]
 * @param {Boolean} [$hover=false]
 * @param {Boolean} [$active=false]
 */
/**
 * @param {String} $name
 * @param {String} $path
 * @param {String} $path2x
 */
@font-face {
  font-family: "icomoon";
  src: url("../assets/fonts/icomoon/icomoon.eot?-j2rqm5");
  src: url("../assets/fonts/icomoon/icomoon.eot?#iefix-j2rqm5") format("embedded-opentype"), url("../assets/fonts/icomoon/icomoon.woff?-j2rqm5") format("woff"), url("../assets/fonts/icomoon/icomoon.ttf?-j2rqm5") format("truetype"), url("../assets/fonts/icomoon/icomoon.svg?-j2rqm5#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}
[class^="icon-"], [class*=" icon-"] {
  font-family: "icomoon";
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.visible-lg {
  @media (max-width: @screen-phone-max) {
    .responsive-invisibility();
  }
  &.visible-xs {
    @media (max-width: @screen-phone-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
    .responsive-invisibility();
  }
  &.visible-sm {
    @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
    .responsive-invisibility();
  }
  &.visible-md {
    @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-large-desktop) {
    .responsive-visibility();
  }
}



.hidden-xs {
  @media (max-width: @screen-phone-max) {
  .responsive-visibility();
  }  
  @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
    .responsive-invisibility();
  }
  @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
    .responsive-invisibility();
  }
  @media (min-width: @screen-large-desktop) {
    .responsive-invisibility();
  }
}
.hidden-sm {
  @media (max-width: @screen-phone-max) {
  .responsive-invisibility();
  }
  &.hidden-xs {
    @media (max-width: @screen-phone-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
    .responsive-visibility();
  }
  @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
    .responsive-invisibility();
  }
  @media (min-width: @screen-large-desktop) {
    .responsive-invisibility();
  }
}
.hidden-md {
  @media (max-width: @screen-phone-max) {  
  .responsive-invisibility();
  }
  &.hidden-xs {
    @media (max-width: @screen-phone-max) {  
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
    .responsive-invisibility();
  }
  &.hidden-sm {
    @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
    .responsive-visibility();
  }
  @media (min-width: @screen-large-desktop) {
    .responsive-invisibility();
  }
}
.hidden-lg {
  @media (max-width: @screen-phone-max) {
  .responsive-invisibility();
  }
  &.hidden-xs {
    @media (max-width: @screen-phone-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
    .responsive-invisibility();
  }
  &.hidden-sm {
    @media (min-width: @screen-tablet) and (max-width: @screen-tablet-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
    .responsive-invisibility();
  }
  &.hidden-md {
    @media (min-width: @screen-desktop) and (max-width: @screen-desktop-max) {
      .responsive-visibility();
    }    
  }
  @media (min-width: @screen-large-desktop) {
    .responsive-visibility();
  }
  
}

.tk-karmina-sans{font-family:"karmina-sans",sans-serif;}
.tk-ubuntu-mono{font-family:"ubuntu-mono",sans-serif;}


body a {
  text-decoration: none;
}
body a:hover {
  color: #45b6af;
}

.morris-hover.morris-default-style {
    z-index: 10!important;
}

.header {
    z-index: 1000;
    background: transparent;
    font-size: 14px;
    position: fixed;
    padding: 10px 0 10px 0;
    top: 0;
    background: rgba(255,255,255,0.8);
    left: 0;
    right: 0;
}

.header {
    line-height: 28px;
    padding-bottom: 4px;
    border-bottom: 0px solid #CCC!important;
}

.header .nav .navbar-nav .navbar-right {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

.header .navbar-nav>li>a {
    padding-top: 5px;
    padding-bottom: 6px;
    text-shadow: none;
    color: #666;
}



.main-search.search-input .form-control {
    box-shadow: none;
    border: 0;
    background: #f0f1f1;
    width: 140px;
    padding-left: 32px!important;
    height: 34px!important;
    margin-top: -6px;
	margin-right: 8px;
}


.main-search.search-input>i {
    padding-left: 1px;
    top: 10px;
}
.search-input>i {
    z-index: 200;
}
.search-input>i {
    position: absolute;
    top: 10px;
    left: 10px;
    opacity: .5;
}

.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}


.chart, .pie, .bars {
  overflow: hidden;
  height: auto!important;
  max-width: 100%!important;
  font-size: 12px;
}


.paginate {

font-size: 14px!important;
letter-spacing: 0.3em;
  float: none;
  text-align: center;
  margin-top: 30px;
  margin-bottom: 20px;
  height: 22px;
  line-height: 22px;
}

#content .menubar .sidebar-toggler i {
  font-size: 37px;
  margin-top: -12px;
}



#content .menubar .btn.pull-right {
  position: relative;
  margin-top: -2px!important;
  font-weight: bold;
  margin-left: 6px;
  letter-spacing: .3px;
}


.center {
text-align: center;
}

div.icon {
	margin-top: 4px;
	float: left;
	width: 31px;
	height: 30px;
	background-image: url(../assets/images/magnify.gif);
	background-repeat: no-repeat;
	-webkit-transition-property: background-position, color;
	-webkit-transition-duration: .2s, .1s;
	-webkit-transition-timing-function: linear, linear;
	-moz-transition-property: background-position, color;
	-moz-transition-duration: .2s, .1s;
	-ms-transition-duration: .2s, .1s;
	-ms-transition-timing-property: linear, linear;
	-o-transition-property: background-position, color;
	-o-transition-duration: .2s, .1s;
	-o-transition-timing-property: linear, linear;
	transition-property: background-position, color;
	transition-duration: .2s, .1s;
	transition-timing-property: linear, linear;
}
div.icon:hover {
	background-position: 0px -30px;
	cursor: pointer;
}

input#search {
	margin-top:-2px;
	width: 126px;
	height: 28px!important;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	outline: none;
	border: 1px solid #ababab;
	font-size: 16px;
	line-height: 25px;
	color: #ababab;
}
input#search:hover, input#search:focus {
	color: #3b3b3b;
	border: 1px solid #36a2d2;
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
}
h4#results-text {
	display: none;
}


ul#results {
    display: none;
    width: 75%;
    margin-left: 25%;
    margin-top: 4px;
    border: 0px solid #ababab;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -webkit-box-shadow: rgba(0, 0, 0, .15) 0 1px 3px;
    /* float: right; */
    -moz-box-shadow: rgba(0,0,0,.15) 0 1px 3px;
    box-shadow: rgba(0, 0, 0, .15) 0 1px 3px;
    z-index: 10000;
}


ul#results li {
	padding: 8px;
	cursor: pointer;
	border-top: 1px solid #cdcdcd;
	transition: background-color .3s ease-in-out;
	-moz-transition: background-color .3s ease-in-out;
	-webkit-transition: background-color .3s ease-in-out;
}
ul#results li:hover {
	background-color: #F7F7F7;
}
ul#results li:first-child {
	border-top: none;
}
ul#results li h3, ul#results li h4 {
	transition: color .3s ease-in-out;
	-moz-transition: color .3s ease-in-out;
	-webkit-transition: color .3s ease-in-out;
	color: #616161;
	line-height: 1.2em;
}
ul#results li:hover h3, ul#results li:hover h4  {
	color: #3b3b3b;
	font-weight: bold;
}

#header_notification_bar{
	margin-top: 8px;
	margin-bottom: 10px;
        margin-left: 10px;
}

.xe-widget.xe-counter.xe-counter-blue .xe-icon i {
  background-color: #05101b!important;
  color: #fff;
}

.dataTables_wrapper thead th {
  border-top: 1px solid #05101b;
  border-bottom: 1px solid #05101b;
  box-shadow: inset 0 1px rgba(255,255,255,0.79);
  padding: 10px 18px 12px 20px;
  text-shadow: 0px 1px 0px #000;
  background: #05101b;
  position: relative;
  color: #fff;
}

.dataTables_wrapper .row:first-child {
  padding-top: 10px;
  padding-bottom: 4px;
  background: #fff;
}

.table>thead>tr {
  color: #fff;
  font-weight: 400;
  background: #05101b; 
}
table.dataTable thead th {
  padding: 10px 18px 15px 18px;
  border-top: 1px solid #05101b;
  font-weight: 500;
  cursor: pointer;
}
.table.table-bordered>thead>tr>th:first-child {
  border-left-color: #05101b;
  background: #05101b;
}

.dataTables_wrapper {
  margin: 20px -20px!important;
}

.center{display:-webkit-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-direction:normal;-webkit-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:stretch;-ms-flex-line-pack:stretch;align-content:stretch;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}

#content .menubar .page-title h4 {
    float: left;
    font-weight: 700;
    position: relative;
    font-size: 19px;
    line-height: 22px;
    top: 4px!important;
    left: -20px;
}

.dashboard-stat.blue-soft .details .number {
  color: white;
  text-align: center!important;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: hidden;
}


tbody {
  margin-top: 15px;
  clear: both;
  overflow: auto;
  position: relative;
  z-index: 2;
  border: 0px solid #dadada;
  border-top: 0px solid #bbb;
  background: #fff;
  padding: 15px;
  font-size: 12px;
  line-height: 12px;
  margin-bottom: 30px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  -ms-border-radius: 6px;
  -o-border-radius: 6px;
  border-radius: 8px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #eee;
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #eee;
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #eee;
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #eee;
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #eee!important;
}

.popover {
  top: -93px!important;
  left: 64.5px!important;
  display: block;
}

.popover-view {
  position: absolute;
  z-index: 10000;
  margin-top: -42px;
  margin-left: -220px;
  padding: 1px;
  font-size: 12px;
  background: rgba(0,0,0,0.45);
  background: -webkit-linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.45));
  background: -moz-linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.45));
  background: -ms-linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.45));
  background: -o-linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.45));
  background: linear-gradient(rgba(0,0,0,0.35),rgba(0,0,0,0.45));
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  -ms-border-radius: 7px;
  -o-border-radius: 7px;
  border-radius: 7px;
  -webkit-box-shadow: 0 4px 13px rgba(0,0,0,0.46);
  -moz-box-shadow: 0 4px 13px rgba(0,0,0,0.46);
  -ms-box-shadow: 0 4px 13px rgba(0,0,0,0.46);
  -o-box-shadow: 0 4px 13px rgba(0,0,0,0.46);
  box-shadow: 0 4px 13px rgba(0,0,0,0.46);
}

.popover-view div.arrow.below {
  background: url("//everpayinc.com/assets/app/img/icons/top-666.png");
  top: -8px;
  left: 72px;
  width: 19px;
  height: 10px;
}

.popover-view div.arrow {
  position: absolute;
  z-index: 20;
}

.popover-view div.inner {
  background: #cad2dd;
  padding: 5px;
  position: relative;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  -ms-border-radius: 6px;
  -o-border-radius: 6px;
  border-radius: 6px;
}

.popover-view div.inner div.gradient {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  height: 49px;
  z-index: 5;
  background: #cad2dd;
  background: -webkit-linear-gradient(#eef0f4,#cad2dd);
  background: -moz-linear-gradient(#eef0f4,#cad2dd);
  background: -ms-linear-gradient(#eef0f4,#cad2dd);
  background: -o-linear-gradient(#eef0f4,#cad2dd);
  background: linear-gradient(#eef0f4,#cad2dd);
  -webkit-box-shadow: inset 0 1px 0 #fff;
  -moz-box-shadow: inset 0 1px 0 #fff;
  -ms-box-shadow: inset 0 1px 0 #fff;
  -o-box-shadow: inset 0 1px 0 #fff;
  box-shadow: inset 0 1px 0 #fff;
  -webkit-border-top-left-radius: 6px;
  -webkit-border-top-right-radius: 6px;
  -moz-border-top-left-radius: 6px;
  -moz-border-top-right-radius: 6px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
}

div.gradient {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  height: 49px;
  z-index: 5;
  background: #cad2dd;
  background: -webkit-linear-gradient(#eef0f4,#cad2dd);
  background: -moz-linear-gradient(#eef0f4,#cad2dd);
  background: -ms-linear-gradient(#eef0f4,#cad2dd);
  background: -o-linear-gradient(#eef0f4,#cad2dd);
  background: linear-gradient(#eef0f4,#cad2dd);
  -webkit-box-shadow: inset 0 1px 0 #fff;
  -moz-box-shadow: inset 0 1px 0 #fff;
  -ms-box-shadow: inset 0 1px 0 #fff;
  -o-box-shadow: inset 0 1px 0 #fff;
  box-shadow: inset 0 1px 0 #fff;
  -webkit-border-top-left-radius: 6px;
  -webkit-border-top-right-radius: 6px;
  -moz-border-top-left-radius: 6px;
  -moz-border-top-right-radius: 6px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
}

div.filter-view {
  width: 250px;
}

.popover-view div.header div.buttons a.left {
  left: 0;
}

.popover-view div.header div.buttons a.grey {
  background: #bac2d1;
  background: #bac2d1;
  background: -webkit-linear-gradient(#d6dae3,#bac2d1);
  background: -moz-linear-gradient(#d6dae3,#bac2d1);
  background: -ms-linear-gradient(#d6dae3,#bac2d1);
  background: -o-linear-gradient(#d6dae3,#bac2d1);
  background: linear-gradient(#d6dae3,#bac2d1);
  border-color: #a0a9b8;
  color: #475b6f;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}

.popover-view div.header div.buttons a {
  font-family: arial;
  position: absolute;
  display: block;
  height: 15px;
  padding: 6px 8px 4px;
  font-size: 11px;
  font-weight: bold;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  border: 1px solid #000;
}

.popover-view div.header div.buttons a.right {
  right: 0;
}

.popover-view div.header div.buttons a.blue {
  background: #3c79c4;
  background: #3c79c4;
  background: -webkit-linear-gradient(#5f9ce8,#3c79c4);
  background: -moz-linear-gradient(#5f9ce8,#3c79c4);
  background: -ms-linear-gradient(#5f9ce8,#3c79c4);
  background: -o-linear-gradient(#5f9ce8,#3c79c4);
  background: linear-gradient(#5f9ce8,#3c79c4);
  border-color: #2d5f9e;
  color: #fff;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
}

.popover-view div.header div.buttons a {
  font-family: arial;
  position: absolute;
  display: block;
  height: 15px;
  padding: 6px 8px 4px;
  font-size: 11px;
  font-weight: bold;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  border: 1px solid #000;
}


.popover-view div.header {
  position: relative;
  z-index: 30;
}

.popover-view div.header h2 {
  color: #475b6f;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  padding: 7px 0 9px;
margin-top:1px!important;
margin-bottom:1px!important;
  text-shadow: 0 1px 0 rgba(255,255,255,0.8);
}

.popover-view div.header div.buttons {
  top: 0;
  position: absolute;
  width: 100%;
  -webkit-text-stroke: 1px transparent;
}


.popover-view div.inner div.inner-box {
  background: #fff;
  border: 1px solid #8a95a5;
  z-index: 10;
  position: relative;
  min-height: 30px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.28);
  -moz-box-shadow: inset 0 0 2px rgba(0,0,0,0.28);
  -ms-box-shadow: inset 0 0 2px rgba(0,0,0,0.28);
  -o-box-shadow: inset 0 0 2px rgba(0,0,0,0.28);
  box-shadow: inset 0 0 2px rgba(0,0,0,0.28);
}

div.filter-view div.row {
  position: relative;
  overflow: hidden;
}

div.filter-view div.row label {
  position: relative;
  z-index: 10;
  display: block;
  border-bottom: 1px solid #eceff5;
  padding: 10px;
}

div.filter-view div.row label input {
  margin-right: 4px;
  vertical-align: middle;
}

div.filter-view div.row label span {
  font-weight: bold;
  font-size: 12px;
  color: #444;
  text-shadow: 0 1px 0 #fff;
}


div.buttons a.grey {
  background: #bac2d1;
  background: #bac2d1;
  background: -webkit-linear-gradient(#d6dae3,#bac2d1);
  background: -moz-linear-gradient(#d6dae3,#bac2d1);
  background: -ms-linear-gradient(#d6dae3,#bac2d1);
  background: -o-linear-gradient(#d6dae3,#bac2d1);
  background: linear-gradient(#d6dae3,#bac2d1);
  border-color: #a0a9b8;
  color: #475b6f;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}
div.buttons a {
  font-family: arial;
  position: absolute;
  display: block;
  height: 15px;
  padding: 6px 8px 4px;
  font-size: 11px;
  font-weight: bold;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  border: 1px solid #000;
}

div.buttons a.grey {
  background: #bac2d1;
  background: #bac2d1;
  background: -webkit-linear-gradient(#d6dae3,#bac2d1);
  background: -moz-linear-gradient(#d6dae3,#bac2d1);
  background: -ms-linear-gradient(#d6dae3,#bac2d1);
  background: -o-linear-gradient(#d6dae3,#bac2d1);
  background: linear-gradient(#d6dae3,#bac2d1);
  border-color: #a0a9b8;
  color: #475b6f;
  text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}

div.buttons a {
  font-family: arial;
  position: absolute;
  display: block;
  height: 15px;
  padding: 6px 8px 4px;
  font-size: 11px;
  font-weight: bold;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -ms-border-radius: 3px;
  -o-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.06),0 1px 0 rgba(255,255,255,0.3);
  border: 1px solid #000;
}


div.buttons a.left {
  left: 0;
}

div.buttons a.right {
  right: 0;
}



.filter {
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  padding-top: 10px;
  padding-left: 5px;
  padding-right: 5px;
  padding-bottom: 10px;
  height: 35px;
  border-bottom: 0px solid rgb(5, 16, 27);
  background: transparent!important;
  -webkit-box-shadow: inset 0 1px 0 #fff;
  -moz-box-shadow: inset 0 1px 0 #fff;
  -ms-box-shadow: inset 0 1px 0 #fff;
  -o-box-shadow: inset 0 1px 0 #fff;
  box-shadow: inset 0 1px 0 #fff;
  margin-bottom: 10px;
  margin-top: 2px;
}

.filter .separator {
  width: 1px;
  height: 12px;
  background: rgba(0,0,0,0.1);
  top: 4px;
  position: relative;
  margin: 0 5px;
}

.filter .item {
  display: block;
  float: left;
}

.filter .right .item {
  margin-left: 3px;
}


.filter .right {
  float: right;
  text-align: right;
}

.filter .left {
  float: left;
  text-align: right;
}

.filter .item {
  display: block;
  float: left;
}


.filter .control {
  cursor: pointer;
  padding: 0;
  position: relative;
  display: block;
  height: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
}


.filter span.icon.filter {
  background-image: url("//everpayinc.com/assets/app/img/icons/filter-small.png");
}

.filter .control a.remove {
  background: url("//everpayinc.com/assets/app/img/icons/remove-fc.png");
  width: 14px;
  height: 14px;
  position: absolute;
  right: 7px;
  top: 5px;
  display: none;
}

.filter span.icon.export {
  background-image: url("//everpayinc.com/assets/app/img/icons/export-all.png");
}

.filter span.icon.create {
  background-image: url("//everpayinc.com/assets/app/img/icons/create-new.png");
}

span .icon {
  position: absolute;
  left: 9px;
  top: 3px;
  width: 8px;
  height: 10px;
  background-repeat: no-repeat;
}


.filter span.icon {
  position: absolute;
  left: 10px;
  top: 8px!important;
  width: 9px;
  height: 9px;
  font-size: 11px;
  background-repeat: no-repeat;
}


a.button, .filter, label {
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.control {
  cursor: pointer;
  padding: 0;
  position: relative;
  display: block;
  height: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
margin-top:4px;
}

.filter .control span.label {
  font-family: arial;
  color: #444;
  font-size: 11px;
  height: 22px;
  padding: 3px 11px 4px 23px;
  text-shadow: 0 1px 0 #444;
  display: block;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
  line-height: px;
}

.control:hover{background:rgba(0,0,0,0.05)}

.control:hover span.label{text-shadow:0 1px 0 rgba(255,255,255,0.7)}

.control:active, .filter .control.selected{background:rgba(0,0,0,0.1);-webkit-box-shadow:inset 0 1px 0 rgba(0,0,0,0.1);-moz-box-shadow:inset 0 1px 0 rgba(0,0,0,0.1);-ms-box-shadow:inset 0 1px 0 rgba(0,0,0,0.1);-o-box-shadow:inset 0 1px 0 rgba(0,0,0,0.1);box-shadow:inset 0 1px 0 rgba(0,0,0,0.1)}

.control.active{color: #333;
  background-color: #fefefe;
  border-color: #ccc;background-image:-webkit-gradient(linear,left top,left bottom,from(#eee),to(#fefefe));-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.27);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.27);-ms-box-shadow:inset 0 1px 0 rgba(255,255,255,0.27);-o-box-shadow:inset 0 1px 0 rgba(255,255,255,0.27);box-shadow:inset 0 1px 0 rgba(255,255,255,0.27)}

.control.active span.value{color:#fff;text-shadow:0 -1px rgba(0,0,0,0.2)}

.control.active .arrow{display:none}

.control.active a.remove{display:block}

.filter .control .label {
  border-radius: 0;
  text-shadow: none;
  font-weight: 400;
  display: inline-block;
  background-color: #eee!important;
  box-shadow: inset 0px 0px #444;
  padding: 5px 15px 10px 25px!important;
  border-top: 1px solid #fff;
  text-decoration: none;
  display: inline-block;
}

div.list-view-content div.filter {
  padding: 3px;
  height: 20px;
  background: #f3f5f8;
  border-bottom: 0px solid #b9c2d0!important;
  background: #e3e7ed;
  background: -webkit-linear-gradient(#f4f6f8,#e3e7ed);
  background: -moz-linear-gradient(#f4f6f8,#e3e7ed);
  background: -ms-linear-gradient(#f4f6f8,#e3e7ed);
  background: -o-linear-gradient(#f4f6f8,#e3e7ed);
  background: linear-gradient(#f4f6f8,#e3e7ed);
  -webkit-box-shadow: inset 0 1px 0 #fff;
  -moz-box-shadow: inset 0 1px 0 #fff;
  -ms-box-shadow: inset 0 1px 0 #fff;
  -o-box-shadow: inset 0 1px 0 #fff;
  box-shadow: inset 0 1px 0 #fff;
}


div.filter div.right {
  float: right;
  text-align: right;
}

div.filter div.item {
  display: block;
  float: left;
}


div.filter div.left {
  float: left;
  text-align: left;
}


div.filter div.control span.filter-label {
  font-family: arial;
  color: #5a6169;
  font-size: 12px;
  height: 22px!important;
  padding: 4px 10px 0 23px;
  text-shadow: 0 1px 0 #fff;
  display: block;
border-radius:25px;
}

div.filter div.item {
  display: block;
  float: left;
}



div.filter div.control {
  cursor: pointer;
  padding: 0;
  position: relative;
  display: block;
  height: 22px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
}


div.filter span.icon {
  position: absolute;
  left: 9px;
  top: 6px;
  width: 8px;
  height: 9px;
  background-repeat: no-repeat;
}

div.filter div.control a.remove {
  background: url("https://everpayinc.com/assets/app/img/icons/remove-fc.png");
  width: 12px;
  height: 12px;
  position: absolute;
  right: 7px;
  top: 5px;
  display: none;
}

div.filter span.icon.create {
  background-image: url("https://everpayinc.com/assets/app/img/icons/create-new.png");
}


div.filter div.control:hover span.filter-label {
  text-shadow: 0 1px 0 rgba(255,255,255,0.7);
  color: #000;
  background-color: #eee;
}

div.filter div.control span.filter-label {
  font-family: arial;
  color: #5a6169;
  background-color: #fefefe;
  font-size: 12px;
  height: 22px!important;
  padding: 4px 11px 0 11px!important;
  text-shadow: 0 1px 0 #fff;
  display: block!important;
cursor: pointer;
  padding: 0;
  position: relative;
  display: block;
  height: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
  border-radius: 20px;
top; 1px;
bottom:1px;
}

div.control #export {
top:8px;
  color: #5a6169;
  font-size: 12px;
  height: 22px!important;
}


span.description {
  font-weight: bold;
  padding-left: 11px;
}

a>span {
  cursor: pointer;
}

.font-blue-hoki {
  color: #05101b!important;
}

.jumbotron {
  padding: 30px;
  margin-bottom: 20px;
  color:#05101b!important;
  background-color: #ffffff!important;
}

.jumbotron h1 {
  font-size: 52px!important;
padding: 20px;
font-weight: 700;
}

.jumbotron fa {
  color:#05101b!important;
}


.overview .content .container tr a, .overview .content .container p.more a, .overview .content .container.link a {
  color: #444;
  display: block;
  padding: 12px 15px;
font-size: 12px;
  border-bottom: 1px solid #eee;
  background: url("./assets/app/img/icons/arrow-666.png") 676px 50% no-repeat;
}
       
.overview .content .container {
  clear: both;
  overflow: auto;
  position: relative;
  z-index: 2;
  border: 1px solid #dadada;
  border-top: 1px solid #bbb;
  background: #fff;
  padding: 15px;
  font-size: 12px;
  line-height: 12px;
  margin-bottom: 30px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  -ms-border-radius: 6px;
  -o-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #fff;
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #fff;
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #fff;
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #fff;
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 1px 0 #fff;
}

.overview .content .container tr {
  margin: -15px;
  font-size: 13px;
}


html {
  background: rgba(255,255,255,0);
  background: -webkit-linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0));
  background: -moz-linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0));
  background: -ms-linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0));
  background: -o-linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0));
  background: linear-gradient(rgba(255,255,255,0.3),rgba(255,255,255,0));
  background-color: #e8ebef;
  background-repeat: no-repeat;
  height: 100%;
}

.overview .content {
  position: relative;
  padding: 30px;
  border-top: 1px solid #dfe3e6;
}


.paginate {
  float: none;
  text-align: center;
  margin-top: 70px;
}

.paging_full_numbers {
  height: 22px;
  line-height: 22px;
}

.paging_full_numbers a.paginate_button {
  background-color: #fff;
}

.paging_full_numbers a.paginate_button_disabled {
  color: #888 !important;
  cursor: default;
}

.paging_full_numbers a.paginate_button.first {
  border-radius: 4px 0px 0px 4px;
  border-left: 1px solid #ddd;
}

.paging_full_numbers a.paginate_button, .paging_full_numbers a.paginate_active {
  border: 1px solid #ddd;
  padding: 5px 10px;
  cursor: pointer;
  color: #428bca !important;
  border-left: 0px;
}

.form-group select {
  background: #Fefefe;
  height: 40px!important;
}

#content {
  background: #FFF;
  padding-top: 55px!important;
    margin-bottom: 10px!important;
  position: relative;
  min-height: 520px;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.chart, .pie, .bars {
  overflow: hidden;
  height: auto!important;
  font-size: 12px;
}

.btn-link:hover, .btn-link:focus {
  color: #23527c!important;
  text-decoration: none!important;
}
.btn:hover, .btn:focus {
  color: #23527c;
  text-decoration: none!important;
}

.btn-default:hover, .btn-default:focus {
  color: #23527c;
  text-decoration: none;
}

a:hover, a:focus {
  color: #2a6496;
  text-decoration: none!important;
}

div.total {
  background-color: #fcfbe2;
  border: 1px solid #dad8a3;
  padding: 8px;
  border-radius: 4px;
  text-align: right;
}

#dashboard .chart h3 .total {
  font-size: 12px;
  position: relative;
  top: -8px;
  left: 8px;
  color: #2D96BE;
  height: auto!important;
}

#topcontrol {
  position: fixed;
  bottom: 36px!important;
  right: 10px;
  opacity: 1;
  cursor: pointer;
  z-index: 10000;
}


.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}

.pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}


.label-success, .label.label-success {
#45b6af!important;
}


.label {
    text-shadow: none !important;
    font-size: 12px;
    font-weight: 600;
    padding: 3px 6px 3px 6px;
    font-family: "Open Sans", sans-serif;
border-radius: 3px!important;
}

.tooltip {
    text-shadow: none !important;
border-radius: 8px!important;
}

#reports .stats {
    margin: 0 -40px;
    margin-top: -24px;
    padding: 24px 36px 12px;
    background: #FAFBFD;
    border-top: 3px solid #ADBDD5;
    border-bottom: 1px solid #E2E4F5;
}

.btn.btn-success {
    background-color: #9585bf!important;
    color: #fff;
}
.btn.btn-success:hover, a.btn.btn-success:hover {
 background-color: #9585bf;
    color: #ccc;
}


input#search {
    width: 100px;
    height: 24px!important;
    -webkit-border-radius: 4px!important;
    -moz-border-radius: 4px!important;
    border-radius: 4px!important;
    outline: none;
    border: 1px solid #9585bf!important;
    font-size: 14px!important;
	font-weight: 300!important;
    line-height: 25px;
    color: #777777;
}

.modal .modal-header .close {
    margin-top: -15px !important;
    margin-right: -15px;
}



@media screen and (max-width:360px) {
#nav-menu {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 99%;
    display: none;
  }
}

@media screen and (max-width: 360px) {
.nav .navbar-nav .navbar-right {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 29%;
    display: none;
  }
}

@media handheld{
#nav-menu ul .nav .navbar-nav .navbar-right { display: none; }
}

@media screen and (max-width: 360px) {
#nav-menu ul .nav .navbar-nav .navbar-right {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 29%;
    display: none;
  }
}

@media handheld{
    .nav .navbar-nav .navbar-right { display: none; }
}
    
.banner em {
    display: block;
    margin-top: 4px;
	font-size: 13px;
    letter-spacing: .5px;
    color: rgba(255,255,255,0.5);
}

.spinner-preview {
				width: 100px;
				height: 100px;
				text-align: center;
				margin-top: 60px;
			}
			
			.dropdown-preview {
				margin: 0 5px;
				display: inline-block;
			}
			.dropdown-preview  > .dropdown-menu {
				display: block;
				position: static;
				margin-bottom: 5px;
			}
.main-search.search-input>i {
    padding-left: 1px;
    top: 9px;
}
	
    </style>
	
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Datatables scripts -->
<?php /*
<!--script type="text/javascript" src="http://www.datatables.net/release-datatables/media/js/jquery.js"></script-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/dataTables.tableTools.js"></script>
<!-- END DATA TABLES SCRIPTS -->  
<script type="text/javascript">
$(document).ready(function() {
    $('.data-table').DataTable( {
        dom: 'T<"clear">lfrtip',
        tableTools: {
            "aButtons": [
                "copy",
                "csv",
                "xls",
                {
                    "sExtends": "pdf",
                    "sPdfOrientation": "landscape",
                    "sPdfMessage": "Your custom message would go here."
                },
                "print"
            ]
        }
    } );
});
</script>
*/?>

 <!-- BEGIN PAGE CONTENT-->


<script type="text/javascript" src="<?= branded_include('js/detectmobilebrowser.js');?>"></script>
	

<!-- Latest compiled and minified bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?= branded_include('js/jquery.cookie.js');?>"></script>
<script type="text/javascript" src="<?= branded_include('js/moment.min.js');?>"></script>

  <!-- Everpay App Scripts -->
<script type="text/javascript" src="<?= branded_include('js/universal.js'); ?>"></script>
<script type="text/javascript" src="<?= branded_include('js/theme.js');?>"></script>

<!-- Date Time Scripts -->
<script type="text/javascript" src="<?= branded_include('js/bootstrap-datepicker.js');?>"></script>

<!-- chart scripts -->
<script type="text/javascript" src="<?= branded_include('js/raphael-min.js');?>"></script>
<script type="text/javascript" src="<?= branded_include('js/morris.min.js');?>"></script>

<script type="text/javascript" src="<?= branded_include('js/jquery.flot/jquery.flot.js');?>"></script>
<script type="text/javascript" src="<?= branded_include('js/jquery.flot/jquery.flot.time.js');?>"></script>
<script type="text/javascript" src="<?= branded_include('js/jquery.flot/jquery.flot.tooltip.js');?>"></script>
<!-- END Chart scripts -->

<script type="text/javascript" src="<?=branded_include('js/back-to-top.js');?>"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<script src="//use.typekit.net/wkj3pfp.js"></script>
<script>try{Typekit.load();}catch(e){}</script>


                                                    <? if (isset($head_files)) { ?>
<?= $head_files; ?>
<? } ?>

</head>
<?php error_reporting(0); ?>
<body>
	<div id="wrapper">
<div id="notices"><?=get_notices();?></div>

<span id="ajax-loader"></span>
			<div></div>
			
<!-- NAVBAR ================================================== -->
		<div id="sidebar-dark" class="main-sidebar fix-scroll" style="display: block;">
			<div class="current-user">
				<a href="<?= site_url('account/'); ?>" class="name">
				<img class="avatar" src="<?= branded_include('img/logo/everpay-square-logo.png'); ?>">
					<span>
					<?=$this->user->Get('username')?>
						<i class="fa fa-chevron-down"></i>
					</span>
				</a>
				<ul class="menu">
					<li>
<div class="row">
<div class="col-sm-6"><span><a href="<?= site_url('account/'); ?>"><i class="fa fa-user"></i>Profile</a></span></div>
<div class="col-sm-6"><span><a style="color:#fff;font-size: 9px; width: 62px;" href="javascript:;" onclick="jQuery('#modal-upgrade').modal('show', {backdrop: 'static'});" class="label label-sm label-icon label-info"><i class="icon-budicon-466"></i> Upgrade </a></div>
</div>
					</li>
		
	                <li>
					<a href="<?= site_url('settings/'); ?>"> <i class="fa fa-cog"></i> Settings </a>
					</li>

					<li>
		<a href="<?=site_url('account/logout');?>"> <i class="fa fa-sign-out"></i> Sign out </a>
					</li>

				</ul>
			</div>

			<div class="menu-section">
<p> Last Session: </p>
<ul>
			<li><?=$this->navigation->Output();?></li>
</ul>
			</div>

			<div class="bottom-menu hidden-sm">
				<ul>
			<li><a href="<?=$this->config->item('support_url');?>"><i class="fa fa-support"></i></a></li>
					<li>
						<a href="<?= site_url('settings/'); ?>">
							<i class="fa fa-user"></i>
							<span class="flag"></span>
						</a>
					<ul class="menu">
<li><a href="<?=site_url('events/');?>"><?php echo $count = count($logcount); ?></strong> new notifications</a></li>
					</ul>
					</li>
					<li><a href="<?=site_url('account/logout');?>"><i class="fa fa-sign-out"></i></a></li>
				</ul>
			</div>
		</div>

 		<div id="content">

<div class="menubar fixed">
				<div class="sidebar-toggler visible-xs">
					<i class="fa fa-navicon"></i>
				</div>

<div class="row-fluid">
<div class="col-md-12 col-sm-12 col-xs-12 page-title" style="display: inline-block;"> 
<h4 class="blue-hoki hidden" style="margin-left: -15px;"><?= $this->navigation->PageTitle(); ?> </h4>
			<div class="header" style="margin-top: 5px!important; max-width:100%; padding-left:10%; margin-right:20px;">
			<div class="hidden-xs">
    <div class="hidden-sm">
			<div id="nav-menu hidden-sm-xs">
			<ul class="nav navbar-nav navbar-right">
			<li class="main-search search-input">
			    <i class="icon-budicon-489"></i>
			  <form id="search-form" class="" method="post" action="<?=site_url('dashboard/search');?>">
          <input class="form-control js-predictive" name="searchkey" type="text" placeholder="Search for.." id="search" autocomplete="off" />
<input type="submit" name="search" value="Go" class="hidden">
				  <h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
<ul id="results"></ul>
</form>
            </li>
               <li><a target="_blank" href="<?=$this->config->item('support_url');?>">Help &amp; Support</a></li>
              <li><a target="_blank" href="<?=$this->config->item('docs_url');?>"> Documentation</a></li>
              <li style="margin-top:-3px;">
                <span role="button" style="margin-left:10px;">
                  <?=$this->navigation->GetSidebar();?>
                </span>
              </li>
			              </ul>

			
			</div>
			
			</div>
			</div>

</div>

</div><!-- END Menu Bar-->

</div><!-- END PAGE HEADER-->