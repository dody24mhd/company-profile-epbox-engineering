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
        $projects = [
            [
                'title' => 'Automotive Assembly Line Control System',
                'description' => 'Complete automation system for automotive assembly with robotic integration and quality control. This project involved designing and implementing a comprehensive control panel system that manages robotic arms, conveyor belts, and quality inspection stations. The system ensures precise timing and coordination between all components while maintaining high safety standards.',
                'img' => 'img/img_asset/control panel4.jpg',
                'categories' => 'manufacturing',
                'status' => 'published',
                'client' => 'Toyota Indonesia',
                'year' => '2023',
                'technologies' => ['PLC', 'Robotics', 'SCADA', 'HMI', 'Safety Systems'],
                'is_featured' => true,
            ],
            [
                'title' => 'Thermal Power Plant Control System',
                'description' => 'Advanced control system for 500MW thermal power plant with turbine and grid management. This project required implementing a distributed control system (DCS) that monitors and controls all aspects of power generation including boiler operations, turbine control, and grid synchronization. The system ensures optimal efficiency and safety compliance.',
                'img' => 'img/img_asset/power2.jpg',
                'categories' => 'power-generation',
                'status' => 'published',
                'client' => 'PLN (Perusahaan Listrik Negara)',
                'year' => '2023',
                'technologies' => ['DCS', 'Turbine Control', 'Grid Sync', 'SCADA', 'Safety Systems'],
                'is_featured' => true,
            ],
            [
                'title' => 'Oil Refinery Control & Safety System',
                'description' => 'Comprehensive control system for oil refinery with safety shutdown and monitoring. This critical project involved implementing ATEX-certified control panels for hazardous areas, emergency shutdown (ESD) systems, and fire & gas detection systems. The system ensures maximum safety while maintaining operational efficiency.',
                'img' => 'img/img_asset/control panel.jpg',
                'categories' => 'oil-gas',
                'status' => 'published',
                'client' => 'Pertamina Refinery',
                'year' => '2022',
                'technologies' => ['SIS', 'F&G', 'DCS', 'ATEX', 'Emergency Shutdown'],
                'is_featured' => true,
            ],
            [
                'title' => 'Water Treatment Plant Automation',
                'description' => 'Complete automation system for municipal water treatment plant including chemical dosing, filtration control, and quality monitoring. The system ensures consistent water quality while optimizing chemical usage and energy consumption.',
                'img' => 'img/img_asset/control panel4.jpg',
                'categories' => 'water-treatment',
                'status' => 'published',
                'client' => 'PDAM Jakarta',
                'year' => '2023',
                'technologies' => ['PLC', 'SCADA', 'Chemical Dosing', 'Quality Monitoring'],
                'is_featured' => false,
            ],
            [
                'title' => 'Building Automation System',
                'description' => 'Smart building control system for commercial complex including HVAC, lighting, security, and energy management. The system provides centralized control and monitoring while optimizing energy consumption and occupant comfort.',
                'img' => 'img/img_asset/control panel.jpg',
                'categories' => 'building-automation',
                'status' => 'published',
                'client' => 'Jakarta Business Center',
                'year' => '2023',
                'technologies' => ['BMS', 'HVAC Control', 'Lighting Control', 'Security Integration'],
                'is_featured' => false,
            ],
            [
                'title' => 'Food Processing Line Control',
                'description' => 'Specialized control system for food processing line with strict hygiene requirements and temperature control. The system ensures food safety compliance while maintaining production efficiency.',
                'img' => 'img/img_asset/power2.jpg',
                'categories' => 'manufacturing',
                'status' => 'published',
                'client' => 'Indofood CBP',
                'year' => '2022',
                'technologies' => ['PLC', 'Temperature Control', 'Hygiene Systems', 'Quality Control'],
                'is_featured' => false,
            ],
            [
                'title' => 'Offshore Platform Control System',
                'description' => 'ATEX-certified control system for offshore oil platform with emergency shutdown and fire protection systems. This project required specialized equipment for harsh marine environment conditions.',
                'img' => 'img/img_asset/control panel4.jpg',
                'categories' => 'oil-gas',
                'status' => 'published',
                'client' => 'Chevron Indonesia',
                'year' => '2022',
                'technologies' => ['ATEX', 'Marine Grade', 'Emergency Systems', 'Remote Monitoring'],
                'is_featured' => true,
            ],
            [
                'title' => 'Renewable Energy Grid Integration',
                'description' => 'Control system for solar and wind energy integration into existing power grid with smart grid capabilities and energy storage management.',
                'img' => 'img/img_asset/power2.jpg',
                'categories' => 'renewable-energy',
                'status' => 'published',
                'client' => 'Green Energy Solutions',
                'year' => '2023',
                'technologies' => ['Smart Grid', 'Energy Storage', 'Renewable Integration', 'Grid Management'],
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
