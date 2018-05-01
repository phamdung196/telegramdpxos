<!doctype html>
<html lang="en" manifest="webogram.appcache" ng-csp="" xmlns:ng="http://angularjs.org" id="ng-app" style="display: none;">
<head>
  <!--[if lte IE 9]>
  <meta HTTP-EQUIV="REFRESH" content="0; url=badbrowser.html">
  <![endif]-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Telegram Web</title>

  <!-- build:css css/app.css -->
  <link rel="stylesheet" href="vendora/angular/angular-csp.css"/>
  <link rel="stylesheet" href="vendora/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="vendora/angularjs-toaster/toaster.css"/>
  <link rel="stylesheet" href="css/app.css"/>
  <!-- endbuild -->

  <link rel="manifest" href="manifest.webapp.json"/>

  <!-- <link rel="stylesheet" href="css/font.css"/> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext" rel="stylesheet" type="text/css"> -->

  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <link rel="apple-touch-icon" href="img/iphone_home120.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/iphone_home120.png">
  <link rel="apple-touch-startup-image" media="(device-width: 320px)" href="img/iphone_startup.png">

  <meta name="apple-mobile-web-app-title" content="Telegram Web">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="theme-color" content="#497495">
  <meta name="google" content="notranslate">

  <meta property="og:title" content="Telegram Web">
  <meta property="og:url" content="https://web.telegram.org/">
  <meta property="og:image" content="https://web.telegram.org/img/logo_share.png">
  <meta property="og:site_name" content="Telegram Web">
  <meta property="description" content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info.">
  <meta property="og:description" content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info.">

</head>
<body>

  <div class="page_wrap" ng-view></div>

  <div id="notify_sound"></div>

  <!-- build:js js/app.js -->
  <script type="text/javascript" src="js/lib/polyfill.js"></script>
  <script type="text/javascript" src="vendora/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="js/lib/config.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <script type="text/javascript" src="js/offline_manager.js"></script>

  <script type="text/javascript" src="vendora/jquery.nanoscroller/nanoscroller.js"></script>
  <script type="text/javascript" src="vendora/angular/angular.js"></script>
  <script type="text/javascript" src="vendora/angular/angular-route.js"></script>
  <script type="text/javascript" src="vendora/angular/angular-animate.js"></script>
  <script type="text/javascript" src="vendora/angular/angular-sanitize.js"></script>
  <script type="text/javascript" src="vendora/angular/angular-touch.js"></script>
  <script type="text/javascript" src="vendora/ui-bootstrap/ui-bootstrap-custom-tpls-0.12.0.js"></script>
  <script type="text/javascript" src="vendora/angular-media-player/angular-media-player.js"></script>

  <script type="text/javascript" src="vendora/jsbn/jsbn_combined.js"></script>
  <script type="text/javascript" src="vendora/cryptoJS/crypto.js"></script>
  <script type="text/javascript" src="vendora/rusha/rusha.js"></script>
  <script type="text/javascript" src="vendora/zlib/gunzip.min.js"></script>
  <script type="text/javascript" src="vendora/closure/long.js"></script>
  <script type="text/javascript" src="vendora/leemon_bigint/bigint.js"></script>
  <script type="text/javascript" src="vendora/libwebpjs/libwebp-0.2.0.js"></script>
  <script type="text/javascript" src="vendora/angularjs-toaster/toaster.js"></script>
  <script type="text/javascript" src="vendora/clipboard/clipboard.js"></script>

  <script type="text/javascript" src="vendora/ogv.js/ogv.js"></script>
  <script type="text/javascript" src="vendora/ogv.js/ogv-demuxer-ogg.js"></script>
  <script type="text/javascript" src="vendora/ogv.js/ogv-decoder-audio-opus.js"></script>
  <script type="text/javascript" src="vendora/ogv.js/ogv-decoder-audio-vorbis.js"></script>
  <script type="text/javascript" src="vendora/ogv.js/ogv-support.js"></script>

  <script type="text/javascript" src="vendora/recorderjs/recorder.min.js"></script>

  <script type="text/javascript" src="js/lib/utils.js"></script>
  <script type="text/javascript" src="js/lib/bin_utils.js"></script>
  <script type="text/javascript" src="js/lib/tl_utils.js"></script>
  <script type="text/javascript" src="js/lib/ng_utils.js"></script>
  <script type="text/javascript" src="js/lib/i18n.js"></script>
  <script type="text/javascript" src="js/lib/mtproto.js"></script>
  <script type="text/javascript" src="js/lib/mtproto_wrapper.js"></script>

  <script type="text/javascript" src="js/app.js"></script>
  <script type="text/javascript" src="js/services.js"></script>
  <script type="text/javascript" src="js/controllers.js"></script>
  <script type="text/javascript" src="js/filters.js"></script>
  <script type="text/javascript" src="js/messages_manager.js"></script>

  <!--PRODUCTION_ONLY_BEGIN
    <script type="text/javascript" src="js/templates.js"></script>
  PRODUCTION_ONLY_END-->

  <script type="text/javascript" src="js/message_composer.js"></script>
  <script type="text/javascript" src="js/directives.js"></script>
  <script type="text/javascript" src="js/directives_mobile.js"></script>
  <!-- endbuild -->

</body>
</html>
