@extends('landing.layouts.app')
{{-- Head --}}
@section('title', 'Fungsi & Tugas - ' . env('APP_NAME'))
@section('meta_description', env('APP_NAME') .' Universitas Potensi Utama berkomitmen untuk menciptakan lingkungan belajar yang inovatif dan mendukung pengembangan akademis dan profesional mahasiswa')
@section('meta_keywords', 'fungsi & tugas lpm upu,  lpm potensi utama, fungsi & tugas  lpm, fungsi & tugas  lpm potensi utama')
@section('canonical', env('APP_URL').'/fungsi-dan-tugas')

@section('content')

    @include('landing.partials.breaking-news')

    <!-- ##### Post Details Title Area Start ##### -->
    <div class="post-details-title-area bg-overlay clearfix" style="background-image: url({{asset('landing/assets/img/building-img/gedung-upu.jpg')}})">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Content -->
                    <div class="post-content">
                        <p class="tag" style="background-color: #3f51b5;"><span>Fungsi & Tugas</span></p>
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
                        <h1 class="mb-30">Tugas Pokok & Fungsi</h1>
                        <h4 class="mb-20">1. Ketua Lembaga Penjaminan Mutu</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">a.</td>
                                <td>Mengarahkan dan mengelola pelaksanaan seluruh kegiatan LPM agar sesuai dengan visi, misi, dan tujuan Universitas.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">b.</td>
                                <td>Memastikan LPM berfungsi sebagai pusat penjaminan mutu yang efektif dan efisien.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">c.</td>
                                <td>Menyusun rencana strategis dan program kerja jangka pendek, menengah, dan panjang dalam bidang penjaminan mutu.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">d.</td>
                                <td>Mengintegrasikan sistem penjaminan mutu internal (SPMI) ke dalam seluruh kegiatan institusi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">e.</td>
                                <td>Memantau dan mengawasi pelaksanaan program penjaminan mutu di semua bidang: pendidikan, penelitian, pengabdian kepada masyarakat.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">f.</td>
                                <td>Memastikan seluruh proses monev dan audit mutu internal berjalan sesuai dengan pedoman yang berlaku.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">g.</td>
                                <td>Mengambil keputusan strategis terkait kebijakan penjaminan mutu berdasarkan analisis data, hasil audit, dan rekomendasi dari koordinator bidang</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">h.</td>
                                <td>Menetapkan langkah-langkah perbaikan untuk memastikan mutu Universitas terus meningkat.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">i.</td>
                                <td>Mengkoordinasikan kegiatan seluruh koordinator bidang (SPMI, Monev, Akreditasi, Pengukur Kepuasan, dll.) untuk memastikan sinergi dan kelancaran pelaksanaan tugas.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">j.</td>
                                <td>Berkomunikasi secara intensif dengan unit kerja lain di institusi untuk membangun budaya mutu yang menyeluruh.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">k.</td>
                                <td>Menyusun laporan tahunan LPM sebagai bentuk pertanggungjawaban kepada pimpinan Universitas.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">l.</td>
                                <td>Memberikan informasi kepada pihak terkait tentang capaian, kendala, dan rencana pengembangan LPM.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">m.</td>
                                <td>Mendorong penguatan budaya mutu di semua lini institusi melalui program pelatihan, sosialisasi, dan pembinaan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">n.</td>
                                <td>Mengikuti perkembangan standar mutu nasional dan internasional serta menerapkannya di Universitas.</td>
                            </tr>
                        </table>

                        <h4 class="mb-20">2. Koordinator SPMI Pendidikan</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">a.</td>
                                <td>Menyusun rencana kerja penjaminan mutu pendidikan sesuai dengan visi, misi, dan tujuan Universitas.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">b.</td>
                                <td>Mengembangkan standar mutu pendidikan yang meliputi kurikulum, proses pembelajaran, dan asesmen hasil belajar.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">c.</td>
                                <td>Mengkoordinasikan penerapan Standar SPMI pendidikan dalam kegiatan pembelajaran, evaluasi, dan pelaporan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">d.</td>
                                <td>Mendukung pelaksanaan pelatihan atau workshop untuk meningkatkan kompetensi dosen dan tenaga pendidik.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">e.</td>
                                <td>Mengawasi pelaksanaan kegiatan akademik agar sesuai dengan Standar SPMI yang telah ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">f.</td>
                                <td>Memberikan rekomendasi perbaikan atas hasil audit atau evaluasi mutu.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">g.</td>
                                <td>Mengembangkan inovasi dalam sistem pembelajaran dan asesmen untuk mendukung perbaikan mutu pendidikan</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">h.</td>
                                <td>Melakukan pelaporan SPMI Kemdikbud.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">i.</td>
                                <td>PIC Web LPM.</td>
                            </tr>
                        </table>

                        <h4 class="mb-20">3. Koordinator SPMI Penelitian dan Pengabdian kepada Masyarakat (PkM)</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">a.</td>
                                <td>Menyusun rencana kerja untuk pengelolaan mutu penelitian dan pengabdian kepada masyarakat sesuai visi, misi, dan tujuan institusi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">b.</td>
                                <td>Mengembangkan Standar SPMI penelitian dan pengabdian yang mencakup pelaksanaan, output, dan dampaknya.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">c.</td>
                                <td>Mengkoordinasikan pelaksanaan Standar SPMI dalam kegiatan penelitian dan pengabdian kepada masyarakat.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">d.</td>
                                <td>Mendukung pelaksanaan program peningkatan kapasitas dosen dalam bidang penelitian dan pengabdian, seperti pelatihan atau workshop.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">e.</td>
                                <td>Mengawasi pelaksanaan penelitian dan pengabdian agar sesuai dengan standar mutu yang ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">f.</td>
                                <td>Memberikan rekomendasi perbaikan berdasarkan hasil monitoring dan evaluasi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">g.</td>
                                <td>Mendorong inovasi dalam pengembangan penelitian dan pengabdian kepada masyarakat.</td>
                            </tr>
                        </table>

                        <h4 class="mb-20">4. Koordinator Audit Mutu Internal (AMI) dan Pengukur Pemangku Kepentingan</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">a.</td>
                                <td>Menyusun rencana kerja tahunan untuk pelaksanaan audit mutu internal sesuai dengan standar SPMI .</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">b.</td>
                                <td>Menetapkan jadwal audit, ruang lingkup, dan unit yang akan diaudit berdasarkan prioritas dan kebutuhan Universitas.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">c.</td>
                                <td>Menyusun prosedur pelaksanaan audit mutu internal yang sesuai dengan pedoman SPMI dan peraturan yang berlaku.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">d.</td>
                                <td>Memimpin pelaksanaan audit mutu internal untuk memastikan kesesuaian pelaksanaan kegiatan dengan standar SPMI yang ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">e.</td>
                                <td>Mengkoordinasikan tim auditor dalam mengumpulkan data, melakukan wawancara, dan mengobservasi kegiatan unit terkait.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">f.</td>
                                <td>Memastikan audit dilakukan secara objektif, transparan, dan sesuai dengan prosedur yang telah ditentukan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">g.</td>
                                <td>Menyusun laporan hasil audit mutu internal yang memuat temuan, analisis, dan rekomendasi perbaikan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">h.</td>
                                <td>Memantau dan mengevaluasi pelaksanaan tindak lanjut atas rekomendasi audit yang telah disepakati.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">i.</td>
                                <td>Mengelola dokumentasi hasil audit mutu internal secara terstruktur untuk keperluan pelaporan dan referensi di masa depan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">j.</td>
                                <td>Menyusun laporan tahunan audit mutu internal untuk disampaikan kepada pimpinan LPM dan pihak terkait lainnya.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">k.</td>
                                <td>Melakukan pelatihan dan pembinaan kepada tim auditor untuk meningkatkan kompetensi dalam pelaksanaan audit mutu internal.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">l.</td>
                                <td>Menyusun rencana kerja tahunan untuk pelaksanaan pengukuran kepuasan pemangku kepentingan, termasuk mahasiswa, dosen, tenaga kependidikan, alumni, dan mitra kerja.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">m.</td>
                                <td>Merancang instrumen pengukuran kepuasan yang sesuai dengan visi, misi, dan tujuan Universitas.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">n.</td>
                                <td>Mengelola pelaksanaan pengukuran kepuasan secara rutin dan sesuai dengan prosedur yang ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">o.</td>
                                <td>Mengumpulkan data kepuasan dari berbagai kategori pemangku kepentingan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">p.</td>
                                <td>Menganalisis data hasil survei atau instrumen lain untuk mengetahui tingkat kepuasan pemangku kepentingan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">q.</td>
                                <td>Menyusun laporan hasil pengukuran kepuasan yang mencakup analisis data, temuan utama, dan rekomendasi untuk peningkatan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">r.</td>
                                <td>Melaporkan hasil pengukuran kepada Ketua LPM dan unit terkait untuk ditindaklanjuti.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">s.</td>
                                <td>Memantau implementasi tindakan perbaikan yang direkomendasikan berdasarkan hasil pengukuran kepuasan.</td>
                            </tr>
                        </table>

                        <h4 class="mb-20">5. Koordinator Bidang Monev dan Pengendalian Mutu</h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">a.</td>
                                <td>Menyusun rencana kerja tahunan untuk pelaksanaan monitoring dan evaluasi serta pengendalian mutu di seluruh aspek kegiatan pendidikan, penelitian, dan pengabdian kepada masyarakat .</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">b.</td>
                                <td>Melakukan pemantauan rutin terhadap pelaksanaan program dan kegiatan untuk memastikan kesesuaian dengan standar dan rencana yang telah ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">c.</td>
                                <td>Mengumpulkan data dan informasi yang diperlukan untuk mengevaluasi proses dan hasil kegiatan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">d.</td>
                                <td>Melaksanakan evaluasi berkala untuk menilai pencapaian target dan kinerja unit.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">e.</td>
                                <td>Menyusun dan menerapkan prosedur pengendalian mutu untuk memastikan semua kegiatan berjalan sesuai dengan Standar SPMI yang ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">f.</td>
                                <td>Merekapitulasi rekomendasi perbaikan atas temuan ketidaksesuaian atau pelanggaran terhadap prosedur dan Standar SPMI.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">g.</td>
                                <td>Memastikan bahwa perbaikan dan tindak lanjut dari evaluasi dan pengendalian mutu dilakukan secara konsisten dan berkelanjutan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">h.</td>
                                <td>Menyusun laporan hasil monitoring, evaluasi, dan pengendalian mutu secara berkala untuk disampaikan kepada Ketua LPM dan unit terkait.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">i.</td>
                                <td>Mempersiapkan dokumentasi hasil monev sebagai bahan pertimbangan dalam pengambilan keputusan strategis.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">j.</td>
                                <td>Memastikan tindak lanjut atas rekomendasi hasil monev dan pengendalian mutu dilakukan oleh pihak terkait.</td>
                            </tr>
                        </table>

                        <h4 class="mb-20">6. Koordinator Akreditasi Nasional dan Internasional </h4>
                        <table class="text-secondary mb-30" style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <td style="width: 3%; vertical-align: top;">a.</td>
                                <td>Menyusun rencana kerja akreditasi untuk program studi atau institusi, baik di tingkat nasional maupun internasional, sesuai dengan standar yang berlaku</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">b.</td>
                                <td>Mengembangkan strategi dan jadwal pelaksanaan persiapan akreditasi untuk memastikan kelancaran prosesnya.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">c.</td>
                                <td>Mengkoordinasikan pengumpulan data dan dokumen yang diperlukan untuk keperluan akreditasi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">d.</td>
                                <td>Menyusun laporan dan dokumen akreditasi sesuai dengan pedoman yang berlaku, baik dari badan akreditasi nasional (BAN-PT) dan (LAM-PT) maupun internasional.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">e.</td>
                                <td>Membimbing program studi atau unit terkait dalam penyusunan dokumen dan persiapan presentasi akreditasi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">f.</td>
                                <td>Melakukan pemantauan atas persiapan dan pelaksanaan akreditasi untuk memastikan kesesuaian dengan kriteria yang ditetapkan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">g.</td>
                                <td>Melakukan evaluasi hasil akreditasi dan merumuskan rekomendasi untuk perbaikan bagi peningkatan mutu institusi..</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">h.</td>
                                <td>Mendorong peningkatan mutu pendidikan secara berkelanjutan melalui hasil dan rekomendasi akreditasi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">i.</td>
                                <td>Berkoordinasi dengan unit terkait untuk implementasi tindak lanjut dari hasil akreditasi.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">j.</td>
                                <td>Mengelola data dan informasi terkait proses akreditasi untuk mendukung pengambilan keputusan pimpinan.</td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">k.</td>
                                <td>Melakukan sosialisasi kepada program studi dan unit terkait tentang pentingnya akreditasi dan bagaimana mempersiapkannya dengan baik.</td>
                            </tr>
                        </table>
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
