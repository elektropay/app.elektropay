<!D<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php echo $heading;?></title>
   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" >

<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800"rel="stylesheet" type="text/css">

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

.icon-twitter:before {
  content: "a";
}

.icon-feed:before {
  content: "b";
}

.icon-facebook:before {
  content: "c";
}

.icon-google-plus:before {
  content: "d";
}

.icon-dribbble:before {
  content: "e";
}

.icon-share:before {
  content: "f";
}

.icon-linkedin:before {
  content: "g";
}



.tk-karmina-sans{font-family:"karmina-sans",sans-serif;}
.tk-ubuntu-mono{font-family:"ubuntu-mono",sans-serif;}


html, body {
  width: 100%;
  height: 100%;
}

body {
  background: url('https://everpayinc.com/assets/app/img/bgs/404.jpg') no-repeat center center fixed #05101b;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -webkit-font-smoothing: antialiased;
  margin: 0px;
  display: table;
  vertical-align: middle;
}
body a {
  color: #45b6af;
  text-decoration: none;
}
body a:hover {
  color: #45b6af;
}

.error-message-container {
  position: relative;
  display: table-cell;
  vertical-align: middle;
  width: 100%;
  text-align: center;
}

.logo {
  position: absolute;
  background: top center no-repeat;
  background-image: url('https://everpayinc.com/assets/img/logo/white.png');
  display: block;
  width: 140px;
  height: 58px;
  top: 85px;
  left: 45%;
  margin-left: -15px;
}
@media (-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3 / 2), (min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) {
  .logo {
    background-image: url('https://everpayinc.com/assets/img/logo/white.png');
    background-size: 60px 58px;
  }
}

.error-message {
  max-width: 510px;
  margin: 0px auto;
  padding: 100px 20px 30px 20px;
}

.title {
  font: 600 45px/1.5em "brandon-grotesque", sans-serif;
  color: #3b4450;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: -240px;
  margin-bottom: 5px;
}

.message {
  font: 300 30px/1.5em "Open Sans", "open-sans", sans-serif;
  color: #fff;
}

.small {
  font: 600 12px/1.5em "brandon-grotesque", sans-serif;
  color: #747c83;
  letter-spacing: 1px;
  text-transform: uppercase;
}

@media (max-height: 750px) {
  .title {
    margin-top: -100px;
  }
}
@media (max-height: 500px) {
  .title {
    margin-top: 0px;
  }
}
@media (max-height: 580px) {
  .logo {
    top: 40px;
  }
}
@media (max-height: 370px) {
  .logo {
    top: 20px;
  }
}
@media (max-width: 475px) {
  .title {
    font-size: 35px;
  }

  .message {
    font-size: 20px;
  }

  .small {
    width: 520px;
    margin-left: auto;
    margin-right: auto;
  }
}

    </style>




</head>

<body class="">

	<div class="error-message-container">

		<a href="/" class="logo"></a>

		<div class="error-message">
			<p class="title">Page Not Found</p>
			<p class="message">The link you clicked may be broken or the page may have been removed.</p>
			<p class="small">You can <a class="" href="javascript:history.go(-1)"> Go Back</a> or <a href="<?php echo config_item('base_url'); ?>/contact" title="Learn more about EverPay">contact us</a> about the problem</p>
		</div>

	</div>

</body>

</html>