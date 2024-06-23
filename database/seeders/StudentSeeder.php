<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Address;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()
            ->count(10)
            ->hasAddress(1)
            ->create();
    }
}
