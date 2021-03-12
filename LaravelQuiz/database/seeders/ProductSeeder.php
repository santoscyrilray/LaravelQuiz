<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'Product Name' => 'test',
            'Product Description' => 'test',
            'Price' => '35',
            'Status' => 'test',
        ]);
        
    }
}
