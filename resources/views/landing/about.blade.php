@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Tentang LPM - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') .' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan belajar yang inovatif dan mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'tentang lpm lpm upu,  lpm potensi utama, tentang lpm  lpm, tentang lpm  lpm potensi utama')
@section('canonical', env('APP_URL').'/tentang-lpm')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-upu.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag" style="background-color: #6e3bc2;"><span>Tentang LPM</span></p>
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
                        <h1 class="mb-30">Tentang LPM</h1>

                        <p class="text-justify">
                            SPMI (Sistem Penjaminan Mutu Internal) merupakan kegiatan yang dilakukan oleh perguruan tinggi untuk memastikan dan meningkatkan kualitas pendidikannya. SPMI bertujuan agar perguruan tinggi dapat memenuhi dan bahkan melampaui standar nasional pendidikan.
                        </p>
                        <p class="text-justify">
                            Penjaminan mutu perguruan tinggi merupakan bagian yang tidak dapat dipisahkan dari sistem pendidikan tinggi. Penjaminan mutu Unviversitas Potensi Utama pertama kalinya dibentuk pada tanggal 17 September 2018 dengan nama Lembaga Penjaminan Mutu (LPM) oleh Rektor Universitas Potensi Utama Prof. Dr. Rika Rosnelly, S.Kom., M.Kom. Secara resmi LPM dibentuk dengan Surat Keputusan Rektor Nomor: 266/UPU/SKP/R/IX/2018 tentang Pembentukan Lembaga Penjaminan Mutu, kemudian Rektor juga mengangkat personil yang ditugaskan di Lembaga Penjaminan Mutu yang  secara resmi tim LPM diangkat dengan Surat Keputusan Rektor Nomor 267/UPU/SKP/R/IX/2018 tentang Pengangkatan Tim Lembaga Penjaminan Mutu (LPM). Tim LPM memiliki tugas utama yaitu memastikan terlaksananya siklus PPEPP (Penetapan, Peningkatan, Evaluasi, Pengendalian, Peningkatan) di Universitas Potensi Utama.
                        </p>
                        <img src="{{asset('landing/assets/img/profile/mekanisme-ppepp.jpg')}}" alt="Mekanisme PPEP" class="img-fluid rounded shadow-sm mb-30" title="Mekanisme PPEP" style="max-height: 500px;">
                        <p class="text-justify">
                            LPM terus berkembang secara dinamis di tengah meningkatnya tuntutan perubahan lingkungan eksternal. Seiring dengan pesatnya kemajuan Universitas Potensi Utama, LPM berkomitmen kuat untuk membangun budaya mutu secara berkelanjutan, guna mendukung tercapainya visi, misi, tujuan, dan sasaran Universitas Potensi Utama. Pada tahun 2021 berdasarkan Surat Keputusan Rektor  Nomor 589/UPU/SKP/R/XI/2021 terjadi pergantian ketua LPM yaitu Helmi Kurniawan, ST., M.Kom. Pelaksanaan sistem penjaminan mutu internal yang dilakukan oleh tim lembaga penjaminan mutu Universitas Potensi Utama saat ini sedang masa transisi mengacu pada Permendikbudristek Nomor 53 Tahun 2023 tentang Penjaminan Mutu Pendidikan Tinggi.
                        </p>
                        <img src="{{asset('landing/assets/img/profile/perangkat-spmi.png')}}" alt="Perangkat SPMI" class="img-fluid rounded shadow-sm mb-30" title="Perangkat SPMI" style="max-height: 500px;">
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
