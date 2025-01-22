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
                    <p></p>
                    <div class="back-about-image pt-30 pb-30">
                        <img src="{{ url('storage/'. $site->logo)}}" alt="Back Add">
                    </div>
                    <h4>Seputar Pasuruan x Sekoncoan Group</h4>
                    <p>Kenali dan Cintai Daerahmu</p>
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

</div>
@endsection