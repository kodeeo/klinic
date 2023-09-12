<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignBed>
 */
class AssignBedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_id'=>strtoupper(Str::random(10)),
            'bed_id'=>$this->faker->numberBetween(1,5),
            'ward_id'=>$this->faker->numberBetween(1,5),
            'assign_date'=>$this->faker->date(),
            'description'=>$this->faker->text(),
        ];
    }
}
        
            
            
