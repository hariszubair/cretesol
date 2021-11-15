<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0" style="padding-top:15px">
                <div class="widget-footer gotham-light" style="font-weight: lighter;;font-size: 14px;">
                    <!-- <img src="{{asset('images/white-logo.png')}}" class="footer-logo" alt=""> -->
                    <p style="text-align: justify;">With dynamism, originality and expertise, using production processes characterised by quality and technological inovation.</p>
                    <div class="footer-social list-social">
                        <ul>
                            <li><a href="https://www.facebook.com/cretesol" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://pk.linkedin.com/company/cretesolstone" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/cretesolofficial_" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/cretesol" target="_self"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCLj6vtaa0U2CDy2b09RbD3Q" target="_self"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer gotham-light" style="font-weight: lighter;font-size: 14px;">
                    <h6 style="margin-bottom:10px;font-size:16px">CONTACTS</h6>
                    <ul class="footer-list">
                        <li style="padding-bottom:10px">
                            <span>Email: marketing@cretesol.com</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Call/WApp</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Islamabad: 0335 8855855</span>
                        </li>
                        <li style="padding-bottom:10px;line-height:1.2">
                            <span class="list-item-text">Karachi: 0345 5564838</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Timings:</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Monday to Saturday - 10:00AM - 7:00PM</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Friday Break- 1:00pm to 2:45pm</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Sunday - Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer gotham-light" style="font-weight: lighter;font-size: 14px;">
                    <h6 style="margin-bottom:10px;font-size:16px"> LOCATIONS</h6>
                    <ul class="footer-list">
                        <li style="padding-bottom:0px;line-height:1.2">
                            <span class="list-item-text">ISLAMABAD

                            </span>
                        </li>
                        <li style="padding-bottom:10px;line-height:1.2">
                            <span class="list-item-text">P.399 Sector I-9/3, Industrial Area, Islamabad</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">Karachi</span>
                        </li>
                        <li style="padding:0px;line-height:1.2">
                            <span class="list-item-text">90C, Main Khayaban-e-Ittehad,
                                Phase II Extension DHA</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="widget-footer gotham-light" style="font-weight: lighter;font-size: 14px;">
                    <h6 class="" style="font-size:16px;margin-bottom:10px"><a href="{{URL('dashboard')}}" style="color:white">Admin Panel</a></h6>
                    <ul class="">
                        <li style="padding-bottom: 10px;"><a href="{{URL('contact_us')}}">Contact Us</a></li>
                        <li style="padding-bottom: 10px;"><a href="{{URL('projects')}}">Projects</a></li>
                        <li style="padding-bottom: 10px;"><a href="{{URL('clients')}}">Clients</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->
<div class="footer-bottom gotham-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <p>Copyright © 2020 Cretesol. All Rights Reserved.</p>
            </div>
            <div class="col-lg-5 col-md-12 align-self-center">

            </div>
        </div>
    </div>
</div>
</div><!-- #page -->
<!-- jQuery -->
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/royal_preloader.min.js')}}"></script>
<script>
    $(document).ready(function() {
        window.jQuery = window.$ = jQuery;
        (function($) {
            "use strict";
            //Preloader
            Royal_Preloader.config({
                mode: 'progress',
                background: '#1a1a1a',
            });
        })(jQuery);

    });

    // $(window).on("scroll", function() {
    //     console.log(window.location.origin)
    //     var site_header = $('#site-header').outerHeight() + 1;

    //     if ($(window).scrollTop() >= site_header) {
    //         $('.octf-mainbar-row').addClass('is-stuck');
    //         $('#main_logo').attr("src", "{{asset('images/white-logo.png')}}");
    //         $('#main_logo_mobile').attr("src", "{{asset('images/white-logo.png')}}");
    //     } else {
    //         $('.octf-mainbar-row').removeClass('is-stuck');
    //         $('#main_logo').attr("src", "{{asset('images/dark-logo.png')}}");
    //         $('#main_logo_mobile').attr("src", "{{asset('images/dark-logo.png')}}");

    //     }
    // });
    $('.number_only').on('input', function(event) {
        var patt = /^[\d]+$/gm;
        if (!patt.test($(this).val())) {
            $(this).val($(this).val().replace(/[^\d]/g, ''));

        }
    });
    $(".cat").click(function() {
        window.location = $(this).find("a").attr("href");
        return false;
    });
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/60e9724f649e0a0a5ccb8153/1fa7ud2c5';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    Tawk_API.onOfflineSubmit = function(data) {
        //place your code here
        console.log(data);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: './tawk_form',
            data: {
                name: data.questions[1].answer,
                number: data.questions[2].answer,
                email: data.questions[3].answer,
                message: data.questions[4].answer
            },
            type: 'POST',
        });


    };

    $('#greetingsMainContainer').css("background-color", "#2a2828");
</script>
<script src="{{asset('public/js/mousewheel.min.js')}}"></script>
<script src="{{asset('public/js/lightgallery-all.min.js')}}"></script>
<!-- <script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script> -->


<script src="{{asset('public/js/jquery.isotope.min.js')}}"></script>



<script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
<!-- <script src="{{asset('public/js/easypiechart.min.js')}}"></script> -->
<!-- <script src="{{asset('public/js/jquery.countdown.min.js')}}"></script> -->
<script src="{{asset('public/js/scripts.js')}}"></script>

<!-- REVOLUTION JS FILES -->

<script src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="{{asset('js/rev-script-1.js')}}"></script>


@yield('footer')

<style>
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
</style>
<!-- REVOLUTION SLIDER CSS -->
<link href="{{asset('plugins/revolution/revolution/css/settings.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">

</body>

</html>