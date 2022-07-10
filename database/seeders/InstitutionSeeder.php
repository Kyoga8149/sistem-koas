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

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospital = Institution::factory()->create([
            'name' => 'Sanjiwani, RS',
            'type' => InstitutionType::Healthcare->value,
            'subtype' => InstitutionSubType::Hospital->value,
        ]);

        Institution::factory()->create([
            'name' => 'Sanglah, RS',
            'type' => InstitutionType::Healthcare->value,
            'subtype' => InstitutionSubType::Hospital->value,
        ]);

        Institution::factory()->create([
            'name' => 'SMK 1',
            'type' => InstitutionType::School->value,
            'subtype' => InstitutionSubType::SMK->value,
        ]);

        /** @var Institution */
        $school = Institution::factory()->create([
            'name' => 'Warmadewa, Universitas',
            'type' => InstitutionType::School->value,
            'subtype' => InstitutionSubType::University->value,
        ]);

        // students
        $this->seedStudentGroups($hospital, $school);

        // Station
        $this->seedStations($hospital);
    }

    public function seedStations(Institution $hospital)
    {
        $stations = [
            'Bedah',
            'Obgyn',
            'Anak',
            'Interna',
            'Neurologi',
            'Dermatovenerology',
            'THT',
            'Mata',
            'Jiwa',
            'Anestesi',
            'Radiologi',
            'Paru',
        ];
        foreach ($stations as $name) {
            Station::factory()->create([
                'hospital_id' => $hospital->id,
                'name' => $name,
                'key' => strtolower($name),
            ]);
        }
    }

    public function seedStudentGroups(Institution $hospital, Institution $school)
    {
        /** @var Group */
        $koas1 = Group::factory()->create([
            'name' => 'Koas Group 1',
            'study_type' => StudyType::Clerkship,
            'sender_id' => $school->id,
        ]);

        $students = Student::factory()->count(10)->create([
            'institution_id' => $school->id,
        ]);

        foreach ($students as $student) {
            $koas1->students()->attach($student, [
                'status' => 'complete',
            ]);
        }
    }
}
