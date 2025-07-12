<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['kode_mk' => 'DU23127', 'nama_mk' => 'Bahasa Indonesia', 'dosen' => 'RANI SRI WAHYUNI, M.Hum'],
            ['kode_mk' => 'DU23128', 'nama_mk' => 'Pancasila', 'dosen' => 'Dr. SRI SUHARTINI, M.Si.'],
            ['kode_mk' => 'IF23121', 'nama_mk' => 'Algoritma Teori Pemrograman', 'dosen' => 'IRSAN JAELANI, S.Kom., M.Kom'],
            ['kode_mk' => 'IF23125', 'nama_mk' => 'Diskrit Matematika', 'dosen' => 'CHANDRA DEWI LESTARI, M.Kom'],
            ['kode_mk' => 'IF23126', 'nama_mk' => 'Statistik', 'dosen' => 'SYARIFUL ALAM, S.Si., M.Kom'],
            ['kode_mk' => 'IF23222', 'nama_mk' => 'Praktek Algoritma Pemrograman', 'dosen' => 'DADI ISKANDAR, M.Kom'],
            ['kode_mk' => 'IF23223', 'nama_mk' => 'Lanjut Web Pemrograman', 'dosen' => 'BAYU PRASETIO, M.Kom'],
            ['kode_mk' => 'IF23224', 'nama_mk' => 'Data Dasar', 'dosen' => 'DEDE IRMAYANTI, ST., M.Kom'],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['kode_mk' => $product['kode_mk']], // Cek berdasarkan kode_mk
                $product
            );
        }
    }
}