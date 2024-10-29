<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produks = [
            [
                'route' => 'Produk1',
                'name' => 'Produk 1',
            ],
            [
                'route' => 'Produk2',
                'name' => 'Produk 2',
            ],
        ];

        foreach($produks as $produk) {
            Produk::create($produk);
        }
    }
}
