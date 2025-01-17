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
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>{{ $title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Back Breadcrumbs Section End Here =================-->

    <div id="back-contact" class="back-contact-page pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--================= Form Section Start Here =================-->
                    <div class="back-blog-form">
                        <div class="back-title">
                            <h2>Hubungi Kami</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 back-address pt-12">
                                <strong>Telpon</strong><br>
                                <a aria-label="Chat on WhatsApp" href="https://wa.me/{{ $site->telpon }}">
                                    <img alt="Chat on WhatsApp" src="{{ url('img/WhatsAppButtonGreenSmall.svg') }}" />
                                </a><br>

                                <strong class="pt-30">Email</strong><br>
                                <a href="mailto:{{ $site->email }}">{{ $site->email }}</a>

                                <strong class="pt-30">Alamat</strong><br>
                                <p>{{ $site->alamat }}</p>

                                <strong class="pt-30">Social Share</strong><br>
                                <ul class="social-link">
                                    @foreach ($sosmed as $data)
                                    <li><a href="{{ $data->link }}"><i class="fa-brands fa-{{ $data->slug }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div id="blog-form" class="blog-form">
                                    <div id="form-messages"></div>
                                    <form action="#" method="POST" id="contact-form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="back-input">
                                                    <input id="name" type="text" name="nama" placeholder="Nama">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 pdl-5">
                                                <div class="back-input">
                                                    <input id="email" type="email" name="email" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="back-input">
                                                    <input id="subject" type="text" name="subject" placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 pdl-5">
                                                <div class="back-input">
                                                    <input id="phone" type="text" name="phone" placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="back-textarea">
                                                    <textarea id="message" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <button type="submit" class="back-btn">Kirim Pesan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--================= Form Section End Here =================-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection