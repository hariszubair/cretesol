@extends('layouts.master')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                                        <li class=" current-menu-item current-menu-ancestor"><a href="{{URL('about_us')}}">About Us</a>
                                        </li>
                                        <li id='product_link' class="menu-item-has-children"><a href="#">Products</a>
                                            <ul class="sub-menu">
                                                @foreach(\App\Models\Category::all() as $category)
                                                <li id='tile_sub_link'><a href="{{URL('category/'.$category->slug)}}">{{$category->name}}</a></li>
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
                                            <li>
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

                                            <li class=" current-menu-item current-menu-ancestor"><a href="{{URL('contact_us')}}">Contact Us</a></li>
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
        <div class="page-header dtable text-center header-transparent page-header-contact" style="background-image: url({{asset('images/header_about.jpg')}});">
            <div class="dcell">
                <div class="container bFont">
                    <h1 class="page-title bFont">About Us</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{URL('')}}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="about-company">
        <div class="container">
            <div class="row">
              
                <div class=" align-self-center">
                    <div class="">
                        <div class="ot-heading " style="margin-bottom: 0;">
                            <span>
                                Hello & Welcome
                            </span>
                            <!-- <h2 class="main-heading">Best Interior Solutions</h2> -->
                        </div>
                        <div style="text-align: justify;">
                            <p>At Cretesol we are passionate about bringing you the exquisite stone and tile designs. With a style to suit everyone’s taste, our extensive range enables you to personalize your living space as per your choice and aesthetics. We have travelled extensively around the world to bring you the latest trends, cutting-edge designs and advanced technologies to ensure that our product portfolio offers exceptional variety and value for money.
                                We pride ourselves on offering great quality and we work with internationally recognized independent body to test and maintain European quality standards. With recent introduction of affordable and sustainable quality tiles and stones we have enhanced our reach to meet your wide range of needs. Moreover, our well trained in-store specialists can assist you with every aspect of your stone and tile projects and support you to bring your vision to life. We hope you enjoy exploring our latest collections and we look forward to welcoming you in our stores soon.</p>
                        </div>
                        <div style="float: right;"><b>Dr.Jaleel Khan, CEO</b></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #0C0921;padding-bottom:0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading ">
                        <h2 class="main-heading" style="color: white;">Meet Cretesol</h2>
                        <div style="text-align: justify;padding:50px">
                            <p style="color: white;">Cretesol is one of the leading Stone & Tile Companies based in Pakistan. Founded in 2001, Cretesol has emerged as a “brand name” in providing premium quality stones and tiles while becoming a market leader and trend setter. Cretesol has showrooms in Islamabad (Flagship) & Karachi with “Country Wide Reach” and is renowned for carrying out “High Profile Projects” with Public and Private Sectors.
                                Cretesol has worked closely with architects, designers and builders to provide not only practical support, but also inspiring new ways to work with tiles and stones that challenge traditional thinking. This approach, combined with an innate solution-finding mentality and an eye for finesse and aesthetics, has led to the Cretesol name becoming synonymous with innovation, design and excellence.
                                Cretesol has a team of technical experts with the expertise to cover the different aspects of architectural design, and the ability to provide customers with the valuable support needed to tackle any aspect or problem related to the use of natural stone. In addition to walls & floors we provide complete customized solutions like Stone Waterjet, Mosaic Art, Artisan mosaics in both marble and metals available as standard items or bespoke.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>
    <section class="about-testi">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="ot-testimonials v-light">
                        <div class="testimonial-inner testi-col-3 owl-theme owl-carousel">
                            <div class="testi-item">
                                <div class="ttext" style="text-align:justify;">
                                    <div class="layer-behind"></div>
                                    <p style="text-align:center"><b>Vision</b><br></p>
                                    "To remain one of the leading stone and tile companies in the country by providing our valuable customers with high quality products that suit their needs while ensuring pleasing and satisfying experience through world- class standard of customer services."
                                </div>

                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <p style="text-align:center"><b>Mission</b><br></p>
                                    "Continuous innovation and improvement in our product selection and operational efficiency. Deliver uncompromising quality and creating value for customer with utmost integrity, respect and sincerity. To see the complete satisfaction in the eyes of our esteemed customers with a satisfying smile on their face."
                                </div>

                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <p style="text-align:center"><b>Values</b><br></p>
                                    <ul>
                                        <li>Unwavering commitment to exceed customers’ expectations.</li>
                                        <li>Professionalism, honesty and loyalty in all of our relationships.</li>
                                        <li>Creating value through quality material and value added services.</li>
                                        <li>Equality and empowerment of our team with healthy work environment.</li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection