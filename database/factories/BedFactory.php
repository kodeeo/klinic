<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bed>
 */
class BedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->randomElement(['covid','ac,non-ac']),
            'description'=>$this->faker->text(), 
            'capacity'=>$this->faker->numberBetween(1,500), 
            'charge'=>$this->faker->numberBetween(100,500),
        ];
    }
}
