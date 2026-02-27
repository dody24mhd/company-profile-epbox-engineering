<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample projects
        $projects = [
            [
                'title' => 'MODEC FPSO',
                'description' => 'Explosion Proof Fire & Gas Control Panels (IECEx/ATEX Certified)',
                'categories' => 'Safety & Compliance',
                'status' => 'published',
                'is_featured' => true
            ],
            [
                'title' => 'Google Data Center',
                'description' => 'Redundant Power Distribution & PLC Systems',
                'categories' => 'System Integration',
                'status' => 'published',
                'is_featured' => true
            ],
            [
                'title' => 'IndoCement',
                'description' => 'SCADA Integration for Scrubber & Process Monitoring System',
                'categories' => 'Automation Integration',
                'status' => 'published',
                'is_featured' => false
            ],
            [
                'title' => 'Cleanroom Facility',
                'description' => 'LV Distribution Panels with surge protection, integrated with BMS',
                'categories' => 'Control Panel Engineering',
                'status' => 'published',
                'is_featured' => false
            ],
            [
                'title' => 'Data Center Backup',
                'description' => 'Backup power systems and redundancy solutions for critical data infrastructure',
                'categories' => 'Engineering Support',
                'status' => 'published',
                'is_featured' => false
            ],
            [
                'title' => 'Fire Fighting System',
                'description' => 'Advanced fire detection and suppression control systems with emergency response integration',
                'categories' => 'Safety & Compliance',
                'status' => 'published',
                'is_featured' => true
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}