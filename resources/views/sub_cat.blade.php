@extends('layouts.master')

@section('content')
       

        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-portfolio" style="background-image: url({{URL($category->image)}});">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title">{{$category->name}}</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{URL('/')}}">Home</a></li>
                            <li class="active">{{$category->name}}</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
        <section class="our-portfolio" style="padding-top: 50px">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-12 text-center theratio-align-center">
                        <div class="project-filter-wrapper">
                            <div class="projects-grid pf_5_cols style-2 p-info-s2 img-scale w-auto no-gaps mx-0">
                                <div class="grid-sizer"></div>
                                <div class="project-item category-19 thumb2x">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-standar.html">
                                                <img src="https://via.placeholder.com/1440x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Stylish Family Appartment</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-standar.html">Stylish Family Appartment</a></h5>
                                                <p class="portfolio-cates"><a href="#">Interior</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-standar.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-14 ">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-detail-slider.html">
                                                <img src="https://via.placeholder.com/720x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Minimal Guests House</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-detail-slider.html">Minimal Guests House</a></h5>
                                                <p class="portfolio-cates">
                                                    <a href="#">Decor</a>
                                                    <a href="#">Interior</a>
                                                </p>
                                            </div>
                                            <a class="overlay" href="portfolio-detail-slider.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-15 ">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-left.html">
                                                <img src="https://via.placeholder.com/720x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Art Family Residence</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-left.html">Art Family Residence</a></h5>
                                                <p class="portfolio-cates"><a href="#">Architecture</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-left.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-20 ">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-right.html">
                                                <img src="https://via.placeholder.com/720x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Private House in Spain</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-right.html">Private House in Spain</a></h5>
                                                <p class="portfolio-cates"><a href="#">Furniture</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-right.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-19 ">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-small.html">
                                                <img src="https://via.placeholder.com/720x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Modern Villa in Belgium</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-small.html">Modern Villa in Belgium</a></h5>
                                                <p class="portfolio-cates"><a href="#">Furniture</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-small.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-14 thumb2x">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-big.html">
                                                <img src="https://via.placeholder.com/1440x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Minimalistic Style Appartment</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-big.html">Minimalistic Style Appartment</a></h5>
                                                <p class="portfolio-cates"><a href="#">Furniture</a><a href="#">interior</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-big.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-15">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-standar.html">
                                                <img src="https://via.placeholder.com/720x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Luxury Bathroom Interior</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-standar.html">Luxury Bathroom Interior</a></h5>
                                                <p class="portfolio-cates"><a href="#">decor</a><a href="#">Furniture</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-standar.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item category-14">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <a href="portfolio-detail-slider.html">
                                                <img src="https://via.placeholder.com/720x720.png" alt="">
                                            </a>
                                            <div class="overlay">
                                                <h5>Loft Kitchen Interior</h5>
                                                <i class="ot-flaticon-add"></i>
                                            </div>
                                        </div>
                                        <div class="portfolio-info">
                                            <div class="portfolio-info-inner">
                                                <h5><a class="title-link" href="portfolio-detail-slider.html">Loft Kitchen Interior</a></h5>
                                                <p class="portfolio-cates"><a href="#">architecture</a></p> 
                                            </div>
                                            <a class="overlay" href="portfolio-detail-slider.html"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-block text-center">
                                <a href="portfolio-five-column-wide.html" class="btn-loadmore octf-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endsection