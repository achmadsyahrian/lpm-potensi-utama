<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for the landing part of the application';

    public function handle()
    {
        $sitemap = Sitemap::create()
            // Home Page
            ->add(Url::create('/')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0)
            )
            // Fungsi dan Tugas
            ->add(Url::create('/fungsi-dan-tugas')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // Visi Misi
            ->add(Url::create('/visi-misi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.7)
            )
            // Struktur Organisasi
            ->add(Url::create('/struktur-organisasi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.7)
            )
            // tentang-spmi
            ->add(Url::create('/tentang-spmi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-universitas
            ->add(Url::create('/spmi-universitas')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-fakultas-ekonomi-bisnis
            ->add(Url::create('/spmi-fakultas-ekonomi-bisnis')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-fakultas-hukum
            ->add(Url::create('/spmi-fakultas-hukum')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-fakultas-ilmu-sosial-kependidikan
            ->add(Url::create('/spmi-fakultas-ilmu-sosial-kependidikan')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-fakultas-psikologi
            ->add(Url::create('/spmi-fakultas-psikologi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-fakultas-seni-desain
            ->add(Url::create('/spmi-fakultas-seni-desain')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // spmi-fakultas-teknik-ilmu-komputer
            ->add(Url::create('/spmi-fakultas-teknik-ilmu-komputer')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.8)
            )
            // kebijakan
            ->add(Url::create('/kebijakan')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.7)
            )
            // akreditasi
            ->add(Url::create('/akreditasi')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.6)
            )
            // laporan-monev
            ->add(Url::create('/laporan-monev')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.6)
            )
            // Berita
            ->add(Url::create('/berita')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
            )
            // Pengumuman
            ->add(Url::create('/pengumuman')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
            )
            // Kontak
            ->add(Url::create('/kontak')
                ->setLastModificationDate(now())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.9)
            );

        // Get all posts and filter by type
        $posts = Post::all();
        
        foreach ($posts as $post) {
            $priority = $post->created_at->gt(now()->subMonth()) ? 0.8 : 0.6;
        
            $url = Url::create("/{$post->getTypeLabelSlug()}/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority($priority);
        
            if ($post->type == 'news') {
                $sitemap->add($url->setUrl('/berita/' . $post->slug));
            } elseif ($post->type == 'announcement') {
                $sitemap->add($url->setUrl('/pengumuman/' . $post->slug));
            } elseif ($post->type == 'community_service') {
                $sitemap->add($url->setUrl('/pengabdian-masyarakat/' . $post->slug));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated!');
    }
}
