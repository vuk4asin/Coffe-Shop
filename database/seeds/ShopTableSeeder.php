<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Shop::class, 12)->create();
    }
}
