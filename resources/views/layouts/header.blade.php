<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Cretesol | Tiles  Stones</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightgallery.css')}}" rel="stylesheet">
    <link href="{{asset('css/woocommerce.css')}}" rel="stylesheet">
    <link href="{{asset('css/royal-preload.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- REVOLUTION SLIDER CSS -->
    <link href="{{asset('plugins/revolution/revolution/css/settings.css')}}" rel="stylesheet">

    <!-- REVOLUTION NAVIGATION STYLE -->
    <link href="{{asset('plugins/revolution/revolution/css/navigation.css')}}" rel="stylesheet">
</head>
<style type="text/css">
    .cate-lines .cate-item_content {
   
     left: 0; 
}
.icon-box--is-line-hover:hover {
-webkit-filter: brightness(100%) !important;

}
.icon-box--is-line-hover:hover div h2{
color:black !important;
}
.is-stuck {
        background-color: black;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  z-index: 99;
  border: none !important;
  -webkit-animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
  -moz-animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
  animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
}
</style>
<body>
    <div id="royal_preloader"></div>
    <div id="page" class="site">
        <header id="site-header" class="site-header header-transparent">
            <!-- Main Header start -->
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col no-padding">
                                    <div id="site-logo" class="site-logo">
                                        <a href="index.html">
                                            <img id="main_logo" src="images/dark-logo.png" alt="Cretesol" class="" style="padding: 30px">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li id='home_link' class=" current-menu-item current-menu-ancestor">
                                                <a href="{{URL('/')}}">Home</a>
                                            </li>
                                            <li id='product_link' class="menu-item-has-children"><a href="#">Products</a>
                                                <ul class="sub-menu">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                    <li id='tile_sub_link'><a href="{{URL('category/'.$category->id)}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class=""><a href="#">Projects</a>
                                            </li>
                                            
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="contact.html">Clients</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container-fluid">
                    <div class="octf-mainbar-row octf-row">
                        <div class="octf-col">
                            <div class="mlogo_wrapper clearfix">
                                <div class="mobile_logo">
                                    <a href="index.html">
                                        <img src="images/dark-logo.png" alt="Cretesol" style="padding: 30px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="octf-col justify-content-end">
                            <div class="octf-search octf-cta-header">
                                <div class="toggle_search octf-cta-icons">
                                    <i class="ot-flaticon-search"></i>
                                </div>
                                <!-- Form Search on Header -->
                                <div class="h-search-form-field collapse">
                                    <div class="h-search-form-inner">
                                        <form role="search" method="get" class="search-form">
                                            <input type="search" class="search-field" placeholder="SEARCH..." value="" name="s">
                                            <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                                        </form>
                                    </div>                                  
                                </div>
                            </div>
                            <div class="octf-menu-mobile octf-cta-header">
                                <div id="mmenu-toggle" class="mmenu-toggle">
                                    <button><i class="ot-flaticon-menu"></i></button>
                                </div>
                                <div class="site-overlay mmenu-overlay"></div>
                                <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                    <div class="mmenu-inner">
                                        <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                        <div class="mobile-nav">
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                                <li class=" current-menu-item current-menu-ancestor">
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Products</a>
                                                <ul class="sub-menu">
                                                    <li><a href="tiles.html">Tiles</a></li>
                                                    <li><a href="">Stones</a></li>
                                                    <li><a href="">Waterjet & Mosaic</a></li>
                                                </ul>
                                            </li>
                                            <li class=""><a href="#">Projects</a>
                                            </li>
                                            
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="contact.html">Clients</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
