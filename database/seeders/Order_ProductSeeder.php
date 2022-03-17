<?php

namespace Database\Seeders;


use App\Models\Order_Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Database\Factories\Products_Has_OrderFactory;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_Product::factory(5)->create();
    }
}
