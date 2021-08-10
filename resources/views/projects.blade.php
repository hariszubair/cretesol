@extends('layouts.master')

@section('content')
<style>
    .projects-grid.img-popup .projects-thumbnail .overlay h5 {
        padding-top: 50%;
        display: block !important;
    }

    .projects-grid.img-popup .projects-thumbnail .overlay {
        display: block !important;

    }

    .lg-sub-html {
        font-size: 22px !important;
        color: grey !important;

    }
</style>
<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
<link href="{{asset('css/lightgallery.css')}}" rel="stylesheet">
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
                                    <a href="{{URL('')}}">
                                        <img id="main_logo" src="images/dark-logo.png" alt="Cretesol" class="">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col menu-col no-padding">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu" style="font-family:'navBarFont'">
                                        <li id='home_link'>
                                            <a href="{{URL('/')}}">Home</a>
                                        </li>
                                        <li class=""><a href="{{URL('about_us')}}">About Us</a>
                                        <li id='product_link' class="menu-item-has-children"><a href="#">Products</a>
                                            <ul class="sub-menu">
                                                @foreach(\App\Models\Category::all() as $category)
                                                <li id='tile_sub_link'><a href="{{URL('category/'.$category->slug)}}">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class=" current-menu-item current-menu-ancestor"><a href="{{URL('projects')}}">Projects</a>
                                        </li>

                                        <li><a href="{{URL('contact_us')}}">Contact Us</a></li>
                                        <li><a href="{{URL('clients')}}">Clients</a></li>

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
                                <a href="{{URL('')}}">
                                    <img id="main_logo_mobile" src="images/dark-logo.png" alt="Cretesol">
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
                                        <ul id="menu-main-menu" class="mobile_mainmenu none-style" style="font-family:'navBarFont'">
                                            <li class=" current-menu-item current-menu-ancestor">
                                                <a href="{{URL('')}}">Home</a>
                                            </li>
                                            <li class=""><a href="{{URL('about_us')}}">About Us</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Products</a>
                                                <ul class="sub-menu">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                    <li><a href="{{URL('category/'.$category->slug)}}">{{$category->name}}</a></li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                            <li class=""><a href="{{URL('projects')}}">Projects</a>
                                            </li>

                                            <li><a href="{{URL('contact_us')}}">Contact Us</a></li>
                                            <li><a href="{{URL('clients')}}">Clients</a></li>
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

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent page-header-contact" style="background-image: url({{asset('images/header_project.jpg')}});">
            <div class="dcell">
                <div class="container  bFont">
                    <h1 class="page-title bFont">Projects</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{URL('')}}">Home</a></li>
                        <li class="active">Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="our-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots ">
                        <span>[ our portfolio ]</span>
                        <h2 class="main-heading aFont">Some of Our Works</h2>
                    </div>
                    <div class="space-40"></div>
                    <div class="project-filter-wrapper ">
                        <ul class="project_filters aFont">
                            <li><a href="#" data-filter="*" class="selected btn-details aFont">All<span class="filter-count"></span></a></li>
                            <li><a class="btn-details aFont" href="#" data-filter=".Commercial">Commercial<span class="filter-count"></span></a></li>
                            <li><a class="btn-details aFont" href="#" data-filter=".Public">Public<span class="filter-count"></span></a></li>
                            <li><a class="btn-details aFont" href="#" data-filter=".Residential">Residential<span class="filter-count"></span></a></li>
                        </ul>
                        <div class="projects-grid pf_3_cols style-4 img-popup img-scale w-auto row justify-content-center" style="height:370px">
                            <div class="grid-sizer"></div>
                            <div id="gallery-2" class="gallery gallery-columns-2 s2">

                                @foreach($projects as $project)
                                <div class="project-item {{$project->category}} ">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail" data-src="{{asset($project->image)}}">
                                            <a href="portfolio-standar.html">
                                                <img src="{{asset($project->compressed_image)}}" alt="{{$project->name}}" style="height:370px;width:370px;object-fit:cover">
                                            </a>
                                            <div class="overlay">

                                                <h5>{{$project->name}}</h5>
                                                <p style="color: grey;">{{$project->category}}</p>

                                                <!-- <i class="ot-flaticon-add"></i> -->
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-detail-slider.html">Stylish Family Appartment</a></h5>
                                                <p class="portfolio-cates"><a href="#">Interior</a></p>
                                            </div>
                                            <a class="overlay" href="portfolio-detail-slider.html"></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
    <script src="{{asset('public/js/jquery.min.js')}}"></script>

    <script src="{{asset('js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- <script src="{{asset('js/jquery.isotope.min.js')}}"></script> -->
    <!-- <script src="{{asset('js/owl.carousel.min.js')}}"></script> -->
    <!-- <script src="{{asset('js/mousewheel.min.js')}}"></script> -->
    <!-- <script src="{{asset('js/jquery.countdown.min.js')}}"></script> -->
    <script src=""></script>

    @endsection