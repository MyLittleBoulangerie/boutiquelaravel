<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class CategoriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'name' => 'Boulangeries',
            'description' => 'Dans cette catégorie vous trouverez toutes nos pains.',
        ]);

        DB::table('categories')->insert([
            'name' => 'Pâtisseries',
            'description' => 'Dans cette catégorie vous trouverez toutes nos pâtisseries.',
        ]);

        DB::table('categories')->insert([
            'name' => 'Viennoiseries',
            'description' => 'Dans cette catégorie vous trouverez toutes nos viennoiseries.',
        ]);
    }
}
