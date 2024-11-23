<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan Kategori Default
        Category::create([
            'name' => 'Akreditasi',
            'slug' => 'akreditasi',
        ]);

        Category::create([
            'name' => 'Monitoring',
            'slug' => 'monitoring',
        ]);

        Category::create([
            'name' => 'Evaluasi',
            'slug' => 'evaluasi',
        ]);

        Category::create([
            'name' => 'Pelatihan',
            'slug' => 'pelatihan',
        ]);

        Category::create([
            'name' => 'Panduan',
            'slug' => 'panduan',
        ]);
    }
}
