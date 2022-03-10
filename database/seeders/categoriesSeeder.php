<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'boulangerie',
            'description' => 'coucou cest nous',
            ]);

        DB::table('categories')->insert([
            'name' => 'patisserie',
            'description' => 'coucou cest nous',
        ]);

    }
}
