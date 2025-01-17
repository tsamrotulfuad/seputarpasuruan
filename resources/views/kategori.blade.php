@extends('welcome')
@section('content')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">{{ $title }}</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="{{ route('home')}}">Home</a></li>
                                <li>{{ $title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <!--================= Blog Section Start Here =================-->
    <div class="back__blog__area back-blog-page pt-70 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-grid">
                        @foreach ($post as $data)
                        <div class="single-blog">
                            <div class="inner-blog">
                                <div class="blog-img">
                                    <img src="{{ url('storage/'.$data->featured_image )}}" alt="Blog Image">
                                </div>
                                <div class="blog-content">
                                    <ul class="top-part">
                                        <li>
                                            <img src="{{ url('storage/'.$data->author->gambar )}}" alt="image"> {{ $data->author->nama }}
                                        </li>
                                        <li class="date-part">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polyline points="12 6 12 12 16 14"></polyline>
                                            </svg> {{ $data->tanggal }}
                                        </li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                                <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                            </svg> 2 Comment
                                        </li>
                                    </ul>

                                    <h3 class="blog-title"><a href="{{ route('post.show', $data->slug)}}">{{ $data->judul }}</a></h3>
                                    <p class="blog-desc">{!! \Illuminate\Support\Str::words($data->konten, '30', '...') !!}</p>
                                    <a href="{{ route('post.show', $data->slug)}}" class="back-btn-border">Read More <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--================= Pagination Section End Here =================-->
                    <ul class="back-pagination">
                        {{ $post->links() }}
                    </ul>
                    <!--================= Pagination Section End Here =================-->
                </div>
                <div class="col-lg-4">
                    <div class="back-sidebar pl-30 md-pl-0 back-hero-area back-latest-posts back-whats-posts">

                        <form class="mb-44">
                            <input type="text" name="input" placeholder="Search...">
                            <button> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg> </button>
                        </form>

                        <div class="back-title back-small-title">
                            <h2>Get in Touch</h2>
                        </div>

                        <ul class="social-area">
                            @foreach ($sosmed as $data)
                            <li>
                                <div><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a> <span>Follow</span></div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="back-title back-small-title pt-30">
                            <h2>Latest News</h2>
                        </div>
                        <ul class="back-hero-bottom">
                            @foreach ($latest_post as $data)
                            <li>
                                <div class="image-areas">
                                    <a href="{{ route('post.show', $data->slug)}}"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                                </div>
                                <div class="back-btm-content">
                                    <a href="{{ route('post.show', $data->slug)}}" class="back-cates">{{ $data->kategori->nama }}</a>
                                    <h3><a href="{{ route('post.show', $data->slug)}}">{{ $data->judul }}</a></h3>
                                    <ul>
                                        <li class="back-date">by <a href="#" style="margin-left: 5px;">{{ $data->author->nama }} </a></li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="back-title back-small-title pt-50">
                            <h2>Tags</h2>
                        </div>
                        <div class="widget widget-tags">
                            <ul class="tags">
                                @foreach ($tags as $data)
                                <li><a href="#">{{ $data->nama }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="back-title back-small-title pt-50">
                            <h2>Iklan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Blog Section End Here =================-->
</div>
@endsection