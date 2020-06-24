<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'description' => 'Barang 1',
            'price' => 5000,
            'quantity' => 10
        ]);
    }
}
