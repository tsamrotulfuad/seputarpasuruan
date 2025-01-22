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
                        @foreach ($sosmed as $data)
                        <li>
                            <div><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a><span>Follow </span></div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="back-title back-small-title pt-30">
                        <h2>Latest Posts</h2>
                    </div>
                    <ul class="back-hero-bottom">
                    @foreach ($latest_post as $data)
                    <li>
                        <div class="image-areas">
                            <a href="{{ route('post.show', $data->slug) }}"><img src="{{ url('storage/'.$data->featured_image) }}" alt="image"></a>
                        </div>
                        <div class="back-btm-content">
                            <a href="{{ route('kategori', $data->kategori) }}" class="back-cates">{{ $data->kategori}}</a>
                            <h3><a href="{{ route('post.show', $data->slug) }}">{{ \Illuminate\Support\Str::words($data->judul) }}</a></h3>
                            <ul>
                                <li class="back-date">by <a href="#" style="margin-left: 5px;"> {{ $data->author }} </a></li>
                            </ul>
                        </div>
                    </li>
                    @endforeach
                    </ul>
                    <!--  -->
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