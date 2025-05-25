<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $programs = [
            [
                'title' => 'Web Development Fundamentals',
                'slug' => 'web-development-fundamentals',
                'description' => 'Learn HTML, CSS, JavaScript and PHP to build modern, responsive websites from scratch.',
                'category' => 'Programming',
                'price' => 2500000,
                'duration_weeks' => 12,
                'image_path' => 'images/programs/web-dev.jpg',
            ],
            [
                'title' => 'Advanced Excel for Professionals',
                'slug' => 'advanced-excel-for-professionals',
                'description' => 'Master complex formulas, pivot tables, macros, and data analysis tools in Microsoft Excel.',
                'category' => 'Microsoft Office',
                'price' => 1800000,
                'duration_weeks' => 8,
                'image_path' => 'images/programs/excel.jpg',
            ],
            [
                'title' => 'Laravel Application Development',
                'slug' => 'laravel-application-development',
                'description' => 'Build robust web applications using Laravel, the popular PHP framework with MVC architecture.',
                'category' => 'Framework',
                'price' => 3200000,
                'duration_weeks' => 16,
                'image_path' => 'images/programs/laravel.jpg',
            ],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}