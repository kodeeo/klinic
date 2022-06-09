<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
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
            'category_id'=>$this->faker->numberBetween(1,5),
            'price'=>$this->faker->numerify('##'),
            'manufactured_by'=>$this->faker->text(),
            'description'=>$this->faker->text(),
        ];
    }
}
