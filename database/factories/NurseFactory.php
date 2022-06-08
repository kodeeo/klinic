<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nurse>
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
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'address'=>$this->faker->address(),
            'password'=>$this->faker->password(),
            'image'=>$this->faker->image('public/uploads/',640,480, null, false)
        ];
    }
}
