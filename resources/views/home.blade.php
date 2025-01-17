@extends('welcome')
@section('content')
<div class="back-wrapper">
    <!--================= Back Home2 Slider Start Here =================-->
    <div class="back-home2-slider-area back-home3-slider-area">
        <div class="container">
            <ul class="back-hero-bottom-two back-hero-slider3 owl-carousel">
                @foreach ($top_post as $data)
                <li>
                    <div class="image-areas">
                        <a href="{{ route('post.show', $data->slug) }}"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                    </div>
                    <div class="back-btm-content">
                        <a href="{{ route('kategori', $data->kategori_slug) }}" class="back-cates">{{ $data->kategori }}</a>
                        <h3><a href="{{ route('post.show', $data->slug) }}">{!! \Illuminate\Support\Str::words($data->judul, '3', '') !!}</a></h3>
                        <ul>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                                </svg></span>{{ \Carbon\Carbon::parse($data->tanggal)->isoFormat('MMM DD, YYYY') }}
                            </li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--================= Back Home2 Slider End Here =================-->

    <!--================= Back back Hero area Start Here =================-->
    <div class="back-hero-area back-latest-posts back-whats-posts back-hero-area2 back-hero-area3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Main Post -->
                    <div class="back-hero-area back-latest-posts pt-0 pb-0">
                        <ul>
                            @foreach ($main_post as $data)
                            <li>
                                <div class="image-area">
                                    <a href="#"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                                    <div class="back-btm-content">
                                        <a href="{{ route('kategori', $data->kategori->slug) }}" class="back-cate back-sp">{{ $data->kategori->nama }}</a>
                                        <h3><a href="{{ route('post.show', $data->slug )}}">{{ $data->judul }}</a></h3>
                                        <ul>
                                            <li class="back-author"><span><img src="{{ url('storage/'.$data->author->gambar )}}" alt="image"></span><a href="#">by {{ $data->author->nama }}</a></li>
                                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg></span>{{ \Carbon\Carbon::parse($data->tanggal)->isoFormat('MMM DD, YYYY') }}
                                            </li>
                                            <!-- <li class="back-comments"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></span>95 Comments</li> -->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="back-trending-stories back-trending-stories-home2 back-trending-stories-home3">
                        <ul class="row">
                            @foreach ($second_post as $data)
                            <li class="col-lg-3">
                                <div class="image-areas">
                                    <a href="{{ route('post.show', $data->slug )}}"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                                </div>
                                <div class="back-btm-content">
                                    <a href="{{ route('kategori', $data->kategori_slug) }}" class="back-cates">{{ $data->kategori }}</a>
                                    <h3><a href="{{ route('post.show', $data->slug) }}">{{ $data->judul }}</a></h3>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 pl-40">
                    <ul class="back-hero-bottom back-hero-bottom2 back-hero-rights back-hero-bottom-home3">
                        @foreach ($latest_post_side as $data)
                        <li>
                            <div class="image-areas">
                                <a href="{{ route('post.show', $data->slug )}}"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                            </div>
                            <div class="back-btm-content">
                                <a href="{{ route('kategori', $data->kategori->slug )}}" class="back-cates">{{ $data->kategori->nama }}</a>
                                <h3><a href="{{ route('post.show', $data->slug )}}">{{ $data->judul }}</a></h3>
                                <ul class="back-meta">
                                    <li class="back-author"><span><img src="{{ url('storage/'.$data->author->gambar )}}" alt="image"></span><a href="#">by {{ $data->author->nama }}</a></li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back back Hero area End Here =================-->

    <!--================= Back Add Start Here =================-->
    <div class="back-add text-center pt-0 pb-70">
        @foreach ($iklan_main as $data)
        <img src="{{ url('storage/'.$data->gambar )}}" alt="Back Add">
        @endforeach
    </div>
    <!--================= Back Add End Here =================-->

    <!--================= Back Trending Stories Start Here =================-->
    <div class="back-trending-stories back-trending-stories-home2">
        <div class="container">
            <div class="back-title">
                <h2>Latest Posts</h2>
            </div>
            <ul class="back-trending-slider owl-carousel">
               @foreach ($latest_post_main as $data)
                <li>
                    <div class="image-areas">
                        <a href="#"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                    </div>
                    <div class="back-btm-content">
                        <a href="#" class="back-cates">{{ $data->kategori->nama }}</a>
                        <h3><a href="#">{{ $data->judul }}</a></h3>
                        <ul>
                            <li class="back-author">by <a href="#" style="margin-left: 5px;">{{ $data->author->nama }}</a></li>
                            <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                                </svg></span>{{ \Carbon\Carbon::parse($data->tanggal)->isoFormat('MMM DD, YYYY') }}
                            </li>
                        </ul>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--================= Back Trending Stories End Here =================-->

    <!--================= Back Newsletter Start Here =================-->
    <div class="back-newsletter-area">
        <div class="container">
            <div class="inner-newsletter">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Get every day news updates in your inbox!</h3>
                        <p>Subscribe to our newsletter</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="back-newsletter">
                            <li><input type="email" placeholder="Email"></li>
                            <li><button type="submit">Subscribe</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Newsletter End Here =================-->

    <!--================= Back Tranding Video Start Here =================-->
    <div class="back-trading-video back-trading-video2">
        <div class="container">
            <div class="back-title">
                <h2>Tranding Video</h2>
            </div>
            <ul class="row">
                @foreach ($tranding_video as $data)
                <li class="col-lg-4">
                    <div class="image-area">
                        <a href="#"><img src="{{ url('storage/'.$data->cover )}}" alt="image"></a>
                        <a href="{{ $data->link }}" class="popup-videos back-video"><i class="fa-solid fa-play"></i></a>
                        <div class="back-btm-content">
                            <h3><a href="#">{{ $data->nama }}</a></h3>
                            <ul>
                                <li class="back-author"><span><img src="{{ url('storage/'.$data->author->gambar )}}" alt="image"></span><a href="#">{{ $data->author->nama}}</a></li>
                                <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg></span>{{ \Carbon\Carbon::parse($data->tanggal)->isoFormat('MMM DD, YYYY') }}</li>
                            </ul>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--================= Back Tranding Video End Here =================-->

    <!--================= Back Feature Posts3 Start Here =================-->
    <div class="back-hero-area back-latest-posts back-whats-posts back-feature-posts back-feature-posts3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="back-title">
                        <h2>Feeds</h2>
                    </div>
                    <ul class="back-hero-bottom back-hero-bottom2">
                        @foreach ($feed as $data)
                        <li>
                            <div class="image-areas">
                                <a href="{{ route('post.show', $data->slug) }}"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                            </div>
                            <div class="back-btm-content">
                                <a href="{{ route('post.show', $data->slug) }}" class="back-cate back-tra">{{ $data->kategori->nama }}</a>
                                <h3><a href="{{ route('post.show', $data->slug) }}">{!! \Illuminate\Support\Str::words($data->judul, '6', '...') !!}</a></h3>
                                <!-- <p>{!! \Illuminate\Support\Str::words($data->judul, '25', '') !!}</p> -->
                                <ul class="back-meta">
                                    <li class="back-author"><span><img src="{{ url('storage/'.$data->author->gambar )}}" alt="image"></span>by <a href="#" style="margin-left: 5px;">{{ $data->author->nama }}</a></li>
                                    <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg></span>{{ \Carbon\Carbon::parse($data->tanggal)->isoFormat('MMM DD, YYYY') }}
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="text-center pt-73">
                        <a href="{{ route('posts') }}" class="back-btn">View All Posts</a>
                    </div>
                </div>
                <div class="col-lg-4 pl-30">
                    <div class="back-title back-small-title">
                        <h2>Kategori</h2>
                    </div>
                    <ul class="back-category-area2">
                        @foreach ($kategoris as $data)
                        <li>
                            <div>
                                <img src="{{ asset('img/cover-categories.png') }}" alt="Cagegory Image">
                                <a href="{{ route('kategori', $data->slug ) }}"><span>{{ $data->nama }}</span></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="back-title back-small-title pt-25">
                        <h2>Iklan</h2>
                    </div>
                    <ul class="back-instragram">
                        @foreach ($iklan_sidebar as $data)
                        <img src="{{ url('storage/'.$data->gambar )}}" alt="Back Add">
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Feature Posts3 End Here =================-->
</div>
@endsection