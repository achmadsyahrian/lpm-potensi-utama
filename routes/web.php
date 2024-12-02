<?php

use App\Http\Controllers\Landing\AcademicController;
use App\Http\Controllers\Landing\AnnouncementController;
use App\Http\Controllers\Landing\CommunityController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\NewsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Research;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});


Route::group(['namespace' => 'Landing', 'as' => 'landing.'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Profile
        // Visi Misi
        Route::get('/visi-misi', function() {
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();

            return view('landing.profile.purpose', compact('latestPosts'));
        })->name('purpose');

        Route::get('/fungsi-dan-tugas', function() {
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();

            return view('landing.profile.profile', compact('latestPosts'));
        })->name('profile');

        Route::get('/struktur-organisasi', function() {
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();

            return view('landing.profile.structure', compact('latestPosts'));
        })->name('structure');

        Route::get('/tentang-spmi', function() {
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();

            return view('landing.about', compact('latestPosts'));
        })->name('about');

    // SPMI
        // Univ
        Route::get('/spmi-universitas', function() {
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();

            return view('landing.spmi.university', compact('latestPosts'));
        })->name('spmi.university');

        // Prodi
            // FEB
            Route::get('/spmi-fakultas-ekonomi-bisnis', function() {
                $latestPosts = Post::where('type', 'news')
                    ->where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

                return view('landing.spmi.academics.feb', compact('latestPosts'));
            })->name('spmi.academics.feb');

            // FH
            Route::get('/spmi-fakultas-hukum', function() {
                $latestPosts = Post::where('type', 'news')
                    ->where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

                return view('landing.spmi.academics.fh', compact('latestPosts'));
            })->name('spmi.academics.fh');

            // FISK
            Route::get('/spmi-fakultas-ilmu-sosial-kependidikan', function() {
                $latestPosts = Post::where('type', 'news')
                    ->where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

                return view('landing.spmi.academics.fisk', compact('latestPosts'));
            })->name('spmi.academics.fisk');

            // FPSI
            Route::get('/spmi-fakultas-psikologi', function() {
                $latestPosts = Post::where('type', 'news')
                    ->where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

                return view('landing.spmi.academics.fpsi', compact('latestPosts'));
            })->name('spmi.academics.fpsi');

            // FSD
            Route::get('/spmi-fakultas-seni-desain', function() {
                $latestPosts = Post::where('type', 'news')
                    ->where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

                return view('landing.spmi.academics.fsd', compact('latestPosts'));
            })->name('spmi.academics.fsd');
            
            // FTIK
            Route::get('/spmi-fakultas-teknik-ilmu-komputer', function() {
                $latestPosts = Post::where('type', 'news')
                    ->where('is_published', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();

                return view('landing.spmi.academics.ftik', compact('latestPosts'));
            })->name('spmi.academics.ftik');
        
    // Kebijakan
    Route::get('/kebijakan', function() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('landing.policy', compact('latestPosts'));
    })->name('policy');

    // Akreditasi
    Route::get('/akreditasi', function() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('landing.accreditation', compact('latestPosts'));
    })->name('accreditation');

    // Laporan Monev
    Route::get('/laporan-monev', function() {
        $latestPosts = Post::where('type', 'news')
            ->where('is_published', 1)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        return view('landing.report', compact('latestPosts'));
    })->name('report');

    // Informasi
        // Berita
        Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
        Route::get('/berita/category/{categorySlug}', [NewsController::class, 'byCategory'])->name('news.category');
        Route::get('/berita/tag/{tagSlug}', [NewsController::class, 'byTag'])->name('news.tag');
        Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('news.show');

        // Pengumuman
        Route::get('/pengumuman', [AnnouncementController::class, 'index'])->name('announcement.index');
        Route::get('/pengumuman/category/{categorySlug}', [AnnouncementController::class, 'byCategory'])->name('announcement.category');
        Route::get('/pengumuman/tag/{tagSlug}', [AnnouncementController::class, 'byTag'])->name('announcement.tag');
        Route::get('/pengumuman/{slug}', [AnnouncementController::class, 'show'])->name('announcement.show');



        // Kontak Kami
        Route::get('/kontak', function(){
            $latestPosts = Post::where('type', 'news')
                ->where('is_published', 1)
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
            $tags = Tag::all();
            $categories = Category::all();

            return view('landing.contact', compact('latestPosts', 'tags', 'categories'));
        })->name('contact');


});
 
