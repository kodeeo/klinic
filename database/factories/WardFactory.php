<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ward>
 */
class WardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ward_type'=>$this->faker->randomElements(['male', 'female'])[0],
            'ward_number'=>$this->faker->randomElements(['1', '2','3','4','5'])[0],
            'bed_number'=>$this->faker->randomElements(['1', '2','3','4','5'])[0],
        ];
    }
}
