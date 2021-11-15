<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Cretesol is a Stone & Tile Company based in Pakistan, Specialist in Imported Marble, Granite, Quartzite, Travertine & Ceramic, Porcelain Tiles. With the presence in the city of Islamabad(Flagship), Lahore and Karachi.">
  <meta name="keywords" content="Cretesol, title, stone,cretesol.com,marble">
  <meta name="author" content="Cretesol">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Cretesol | Tiles Stones</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/royal-preload.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/lightgallery.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{asset('css/woocommerce.css')}}" rel="stylesheet"> -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- REVOLUTION SLIDER CSS -->
  <link href="{{asset('plugins/revolution/revolution/css/settings.css')}}" rel="stylesheet">

  <!-- REVOLUTION NAVIGATION STYLE -->
  <link href="{{asset('plugins/revolution/revolution/css/navigation.css')}}" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-77921144-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-77921144-1');
  </script>


</head>
<style type="text/css">
  .cate-lines .cate-item_content {

    left: 0;
  }

  .icon-box--is-line-hover:hover {
    -webkit-filter: brightness(80%) !important;

  }

  .icon-box--is-line-hover:hover div h2 {
    color: grey !important;
  }

  .is-stuck {
    opacity: 90%;
    background-color: black;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 99;
    border: none !important;
    -webkit-animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
    -moz-animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
    animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
  }

  @media (min-width: 1024px) {
    #main_logo {
      margin-left: 105px;
    }

  }

  @font-face {
    font-family: 'navBarFont';
    src: url("{{asset('fonts/gotham-medium.otf')}}");
    font-style: normal;
    font-weight: 10;
  }

  @font-face {
    font-family: 'gotham-light';
    src: url("{{asset('fonts/gotham-light.otf')}}");
    font-style: normal;
    font-weight: 10;
  }

  @font-face {
    font-family: 'gotham-medium';
    src: url("{{asset('fonts/gotham-medium.otf')}}");
    font-style: normal;
    font-weight: 10;
  }

  @font-face {
    font-family: 'sliderFont';
    src: url("{{asset('fonts/raleway_light.ttf')}}");
    font-style: normal;
    font-weight: 100;
  }

  .navBarFont {
    font-family: 'navBarFont'
  }

  .sliderFont {
    font-family: 'sliderFont'
  }

  .aFont {
    font-family: 'navBarFont'
  }

  .gMFont {
    font-family: 'gotham-medium'
  }

  .gLFont {
    font-family: 'gotham-light'
  }

  .bFont {
    font-family: 'gotham-light'
  }

  #tawkchat-chat-bubble-close {
    display: none !important;
  }

  .theme-background-color {
    background-color: #2a2828 !important;
  }
</style>

<body>

  <div id="royal_preloader"></div>