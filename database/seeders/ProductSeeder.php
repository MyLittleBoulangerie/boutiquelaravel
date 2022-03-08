<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Psy\Util\Str;
use Ramsey\Uuid\Type\Decimal;
use Ramsey\Uuid\Type\Integer;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Pain aux céréales',
            'description'=>'Pain croustillant aux graines de gourge et de lin',
            'price'=> 1.95,
            'stock'=>100,
    ]);
    }
}
