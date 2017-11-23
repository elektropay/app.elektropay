<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:22,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&t(4),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:9,2:8,3:6,4:10,5:3,6:23,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:9,2:8,3:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],6:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=t("ee").create(),i=t(1)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:24,ee:"QJf3ax",gos:"7eSDFh"}],7:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:24,ee:"QJf3ax"}],8:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:24,ee:"QJf3ax"}],9:[function(t,e){function n(t,e,n){t[0]=o(t[0],"fn-",null,n)}var r=t("ee").create(),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:24,ee:"QJf3ax"}],10:[function(t,e){function n(){f.inPlace(this,p,"fn-")}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(i){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:6,2:24,ee:"QJf3ax"}],11:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=n(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(e.cat=d.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,o("xhr",[e,r,this.startTime])}}}function n(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=e,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,e){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=n(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{a.emit("internal-error",[n])}catch(r){}}};for(var u=0;c>u;u++)e.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:12,3:10,4:6,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],12:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],13:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:22,2:23,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):void(r.q&&(r.q[t]||(r.q[t]=[]),r.q[t].push(e)))}var r=t("ee").create();e.exports=n,n.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){s(d,function(e,n){e in t||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=window,f=c.document;t(2);var u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},p=e.exports={offset:i(),origin:u,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()])},{1:22,2:13,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],22:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],23:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],24:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:23,ee:"QJf3ax"}]},{},["G9z0Bl",4,11,5]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"7a76808d55",applicationID:"11267302",sa:1,agent:"js-agent.newrelic.com/nr-686.min.js"}
</script>
	
<title><?=$this->navigation->PageTitle();?></title>
	<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">
	
<!-- Meta -->
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1"/>
    <meta property="fb:app_id" content="">
    <meta name="description" content="Welcome to Everpay&#39;s control panel for real-time payments data on customer transactions.">

	<!-- BEGIN APPLE ICONS STYLES -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= branded_include('img/ico/apple-touch-icon-144x144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= branded_include('img/ico/apple-touch-icon-114x114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= branded_include('img/ico/apple-touch-icon-72x72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= branded_include('img/ico/apple-touch-icon-57x57-precomposed.png'); ?>">

	
<link href="<?= branded_include('img/logo/favicon.ico'); ?>" rel="shortcut icon" />

<!-- font awesome for icons -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800"rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
<link href="<?= branded_include('css/budicon/budicon.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

	<!-- stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" >

 <link href="<?= branded_include('css/universal.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/brankic.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/theme.css'); ?>" rel="stylesheet" type="text/css" media="screen" />


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


.modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    /* border: 0px solid #999; */
    border: 0px solid rgba(0,0,0,.2)!important;
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 0px 0px rgba(0,0,0,.5)!important;
    box-shadow: 0 0px 0px rgba(0,0,0,.5)!important;
}


#header_notification_bar{
	margin-top: 8px;
	margin-bottom: 10px;
        margin-left: 10px;
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

	

.tk-karmina-sans{font-family:"karmina-sans",sans-serif;}
.tk-ubuntu-mono{font-family:"ubuntu-mono",sans-serif;}


.colored-text {
color: #eeeeee;
}

/***
Login page
***/

/* bg color */
html {
background-color: #05101b!important;
height: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {
  background-color: #05101b!important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.login {
  background-color:#05101b!important;
}

.login a {
  color: #edf4f8;
}

#forget-password a {color: #9585bf !important;}

.forget-password {color:#9585bf !important;}

.forget-password a {color: #9585bf !important;}

.login .logo {
    margin: 0 auto;
    margin-top: 10px;
    padding-left: 110px;
    text-align: center;
    margin-bottom: 5px;
    float: inherit;
    position: relative;
    padding-top: 5px;
}



.login .content {
width: 300px!important;
margin: 160px auto 40px auto;
height: 280px;
}


.content {
  width: 100%!important;
  margin: 0px auto;
  height: auto;
}

.login .form-title {
  margin-bottom: 20px;
margin-top: 20px;
}

.login .form-title {
  color: #fefefe;
text-shadow: 0px 2px 0px #111;
  font-size: 24px;
  font-weight: 600 !important;
}

.login .form-title h4 {
  color: #fff;
text-shadow: 0px 2px 0px #111;
  font-size: 22px;
  font-weight: 400 !important;
}

.login .form-subtitle {
  color: #fff;
  font-size: 24px;
  font-weight: 500 !important;
  padding-left: 8px;
}

.login .content h4 {
  color: #444;
}

.login .content .hint {
  color: #b7d1e2;
  padding: 0;
  font-size: 14px;
  margin: 15px 0 7px 0;
}

.login .content .login-form,
.login .content .forget-form {
  padding: 0px;
  margin: 0px;
}

.login .content .form-control {
  border: none;
  background-color: #6ba3c8;
  border: 1px solid #6ba3c8;
height: 46px!important;
  color: #d9ecf9;
}
.login .content .form-control:focus, .login .content .form-control:active {
  border: 1px solid #83b8db;
}
.login .content .form-control::-moz-placeholder {
  color: #d9ecf9;
  opacity: 1;
}
.login .content .form-control:-ms-input-placeholder {
  color: #d9ecf9;
}
.login .content .form-control::-webkit-input-placeholder {
  color: #d9ecf9;
}

.login .content select.form-control {
  padding-left: 9px;
  padding-right: 9px;
}

.login .content .forget-form {
  display: none;
}

.login .content .register-form {
  display: none;
}

.login .content .form-title {
  font-weight: 300;
  margin-bottom: 25px;
}

.login .content .form-actions {
clear: both;
border: 0px;
padding: 0px 30px 5px 30px;
margin-left: -30px;
margin-right: -30px;
}

.login .content .form-actions .forget-password-block {
  padding-top: 7px;
}

.login-options {
  margin-top: 30px;
  padding-top: 20px;
  padding-bottom: 50px;
  border-top: 1px solid #69a0c4;
  border-bottom: 1px solid #69a0c4;
}

.login-options h4 {
  margin-top: 8px;
  font-weight: 600;
  font-size: 15px;
  color: #b7d1e2 !important;
}

.login .forget-password {
  font-size: 14px;
}

.login-options .social-icons {
  float: right;
  padding-top: 3px;
}

.login-options .social-icons li a {
  border-radius: 15px 15px 15px 15px !important;
  -moz-border-radius: 15px 15px 15px 15px !important;
  -webkit-border-radius: 15px 15px 15px 15px !important;
}

.login .content .forget-form .form-actions {
  border: 0;
  margin-bottom: 0;
  padding-bottom: 20px;
}

.register-form .form-actions {
  border: 0;
  margin-bottom: 0;
  padding-bottom: 0px;
}

.form-actions .checkbox {
  margin-top: 8px;
  display: inline-block;
}

.form-actions .btn {
  margin-top: 1px;
}

.login .btn-primary {
background-color: #5995bb;
border: 1px solid #72a9cc;
color: #fefefe;
font-weight: 600;
padding: 15px 25px !important;
height: 56px!important;
}

.btn-primary {
  background-color: #5995bb;
  border: 1px solid #72a9cc;
  color: #8fc4e5;
  font-weight: 600;
  padding: 15px 25px !important;
height: 56px!important;
}

.btn-primary:hover {
  border: 1px solid #90bbd7;
  background-color: #5995bb;
  color: #8fc4e5;
}


.login .btn-primary:hover {
  border: 1px solid #90bbd7;
  background-color: #5995bb;
  color: #8fc4e5;
}

.login .content .forget-password {
  color: #fefefe;
text-shadow: 0px 2px 0px #111;
  font-size: 16px;
  margin-top: -4px;
}

.login .content .rememberme {
  margin-top: 8px;
}

.login .content .check {
  color: #c9dce9 !important;
}

.login .content .create-account {
  text-align: center;
  margin-top: 20px;
}

.login .content .create-account p a {
  font-weight: 300;
  font-size: 16px;
  color: #ffffff;
}

.login .content .create-account a {
  display: inline-block;
  margin-top: 5px;
}

/* footer copyright */
.login .footer .copyright {
  text-align: center;
  margin: 10px auto 20px 0;
  padding: 10px;
  color: #c9dce9;

font-size: 1em!important;
}

footer#footer {
	position: absolute;
  float: left;
  padding-bottom: 0px;
font-size: 0.8em!important;
height:20px;
}


#footer .copyright {
  text-align: center;
  margin: 10px auto 20px 0;
  padding: 10px;
  color: #c9dce9;
  font-size: 1.1em!important;
}

#footer :last-child {
  float: none!important;
}

#signin2 {

    margin-top: 10px;
}

@media (max-width: 1400px) {
.login .logo {
    margin-top: -13px;
  }
}
@media (max-width: 480px) {
  /***
  Login page
  ***/
  .login .logo {
    margin-top: 5px;
    padding: 0px;
  }

  .login .content {
    width: 245px!important;
  }

  .login .content h3 {
    font-size: 22px;
  }

  .login .checkbox {
    font-size: 13px;
  }
}

.btn-login {
	height:56px;
}

.bottom-wrapper .message {
    text-shadow: 1px 1px #000;
    border: 1px solid #C7CFD3;
    color: #333;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.82),0 1px 0 rgba(255,255,255,0.83);
}

.bottom-wrapper .message {
    max-width: 360px;
    margin: 0 auto;
    margin-top: 60px;
    text-align: center;
    border-radius: 4px;
    padding: 18px;
    border: 1px solid #8B9BC4;
    color: #fff;
}


a.signup {
color: #FEFEFE;
border: 0px solid #f1f1f1;
background-color: #f87c45;
border-radius: 125px;
margin-left: 10px;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: 600;
line-height: 62px!important;
display: inline-block;
padding: 16px;
margin-top: 1px;
font-size: 18px!important;
}

.form-actions {
    padding: 10px 2px 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: transparent;
    border-top: 0px solid #ddd;
}


.form-control {
border: none;
background-color: #6ba3c8;
border: 1px solid #6ba3c8;
height: 48px!important;
color: #d9ecf9!important;
width: 93%!important;
}

#notices {
font-size: 18px;
font-weight: 600;
}

#notices div {
padding: 15px 30px 15px 30px;
margin: 0 auto;
text-align: center;
display: inline;
position: absolute;
z-index: 1050;
left: 0;
top: 2%;
border-bottom: 1px #dddddd solid;
height: 66px;
width: 100%;
overflow: hidden;
background-color: #00b22d;
border-bottom-color: #01921f -webkit-box-shadow: 0 0 4px 1px rgba(0,0,0,0.15);
-moz-box-shadow: 0 0 4px 1px rgba(0,0,0,0.15);
box-shadow: 0 0 4px 1px rgba(0,0,0,0.15);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
content: "\e6f5";
}

#notices div.error {
background-color: #b60000;
color: #fff;
font-size: 18px;
margin: 0 auto;
font-weight: 600;
content: "\e6fa";
}

#notices div {
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 0px;
padding: 15px 35px 15px 35px;
font-size: 18px;
text-align: center;
display: inline;
position: absolute;
left: 0.5%;
top: 2%;
z-index: 1;
/* margin-left: -200px; */
width: 100%;
height: 62px;
margin: auto 0px;
}

footer.site-footer {
border-top: 1px solid #f1f1f1;
margin-top: 20px;
margin-bottom: 10px;
font-size: 12px;
padding: 20px 0;
color: #999;
}

footer.site-footer nav {
text-align: right;
float: left;
}

footer.site-footer nav li {
display: inline-block;
margin-left: 20px;
}

.site-footer a {
color: #999;
margin: 20px!important;
}

.copyright {
font-size: 1em!important;
text-align: center;
margin-bottom: 20px;
}

nav {
display: block;
}

li {
margin: 20px 0;
}

.footer {
display: block;
}

nav ul, nav ol {
list-style-image: none;
}

.error {
color: #a94442;
background-color: #f2dede;
border-color: #ebccd1;
font-size: 16px;
font-weight: 700;
padding-top: 20px;
max-width: 100%;
padding-bottom: 20px;
padding-left: 5px;
padding-right: 5px;
margin-bottom: 5px;
border: 1px solid #ebccd1;
border-radius: 2px!important;
border-bottom: 1px #dddddd solid;
overflow: hidden;
-webkit-box-shadow: 0 0 4px 1px rgba(0,0,0,0.15);
-moz-box-shadow: 0 0 4px 1px rgba(0,0,0,0.15);
box-shadow: 0 0 4px 1px rgba(0,0,0,0.15);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.btn-login {
    height: 56px!important;
    padding: 20px;
}

.login-form {
    padding: 10px;
	background-color: #fff!important;
    border-color: #f5f5f8;
	    border-width: 1px;
}


/*Color box css*/
/*
    Colorbox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
#cboxWrapper {max-width:480px; height:380px;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
.cboxIframe{width:100%; height:100%; display:block; border:0; padding:0; margin:0;}
#colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}

/* 
    User Style:
    Change the following styles to modify the appearance of Colorbox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
.highlight {background: #ccc; opacity: 0.9;}
#cboxOverlay.inline-cboxOverlay {
    background:#ccc;
    opacity: 0.9;
    filter: alpha(opacity = 90);
}
.inline-cboxOverlay {position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
.inline-cboxOverlay {position:fixed; width:100%; height:100%;}
#cboxOverlay {
  background: #000;
  opacity: 0.8!important;
  filter: alpha(opacity = 90);
}

#colorbox{outline:0;}
    #cboxTopLeft{width:21px; height:21px; background:url(https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example5/images/border.png) no-repeat -101px 0;}
    .box-design #cboxTopLeft, 
    .box-design #cboxTopCenter, 
    .box-design #cboxTopRight,
    .box-design #cboxMiddleLeft,
    .box-design #cboxMiddleRight,
    .box-design #cboxBottomLeft,
    .box-design #cboxBottomCenter,
    .box-design #cboxBottomRight
    {background: none;}
#cboxContent {
  background: #fff;
  overflow: hidden;
padding; 15px;
  border-radius: 10px;
  /* width: 400px; */
}
        .cboxIframe{background:#fff;}
        #cboxError{padding:50px; border:1px solid #ccc;}
#cboxLoadedContent {
  margin-bottom: 28px;
  height: 380px!important;
}
        #cboxTitle{position:absolute; bottom:4px; left:0; text-align:center; width:100%; color:#949494;}
        #cboxCurrent{position:absolute; bottom:4px; left:58px; color:#949494;}
        #cboxLoadingOverlay{background:url(https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example5/images/loading_background.png) no-repeat center center;}
        #cboxLoadingGraphic{background:url(https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example5/images/loading.gif) no-repeat center center;}

        /* these elements are buttons, and may need to have additional styles reset to avoid unwanted base styles */
        #cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; width:auto; background:none; }
        
        /* avoid outlines on :active (mouseclick), but preserve outlines on :focus (tabbed navigating) */
        #cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}

        #cboxSlideshow{position:absolute; bottom:4px; right:30px; color:#0092ef;}
        #cboxPrevious{position:absolute; bottom:0; left:0; background:url(https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/images/controls.png) no-repeat -75px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxPrevious:hover{background-position:-75px -25px;}
        #cboxNext{position:absolute; bottom:0; left:27px; background:url(https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/images/controls.png) no-repeat -50px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxNext:hover{background-position:-50px -25px;}
        #cboxClose{position:absolute; top:3px; bottom:0; right:0; background:url(https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/example1/images/controls.png) no-repeat -25px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxClose:hover{background-position:-25px -25px;}
#colorbox {
  outline: 0;
  height: 280px!important;
}

/*
  The following fixes a problem where IE7 and IE8 replace a PNG's alpha transparency with a black fill
  when an alpha filter (opacity change) is set on the element or ancestor element.  This style is not applied to or needed in IE9.
  See: http://jacklmoore.com/notes/ie-transparency-problems/
*/
.cboxIE #cboxTopLeft,
.cboxIE #cboxTopCenter,
.cboxIE #cboxTopRight,
.cboxIE #cboxBottomLeft,
.cboxIE #cboxBottomCenter,
.cboxIE #cboxBottomRight,
.cboxIE #cboxMiddleLeft,
.cboxIE #cboxMiddleRight {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
}

.form-control {
  border: none;
  background-color: #6ba3c8;
  border: 1px solid #ddd!important;
  color: #444!important;
  padding-left:10px;
  font-size: 16px!important;
}

#cboxWrapper {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9999;
  overflow: hidden;
  border-radius: 10px!important;
  height: 280px!important;
  text-align: center;
}

.login .content {
  width: 280px!important;
  margin: 95px auto 40px auto!important;
  height: 140px!important;
}

.form-control.form-control-solid {
    background-color: #F1F3F8;
    border-color: #9585bf!important;
    color: #444;
    height: 48px!important;
}
#signin2 .bg {
    background: #05101b!important;
 background-size: 100% 100%;
    padding-top: 20px;
}

#signin2 .bg.clear {
    background-image: none;
    background: #F2F5F8;
}

.content-login {
    box-shadow: 0 2px 6px 0 rgba(0,0,0,0.25);
    border-radius: 4px;
}

.content-login {
    max-width: 420px;
    margin: 0 auto;
       margin-top: 40px;
    margin-bottom: 40px;
    padding: 42px 48px;
    background: #fff;
    box-shadow: 0 1px 40px 0 rgba(0,0,0,0.3);
    border-radius: 3px;
}

#footer#footer {
    position: relative;
    float: left;
    padding-bottom: 0px;
    font-size: 0.8em!important;
    height: 0px;
    width: 100%;
}

#footer {
    background: #05101b!important;
    font-size: 0.9em;
    padding: 10px 0 0;
    position: relative;
    clear: both;
}

.footer-btm {
    margin-top: 5px;
    padding: 2px;
    background-color: transparent!important;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    color: #ffffff;
}


.info {
	position: absolute;
	top: 0;
	right: 0;
	width: 20px;
	height: 20px;
}
.mark {
	position: absolute;
	width: 20px;
	height: 20px;
	line-height: 20px;
	text-align: center;
	background: #08c;
	color: #fff;
	border-radius: 50%;
	cursor: help;
	font-size: 13px;
}
.info-tip {
	display: none;
	background: #000;
	color: #fff;
	padding: 8px;
	width: 270px;
	font-size: 14px;
	line-height: 1.4;
	position: absolute;
	top: -10px;
	right: -300px;
	z-index: 1000000000;
	opacity: 0;
	transition: opacity 700ms ease-in;
}
.info-tip:before {
	content: ' ';
	display: block;
	width: 0; 
	height: 0; 
	border-top: 6px solid transparent;
	border-bottom: 6px solid transparent; 
	border-right: 6px solid #000;
	position: absolute;
	top: 50%;
	margin-top: -6px;
	left: -6px; 
}

.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}


.tk-karmina-sans{font-family:"karmina-sans",sans-serif;}
.tk-ubuntu-mono{font-family:"ubuntu-mono",sans-serif;}

.btn-success {
    color: #fff;
    background-color: #9585bf!important;
    border-color: #9585bf!important;
}

.btn.btn-success a.btn.btn-success{
    background-color: #9585bf!important;
    color: #fff;
}
.btn.btn-success:hover, a.btn.btn-success:hover {
    background-color: #694D9F;
    color: #fff;
}

.border-theme {
    border: 2px solid #9585bf;
    color: #9585bf;
}


.top-social li {
    padding: 0px;
    font-size: 0.9em;
}

.forget-password-block {
    padding: 2px;
	margin-top:5px;
	margin-bottom:5px;
	    font-size: 0.9em!important;
}

.forget-password-block a {
    padding: 2px;
	margin-top:1px;
	margin-bottom:5px;
	    font-size: 0.9em!important;
}

.logo>* {
    position: relative;
    top: -40px;
    right: 0;
    width: 56px;
    bottom: 0;
    text-align: center;
    direction: ltr;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: contain;
    margin: auto;
    vertical-align: middle;
}


#login_form {
    max-width: 340px;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 45px;
    padding: 50px 25px 10px 25px;
    background: #fff;
    box-shadow: 0 1px 40px 0 rgba(0,0,0,0.3);
    border-radius: 7px;
    height: auto;
}

.top-bar{
	margin-top:10px;
	
}


.login-logo 
	element.style {
    height: 60px;
}

</style>
	
<script type="text/javascript" src="<?=branded_include('js/jquery.2.1.1.min.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/universal.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/detectmobilebrowser.js');?>"></script>

</head>

<body class="external everpay login" id="jQ_authWrapper" style="padding-bottom: 0px;"

  <div id="header-top">
            <div class="container-fluid">
                <div class="top-bar row">
                    <div class="col-md-12">
<div class="sample-1 pull-left">
                        
                        <ul class="list-inline top-social left">
&nbsp;&nbsp; <li><a style="color:#fff; text-align:left;"><i class="fa fa-envelope"></i>&nbsp;&nbsp;  <span class="colored-text">support@everpayinc.com</span> </a></li>
 </div>

                    <div class="pull-right">
                        <ul class="list-inline top-social right">
                            <li style="color:#fff;"> Want To Become A Merchant? Click here to </li>
                            <li> <a href="//everpayinc.com/signup" id="register-btn" style="text-transform:none;font-size: 12px;" class="btn btn-success btn-xs">Sign Up</a></li>

                        </ul>
                    </div>
					
					
					</div>
					
                </div>
            </div>
        </div><!--top bar end hidden in small devices-->
        <!--navigation -->
        <!-- Static navbar -->
        <!--<div id="undefined-sticky-wrapper" class="sticky-wrapper is-sticky" style="display: none;height: 25px;">-->
 <div class="navbar navbar-inverse navbar-fixed-top transparent-header yamm" role="navigation"style="background: #05101b; display:none;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://everpayinc.com/"><img src="../assets/img/logo/white.png" alt="Everpay"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class=""><a href="https://everpayinc.com/">  <i style="margin-top:1px; font-size:18px;" class="fa fa-home"></i> </a> </li>
                        <!--menu home li end here-->


<!--mega menu-->
                        <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">

                                            <div class="col-sm-3">
                                                <h3 class="heading"><i class="fa fa-cart-plus"></i> SERVICES</h3>
                                                <ul class="nav mega-vertical-nav">   
                           <li><a href="https://everpayinc.com/features">Everpay Accounts</a></li>     
                           <li><a href="https://everpayinc.com/card_processing">Card Processing</a></li>
                           <li><a href="https://everpayinc.com/check_processing">eCheck Processing</a></li>
                           <li><a href="https://everpayinc.com/mobile_processing">Online POS Store </a></li>
                                                </ul>

                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading"><i class="fa fa-lightbulb-o"></i> SOLUTIONS</h3>
                                                <ul class="nav mega-vertical-nav">
                                <li><a href="https://everpayinc.com/recurring_billing">Recurring Billing</a></li>
                               <li><a href="https://everpayinc.com/Fraud_Protection">Fraud</a></li>
                               <li><a href="https://everpayinc.com/product_management">Product Management</a></li>
                                <li><a href="https://everpayinc.com/marketplace">Online Marketplace</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading"><i class="fa fa-cloud"></i> APPS</h3>
                                                <ul class="nav mega-vertical-nav">
                             <li><a href="https://everpayinc.com/elektropay_appelektropay">Elektropay</a></li>                                                   
                              <li><a href="https://everpayinc.com/finvoice_app">Finvoice</a></li>   
                             <li><a href="https://everpayinc.com/evpos_app">EverSwipe</a></li>    
                             <li><a href="https://everpayinc.com/zoanga_app">Zoanga</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <h3 class="heading"><i class="fa fa-plus"></i> MORE</h3>
                                                <ul class="nav mega-vertical-nav">  
<li><a href="https://everpayinc.com/go-shop">Online POS Store </a></li> 
<li><a href="https://everpayinc.com/marketing_automation">Marketing Automation Solutions</a></li>
<li><a href="https://everpayinc.com/secure_hosting">Secure PCI Compliant Hosting</a></li>
<li><a href="https://everpayinc.com/app_development">Mobile App & Web Development </a></li>
                                                   
                                                </ul>
                                            </div>
                                        </div> 
                                    </div>
                                </li>
                            </ul>
                        </li> <!--menu Features li end here-->
                        <!--mega menu end-->    

                        <li class="">
                            <a href="https://everpayinc.com/pricing">Pricing </a>
                        </li> <!--menu Pricing li end here-->

<!--mega menu-->
                        <li class="dropdown yamm-fw">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources  <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                   
                                            <div class="col-sm-3">
                                                <h3 class="heading"><i class="fa fa-group"></i> DEVELOPERS</h3>
                                                <ul class="nav mega-vertical-nav">
           <li><a href="https://everpay.3scale.net/">Get Started</a></li>
           <li><a href="https://everpayinc.com/docs">API Docs</a></li>
           <li><a href="https://github.com/everpay/">Code Examples</a></li>
                                                </ul>
                                            </div>
                                      
                                               <div class="col-sm-3">
                                               <h3 class="heading"><i class="fa fa-question"></i> HELP</h3>
                                                <ul class="nav mega-vertical-nav">
                       <li> <a href="https://everpayinc.com/support">Get Support</a></li>
                       <li> <a href="https://everpayinc.com/support">Send A Ticket</a></li>

                       <li> <a href="https://everpayinc.com/got-questions">Have Questions?</a></li>
                                                </ul>
                                            </div>

        <div class="col-sm-3">
                                             <h3 class="heading"><i class="fa fa-sitemap"></i> CONNECTIONS</h3>
                                                <ul class="nav mega-vertical-nav">
                                             <li> <a href="https://everpayinc.com/processors">Processors</a></li>
                                              <li> <a href="https://everpayinc.com/integrations">Integrations</a></li>
                                          <li> <a href="https://everpayinc.com/partnerships">Partnerships</a></li>
                                                 </ul>
                                            </div>


                                            <div class="col-sm-3">
                                                <h3 class="heading"><i class="fa fa-retweet"></i> MEDIA </h3>
                                                <ul class="nav mega-vertical-nav">
     <li><a href="https://everpayinc.com/blog">Our Blog</a></li>
   <li><a href="https://everpayinc.com/press_releases">Press Releases</a></li>
 <li><a href="https://everpayinc.com/media_inquiries">Media Inquires</a></li>
                                                  </ul>
                                            </div>

                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li> <!--menu Features li end here-->
                        <!--mega menu end-->    

<li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="https://everpayinc.com/about">About Us</a></li>
                                <li><a href="https://everpayinc.com/contact">Contact Us</a></li>  
                                <li><a href="https://everpayinc.com/partners">Partnerships</a></li>                                                                                                                        
                                <li><a href="https://everpayinc.com/careers">Jobs & Careers</a></li>
                            </ul>
                        </li>
                        <!--menu pages li end here-->
                        <li class="login">
            <a style="color:#5cb85c!important;margin-left:10px;margin-right:10px; top:7px; padding: 8px;
  border-radius: 4px;" class="login" href="https://everpayinc.com/dashboard/login" >LOGIN <i class="fa fa-lock"></i></a>

                        </li> <!--menu login li end here-->
                 
                        <li class="signup">
   <a style="background-color:#9585bf;color:#fff!important;border: 1px solid #9585bf; margin-left:10px; margin-right:10px; top:7px; padding: 8px;border-radius: 4px;}" class="signup" href="https://everpayinc.com/signup">SIGN UP <i class="fa fa-pencil"></i></a>
</li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div>
</div><!--navbar-default-->


<!-- BEGIN PAGE TITLE & BREADCRUMB-->


	<!-- BEGIN LOGIN FORM -->

<div class="row-fluid">


<div id="signin2">

<div id="notices"><?=get_notices();?></div>

	
<div id="login_form">
<div class="login-logo">	  
	<a class="logo" href="//everpayinc.com">
	        <img src="https://res.cloudinary.com/lmj6rf6tz/image/upload/c_scale,w_96/v1443806855/sq_logo_djmpxo.png" style="padding:2px;" title="Login To Everpay" alt="Everpay" >
	</a>
	</div>
			<form method="post" action="<?=site_url('dashboard/do_login');?>">
				<div class="form-group">
				<div class="fields">
					<strong>Username</strong>
					<input id="username" type="text" class="form-control form-control-solid placeholder-no-fix" autocomplete="off" placeholder="Email" name="username" required/>
</div>
				</div>
				
					<div class="form-group">
				<div class="fields">
					<strong>Password</strong>
					<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" id="password" placeholder="Password" name="password" required/>
	               </div>
				<div class="pull-right forget-password-block">
				<a href="#show_hide" id="forget-password" class="forget-password inline1"style="color:#444;" >Forgot your password?</a>
			</div>
				</div>
				
				<div class="form-actions">
				<button type="submit" class="ladda-button btn-block" data-color="purple" data-style="expand-right" data-size="l"><span class="ladda-label">Sign in to your account</span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 131px;"></div>
				</button>
             	</div>
				
<div class="form-actions hidden">
			<div class="pull-left">
			</div>
			<div class="pull-right forget-password-block">
				<a href="#show_hide" id="forget-password" class="forget-password inline1"style="color:#444;" >Forgot your password?</a>
			</div>
		</div>
				</div>
			</form>
			
		

<div style="display:none;">
<div id="show_hide" class="" style="padding:10px;">	
    <div class="modal-content">

<form method="post" class="login-form" action="<?=site_url('forgotpassword/forgot_password');?>">

<div class="form-group">
<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
<label for="username" class="control-label visible-ie8 visible-ie9">Enter Your Email</label>
<input id="username" type="email" class="form-control form-control-solid placeholder-no-fix" autocomplete="off" placeholder="Enter Your Email" name="username" required />
		</div>
		
		<div class="form-actions modal-footer inline">
		 <button type="submit" class="ladda-button" name="login_button" data-color="purple" data-style="expand-right"><span class="ladda-label">Get New Password</span><span class="ladda-spinner">
        </div>
	  
	  </form>
</div><!-- /#show_hide -->

</div><!-- /#style -->

</div><!-- /.login-form -->
		</div><!-- /#singin2 -->

		<div class="bottom-wrapper hidden">
			<div class="message">
				<span>Don't have an account?</span>
				<a href="http://everpayinc.com/signup">Sign up here</a>.
			</div>
		</div>
	</div>




</div>



<div style="display:none;">
<div id="show_hide" class="hidden" style="background-color:#fff;padding:10px;">	
<h1>Forgot Password</h1>
<form method="post" class="login-form" action="<?=site_url('forgotpassword/forgot_password');?>">
	

	<div id="login_form">

<div class="form-group">
<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
<label for="username" class="control-label visible-ie8 visible-ie9">Email</label>
<input id="username" type="email" class="form-control form-control-solid placeholder-no-fix" autocomplete="off" placeholder="Email" name="username" required />
		</div>
			
<div class="form-actions">
<button type="submit" class="btn btn-primary btn-block btn-login uppercase" name="login_button">  Submit  <i class="fa fa-sign-in"></i></button>
		</div>

		</div>
</form>
</div>
</div>


<!-- Footer ================================================== -->



<footer id="footer" style="margin-top:0px;margin-bottom:-20px; background-color:transparent;">
            <div class="row-fluid">
                <div class="row">
                    <div class="container-fluid text-center">
                        <div class="footer-btm">
                            <span>
          <ul class="list-inline">
            <li class="copyright pull-left">&COPY; 2015 Everpayinc.com - All Rights Reserved.</li>
           <li><a href="//status.everpayinc.com/">System Status</a></li>
            <li><a href="//everpayinc.com/#">Security</a></li>
        <li><a href="//everpayinc.com/#">Terms Of Service</a></li>
        <li><a href="//everpayinc.com/#">Privacy & Cookie Policy</a></li>
 <li class="pull-right" style="margin-top: 4px; margin-left:20px;"><iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=everpay" style="width:120px; height:20px;"></iframe></li>
          </ul>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<!-- ================================================== End Footer Block -->



   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.33/jquery.colorbox.js"></script>
<script type="text/javascript" src="<?=branded_include('js/spin.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ladda.js');?>"></script>
<script type="text/javascript">
/*$("#show_hide").hide();
$('#forget-password').click(function(){
$("#show_hide").slideToggle();
    return false;
    });*/

$(".inline1").colorbox({inline:true, width:"35%"});
</script>

<script>

			// Bind normal buttons
			Ladda.bind( '.form-actions button', { timeout: 2000 } );

			// Bind progress buttons and simulate loading progress
			Ladda.bind( '.form-actions button', {
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );

			// You can control loading explicitly using the JavaScript API
			// as outlined below:

			// var l = Ladda.create( document.querySelector( 'button' ) );
			// l.start();
			// l.stop();
			// l.toggle();
			// l.isLoading();
			// l.setProgress( 0-1 );

		</script>
</body>
</html>