@extends('layouts.master')

@section('content')
<style>
    .projects-grid.pf_5_cols .project-item.thumb2x,
    .projects-grid.pf_5_cols .grid-sizer.thumb2x {
        width: 50%
    }

    projects-grid .projects-box .portfolio-info {
        opacity: 1 !important;
    }

    .project-item.thumb2x.single {
        position: absolute;
        top: 50% !important;
        left: 50% !important;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>
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
                                        <img id="main_logo" class="logo-img" src="{{asset('public/images/white-logo.png')}}" alt="Cretesol" class="">
                                    </a>
                                </div>
                            </div>
                            <div class="octf-col menu-col no-padding">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu" style="font-family:'navBarFont'">
                                        <li id='home_link'>
                                            <a href="{{URL('/')}}">Home</a>
                                        </li>
                                        <li class=""><a href="{{URL('about_us')}}">Company</a>
                                        </li>

                                        <li id='product_link' class="menu-item-has-children current-menu-ancestor"><a href="#">Collections</a>
                                            <ul class="sub-menu">
                                                @foreach(\App\Models\Category::all() as $cat)
                                                <li class="{{$category->slug == $cat->slug ? 'current-menu-item' : ''}}" id='tile_sub_link'><a href="{{URL('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{URL('projects')}}">Projects</a>
                                        </li>

                                        <li><a href="{{URL('contact_us')}}">Connect</a></li>
                                        <li><a href="{{URL('clients')}}">Clients</a></li>

                                        @include('top_media_link')
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
                                    <img src="{{asset('public/images/white-logo.png')}}" alt="Cretesol">
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
                                            <li class=""><a href="{{URL('about_us')}}">Company</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Collections</a>
                                                <ul class="sub-menu">
                                                    @foreach(\App\Models\Category::all() as $cat)
                                                    <li><a href="{{URL('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                                                    @endforeach

                                                </ul>
                                            </li>
                                            <li class=""><a href="{{URL('projects')}}">Projects</a>
                                            </li>

                                            <li><a href="{{URL('contact_us')}}">Connect</a></li>
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
        <div class="page-header dtable text-center header-transparent pheader-portfolio" style="background-image: url({{URL($category->image)}});">
            <div class="dcell">
                <div style="font-family:'sliderFont';background-color:black;opacity:0.75">

                    <div class="container" style="font-family:'sliderFont'">
                        <h1 class="page-title" style="font-family:'sliderFont'">{{$category->name}}</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{URL('/')}}">Home</a></li>
                            <li class="active">{{$category->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="our-portfolio" style="padding: 50px 20px 50px 20px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center" style="margin-left:auto;margin-right:auto">
                    <div class="projects-grid pf_4_cols style-2 p-info-s2 img-scale w-auto projects-metro">

                        <div class="row justify-content-center ">
                            @foreach($category->sub_category as $key=> $sub_category)
                            <div class=" col-lg-6 col-md-6 col-sm-12" style="padding:10px">

                                <div class="">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="{{URL('sub_category/'.$sub_category->slug)}}">
                                                <img src="{{URL($sub_category->compressed_image)}}" alt="Cretesol-{{$sub_category->name}}" style="height:300px;object-fit:cover">
                                            </a>
                                            <div class="overlay">
                                                <h5>{{$sub_category->name}}</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5 class="bFont"><a class="title-link" href="{{URL('sub_category/'.$sub_category->slug)}}">{{$sub_category->name}}</a></h5>
                                                <p class="portfolio-cates"><span class="aFont">{{$category->name}}</span></p>
                                            </div>
                                            <a class="overlay" href="portfolio-standar.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- style="position: absolute;top: 50%;left: 50%;-ms-transform: translate(-50%, -50%);transform: translate(-50%, -50%); " -->

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @endsection