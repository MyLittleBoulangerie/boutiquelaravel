<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('products')->insert([
            'name'=>Str::random(15),
            'description'=>Str::random(200),
            'price'=>float::random(),
    ]);
    }
}
