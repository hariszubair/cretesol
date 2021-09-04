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
                                        <img id="main_logo" src="{{asset('public/images/dark-logo.png')}}" alt="Cretesol" class="">
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

                                        <li id='product_link' class="menu-item-has-children current-menu-ancestor"><a href="#">Products</a>
                                            <ul class="sub-menu">
                                                @foreach(\App\Models\Category::all() as $cat)
                                                @if($category->parent_category && $category->parent_category->parent_category)
                                                <li class="{{$category->parent_category->parent_category->slug == $cat->slug ? 'current-menu-item' : ''}}" id='tile_sub_link'><a href="{{URL('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                                                @elseif ($category->parent_category)
                                                <li class="{{$category->parent_category->slug == $cat->slug ? 'current-menu-item' : ''}}" id='tile_sub_link'><a href="{{URL('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                                                @else
                                                <li class="{{$category->slug == $cat->slug ? 'current-menu-item' : ''}}" id='tile_sub_link'><a href="{{URL('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{URL('projects')}}">Projects</a>
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
                                    <img src="{{asset('public/images/dark-logo.png')}}" alt="Cretesol">
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
                                                    @foreach(\App\Models\Category::all() as $cat)
                                                    <li><a href="{{URL('category/'.$cat->slug)}}">{{$cat->name}}</a></li>
                                                    @endforeach

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

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-portfolio" style="background-image: url({{URL($category->image)}});">
            <div class="dcell">
                <div class="container" style="font-family:'sliderFont'">
                    <h1 class="page-title" style="font-family:'sliderFont'">{{$category->name}}</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{URL('/')}}">Home</a></li>
                        @if(count($products) > 0)
                        @if($products[0]->category && $products[0]->category->slug != $category->slug)
                        <li><a href="{{URL('category/'.$products[0]->category->slug)}}">{{$products[0]->category->name}}</a></li>
                        @endif
                        @if($products[0]->sub_category && $products[0]->sub_category->slug != $category->slug)
                        <li><a href="{{URL('sub_category/'.$products[0]->sub_category->slug)}}">{{$products[0]->sub_category->name}}</a></li>
                        @endif
                        @if($products[0]->third_category)
                        @endif
                        @endif
                        <li class="active">{{$category->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="our-portfolio" style="padding-top: 50px">
        <div class="container-fluid p-0">
            @if(count($products) > 0)
            <div class="row">
                <div class="col-lg-11 text-center theratio-align-center" style="margin-left:auto;margin-right:auto">
                    <div class="project-filter-wrapper">
                        <div class="projects-grid pf_4_cols style-2 p-info-s2 img-scale w-auto projects-metro">
                            <div class="grid-sizer"></div>
                            @foreach($products as $key=> $product)
                            @if(count($products) % 2 == 0 || $key < count($products) -1) <div class="project-item thumb2x">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="{{URL('product/'.$product->slug)}}">
                                            <img src="{{URL($product->compressed_image)}}" alt="Cretesol-{{$product->name}}" style="height:300px;object-fit:cover">
                                        </a>
                                        <div class="overlay">
                                            <h5>{{$product->name}}</h5>
                                            <i class="ot-flaticon-add"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5 class="bFont"><a class="title-link" href="{{URL('product/'.$product->slug)}}">{{$product->name}}</a></h5>
                                            <p class="portfolio-cates"><span class="aFont">{{$category->name}}</span></p>
                                        </div>
                                        <a class="overlay" href="portfolio-standar.html"></a>
                                    </div>
                                </div>
                        </div>
                        @else
                        <div class="project-item thumb2x" style="margin-left:25%">
                            <div class="projects-box">
                                <div class="projects-thumbnail">
                                    <a href="{{URL('product/'.$product->slug)}}">
                                        <img src="{{URL($product->compressed_image)}}" alt="Cretesol-{{$product->name}}" style="height:300px;object-fit:cover">
                                    </a>
                                    <div class="overlay">
                                        <h5>{{$product->name}}</h5>
                                        <i class="ot-flaticon-add"></i>
                                    </div>
                                </div>
                                <div class="portfolio-info">
                                    <div class="portfolio-info-inner">
                                        <h5 class="bFont"><a class="title-link" href="{{URL('product/'.$product->slug)}}">{{$product->name}}</a></h5>
                                        <p class="portfolio-cates"><span class="aFont">{{$category->name}}</span></p>
                                    </div>
                                    <a class="overlay" href="portfolio-standar.html"></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        @else
        <div style="text-align:center">
            No Product Available
        </div>
        @endif
</div>
</section>

@endsection