<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wardboy>
 */
class WardboyFactory extends Factory
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
            'date_of_birth'=>$this->faker->birthDate(),
            'gender'=>$this->faker->gender(),
            'department_id'=>$this->faker->id(),
            'designation'=>$this->faker->designation(),
            'degree'=>$this->faker->degree(),
            'details'=>$this->faker->details(),
            'password'=>$this->faker->password(),
            'image'=>$this->faker->image('public/uploads/doctors',640,480, null, false),
        ];
    }
}
