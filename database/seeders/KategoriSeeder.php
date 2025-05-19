<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['id_kategori' => 1, 'nama_kategori' => 'CPU'],
            ['id_kategori' => 2, 'nama_kategori' => 'Motherboard'],
            ['id_kategori' => 3, 'nama_kategori' => 'GPU'],
            ['id_kategori' => 4, 'nama_kategori' => 'RAM'],
            ['id_kategori' => 5, 'nama_kategori' => 'Storage'],
            ['id_kategori' => 6, 'nama_kategori' => 'PSU'],
            ['id_kategori' => 7, 'nama_kategori' => 'Casing'],
            ['id_kategori' => 8, 'nama_kategori' => 'Colling CPU'],
        ]);
    }
}
