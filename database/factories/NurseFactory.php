<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class NurseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'username'=>$this->faker->userName(),
            'email'=>$this->faker->email(),
            'password'=>bcrypt('1234'),
            'gender'=>$this->faker->randomElement(['Male','Female']),
            'mobile'=>$this->faker->phoneNumber(),
            'role_id'=>$this->faker->default('nurse'),
        ];
    }
}
