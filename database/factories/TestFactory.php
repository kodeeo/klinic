<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'test_category_id'=>1,
            'name'=>$this->faker->name(),
            'procedure'=>$this->faker->text(),
            'price'=>100,
            'description'=>$this->faker->text(),
        ];
    }
}
