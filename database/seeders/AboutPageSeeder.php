<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutPage = [
            'title' => 'About Our Company',
            'description' => 'We are a leading technology company dedicated to delivering innovative solutions that drive business growth. Our team of experienced professionals combines technical expertise with creative vision to create exceptional digital experiences.',
            'image' => 'about-us.jpg',
        ];

        AboutPage::updateOrCreate(
            ['title' => $aboutPage['title']],
            $aboutPage
        );
    }
}

