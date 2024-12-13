@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Visi Misi - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') .' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan belajar yang inovatif, dengan visi dan misi yang mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'visi lpm upu, misi lpm potensi utama, visi misi lpm, visi misi lpm potensi utama')
@section('canonical', env('APP_URL').'/visi-misi')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-upu.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag" style="background-color: #3f51b5;"><span>Visi Misi</span></p>
                        <p class="post-title">{{env('APP_NAME')}}</p>
                        {{-- <div class="d-flex align-items-center">
                            <span class="post-date mr-30">June 20, 2018</span>
                            <span class="post-date">By Michael Smith</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Post Details Title Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Visi & Misi</h1>
                        <h4 class="mb-30">Visi</h4>
                        <p>"Menjadi Unit kerja yang menjamin dan meningkatkan mutu akademik secara berkelanjutan"</p>

                        <h4 class="mb-30">Misi</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">1.</td>
                                <td>Menjamin pelaksanaan SPMI diseluruh fakultas dan prodi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">2.</td>
                                <td>Menyelenggarakan tridharma perguruan tinggi yang bermutu.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">3.</td>
                                <td>Melaksanakan pelatihan dan pengembangan SPMI secara berkelanjutan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">4.</td>
                                <td>Menyusun, mengimplementasikan, dan melakukan perbaikan berkelanjutan terhadap sistem penjaminan mutu internal.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">5.</td>
                                <td>Mendorong terbentuknya lingkungan UPU yang memiliki budaya mengutamakan mutu.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">6.</td>
                                <td>Membimbing dan memfasilitasi Fakultas/Sekolah dan Program Studi dalam mempersiapkan, melaksanakan proses dan meraih pengakuan dari lembaga akreditasi nasional dan internasional.</td>
                            </tr>
                        </table>

                        <h4 class="mb-30">Tujuan</h4>
                        <p>
                            Memberikan layanan terbaik untuk kepuasan sivitas akademika dan pemangku kepentingan melalui peningkatan kefektifan sistem manejemen mutu secara berkelanjutan dalam bidang SPMI
                        </p>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Latest News Widget -->
                        <div class="single-widget-area news-widget mb-30">
                            <h4>Berita Terbaru</h4>
                            @foreach ($latestPosts as $post)
                                <div class="single-blog-post d-flex style-4 mb-30">
                                    <div class="blog-thumbnail">
                                        <a href="{{route('landing.news.show', $post->slug)}}">
                                            @if ($post->thumbnail)
                                                <img src="{{ asset($post->thumbnail) }}"
                                                style="height:90px; object-fit:cover;" class="img-fluid"
                                                alt="">
                                            @else
                                                <img src="{{ asset('landing/assets/img/logo-img/Logopotensiutama.png') }}" style="height:90px; object-fit:cover;" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <span class="post-date">{{ $post->created_at->format('M j, Y') }}</span>
                                        <a href="{{route('landing.news.show', $post->slug)}}" class="post-title" title="{{$post->title}}">{{ \Illuminate\Support\Str::limit($post->title, 50, '...') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if ($latestPosts->isEmpty())
                            <p >Tidak ada berita <i class="far fa-sad-cry"></i></p>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    
@endsection
