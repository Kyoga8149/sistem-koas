<?php

namespace Database\Seeders;

use App\Enums\StudyType;
use App\Models\Grading;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Kompetensi Buku Log',
            'Tutorial Klinik',
            'Refleksi Kasus',
            'Laporan Kasus',
            'Journal Reading',
            'Mini Ce-X',
            'Ujian Lisan',
            'Nilai Akhir',
        ];
        foreach ($titles as $title) {
            Grading::factory()->create([
                'name' => $title,
                'study_type' => StudyType::Clerkship,
            ]);
        }
    }
}
