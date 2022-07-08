<?php

namespace Database\Factories;

use App\Enums\InstitutionSubType;
use App\Enums\InstitutionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Institution>
 */
class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'type' => InstitutionType::School->value,
            'subtype' => InstitutionSubType::University->value,
        ];
    }
}
