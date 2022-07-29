<?php

namespace Database\Seeders;

use App\Enums\InstitutionType;
use Illuminate\Database\Seeder;
use App\Enums\InstitutionSubType;
use App\Enums\StudyType;
use App\Models\Enums\StationType;
use App\Models\Hospital;
use App\Models\School;
use App\Models\Setting;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class SanjiwaniSeeder extends Seeder
{
    private $hospitalId = 1;

    public function run()
    {
        DB::table('hospitals')->insert([
            'id' => $this->hospitalId,
            'name' => 'Sanjiwani, RS',
        ]);

        $stations = [
            100 => 'Bedah',
            101 => 'Obgyn',
            102 => 'Anak',
            103 => 'Interna',
            104 => 'Neurologi',
            105 => 'Dermatovenerology',
            106 => 'THT',
            107 => 'Mata',
            108 => 'Jiwa',
            109 => 'Anestesi',
            110 => 'Radiologi',
            111 => 'Paru',
        ];
        foreach ($stations as $id => $type) {
            DB::table('stations')->insert([
                'id' => $id,
                'type' => $type,
                'hospital_id' => $this->hospitalId,
            ]);
            Teacher::factory()->count(3)->create([
                'station_id' => $id,
                'study_type' => StudyType::Koas,
            ]);
        }

        $this->createStationScheduleSetting();

        School::factory()->create([
            'name' => 'SMK 1',
        ]);

        /** @var Institution */
        $school = school::factory()->create([
            'name' => 'Warmadewa, Universitas',
        ]);
    }

    public function createStationScheduleSetting()
    {
        // koas
        // Bedah; selama 10 minggu:
        // Obgyn: selama 10 minggu:
        // Anak; selama 10 minggu:
        // Interna:  selama 10 minggu:
        // Neurologi: selama 8 minggu:
        // Dermatovenerology:   selama 6 minggu
        // THT: selama 6 minggu;
        // Mata: selama 6 minggu;
        // Jiwa: selama 6 minggu;
        // Anestesi: 4 minggu:
        // Radiologi: 4 minggu:
        $koasStationScheduleWeek = [
            StationType::Bedah->value => 10,
            StationType::Bedah->value => 10,
            StationType::Obgyn->value => 10,
            StationType::Anak->value => 10,
            StationType::Interna->value => 10,
            StationType::Neurologi->value => 8,
            StationType::Dermatovenerology->value => 6,
            StationType::THT->value => 6,
            StationType::Mata->value => 6,
            StationType::Jiwa->value => 6,
            StationType::Anestesi->value => 4,
            StationType::Radiologi->value => 4,
        ];
        $setting = Setting::where('key', Setting::KOAS_SCHEDULE_WEEK)->first();
        $setting->value = json_encode($koasStationScheduleWeek);
        $setting->save();
    }
}
