<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Technology',
                'slug' => 'technology',
            ],
            [
                'title' => 'Business',
                'slug' => 'business',
            ],
            [
                'title' => 'Lifestyle',
                'slug' => 'lifestyle',
            ],
            [
                'title' => 'Health',
                'slug' => 'health',
            ],
            [
                'title' => 'Travel',
                'slug' => 'travel',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}

