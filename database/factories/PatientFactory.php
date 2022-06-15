<?php

namespace Database\Factories;

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
            'first_name'=>$this->faker->name(),
            'last_name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'password'=>bcrypt('1234'),
            'date_of_birth'=>$this->faker->date(),
            'gender'=>$this->faker->randomElements(['male', 'female'])[0],
            'address'=>$this->faker->text(),
            'blood_group'=>$this->faker->text(),
            'phoneNumber'=>$this->faker->phoneNumber(),
            'patient_image'=>$this->faker->image('public/uploads/patients',640,480, null, false),
        ];
    }
}
