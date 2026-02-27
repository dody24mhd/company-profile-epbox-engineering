<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create categories
        $categories = [
            'Technology' => 'Latest technology updates and innovations',
            'Projects' => 'Our completed and ongoing projects',
            'Partnerships' => 'Strategic partnerships and collaborations',
            'Industry News' => 'Industry insights and market updates'
        ];

        foreach ($categories as $name => $description) {
            Category::firstOrCreate(
                ['name' => $name],
                [
                    'slug' => \Illuminate\Support\Str::slug($name),
                    'description' => $description,
                    'is_active' => true
                ]
            );
        }

        // Create sample blogs (3 blogs only with EPBOX images)
        $blogs = [
            [
                'title' => 'Extended Partnership with MODEC',
                'description' => 'EPBOX Engineering extends strategic partnership with MODEC for development of next-generation FPSO control systems with ATEX/IECEx certified technology.',
                'content' => '<p>EPBOX Engineering is excited to announce the extension of our strategic partnership with MODEC for the development of next-generation FPSO control systems. This collaboration will focus on implementing ATEX/IECEx certified technology to enhance safety and efficiency in offshore operations.</p><p>Our team has been working closely with MODEC to develop innovative solutions that meet the highest industry standards. This partnership represents a significant milestone in our commitment to advancing offshore automation technology.</p>',
                'excerpt' => 'EPBOX Engineering extends strategic partnership with MODEC for development of next-generation FPSO control systems with ATEX/IECEx certified technology.',
                'author' => 'EPBOX Engineering Team',
                'is_published' => true,
                'is_featured' => true,
                'published_at' => now()->subDays(5),
                'date_publish' => now()->subDays(5)->format('Y-m-d'),
                'category_id' => Category::where('name', 'Partnerships')->first()->id,
                'categories' => 'Partnerships',
                'img' => 'img/epbox/gambar1.png',
                'image_url' => 'img/epbox/gambar1.png',
                'tags' => 'Partnership, MODEC, FPSO, Control Systems, ATEX, IECEx',
                'meta_title' => 'Extended Partnership with MODEC - EPBOX Engineering',
                'meta_description' => 'EPBOX Engineering extends strategic partnership with MODEC for next-generation FPSO control systems.'
            ],
            [
                'title' => 'SCADA Integration Project Completion',
                'description' => 'Successfully completed SCADA integration project for IndoCement with real-time monitoring system and automated control for production processes.',
                'content' => '<p>We have successfully completed the SCADA integration project for IndoCement with a comprehensive real-time monitoring system and automated control for production processes. The system provides complete visibility into plant operations and enables predictive maintenance.</p><p>This project demonstrates our expertise in industrial automation and our commitment to delivering high-quality solutions that meet our clients\' specific requirements.</p>',
                'excerpt' => 'Successfully completed SCADA integration project for IndoCement with real-time monitoring system and automated control for production processes.',
                'author' => 'Technical Team',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(3),
                'date_publish' => now()->subDays(3)->format('Y-m-d'),
                'category_id' => Category::where('name', 'Projects')->first()->id,
                'categories' => 'Projects',
                'img' => 'img/epbox/gambar2.png',
                'image_url' => 'img/epbox/gambar2.png',
                'tags' => 'SCADA, Integration, IndoCement, Real-time Monitoring, Automation',
                'meta_title' => 'SCADA Integration Project Completion - EPBOX Engineering',
                'meta_description' => 'Successfully completed SCADA integration project for IndoCement with real-time monitoring.'
            ],
            [
                'title' => 'New Application FAT Testing',
                'description' => 'Conducting Factory Acceptance Testing (FAT) for latest control panel application with IEC 61850 standard for protection and control systems.',
                'content' => '<p>We are currently conducting Factory Acceptance Testing (FAT) for our latest control panel application with IEC 61850 standard for protection and control systems. This testing ensures that all systems meet the required specifications before deployment.</p><p>The FAT process includes comprehensive testing of all hardware and software components, ensuring reliability and performance in real-world conditions.</p>',
                'excerpt' => 'Conducting Factory Acceptance Testing (FAT) for latest control panel application with IEC 61850 standard for protection and control systems.',
                'author' => 'Quality Assurance Team',
                'is_published' => true,
                'is_featured' => false,
                'published_at' => now()->subDays(1),
                'date_publish' => now()->subDays(1)->format('Y-m-d'),
                'category_id' => Category::where('name', 'Technology')->first()->id,
                'categories' => 'Technology',
                'img' => 'img/epbox/gambar3.png',
                'image_url' => 'img/epbox/gambar3.png',
                'tags' => 'FAT Testing, IEC 61850, Control Panels, Quality Assurance, Standards',
                'meta_title' => 'Factory Acceptance Testing for New Application - EPBOX Engineering',
                'meta_description' => 'Conducting FAT testing for latest control panel application with IEC 61850 standard.'
            ]
        ];

        foreach ($blogs as $blogData) {
            Blog::create($blogData);
        }
    }
}