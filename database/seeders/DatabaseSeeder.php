<?php

namespace Database\Seeders;

use App\Models\ExamResult;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TestSeeder::class);
        $this->call(ExaminationSeeder::class);
        $this->call(LaboratSeeder::class);
        $this->call(SampleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ExamResultSeeder::class);
    }
}
