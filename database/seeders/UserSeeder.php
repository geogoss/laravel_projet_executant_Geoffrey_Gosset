<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'Gosset',
                'firstname' => 'Geoffrey',
                'age' => '28',
                'avatar_id' => 1,
                'role_id' => 1,
                'email' => "admin@admin.com",
                'password' => bcrypt('admin@admin.com')

            ],
            [
                'name' => 'Bouvier',
                'firstname' => 'Bastien',
                'age' => '32',
                'avatar_id' => 2,
                'role_id' => 2,
                'email' => "member@member.com",
                'password' => bcrypt('member@member.com')

            ],
            [
                'name' => 'Washington',
                'firstname' => 'Denzel',
                'age' => '46',
                'avatar_id' => 3,
                'role_id' => 2,
                'email' => "denzel@denzel.com",
                'password' => bcrypt('denzel@denzel.com')

            ],
            [
                'name' => 'Johnson',
                'firstname' => 'Dwayne',
                'age' => '50',
                'avatar_id' => 4,
                'role_id' => 1,
                'email' => "dwayne@dwayne.com",
                'password' => bcrypt('dwayne@dwayne.com')

            ],

        ]);
    }
}
