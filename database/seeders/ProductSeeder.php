<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD, ',
                'description' => 'Description 1',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details' => '14 inch, 8 GB, DDR4 SDRAM, 256GB',
                'description' => 'Description 2',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ]
        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
