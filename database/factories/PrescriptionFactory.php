<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'unique_patient_id'=>strtoupper(Str::random(10)),
            'doctor_id'=>$this->faker->numberBetween(1,5),
            'weight'=>$this->faker->numberBetween(40,90),
            'blood_pressure'=>$this->faker->numberBetween(100,200),
            'reference'=>$this->faker->name(),
            'type'=>$this->faker->randomElement(['New','Old']),
            'complain'=>$this->faker->text(),
            'insurance'=>$this->faker->randomElement(['Health','IFIC','BUPA']),
            'medicine_id'=>$this->faker->numberBetween(1,5),
            'medicine_type'=>$this->faker->randomElement(['tablet','liquid']),
            'medicine_instruction'=>$this->faker->text(),
            'days'=>$this->faker->numberBetween(1,20),
            'test_id'=>$this->faker->numberBetween(1,5),
            'test_instruction'=>$this->faker->text(),
            'fees'=>500,
            'patient_note'=>$this->faker->text(),







        ];
    }
}
