@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Kontak Kami - '. env('APP_NAME'))
@section('meta_description', 'Dapatkan informasi kontak '. env('APP_NAME') .' Universitas Potensi Utama. Kami siap membantu Anda dengan pertanyaan tentang lembaga penjaminan mutu.')
@section('meta_keywords', 'kontak lpm upu, kontak lpm potensi utama, kontak lpm, kontak lpm potensi
    utama')
@section('canonical', env('APP_URL').'/kontak')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix"
        style="background-image: url({{ asset('landing/assets/img/building-img/gedung-upu.jpg') }})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag"><span>Kontak Kami</span></p>
                        <p class="post-title">{{ env('APP_NAME') }}</p>
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
    <section class="post-news-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="contact-content mb-100">
                        {{-- <h1 class="mb-30">Berkas Perkuliahan</h1> --}}
                        <a href="#" class="d-block mb-50"> <img src="{{asset('landing/assets/img/logo-img/logo-core.png')}}" alt="Logo {{env('APP_NAME')}}"></a>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                            <p>Jl. K.L Yos Sudarso, Km. 6,5 , No. 3-a, Tj. Mulia, Kec. Medan Deli Kota Medan, Sumatera Utara 20241</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fas fa-phone fa-lg"></i>
                            </div>
                            <p>#</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fas fa-envelope fa-lg"></i>
                            </div>
                            <p>#</p>
                        </div>

                        <!-- Contact Social Info -->
                        <div class="contact-social-info mt-50 mb-70">
                            <a href="https://www.facebook.com/potensiutamamedan" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>

                        <!-- ##### Google Maps ##### -->
                        <div class="map-area mb-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.779437138888!2d98.66388677447088!3d3.637741849956002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031320c7aabe7d9%3A0x14e3c50d29bc5445!2sUniversitas%20Potensi%20Utama!5e0!3m2!1sid!2sid!4v1729048168931!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">
                        <x-post-sidebar :dataRecent="$latestPosts" :categories="$categories" :tags="$tags"></x-post-sidebar>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
