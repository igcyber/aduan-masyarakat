<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'platform' => 'facebook',
            'nama_halaman' => 'Nama Halaman Facebook',
            'link_url' => 'https://www.facebook.com/example',
        ]);

        Footer::create([
            'platform' => 'twitter',
            'nama_halaman' => 'Nama Halaman Twitter',
            'link_url' => 'https://twitter.com/example',
        ]);

        Footer::create([
            'platform' => 'instagram',
            'nama_halaman' => 'Nama Halaman Instagram',
            'link_url' => 'https://instagram.com/example',
        ]);
    }
}
