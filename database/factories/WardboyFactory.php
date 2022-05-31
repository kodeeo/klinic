<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
           'contact'=>$this->faker->phoneNumber(),
           'address'=>$this->faker->address(),
           'joinDate'=>$this->faker->date(),
           'hrs'=>$this->faker->time(),
           'image'=>$this->faker->image('public/uploads/',640,480, null, false),
        ];
    }
}
