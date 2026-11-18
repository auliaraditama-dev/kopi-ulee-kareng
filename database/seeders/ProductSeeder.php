<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'nama_produk' => 'Kopi Ulee Kareng Original',
                'deskripsi' => 'Kopi khas Aceh dengan aroma kuat.',
                'harga' => 25000,
                'stok' => 60,
            ],
            [
                'nama_produk' => 'Kopi Sanger',
                'deskripsi' => 'Perpaduan kopi dan susu yang lembut.',
                'harga' => 18000,
                'stok' => 60,
            ],
            [
                'nama_produk' => 'Kopi Tubruk Aceh',
                'deskripsi' => 'Sajian tradisional dengan rasa pekat.',
                'harga' => 15000,
                'stok' => 60,
            ],
            [
                'nama_produk' => 'Kopi Espreso',
                'deskripsi' => 'Ekstraksi kopi murni bertekanan tinggi dengan rasa pekat dan lapisan krema di atasnya, atau versi lebih ringan jika ditambah air panas.',
                'harga' => 35000,
                'stok' => 60,
            ],
            [
                'nama_produk' => 'Coffe Latte',
                'deskripsi' => 'Perpaduan espresso dengan susu panas yang dikukus lembut hingga menghasilkan busa halus (microfoam) yang sering dihias dengan pola seni (latte art).',
                'harga' => 45000,
                'stok' => 60,
            ],
            [
                'nama_produk' => 'Kopi Susu Gula Aren',
                'deskripsi' => 'Sajian kopi susu dingin kekinian yang memadukan espresso atau kopi saring pekat dengan susu segar, es batu, dan manis legit dari sirup gula aren cair.',
                'harga' => 55000,
                'stok' => 60,
            ],
        ];

        foreach ($products as $product) {
            Product::query()->create($product);
        }
    }
}
