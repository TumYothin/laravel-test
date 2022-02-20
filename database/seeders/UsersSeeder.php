<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = [
            [
                'name' => 'yothin',
                'email' => '622021125@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 1,
                 'created_at' => Carbon::now(),
                 'updated_at'=> Carbon::now(),
            ],
            [
                'name' => 'TUM',
                'email' => 'yothin@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 2,
                 'created_at' => Carbon::now(),
                 'updated_at'=> Carbon::now(),
            ],
        ];

        DB::table('users')->insert($date);
    }
}
