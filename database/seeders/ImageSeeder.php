<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([

            [
                'name' => 'chien',
                'src' => 'animal1.jpg',
                'categorie_id' => '1'
            ],
            [
                'name' => 'chat',
                'src' => 'animal2.jpg',
                'categorie_id' => '1'
            ],
            [
                'name' => 'martin',
                'src' => 'animal3.jpg',
                'categorie_id' => '1'
            ],
            [
                'name' => 'aigle',
                'src' => 'animal4.jpg',
                'categorie_id' => '1'
            ],
            [
                'name' => 'technologie1',
                'src' => 'tech1.jpg',
                'categorie_id' => '2'
            ],
            [
                'name' => 'technologie1',
                'src' => 'tech2.jpg',
                'categorie_id' => '2'
            ],
            [
                'name' => 'technologie1',
                'src' => 'tech3.jpg',
                'categorie_id' => '2'
            ],
            [
                'name' => 'voiture1',
                'src' => 'voiture1.jpg',
                'categorie_id' => '3'
            ],
            [
                'name' => 'voiture2',
                'src' => 'voiture2.jpg',
                'categorie_id' => '3'
            ],
            [
                'name' => 'voiture3',
                'src' => 'voiture3.jpg',
                'categorie_id' => '3'
            ],


        ]);
    }
}
