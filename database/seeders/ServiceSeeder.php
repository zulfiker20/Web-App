<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'icon' => 'fas fa-code',
                'sub_title' => 'Custom Web Solutions',
                'description' => 'We create modern, responsive websites that are fast, secure, and user-friendly.',
            ],
            [
                'title' => 'Mobile App Development',
                'icon' => 'fas fa-mobile-alt',
                'sub_title' => 'iOS & Android Apps',
                'description' => 'Native and cross-platform mobile applications that deliver exceptional user experiences.',
            ],
            [
                'title' => 'Digital Marketing',
                'icon' => 'fas fa-chart-line',
                'sub_title' => 'Grow Your Business',
                'description' => 'Comprehensive digital marketing strategies to boost your online presence and reach.',
            ],
            [
                'title' => 'UI/UX Design',
                'icon' => 'fas fa-paint-brush',
                'sub_title' => 'Beautiful Interfaces',
                'description' => 'User-centered design solutions that make your products intuitive and engaging.',
            ],
            [
                'title' => 'SEO Optimization',
                'icon' => 'fas fa-search',
                'sub_title' => 'Higher Rankings',
                'description' => 'Improve your search engine visibility and drive more organic traffic to your website.',
            ],
            [
                'title' => 'E-commerce Solutions',
                'icon' => 'fas fa-shopping-cart',
                'sub_title' => 'Online Stores',
                'description' => 'Complete e-commerce platforms that help you sell products and services online.',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                $service
            );
        }
    }
}

