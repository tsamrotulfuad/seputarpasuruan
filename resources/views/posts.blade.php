@extends('welcome')
@section('content')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">{{ $title_post }}</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>{{ $title_post }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>                
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->
    <!--================= Back Trending Stories Start Here =================-->
    <div class="back-category-style-grid pt-70 pb-70">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $data)
                    <div class="col-lg-4">
                        <div class="image-areas">
                            <a href="{{ route('post.show', $data->slug )}}"><img src="{{ url('storage/'.$data->featured_image )}}" alt="image"></a>
                        </div>
                        <div class="back-btm-content"> 
                            <a href="{{ route('kategori', $data->slug )}}" class="back-cates">{{ $data->kategori->nama }}</a>                               
                            <h3><a href="{{ route('post.show', $data->slug )}}">{!! \Illuminate\Support\Str::words($data->judul, '3', '...') !!}</a></h3>
                            <ul>
                                <li class="back-author">by <a href="#" style="margin-left: 5px;">{{ $data->author->nama }}</a></li>
                                <li class="back-date"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span>April 29, 2022</li>
                            </ul>
                            <p>{!! \Illuminate\Support\Str::words($data->konten, '5', '...') !!}</p>
                        </div> 
                    </div>
                    @endforeach
                </div>
                <!--================= Back Pagination Start Here =================-->
                <ul class="back-pagination mt-30">
                   {{ $posts->links() }}
                </ul>
                <!--================= Back Pagination End Here =================-->
            </div>
        </div>
        <!--================= Back Trending Stories End Here =================-->
    </div>        
</div>
@endsection