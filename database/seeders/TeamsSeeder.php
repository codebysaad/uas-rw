<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
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
               'user_id'=>1,
               'name'=>'Tim Pengembang',
               'personal_team'=> 1,
            ],
        ];

        \DB::table('teams')->insert($userTeams);
    }
}
