@extends('layouts.master')

@section('content')
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
                                        <a href="index.html">
                                            <img id="main_logo" src="images/dark-logo.png" alt="Cretesol" class="" >
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col no-padding">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li id='home_link' class=" current-menu-item current-menu-ancestor">
                                                <a href="{{URL('/')}}">Home</a>
                                            </li>
                                            <li id='product_link' class="menu-item-has-children"><a href="#">Products</a>
                                                <ul class="sub-menu">
                                                    @foreach(\App\Models\Category::all() as $category)
                                                    <li id='tile_sub_link'><a href="{{URL('category/'.$category->slug)}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class=""><a href="#">Projects</a>
                                            </li>
                                            
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="contact.html">Clients</a></li>

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
                                    <a href="index.html">
                                        <img src="images/dark-logo.png" alt="Cretesol" >
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
                                            <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                                <li class=" current-menu-item current-menu-ancestor">
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Products</a>
                                                <ul class="sub-menu">
                                                    <li><a href="tiles.html">Tiles</a></li>
                                                    <li><a href="">Stones</a></li>
                                                    <li><a href="">Waterjet & Mosaic</a></li>
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
            <div class="p-0">
                <div class="grid-lines grid-lines-horizontal z-index-1">
                    <span class="g-line-horizontal line-bottom color-line-secondary"></span>
                </div>
                <div class="grid-lines grid-lines-vertical z-index-1">
                    <span class="g-line-vertical line-left color-line-secondary"></span>
                    <span class="g-line-vertical line-right color-line-secondary"></span>
                </div>
                <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_one" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>
                        
                            <!-- SLIDE 1 -->
                            <li  data-index="rs-70" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://via.placeholder.com/1920x950.png"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider1.jpg" data-bgcolor='rgba(255,255,255,0)' style='' alt=""  data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina>
                                
                                <!-- LAYER 1  right image overlay dark-->

                                                            
                                <!-- LAYER 3  Thin text title-->
                                <div  class="tp-caption tp-resizeme tp-caption-big-first" 
                                    id="slide-70-layer-1" 
                                    data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']" 
                                    data-y="['center','center','center','center']" data-voffset="['-64','-72','-65','-50']" 
                                    data-fontsize="['206',150','0','0']"
                                    data-lineheight="['206','170','127','80']"
                                    data-letterspacing="['104','85','63','39']"
                                    data-fontweight="['900','900','900','900']"
                                    data-color="['transparent','transparent','transparent','transparent']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['center','center','center','center']"
                
                                    >Design
                                </div>
                                       
                                <!-- LAYER 4  Bold Title-->
                                <div class="tp-caption tp-resizeme tp-caption-main" 
                                    id="slide-70-layer-2" 
                                    data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']" 
                                    data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                                    data-fontsize="['93','72','55','40']"
                                    data-lineheight="['83','70','51','55']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-fontweight="['200','200','200','200']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                                    
                                    data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    >New Level of Interior 
                                </div>
                                                                    
                                <!-- LAYER 5  Paragraph-->
                                <div class="tp-caption tp-resizeme tp-desc" 
                                    id="slide-70-layer-3" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['center','center','center','center']" data-voffset="['54','43','31','15']" 
                                    data-fontsize="['19','18','17','16']"
                                    data-lineheight="['33','27','28','24']"
                                    data-width="['818','630','500','417']"
                                    data-weight="['500','500','500','500']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-whitespace="normal"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    
                                    data-textAlign="['center','center','center','center']"
                
                                    >We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?
                                    </div> 
        
                                <!-- LAYER 6  Read More-->
                                <div class="tp-caption rev-btn" 
                                    id="slide-70-layer-4" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                                    data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                                    data-fontsize="['13','18','17','0']"
                                    data-lineheight="['25','18','16','16']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"   
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                
                                    ><a href="portfolio-masonry.html" class="octf-btn octf-btn-primary btn-slider btn-large">View Projects</a>
                                </div>  
                       
                            </li>  
                                         

                            <!-- SLIDE 1 -->
                            <li data-index="rs-71" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://via.placeholder.com/1920x950.png"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider2.jpg" data-bgcolor='#ffffff' style='object-fit:cover;width:100%' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="off" data-no-retina>
                                  
                                                            
                                <!-- LAYER 3  Thin text title-->
                                <div class="tp-caption tp-resizeme tp-caption-big" 
                                    id="slide-71-layer-1" 
                                    data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']" 
                                    data-y="['center','center','center','center']" data-voffset="['-64','-72','-65','-50']" 
                                    data-fontsize="['206',150','0','0']"
                                    data-lineheight="['206','170','127','80']"
                                    data-letterspacing="['104','85','63','39']"
                                    data-fontweight="['900','900','900','900']"
                                    data-color="['transparent','transparent','transparent','transparent']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['center','center','center','center']"
                
                                    >Quality
                                </div>
                                       
                                <!-- LAYER 4  Bold Title-->
                                <div class="tp-caption tp-resizeme tp-caption-main" 
                                    id="slide-71-layer-2" 
                                    data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']" 
                                    data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                                    data-fontsize="['93','72','55','40']"
                                    data-lineheight="['83','70','51','55']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-fontweight="['200','200','200','200']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                                    
                                    data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    >High-end Interior Design
                                </div>
                                                                    
                                <!-- LAYER 5  Paragraph-->
                                <div class="tp-caption tp-resizeme tp-desc" 
                                    id="slide-71-layer-3" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['center','center','center','center']" data-voffset="['54','43','31','15']" 
                                    data-fontsize="['19','18','17','16']"
                                    data-lineheight="['33','27','28','24']"
                                    data-width="['818','630','500','417']"
                                    data-weight="['500','500','500','500']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-whitespace="normal"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    
                                    data-textAlign="['center','center','center','center']"
                
                                    >We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?
                                    </div> 
        
                                <!-- LAYER 6  Read More-->
                                <div class="tp-caption rev-btn" 
                                    id="slide-71-layer-4" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                                    data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                                    data-fontsize="['13','18','17','0']"
                                    data-lineheight="['25','18','16','16']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"   
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                
                                    ><a href="portfolio-masonry.html" class="octf-btn octf-btn-primary btn-slider btn-large">View Projects</a>
                                </div>  
                            </li>  

                            <!-- SLIDE 1 -->
                            <li data-index="rs-72" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="https://via.placeholder.com/1920x950.png"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="images/slider3.jpg" data-bgcolor='#ffffff' style='' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="off" data-no-retina>
                                
                                                            
                                <!-- LAYER 3  Thin text title-->
                                <div class="tp-caption tp-resizeme tp-caption-big" 
                                    id="slide-72-layer-1" 
                                    data-x="['center','center','center','center']" data-hoffset="['56','46','34','0']" 
                                    data-y="['center','center','center','center']" data-voffset="['-64','-72','-65','-50']" 
                                    data-fontsize="['206',150','0','0']"
                                    data-lineheight="['206','170','127','80']"
                                    data-letterspacing="['104','85','63','39']"
                                    data-fontweight="['900','900','900','900']"
                                    data-color="['transparent','transparent','transparent','transparent']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":500,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['center','center','center','center']"
                
                                    >Studio
                                </div>
                                       
                                <!-- LAYER 4  Bold Title-->
                                <div class="tp-caption tp-resizeme tp-caption-main" 
                                    id="slide-72-layer-2" 
                                    data-x="['center','center','center','center']" data-hoffset="['2','0','0','0']" 
                                    data-y="['center','center','center','center']" data-voffset="['-56','-63','-60','-65']"
                                    data-fontsize="['93','72','55','40']"
                                    data-lineheight="['83','70','51','55']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-fontweight="['200','200','200','200']"
                                    data-whitespace="nowrap"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                                    
                                    data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'

                                    data-textAlign="['left','left','left','left']"
                
                                    >Best Furniture and Decor
                                </div>
                                                                    
                                <!-- LAYER 5  Paragraph-->
                                <div class="tp-caption tp-resizeme tp-desc" 
                                    id="slide-72-layer-3" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['center','center','center','center']" data-voffset="['54','43','31','15']" 
                                    data-fontsize="['19','18','17','16']"
                                    data-lineheight="['33','27','28','24']"
                                    data-width="['818','630','500','417']"
                                    data-weight="['500','500','500','500']"
                                    data-color="['#fff','#fff','#fff','#fff']"
                                    data-whitespace="normal"
                         
                                    data-type="text" 
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    
                                    data-textAlign="['center','center','center','center']"
                
                                    >We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?
                                    </div> 
        
                                <!-- LAYER 6  Read More-->
                                <div class="tp-caption rev-btn" 
                                    id="slide-72-layer-4" 
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                                    data-y="['center','center','center','center']" data-voffset="['170','140','119','110']"
                                    data-fontsize="['13','18','17','0']"
                                    data-lineheight="['25','18','16','16']"
                                    data-width="none"
                                    data-height="none"
                                    data-whitespace="nowrap"   
                                    data-responsive_offset="on" 
                
                                    data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]'
                                    
                                    data-textAlign="['center','center','center','center']"
                                    data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                
                                    ><a href="portfolio-masonry.html" class="octf-btn octf-btn-primary btn-slider btn-large">View Projects</a>
                                </div>  
                            </li>  
                                                    
                  
                        </ul>
                        <div class="tp-bannertimer"></div>

                    </div>
                </div>
                <div class="banner-desc-1">
                    <ul>
                        <li><a href="https://www.instagram.com/cretesolofficial_" target="_blank"><span>instagram</span></a></li>
                        <li><a href="https://www.facebook.com/cretesol" target="_blank"><span>facebook</span></a></li>
                        <li><a href="https://pk.linkedin.com/company/cretesolstone" target="_blank"><span>linkedin</span></a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="container-fluid" style="padding-top: 20px">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 px-0">
                            <div class="cate-lines">
                                <div class="cate-item">
                                        <img src="images/office.jpg" alt="Cretesol-office-interior"  style="height:250px;width:100%;object-fit:cover">
                                    <div class="cate-item_content">
                                        <h2>Office Spaces<span class="number-stroke">01</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-0">
                            <div class="cate-lines">
                                <div class="cate-item">
                                        <img src="images/public.jpg" alt="Cretesol-public-interior"  style="height:250px;width:100%;object-fit:cover">
                                    <div class="cate-item_content">
                                       <h2>Public Spaces<span class="number-stroke">02</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 px-0">
                            <div class="cate-lines">
                                <div class="cate-item">
                                        <img src="images/residential.jpg" alt="Cretesol-residential-interior" style="height:250px;width:100%;object-fit:cover">
                                    <div class="cate-item_content">
                                       <h2>Residential </h2><h2>Spaces</h2><span class="number-stroke">03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="services-1">
                <div class="grid-lines grid-lines-vertical">
                    <span class="g-line-vertical line-left color-line-default"></span>
                    <span class="g-line-vertical line-center color-line-default"></span>
                    <span class="g-line-vertical line-right color-line-default"></span>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center Cretesol-align-center">
                            <div class="ot-heading " style="padding-bottom:30px">
                                <span>[ OUR SERVICES ]</span>
                                <h2 class="main-heading">What Can We Offer</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                    @foreach($categories as $category)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover text-center" style="background-image: url('{{substr($category->image, 1)}}');height: 300px;object-fit: cover;-webkit-filter: brightness(70%);">
                                <div class="content-box">
                                    <h2 style="color: white">{{$category->name}}</h2>
                                    
                                </div>
                                <div class="link-box">
                                    <a href="{{URL('category/'.$category->slug)}}" class="btn-details">VIEW MORE</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        <div class="space-120"></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="180" data-time="2000">180</span>
                                    <span>+]</span>
                                </div>
                                <h6>Current Clients</h6>                            
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-xl-0">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="10" data-time="2000">10</span>
                                    <span>+]</span>
                                </div>
                                <h6>years of experience</h6>                            
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4 mb-sm-0">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="35" data-time="2000">35</span>
                                    <span>+]</span>
                                </div>
                                <h6>awards winning</h6>                             
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="ot-counter">
                                <div>
                                    <span>[</span>
                                    <span class="num" data-to="5" data-time="2000">5</span>
                                    <span>+]</span>
                                </div>
                                <h6>Offices Worldwide</h6>                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="cta" style="background-image: url(images/touch.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mb-4 mb-lg-0">
                            <h2 class="text-light mb-0">Get Incredible Tiles Stones & Mosaic</h2>
                            <div class="space-5"></div>
                            
                        </div>
                        <div class="col-lg-4 text-left text-lg-right align-self-center">
                            <div class="ot-button">
                                <a href="contact.html" class="octf-btn octf-btn-light border-hover-light">get in touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        @endsection