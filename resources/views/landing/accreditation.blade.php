@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Akreditasi - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') . ' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan
    belajar yang inovatif dan mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'spmi akreditasi lpm upu, lpm potensi utama, spmi akreditasi lpm, spmi akreditasi lpm potensi
    utama')
@section('canonical', env('APP_URL') . '/tentang-spmi')

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
                        <p class="tag" style="background-color: #795548;"><span>Akreditasi</span></p>
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
    <section class="post-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <h1 class="mb-30">Akreditasi Universitas Potensi Utama</h1>

                        <div class="container mt-5">
                            <table class="table table-striped table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Unit</th>
                                        <th>Akreditasi</th>
                                        <th>Kadaluarsa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Perpustakaan</td>
                                        <td>B</td>
                                        <td>04 Agustus 2027</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Akreditasi Perpus.pdf')}}" title="Akreditasi Perpustakaan Universitas Potensi Utama" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Universitas Potensi Utama</td>
                                        <td>Baik Sekali</td>
                                        <td>01 Desember 2025</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat-Akreditasi-Universitas-Potensi-Utama.pdf')}}" class="text-underlined text-primary" title="Sertifikat Akreditasi Universitas Potensi Utama" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Prodi Ilmu Komputer (S-2)</td>
                                        <td>Baik</td>
                                        <td>12 April 2027</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat Ilkom (S2).pdf')}}" title="Sertifikat Ilkom (S2)" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Prodi Informatika</td>
                                        <td>Baik Sekali</td>
                                        <td>07 Agustus 2028</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat IF.pdf')}}" title="Sertifikat IF" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Prodi Sistem Informasi (D-3)</td>
                                        <td>B</td>
                                        <td>21 Juli 2025</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat SI (D3).pdf')}}" title="Sertifikat SI (D3)" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Prodi Sistem Infromasi (S-1)</td>
                                        <td>Baik Sekali</td>
                                        <td>15 Desember 2027</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat SI (S1).pdf')}}" title="Sertifikat SI (S1)" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Prodi Rekayasa Sistem Komputer</td>
                                        <td>Baik Sekali</td>
                                        <td>14 Desember 2028</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat RSK.pdf')}}" title="Sertifikat RSK" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Prodi Rekayasa Perangkat Lunak</td>
                                        <td>Baik</td>
                                        <td>07 Agustus 2028</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat RPL.pdf')}}" title="Sertifikat RPL" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9.</td>
                                        <td>Prodi Teknik Industri</td>
                                        <td>Baik</td>
                                        <td>20 April 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat TI.pdf')}}" title="Sertifikat TI" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10.</td>
                                        <td>Prodi Pendidikan Bahasa Inggris</td>
                                        <td>Baik Sekali</td>
                                        <td>14 Mei 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat PBI.pdf')}}" title="Sertifikat PBI" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11.</td>
                                        <td>Prodi Hubungan Internasional</td>
                                        <td>Baik</td>
                                        <td>26 Juni 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat HI.pdf')}}" title="Sertifikat HI" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12.</td>
                                        <td>Prodi Perbankan Syariah</td>
                                        <td>Baik Sekali</td>
                                        <td>02 November 2028</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat Perbankan Syariah.pdf')}}" title="Sertifikat Perbankan Syariah" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13.</td>
                                        <td>Prodi Ekonomi Syariah</td>
                                        <td>B</td>
                                        <td>25 Juni 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat Ekonomi Syariah.pdf')}}" title="Sertifikat Ekonomi Syariah" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14.</td>
                                        <td>Prodi Manajemen</td>
                                        <td>Baik</td>
                                        <td>27 April 2026</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat MM.pdf')}}" title="Sertifikat MM" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15.</td>
                                        <td>Prodi Akuntansi</td>
                                        <td>Baik Sekali</td>
                                        <td>30 Agustus 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat AK.pdf')}}" title="Sertifikat AK" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16.</td>
                                        <td>Prodi Hukum</td>
                                        <td>Baik</td>
                                        <td>10 September 2024</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat-Akreditasi-Prodi-Hukum.pdf')}}" title="Sertifikat Akreditasi Prodi Hukum" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17.</td>
                                        <td>Prodi Psikologi</td>
                                        <td>Baik</td>
                                        <td>10 April 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat Psikologi.pdf')}}" title="Sertifikat Psikologi" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18.</td>
                                        <td>Prodi Film dan Televisi</td>
                                        <td>B</td>
                                        <td>03 Juli 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat FTV.pdf')}}" title="Sertifikat FTV" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19.</td>
                                        <td>Prodi Desain Interior</td>
                                        <td>B</td>
                                        <td>22 Mei 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat DI.pdf')}}" title="Sertifikat DI" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20.</td>
                                        <td>Prodi Desain Komunikasi Visual</td>
                                        <td>B</td>
                                        <td>08 Mei 2029</td>
                                        <td>
                                            <a href="{{asset('landing/assets/file/akreditasi/Sertifikat DKV.pdf')}}" title="Sertifikat DKV" class="text-underlined text-primary" target="_blank">Lihat Disini</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

@endsection
