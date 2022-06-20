<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'department_id'=>$this->faker->numberBetween(1,5),
            'doctor_id'=>$this->faker->numberBetween(1,5),
            'appointment_id'=>Str::random(10),
            'patient_id'=>Str::random(10),
            'date'=>$this->faker->date(),
            'problem'=>$this->faker->text(),
            'status'=>$this->faker->randomElement(['Active','Inactive']),
        ];
    }
}
