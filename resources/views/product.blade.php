@extends('layouts.master')

@section('content')
<style>
    .projects-grid.pf_5_cols .project-item.thumb2x,
    .projects-grid.pf_5_cols .grid-sizer.thumb2x {
        width: 50%
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
                                        <img id="main_logo" src="{{asset('public/images/white-logo.png')}}" alt="Cretesol" class="">
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
                                                    @foreach(\App\Models\Category::all() as $category)
                                                    <li><a href="{{URL('category/'.$category->slug)}}">{{$category->name}}</a></li>
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
        <div class="page-header dtable text-center header-transparent pheader-portfolio-detail" style="background-image: url({{URL($product->image)}});">
            <div class="dcell">
                <div style="font-family:'sliderFont';background-color:black;opacity:0.75">

                    <div class="container" style="font-family:'sliderFont'">
                        <h1 class="page-title" style="font-family:'sliderFont'">{{$product->name}}</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{URL('')}}">Home</a></li>
                            @if($product->category_id)
                            <li><a href="{{URL('category/'.$product->category->slug)}}">{{$product->category->name}}</a></li>
                            @endif
                            @if($product->sub_category_id)
                            <li><a href="{{URL('sub_category/'.$product->sub_category->slug)}}">{{$product->sub_category->name}}</a></li>
                            @endif
                            @if($product->third_category_id)
                            <li><a href="{{URL('third_category/'.$product->third_category->slug)}}">{{$product->third_category->name}}</a></li>
                            @endif
                            <li class="active">{{$product->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="portfolio-detail p-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="space-90"></div>
                        <div class="gallery-post img-slider owl-carousel owl-theme">
                            @foreach($product->images as $image)
                            <div class="item-image">
                                <img src="{{URL($image->image)}}" alt="Cretesol-{{$product->name}}" style="height:600px;width:100%;object-fit:cover">
                            </div>
                            @endforeach
                        </div>
                        <div class="space-60"></div>
                    </div>
                    <div class="row" style="width: 100%;">
                        <div class="col-md-12">
                            <div class="" style="width: 100%;">
                                <div class="project-bottom" style="width: 100%;">
                                    <div class="portfolio-related-posts-wrap">
                                        <div class="portfolio-related-title-wrap">
                                            <h2 class="portfolio-related-title">Related Products</h2>
                                        </div>
                                        <div class="" style="width: 100%;">
                                            <div class="projects-grid pf_3_cols style-1 img-scale w-auto m-0" style="width: 100%;">
                                                @if(count($other_products) > 0)
                                                @foreach($other_products as $product)
                                                @if($product->first_image)
                                                <div class="project-item">
                                                    <div class="projects-box">
                                                        <div class="projects-thumbnail">
                                                            <a href="{{URL('product/'.$product->slug)}}">
                                                                <img src="{{asset($product->first_image->compressed_image)}}" alt="Cretesol-{{$product->name}}" style="height: 300px;object-fit:cover">
                                                            </a>
                                                            <span class="overlay">
                                                                <h5>{{$product->name}}</h5>
                                                                <i class="ot-flaticon-add"></i>
                                                            </span>
                                                        </div>
                                                        <div class="portfolio-info">
                                                            <div class="portfolio-info-inner">
                                                                <h5><a class="title-link" href="{{URL('product/'.$product->slug)}}">{{$product->name}}</a></h5>
                                                                <p class="portfolio-cates">
                                                                </p>
                                                            </div>
                                                            <a class="overlay" href="{{URL('product/'.$product->slug)}}"></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endif
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </section>
    </div>

    @endsection