<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'PLC & HMI Programming',
                'description' => 'Advanced PLC programming and HMI design for seamless industrial automation and process control with intuitive operator interfaces. Our PLC & HMI Programming services provide comprehensive automation solutions for industrial processes. We specialize in designing, programming, and implementing control systems using leading brands like Siemens, Allen-Bradley, and Schneider Electric.',
                'img' => 'img/epbox/gambar4.png',
                'categories' => 'automation',
                'status' => 'published',
                'client' => 'Industrial Clients',
                'year' => '2024',
                'technologies' => ['PLC', 'HMI', 'SCADA', 'Automation', 'Control Systems'],
                'is_featured' => true,
            ],
            [
                'title' => 'Power Distribution Systems',
                'description' => 'Central system for safe, consistent electrical energy distribution across facilities with premium protection devices. Our Power Distribution Systems ensure reliable and safe electrical energy distribution throughout your facility. We design and implement comprehensive power distribution solutions that meet international standards.',
                'img' => 'img/epbox/gambar2.png',
                'categories' => 'power-systems',
                'status' => 'published',
                'client' => 'Power Utilities',
                'year' => '2024',
                'technologies' => ['Power Distribution', 'MCC', 'Protection', 'Switchgear', 'UPS'],
                'is_featured' => true,
            ],
            [
                'title' => 'Motor Control Center (MCC)',
                'description' => 'Centralized solution for managing and protecting electric motors with integrated starters, VFDs, and automation hardware. Our Motor Control Centers provide centralized control and protection for electric motors in industrial applications. We design and manufacture MCCs that integrate motor starters, variable frequency drives, and automation hardware.',
                'img' => 'img/epbox/gambar3.png',
                'categories' => 'motor-control',
                'status' => 'published',
                'client' => 'Manufacturing Industries',
                'year' => '2024',
                'technologies' => ['MCC', 'VFD', 'Motor Control', 'Starters', 'Protection'],
                'is_featured' => true,
            ],
            [
                'title' => 'SCADA Systems',
                'description' => 'Real-time monitoring and control systems for industrial processes with advanced data acquisition and visualization. Our SCADA (Supervisory Control and Data Acquisition) systems provide comprehensive monitoring and control capabilities for industrial processes. We implement advanced data acquisition, real-time visualization, and remote control solutions.',
                'img' => 'img/epbox/gambar4.png',
                'categories' => 'scada',
                'status' => 'published',
                'client' => 'Process Industries',
                'year' => '2024',
                'technologies' => ['SCADA', 'HMI', 'Data Acquisition', 'Monitoring', 'Control'],
                'is_featured' => true,
            ],
            [
                'title' => 'Safety Systems',
                'description' => 'Emergency shutdown systems, fire & gas detection, and safety control panels meeting international standards. Our Safety Systems provide comprehensive protection for personnel and equipment in hazardous industrial environments. We design and implement emergency shutdown systems, fire and gas detection systems, and safety instrumented systems.',
                'img' => 'img/epbox/gambar2.png',
                'categories' => 'safety',
                'status' => 'published',
                'client' => 'Oil & Gas Industry',
                'year' => '2024',
                'technologies' => ['ESD', 'F&G', 'SIS', 'Safety', 'ATEX'],
                'is_featured' => true,
            ],
            [
                'title' => 'Custom Control Panels',
                'description' => 'Bespoke control panel solutions designed and manufactured to meet specific industrial requirements and standards. Our Custom Control Panels are designed and manufactured to meet your specific industrial requirements. We provide complete solutions from design and engineering to fabrication, assembly, and testing.',
                'img' => 'img/epbox/gambar3.png',
                'categories' => 'control-panels',
                'status' => 'published',
                'client' => 'Various Industries',
                'year' => '2024',
                'technologies' => ['Custom Design', 'Panel Fabrication', 'Assembly', 'Testing', 'Documentation'],
                'is_featured' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
