<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->name,
            'last_name'=>$this->faker->lastName,
            'username'=>$this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'=>bcrypt('1234'),
            'gender'=>$this->faker->randomElement(['Male','Female']),
            'mobile'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address(),
            'date_of_birth'=>$this->faker->date(),
            'remember_token' => Str::random(10),
            'role_id'=>$this->faker->numberBetween(2,4),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
