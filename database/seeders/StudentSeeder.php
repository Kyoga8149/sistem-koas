<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Station;
use App\Models\Student;
use App\Enums\StudyType;
use App\Models\Institution;
use App\Enums\InstitutionType;
use Illuminate\Database\Seeder;
use App\Enums\InstitutionSubType;
use App\Models\Hospital;
use App\Models\School;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = Hospital::first();
        $school = School::first();

        // students
        /** @var Group */
        $koas1 = Group::factory()->create([
            'name' => 'Koas Group 1',
            'study_type' => StudyType::Clerkship,
            'school_id' => $school->id,
        ]);

        $students = Student::factory()->count(10)->create([
            'school_id' => $school->id,
            'group_id' => $koas1->id,
        ]);
    }
}
