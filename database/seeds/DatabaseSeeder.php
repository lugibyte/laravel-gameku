<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // koding ini digunakan untuk menjalakan seeder
        $this->call(ProductTableSeeder::class);
    }
}
