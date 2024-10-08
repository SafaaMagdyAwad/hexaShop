<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\JobData;
use App\Models\SocialLink;
use App\Models\Subscribe;
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
        JobData::factory(10)->create();
        Employee::factory(10)->create();
        SocialLink::factory(10)->create();
        Subscribe::factory(10)->create();


    }
}
