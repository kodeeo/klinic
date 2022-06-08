<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wardboy>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),   
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'date_of_birth'=>$this->faker->date(),
            'gender'=>$this->faker->randomElements(['male', 'female'])[0],
            'department_id'=>$this->faker->numerify('##########'),
            'designation'=>$this->faker->text(),
            'degree'=>$this->faker->text(),
            'details'=>$this->faker->text(),
            'password'=>$this->faker->password(),
            'image'=>$this->faker->image('public/uploads/doctors',640,480, null, false),
        ];
    }
}
