<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* モデルファクトリの場合記述*/
        /*$this->call(AuthorsTableSeeder::class);*/

        /**/
        Product::factory(10)->create();

        // \App\Models\User::factory(10)->create();
    }
}
