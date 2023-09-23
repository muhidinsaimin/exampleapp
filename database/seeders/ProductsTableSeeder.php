<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Glade Air Freshener 225 ml',
            'detail' => 'Pewangi Ruangan - Glade Air Freshener 225 ML',
        ]);
        Product::create([
            'name' => 'Aqua 330 ml',
            'detail' => 'Air Mineral - Aqua 330 ML',
        ]);
    }
}
