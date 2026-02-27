<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample testimonials
        $testimonials = [
            [
                'name' => 'John Smith',
                'company' => 'MODEC',
                'position' => 'Project Manager',
                'categories' => 'LinkedIn Review',
                'description' => 'EPBOX Engineering delivered exceptional explosion-proof control panels for our FPSO project. Their attention to detail and compliance with IECEx/ATEX standards was outstanding. Highly recommended for offshore projects.'
            ],
            [
                'name' => 'Sarah Johnson',
                'company' => 'Google',
                'position' => 'Data Center Operations Lead',
                'categories' => 'Industry Review',
                'description' => 'The power distribution systems provided by EPBOX Engineering have been running flawlessly in our data center for over 2 years. Their technical expertise and reliability are unmatched.'
            ],
            [
                'name' => 'Michael Chen',
                'company' => 'IndoCement',
                'position' => 'Plant Manager',
                'categories' => 'Interview On Site',
                'description' => 'EPBOX\'s SCADA integration for our scrubber system has significantly improved our process monitoring capabilities. Their team\'s understanding of industrial automation is impressive.'
            ],
            [
                'name' => 'Lisa Rodriguez',
                'company' => 'Cleanroom Solutions Inc.',
                'position' => 'Engineering Director',
                'categories' => 'Client Feedback',
                'description' => 'The LV distribution panels with surge protection that EPBOX designed for our cleanroom facility exceeded our expectations. The integration with our BMS was seamless.'
            ],
            [
                'name' => 'David Kim',
                'company' => 'TechCorp Data Centers',
                'position' => 'CTO',
                'categories' => 'Project Review',
                'description' => 'EPBOX Engineering\'s backup power solutions have been critical to our data center operations. Their redundancy systems have prevented any downtime during power outages.'
            ],
            [
                'name' => 'Emma Wilson',
                'company' => 'Safety First Industries',
                'position' => 'Safety Engineer',
                'categories' => 'Instagram Review',
                'description' => 'The fire detection and suppression control systems from EPBOX are top-notch. Their emergency response integration has enhanced our safety protocols significantly.'
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
