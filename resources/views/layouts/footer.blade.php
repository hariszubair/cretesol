<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0" style="padding-top:15px">
                <div class="widget-footer navBarFont">
                    <!-- <img src="{{asset('images/white-logo.png')}}" class="footer-logo" alt=""> -->
                    <p>We provide a full range of interior design.</p>
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
                <div class="widget-footer navBarFont">
                    <h6>Contacts</h6>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                            <span class="list-item-text">marketing@cretesol.com</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">03358855855</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">03405550913</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="fas fa-clock"></i></span>
                            <span class="list-item-text" style="line-height:2px">Monday to Saturday <br> 10:00am to 7:00pm
                                <br> Friday Break- 1:00pm to 2:45pm
                                Sunday - Closed
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer navBarFont">
                    <h6>Address</h6>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <span class="list-item-text" style="padding-left:0"><b>Islamabad Showroom (Flagship)</b> <br>
                                <p style="padding-top:20px">Plot No.399 Sector I-9/3</p>
                                <p>Industrial Area, Islamabad</p>
                                <b>
                                    <p>Karachi Showroom</p>
                                </b>
                                <p>90C, Main Khayaban-e-Ittehad,</p>
                                Phase II Extension DHA
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                <div class="widget-footer ">
                    <h6 class="navBarFont" style="margin-bottom:35px"><a href="{{URL('dashboard')}}" style="color:white">Admin Panel</a></h6>
                    <ul class="navBarFont footer-list" style="padding:0">
                        <li><a href="{{URL('contact_us')}}">Contact Us</a></li>
                        <li><a href="{{URL('projects')}}">Projects</a></li>
                        <li><a href="{{URL('clients')}}">Clients</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->
<div class="footer-bottom">
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

    $(window).on("scroll", function() {
        console.log(window.location.origin)
        var site_header = $('#site-header').outerHeight() + 1;

        if ($(window).scrollTop() >= site_header) {
            $('.octf-mainbar-row').addClass('is-stuck');
            $('#main_logo').attr("src", "{{asset('images/white-logo.png')}}");
            $('#main_logo_mobile').attr("src", "{{asset('images/white-logo.png')}}");
        } else {
            $('.octf-mainbar-row').removeClass('is-stuck');
            $('#main_logo').attr("src", "{{asset('images/dark-logo.png')}}");
            $('#main_logo_mobile').attr("src", "{{asset('images/dark-logo.png')}}");

        }
    });
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
</body>

</html>