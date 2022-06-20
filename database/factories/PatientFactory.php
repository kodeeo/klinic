<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wardboy>
 */
class PatientFactory extends Factory
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
            'first_name'=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'password'=>bcrypt('1234'),
            'date_of_birth'=>$this->faker->date(),
            'gender'=>$this->faker->randomElements(['male', 'female'])[0],
            'address'=>$this->faker->address(),
            'blood_group'=>$this->faker->bloodGroup(),
            'mobile'=>$this->faker->phoneNumber(),
            'patient_image'=>$this->faker->image('public/uploads/patients',640,480, null, false),
        ];
    }
}
