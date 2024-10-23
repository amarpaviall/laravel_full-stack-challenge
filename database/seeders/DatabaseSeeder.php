<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class]); // insert userseeder data into db
        $this->call([CompanySeeder::class]); // insert companyseeder data into db
        $this->call([JobsSeeder::class]); // insert jobseeder data into db
    }
}
