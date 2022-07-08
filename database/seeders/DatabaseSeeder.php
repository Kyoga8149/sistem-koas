<?php

namespace Database\Seeders;

use App\Models\Grading;
use App\Models\Institution;
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
        $this->call(AdminSeeder::class);
        $this->call(InstitutionSeeder::class);
        $this->call(GradingSeeder::class);
    }
}
