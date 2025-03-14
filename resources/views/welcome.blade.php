<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--================= Meta tag =================-->
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="description" content="Seputar Pasuruan - Kenali dan Cintai Daerahmu">
        <meta name="keywords" content="seputarpasuruan Seputar Pasuruan seputar pasuruan">
        <meta name="author" content="sekoncoan group">
        <!--================= Responsive Tag =================-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="{{ asset('img/seputarpasuruan.png') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/seputarpasuruan.png') }}">        
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">        
        <!--================= Fontawesome  css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css') }}">       
        <!--================= Rounded  css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rounded.css') }}">
        <!--================= Back Menus css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/back-menus.css') }}">               
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}"> 
        <!--================= Style css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
        <!--================= Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/back-spacing.css') }}">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body> 
        <!--================= Back offcanvas Start Here =================--> 
        <div class="back-offcanvas"></div>
        <div class="back-canvas">
            <div class="close-btn">
                <a id="nav-close" class="nav-close">
                    <div class="back-close">
                        <span class="line1"></span>
                        <span class="line2"></span>
                    </div>
                </a>
            </div>
            <div class="offback-logo">
                <a href="/" class="logo-text"> <img src="{{ url('storage/'.$site->logo )}}" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                <p>{{ $site->deskripsi }}</p>
            </div>

            <div class="back-title back-small-title">
                <h2>Hubungi Kami</h2>
            </div> 
            <div class="canvas-contact">
                <div class="address-area">
                    <div class="address-list">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Alamat</h4>
                            <em>{{ $site->alamat }}</em>
                        </div>
                    </div>
                    <div class="address-list">
                        <div class="info-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="info-content">
                            <h4 class="title">Email</h4>
                            <em><a href="mailto:backtheme@gmail.com">{{ $site->email }}</a></em>
                        </div>
                     </div>
                    <div class="address-list">
                        <div class="info-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="info-content">
                          <h4 class="title">Telpon</h4>
                          <em>{{ $site->telpon }}</em>
                        </div>
                    </div>
                </div>
                <ul class="social-links">
                    @foreach ($sosmed as $data)
                        <li><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--================= Back offcanvas End Here=================-->
        
        <!--================= Preloader Section Start Here =================-->        
        <div id="back__preloader">
            <div id="back__circle_loader"></div>
            <div class="back__loader_logo"><img src="{{ asset('img/seputarpasuruan.png') }}" alt="Preload"></div>
        </div>        
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        <header id="back-header" class="back-header">
            <!--================= Topbar Section Start Here =================-->
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="toolbar-text">
                                <div class="latest-news-title">LATEST NEWS</div>
                                <div class="latest-news">
                                    <div class="back-topbar-slider owl-carousel">
                                        @foreach ($top_latest_news as $data)
                                            <div>{!! \Illuminate\Support\Str::words($data->judul) !!}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="toolbar-content">
                                <div class="toolbar-sl-share">
                                    <ul>
                                        <li class="back-follow">Ikuti Kami</li>
                                        @foreach ($sosmed as $data)
                                            <li><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Topbar Section End Here =================-->
            <div class="menu-part header-style2">
                <div class="container">
                    <!--================= Back Menu Start Here =================-->
                    <div class="back-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                            <div class="menu-toggle">
                                <div class="logo"><a href="/" class="logo-text"> <img class="back-logo-dark" src="{{ asset('img/seputarpasuruan.png') }}" alt="logo"> <img class="back-logo-light" src="{{ asset('img/seputarpasuruan.png') }}" alt="logo"> </a></div>

                                <div class="searchbar-part back-search-mobile"> 
                                    <ul>
                                        <li class="back-dark-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light1"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark1"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></li>
                                        <li class="back_search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></li>
                                        
                                        <li id="nav-expanders" class="nav-expander bar">
                                            <span class="back-hum1"></span>
                                            <span class="back-hum2"></span>
                                            <span class="back-hum3"></span>
                                        </li>
                                    </ul>                                 
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Search Here">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>

                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================--> 
                            <div class="back-inner-menus">
                                <ul id="backmenu" class="back-menus back-sub-shadow">
                                    <li> <a href="{{ route('home') }}">Home</a></li>
                                    <li> <a href="/kategori/berita">Berita</a></li>
                                    <li> <a href="{{ route('home.kontak') }}">Kontak</a></li>
                                    <li> <a href="{{ route('home.tentang') }}">Tentang Kami</a></li>
                                </ul>
                                
                                <div class="searchbar-part back-search-desktop"> 
                                    <ul>
                                        <li class="back-dark-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun back-go-light"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon back-go-dark"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></li>
                                        <li class="back_search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></li>
                                        <li id="nav-expander" class="nav-expander bar">
                                            <span class="back-hum1"></span>
                                            <span class="back-hum2"></span>
                                            <span class="back-hum3"></span>
                                        </li>
                                    </ul>                                  
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Search Here">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>                                
                            </div>                            
                        </nav>
                    </div>
                    <!--=================  Back Menu End Here  =================-->
                </div>
            </div>
        </header>
        <!--================= Header Section End Here =================-->

        <!--================= Back Wrapper Start Here =================-->
        @yield('content')
        <!--================= Back Wrapper End Here =================-->

        <!--================= Footer Section Start Here =================-->
        <footer id="back-footer" class="back-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 md-mb-30">
                            <div class="footer-widget footer-widget-1">
                                <div class="footer-logo white">
                                    <a href="index.html" class="logo-text"> <img src="{{ url('storage/'.$site->logo )}}" alt="logo"></a>
                                </div>
                                <h5 class="footer-subtitle">{{ $site->deskripsi }}</h5>
                                <h6 class="back-follow-us">Ikuti Kami</h6>
                                <ul class="social-links">                                    
                                @foreach ($sosmed as $data)
                                    <li><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a></li>
                                @endforeach
                                </ul>                                
                            </div>
                        </div>
                        <div class="col-lg-3 md-mb-30">
                            <div class="footer-widget footer-widget-2">
                                <h3 class="footer-title">Tags</h3>
                                <div class="footer-tag">
                                    <ul>
                                        @foreach ($tags as $data)
                                        <li><a href="{{ $data->link }}">{{ $data->nama }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 md-mb-30">
                            <div class="footer-widget footer-widget-2">
                                <h3 class="footer-title">Tautan Cepat</h3>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="{{ route('home.kontak')}}">Kontak</a></li>
                                        <li><a href="{{ route('home.tentang')}}">Tentang Kami</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-widget footer-widget-3">
                                <h3 class="footer-title">Newsletter</h3>
                                <h5 class="footer-subtitle">Subscribe to our mailing list to <br>get the new updates!</h5>
                                <form class="back-newsletter">
                                    <input type="email" placeholder="Enter Your Email">
                                    <button type="submit">Subscribe</button>
                                </form>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="copyright">  
                <div class="container">                  
                    <div class="back-copy-left">@ {{ $tahun }} Copyright Sekoncoan Group</a></div>
                    <div class="back-copy-right">
                        <ul>
                            <!-- <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================= Footer Section End Here =================-->
        
        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp">
            <span aria-hidden="true" class="fi-rr-arrow-small-up"></span>
        </div> 
        <!--================= Scroll to Top End =================-->

        <!--================= Jquery latest version =================-->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <!--================= Bootstrap js =================-->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <!--================= Owl Carousel js =================-->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <!--================= Magnific Popup =================-->
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--================= Wow js =================-->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>                
        <!--================= Back menus js =================-->
        <script src="{{ asset('assets/js/back-menus.js')}}"></script>
        <!--================= Plugins js =================-->
        <script src="{{ asset('assets/js/plugins.js')}}"></script>       
		<!--================= Main js =================-->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        @stack('disqus')
    </body>
</html>