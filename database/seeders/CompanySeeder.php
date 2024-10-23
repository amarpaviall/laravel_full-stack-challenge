<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data into company table
        DB::table('companies')->insert([
            [
                'name' => 'Wise Publishing',
                'location' => 'Toronto',
                'description' => 'The Wise Publishing team consists of homeowners, recent graduates, parents, newlyweds and investors saving for retirement, so we get it. We know how important it is to understand personal finance.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RBC',
                'location' => 'Toronto',
                'description' => 'Royal Bank of Canada is a Canadian multinational financial services company and the largest bank in Canada by market capitalization. The bank serves over 20 million clients and has more than 100,000 employees worldwide.',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
