<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userTeams = [
            [
               'team_id'=>1,
               'user_id'=>1,
               'role'=> 'Admin',
            ],
        ];

        \DB::table('team_user')->insert($userTeams);
    }
}
