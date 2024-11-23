<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Akuntansi',
            'slug' => 'akuntansi',
        ]);

        Tag::create([
            'name' => 'Manajemen',
            'slug' => 'manajemen',
        ]);

        Tag::create([
            'name' => 'Teknologi Informasi',
            'slug' => 'teknologi-informasi',
        ]);

        Tag::create([
            'name' => 'Kurikulum',
            'slug' => 'kurikulum',
        ]);

        Tag::create([
            'name' => 'SPMI',
            'slug' => 'spmi',
        ]);

        Tag::create([
            'name' => 'Instrumen BAN-PT',
            'slug' => 'instrumen-ban-pt',
        ]);

        Tag::create([
            'name' => 'Pelaporan',
            'slug' => 'pelaporan',
        ]);

        Tag::create([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);
    }
}
