<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // fiction -> 1
        DB::table('categories')->insert([
            'category' => "Fiction"
        ]);

        // science -> 2
        DB::table('categories')->insert([
            'category' => "Science"
        ]);

        // computer -> 3
        DB::table('categories')->insert([
            'category' => "Computer"
        ]);

        // horor -> 4
        DB::table('categories')->insert([
            'category' => "Fantasy"
        ]);

        // werewolf -> 5 -> buat empty
        DB::table('categories')->insert([
            'category' => "Werewolf"
        ]);

        // thriller-> 6 -> buat empty
        DB::table('categories')->insert([
            'category' => "Thriller"
        ]);
    }
}
