<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([

           [
               'name' => 'pokemon1',
               'src' => 'pokemon1.jpg'
           ],
           [
               'name' => 'pokemon2',
               'src' => 'pokemon2.jpg'
           ],
           [
               'name' => 'pokemon3',
               'src' => 'pokemon3.jpg'
           ],
           [
               'name' => 'pokemon4',
               'src' => 'pokemon4.jpg'
           ],
           [
               'name' => 'pokemon5',
               'src' => 'pokemon5.jpg'
           ],

        ]);
    }
}
