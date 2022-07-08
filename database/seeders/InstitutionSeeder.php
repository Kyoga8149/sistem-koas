<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Institution;
use App\Enums\InstitutionType;
use Illuminate\Database\Seeder;
use App\Enums\InstitutionSubType;
use App\Enums\StudyType;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        Student::factory()->count(10)->create([
            'institution_id' => $school->id,
        ]);


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
}
