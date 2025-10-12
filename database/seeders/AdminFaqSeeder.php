<?php

namespace Database\Seeders;

use App\Models\AdminFaq;
use Illuminate\Database\Seeder;

class AdminFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'title' => 'What services do you offer?',
                'description' => 'We offer comprehensive web development, mobile app development, digital marketing, UI/UX design, SEO optimization, and e-commerce solutions.',
            ],
            [
                'title' => 'How long does a project typically take?',
                'description' => 'Project timelines vary depending on complexity and requirements. Simple websites can take 2-4 weeks, while complex applications may take 3-6 months.',
            ],
            [
                'title' => 'Do you provide ongoing support?',
                'description' => 'Yes, we offer comprehensive maintenance and support packages to ensure your digital solutions continue to perform optimally.',
            ],
            [
                'title' => 'What technologies do you use?',
                'description' => 'We use modern technologies including Laravel, React, Vue.js, Node.js, Python, and various cloud platforms to deliver robust solutions.',
            ],
            [
                'title' => 'Do you offer custom solutions?',
                'description' => 'Absolutely! We specialize in creating custom solutions tailored to your specific business needs and requirements.',
            ],
            [
                'title' => 'What is your pricing structure?',
                'description' => 'Our pricing is project-based and depends on scope, complexity, and timeline. We provide detailed quotes after understanding your requirements.',
            ],
        ];

        foreach ($faqs as $faq) {
            AdminFaq::updateOrCreate(
                ['title' => $faq['title']],
                $faq
            );
        }
    }
}

