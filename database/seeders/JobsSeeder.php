<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data into job_postings table
        DB::table('job_postings')->insert([
            [
                'company_id' => 1,  // Ensure this company ID exists in the 'companies' table
                'title' => 'Senior PHP Developer',
                'location' => 'Toronto, ON',
                'position_type' => 'Remote',
                'salary' => 80000.00,
                'status' => 1,  // Active status
                'description' => 'We are looking for a Senior PHP Developer with experience in Laravel and Symfony.',
                'created_at' => now(),
            ],
            [
                'company_id' => 2,
                'title' => 'Frontend Developer',
                'location' => 'Vancouver, BC',
                'position_type' => 'Remote',
                'salary' => 50000.00,
                'status' => 1,  // Active status
                'description' => 'Join our team as a Frontend Developer, working with React and Vue.js.',
                'created_at' => now(),
            ],
            [
                'company_id' => 1,
                'title' => 'Full Stack Developer',
                'location' => 'Scarborough',
                'position_type' => 'Remote',
                'salary' => 12000.00,
                'status' => 1,  // Active status
                'description' => 'We are seeking a Full Stack Developer for a 6-month contract role.',
                'created_at' => now(),
            ],
            [
                'company_id' => 2,
                'title' => 'DevOps Engineer',
                'location' => 'Montreal, QC',
                'position_type' => 'In-person',
                'salary' => 90000.00,
                'status' => 1,  // Active status
                'description' => 'Looking for an experienced DevOps Engineer to manage cloud infrastructure.',
                'created_at' => now(),
            ],
        ]);
    }
}
