<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsInvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userTeamsInvitation = [
            [
               'team_id'=>1,
               'email'=>'admin@admin.com',
               'role'=> 'Admin',
            ],
        ];

        \DB::table('team_invitations')->insert($userTeamsInvitation);
    }
}
