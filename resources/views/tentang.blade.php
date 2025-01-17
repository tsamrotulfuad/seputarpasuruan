@extends('welcome')
@section('content')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">{{$title }}</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>{{$title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <!--================= Back Whats Posts Start Here =================-->
    <div class="back-hero-area back-latest-posts back-whats-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="back-title">
                        <h2>Who we Are?</h2>
                    </div>
                    <p>Possimus labore ad tempora blandit totam blanditiis fusce urna mollit facilisi expedita? Sociis, facilisis adipisci maiores dolores voluptate odio magna eius iste facilisi illo, illo elementum per interdum! Odit pellentesque atque commodi, hic hendrerit leo commodo voluptates maiores mollit, dolor voluptatem recusandae dolorem dolore hac, iaculis, aliquet! Earum facere, nihil, sodales cillum! Arcu pulvinar, temporibus integer ullamcorper.</p>
                    <div class="back-about-image pt-30 pb-30">
                        <img src="assets/images/about.png" alt="Back Add">
                    </div>
                    <h4>Unique visual system and method.</h4>
                    <p>Rhoncus urna aliquet? Magni varius? Tempora penatibus odio quas quis cupidatat magni? Dis exercitation, dignissimos vestibulum? Totam nihil, pulvinar etiam platea itaque, officia? Cillum auctor facilis, eu nostra euismod explicabo. Voluptate eget ullam omnis habitant sociis vivamus.</p>
                    <ul class="dot-list">
                        <li>User Experience</li>
                        <li>Unique layouts Blocks</li>
                        <li>Strategy and Art Direction</li>
                    </ul>
                    <p>Adipisci, reprehenderit platea cras ut quia consectetur convallis.</p>
                    <div class="pt-20">
                        <a href="{{ route('home.kontak')}}" class="back-btn">Kontak Kami</a>
                    </div>
                </div>
                <div class="col-lg-4 pl-30 md-pt-45">
                    <div class="back-title back-small-title">
                        <h2>Get in Touch</h2>
                    </div>
                    <ul class="social-area">
                        <li>
                            <div><a href="#"><i class="fa-brands fa-facebook-f"></i></a> <span>Followers <em>750</em></span></div>
                        </li>
                        <li>
                            <div><a href="#"><i class="fa-brands fa-twitter"></i></a> <span>Fans <em>1236</em></span></div>
                        </li>
                        <li>
                            <div><a href="#"><i class="fa-brands fa-instagram"></i></a> <span>Likes <em>523</em></span></div>
                        </li>
                        <li>
                            <div><a href="#"><i class="fa-brands fa-vimeo-v"></i></a> <span>Comments <em>790</em></span></div>
                        </li>
                        <li>
                            <div><a href="#"><i class="fa-brands fa-linkedin-in"></i></a> <span>Followers <em>1025</em></span></div>
                        </li>
                        <li>
                            <div><a href="#"><i class="fa-brands fa-youtube"></i></a> <span>Subscribers <em>590M</em></span></div>
                        </li>
                    </ul>
                    <div class="back-title back-small-title pt-30">
                        <h2>Latest Posts</h2>
                    </div>
                    <ul class="back-hero-bottom">
                        <li>
                            <div class="image-areas">
                                <a href="#"><img src="assets/images/dont/1.jpg" alt="image"></a>
                            </div>
                            <div class="back-btm-content">
                                <a href="#" class="back-cates">Politics</a>
                                <h3><a href="#">Time can never stop for anyone</a></h3>
                                <ul>
                                    <li class="back-date">by <a href="#">Jon Deo </a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="image-areas">
                                <a href="#"><img src="assets/images/dont/2.jpg" alt="image"></a>
                            </div>
                            <div class="back-btm-content">
                                <a href="#" class="back-cates">Music</a>
                                <h3><a href="#">Everyone loves to listen to music</a></h3>
                                <ul>
                                    <li class="back-date">by <a href="#">Jon Deo </a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="image-areas">
                                <a href="#"><img src="assets/images/dont/3.jpg" alt="image"></a>
                            </div>
                            <div class="back-btm-content">
                                <a href="#" class="back-cates">Lifestyle</a>
                                <h3><a href="#">10 easy habits to make your life</a></h3>
                                <ul>
                                    <li class="back-date">by <a href="#">Jon Deo </a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="image-areas">
                                <a href="#"><img src="assets/images/dont/4.jpg" alt="image"></a>
                            </div>
                            <div class="back-btm-content">
                                <a href="#" class="back-cates">Travel</a>
                                <h3><a href="#">World tranding best 10 website</a></h3>
                                <ul>
                                    <li class="back-date">by <a href="#">Jon Deo </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="back-title back-small-title pt-25">
                        <h2>Follow Us</h2>
                    </div>
                    <ul class="back-instragram">
                        <li><a href="#"> <img src="assets/images/instragram/1.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"> <img src="assets/images/instragram/2.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"> <img src="assets/images/instragram/3.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"> <img src="assets/images/instragram/4.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"> <img src="assets/images/instragram/5.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"> <img src="assets/images/instragram/6.jpg" alt="image"> <i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Whats Posts End Here =================-->

    <!--================= Back Team Section Start Here =================-->
    <div class="back-team">
        <div class="container">
            <div class="back-title">
                <h2>Meet Our Team</h2>
            </div>
            <div class="team-slider owl-carousel">
                <div class="single-team">
                    <div class="team-img">
                        <img src="assets/images/team/1.jpg" alt="Team Image">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h3 class="name">Andrew Flintof Jr</h3>
                        <p class="desgnation">Sr. Creative Director</p>
                    </div>
                </div>

                <div class="single-team">
                    <div class="team-img">
                        <img src="assets/images/team/2.jpg" alt="Team Image">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h3 class="name">Halle Berry Nastia</h3>
                        <p class="desgnation">Art Director</p>
                    </div>
                </div>

                <div class="single-team">
                    <div class="team-img">
                        <img src="assets/images/team/3.jpg" alt="Team Image">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h3 class="name">Glenn Close Rossie</h3>
                        <p class="desgnation">Marketing Head</p>
                    </div>
                </div>

                <div class="single-team">
                    <div class="team-img">
                        <img src="assets/images/team/4.jpg" alt="Team Image">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h3 class="name">Johnny Depp Bosman</h3>
                        <p class="desgnation">Manager & CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection