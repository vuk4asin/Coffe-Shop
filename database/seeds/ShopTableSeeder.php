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
        array_map('unlink', glob("public/images/*"));
        factory(Shop::class, 12)->create();
    }
}
