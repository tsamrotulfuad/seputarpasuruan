@extends('welcome')
@section('content')
<div class="back-wrapper">
    <!--================= Back Breadcrumbs Section Start Here =================-->
    <div class="back-breadcrumbs">
        <div class="breadcrumbs-wrap">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title">{{ $post->judul }}</h1>
                        <div class="back-nav">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>{{ $post->judul }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <!--================= Blog Section Start Here =================-->
    <div class="back__blog__area back-blog-page back-blog-page-single pt-70 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-inner">
                        <div class="blog-content">
                            <div class="blog-image">
                                <img src="{{ url('storage/'.$post->featured_image) }}" alt="Blog Image">
                            </div>

                            <p>{!! str($post->konten)->sanitizeHtml() !!}</p>

                            <a href="#" class="post-author">
                                <div class="avatar">
                                    <img src="{{ url('storage/'.$post->author->gambar) }}" alt="">
                                </div>
                                <div class="info">
                                    <h4 class="name">{{ $post->author->nama }}</h4>
                                    <p>{{ \Illuminate\Support\Str::upper($post->author->jabatan) }}</p>
                                    <span class="designation">All stories by : {{ $post->author->nama }}</span>
                                </div>
                            </a>

                            <div class="single-nav">
                                <div class="back-prev"> <a href="{{ route('post.show', $prev_post->slug) }}"><i class="fa-solid fa-arrow-right"></i> Preovious Post <em>{{ \Illuminate\Support\Str::words($prev_post->judul, '4', '') }}</em></a> </div>
                                
                                <div class="back-next"><a href="{{ route('post.show', $next_post->slug) }}">Next Post <i class="fa-solid fa-arrow-right"></i> <em>{{ \Illuminate\Support\Str::words($next_post->judul, '4', '') }}</em></a></div>
                            </div>


                            <div class="back-blog-related">
                                <div class="container">
                                    <div class="back-title back-small-title">
                                        <h2>Related Posts</h2>
                                    </div>
                                    <ul id="back-blog-slider" class="owl-carousel owl-theme">
                                        @foreach ($related_posts as $data)
                                        <li class="item">
                                            <div class="back-inner">
                                                <div class="back-blog-image">
                                                    <a href="{{ route('post.show', $data->slug)}}"><img src="{{ url('storage/'.$data->featured_image) }}" alt=""></a>
                                                </div>
                                                <div class="back-blog-content">
                                                    <em class="back-blog-date">{{ $data->tanggal }}</em>
                                                    <a href="{{ route('post.show', $data->slug)}}">
                                                        <h3>{{ \Illuminate\Support\Str::words($data->judul, '5', '...') }}</h3>
                                                    </a>
                                                    <ul>
                                                        <li class="back-author"> <span><img src="{{ url('storage/'.$data->gambar) }}" alt="image"></span> <a href="#">{{ $data->nama }}</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="author-comment">
                                <div class="back-title back-small-title">
                                   
                                </div>
                                <div id="disqus_thread"></div>
                                <script>
                                /**
                                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                                
                                var disqus_config = function () {
                                this.page.url = "{{ route('post.show', $post->id)}}";  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = "PID_"+"{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://seputarpasuruan.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
                            </div>

                        </div>
                    </div>
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
                                <div><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a><span>Follow </span></div>
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
                                    <a href="#"><img src="{{ url('storage/'.$data->featured_image) }}" alt="image"></a>
                                </div>
                                <div class="back-btm-content">
                                    <a href="#" class="back-cates">{{ $data->kategori}}</a>
                                    <h3><a href="#">{{ \Illuminate\Support\Str::words($data->judul) }}</a></h3>
                                    <ul>
                                        <li class="back-date">by <a href="#" style="margin-left: 5px;"> {{ $data->author }} </a></li>
                                    </ul>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @foreach ($iklan_post as $data)
                        <div class="back-add pt-15"> <img src="{{ url('storage/'.$data->gambar) }}" alt="add-image"> </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Blog Section End Here =================-->
</div>
@endsection

@push('disqus')
    <script id="dsq-count-scr" src="//seputarpasuruan.disqus.com/count.js" async></script>
@endpush