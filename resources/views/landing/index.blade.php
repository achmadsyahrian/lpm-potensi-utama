@extends('landing.layouts.app')
@section('title', 'Beranda - '. env('APP_NAME') .' | Universitas Potensi Utama')
@section('json-ld')
<script type="application/ld+json">{"@context":"https://schema.org","@type":"EducationalOrganization","name":"{{ env('APP_NAME') }}","url":"{{ env('APP_URL') }}","address":{"@type":"PostalAddress","addressLocality":"Medan","addressRegion":"Sumatera Utara","postalCode":"20241","streetAddress":"Jl. K.L Yos Sudarso, Gg. Famili No.247, Tj. Mulia, Kec. Medan Deli"}}</script> 
@endsection
@section('content')

    @include('landing.partials.breaking-news')

    @if ($totalPosts >= 3)
        <div class="hero-area">
            <!-- Hero Post Slides -->
            <div class="hero-post-slides owl-carousel">

                <!-- Single Slide -->
                <div class="single-slide">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Single Blog Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms"
                                    data-duration="1000ms">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail bg-overlay">
                                        <a href="{{route('landing.news.show', $latestNews[0]->slug)}}">
                                            @if ($latestNews[0]->thumbnail)
                                                <img src="{{ asset($latestNews[0]->thumbnail) }}"
                                                style="height:500px; object-fit:cover;" class="img-fluid"
                                                alt="{{$latestNews[0]->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:500px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ $latestNews[0]->created_at->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $latestNews[0]->slug)}}" class="post-title">{{ \Illuminate\Support\Str::limit($latestNews[0]->title, 80, '...') }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <!-- Single Blog Post Area -->
                                <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms"
                                    data-duration="1000ms">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail bg-overlay">
                                        <a href="{{route('landing.news.show', $latestNews[1]->slug)}}">
                                            @if ($latestNews[1]->thumbnail)
                                            <img src="{{ asset($latestNews[1]->thumbnail) }}"
                                                style="height:235px; object-fit:cover;" class="img-fluid"
                                                alt="{{$latestNews[1]->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:235px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ $latestNews[1]->created_at->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $latestNews[1]->slug)}}" class="post-title">{{ \Illuminate\Support\Str::limit($latestNews[1]->title, 80, '...') }}</a>
                                    </div>
                                </div>
                                <!-- Single Blog Post Area -->
                                <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms"
                                    data-duration="1000ms">
                                    <!-- Blog Thumbnail -->
                                    <div class="blog-thumbnail bg-overlay">
                                        <a href="{{route('landing.news.show', $latestNews[2]->slug)}}">
                                            @if ($latestNews[2]->thumbnail)
                                                <img src="{{ asset($latestNews[2]->thumbnail) }}"
                                                    style="height:235px; object-fit:cover;" class="img-fluid"
                                                    alt="{{$latestNews[2]->title}}">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:235px; object-fit:cover;" alt="Universitas Potensi Utama">
                                            @endif
                                        </a>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="blog-content">
                                        <span class="post-date">{{ $latestNews[2]->created_at->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $latestNews[2]->slug)}}" class="post-title">{{ \Illuminate\Support\Str::limit($latestNews[2]->title, 80, '...') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endif

    <section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <div class="intro-news-tab">

                        <!-- Intro News Filter -->
                        <div class="intro-news-filter d-flex justify-content-between">
                            <h6>Berita Terkini</h6>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="nav3">
                                <div class="row">
                                    @foreach($latestNewsContent as $index => $post)
                                        @if($index < 2)
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post style-2 mb-5">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail position-relative">
                                                        <a href="{{route('landing.news.show', $post->slug)}}">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:240px; object-fit:cover;" class="img-fluid"
                                                                alt="{{$post->title}}">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:240px; object-fit:cover;" alt="Universitas Potensi Utama">
                                                            @endif
                                                        </a>
                                                        <span class="category-label">{{ $post->category->name }}</span>
                                                    </div>

                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-author">By {{$post->user->name}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-6">
                                                <div class="single-blog-post d-flex style-4 mb-30">
                                                    <!-- Blog Thumbnail -->
                                                    <div class="blog-thumbnail">
                                                        <a href="{{route('landing.news.show', $post->slug)}}">
                                                            @if ($post->thumbnail)
                                                                <img src="{{ asset($post->thumbnail) }}"
                                                                style="height:90px; object-fit:cover;" class="img-fluid"
                                                                {{$post->title}}">
                                                            @else
                                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:90px; object-fit:cover;" alt="Universitas Potensi Utama">
                                                            @endif
                                                        </a>
                                                    </div>
    
                                                    <!-- Blog Content -->
                                                    <div class="blog-content">
                                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        @if ($latestNewsContent->isEmpty())
                            <p class="text-center">Tidak ada berita <i class="far fa-sad-cry"></i></p>
                        @endif
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">


                        <!-- Add Widget -->
                        <div class="single-widget-area add-widget mb-30">
                            <a href="#">
                                <img src="{{ asset('landing/assets/img/ads-img/banner-potrait-sidebar.jpeg') }}"
                                    alt="{{env('APP_NAME')}}">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-area bg-img bg-overlay bg-fixed mb-70"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-upu.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Featured Video Area -->
                <div class="col-12">
                    <div class="featured-video-area d-flex align-items-center justify-content-center">
                        <div class="video-content text-center">
                            {{-- <a href="#" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a> --}}
                            <a href="{{ asset('landing/assets/video/Company Profile Universitas Potensi Utama.mp4') }}"
                                class="video-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-play" aria-hidden="true"></i>
                            </a>

                            <span class="published-date">03 Mar, 2020</span>
                            <h3 class="video-title">Tentang Kehidupan Kampus</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="elements-title mb-30 text-center">
                        <h1>Pengumuman</h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single News Area -->
                @foreach ($latestAnnouncementContent as $post)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-blog-post style-2 mb-5">
                            <div class="blog-content">
                                <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                <a href="{{route('landing.announcement.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                <a href="{{route('landing.announcement.show', $post->slug)}}" class="post-author">By {{$post->user->name}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if ($latestAnnouncementContent->isEmpty())
                    <p class="mx-auto">Tidak ada pengumuman <i class="far fa-sad-cry"></i></p>
                @endif
                
                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="{{route('landing.announcement.index')}}" class="btn newsbox-btn">Lihat Selengkapnya</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="big-add-area mb-100">
        <div class="container-fluid text-center">
            <a href="#"><img
                    src="{{ asset('landing/assets/img/ads-img/Web-Header-pendaftaran-v2-1536x640-1.jpg') }}"
                    style="width:1160px;" alt="Pendaftaran Mahasiswa Baru Universitas Potensi Utama 2024/2025"></a>
        </div>
    </div>

    {{-- <div class="col-12">
        <div class="elements-title mb-30 text-center">
            <h2>Keanggotaan dan Kerjasama</h2>
        </div>
    </div>
    <section class="video-area bg-img bg-fixed"
        style="background-image: url({{ asset('landing/assets/img/background-img/blue-red-bg.png') }});">

        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-slides owl-carousel">

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#" ><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/Logo-BNI.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Bank BNI" title="Bank BNI"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/Logo_bank_mega_syariah_new.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Bank Mega Syariah" title="Bank Mega Syariah"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/bank_muamalat.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Bank Muamalat" title="Bank Muamalat"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/afebsi.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Afebsi" title="Afebsi"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/Logo-Ikatan-Akuntan-Indonesia.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Ikatan Akuntan Indonesia" title="Ikatan Akuntan Indonesia"></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <div class="blog-thumbnail">
                                    <a href="#"><img
                                            src="{{ asset('landing/assets/img/kerjasama-img/asbisindo.png') }}"
                                            style="width:200px; height: 100px; object-fit:contain;" alt="Asbisindo" title="Asbisindo"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@endsection
