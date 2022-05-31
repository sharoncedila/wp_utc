<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // fiction
        // 1 -> Things We Never Got Over
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => "Things We Never Got Over",
            'picture' => "thingswenevergotover"
        ]);

        // 2 -> Where the Crawdads Sing
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => "Where the Crawdads Sing",
            'picture' => "wherethecrawdadssing"
        ]);

        // 3 -> The Last Thing He Told Me
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => "The Last Thing He Told Me",
            'picture' => "thelastthinghetoldme"
        ]);

        // 4 -> All Systems Red        
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => "All Systems Red",
            'picture' => "allsystemsred"
        ]);

        // 5 -> Rogue Protocol
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => "Rogue Protocol",
            'picture' => "rogueprotocol"
        ]);

        // 6 -> Wish You Were Here
        DB::table('books')->insert([
            'category_id' => '1',
            'title' => "Wish You Were Here",
            'picture' => "wishyouwerehere"
        ]);


        // science
        // 7 -> A Brief History of Time
        DB::table('books')->insert([
            'category_id' => '2',
            'title' => "A Brief History of Time",
            'picture' => "abriehistoryoftime"
        ]);

        // 8 -> The Making of the Atomic Bomb
        DB::table('books')->insert([
            'category_id' => '2',
            'title' => "The Making of the Atomic Bomb",
            'picture' => "themakingoftheatomicbomb"
        ]);

        // 9 -> Sickening: How Big Pharma Broke American Health Care and How We Can Repair It
        DB::table('books')->insert([
            'category_id' => '2',
            'title' => "Sickening: How Big Pharma Broke American Health Care and How We Can Repair It",
            'picture' => "sickening"
        ]);

        // 10 -> Dopamine Nation: Finding Balance in the Age of Indulgence
        DB::table('books')->insert([
            'category_id' => '2',
            'title' => "Dopamine Nation: Finding Balance in the Age of Indulgence",
            'picture' => "dopaminenation"
        ]);
        
        // 11 -> Behave: The Biology of Humans at Our Best and Worst
        DB::table('books')->insert([
            'category_id' => '2',
            'title' => "Behave: The Biology of Humans at Our Best and Worst",
            'picture' => "behave"
        ]);

        // 12 -> Nursing Informatics and the Foundation of Knowledge
        DB::table('books')->insert([
            'category_id' => '2',
            'title' => "Nursing Informatics and the Foundation of Knowledge",
            'picture' => "nursinginformaticsandthefoundationofknowledge"
        ]);


        // computer
        // 13 -> AI 2041: Ten Visions for Our Future
        DB::table('books')->insert([
            'category_id' => '3',
            'title' => "AI 2041: Ten Visions for Our Future",
            'picture' => "AI2041"
        ]);

        // 14 -> Data Mesh
        DB::table('books')->insert([
            'category_id' => '3',
            'title' => "Data Mesh",
            'picture' => "datamesh"
        ]);

        // 15 -> Learning Domain-Driven Design
        DB::table('books')->insert([
            'category_id' => '3',
            'title' => "Learning Domain-Driven Design",
            'picture' => "learningdomain-drivendesign"
        ]);

        // 16 -> Machines like Us: Toward AI with Common Sense
        DB::table('books')->insert([
            'category_id' => '3',
            'title' => "Machines like Us: Toward AI with Common Sense",
            'picture' => "machineslikeus"
        ]);

        // 17 -> Deep Learning for Vision Systems
        DB::table('books')->insert([
            'category_id' => '3',
            'title' => "Deep Learning for Vision Systems",
            'picture' => "deeplearningforvisionsystems"
        ]);

        // 18 -> Small Signal Audio Design
        DB::table('books')->insert([
            'category_id' => '3',
            'title' => "Small Signal Audio Design",
            'picture' => "smallsignalaudiodesign"
        ]);

        // fantasy
        // 19 -> Spelunking Through Hell
        DB::table('books')->insert([
            'category_id' => '4',
            'title' => "Spelunking Through Hell",
            'picture' => "spelunkingthroughhell"
        ]);

        // 20 -> A Game of Thrones
        DB::table('books')->insert([
            'category_id' => '4',
            'title' => "A Game of Thrones",
            'picture' => "got"
        ]);

        // 21 -> The Great Hunt
        DB::table('books')->insert([
            'category_id' => '4',
            'title' => "The Great Hunt",
            'picture' => "greathunt"
        ]);

        // 22 -> The Dragon Reborn
        DB::table('books')->insert([
            'category_id' => '4',
            'title' => "The Dragon Reborn",
            'picture' => "dragonreborn"
        ]);

        // 23 -> The Way of Kings
        DB::table('books')->insert([
            'category_id' => '4',
            'title' => "The Way of Kings",
            'picture' => "wayofkings"
        ]);

        // 24 -> The Awakening
        DB::table('books')->insert([
            'category_id' => '4',
            'title' => "The Awakening",
            'picture' => "awakening"
        ]);
    }
}
