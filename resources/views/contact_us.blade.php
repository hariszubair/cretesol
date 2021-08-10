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
                                        <li class=""><a href="{{URL('about_us')}}">About Us</a>

                                        <li id='product_link' class="menu-item-has-children"><a href="#">Products</a>
                                            <ul class="sub-menu">
                                                @foreach(\App\Models\Category::all() as $category)
                                                <li id='tile_sub_link'><a href="{{URL('category/'.$category->slug)}}">{{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{URL('projects')}}">Projects</a>
                                        </li>

                                        <li class=" current-menu-item current-menu-ancestor"><a href="{{URL('contact_us')}}">Contact Us</a></li>
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
        <div class="page-header dtable text-center header-transparent page-header-contact" style="background-image: url({{asset('images/header_contact.jpg')}});">
            <div class="dcell">
                <div class="container bFont">
                    <h1 class="page-title bFont">Contact</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{URL('')}}">Home</a></li>
                        <li class="active">Contacts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <div class="contact-left aFont" id="form">
                        <h2 class="aFont">Get in Touch</h2>
                        <p class="font14">Your email address will not be published. Required fields are marked *</p>
                        <form class="wpcf7" id="contact_form">
                            <div class="main-form bFont">
                                <p>
                                    <input type="text" name="name" value="" size="40" class="" aria-invalid="false" placeholder="Your Name *" required>
                                </p>
                                <p>
                                    <input type="email" name="email" value="" size="40" class="" aria-invalid="false" placeholder="Your Email *" required>
                                </p>
                                <p>
                                    <input type="text" name="number" value="" size="40" class="number_only" aria-invalid="false" placeholder="Your Number *" required>
                                </p>
                                <p>
                                    <textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                </p>
                                <p><button type="submit" class="octf-btn">Send Message</button></p>
                            </div>
                        </form>
                    </div>
                    <div class="contact-left" id="form_message" style="display: none;">
                        <h1 style="color: green;">We Will contact you soon!</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right" style="background-image: url({{asset('images/bg1-contact.jpg')}});">
                        <div class="ot-heading">
                            <span>[ our contact details ]</span>
                            <h2 class="main-heading bFont">Let's Start a Project</h2>
                        </div>
                        <p class="aFont">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>

                        <div class="contact-info aFont">
                            <i class="ot-flaticon-mail"></i>
                            <div class="info-text">
                                <h6>OUR MAILBOX:</h6>
                                <p><a href="mailto:marketing@cretesol.com">marketing@cretesol.com</a></p>
                            </div>
                        </div>
                        <div class="contact-info aFont">
                            <i class="ot-flaticon-phone-call"></i>
                            <div class="info-text">
                                <h6>OUR PHONE:</h6>
                                <p><a href="tel:03358855855">03358855855</a></p>
                            </div>
                        </div>
                        <div class="contact-info aFont">
                            <i class="ot-flaticon-phone-call"></i>
                            <div class="info-text">
                                <h6>OUR PHONE:</h6>
                                <p><a href="tel:03358855855">03405550913</a></p>
                            </div>
                        </div>
                        <div class="list-social">
                            <ul>
                                <li><a href="https://www.facebook.com/cretesol" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://pk.linkedin.com/company/cretesolstone" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/cretesolofficial_" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6641.237747735013!2d73.059344!3d33.667036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbad816bead77d715!2sCretesol!5e0!3m2!1sen!2sus!4v1618064014887!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        $("#contact_form").submit(function(event) {
            event.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: './contact_form',
                data: $(this).serialize(),
                type: 'POST',
                success: function(data) {
                    $('#form').hide();
                    $('#form_message').show();
                }
            });
        });
    </script>
    @endsection