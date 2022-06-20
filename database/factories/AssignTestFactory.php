<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignTest>
 */
class AssignTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_id'=>strtoupper(Str::random(10)),
            'test_id'=>$this->faker->numberBetween(1,5),
            'note'=>$this->faker->text(),
            'assigned_by'=>$this->faker->randomElement(['Admin','Nurse','Manager']),
        ];
    }
}
