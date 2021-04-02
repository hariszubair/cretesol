@extends('layouts.master')

@section('content')
      
        <div id="side-panel" class="side-panel">
            <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
            <div class="side-panel-block">
                <div class="side-panel-wrap">
                    <div class="the-logo">
                        <a href="index-html">
                            <img src="images/logo-footer.svg" alt="Theratio">
                        </a>                    
                    </div>
                    <div class="ot-heading">
                        <h2 class="main-heading">Our Gallery</h2>
                    </div>
                    <div class="image-gallery">
                        <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a href="https://via.placeholder.com/1440x830.png">
                                        <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                                    </a>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="ot-heading ">
                        <h2 class="main-heading">Contact Info</h2>
                    </div>
                    <div class="side-panel-cinfo">
                        <ul class="panel-cinfo">
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="panel-list-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="panel-list-text">theratio_interior@mail.com</span>
                            </li>
                            <li class="panel-list-item">
                                <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="panel-list-text">+1 800 456 789 123</span>
                            </li>
                        </ul>
                    </div>
                    <div class="side-panel-social">
                        <ul>
                            <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent " style="background-image: url('images/tiles_main.jpg');">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title"><b>TILES</b></h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="{{URL('/')}}">Home</a></li>
                            <li class="active">Tiles</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>

        <section class="services-single">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="services-detail-content">
                            <div class="ot-heading " style="text-align:center">
                                <span>[ We deal in all kind of tiles ]</span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 text-center">
                            <div class="icon-main"><img src="https://via.placeholder.com/74x84.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="servcies-detail-1.html">Design & Planning</a></h5>
                                <p>We will help you to get the result you dreamed of.</p>
                            </div>
                            <div class="link-box">
                                <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-2 text-center">
                            <div class="icon-main"><img src="https://via.placeholder.com/74x84.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="servcies-detail-1.html">Custom Solutions</a></h5>
                                <p>Individual, aesthetically stunning solutions for customers.</p>
                            </div>
                            <div class="link-box">
                                <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-3 text-center">
                            <div class="icon-main"><img src="https://via.placeholder.com/74x84.png" alt=""></div>
                            <div class="content-box">
                                <h5><a href="servcies-detail-1.html">Furniture & Decor</a></h5>
                                <p>We create and produce our product design lines.</p>
                            </div>
                            <div class="link-box">
                                <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-60"></div>
                </div>
                </div>
            </div>
        </section>

        @endsection

        @section('footer')
        <script type="text/javascript">
        $('.current-menu-ancestor').removeClass('current-menu-ancestor');
        $('.current-menu-item').removeClass('current-menu-item');

        $('#product_link').addClass('current-menu-ancestor');
        $('#mosaic_sub_link').addClass('current-menu-item');

        </script>
        @endsection