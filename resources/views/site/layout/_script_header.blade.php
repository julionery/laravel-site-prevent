<!-- Metas -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}</title>
<meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">
<meta name="keywords" content="">

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">

<!-- Open Graph data -->
<meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}"/>
<meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem') }}"/>
<meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}"/>

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('eydia/img/icons/favicon.png') }}">

<!-- Google Fonts -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,700italic,300italic">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo:400,700">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis:800,700">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Great+Vibes">


<!-- CSS -->
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/bootstrap.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/jquery.bxslider.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/js/vendor/owl.carousel.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/magnific-popup.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/lightbox.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/icomoon.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/flaticon.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/supersized.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/bootstrap-timepicker.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/jquery-ui.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/animate.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/multiscroll.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/selectize.default.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/jquery.fullPage.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/bbpress.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/jquery.timepicker.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/bbp-theme.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/buddypress.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/buddypress-theme.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/syntax-highlighter/scripts/prettify.min.css') }}">
<!-- Shortcodes main stylesheet -->
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/prettyPhoto.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/eislideshow.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/nivo-slider.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/liteaccordion.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/flexslider.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/iconmoon.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/slicebox.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/camera.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/main.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/shortcodes/css/media-queries.css') }}">
<!-- Main Stylesheet -->
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/main.css') }}">
<!-- CSS media queries -->
<link type="text/css" rel="stylesheet" href="{{ asset('eydia/css/media-queries.css') }}">

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/F19E6E58-A47B-904C-A62C-58F1FA244554/main.js" charset="UTF-8"></script></head>
<!-- class="boxed-mode" -->