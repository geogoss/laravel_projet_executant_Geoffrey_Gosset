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
               'src' => 'pokemon1'
           ],
           [
               'name' => 'pokemon2',
               'src' => 'pokemon2'
           ],
           [
               'name' => 'pokemon3',
               'src' => 'pokemon3'
           ],

        ]);
    }
}