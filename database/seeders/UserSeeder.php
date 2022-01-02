<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Saad Fauzi',
               'email'=>'201953134@std.umk.ac.id',
               'password'=> bcrypt('admin123'),
            ],
        ];

        \DB::table('users')->insert($userData);
    }
}
