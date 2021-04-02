       

    <footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <img src="images/white-logo.png" class="footer-logo" alt="">
                        <p>We provides a full range of interior design, architectural design.</p>
                        <div class="footer-social list-social">
                            <ul>
                                <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <h6>Contacts</h6>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="list-item-text">Cretesol_interior@mail.com</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="list-item-text">+1 800 456 789 123</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <div class="widget-footer widget-contact">
                        <h6><a href="{{URL('admin')}}">Admin Panel</a></h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Clients</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="widget-footer footer-widget-subcribe">
                        <h6>Subscribe</h6>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="subscribe-inner-form">
                                    <input type="email" name="EMAIL" placeholder="YOUR EMAIL" required="">
                                    <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <p>Follow our newsletter to stay updated about agency.</p>
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
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
        <!-- jQuery -->
<script src="{{asset('public/js/jquery.min.js')}}"></script>
<script src="{{asset('public/js/royal_preloader.min.js')}}"></script>
<script>
    $(document).ready(function() {
  window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           :   'progress',
                background     :   '#1a1a1a',
            });
        })(jQuery);
});
        
         $(window).on("scroll", function(){
        var site_header = $('#site-header').outerHeight() + 1;  
            
        if ($(window).scrollTop() >= site_header) { 
            $('.octf-mainbar-row').addClass('is-stuck'); 
            $('#main_logo').attr("src", "images/white-logo.png");  
        }else {
            $('.octf-mainbar-row').removeClass('is-stuck');  
            $('#main_logo').attr("src", "images/dark-logo.png");  
        }
    });
    </script>  
<script src="{{asset('public/js/mousewheel.min.js')}}"></script>
<script src="{{asset('public/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>


<script src="{{asset('public/js/jquery.isotope.min.js')}}"></script>



<script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/js/easypiechart.min.js')}}"></script>
<script src="{{asset('public/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/js/scripts.js')}}"></script>

    <!-- REVOLUTION JS FILES -->

    <script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script  src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="js/rev-script-1.js"></script>
    

                      @yield('footer')
</body>
</html>