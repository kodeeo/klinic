<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
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
            'description'=>$this->faker->text(),
            'service_id'=>$this->faker->numberBetween(1,5),
            'service_quantity'=>$this->faker->numberBetween(1,5),
            'service_rate'=>$this->faker->numberBetween(500,2000),
            'discount'=>$this->faker->numberBetween(500,2000),
            'status'=>$this->faker->randomElement(['Active','Inactive']),
        ];
    }
}
