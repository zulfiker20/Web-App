<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories to assign articles
        $technologyCategory = Category::where('slug', 'technology')->first();
        $businessCategory = Category::where('slug', 'business')->first();
        $lifestyleCategory = Category::where('slug', 'lifestyle')->first();

        $articles = [
            [
                'title' => 'The Future of Web Development',
                'image' => 'article-1.jpg',
                'category_id' => $technologyCategory?->id ?? 1,
                'author' => 'John Smith',
                'description' => 'Exploring the latest trends and technologies shaping the future of web development, including AI integration, progressive web apps, and modern frameworks.',
            ],
            [
                'title' => 'Digital Transformation in Business',
                'image' => 'article-2.jpg',
                'category_id' => $businessCategory?->id ?? 2,
                'author' => 'Sarah Johnson',
                'description' => 'How businesses are leveraging digital technologies to improve efficiency, customer experience, and competitive advantage.',
            ],
            [
                'title' => 'Remote Work Best Practices',
                'image' => 'article-3.jpg',
                'category_id' => $lifestyleCategory?->id ?? 3,
                'author' => 'Mike Davis',
                'description' => 'Essential tips and strategies for maintaining productivity and work-life balance while working remotely.',
            ],
            [
                'title' => 'Mobile-First Design Principles',
                'image' => 'article-4.jpg',
                'category_id' => $technologyCategory?->id ?? 1,
                'author' => 'Emily Wilson',
                'description' => 'Why mobile-first design is crucial for modern websites and how to implement it effectively.',
            ],
            [
                'title' => 'Building Customer Loyalty Online',
                'image' => 'article-5.jpg',
                'category_id' => $businessCategory?->id ?? 2,
                'author' => 'John Smith',
                'description' => 'Strategies for creating lasting relationships with customers in the digital age through exceptional online experiences.',
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['title' => $article['title']],
                $article
            );
        }
    }
}

