<?php

namespace Database\Factories;

use App\Models\Enums\StationType;
use App\Models\Hospital;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => StationType::Anak,
            'hospital_id' => Hospital::factory(),
        ];
    }
}
