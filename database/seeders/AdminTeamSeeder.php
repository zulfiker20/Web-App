<?php

namespace Database\Seeders;

use App\Models\AdminTeam;
use Illuminate\Database\Seeder;

class AdminTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'John Smith',
                'designation' => 'CEO & Founder',
                'image' => 'team-1.jpg',
                'facebook' => 'https://facebook.com/johnsmith',
                'twitter' => 'https://twitter.com/johnsmith',
                'instagram' => 'https://instagram.com/johnsmith',
            ],
            [
                'name' => 'Sarah Johnson',
                'designation' => 'Lead Developer',
                'image' => 'team-2.jpg',
                'facebook' => 'https://facebook.com/sarahjohnson',
                'twitter' => 'https://twitter.com/sarahjohnson',
                'instagram' => 'https://instagram.com/sarahjohnson',
            ],
            [
                'name' => 'Mike Davis',
                'designation' => 'UI/UX Designer',
                'image' => 'team-3.jpg',
                'facebook' => 'https://facebook.com/mikedavis',
                'twitter' => 'https://twitter.com/mikedavis',
                'instagram' => 'https://instagram.com/mikedavis',
            ],
            [
                'name' => 'Emily Wilson',
                'designation' => 'Marketing Director',
                'image' => 'team-4.jpg',
                'facebook' => 'https://facebook.com/emilywilson',
                'twitter' => 'https://twitter.com/emilywilson',
                'instagram' => 'https://instagram.com/emilywilson',
            ],
        ];

        foreach ($teamMembers as $member) {
            AdminTeam::updateOrCreate(
                ['name' => $member['name']],
                $member
            );
        }
    }
}

