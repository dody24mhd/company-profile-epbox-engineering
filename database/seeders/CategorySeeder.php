<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Manufacturing',
                'slug' => 'manufacturing',
                'description' => 'Articles about manufacturing processes and control panel applications in manufacturing industries.'
            ],
            [
                'name' => 'Technology',
                'slug' => 'technology',
                'description' => 'Latest technology trends and innovations in control panel and automation systems.'
            ],
            [
                'name' => 'Safety',
                'slug' => 'safety',
                'description' => 'Safety standards, regulations, and best practices in control panel design and operation.'
            ],
            [
                'name' => 'Maintenance',
                'slug' => 'maintenance',
                'description' => 'Maintenance tips, schedules, and procedures for control panels and automation systems.'
            ],
            [
                'name' => 'SCADA',
                'slug' => 'scada',
                'description' => 'SCADA system integration, implementation, and optimization articles.'
            ],
            [
                'name' => 'Innovation',
                'slug' => 'innovation',
                'description' => 'Innovative solutions and cutting-edge developments in industrial automation.'
            ],
            [
                'name' => 'Case Study',
                'slug' => 'case-study',
                'description' => 'Real-world project case studies and success stories.'
            ],
            [
                'name' => 'Company News',
                'slug' => 'company-news',
                'description' => 'Latest news and updates about EPBox Engineering company activities.'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
